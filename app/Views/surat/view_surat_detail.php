<?= $this->extend('templates/view_template_body'); ?>

<?= $this->section('style'); ?>
<style>
    .table-detail td {
        padding-right: 0 !important;
    }

    .table-detail td.sub-judul {
        border-top: 1px solid black;
    }

    .table-detail td:first-child {
        border-left: 1px solid black;
    }

    .table-detail td:last-child {
        border-right: 1px solid black;
    }

    .table-detail td:nth-child(even) {
        padding-left: 10px !important;
    }
</style>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<!-- <div class="page-header">
    <h1 class="page-title"><?= $title ?></h1>
</div> -->

<div class="page-category">

    <div class="card">
        <div class="card-body">

            <table class="table table-detail">
                <tbody>

                    <tr>
                        <td colspan="4" class="bg-grey1 text-left sub-judul">USULAN
                            <a href="<?= base_url() ?>" class="">
                                <i class="far fa-trash-alt fa-lg"></i>
                                <span>Hapus</span>
                            </a>
                            <a href="<?= base_url() ?>" class="">
                                <i class="far fa-edit fa-lg"></i>
                                <span>Edit</span>
                            </a>
                            <a href="#revisi" data-toggle="modal" data-target="#tambah-revisi" class="btn-tambah-revisi pull-right">
                                <i class="far fa-share-square fa-lg"></i>
                                <span>Tambah Revisi</span>
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td class="w-25">
                            <div class="d-flex justify-content-between">
                                <span>Perihal</span>
                                <span>:</span>
                            </div>
                        </td>
                        <td colspan="3" class="fw-bold"><?= $surat->perihal ?></td>
                    </tr>

                    <tr>
                        <td class="w-25">
                            <div class="d-flex justify-content-between">
                                <span>Jenis Pekerjaan</span>
                                <span>:</span>
                            </div>
                        </td>
                        <td class="w-25 text-uppercase"><?= $surat->jenis ?></td>
                        <td class="w-25">
                            <div class="d-flex justify-content-between">
                                <span>Nilai</span>
                                <span>:</span>
                            </div>
                        </td>
                        <td class="w-25"><?= $surat->nilai ?></td>
                    </tr>

                    <tr>
                        <td class="w-25">
                            <div class="d-flex justify-content-between">
                                <span>No. Agenda</span>
                                <span>:</span>
                            </div>
                        </td>
                        <td class="w-25"><?= $surat->no_agenda ?></td>
                        <td class="w-25">
                            <div class="d-flex justify-content-between">
                                <span>Tgl. Agenda</span>
                                <span>:</span>
                            </div>
                        </td>
                        <td class="w-25"><?= $surat->tgl_agenda ?></td>
                    </tr>

                    <tr>
                        <td class="w-25">
                            <div class="d-flex justify-content-between">
                                <span>No. Memo Usulan</span>
                                <span>:</span>
                            </div>
                        </td>
                        <td class="w-25"><?= $surat->no_memo ?></td>
                        <td class="w-25">
                            <div class="d-flex justify-content-between">
                                <span>Tgl. Memo Usulan</span>
                                <span>:</span>
                            </div>
                        </td>
                        <td class="w-25"><?= $surat->tgl_memo ?></td>
                    </tr>

                    <tr>
                        <td class="w-25">
                            <div class="d-flex justify-content-between">
                                <span>Asal Memo</span>
                                <span>:</span>
                            </div>
                        </td>
                        <td class="w-25 text-capitalize"><?= $surat->unitkerja->nama ?></td>
                        <td class="w-25">
                            <div class="d-flex justify-content-between">
                                <span>Pemeriksa</span>
                                <span>:</span>
                            </div>
                        </td>
                        <td class="w-25"><?= $surat->pemeriksa->nama ?></td>
                    </tr>

                </tbody>
            </table>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('script'); ?>

<?= $this->endSection(); ?>