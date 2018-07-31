<?php

namespace App\Http\Controllers;

use App\url;
use Illuminate\Http\Request;

class UrlController extends Controller
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
    public function create(Request $request)
    {
      $this->validate($request, [
            'long_url' => 'required',
        ]);

        // url::create($request->all());

        //creating an object of model for data collections
        $url = new url;
        //generating 6 digits random character to be used in the URL
        $id = ID_Gen::quickRandom();
        // Collecting data from the form
        $long_url = $request->input('long_url');
        //Validating URL the user entered
        $validate_url = URL_Filter::validate_url($long_url);
        if ($validate_url==true){
          $new_url = 'http://127.0.0.1:8000/'.$id;
          $url -> new_url = $new_url;
          $url -> long_url = $long_url;

          $url->save();
          \Session::flash('flash_message','URL Shortened and Saved ');
          return view('default')->with('new_url',$new_url);

        }
        else{
          return view('dirt');
        }

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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\url  $url
     * @return \Illuminate\Http\Response
     */
    public function show(url $url)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\url  $url
     * @return \Illuminate\Http\Response
     */
    public function edit(url $url)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\url  $url
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, url $url)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\url  $url
     * @return \Illuminate\Http\Response
     */
    public function destroy(url $url)
    {
        //
    }
}
