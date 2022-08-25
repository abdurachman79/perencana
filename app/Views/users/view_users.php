<?= $this->extend('templates/view_template_body'); ?>

<?= $this->section('style'); ?>
<style>
    #modal-custom section {
        padding: 40px 30px !important;
    }

    #modal-custom .row {
        justify-content: space-between;
        /* align-items: center; */
        padding-bottom: 30px;
    }
</style>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<div class="page-header d-flex justify-content-between">
    <h1 class="page-title"><?= $title ?></h1>
    <a href="<?= base_url('users/level') ?>" class="btn btn-success">
        <span>Level User</span>
    </a>
</div>

<div class="page-category">

    <div class="flash-data" data-flashdata="<?= session()->getFlashdata('flashdata') ?>"></div>

    <?php foreach ($level as $l) : ?>
        <div class="card">
            <div class="card-body">

                <div class="row">
                    <div class="col">

                        <table class="table table-bordered table-divisi my-2">

                            <thead>
                                <tr>
                                    <th colspan="5" class="bg-grey1">
                                        <div class="d-flex flex-row justify-content-between">
                                            <h2 class="text-uppercase mb-0"><?= $l->nama ?></h2>
                                            <a href="" class="btn-tambah pull-right" data-id="<?= $l->id ?>" data-level="<?= $l->level ?>">
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
                                    <th scope="col" style="width: 45%;" class="text-center">Nama User</th>
                                    <th scope="col" style="width: 15%;" class="text-center">Inisial</th>
                                    <th scope="col" style="width: 15%;" class="text-center">Aktif</th>
                                    <th scope="col" style="width: 15%;" class="text-center">Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $i = 1 ?>
                                <?php foreach ($users as $u) : ?>
                                    <?php if ($l->id == $u->level) : ?>
                                        <tr>
                                            <td class="text-center"><?= $i++ ?></td>
                                            <td class="text-uppercase"><?= $u->nama ?></td>
                                            <td class="text-uppercase text-center"><?= $u->inisial ?></td>
                                            <td class="text-uppercase text-center"><?= $u->is_aktif ?></td>
                                            <td>
                                                <a href="#" class="px-3 btn-edit" data-id="<?= $u->id ?>">
                                                    <i class="far fa-edit fa-lg"></i>
                                                    <span>Edit</span>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endif ?>
                                <?php endforeach ?>
                            </tbody>

                        </table>

                    </div>
                </div>


            </div>
        </div>
    <?php endforeach ?>

</div>


<!-- Modal structure -->
<div id="modal-custom">
    <div class="sections">

        <form action="<?= base_url('users/simpanuser') ?>" method="POST" id="form-tambah-user" autocomplete="off">

            <?= csrf_field(); ?>
            <section>
                <div class="row g-0">
                    <label for="nama" class="col-3">Nama :</label>
                    <div class="col-8">
                        <input type="text" id="nama" name="nama" class="w-100">
                    </div>
                </div>
                <div class="row g-0">
                    <label for="inisial" class="col-3">Inisial :</label>
                    <div class="col-8">
                        <input type="text" id="inisial" name="inisial" class="w-100">
                    </div>
                </div>
                <div class="row g-0">
                    <label for="tipe-id" class="col-3">Tipe :</label>
                    <div class="col-8">
                        <select id="bidang" name="bidang" class="text-uppercase w-100">
                            <?php foreach ($bidang as $b) : ?>
                                <option value="<?= $b->id ?>"><?= $b->nama ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>
                <div class="row g-0">
                    <label for="username" class="col-3">Username :</label>
                    <div class="col-8">
                        <input type="text" id="username" name="username" class="w-100">
                    </div>
                </div>
                <div class="row g-0">
                    <label for="level" class="col-3">Level :</label>
                    <div class="col-8">
                        <input type="text" id="level" name="level" class="w-100" oninput="numberOnly(this.id)" maxlength="5">
                    </div>
                </div>
                <footer>
                    <button data-iziModal-close>Batal</button>
                    <button class="submit">Simpan</button>
                </footer>
            </section>

        </form>

    </div>
</div>



<?= $this->endSection(); ?>

<?= $this->section('script'); ?>

<script>
    var modal = $('#modal-custom').iziModal({
        headerColor: '#292b2c',
        width: 500,
    });

    $('.btn-tambah').click(function(e) {
        e.preventDefault();

        modal.iziModal('open');
        modal.iziModal('setTitle', 'Tambah Data');
    });

    $('.btn-edit').click(function(e) {
        e.preventDefault();

        modal.iziModal('open');
        modal.iziModal('setTitle', 'Edit Data');

    });
</script>

<?= $this->endSection(); ?>