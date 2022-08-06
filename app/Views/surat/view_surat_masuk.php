<?= $this->extend('templates/view_template_body'); ?>

<?= $this->section('style'); ?>
<style>
    .table {
        border-collapse: separate;
        border-spacing: 0 5px;
    }

    .table th {
        border-bottom: none;
        text-transform: uppercase;
        font-size: 13px;
        font-weight: bold;
        height: 25px;
    }

    .table tbody tr {
        background-color: white;
    }

    .table tbody tr td:last-child {
        border-right: 1px solid #ebedf2;
    }

    select {
        border-radius: 0 !important;
        border: none !important;
        border-bottom: 1px solid #ebedf2 !important;
        border-right: 1px solid #ebedf2 !important;
        padding: 6px 18px 6px 6px !important;
        font-size: 14px !important;
        color: #7c7c7c !important;
    }

    select:disabled {
        opacity: 0.5 !important;
    }

    .btn {
        border: none !important;
        border-bottom: 1px solid #ebedf2 !important;
        border-radius: 0 !important;
        text-transform: uppercase;
        font-weight: bold;
        padding: 6px 18px;
        color: #fbfbfb;
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

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <td>2</tscope=>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>


</div>

<?= $this->endSection(); ?>


<?= $this->section('script'); ?>

<?= $this->endSection(); ?>