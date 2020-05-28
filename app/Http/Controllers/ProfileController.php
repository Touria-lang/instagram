<?php

namespace App\Http\Controllers;

use CreateProfilesTable;
use Illuminate\Http\Request;
use App\Profile;
use App\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
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
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        
        $profile = Profile::find($id);
        return view('profiles.show',['profile' => $profile]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('profiles.edit',['profile' => Profile::find($id)]);
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
        //$this->authorize('update');

        $data = request()->validate([          
           'title' => 'required',
           'description' => 'required',
           'url' => 'required',  
           'avatar' => 'sometimes|image'                  
        ]);

        if(request('avatar')){
            $avatarPath = request('avatar')->store('avatars','public');
            $data['avatar'] = $avatarPath;
                        
            Profile::find($id)->update(
                $data
            );
                       
        }  
        else 
        {
        
            Profile::find($id)->update($data);
        }   
            
            

        return redirect()->route('profiles.show', ['profile' => $id]);

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
