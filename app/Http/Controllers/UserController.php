<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $users = User::all();

    return $users;
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    //
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    $user = User::find($id);

    if (!$user) {
      return response()->json(['message' => 'User not fund']);
    }

    return response()->json($user);
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    //
    $validator = Validator::make($request->all(), [
      'password' => 'required|string|min:8',
    ]);

    if ($validator->fails()) {
      return response()->json($validator->errors());
    }

    $user = User::find($id);
    $user->password = Hash::make($request->password);
    $user->save();

    $data = [
      'message' => 'User was updated successfully',
      'user' => $user,
    ];

    return response()->json($data);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    $user = User::find($id);

    $user->user_delete = true;
    $user->save();
    $data = [
      'message' => 'User was deleted successfully',
      'user' => $user,
    ];

    return response()->json($data);
  }
}
