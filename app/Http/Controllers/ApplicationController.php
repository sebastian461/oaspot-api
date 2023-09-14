<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    //
    $applications = Application::all();

    return $applications;
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
    $application = Application::create([
      'parking_id' => $request->parking_id,
    ]);

    $application->save();
    $data = [
      'message' => 'Application was created successfully',
      'application' => $application,
    ];

    return response()->json($data);
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    //
    $application = Application::find($id);

    return $application;
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
    $application = Application::find($id);

    $application->application_status = $request->application_status;
    $application->save();

    $data = [
      'message' => 'Application was updated successfully',
      'application' => $application,
    ];

    return response()->json($data);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    //
    $application = Application::find($id);

    $application->application_delete = true;
    $application->save();

    $data = [
      'message' => 'Application was delete successfully',
      'application' => $application,
    ];

    return response()->json($data);
  }
}
