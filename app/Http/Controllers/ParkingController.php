<?php

namespace App\Http\Controllers;

use App\Models\Parking;
use Illuminate\Http\Request;

class ParkingController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    //
    $parkings = Parking::all();

    return $parkings;
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
    $parking = Parking::create([
      'parking_name' => $request->parking_name,
      'user_id' => $request->user_id,
      'city_id' => $request->city_id,
      'parking_address' => $request->parking_address,
      'parking_description' => $request->parking_description,
      'parking_places' => $request->parking_places,
      'parking_price' => $request->parking_price,
    ]);

    $parking->save();
    $data = [
      'message' => 'Parking was created successfully',
      'parking' => $parking,
    ];

    return response()->json($data);
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    //
    $parking = Parking::find($id);

    return $parking;
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
    $parking = Parking::find($id);
    $parking->parking_name = $request->parking_name;
    $parking->parking_address = $request->parking_address;
    $parking->parking_description = $request->parking_description;
    $parking->parking_places = $request->parking_places;
    $parking->parking_price = $request->parking_price;

    $parking->save();
    $data = [
      'message' => 'Parking was updated successfully',
      'parking' => $parking,
    ];

    return response()->json($data);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    //
    $parking = Parking::find($id);
    $parking->parking_name = true;
    $parking->save();

    $data = [
      'message' => 'Parking was deleted successfully',
      'parking' => $parking,
    ];

    return response()->json($data);
  }
}
