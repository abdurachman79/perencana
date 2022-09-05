<?= $this->extend('templates/view_template_body'); ?>

<?= $this->section('style'); ?>
<style>
    #modal-custom section {
        padding: 40px 30px !important;
    }

    #modal-custom section select {
        padding-top: 2px !important;
        border-bottom: 1px solid gray !important;
    }

    #modal-custom .row {
        justify-content: space-between;
        /* align-items: center; */
        padding-bottom: 30px;
    }

    .invalid-feedback {
        text-transform: none !important;
        padding-left: 12px;
        margin-top: 0 !important;
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

    <div class="card">
        <div class="card-body">

            <div class="row">
                <div class="col">

                    <table class="table table-bordered table-divisi my-2">

                        <thead>
                            <tr>
                                <th colspan="7" class="bg-grey1">
                                    <a href="<?= base_url('users/form-user-baru') ?>" class="btn-tambah pull-right">
                                        <i class="fas fa-plus-square fa-lg"></i>
                                        <span>Data Baru</span>
                                    </a>
                                </th>
                            </tr>
                        </thead>

                        <thead>
                            <tr class="text-uppercase">
                                <th scope="col" style="width: 10%;" class="text-center">No</th>
                                <th scope="col" style="width: 20%;" class="text-center">Nama</th>
                                <th scope="col" style="width: 20%;" class="text-center">Username</th>
                                <th scope="col" style="width: 10%;" class="text-center">Inisial</th>
                                <th scope="col" style="width: 10%;" class="text-center">Bidang</th>
                                <th scope="col" style="width: 10%;" class="text-center">Level</th>
                                <th scope="col" style="width: 15%;" class="text-center">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i = 1 ?>
                            <?php foreach ($users as $u) : ?>
                                <tr>
                                    <td class="text-center"><?= $i++ ?></td>
                                    <td class="text-uppercase"><?= $u->nama ?></td>
                                    <td class="text-uppercase"><?= $u->username ?></td>
                                    <td class="text-uppercase text-center"><?= $u->inisial ?></td>
                                    <td class="text-uppercase text-center"><?= $u->bidang->kode ?></td>
                                    <td class="text-uppercase text-center"><?= $u->level->nama ?></td>
                                    <td>
                                        <a href="#" class="px-3 btn-edit" data-id="<?= $u->id ?>">
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

        <form action="<?= base_url('users/simpanuser') ?>" method="POST" id="form-tambah-user" autocomplete="off">

            <?= csrf_field(); ?>
            <section>
                <div class="row g-0">

                    <div class="col-6 pe-4">
                        <div class="mb-4">
                            <label for="nama" class="">Nama</label>
                            <input type="text" id="nama" name="nama" class="w-100">
                        </div>
                        <div class="mb-4">
                            <label for="inisial" class="">Inisial</label>
                            <input type="text" id="inisial" name="inisial" class="w-100">
                        </div>
                        <div class="mb-4">
                            <label for="username" class="">Username</label>
                            <input type="text" id="username" name="username" class="w-100">
                        </div>
                        <div>
                            <label for="password" class="">Password</label>
                            <input type="password" id="password" name="password" class="w-100">
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="mb-4">
                            <label for="tipe-id" class="">Bidang</label>
                            <select id="bidang" name="bidang" class="text-uppercase w-100">
                                <?php foreach ($bidang as $b) : ?>
                                    <option value="<?= $b->id ?>"><?= $b->nama ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div>
                            <label for="level" class="">Level</label>
                            <select id="level" name="level" class="text-uppercase w-100">
                                <?php foreach ($level as $l) : ?>
                                    <option value="<?= $l->id ?>"><?= $l->nama ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
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
        subtitle: 'User',
        headerColor: '#292b2c',
        width: 700,
    });

    $('#form-tambah-user').validate({
        rules: {
            'nama': "required",
            'inisial': {
                required: true,
                remote: {
                    url: base_url + "/users/isinisialavailable",
                    type: "post",
                    data: {
                        'inisial': function() {
                            return $('#inisial').val();
                        }
                    }
                }
            },
            'username': {
                required: true,
                remote: {
                    url: base_url + "/users/isusernameavailable",
                    type: "post",
                    data: {
                        'username': function() {
                            return $('#username').val();
                        }
                    }
                }
            },
            'password': "required",
            'bidang': "required",
            'level': "required",
        },
        messages: {
            'nama': "Kolom ini belum diisi",
            'inisial': {
                required: "Kolom ini belum diisi",
                remote: "Inisial sudah digunakan"
            },
            'username': {
                required: "Kolom ini belum diisi",
                remote: "Username sudah terdaftar"
            },
            'password': "Kolom ini belum diisi",
            'bidang': "Kolom ini belum diisi",
            'level': "Kolom ini belum diisi",
        },
        errorElement: "em",
        errorPlacement: function(error, element) {
            error.addClass("invalid-feedback");
            error.insertBefore(element);
        }
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

        $('#password').parent().hide();

    });
</script>

<?= $this->endSection(); ?>