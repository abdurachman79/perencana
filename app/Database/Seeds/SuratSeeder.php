<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class SuratSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'no_agenda'   => '1101/PRC/XI/2022',
                'tgl_agenda'  => '2022-09-05',
                'no_memo'     => 'MO-2101/UMM/01/2022',
                'tgl_memo'    => '2022-09-05',
                'jenis'       => '2',
                'perihal'     => 'RAB Pekerjaan-1',
                'bidang'      => '1',
                'unitkerja'   => '1',
                'nilai'       => '1000000',
                'pemeriksa'   => '4',
                'status'      => '1',
                'ada_revisi'  => '0',
                'created_at'  => Time::now(),
                'updated_at'  => Time::now(),
            ],
            [
                'no_agenda'   => '1102/PRC/XI/2022',
                'tgl_agenda'  => '2022-09-05',
                'no_memo'     => 'MO-2102/UMM/01/2022',
                'tgl_memo'    => '2022-09-05',
                'jenis'       => '1',
                'perihal'     => 'Harga Pengesahan-1',
                'bidang'      => '1',
                'unitkerja'   => '1',
                'nilai'       => '0',
                'pemeriksa'   => '3',
                'status'      => '1',
                'ada_revisi'  => '0',
                'created_at'  => Time::now(),
                'updated_at'  => Time::now(),
            ],
        ];

        // Using Query Builder
        $this->db->table('tbl_surat_masuk')->insertBatch($data);
    }
}
