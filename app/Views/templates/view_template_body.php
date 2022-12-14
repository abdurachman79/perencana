<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Divisi Perencanaan Air Minum</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="<?= base_url() ?>/public/assets/img/icon2.ico" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="<?= base_url() ?>/public/assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            // google: {
            //     "families": ["Lato:300,400,700,900"]
            // },
            custom: {
                "families": ["open_sansregular", "Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
                urls: ['<?= base_url() ?>/public/assets/css/fonts.css']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/assets/css/atlantis.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/assets/css/datatables.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/assets/css/tooltip.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/assets/css/izitoast.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/assets/css/iziModal.min.css">

    <!-- Custom CSS Files -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/assets/css/custom.css">

    <style>
        a {
            text-decoration: none !important;
        }
    </style>

    <?= $this->renderSection('style'); ?>

</head>

<body data-background-color="bg1">
    <div class="wrapper">
        <div class="main-header">

            <!-- Logo Header -->
            <div class="logo-header" data-background-color="blue2">
                <a href="<?= base_url() ?>" class="logo">
                    <img src="<?= base_url(); ?>/public/assets/img/logo.png" alt="tirtanadi" class="navbar-brand">
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="icon-menu"></i>
                    </span>
                </button>
                <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
                <div class="nav-toggle">
                    <button class="btn btn-toggle toggle-sidebar">
                        <i class="icon-menu"></i>
                    </button>
                </div>
            </div>
            <!-- End Logo Header -->


            <!-- Navbar Header -->
            <?= $this->include('templates/view_template_navbar'); ?>
            <!-- End Navbar -->

        </div>

        <!-- Sidebar -->
        <?= $this->include('templates/view_template_sidebar'); ?>
        <!-- End Sidebar -->


        <div class="main-panel">
            <div class="content">
                <div class="page-inner">
                    <!-- Content Begin -->
                    <?php $this->renderSection('content'); ?>
                    <!-- Content End -->
                </div>
            </div>
        </div>

    </div>

    <!--   Core JS Files   -->
    <script src="<?= base_url() ?>/public/assets/js/core/jquery.3.2.1.min.js"></script>
    <script src="<?= base_url() ?>/public/assets/js/core/popper.min.js"></script>
    <script src="<?= base_url() ?>/public/assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery UI -->
    <script src="<?= base_url() ?>/public/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="<?= base_url() ?>/public/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

    <!-- Datatables -->
    <script src="<?= base_url() ?>/public/assets/js/plugin/datatables/datatables.min.js"></script>

    <!-- jQuery Validate -->
    <script src="<?= base_url() ?>/public/assets/js/plugin/jquery-validate/jquery.validate.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="<?= base_url() ?>/public/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    <!-- Moment JS -->
    <script src="<?= base_url() ?>/public/assets/js/plugin/moment.js/moment.min.js"></script>

    <!-- IziToast JS -->
    <script src="<?= base_url(); ?>/public/assets/js/plugin/izi/izitoast.min.js"></script>

    <!-- IziModal JS -->
    <script src="<?= base_url(); ?>/public/assets/js/plugin/izi/iziModal.min.js"></script>

    <!-- Chart JS -->
    <!-- <script src="<?= base_url() ?>/public/assets/js/plugin/chart.js/chart.min.js"></script> -->

    <!-- jQuery Sparkline -->
    <!-- <script src="<?= base_url() ?>/public/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script> -->

    <!-- Chart Circle -->
    <!-- <script src="<?= base_url() ?>/public/assets/js/plugin/chart-circle/circles.min.js"></script> -->

    <!-- Datatables -->
    <!-- <script src="<?= base_url() ?>/public/assets/js/plugin/datatables/datatables.min.js"></script> -->

    <!-- Bootstrap Notify -->
    <!-- <script src="<?= base_url() ?>/public/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script> -->

    <!-- jQuery Vector Maps -->
    <!-- <script src="<?= base_url() ?>/public/assets/js/plugin/jqvmap/jquery.vmap.min.js"></script> -->
    <!-- <script src="<?= base_url() ?>/public/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script> -->

    <!-- Sweet Alert -->
    <!-- <script src="<?= base_url() ?>/public/assets/js/plugin/sweetalert/sweetalert.min.js"></script> -->

    <!-- Atlantis JS -->
    <script src="<?= base_url() ?>/public/assets/js/atlantis.min.js"></script>

    <!-- Custom JS -->
    <script src="<?= base_url() ?>/public/assets/js/custom.js"></script>

    <script>
        var base_url = '<?= base_url() ?>';
    </script>

    <?= $this->renderSection('script'); ?>

</body>

</html>