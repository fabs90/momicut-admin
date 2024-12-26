<?php

namespace App\Filament\Resources\ResellerProductsResource\Pages;

use App\Filament\Resources\ResellerProductsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditResellerProducts extends EditRecord
{
    protected static string $resource = ResellerProductsResource::class;
    protected static ?string $title = "Ubah Produk Reseller";

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()->label("Hapus"),
        ];
    }
}