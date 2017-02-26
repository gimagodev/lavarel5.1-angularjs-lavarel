<?php

namespace CodeProject\Http\Controllers;


use CodeProject\Repositories\ClientRepository;
use CodeProject\Services\ClientService;
use Illuminate\Http\Request;

class ClientController extends Controller
{
  /**
  * @var ClientRepository
  */
  private $repository;
  
  /**
  * @var ClientService
  */
  private $service;

  /**
  * @param ClientRepository $repository
  * @param ClientService $service
  */
   public  function __construct(ClientRepository $repository, ClientService $service)
   {
       $this->repository = $repository;
       $this->service = $service;
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

        return $this->service->create($request->all());
        // return $this->repository->create($request->all());
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
    * Update the specified resource from storage
    *
    * @param int $id
    * @return Response 
    */
    public function update($id)
    {
        //Client::find($id)->delete();
        $this->repository->find($id)->update();
    }


    /**
    * Remove the specified resource from storage
    *
    * @param int  $id
    * @return Response 
    */

    public function destroy($id)
    {
        //Client::find($id)->delete();
        $this->repository->find($id)->delete();
    }


}
