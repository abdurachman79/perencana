<?= $this->extend('templates/view_template_body'); ?>

<?= $this->section('style'); ?>
<style>
</style>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<div class="page-header d-flex justify-content-between">
    <h1 class="page-title"><?= $title ?></h1>
    <a href="<?= base_url('unitkerja/tipe') ?>" class="btn btn-success">
        <span>Role User</span>
    </a>
</div>

<div class="page-category">

    <div class="flash-data" data-flashdata="<?= session()->getFlashdata('flashdata') ?>"></div>

    <div class="card">
        <div class="card-body">

            <div class="row">
                <div class="col">



                </div>
            </div>


        </div>
    </div>

</div>



<?= $this->endSection(); ?>

<?= $this->section('script'); ?>

<script>

</script>

<?= $this->endSection(); ?>