<?php

namespace App\Http\Controllers\Sistema;

use App\Criteria\Sistema\UserCriteria;
use App\Http\Controllers\Controller;
use App\Http\Requests\Sistema\Client\ClientEditRequest;
use App\Http\Requests\Sistema\Client\ClientRequest;
use App\Models\Address\Address;
use App\Repositories\SystemUserRepository;
use App\Services\ClientService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Spatie\Activitylog\Models\Activity;

class ClientController extends Controller
{
    private $repository;
    private $service;

    public function __construct(
                                    SystemUserRepository $repository,
                                    ClientService $service
                                )
    {
        $this->repository = $repository;
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->repository->pushCriteria(new UserCriteria(true));
        $clients = $this->repository->paginate();

        return view('sistema.clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $states = Address::STATES;
        return view('sistema.clients.create', compact('states'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientRequest $request)
    {
        $data = $request->all();

        $user = $this->service->create($data);

        Session::flash('message', ['Banner salvo com sucesso!']); 
        Session::flash('alert-type', 'alert-success'); 

        return view('sistema.clients.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $states = Address::STATES;
        $client = $this->repository->find($id);

        return view('sistema.clients.edit', compact('client', 'states'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClientEditRequest $request, $id)
    {
        $data = $request->all();

        $user = $this->service->update($data, $id);

        Session::flash('message', ['Banner salvo com sucesso!']); 
        Session::flash('alert-type', 'alert-success'); 

        return view('sistema.home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->repository->delete($id);

        //Grava Log
        Activity::all()->last();

        return redirect()->route('clients.index');
    }
}
