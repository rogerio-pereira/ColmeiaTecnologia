<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Repositories\BannerRepository;
use App\Repositories\PortfolioRepository;
use App\Repositories\ServiceRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $bannerRepository;
    private $serviceRepository;
    private $portfolioRepository;

    public function __construct(
                                    BannerRepository $bannerRepository,
                                    ServiceRepository $serviceRepository,
                                    PortfolioRepository $portfolioRepository
                                )
    {
        $this->bannerRepository = $bannerRepository;
        $this->serviceRepository = $serviceRepository;
        $this->portfolioRepository = $portfolioRepository;
    }

    public function index()
    {
        $banners = $this->bannerRepository->all();
        $services = $this->serviceRepository->all();
        $portfolios = $this->portfolioRepository->all();

        return view('site.home.index', compact('banners', 'services', 'portfolios'));
    }
}
