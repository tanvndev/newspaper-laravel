<?php

namespace App\Repositories\Interfaces;

interface PostRepositoryInterface extends BaseRepositoryInterface
{
    public function getPostLanguageById($id = 0, $languageId = 0);
    public function getPostLanguageByCatalogueId($catalogueId = 0, $languageId = 0, $perPage = 10, $condition = []);
}
