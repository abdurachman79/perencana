<?= $this->extend('templates/view_template_body'); ?>

<?= $this->section('style'); ?>
<style>
</style>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<div class="page-header d-flex justify-content-between">
    <h1 class="page-title"><?= $title ?></h1>
    <a href="<?= base_url('unitkerja/tipe') ?>" class="btn btn-success">
        <span>Tipe Unit Kerja</span>
    </a>
</div>

<div class="page-category">

    <div class="card">
        <div class="card-body">

            <div class="flash-data" data-flashdata="<?= session()->getFlashdata('pesan') ?>"></div>

            <div class="row">
                <div class="col">

                    <table class="table table-bordered table-divisi my-2">

                        <thead>
                            <tr>
                                <th colspan="4" class="bg-grey1">
                                    <div class="d-flex flex-row justify-content-between">
                                        <h2 class="text-uppercase mb-0">Divisi</h2>
                                        <a href="" class="btn-tambah-unitkerja pull-right" data-id="" data-singkatan="">
                                            <i class="fas fa-plus-square fa-lg"></i>
                                            <span>Tambah Divisi</span>
                                        </a>
                                    </div>
                                </th>
                            </tr>
                        </thead>

                        <thead>
                            <tr class="text-uppercase">
                                <th scope="col" style="width: 10%;" class="text-center">No</th>
                                <th scope="col" style="width: 45%;" class="text-center">Nama Unit Kerja</th>
                                <th scope="col" style="width: 30%;" class="text-center">Kode Unit Kerja</th>
                                <th scope="col" style="width: 15%;" class="text-center">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-uppercase">Divisi Perencanaan Air Minum</td>
                                <td class="text-center">PRC</td>
                                <td>
                                    <a href="<?= base_url() ?>" class="px-3">
                                        <i class="far fa-edit fa-lg"></i>
                                        <span>Edit</span>
                                    </a>
                                </td>
                            </tr>
                        </tbody>

                    </table>

                </div>
            </div>


        </div>
    </div>

</div>


<?= $this->endSection(); ?>

<?= $this->section('script'); ?>

<?= $this->endSection(); ?>