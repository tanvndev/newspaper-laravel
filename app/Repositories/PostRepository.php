<?php
// Trong Laravel, Repository Pattern thường được sử dụng để tạo các lớp repository, giúp tách biệt logic của ứng dụng khỏi cơ sở dữ liệu.
namespace App\Repositories;

use App\Models\Post;
use App\Repositories\Interfaces\PostRepositoryInterface;

class PostRepository extends BaseRepository implements PostRepositoryInterface
{
    protected $model;
    public function __construct(
        Post $model
    ) {
        $this->model = $model;
    }

    public function getPostLanguageById($id = 0, $languageId = 0)
    {
        $select = [
            'posts.id',
            'posts.post_catalogue_id',
            'posts.publish',
            'posts.image',
            'posts.icon',
            'posts.album',
            'posts.follow',
            'posts.created_at',
            'tb2.name',
            'tb2.description',
            'tb2.content',
            'tb2.meta_keyword',
            'tb2.meta_title',
            'tb2.meta_description',
            'tb2.canonical',
        ];
        return $this->model
            ->select($select)
            ->join('post_language as tb2', 'posts.id', '=', 'tb2.post_id')
            ->where('tb2.language_id', $languageId)
            ->with(['post_catalogues', 'users'])
            ->find($id);
    }

    public function getPostLanguageByCatalogueId($catalogueId = 0, $languageId = 0, $perPage = 10, $condition = [])
    {
        $select = [
            'posts.id',
            'posts.post_catalogue_id',
            'posts.publish',
            'posts.image',
            'posts.icon',
            'posts.album',
            'posts.follow',
            'tb2.name',
            'tb2.description',
            'tb2.content',
            'tb2.meta_keyword',
            'tb2.meta_title',
            'tb2.meta_description',
            'tb2.canonical',
            'tb3.name as post_catalogue_name'
        ];

        $query = $this->model
            ->select($select)
            ->join('post_language as tb2', 'posts.id', '=', 'tb2.post_id')
            ->join('post_catalogue_language as tb3', 'posts.post_catalogue_id', '=', 'tb3.post_catalogue_id')
            ->where('tb2.language_id', $languageId)
            ->with(['post_catalogues', 'users']);


        if (!empty($catalogueId)) {
            $query->where('posts.post_catalogue_id', $catalogueId);
        }

        if (!empty($condition['keyword'])) {
            $query->where('tb2.name', 'LIKE', '%' . $condition['keyword'] . '%');
        }
        return $query->paginate($perPage);
    }
}
