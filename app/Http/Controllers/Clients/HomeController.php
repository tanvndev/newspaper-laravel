<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\PostCatalogueRepositoryInterface;
use App\Repositories\Interfaces\PostRepositoryInterface;


class HomeController extends Controller
{

    private $postRepository;
    private $postCatalogueRepository;
    public function __construct(
        PostRepositoryInterface $postRepository,
        PostCatalogueRepositoryInterface $postCatalogueRepository

    ) {
        parent::__construct();
        $this->postRepository = $postRepository;
        $this->postCatalogueRepository = $postCatalogueRepository;
    }
    public function index()
    {
        $config['seo'] = [
            'title' => 'Trang chủ',
        ];
        $posts = $this->postRepository->all();
        $postBanners = $this->postRepository->all();


        return view('clients.home.index', compact([
            'config',
            'postBanners'
        ]));
    }
}
