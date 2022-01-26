<?php

namespace App\Http\Controllers;

use App\Http\Requests\HomeworkRequest;
use App\Http\Requests\HomeworkUpdateRequest;
use App\Models\Homework;
use Illuminate\Http\Request;

class HomeworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homeworks = Homework::orderBy('name')->get();
        return view('homeworks.index', [ 'homeworks' => $homeworks ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('homeworks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HomeworkRequest $request)
    {
        $adatok = $request->only(['name', 'url', 'grade', 'message']);
        $statue = new Homework();
        $statue->fill($adatok);
        $statue->save();
        return redirect()->route('homeworks.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Homework $homework)
    {
        return view('homeworks.show', ['homework' => $homework]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Homework $homework)
    {
        return view('homeworks.edit', ['homework' => $homework]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(HomeworkUpdateRequest $request, Homework $homework)
    {
        $adatok = $request->only(['grade', 'message']);
        $homework->fill($adatok);
        $homework->save();
        return redirect()->route('homeworks.index', $homework->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Homework $homework)
    {
        $homework->delete();
        return redirect()->route('homeworks.index');
    }
}
