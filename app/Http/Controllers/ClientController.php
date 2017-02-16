<?php

namespace CodeProject\Http\Controllers;

// use CodeProject\Entities\Client;
use CodeProject\Repositories\ClientRepository;
// use CodeProject\Repositories\ClientRepositoryEloquent;
use Illuminate\Http\Request;

class ClientController extends Controller
{
  /**
  * @var ClientRepository
  */
  private $repository;
  
   public  function __construct(ClientRepository $repository)
   {
       $this->repository = $repository;
   }
   
    public function index()
    {
       return $this->repository->all();
    }

    /**
    * Store a newly cerated resource in sotrage.
    *
    * @param Request @request
    * @return Response 
    */
    public function store(Request $request)
    {
        //return Client::create($request->all());
        return $this->repository->create($request->all());
    }


    /**
    * Display the  specified resource
    *
    * @param int  $id
    * @return Response 
    */
    public function show($id)
    {
        //return Client::find($id);
        return $this->repository->find($id);
    }

    /**
    * Remove the specified resource from storage
    *
    * @param int  $id
    * @return Response 
    */
    public function destroy($id)
    {
        Client::find($id)->delete();
    }


}
