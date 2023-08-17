<?php

namespace App\Http\Controllers;

use App\Models\Plants;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PlantsController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function index()
    {
        return view('admin.plants.index');
    }

    /**
     * Show the form for creating a new resource.
     */

     public function plantaddpage(){
        return view('admin.plants.create');
     }



    public function addplant(Request $request)
    {
        $validated = $request->validate([
            'plant_name' => 'required|unique:plants|min:4',
            'description' => 'required|unique:plants|min:4',
            'price' => 'required',
            'plant_image' => 'required|unique:plants|mimes:jpg,jpeg,png',
        ]
    );
    
    
    Plants::insert([
        'category_id' => $request->category_id,
        'plant_name' => $request->plant_name,   
        'description' => $request->description,
        'price' => $request->price,
        'plant_image' => $last_img,
        'created_at' => Carbon::now()
        
    ]);
    
    return redirect()->back()->with('success','Plant Inserted Successfully!');


    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
