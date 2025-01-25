<?php

namespace App\Filament\Resources\DepartmentResource\Pages;

use App\Filament\Resources\DepartmentResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDepartment extends CreateRecord
{
    protected static string $resource = DepartmentResource::class;
    protected function getRedirectUrl(): string
    {
        // redirected to the previous page, else the index page
        // return $this->previousUrl ?? $this->getResource()::getUrl('index');

        // redirect back to the List page
        return $this->getResource()::getUrl('index');
    }
}
