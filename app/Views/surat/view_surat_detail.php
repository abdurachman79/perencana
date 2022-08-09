<?= $this->extend('templates/view_template_body'); ?>

<?= $this->section('style'); ?>

<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<div class="page-header">
    <h1 class="page-title"><?= $title ?></h1>
</div>

<div class="page-category">

    <div class="card">
        <div class="card-body">

            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td colspan="4" class="bg-grey1 text-left sub-judul">USULAN
                            <a href="<?= base_url() ?>" class="ml-4 btn-hapus-surat pull-right">
                                <i class="far fa-trash-alt fa-lg"></i>
                                <span>Hapus</span>
                            </a>
                            <a href="<?= base_url() ?>" class="ml-4 btn-edit-usulan pull-right">
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
                        <td class="w-25">Jenis Pekerjaan &nbsp &nbsp:</td>
                        <td colspan="3">RAB</td>
                    </tr>
                    <tr>
                        <td>Pekerjaan &nbsp &nbsp:</td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td>Asal Surat &nbsp &nbsp:</td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td>User &nbsp &nbsp:</td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td>Pemeriksa &nbsp &nbsp:</td>
                        <td colspan="3"></td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('script'); ?>

<?= $this->endSection(); ?>