<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    //
    $documents = Document::all();

    return $documents;
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
    $document = Document::create([
      'application_id' => $request->application_id,
      'document_name' => $request->document_name,
      'document_address' => $request->document_address
    ]);

    $document->save();
    $data = [
      'message' => 'Document was created successfully',
      'document' => $document,
    ];

    return response()->json($data);
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    //
    $document = Document::find($id);

    return $document;
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
    $document = Document::find($id);

    $document->document_delete = true;
    $document->save();

    $data = [
      'message' => 'Document was deleted successfully',
      'document' => $document,
    ];

    return response()->json($data);
  }
}
