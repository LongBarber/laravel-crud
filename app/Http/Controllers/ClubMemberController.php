<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ClubMember;

class ClubMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clubs = ClubMember::All();
        //if api
        //return response()->json(['barangays' => $barangays], 200);
        return view('clubs.index', compact('clubs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clubs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'club' => 'required',
            'city' => 'required',
            'telephone' => 'numeric',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $logoImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $logoImage);
            $input['image'] = "$logoImage";
        }
        ClubMember::create($input);
        return redirect()->route('clubs.index')
            ->with('success','Club Member added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(ClubMember $club)
    {
        return view('clubs.show', compact('club'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ClubMember $club)
    {
        return view('clubs.edit', compact('club'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ClubMember $club)
    {
        $request->validate([
            'name' => 'required',
            'club' => 'required',
            'city' => 'required',
            'telephone' => 'numeric',
        ]);

        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $logoImage = date('YmdHis') . "." . $image->getClientOriginalName();
            $image->move($destinationPath, $logoImage);
            $input['image'] = "$logoImage";
        } else {
            unset($input['image']);
        }
        $club->update($input);
        return redirect()->route('clubs.index')
            ->with('success','Club Member updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ClubMember $club)
    {
        $club->delete();
        return redirect()->route('clubs.index')
            ->with('success', 'Club Member deleted successfully');
    }
}
