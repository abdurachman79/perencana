<?= $this->extend('templates/view_template_body'); ?>

<?= $this->section('style'); ?>
<style>
    .lembar-dposisi {
        border: 1px solid #333333;
    }

    .lembar-dposisi .img-container {
        display: flex;
        justify-content: center;
        margin-top: 15px;
    }

    .lembar-dposisi .header {
        margin-top: 15px;
    }

    .lembar-dposisi .header h3 {
        margin: 0;
        line-height: 24px;
        display: flex;
        justify-content: center;
        text-transform: uppercase;
        font-weight: bold;
        letter-spacing: 1px;
    }

    .lembar-dposisi .underline {
        border-bottom: 1px solid #333333;
    }

    .lembar-dposisi .input-data {
        padding: 10px 15px 0px 15px;
        display: flex;
        flex-direction: column-reverse;
    }

    .lembar-dposisi .input-data label {
        line-height: 13px;
        padding-left: 2px;
        text-transform: uppercase;
        font-size: 15px !important;
        font-weight: bold;
    }

    .lembar-dposisi .invalid-feedback {
        text-transform: none !important;
        padding-left: 12px;
        margin-top: 0 !important;
    }

    .input-data input,
    select {
        border: none;
        height: 30px;
        font-size: 16px;
    }

    .input-data input:focus~label,
    select:focus~label {
        color: #1572E8 !important;
    }

    .input-data label:hover {
        cursor: pointer;
    }

    .lembar-dposisi .catatan {
        height: 250px;
        text-transform: uppercase;
        font-weight: bold;
        font-size: 18px;
        text-decoration: underline;
        letter-spacing: 1.5px;
    }

    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }
</style>
<?= $this->endSection(); ?>


<?= $this->section('content'); ?>

<!-- <div class="page-header">
    <h4 class="page-title">Home</h4>
</div> -->

<div class="page-category">

    <div class="row justify-content-center">
        <div class="col-10">

            <form action="<?= base_url('surat/formsuratbaru') ?>" method="POST" id="form-lembar-disposisi" autocomplete="off">

                <?= csrf_field(); ?>

                <div class="flash-data" data-flashdata="<?= session()->getFlashdata('flashdata') ?>"></div>

                <div class="card">
                    <div class="card-body">

                        <div class="lembar-dposisi">

                            <div class="row g-0 mb-3">

                                <div class="col-2 img-container">
                                    <img src="<?= base_url(); ?>/public/assets/img/logo-tirtanadi.png" width="80px" height="85px" alt="tirtanadi">
                                </div>

                                <div class="col-10 header">
                                    <h3>Divisi Perencanaan Air Minum</h3>
                                    <h3>Perumda Tirtanadi Provsu</h3>
                                    <h3>Intern</h3>
                                </div>

                            </div>

                            <div class="underline"></div>

                            <div class="row g-0">

                                <div class="col-6 input-data">
                                    <input type="text" id="kepada" name="kepada" value="Kadiv. Perencanaan Air Minum" readonly>
                                    <label for="kepada">Kepada</label>
                                </div>

                                <div class="col-6 input-data">
                                    <select id="unitkerja" name="unitkerja">
                                        <option disabled selected hidden>Pilih Unit Kerja...</option>
                                        <option value="1">Divisi Umum</option>
                                        <option value="2">Divisi Pengolahan Air Minum</option>
                                        <option value="3">Divisi Peralatan Teknik</option>
                                    </select>
                                    <label for="unitkerja">Dari</label>
                                </div>

                                <div class="underline"></div>

                                <div class="col-6 input-data">
                                    <input type="date" id="tgl-agenda" name="tgl-agenda" class="tanggal">
                                    <label for="tgl-agenda">Diterima Tgl.</label>
                                </div>

                                <div class="col-6 input-data">
                                    <input type="date" id="tgl-memo" name="tgl-memo" class="tanggal">
                                    <label for="tgl-memo">Tgl. Memo</label>
                                </div>

                                <div class="underline"></div>

                                <div class="col-6 input-data">
                                    <div class="d-flex">
                                        <input type="text" id="no-agenda1" name="no-agenda1" oninput="numberOnly(this.id)" maxlength="5" style="width: 15%;">
                                        <input type="text" id="no-agenda2" name="no-agenda2" value="/PRC/<?= bulanRomawi() ?>/<?= date('Y') ?>" readonly>
                                    </div>
                                    <label for="no-agenda1">Agenda No.</label>
                                </div>

                                <div class="col-6 input-data">
                                    <input type="text" id="no-memo" name="no-memo" oninput="(this.value = this.value.toUpperCase())">
                                    <label for="no-memo-usulan">No. Memo</label>
                                </div>

                                <div class="underline"></div>

                                <div class="col-6 input-data">
                                    <select id="jenis" name="jenis">
                                        <option disabled selected hidden>Pilih Jenis Memo...</option>
                                        <option value="1">Harga</option>
                                        <option value="2">RAB</option>
                                        <option value="3">Realisasi</option>
                                        <option value="4">Lainnya</option>
                                    </select>
                                    <label for="jenis">Jenis Memo</label>
                                </div>

                                <div class="col-6 input-data">
                                    <input type="text" id="nilai" name="nilai">
                                    <label for="nilai">Nilai Memo</label>
                                </div>

                                <div class="underline"></div>

                                <div class="col-6 input-data">
                                    <select id="bidang" name="bidang">
                                        <option disabled selected hidden>Pilih Bidang...</option>
                                        <option value="1">Kabid Perencana Teknik</option>
                                        <option value="2">Kabid Pengawasan Teknik</option>
                                        <option value="3">Kabid Gambar Teknik</option>
                                    </select>
                                    <label for="bidang">Diteruskan ke</label>
                                </div>

                                <div class="col-6 input-data">
                                    <input type="text" id="sifat" name="sifat">
                                    <label for="sifat">Sifat</label>
                                </div>

                                <div class="underline"></div>

                                <div class="col-12 input-data">
                                    <input type="text" id="perihal" name="perihal">
                                    <label for="perihal">Perihal</label>
                                </div>

                                <div class="underline"></div>

                                <input type="hidden" id="status" name="status" value="1">
                                <input type="hidden" id="ada-revisi" name="ada-revisi" value="0">

                            </div>

                            <?php
                            $data = [
                                'Dana kerja', 'Setuju lembur biasa/istimewa',
                                'Tidak perlu lembur', 'Monitor',
                                'Utk dikerjakan dgn baik', 'Segera perbaiki',
                                'Carikan jalan keluar', 'Penuhi sesuai kebutuhan',
                                'Setuju usul, proses segera', 'Setuju Prinsip',
                                'Cek & Lapor', 'Perhatikan personil',
                                'Untuk menjadi perhatian', 'Setuju dipesan',
                                'Cek & selesaikan sesuai aturan',
                                'Teliti & perbaiki', ' Arsip',
                                'Bahan Saudara'
                            ];
                            ?>

                            <div class="row g-0 py-2 px-3">
                                <?php for ($i = 0; $i < count($data); $i++) : ?>
                                    <div class="col-6 d-flex align-items-center mb-1">
                                        <i class="far fa-square fa-2x"></i>
                                        <span class="font-13px ms-2"><?= $data[$i] ?></span>
                                    </div>
                                <?php endfor; ?>
                            </div>

                            <div class="underline"></div>

                            <div class="row g-0 pt-1 px-3">
                                <div class="col-12 catatan">Catatan:</div>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-success me-4" id="btn-simpan-disposisi">
                        <i class="fas fa-save pe-2"></i>
                        <span>Simpan</span>
                    </button>
                    <button type="submit" class="btn btn-dark" id="btn-simpan-cetak-disposisi">
                        <i class="fas fa-print pe-2"></i>
                        <span>Simpan & Cetak</span>
                    </button>
                </div>

            </form>

        </div>
    </div>

</div>


<?= $this->endSection(); ?>


<?= $this->section('script'); ?>

<!-- jQuery Validate -->
<script src="<?= base_url() ?>/public/assets/js/plugin/jquery-validate/jquery.validate.min.js"></script>

<script>
    document.getElementById('tgl-agenda').value = new moment().format('YYYY-MM-DD');
    document.getElementById('tgl-memo').value = new moment().format('YYYY-MM-DD');

    function numberOnly(id) {
        let elem = document.getElementById(id);
        elem.value = elem.value.replace(/[^0-9]/gi, "");
    }

    $(document).ready(function() {
        $('#form-lembar-disposisi').validate({
            rules: {
                'unitkerja': "required",
                'tgl-agenda': "required",
                'no-agenda1': "required",
                'tgl-memo': "required",
                'no-memo': "required",
                'jenis': "required",
                'bidang': "required",
                'perihal': "required",
            },
            messages: {
                'unitkerja': "Kolom ini belum diisi",
                'tgl-agenda': "Kolom ini belum diisi",
                'no-agenda1': "Kolom ini belum diisi",
                'tgl-memo': "Kolom ini belum diisi",
                'no-memo': "Kolom ini belum diisi",
                'jenis': "Kolom ini belum diisi",
                'bidang': "Kolom ini belum diisi",
                'perihal': "Kolom ini belum diisi",
            },
            errorElement: "em",
            errorPlacement: function(error, element) {
                error.addClass("invalid-feedback");
                if (element.prop("name") === "no-agenda1") {
                    error.appendTo(element.parent().next("label"))
                } else {
                    error.appendTo(element.next("label"))
                }
            }
        });
    });
</script>

<?= $this->endSection(); ?>