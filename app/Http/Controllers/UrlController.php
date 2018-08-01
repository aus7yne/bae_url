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
        
        // Collecting data from the form
        $long_url = $request->input('long_url');
        $custom_url = $request->input('custom_url');
        
        //Validating URL the user entered
        $validate_url = URL_Filter::validate_url($long_url);
        if ($validate_url == true) {
            if ($custom_url == '' || $custom_url == null) {
                //generating 6 digits random character to be used in the URL
                $id = ID_Gen::quickRandom();

                $new_url = 'http://127.0.0.1:8000/' . $id;
                $url->new_url = $new_url;
                $url->long_url = $long_url;
                //Save to database
                $url->save();
                //Give out success message
                \Session::flash('flash_message', 'URL Shortened and Saved ');
                return view('default')->with('new_url', $new_url);
            } else {
                $new_url = 'http://127.0.0.1:8000/' . $custom_url;
                //check the database if the new url exist
                $url_find = url::find($new_url);
                if ($url_find) {
                   //Give out success message
                    \Session::flash('flash_message', 'URL already in use!!!');
                    return view('default');
                } else {
                    $url->new_url = $new_url;
                    $url->long_url = $long_url;
                //Save to database
                    $url->save();
                //Give out success message
                    \Session::flash('flash_message', 'URL Shortened and Saved ');
                    return view('default')->with('new_url', $new_url);
                }
            }
        } else {
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
    public function show($url)
    {
        $url_link = 'http://127.0.0.1:8000/' . $url;
        $url_find = url::where('new_url', $url_link)->first();
        //return redirect($url_find['long_url']);
        return \Redirect::to( (string)$url_find['long_url']);


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
