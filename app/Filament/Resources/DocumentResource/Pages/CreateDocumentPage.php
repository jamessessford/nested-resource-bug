<?php

namespace App\Filament\Resources\DocumentResource\Pages;

use App\Filament\Resources\DocumentResource;
use Filament\Actions;
use Guava\FilamentNestedResources\Pages\CreateRelatedRecord;
use Guava\FilamentNestedResources\Concerns\NestedPage;

class CreateDocumentPage extends CreateRelatedRecord
{
    use NestedPage;

    protected static string $relationship = 'pages';

    protected static string $resource = DocumentResource::class;
}
