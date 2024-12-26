<?php

namespace App\Filament\Resources\PromoResource\Pages;

use App\Filament\Resources\PromoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPromo extends EditRecord
{
    protected static string $resource = PromoResource::class;
    protected static ?string $title = "Ubah Promo";

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()->label("Hapus"),
        ];
    }
}