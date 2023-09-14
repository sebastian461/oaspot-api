<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    //
    $countries = Country::all();

    return $countries;
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
    $country = Country::create([
      'country_id' => $request->country_id,
      'country_name' => $request->country_name,
      'country_ext' => $request->country_ext
    ]);

    $country->save();
    $data = [
      'message' => 'Country was created successfully',
      'county' => $country,
    ];

    return response()->json($data);
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    //
    $country = Country::find($id);

    return $country;
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
