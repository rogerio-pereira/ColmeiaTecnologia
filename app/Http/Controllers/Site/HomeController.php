<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Repositories\BannerRepository;
use App\Repositories\ServiceRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $bannerRepository;
    private $serviceRepository;

    public function __construct(
                                    BannerRepository $bannerRepository,
                                    ServiceRepository $serviceRepository
                                )
    {
        $this->bannerRepository = $bannerRepository;
        $this->serviceRepository = $serviceRepository;
    }

    public function index()
    {
        $banners = $this->bannerRepository->all();
        $services = $this->serviceRepository->all();

        return view('site.home.index', compact('banners', 'services'));
    }
}
