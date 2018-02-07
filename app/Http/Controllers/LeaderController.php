<?php

namespace App\Http\Controllers;

use App\Area;
use App\District;
use App\Family;
use App\Leader;
use App\Rank;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class LeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leaderData = Leader::all();

        return view('leader.index', compact('leaderData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rankData = Rank::pluck('rank_position', 'id');
        $familyData = Family::pluck('family_name', 'id');
        $districtData = District::pluck('district_name', 'id');
        $areaData = Area::pluck('area_name', 'id');


        return view('leader.create', compact('familyData','districtData','areaData','rankData'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Leader::create($request->all());

        return redirect('leader');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $leaderData = Leader::findOrFail($id);

        return view('leader.detail', compact('leaderData'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $leaderData = Leader::findOrFail($id);
        $rankData = Rank::pluck('rank_position', 'id');
        $familyData = Family::pluck('family_name', 'id');
        $districtData = District::pluck('district_name', 'id');
        $areaData = Area::pluck('area_name', 'id');


        return view('leader.update', compact('leaderData','familyData','districtData','areaData','rankData'));
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
        $leaderData = Leader::findOrFail($id);
        $leaderData->update($request->all());

        return redirect('leader');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $leaderData = Leader::findOrFail($id);
        $leaderData->delete();
        return redirect('leader');
    }
}
