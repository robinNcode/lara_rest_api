<?php

namespace App\Http\Controllers;

use App\Models\StudentClasses;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class StudentClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Collection
     */
    public function index()
    {
        return DB::table($this->constant->TAB_STUDENT_CLASSES)->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param StudentClasses $studentClasses
     * @return void
     */
    public function show(StudentClasses $studentClasses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param StudentClasses $studentClasses
     * @return void
     */
    public function edit(StudentClasses $studentClasses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param StudentClasses $studentClasses
     * @return void
     */
    public function update(Request $request, StudentClasses $studentClasses)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param StudentClasses $studentClasses
     * @return void
     */
    public function destroy(StudentClasses $studentClasses)
    {
        //
    }
}
