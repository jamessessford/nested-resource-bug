<?php

namespace App\Filament\Resources\DocumentResource\Pages;

use App\Filament\Resources\DocumentResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Guava\FilamentNestedResources\Concerns\NestedPage;

class CreateDocument extends CreateRecord
{
    use NestedPage;

    protected static string $resource = DocumentResource::class;
}
