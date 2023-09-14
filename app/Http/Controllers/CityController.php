<?php

namespace App\Http\Controllers;

use App\Models\City;
use COM;
use Illuminate\Http\Request;

class CityController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    //
    $cities = City::all();

    return $cities;
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
    $city = City::create([
      'city_id' => $request->city_id,
      'country_id' => $request->country_id,
      'city_name' => $request->city_name
    ]);

    $city->save();
    $data = [
      'message' => 'City was created successfully',
      'city' => $city,
    ];

    return response()->json($data);
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    //
    $city = City::find($id);

    return $city;
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
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    //
  }
}
