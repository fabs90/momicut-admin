<?php

namespace App\Filament\Resources\SalesResource\Pages;

use App\Filament\Resources\SalesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSales extends EditRecord
{
    protected static string $resource = SalesResource::class;
    protected static ?string $title = "Ubah Laporan Penjualan";

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()->label("Hapus"),
        ];
    }
}