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
        $postCatalogues = $this->postCatalogueRepository->getAllPostByCatalogue();
        // dd($postCatalogues);
        $posts = [];
        foreach ($postCatalogues as $postCatalogue) {
            if (!isset($posts[$postCatalogue->id])) {
                $posts[$postCatalogue->id] = [
                    'id' => $postCatalogue->id,
                    'name' => $postCatalogue->name,
                    'posts' => [],
                ];
            }

            $posts[$postCatalogue->id]['posts'][] = [
                'post_id' => $postCatalogue->post_id,
                'post_name' => $postCatalogue->post_name,
                'canonical' => $postCatalogue->canonical,
                'description' => $postCatalogue->description,
                'image' => $postCatalogue->image,
                'created_at' => $postCatalogue->created_at,
            ];
        }
        // dd($posts);

        $postBanners = $this->postRepository->all();


        return view('clients.home.index', compact([
            'config',
            'postBanners',
        ]), ['postCatalogues' => $posts]);
    }
}
