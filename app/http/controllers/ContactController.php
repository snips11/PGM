<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contacts;
use App\Http\Requests;
use Session;
use Mail;
use Redirect; 

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.contact');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
                
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array (
            'name' => 'required|max:255',
            'email' => 'required|max:255|email',
            'number' => 'required|max:255',
            'main' => 'required|max:255',
            
            
        ));
        //store
        $post = new contacts;

        
        
        $post->name = $request->name;
        $post->email = $request->email;
        $post->number = $request->number;
        $post->main = $request->main;

     
        
        //save
        $post->save();
        
        //session flash message
        Session::flash('contact','Thank you for message, we will be in touch!');
        
        //redirect
return redirect()->route('contact.show', array('contacts' => $post->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
                $user = contacts::findOrFail($id);

                
                
        $email=['email' => $user];

        
            
                Mail::send('emails.contact', ['email' => $email], function ($m) use ($user) {
                    $m->from('info@parsonsgreenmedia.com', 'Parsons Green Media Message');

                    $m->to('james@parsonsgreenmedia.com', $user->name)->subject('You have an enquiry: '.$user->created_at->format('d-m-Y H:i:s').'');
                });
                Session::flash('success','Your message has been sent!');
                return Redirect::back()->with('success','Your message has been sent!');
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
