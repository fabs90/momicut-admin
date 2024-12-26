<?php

namespace App\Filament\Resources\CategoryResource\Pages;

use App\Filament\Resources\CategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCategory extends CreateRecord
{
    protected static string $resource = CategoryResource::class;

    protected static ?string $title = "Buat Kategori";

    protected function getCreateFormAction(): Actions\Action
    {
        return parent::getCreateAction()
            ->label('Simpan')
            ->createAnotherLabel('Simpan & buat lainnya');
    }
}