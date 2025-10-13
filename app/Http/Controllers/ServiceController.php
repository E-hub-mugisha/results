<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    // Display a listing of the services
    public function index()
    {
        $services = Service::all();
        return view('services.index', compact('services')); // Adjust the view path as needed
    }

    // Show the form for creating a new service
    public function create()
    {
        return view('services.create'); // Adjust the view path as needed
    }

    // Store a newly created service in storage
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
        ]);

        Service::create($request->all());

        return redirect()->route('services.index')->with('success', 'Service created successfully.');
    }

    // Display the specified service
    public function show(Service $service)
    {
        return view('services.show', compact('service')); // Adjust the view path as needed
    }

    // Show the form for editing the specified service
    public function edit(Service $service)
    {
        return view('services.edit', compact('service')); // Adjust the view path as needed
    }

    // Update the specified service in storage
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
        ]);

        $service->update($request->all());

        return redirect()->route('services.index')->with('success', 'Service updated successfully.');
    }

    // Remove the specified service from storage
    public function destroy(Service $service)
    {
        $service->delete();

        return redirect()->route('services.index')->with('success', 'Service deleted successfully.');
    }
}
