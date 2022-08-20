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

    .table tbody td.harga {
        border-left: 6px solid green !important;
    }

    .table tbody td.rab {
        border-left: 6px solid red !important;
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
        /* color: #7c7c7c !important; */
        color: #495057 !important;
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

    #modal-custom .sections {
        overflow: hidden;
    }

    #modal-custom section {
        padding: 30px;
    }

    #modal-custom section label,
    #modal-custom section select {
        font-size: 18px !important;
    }

    #modal-custom section select {
        padding: 0 0 10px 0 !important;
        border: none !important;
    }

    #modal-custom section button {
        width: 100%;
        border-radius: 3px;
        border: 1px solid #ddd;
        margin-bottom: 26px;
        padding: 15px;
        font-size: 14px;
    }

    #modal-custom section button {
        height: 36px;
        padding: 0;
    }

    #modal-custom section input:focus {
        border-color: #28CA97;
    }

    /* #modal-custom section label[for="check"] {
        margin-bottom: 26px;
        font-size: 14px;
        color: #999;
        display: block;
    } */

    #modal-custom section footer {
        overflow: hidden;
        margin-top: 40px;
    }

    #modal-custom section button {
        background: #5cb85c;
        color: white;
        margin: 0;
        border: 0;
        cursor: pointer;
        width: 50%;
        float: left;
    }

    #modal-custom section button:hover {
        opacity: 0.8;
    }

    #modal-custom section button:nth-child(1) {
        border-radius: 3px 0 0 3px;
        background: #292b2c;
    }

    #modal-custom section button:nth-child(2) {
        border-radius: 0 3px 3px 0;
    }
</style>

<?= $this->endSection(); ?>


<?= $this->section('content'); ?>

<div class="page-header">
    <h1 class="page-title"><?= $title ?></h1>
</div>

<div class="page-category">

    <div class="row g-0 mb-2">
        <div class="col-12 text-right">

            <select id="tahun" name="tahun" class="">
                <option selected>Tahun</option>
                <option value="1">2021</option>
                <option value="2">2022</option>
                <option value="3">2023</option>
            </select>

            <select id="bulan" name="bulan" class="ms-2">
                <?php $bulan = namaBulan(); ?>
                <?php for ($i = 1; $i <= count($bulan); $i++) : ?>
                    <option value=<?= $i ?> <?= ($i == date('m')) ? "selected" : "" ?>><?= $bulan[$i - 1] ?></option>
                <?php endfor; ?>
            </select>

            <select class="ms-2">
                <option value="0" selected>Semua Pekerjaan</option>
                <option value="1">RAB</option>
                <option value="2">HARGA</option>
                <option value="3">REALISASI</option>
            </select>

            <select class="ms-2" style="max-width: 16%;">
                <option value="0" selected>Semua Unit Kerja</option>
                <option value="1">Divisi Transmisi dan Distribusi</option>
            </select>

            <select class="ms-2">
                <option value="0" selected>Semua Pemeriksa</option>
            </select>

            <?php if ($tipe == 1) : ?>
                <a href="<?= base_url('/form-surat-baru') ?>" class="btn btn-success float-end">
                    <span>Surat Baru</span>
                </a>
            <?php endif; ?>
            <a href="<?= base_url('') ?>" class="btn btn-dark float-end me-2">
                <span>Filter</span>
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

                    <?php foreach ($surat as $s) : ?>
                        <tr>
                            <td class="<?= $s->getJenis() ?>">
                                <div class="d-flex">

                                    <div class="col-agenda">
                                        <span>Agenda No.</span>
                                        <span class="nomor"><?= $s->getNoAgenda() ?></span>
                                        <span><?= $s->tgl_agenda ?></span>
                                    </div>

                                    <div class="col-detail">
                                        <a href="<?= base_url('surat/suratdetail') ?>"><?= $s->perihal ?></a>
                                        <div class="d-flex">
                                            <div class="sub-detail" style="min-width: 24%;">
                                                <span data-tooltip="Asal Memo" data-tooltip-position="bottom"><i class="fas fa-map-marker me-1" style="color: #1572E8;"></i><?= $s->unitkerja ?></span>
                                            </div>
                                            <div class="sub-detail ms-3" style="min-width: 17%;">
                                                <span data-tooltip="No. Memo" data-tooltip-position="bottom"><i class="far fa-sticky-note me-1" style="color: red;"></i><?= $s->no_memo ?></span>
                                            </div>
                                            <div class="sub-detail ms-3" style="min-width: 13%;">
                                                <span data-tooltip="Tgl. Memo" data-tooltip-position="bottom"><i class="far fa-calendar me-1" style="color: green;"></i><?= $s->tgl_memo ?></span>
                                            </div>
                                            <div class="sub-detail ms-3" style="min-width: 13%;">
                                                <span data-tooltip="Nilai RAB" data-tooltip-position="bottom"><i class="fas fa-dollar-sign me-1" style="color: orange;"></i><?= $s->nilai ?></span>
                                            </div>
                                            <div class="sub-detail ms-3" style="min-width: 13%;">
                                                <span data-tooltip="Pemeriksa" data-tooltip-position="bottom"><i class="fas fa-user me-1" style="color: blue"></i>
                                                </span>
                                                <a href="#" data-izimodal-open="#modal-custom" data-izimodal-transitionin="fadeInDown"><?= ($s->pemeriksa) ? $s->pemeriksa : "Belum Ada" ?></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </td>
                        </tr>
                    <?php endforeach ?>

                </tbody>
            </table>

        </div>
    </div>

</div>

<!-- Modal structure -->
<div id="modal-custom">
    <div class="sections">
        <section>
            <div class="row g-0 justify-content-between">
                <label for="pemeriksa-modal" class="col-4">Pemeriksa:</label>
                <select id="pemeriksa-modal" name="pemeriksa-modal" class="col-7">
                    <option disabled selected hidden>Pilih Jenis Memo...</option>
                    <option value="1">Harga</option>
                    <option value="2">RAB</option>
                    <option value="3">Realisasi</option>
                    <option value="4">Lainnya</option>
                </select>
            </div>
            <footer>
                <button data-iziModal-close data-iziModal-transitionOut="bounceOutDown">Batal</button>
                <button class="submit">OK</button>
            </footer>
        </section>
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

    $("#modal-custom").iziModal({
        // title: 'Pemeriksa',
        // headerColor: '#1572E8',
        headerColor: '#333333',
        width: 400,
    });
</script>

<?= $this->endSection(); ?>