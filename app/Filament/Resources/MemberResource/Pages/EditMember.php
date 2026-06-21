<?php

namespace App\Filament\Resources\MemberResource\Pages;

use App\Helpers\ImageHelper;
use App\Filament\Resources\MemberResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMember extends EditRecord
{
    protected static string $resource = MemberResource::class;

    protected function mutateFormDataBeforeSave(array $data): array
    {
        if (!empty($data['photo'])) {
            $path = storage_path('app/public/' . $data['photo']);
            ImageHelper::resizeAndCrop($path, 500, 500);
        }
        return $data;
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
