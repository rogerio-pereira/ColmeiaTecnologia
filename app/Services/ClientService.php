<?php

namespace App\Services;

use App\Repositories\SystemClientRepository;
use App\Repositories\SystemUserRepository;
use Spatie\Activitylog\Models\Activity;

class ClientService
{
    private $userRepository;
    private $clientRepository;

    public function __construct( 
                                    SystemUserRepository $userRepository,
                                    SystemClientRepository $clientRepository
                                )
    {
        $this->userRepository = $userRepository;
        $this->clientRepository = $clientRepository;
    }

    public function create(array $data)
    {
        \DB::beginTransaction();
        try
        { 
            $data['user']['password'] = bcrypt($data['user']['password']);
            $user = $this->userRepository->create($data['user']);

            $data['user_id'] = $user->id;
            $data['birthdate'] = str_replace('/', '-', $data['birthdate']);
            $data['birthdate'] = date('Y-m-d', strtotime($data['birthdate']));
            $client = $this->clientRepository->create($data);

            //Grava Log
            Activity::all()->last();
            
            \DB::commit();

            return $user;
        }
        catch(\Exception $e) {
            \DB::rollback();
            throw $e;
        }
    }

    public function update(array $data, $id)
    {
        \DB::beginTransaction();
        try
        { 
            if(!isset($data['user']['password']))
                unset($data['user']['password']);

            $user = $this->userRepository->find($id);
            $this->userRepository->update($data['user'], $id);

            $data['birthdate'] = str_replace('/', '-', $data['birthdate']);
            $data['birthdate'] = date('Y-m-d', strtotime($data['birthdate']));
            $this->clientRepository->update($data, $user->client->id);

            //Grava Log
            Activity::all()->last();
            
            \DB::commit();

            return $user;
        }
        catch(\Exception $e) {
            \DB::rollback();
            throw $e;
        }
    }
}