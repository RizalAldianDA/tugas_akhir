<?php

namespace App\Imports;

use App\Warga;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithChunkReading;

class WargaImport implements ToModel, WithHeadingRow, WithChunkReading
{
    public function model(array $row)
    {
        $row['tanggal_lahir'] = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['tanggal_lahir'])->format('Y-m-d');  
        return new Warga([
            'nik' => $row['nik'],
            'nokk' => $row['nokk'],
            'nama' => $row['nama'],
            'gender' => $row['jenis_kelamin'],
            'tanggal_lahir' => $row['tanggal_lahir'],
            'rt' => session()->get('rt'),
            'rw' => session()->get('rw'),
        ]);
    }
    public function chunkSize(): int
    {
        return 1000;
    }
}
