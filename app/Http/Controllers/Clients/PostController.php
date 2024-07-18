<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\PostRepositoryInterface;

class PostController extends Controller
{

    private $postRepository;
    public function __construct(
        PostRepositoryInterface $postRepository
    ) {
        parent::__construct();
        $this->postRepository = $postRepository;
    }

    public function catalogues($id)
    {
        $posts = $this->postRepository->getPostLanguageByCatalogueId($id, session('currentLanguage', 1));
        // dd($posts);
        $config['seo'] = [
            'title' => $posts->first()->post_catalogue_name ?? 'Tin tức',
        ];
        return view('clients.posts.catalogue', compact(
            'config',
            'posts'
        ));
    }

    public function detail($id)
    {
        $post = $this->postRepository->getPostLanguageById($id, session('currentLanguage', 1));
        $config['seo'] = [
            'title' => $post->name,
        ];
        return view('clients.posts.detail', compact(
            'config',
            'post'
        ));
        dd($post);
    }
}
