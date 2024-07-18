<?php

namespace App\Http\ViewComposers;

use App\Repositories\Interfaces\PostCatalogueRepositoryInterface;

use Illuminate\View\View;


class MenuComposer
{
    private $postCatalogueRepository;
    public function __construct()
    {
        $this->postCatalogueRepository = app(PostCatalogueRepositoryInterface::class);
    }
    public function compose(View $view)
    {
        $postsCatalogues = $this->postCatalogueRepository->all([
            [
                'languages' => function ($query) {
                    $query->where('language_id', session('currentLanguage', 1));
                }
            ],

        ], ['*'], [
            'left' => 'asc',
            'created_at' => 'desc'
        ]);

        $postsCatalogues = recursive($postsCatalogues);
        $data = [];
        foreach ($postsCatalogues as $key => $postsCatalogue) {
            $data[] = [
                'id' => $postsCatalogue['item']->id,
                'level' => $postsCatalogue['item']->level,
                'name' => $postsCatalogue['item']->languages->first()->pivot->name,
                'canonical' => $postsCatalogue['item']->languages->first()->pivot->canonical
            ];
            if (count($postsCatalogue['children']) > 0) {
                foreach ($postsCatalogue['children'] as $value) {
                    $data[$key]['children'][] = [
                        'id' => $value['item']->id,
                        'level' => $value['item']->level,
                        'name' => $value['item']->languages->first()->pivot->name,
                        'canonical' => $value['item']->languages->first()->pivot->canonical
                    ];
                }
            }
        }
        // dd($data);
        $view->with('mainMenus', $data);
    }
}
