<?php

use CodeIgniter\I18n\Time;

function getDurasi($awal, $akhir)
{
    setlocale(LC_TIME, 'id_ID.UTF8');

    $awal = strtotime($awal);
    $akhir = strtotime($akhir);

    $harikerja = array();
    $weekend = array();

    for ($i = $awal; $i <= $akhir; $i += (60 * 60 * 24)) {
        if (date('w', $i) !== '0' && date('w', $i) !== '6') {
            $harikerja[] = $i;
        } else {
            $weekend[] = $i;
        }
    }

    $jumlah_harikerja = count($harikerja) - 1;
    if ($jumlah_harikerja < 0) {
        $jumlah_harikerja = 0;
    }
    return $jumlah_harikerja;
}

function namaBulan($bulan = 0)
{
    // $nama_bulan = '';
    switch ($bulan) {
        case "1":
            $nama_bulan = "Januari";
            break;
        case "2":
            $nama_bulan = "Februari";
            break;
        case "3":
            $nama_bulan = "Maret";
            break;
        case "4":
            $nama_bulan = "April";
            break;
        case "5":
            $nama_bulan = "Mei";
            break;
        case "6":
            $nama_bulan = "Juni";
            break;
        case "7":
            $nama_bulan = "Juli";
            break;
        case "8":
            $nama_bulan = "Agustus";
            break;
        case "9":
            $nama_bulan = "September";
            break;
        case "10":
            $nama_bulan = "Oktober";
            break;
        case "11":
            $nama_bulan = "November";
            break;
        case "12":
            $nama_bulan = "Desember";
            break;
        default:
            $nama_bulan = [
                'Januari',
                'Februari',
                'Maret',
                'April',
                'Mei',
                'Juni',
                'Juli',
                'Agustus',
                'September',
                'Oktober',
                'November',
                'Desember'
            ];
    }
    return $nama_bulan;
}

function numberToRoman($number)
{
    $map = array('M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400, 'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40, 'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1);
    $returnValue = '';
    while ($number > 0) {
        foreach ($map as $roman => $int) {
            if ($number >= $int) {
                $number -= $int;
                $returnValue .= $roman;
                break;
            }
        }
    }
    return $returnValue;
}

function bulanRomawi()
{
    $date = Time::createFromDate();
    $bulan = $date->getMonth();
    return numberToRoman($bulan);
}

function persentase($awal, $akhir)
{
    try {
        $persentase = (intval($akhir) / intval($awal)) * 100;
        return number_format($persentase, 2, '.', '');
    } catch (\Throwable $th) {
    }
}

function setNilaiKpi($durasi)
{
    if ($durasi != 0) {
        if ($durasi == 1) {
            $kpi = 3;
        } elseif ($durasi < 4 and $durasi > 1) {
            $kpi = 2;
        } else {
            $kpi = 1;
        }
        return $kpi;
    }
}


// function setLogActivity($user_id, $aksi, $surat_id)
// {
//     $model = new App\Models\ActivityModel();
//     $data = [
//         'user_id'  => $user_id,
//         'aksi'     => $aksi,
//         'surat_id' => $surat_id,
//         'host'     => gethostname(),
//         'waktu'    => date('Y-m-d H:i:s')
//     ];
//     $model->insertActivity($data);
// }
