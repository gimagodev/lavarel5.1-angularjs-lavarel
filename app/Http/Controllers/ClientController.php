<?php

namespace CodeProject\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
       //echo "Olá MUndo";
       return  \CodeProject\Client::all();
    }

    /**
    * Store a newly cerated resource in sotrage.
    *
    * @param Request @request
    * @return Response 
    */
    public function store(Request $request)
    {
        return \CodeProject\Client::create($request->all());
    }


    /**
    * Display the  specified resource
    *
    * @param int  $id
    * @return Response 
    */
    public function show($id)
    {
        return \CodeProject\Client::find($id);
    }

    /**
    * Remove the specified resource from storage
    *
    * @param int  $id
    * @return Response 
    */
    public function destroy($id)
    {
        \CodeProject\Client::find($id)->delete();
    }


}
