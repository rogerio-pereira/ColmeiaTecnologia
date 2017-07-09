<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Http\Requests\Blog\SubscriptionFormRequest;
use App\Repositories\SubscriptionRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;
use Spatie\Activitylog\Models\Activity;

class SubscriptionController extends Controller
{
    private $repository;

    public function __construct(SubscriptionRepository $repository)
    {
        $this->repository = $repository;
    }

    public function create(SubscriptionFormRequest $request)
    {
        $data = $request->all();
        $data['token'] = hash('sha512', $data['email']);

        $this->repository->create($data);

        //Grava Log
        Activity::all()->last();

        Session::flash('message', ['E-mail cadastrado com sucesso!']); 
        Session::flash('alert-type', 'alert-success'); 

        return redirect()->back();
    }

    public function destroy($token)
    {
        $subscription = $this->repository->findWhere(['token' => $token])->first();
        
        $this->repository->delete($subscription->id);

        //Grava Log
        Activity::all()->last();

        return redirect()->route('blog');
    }
}
