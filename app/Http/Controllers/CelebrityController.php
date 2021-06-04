<?php

namespace App\Http\Controllers;

use App\Models\Celebrity;
use Illuminate\Http\Request;

class CelebrityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $celebrities = Celebrity::latest()->paginate(3);
        return view('celebrities.index', compact('celebrities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('celebrities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $celebrityData = $request->validate([
            'celebrity' => ['required', 'max:255'],
            'residence' => ['required'],
            'citizenship' => ['required'],
            'image' => ['required', 'image', 'mimes:jpeg,jpg,png', 'max:2048']
        ]);

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $celebrityData['image'] = "$profileImage";
        }

        Celebrity::create($celebrityData);

        return redirect()->route('celebrities.index')->with('success', 'New Celebrity added successfully! ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Celebrity  $celebrity
     * @return \Illuminate\Http\Response
     */
    public function show(Celebrity $celebrity)
    {
        return view('celebrities.show', compact('celebrity'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Celebrity  $celebrity
     * @return \Illuminate\Http\Response
     */
    public function edit(Celebrity $celebrity)
    {
        return view('celebrities.edit', compact('celebrity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Celebrity  $celebrity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Celebrity $celebrity)
    {
        $celebrityData = $request->validate([
            'celebrity' => ['required', 'max:255'],
            'residence' => ['required'],
            'citizenship' => ['required'],
            'image' => ['required', 'image', 'mimes:jpeg,jpg,png', 'max:2048']
        ]);

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $celebrityData['image'] = "$profileImage";
        } else {
            unset($celebrityData['image']);
        }

        $celebrity->update($celebrityData);

        return redirect()->route('celebrities.index')->with('success', 'Celebrity info updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Celebrity  $celebrity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Celebrity $celebrity)
    {
        $celebrity->delete();

        return redirect()->route('celebrities.index')->with('success', 'Celebrity removed successfully!');
    }
}
