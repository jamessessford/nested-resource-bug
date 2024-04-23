<?php

namespace App\Filament\Resources\DocumentResource\Pages;

use App\Filament\Resources\DocumentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Guava\FilamentNestedResources\Concerns\NestedPage;

class ListDocuments extends ListRecords
{
    use NestedPage;

    protected static string $resource = DocumentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
