<?php

namespace App\Exports;

use App\Models\Guru;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class GuruExport implements FromCollection, WithHeadings, ShouldAutoSize, WithStyles
{
    public function headings(): array
    {
        return [
            [
                'Data Guru'
            ],
            [
                'Nama',
                'Kompetensi Keahlian',
                'Telepon',
                'Alamat',
            ],
        ];
    }

    public function collection()
    {
        return Guru::select('nama', 'komli', 'telepon', 'alamat')->orderBy('nama', 'asc')->get();
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->mergeCells('A1:D1');

        return [
                // judul file
                1  => [
                    'font' => [
                        'size' => 20,
                    ],
                    'alignment' => [
                        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                    ],
                ],

                // nama field
                2 => [
                    'font' => [
                        'size' => 14,
                    ],
                ],
            ];
    }
}
