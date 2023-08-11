<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brand = view('brand.addBrand');
        return $brand;
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
            'brand_website' => 'required',
            'brand_create_date' => 'required|date',
        ]);

        $brand = Brand::create($request->all());

        return redirect()->route('showBrand');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        // $brand=Brand::latest()->get();
        $brand = Brand::all();

        return view('brand.showBrand', compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $brand = Brand::findOrFail($id);
        return view('brand.editBrand', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $brand = Brand::findOrFail($id);
        $brand->brand_website = $request->brand_website;
        $brand->brand_create_date = $request->brand_create_date;
        $brand->update();

        return redirect()->route('showBrand');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $brand = Brand::findOrFail($id);
        $brand->delete();

        return redirect()->route('showBrand');
    }
}