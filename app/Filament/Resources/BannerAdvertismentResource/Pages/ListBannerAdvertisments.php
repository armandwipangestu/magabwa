<?php

namespace App\Filament\Resources\BannerAdvertismentResource\Pages;

use App\Filament\Resources\BannerAdvertismentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBannerAdvertisments extends ListRecords
{
    protected static string $resource = BannerAdvertismentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
