<?php

namespace App\Filament\Resources\ArticleNewsResource\Pages;

use App\Filament\Resources\ArticleNewsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditArticleNews extends EditRecord
{
    protected static string $resource = ArticleNewsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
