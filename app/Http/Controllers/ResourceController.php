<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $request->validate([
            'gov_id' => 'required|string',
            'resource_file' => 'required|file', // Make sure 'resource_file' is a file input
        ]);

        // Store the uploaded file in the storage directory
        $filePath = $request->file('resource_file')->store('resource_files');

        // Create a new Resource instance and store the file path
        $resource = new Resource;
        $resource->govorganizationdetail_id = $request->gov_id;
        $resource->resource_file = $filePath; // Store the file path, not the file itself
        $resource->save();

        return redirect("home");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
