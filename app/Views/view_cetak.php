<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cetak</title>
    <link rel="icon" href="<?= base_url() ?>/public/assets/img/icon2.ico" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="<?= base_url() ?>/public/assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            custom: {
                "families": ["open_sansregular", "Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
                urls: ['<?= base_url() ?>/public/assets/css/fonts.css']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- Normalize or reset CSS with your favorite library -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/assets/css/normalize.css">


    <!-- CSS Files -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/assets/css/bootstrap.css">
    <!-- <link rel="stylesheet" href="<?= base_url() ?>/public/assets/css/atlantis.css"> -->

    <!-- Load paper.css for happy printing -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/assets/css/paper.css">

    <!-- Set page size here: A5, A4 or A3 -->
    <!-- Set also "landscape" if you need -->
    <style>
        @page {
            size: A5
        }

        .lembar-dposisi {
            border: 1px solid black;
            font-size: 12px;
        }

        .lembar-dposisi .img-container {
            /* display: flex; */
            /* justify-content: center; */
            padding-top: 10px;
            padding-left: 14px;
            /* box-sizing: border-box; */
        }

        .lembar-dposisi .padding-1 {
            padding: 5px 10px;
        }

        .lembar-dposisi .border-atas {
            border-top: 1px solid black;
        }

        .lembar-dposisi .pr-none {
            padding-right: 0 !important;
        }

        .lembar-dposisi .pl-none {
            padding-left: 0 !important;
        }

        .lembar-dposisi .px-none {
            padding-left: 0 !important;
            padding-right: 0 !important;
        }

        .lembar-dposisi .font-13px {
            font-size: 15px;
        }

        .lembar-dposisi .text-mini {
            display: block;
            text-transform: uppercase;
            font-size: 11px;
            font-weight: bold;
            line-height: 8px;
        }

        .lembar-dposisi .text-reg {
            display: block;
            text-transform: uppercase;
            font-size: 13px;
        }

        .lembar-dposisi .catatan {
            height: 200px;
            text-transform: uppercase;
            font-weight: bold;
            font-size: 14px;
            text-decoration: underline;
            letter-spacing: 1.5px;
        }

        .lembar-dposisi-header {
            margin-top: 10px;
        }

        .lembar-dposisi-header h3 {
            margin: 0;
            line-height: 16px;
            display: flex;
            justify-content: center;
            text-transform: uppercase;
            font-size: 14px;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .lembar-dposisi-header select,
        input {
            border: none;
            outline: none;
        }


        .lembar-dposisi-header .form {
            display: flex;
            justify-content: end;
        }
    </style>
</head>

<!-- Set "A5", "A4" or "A3" for class name -->
<!-- Set also "landscape" if you need -->

<body class="A5">

    <!-- Each sheet element should have the class "sheet" -->
    <!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->
    <section class="sheet padding-3mm">

        <!-- Write HTML just like a web page -->
        <!-- <div class="page-category"> -->

        <div class="row justify-content-center">
            <div class="col-12">

                <div class="lembar-dposisi">

                    <div class="row g-0 mb-2">

                        <div class="col-2 img-container">
                            <img src="<?= base_url(); ?>/public/assets/img/logo-tirtanadi.png" width="50px" height="55px" alt="tirtanadi">
                        </div>

                        <div class="col-10 lembar-dposisi-header">
                            <h3>Divisi Perencanaan Air Minum</h3>
                            <h3>Perumda Tirtanadi Provsu</h3>
                            <h3>Intern</h3>
                        </div>

                    </div>

                    <div class="row g-0">
                        <div class="col-6 padding-1 border-atas">
                            <span class="d-block text-mini">Kepada</span>
                            <span class="d-block text-reg">Kadiv. Perencanaan Air Minum</span>
                        </div>
                        <div class="col-6 padding-1 border-atas">
                            <span class="d-block text-mini">Dari</span>
                            <span class="d-block text-reg">Kadiv. Pengolahan Air Minum</span>
                        </div>
                        <div class="col-6 padding-1 border-atas">
                            <span class="d-block text-mini">Diterima tgl</span>
                            <span class="d-block text-reg">04/08/2022</span>
                        </div>
                        <div class="col-6 padding-1 border-atas">
                            <span class="d-block text-mini">Tgl Memo</span>
                            <span class="d-block text-reg">04/08/2022</span>
                        </div>
                        <div class="col-6 padding-1 border-atas">
                            <span class="d-block text-mini">Agenda No.</span>
                            <span class="d-block text-reg">1234/prc/viii/2022</span>
                        </div>
                        <div class="col-6 padding-1 border-atas">
                            <span class="d-block text-mini">No. Memo</span>
                            <span class="d-block text-reg">MO-1234/PAM/02/2022</span>
                        </div>
                        <!-- <div class="col-6 padding-1 border-atas">
                            <span class="d-block text-mini">Jenis Memo</span>
                            <span class="d-block text-reg">RAB</span>
                        </div>
                        <div class="col-6 padding-1 border-atas">
                            <span class="d-block text-mini">Nilai Memo</span>
                            <span class="d-block text-reg">Rp. 999.000.000.000</span>
                        </div> -->
                        <div class="col-6 padding-1 border-atas">
                            <span class="d-block text-mini">Diteruskan ke</span>
                            <span class="d-block text-reg">Kabid Perencana Teknik</span>
                        </div>
                        <div class="col-6 padding-1 border-atas">
                            <span class="d-block text-mini">Sifat</span>
                            <span class="d-block text-reg">Segera</span>
                        </div>
                        <div class="col-12 padding-1 border-atas">
                            <span class="d-block text-mini">Perihal</span>
                            <span class="d-block text-reg">Pengesahan RAB pembabatan rumput triwulan III IPAM Limau Manis Tahun 2022</span>
                        </div>
                    </div>

                    <!-- <div class="padding-1 border-atas">
                        <div class="row no-gutters">
                            <div class="col-2 pr-none">Kepada</div>
                            <div class="col-4 px-none">: Kadiv. Perencanaan Air Minum</div>
                            <div class="col-2 pr-none">Dari</div>
                            <div class="col-4 px-none">: Kadiv. Pengolahan Air Minum</div>
                        </div>
                    </div>

                    <div class="padding-1 border-atas">
                        <div class="row no-gutters">
                            <div class="col-2 pr-none">Diterima Tgl.</div>
                            <div class="col-4 px-none">: 04/08/2022</div>
                            <div class="col-2 pr-none">Tgl. Memo</div>
                            <div class="col-4 px-none">: 04/08/2022</div>
                        </div>
                    </div>

                    <div class="padding-1 border-atas">
                        <div class="row no-gutters">
                            <div class="col-2 pr-none">Agenda No.</div>
                            <div class="col-4 px-none">: MO-9999/PRC/01/2022</div>
                            <div class="col-2 pr-none">No. Memo</div>
                            <div class="col-4 px-none">: MO-1234/PAM/02/2022</div>
                        </div>
                    </div>

                    <div class="padding-1 border-atas">
                        <div class="row no-gutters">
                            <div class="col-2 pr-none">Jenis Memo</div>
                            <div class="col-4 px-none">: RAB</div>
                            <div class="col-2 pr-none">Nilai Memo</div>
                            <div class="col-4 px-none">: Rp. 999.000.000.000</div>
                        </div>
                    </div>

                    <div class="padding-1 border-atas">
                        <div class="row no-gutters">
                            <div class="col-2 pr-none">Diteruskan ke</div>
                            <div class="col-4 px-none">: Kabid Perencana Teknik</div>
                            <div class="col-2 pr-none">Sifat</div>
                            <div class="col-4 px-none">: Segera</div>
                        </div>
                    </div>

                    <div class="padding-1 border-atas">
                        <div class="row no-gutters">
                            <div class="col-2 pr-none">Perihal</div>
                            <div class="col-10 px-none fw-bold">: Pengesahan RAB pembabatan rumput triwulan III IPAM Limau Manis Tahun 2022</div>
                        </div>
                    </div> -->

                    <?php
                    $data = [
                        'Dana kerja',
                        'Setuju lembur biasa/istimewa',
                        'Tidak perlu lembur',
                        'Monitor', 'Utk dikerjakan dgn baik',
                        'Segera perbaiki', 'Carikan jalan keluar',
                        'Penuhi sesuai kebutuhan',
                        'Setuju usul, proses segera', 'Setuju Prinsip',
                        'Cek & Lapor', 'Perhatikan personil',
                        'Untuk menjadi perhatian', 'Setuju dipesan',
                        'Cek & selesaikan sesuai aturan',
                        'Teliti & perbaiki', ' Arsip',
                        'Bahan Saudara'
                    ];
                    ?>

                    <div class="padding-1 border-atas">
                        <div class="row no-gutters">
                            <?php for ($i = 0; $i < count($data); $i++) : ?>
                                <div class="col-6 d-flex align-items-center mb-1">
                                    <i class="far fa-square fa-2x"></i>
                                    <span class="font-13px ms-2"><?= $data[$i] ?></span>
                                </div>
                            <?php endfor; ?>
                        </div>
                    </div>

                    <div class="padding-1 border-atas">
                        <div class="row no-gutters">
                            <div class="col-12 catatan">Catatan:</div>
                        </div>
                    </div>

                </div>

            </div>
        </div>


    </section>

</body>

</html>