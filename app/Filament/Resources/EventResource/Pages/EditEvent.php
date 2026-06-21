<?php

namespace App\Filament\Resources\EventResource\Pages;

use App\Helpers\ImageHelper;
use App\Filament\Resources\EventResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEvent extends EditRecord
{
    protected static string $resource = EventResource::class;

    protected function mutateFormDataBeforeSave(array $data): array
    {
        if (!empty($data['image'])) {
            $path = storage_path('app/public/' . $data['image']);
            ImageHelper::resizeAndCrop($path, 1200, 800);
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
