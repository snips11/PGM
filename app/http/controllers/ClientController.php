<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\clients;
use App\Http\Requests;
use Session;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

         public function __construct()
    {
        $this->middleware('auth', ['except' => 'show']);
    }

    public function index()
    {
        $clients = clients::all();

        return view ('clients.index')->with('clients',$clients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate
        $this->validate($request, array (
            'name' => 'required|max:255',
            'main' => 'required|max:255',
            
            'image' => '',
            
        ));
        //store
        $post = new clients;
        
        $post->name = $request->name;
        $post->main = $request->main;
        $post->tag1 = $request->tag1;
        $post->tag2 = $request->tag2;
        $post->tag3 = $request->tag3;
        $post->image = $request->image;

        $request->file('image')->move(public_path('images'), $request->file('image')->getClientOriginalName());

        $post->image = public_path('images') . '/' . $request->file('image')->getClientOriginalName();
    
        
        //save
        $post->save();
        
        //session flash message
        Session::flash('success','Client added');
        
        //redirect
return view('clients.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = clients::find($id);
        return view ('clients.show') -> withclient($post);
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
