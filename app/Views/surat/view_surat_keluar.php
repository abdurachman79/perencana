<?= $this->extend('templates/view_template_body'); ?>

<?= $this->section('style'); ?>
<style>
    .table {
        border-collapse: separate !important;
        border-spacing: 0 5px !important;
    }

    .table th {
        border-bottom: none;
        text-transform: uppercase;
        font-size: 13px;
        font-weight: bold;
        height: 25px;
    }

    .table tbody tr {
        background-color: white !important;
    }

    .table tbody td {
        padding: 0 !important;
    }

    .table tbody tr td:last-child {
        border-right: 1px solid #ebedf2;
    }

    select {
        border-radius: 0 !important;
        border: none !important;
        border-bottom: 1px solid #ebedf2 !important;
        border-right: 1px solid #ebedf2 !important;
        padding: 7px 18px 7px 6px !important;
        font-size: 14px !important;
        color: #7c7c7c !important;
    }

    select:disabled {
        opacity: 0.5 !important;
    }

    .pagination>li>a,
    .pagination>li:first-child>a,
    .pagination>li:last-child>a {
        border-radius: 0 !important;
        font-size: 13px !important;
    }

    .pagination>li:focus {
        color: black !important;
    }

    .col-agenda {
        width: 12%;
        padding: 10px;
        /* background-color: #333333;
        color: white; */
        display: flex;
        flex-direction: column;
        /* justify-content: center; */
        align-items: center;
    }

    .col-agenda span {
        line-height: 22px;
        font-size: 12px;
    }

    .col-agenda .nomor {
        font-size: 26px;
        font-weight: bold;
    }

    .col-detail {
        width: 86%;
        padding: 10px 0;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .col-detail a {
        line-height: 16px;
        color: #333333;
        /* text-transform: uppercase; */
        font-weight: bold;
    }

    .col-detail a:hover {
        color: #1572E8;
    }

    .sub-detail span {
        font-size: 12px;
        /* font-weight: bold; */
        line-height: 2px;
    }
</style>

<?= $this->endSection(); ?>


<?= $this->section('content'); ?>

<div class="page-header">
    <h1 class="page-title"><?= $title ?></h1>
</div>

<div class="page-category">

    <div class="row g-0 mb-4">
        <div class="col-12 text-right">
            <select class="">
                <option selected>Tahun</option>
                <option value="1">2021</option>
                <option value="2">2022</option>
                <option value="3">2023</option>
            </select>
            <select class="ms-2">
                <option selected>Bulan</option>
                <option value="1">Januari</option>
                <option value="2">Februari</option>
                <option value="3">Maret</option>
                <option value="4">April</option>
                <option value="5">Mei</option>
                <option value="6">Juni</option>
                <option value="6">Juli</option>
                <option value="6">Agustus</option>
                <option value="6">September</option>
                <option value="6">Oktober</option>
                <option value="6">November</option>
                <option value="6">Desember</option>
            </select>
            <select class="ms-2">
                <option selected>Tahun</option>
                <option value="1">2021</option>
                <option value="2">2022</option>
                <option value="3">2023</option>
            </select>
            <a href="<?= base_url('') ?>" class="btn btn-dark float-end">
                <i class="fas fa-print pe-2"></i>
                <span>Cetak</span>
            </a>
            <a href="<?= base_url('/form-surat-baru') ?>" class="btn btn-success float-end me-2">
                <i class="fas fa-plus pe-2"></i>
                <span>Surat Baru</span>
            </a>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-12">

            <table id="table-surat" class="table">
                <thead class="d-none">
                    <tr>
                        <th scope="col">#</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="border-left: 6px solid red !important;">
                            <div class="d-flex">

                                <div class="col-agenda">
                                    <span>Agenda No.</span>
                                    <span class="nomor">13</span>
                                    <span>04/08/2022</span>
                                </div>

                                <div class="col-detail">
                                    <a href="<?= base_url('surat/suratdetail') ?>">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sapiente corporis eum totam facilis tempore asd dolor sit amet consectetur ipsum dolor sit amet</a>
                                    <div class="d-flex">
                                        <div class="sub-detail" style="min-width: 23%;">
                                            <span data-tooltip="Asal Memo" data-tooltip-position="bottom"><i class="fas fa-map-marker me-1" style="color: #1572E8;"></i>Divisi Pengolahan Air Minum</span>
                                        </div>
                                        <div class="sub-detail ms-3" style="min-width: 15%;">
                                            <span data-tooltip="No. Memo" data-tooltip-position="bottom"><i class="far fa-sticky-note me-1" style="color: red;"></i>123/PAM/02/2022</span>
                                        </div>
                                        <div class="sub-detail ms-3" style="min-width: 8%;">
                                            <span data-tooltip="Tgl. Memo" data-tooltip-position="bottom"><i class="far fa-calendar me-1" style="color: green;"></i>04/08/2022</span>
                                        </div>
                                        <div class="sub-detail ms-3" style="min-width: 8%;">
                                            <span data-tooltip="Nilai RAB" data-tooltip-position="bottom"><i class="fas fa-dollar-sign me-1" style="color: orange;"></i>Rp. 999.000.000.000</span>
                                        </div>
                                        <div class="sub-detail ms-3" style="min-width: 8%;">
                                            <span data-tooltip="Pemeriksa" data-tooltip-position="bottom"><i class="fas fa-user me-1" style="color: blue"></i>AR</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>

        </div>
    </div>


</div>

<?= $this->endSection(); ?>


<?= $this->section('script'); ?>

<script>
    let table = new DataTable('#table-surat', {
        "ordering": false,
        "lengthChange": false,
        "info": false,
        "searching": false,
        "pageLength": 20,
        "language": {
            "url": base_url + "/public/assets/datatable-id.json"
        }
    });
</script>

<?= $this->endSection(); ?>