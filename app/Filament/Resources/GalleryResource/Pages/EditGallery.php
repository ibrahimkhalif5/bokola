<?php

namespace App\Filament\Resources\GalleryResource\Pages;

use App\Helpers\ImageHelper;
use App\Filament\Resources\GalleryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGallery extends EditRecord
{
    protected static string $resource = GalleryResource::class;

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
