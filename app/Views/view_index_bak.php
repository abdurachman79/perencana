<?= $this->extend('templates/view_template_body'); ?>

<?= $this->section('style'); ?>
<style>
    .table-dispos {
        border: 1px solid #333333;
        border-collapse: collapse;
        width: 100%;
        /* padding: 5px; */
    }

    .table-dispos td {
        border-bottom: 1px solid #333333 !important;
        /* text-align: center; */
        /* padding: 5px; */
        /* background: #ffffff; */
        /* color: #313030; */
        height: 35px !important;
    }

    .table-dispos .header-dispos {
        text-transform: uppercase;
        text-align: center;
        font-size: 18px;
        font-weight: bold;
        height: 25px !important;
        line-height: 25px;
    }

    .table-dispos label {
        cursor: pointer;
    }

    .table-dispos td.top-pad {
        padding-top: 10px !important;
    }

    .table-dispos td.pl-none {
        padding-left: 0 !important;
    }

    .table-dispos td.pr-none {
        padding-right: 0 !important;
    }

    .table-dispos td.px-none {
        padding-left: 0 !important;
        padding-right: 0 !important;
    }

    /* .table-dispos td.bot-pad {
        padding-bottom: 4px !important;
    } */

    .table-dispos .no-border-bottom {
        border-bottom: none !important;
    }

    .table-dispos .w-15 {
        width: 15% !important;
    }

    .table-dispos .w-20 {
        width: 20% !important;
    }

    .table-dispos .w-25 {
        width: 25% !important;
    }

    .table-dispos .w-30 {
        width: 30% !important;
    }

    .table-dispos .w-35 {
        width: 35% !important;
    }

    .table-dispos .w-40 {
        width: 40% !important;
    }

    .table-dispos select,
    input {
        width: 100%;
        border: none;
        outline: none;
    }

    .table-dispos .catatan {
        border-top: 1px solid #333333 !important;
        border-bottom: none !important;
        font-weight: bold;
        font-size: 16px;
        text-decoration: underline;
        letter-spacing: 1px;
    }

    .table-dispos select {
        background: url("data:image/svg+xml,<svg height='10px' width='10px' viewBox='0 0 16 16' fill='%23000000' xmlns='http://www.w3.org/2000/svg'><path d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/></svg>") no-repeat;
        background-position: calc(100% - 0.75rem) center !important;
        -moz-appearance: none !important;
        -webkit-appearance: none !important;
        appearance: none !important;
        padding-right: 2rem !important;
        cursor: pointer;
    }
</style>
<?= $this->endSection(); ?>


<?= $this->section('content'); ?>

<div class="page-header">
    <h4 class="page-title">Home</h4>
</div>

<div class="page-category">

    <div class="row justify-content-center">
        <div class="col-9">

            <div class="card">
                <div class="card-body">

                    <!-- <div class="row justify-content-center">
                    <div class="col-9"> -->

                    <table class="table table-dispos">
                        <tbody>
                            <tr>
                                <td rowspan="4" class="">
                                    <img src="<?= base_url(); ?>/public/assets/img/logo-tirtanadi.png" width="80px" height="84px" alt="tirtanadi">
                                </td>
                                <td colspan="3" class="header-dispos no-border-bottom top-pad">Divisi Perencanaan Air Minum</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="header-dispos no-border-bottom">Perumda Tirtanadi Provsu</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="header-dispos no-border-bottom">Intern</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="bot-pad">
                                    <!-- <div class="row mt-2">
                                        <label for="diterima" class="col-3">Diterima tgl.</label>
                                        <div class="col-3">
                                            <input type="date" id="diterima" name="diterima">
                                        </div>
                                        <label for="diterima" class="col-3">Agenda No.</label>
                                        <div class="col-3">
                                            <input type="text" id="diterima" name="diterima" value="MO-1234/PRC/01/2022">
                                        </div>
                                    </div> -->
                                </td>
                            </tr>
                            <tr>
                                <td class="w-15 pr-none">Kepada</td>
                                <td class="w-30 px-none">Kadiv Perencanaan Air Minum</td>
                                <td class="w-15 pr-none"><label for="diterima">Diterima tgl.</label></td>
                                <td class="w-30 pl-none"><input type="date" id="diterima" name="diterima"></td>
                            </tr>
                            <tr>
                                <td class="pr-none">Dari</td>
                                <td class="px-none">
                                    <select>
                                        <option selected></option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </td>
                                <td class="pr-none"><label for="agenda">Agenda No.</label></td>
                                <td class="pl-none"><input type="text" id="agenda" name="agenda"></td>
                            </tr>
                            <tr>
                                <td class="pr-none">Diteruskan ke</td>
                                <td class="px-none">
                                    <select>
                                        <option selected></option>
                                        <option value="1">Perencana Teknik</option>
                                        <option value="2">Gambar Teknik</option>
                                        <option value="3">Pengawasan Teknik</option>
                                    </select>
                                </td>
                                <td class="pr-none"><label for="sifat">Sifat</label></td>
                                <td class="pl-none"><input type="text" id="sifat" name="sifat"></td>
                            </tr>
                            <tr>
                                <td class="pr-none"><label for="perihal">Perihal</label></td>
                                <td class="pl-none" colspan="3">
                                    <input type="text" id="perihal" name="perihal">
                                </td>
                            </tr>
                            <?php
                            $data = [
                                ['Dana kerja', 'Terus monitor & tagih'],
                                ['Setuju lembur biasa/istimewa/luar biasa', 'Tidak bisa hadir'],
                                ['Jika pekerjaan cepat selesai, tidak perlu lembur', 'Percepat pemasangan pipa'],
                                ['Monitor', 'Utk ditanggulangi & kerjakan dgn baik'],
                                ['Segera perbaiki', 'Carikan jalan keluar'],
                                ['Penuhi sesuai kebutuhan', 'Pembacaan meter harap disesuaikan'],
                                ['Setuju usul, proses segera', 'Pada prinsipnya OK, buat perjanjian'],
                                ['Cek & Lapor', 'Perhatikan personil'],
                                ['Untuk menjadi perhatian', 'Setuju dipesan'],
                                ['Cek kebenarannya & selesaikan sesuai aturan', 'Bagaimana ini'],
                                ['Teliti & perbaiki', ' Arsip'],
                                ['Bahan Saudara', '']
                            ];
                            ?>

                            <?php for ($i = 0; $i < count($data); $i++) : ?>
                                <tr>
                                    <td colspan="2" class="no-border-bottom">
                                        <i class="far fa-square"></i>
                                        <span class="ml-2"><?= $data[$i][0] ?></span>
                                    </td>
                                    <td colspan="2" class="no-border-bottom">
                                        <i class="far fa-square"></i>
                                        <span class="ml-2"><?= $data[$i][1] ?></span>
                                    </td>
                                </tr>
                            <?php endfor; ?>

                            <tr>
                                <td colspan="4" class="catatan">CATATAN:</td>
                            </tr>

                            <?php for ($i = 0; $i <= 8; $i++) : ?>
                                <tr>
                                    <td colspan="4" class="no-border-bottom"></td>
                                </tr>
                            <?php endfor; ?>

                        </tbody>
                    </table>


                    <!-- </div>
                </div> -->

                    <!-- <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">First</th>
                                <th scope="col">Second</th>
                                <th scope="col">Third</th>
                                <th scope="col">Fourth</th>
                                <th scope="col">Fifth</th>
                                <th scope="col">Sixth</th>
                                <th scope="col">Sixth</th>
                                <th scope="col">Sixth</th>
                                <th scope="col">Sixth</th>
                                <th scope="col">Sixth</th>
                                <th scope="col">Sixth</th>
                                <th scope="col">Sixth</th>
                                <th scope="col">Last</th>
                            </tr>
                        </thead>
                    </table>
                </div> -->

                </div>
            </div>
        </div>

    </div>

</div>



<?= $this->endSection(); ?>