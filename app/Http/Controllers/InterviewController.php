<?php

namespace App\Http\Controllers;

use App\Interview;
use App\People;
use Illuminate\Http\Request;
use App\Http\Requests\InterviewRequest;

class InterviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $interviews = Interview::orderBy('id', 'DESC')->paginate(10);
        return view('interviews.index',compact('interviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $peoples_data = People::Select('id','name')->get();
        $peoples[''] = 'Select People'; 
        foreach ($peoples_data as $people) {
            $peoples[$people->id] = $people->name; 
        }
        return view('interviews.create',compact('peoples'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InterviewRequest $request)
    {
        $intrview = new Interview;
        $intrview->people  = $request->people;
        $intrview->interview_date_time = $request->interview_date_time;
        $intrview->save();

        return redirect()->route('interviews.index')->with('info', 'Inerview Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Interview  $interview
     * @return \Illuminate\Http\Response
     */
    public function show(Interview $interview)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Interview  $interview
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $interview = Interview::find($id);
        $peoples_data = People::Select('id','name')->get();
        $peoples[''] = 'Select People'; 
        foreach ($peoples_data as $people) {
            $peoples[$people->id] = $people->name; 
        }
        return view('interviews.edit', compact('interview','peoples'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Interview  $interview
     * @return \Illuminate\Http\Response
     */
    public function update(InterviewRequest $request, $id)
    {
        $interview = Interview::find($id);

        $interview->people  = $request->people;
        $interview->interview_date_time = $request->interview_date_time;
      
        $interview->save();

        return redirect()->route('interviews.index')->with('info', 'Inerview Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Interview  $interview
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $interview = Interview::find($id);
        $interview->delete();
        return back()->with('warning', 'Interview Deleted Successfully');
    }
}