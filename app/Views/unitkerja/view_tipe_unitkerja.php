<?= $this->extend('templates/view_template_body'); ?>

<?= $this->section('style'); ?>
<style>
    #modal-custom section {
        padding: 40px 30px !important;
    }

    #modal-custom .row {
        justify-content: space-between;
        align-items: center;
        padding-bottom: 30px;
    }
</style>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<div class="page-header">
    <h1 class="page-title"><?= $title ?></h1>
</div>

<div class="page-category">

    <div class="card">
        <div class="card-body">

            <div class="flash-data" data-flashdata="<?= session()->getFlashdata('pesan') ?>"></div>

            <div class="row">
                <div class="col mb-4">

                    <table class="table table-bordered table-divisi my-2">

                        <thead>
                            <tr>
                                <th colspan="4" class="bg-grey1">
                                    <div class="">
                                        <!-- <h2 class="text-uppercase mb-0">Divisi</h2> -->
                                        <a href="#" class="btn-tambah-unitkerja pull-right" data-izimodal-open="#modal-custom" data-izimodal-transitionin="fadeInDown">
                                            <i class="fas fa-plus-square fa-lg"></i>
                                            <span>Data Baru</span>
                                        </a>
                                    </div>
                                </th>
                            </tr>
                        </thead>

                        <thead>
                            <tr class="text-uppercase">
                                <th scope="col" style="width: 10%;" class="text-center">No</th>
                                <th scope="col" style="width: 45%;" class="text-center">Nama Tipe</th>
                                <th scope="col" style="width: 30%;" class="text-center">Singkatan</th>
                                <th scope="col" style="width: 15%;" class="text-center">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($tipe as $t) : ?>
                                <tr>
                                    <td class="text-center"><?= $t->id ?></td>
                                    <td class="text-uppercase"><?= $t->getNama() ?></td>
                                    <td class="text-center"><?= $t->getSingkatan() ?></td>
                                    <td>
                                        <a href="<?= base_url() ?>" class="px-3">
                                            <i class="far fa-edit fa-lg"></i>
                                            <span>Edit</span>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>

                    </table>

                </div>
            </div>


        </div>
    </div>

</div>

<!-- Modal structure -->
<div id="modal-custom">
    <div class="sections">
        <section>
            <div class="row g-0">
                <label for="nama-tipe" class="col-3">Nama Tipe :</label>
                <input type="text" id="nama-tipe" name="nama-tipe" class="col-8">
            </div>
            <div class="row g-0">
                <label for="singkatan" class="col-3">Singkatan :</label>
                <input type="text" id="singkatan" name="singkatan" class="col-8">
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
    $("#modal-custom").iziModal({
        title: 'Data Baru',
        subtitle: 'Tipe Unit Kerja',
        // headerColor: '#1572E8',
        headerColor: '#292b2c',
        width: 500,
    });
</script>

<?= $this->endSection(); ?>