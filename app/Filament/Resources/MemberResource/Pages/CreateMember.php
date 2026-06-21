<?php

namespace App\Filament\Resources\MemberResource\Pages;

use App\Helpers\ImageHelper;
use App\Filament\Resources\MemberResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMember extends CreateRecord
{
    protected static string $resource = MemberResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        if (!empty($data['photo'])) {
            $path = storage_path('app/public/' . $data['photo']);
            ImageHelper::resizeAndCrop($path, 500, 500);
        }
        return $data;
    }
}
