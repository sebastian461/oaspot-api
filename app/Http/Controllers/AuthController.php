<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use \stdClass;

class AuthController extends Controller
{
  //
  public function register(Request $request)
  {
    $validator = Validator::make($request->all(), [
      'person_cedula' => 'required|string|min:10|unique:person',
      'person_name' => 'required|string',
      'person_lastname' => 'required|string',
      'person_phone' => 'required|string|min:10',
      'city_id' => 'required',
      'person_address' => 'required|string',
      'email' => 'required|string|email|max:255|unique:user',
      'password' => 'required|string|min:8',
    ]);

    if ($validator->fails()) {
      return response()->json($validator->errors());
    }

    $person = Person::create([
      'person_cedula' => $request->person_cedula,
      'person_name' => $request->person_name,
      'person_lastname' => $request->person_lastname,
      'person_phone' => $request->person_phone,
      'city_id' => $request->city_id,
      'person_address' => $request->person_address
    ]);

    $user = User::create([
      'email' => $request->email,
      'person_cedula' => $request->person_cedula,
      'password' => Hash::make($request->password)
    ]);

    $token = $user->createToken('auth_token')->plainTextToken;

    return response()->json([
      'data' => $user,
      'access_token' => $token,
      'token_type' => 'Bearer'
    ]);
  }

  public function login(Request $request)
  {
    if (!Auth::attempt($request->only('email', 'password'))) {
      return response()->json(['message' => 'Unauthorized'], 401);
    }

    $user = User::where('email', $request['email'])->firstOrFail();

    $token = $user->createToken('auth_token')->plainTextToken;

    return response()->json([
      'message' => 'Hi ' . $user->email,
      'accessToken' => $token,
      'token_type' => 'Bearer',
      'user' => $user,
    ]);
  }

  public function logout(Request $request)
  {
    $request->user()->tokens()->delete();

    return [
      'message' => 'You have successfully logged out and the token was successfully deleted'
    ];
  }
}
