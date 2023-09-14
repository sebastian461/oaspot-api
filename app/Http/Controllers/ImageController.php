<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    //
    $images = Image::all();

    return $images;
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
    $image = Image::create([
      'image_name' => $request->image_name,
      'parking_id' => $request->parking_id,
      'image_address' => $request->image_address,
    ]);

    $image->save();
    $data = [
      'message' => 'Image was created successfully',
      'image' => $image,
    ];

    return response()->json($data);
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    //
    $image = Image::find($id);

    return $image;
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
    $image = Image::find($id);
    $image->delete();

    $data = [
      'message' => 'Image was deleted successfully',
      'image' => $image,
    ];

    return response()->json($data);
  }
}
