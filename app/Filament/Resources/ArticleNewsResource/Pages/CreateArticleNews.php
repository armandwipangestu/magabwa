<?php

namespace App\Filament\Resources\ArticleNewsResource\Pages;

use App\Filament\Resources\ArticleNewsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateArticleNews extends CreateRecord
{
    protected static string $resource = ArticleNewsResource::class;
}
