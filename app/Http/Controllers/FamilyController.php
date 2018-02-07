<?php

namespace App\Http\Controllers;

use App\District;
use App\Family;
use App\Member;
use Illuminate\Http\Request;

class FamilyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $familyData = Family::all();

        return view('family.main', compact('familyData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $districtData = District::pluck('district_name','id');

        return view('family.create', compact('districtData'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Family::create($request->all());
        return redirect('family');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $familyData = Family::findOrFail($id);

        // dd($familyData->district->toArray());
        return view('family.detail', compact('familyData'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $familyData = Family::findOrFail($id);

        return view('family.update', compact('familyData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $familyData = Family::findOrFail($id);
        $familyData->update($request->all());
        return redirect('family');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $familyData = Family::findOrFail($id);
        $familyData->delete();
        return redirect('family');
    }
}
