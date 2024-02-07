<?php

namespace App\Http\Controllers;

use App\Models\newuser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class NewuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('newusers')->get();
        return view('newuser',['data'=>$users]);
    }

    public function getUser(string $id)
    {
        $users = DB::table('newusers')->where('id',$id)->get();
        return view('newuser',['data'=>$users]);
    }

    public function deleteUser(string $id)
    {
        $user = DB::table('newusers')->where('id',$id)->delete();
        if($user)
        {
            echo '<h1>Data deleted successfully!</h1>';
            return redirect()->route('view.user');
        }
        else
        {
            echo '<h1>Error!</h1>';
        }
    }

    public function addUser(Request $req)
    {
        $user = DB::table('newusers')->insert([
                    'name' => $req->name,
                    'email' => $req->email,
                    'age' => $req->age,
                    'city' => $req->city,
        ]);

        if($user)
        {
            echo '<h1>Data Added successfully!</h1>';
        }
        else
        {
            echo '<h1>Error!</h1>';
        }
    }

    public function fetchData(string $id)
    {
        $users = DB::table('newusers')->find($id);
        return view('updateuser',['data'=>$users]);
    }

    public function updateUser(Request $req, string $id)
    {
        $user = DB::table('newusers')->where('id',$id)
            ->update([
            'name' => $req->name,
            'email' => $req->email,
            'age' => $req->age,
            'city' => $req->city,
        ]);

        if($user)
        {
            echo '<h1>Data Updated successfully!</h1>';
        }
        else
        {
            echo '<h1>Error!</h1>';
        }
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
     * @param  \App\Models\newuser  $newuser
     * @return \Illuminate\Http\Response
     */
    public function show(newuser $newuser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\newuser  $newuser
     * @return \Illuminate\Http\Response
     */
    public function edit(newuser $newuser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\newuser  $newuser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, newuser $newuser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\newuser  $newuser
     * @return \Illuminate\Http\Response
     */
    public function destroy(newuser $newuser)
    {
        //
    }
}
