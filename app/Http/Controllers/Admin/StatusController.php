<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $status = Status::all();
        return view('Admin.status.index', compact('status'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.status.crate', compact('status'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:statuses'
        ]);

        Status::create($request->all());

        return redirect()->route('admin.status.index')->with('success', 'Status created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Status $status)
    {
        return view('Admin.status.show', compact('status'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Status $status)
    {
        return view('Admin.status.edit', compact('status'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Status $status)
    {
        $request->validate([
            'name' => 'required|unique:statuses'
        ]);

        $status->update($request->all());

        return redirect()->route('admin.status.index')->with('success', 'status updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Status $status)
    {
        $status->delete();

        return redirect()->route('admin.status.index')->with('success', 'status deleted successfully');
    }
}
