<?php

namespace App\Http\Controllers;

use App\Models\Assemble;
use App\Models\Bom;
use App\Models\Part;
use App\Models\Supplier;
use App\Models\Tasks;
use Illuminate\Http\Request;

class BomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('boms.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $boms = Bom::All();
        $tasks = Tasks::All();
        $parts = Part::All();
        $suppliers = Supplier::All();
        $assembles = Assemble::All();
        return view('boms.create',compact('boms','tasks','parts','suppliers','assembles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validate = $request->validate(
            [
                 'taskid' => 'required',
                 'partid' => 'required',
                 'qty' => 'required',
                 'price' => 'required',
                 'weight' => 'required'
            ]
        );

        Bom::create($validate);

        return Redirect()->back()->with('success', 'bom added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
