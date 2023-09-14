<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    //
    $persons = Person::all();

    return $persons;
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
    $person = Person::create([
      'person_cedula' => $request->person_cedula,
      'person_name' => $request->person_name,
      'person_lastname' => $request->person_lastname,
      'person_phone' => $request->person_phone,
      'city_id' => $request->city_id,
      'person_address' => $request->person_address,
    ]);

    $person->save();
    $data = [
      'message' => 'Person was created successfully',
      'person' => $person,
    ];

    return response()->json($data);
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    //
    $person = Person::find($id);

    return $person;
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
    $person = Person::find($id);
    $person->person_name = $request->person_name;
    $person->person_lastname = $request->person_lastname;
    $person->person_phone = $request->person_phone;
    $person->city_id = $request->city_id;
    $person->person_address = $request->person_address;

    $person->save();
    $data = [
      'message' => 'Person was updated successfully',
      'person' => $person,
    ];

    return response()->json($data);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    //
    $person = Person::find($id);
    $person->person_delete = true;
    $person->save();
    $data = [
      'message' => 'Person was deleted successfully',
      'person' => $person,
    ];

    return response()->json($data);
  }
}
