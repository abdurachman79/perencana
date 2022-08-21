<?= $this->extend('templates/view_template_body'); ?>

<?= $this->section('style'); ?>
<style>
    #modal-custom section {
        padding: 40px 30px !important;
    }

    #modal-custom .row {
        justify-content: space-between;
        padding-bottom: 30px;
    }
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

    <div class="flash-data" data-flashdata="<?= session()->getFlashdata('flashdata') ?>"></div>

    <?php foreach ($tipe as $t) : ?>
        <div class="card">
            <div class="card-body">

                <div class="row">
                    <div class="col">

                        <table class="table table-bordered table-divisi my-2">

                            <thead>
                                <tr>
                                    <th colspan="4" class="bg-grey1">
                                        <div class="d-flex flex-row justify-content-between">
                                            <h2 class="text-uppercase mb-0"><?= $t->nama ?></h2>
                                            <a href="" class="btn-tambah pull-right" data-id="<?= $t->id ?>" data-singkatan="<?= $t->singkatan ?>">
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
                                    <th scope="col" style="width: 45%;" class="text-center">Nama Unit Kerja</th>
                                    <th scope="col" style="width: 30%;" class="text-center">Kode Unit Kerja</th>
                                    <th scope="col" style="width: 15%;" class="text-center">Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $i = 1 ?>
                                <?php foreach ($unitkerja as $u) : ?>
                                    <?php if ($t->id == $u->tipe) : ?>
                                        <tr>
                                            <td class="text-center"><?= $i++ ?></td>
                                            <td class="text-uppercase"><?= $t->singkatan . ' ' . $u->nama ?></td>
                                            <td class="text-uppercase text-center"><?= $u->kode ?></td>
                                            <td>
                                                <a href="#" class="px-3 btn-edit" data-id="<?= $u->id ?>" data-nama="<?= $u->nama ?>" data-kode="<?= $u->kode ?>" data-tipe="<?= $u->tipe ?>" data-singkatan="<?= $t->singkatan ?>">
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

        <form action="<?= base_url('unitkerja/simpan') ?>" method="POST" id="form-tambah-unitkerja" autocomplete="off">

            <?= csrf_field(); ?>
            <section>
                <div class="row g-0">
                    <label for="tipe-id" class="col-3">Tipe :</label>
                    <div class="col-8">
                        <select id="tipe-id" name="tipe-id" class="text-uppercase w-100" disabled>
                            <?php foreach ($tipe as $t) : ?>
                                <option value="<?= $t->id ?>"><?= $t->singkatan ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>
                <div class="row g-0">
                    <label for="nama-unitkerja" class="col-3"></label>
                    <div class="col-8">
                        <input type="text" id="nama-unitkerja" name="nama-unitkerja" class="w-100">
                    </div>
                </div>
                <div class="row g-0">
                    <label for="kode" class="col-3"></label>
                    <div class="col-8">
                        <input type="text" id="kode" name="kode" class="w-100">
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
    function capitalize(str) {
        return str[0].toUpperCase() + str.slice(1).toLowerCase();
    }

    var modal = $('#modal-custom').iziModal({
        headerColor: '#292b2c',
        width: 500,
    });

    $('#form-tambah-unitkerja').validate({
        rules: {
            'nama-unitkerja': "required",
            'kode': "required"
        },
        messages: {
            'nama-unitkerja': "Kolom ini belum diisi",
            'kode': "Kolom ini belum diisi"
        },
        errorElement: "em",
        errorPlacement: function(error, element) {
            error.addClass("invalid-feedback");
            error.insertAfter(element);
        }
    });

    $('#form-tambah-unitkerja').submit(function() {
        $('#tipe-id').prop('disabled', false);
    });

    $('.btn-tambah').click(function(e) {
        e.preventDefault();

        let tipeId = $(this).data('id');
        let singkatan = capitalize($(this).data('singkatan'));

        modal.iziModal('open');
        modal.iziModal('setTitle', 'Tambah Data');
        modal.iziModal('setSubtitle', singkatan);

        $('#tipe-id').val(tipeId);
        $('label[for="nama-unitkerja"]').text('Nama ' + singkatan + ' :');
        $('label[for="kode"]').text('Kode ' + singkatan + ' :');
    });

    $('.btn-edit').click(function(e) {
        e.preventDefault();

        let id = $(this).data('id');
        let nama = $(this).data('nama');
        let kode = $(this).data('kode');
        let tipeId = $(this).data('tipe');
        let singkatan = capitalize($(this).data('singkatan'));

        modal.iziModal('open');
        modal.iziModal('setTitle', 'Edit Data');
        modal.iziModal('setSubtitle', singkatan);

        $('#tipe-id').prop('disabled', false);
        $('#tipe-id').val(tipeId);
        $('#nama-unitkerja').val(nama);
        $('#kode').val(kode);

        $('label[for="nama-unitkerja"]').text('Nama ' + singkatan + ' :');
        $('label[for="kode"]').text('Kode ' + singkatan + ' :');

        $('#form-tambah-unitkerja').prop('action', base_url + '/unitkerja/update/' + id);
    });
</script>

<?= $this->endSection(); ?>