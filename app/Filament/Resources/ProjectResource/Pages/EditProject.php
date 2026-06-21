<?php

namespace App\Filament\Resources\ProjectResource\Pages;

use App\Helpers\ImageHelper;
use App\Filament\Resources\ProjectResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProject extends EditRecord
{
    protected static string $resource = ProjectResource::class;

    protected function mutateFormDataBeforeSave(array $data): array
    {
        if (!empty($data['image'])) {
            $path = storage_path('app/public/' . $data['image']);
            ImageHelper::resizeAndCrop($path, 800, 600);
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
