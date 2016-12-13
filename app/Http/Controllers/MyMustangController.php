<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MyMustang;
use Session;


class MyMustangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      /**
      *# Author
      *$authors_for_dropdown = Author::getForDropdown();
      *# Author
      *$tags_for_checkboxes = Tag::getForCheckboxes();
      *return view('stang.create')->with([
      *    'authors_for_dropdown' => $authors_for_dropdown,
      *    'tags_for_checkboxes' => $tags_for_checkboxes
      *]);
      */
      return view('stang.create');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
            'name' => 'required',
            'color' => 'required',
            'horsepower' => 'required|max:1500|min:50|numeric',
            'torque' => 'required|max:1500|min:0|numeric',
            'fuel_economy' => 'required|max:30|min:3|numeric',
        ]);

      $name = $request->input('name'); # Option 2) USE THIS ONE! :)
      $mymustang = new MyMustang();
      $mymustang->name = $request->input('name');
      $mymustang->color = $request->input('color');
      $mymustang->horsepower = $request->input('horsepower');
      $mymustang->torque = $request->input('torque');
      $mymustang->fuel_economy = $request->input('fuel_economy');
      //$book->user_id = $request->user()->id;
      $mymustang->save();
      # Save Tags
      Session::flash('flash_message', 'Your '.$mymustang->name.' was added.');

      return view('stang.save')->with('name', $name);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
      $mymustangs = MyMustang::all();
      return view('stang.show2')->with('mymustangs', $mymustangs);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
      
      $id = $request->input('id');
      $mymustangs = MyMustang::all();
      foreach($mymustangs as $mymustang) {
          if($mymustang->id == $id)
              $must = $mymustang;
      }

      return view('stang.edit')->with('must', $must);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      # Validate
      $this->validate($request, [
            'name' => 'required',
            'color' => 'required',
            'horsepower' => 'required|max:1500|min:50|numeric',
            'torque' => 'required|max:1500|min:0|numeric',
            'fuel_economy' => 'required|max:30|min:3|numeric',
        ]);
      # Find and update book

      $mymustang = MyMustang::find($request->id);
      $mymustang->name = $request->name;
      $mymustang->color = $request->color;
      $mymustang->horsepower = $request->horsepower;
      $mymustang->torque = $request->torque;
      $mymustang->fuel_economy = $request->fuel_economy;
      $mymustang->save();


      # Finish
      Session::flash('flash_message', 'Your changes to '.$mymustang->name.' were saved.');
      return redirect('/');
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
