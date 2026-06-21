<?php

namespace App\Filament\Resources\DepartmentResource\Pages;

use App\Helpers\ImageHelper;
use App\Filament\Resources\DepartmentResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDepartment extends CreateRecord
{
    protected static string $resource = DepartmentResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        if (!empty($data['photo'])) {
            $path = storage_path('app/public/' . $data['photo']);
            ImageHelper::resizeAndCrop($path, 500, 500);
        }
        return $data;
    }
}
