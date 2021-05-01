<?php

namespace App\Http\Controllers;

use App\Skills;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = Skills::paginate(2);

        return view('skills.index', compact('skills'));

        // $skills = DB::table('skills')->paginate(2);

        // return view('skills.index', ['skills' => $skills]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('skills.create');
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
            'name'=>'required',
            'experties'=> 'required',
            'level' => 'required'
        ]);
        $skills = new Skills([
            'name' => $request->get('name'),
            'experties'=> $request->get('experties'),
            'level'=> $request->get('level')
        ]);
        $skills->save();
        return redirect('/skills')->with('success', 'Stock has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Skills  $skills
     * @return \Illuminate\Http\Response
     */
    public function show(Skills $skills)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Skills  $skills
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $skills = Skills::find($id);

        return view('skills.edit', compact('skills'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Skills  $skills
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'experties'=> 'required',
            'level' => 'required'
        ]);

        $skills = Skills::find($id);
        $skills->name = $request->get('name');
        $skills->experties = $request->get('experties');
        $skills->level = $request->get('level');
        $skills->save();

        return redirect('/skills')->with('success', 'Stock has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Skills  $skills
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $skills = Skills::find($id);
        $skills->delete();

        return redirect('/skills')->with('success', 'Skills has been deleted Successfully');
    }

    /**
     * return listing to api
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllSkills()
    {
        $skills = Skills::all();

        return response()->json($skills);
    }
}
