<?= $this->extend('templates/view_template_body'); ?>

<?= $this->section('style'); ?>

<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<div class="page-header">
    <h1 class="page-title"><?= $title ?></h1>
</div>

<div class="page-category">

    <div class="row justify-content-center">
        <div class="col-12">

            <div class="card">
                <div class="card-body">

                </div>
            </div>

        </div>
    </div>

</div>


<?= $this->endSection(); ?>

<?= $this->section('script'); ?>

<?= $this->endSection(); ?>