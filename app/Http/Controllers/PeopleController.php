<?php

namespace App\Http\Controllers;

use App\People;
use Illuminate\Http\Request;
use App\Http\Requests\PeopleRequest;



class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $peoples = People::orderBy('id', 'DESC')->paginate(10);
        return view('peoples.index',compact('peoples','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('peoples.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PeopleRequest $request)
    {
        $people = new People;

        $people->name  = $request->name;
        $people->email = $request->email;
        $people->save();

        return redirect()->route('peoples.index')->with('info', 'People Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\People  $people
     * @return \Illuminate\Http\Response
     */
    public function show(People $people)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\People  $people
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $people = People::find($id);
        return view('peoples.edit', compact('people'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\People  $people
     * @return \Illuminate\Http\Response
     */
    public function update(PeopleRequest $request, $id)
    {
        $people = People::find($id);

        $people->name  = $request->name;
        $people->email = $request->email;
      
        $people->save();

        return redirect()->route('peoples.index')->with('info', 'People Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\People  $people
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $people = People::find($id);
        $people->delete();
        return back()->with('warning', 'People Deleted Successfully');
    }
}