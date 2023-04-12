<?php

namespace App\Imports;

use App\Models\Barang;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithValidation;
use Illuminate\Support\Str;

class ImportBarang implements ToCollection, WithHeadingRow, WithValidation
{
    /**
    * @param Collection $collection
    */
    use Importable;
    public function collection(Collection $columns)
    {
        foreach ($columns as $column) {
            Barang::create([
                'barang_id' => $column['barang_id'],
                'harga_beli' => $column['harga_beli'],
                'harga_jual' => $column['harga_jual']
            ]);
    }
}
public function headingRow(): int
{
    return 1;
}
public function rules(): array
{
    return [
        'barang_id' => ['required','numeric'],
        'harga_beli' => ['required','numeric'],
        'harga_jual' => ['required','numeric']
    ];
}
}
