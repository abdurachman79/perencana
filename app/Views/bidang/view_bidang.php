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
</div>

<div class="page-category">

    <div class="card">
        <div class="card-body">

            <div class="flash-data" data-flashdata="<?= session()->getFlashdata('flashdata') ?>"></div>

            <div class="row">
                <div class="col mb-4">

                    <table class="table table-bordered table-divisi my-2">

                        <thead>
                            <tr>
                                <th colspan="4" class="bg-grey1">
                                    <div class="">
                                        <!-- <h2 class="text-uppercase mb-0">Divisi</h2> -->
                                        <a href="#" class="btn-tambah pull-right">
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
                                <th scope="col" style="width: 45%;" class="">Nama Bidang</th>
                                <th scope="col" style="width: 30%;" class="text-center">Kode</th>
                                <th scope="col" style="width: 15%;" class="text-center">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i = 1 ?>
                            <?php foreach ($bidang as $b) : ?>
                                <tr>
                                    <td class="text-center"><?= $i++ ?></td>
                                    <td class="text-uppercase"><?= $b->nama ?></td>
                                    <td class="text-uppercase text-center"><?= $b->kode ?></td>
                                    <td>
                                        <a href="#" class="px-3 btn-edit" data-id="<?= $b->id ?>" data-nama="<?= $b->nama ?>" data-kode="<?= $b->kode ?>">
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

        <form action="<?= base_url('bidang/simpan') ?>" method="POST" id="form-tambah-bidang" autocomplete="off">

            <?= csrf_field(); ?>
            <section>
                <div class="row g-0">
                    <label for="nama" class="col-3">Nama Bidang :</label>
                    <div class="col-8">
                        <input type="text" id="nama" name="nama" class="w-100">
                    </div>
                </div>
                <div class="row g-0">
                    <label for="kode" class="col-3">Kode :</label>
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
    $(document).ready(function() {

        var modal = $('#modal-custom').iziModal({
            subtitle: 'Bidang',
            headerColor: '#292b2c',
            width: 500,
        });

        $('#form-tambah-bidang').validate({
            rules: {
                'nama': "required",
                'kode': "required",
            },
            messages: {
                'nama': "Kolom ini belum diisi",
                'kode': "Kolom ini belum diisi",
            },
            errorElement: "em",
            errorPlacement: function(error, element) {
                error.addClass("invalid-feedback");
                error.insertAfter(element);
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

            let id = $(this).data('id');
            let nama = $(this).data('nama');
            let kode = $(this).data('kode');

            $('#nama').val(nama);
            $('#kode').val(kode);

            $('#form-tambah-bidang').prop('action', base_url + '/bidang/update/' + id);
        });

    });
</script>

<?= $this->endSection(); ?>