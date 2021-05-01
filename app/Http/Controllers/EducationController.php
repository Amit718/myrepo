<?php

namespace App\Http\Controllers;

use App\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	//$educations = Education::with('users')->get();
    	// $educations = Education::get();
    	// foreach ($educations as $value) {
    	// 	echo $value->users->name;
    	// 	echo "<br>";
    	// }

        $education = Education::paginate(2);

        return view('education.index', compact('education'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('education.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'course'=>'required',
            'university'=> 'required',
            'year' => 'required'
        ]);
        $education = new Education([
        	'user_id' => 1,
            'course' => $request->get('course'),
            'university'=> $request->get('university'),
            'year'=> $request->get('year')
        ]);
        $education->save();
        return redirect('/education')->with('success', 'Education has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\education  $education
     * @return \Illuminate\Http\Response
     */
    public function show(Education $education)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\education  $education
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $education = Education::find($id);

        return view('education.edit', compact('education'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\education  $education
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'course'=>'required',
            'university'=> 'university',
            'year' => 'required'
        ]);

        $education = Education::find($id);
        $education->course = $request->get('course');
        $education->university = $request->get('university');
        $education->year = $request->get('year');
        $education->save();

        return redirect('/education')->with('success', 'Education has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\education  $education
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $education = Education::find($id);
        $education->delete();

        return redirect('/education')->with('success', 'Education has been deleted Successfully');
    }

    /**
     * return listing to api
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllEducation()
    {
        $education = Education::all();

        return response()->json($education);
    }
}
