<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    //
    $roles = Rol::all();

    return $roles;
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
    $rol = Rol::create([
      'rol_name' => $request->rol_name,
      'rol_description' => $request->rol_description,
    ]);

    $rol->save();
    $data = [
      'message' => 'Rol was created successfully',
      'rol' => $rol,
    ];

    return response()->json($data);
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    //
    $rol = Rol::find($id);

    return $rol;
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
    $rol = Rol::find($id);
    $rol->rol_description = $request->rol_description;
    $rol->save();
    $data = [
      'message' => 'Rol was updated successfully',
      'rol' => $rol,
    ];

    return response()->json($data);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    //
  }
}
