<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\PostCatalogueRepositoryInterface;



class PostCatalogueController extends Controller
{

    private $postCatalogueRepository;
    public function __construct(
        PostCatalogueRepositoryInterface $postCatalogueRepository
    ) {
        parent::__construct();
        $this->postCatalogueRepository = $postCatalogueRepository;
    }

    public function catalogues($id)
    {
        $postCatalogues = $this->postCatalogueRepository->findByWhere(
            [
                'id' => ['=', $id],
                'publish' => ['=', 1]
            ],
            ['*'],
            [
                ['languages' => function ($query) {
                    $query->where('language_id', session('currentLanguage', 1));
                }]
            ],
            true,
        );
        dd($postCatalogues);
    }
}
