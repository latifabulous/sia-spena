<?php

namespace App\Imports;

use App\Siswa;
use App\Kelas;
use Maatwebsite\Excel\Concerns\ToModel;

class SiswaImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $kelas = Kelas::where('nama_kelas', $row[3])->first();
        if ($row[2] == 'L') {
            $foto = 'uploads/siswa/27231912072020_male.jpg';
        } else {
            $foto = 'uploads/siswa/21201912072020_female.jpg';
        }

        return new Siswa([
            'nama_siswa' => $row[0],
            'no_induk' => $row[1],
            'jk' => $row[2],
            'foto' => $foto,
            'kelas_id' => $kelas->id,
        ]);
    }
}
