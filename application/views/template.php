<?php
defined('BASEPATH') or exit('No direct script access allowed');
$usr = $this->user_m->user_by_id($this->session->userdata('id_user'));
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= ce_opsi('nama_situs'); ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shortcut icon" href="<?= base_url('assets/img/' . ce_opsi('favicon')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-tagsinput/1.3.6/jquery.tagsinput.min.css" integrity="sha512-uKwYJOyykD83YchxJbUxxbn8UcKAQBu+1hcLDRKZ9VtWfpMb1iYfJ74/UIjXQXWASwSzulZEC1SFGj+cslZh7Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?= base_url('assets/style/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/style/bower_components/font-awesome/css/font-awesome.min.css'); ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?= base_url('assets/style/bower_components/Ionicons/css/ionicons.min.css'); ?>">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('assets/style/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css'); ?>">
    <!-- daterange picker -->
    <link rel="stylesheet" href="<?= base_url('assets/style/bower_components/bootstrap-daterangepicker/daterangepicker.css'); ?>">
    <!-- datetimepicker -->
    <link rel="stylesheet" href="<?= base_url('assets/style/bower_components/jquery-datetimepicker/build/jquery.datetimepicker.min.css'); ?>">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="<?= base_url('assets/style/plugins/iCheck/all.css'); ?>">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="<?= base_url('assets/style/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css'); ?>">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?= base_url('assets/style/bower_components/select2/dist/css/select2.min.css'); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/style/dist/css/AdminLTE.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/style/dist/css/skins/_all-skins.min.css'); ?>">
    <!-- jQueryAutocomplete -->
    <link rel="stylesheet" href="<?= base_url('assets/style/plugins/jQueryAutocomplete/jquery.autocomplete.css'); ?>">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?= base_url('assets/style/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/style/apps.css'); ?>">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.css" />
    <style>
        div.leaflet-interactive {
            cursor: crosshair;
            width: 10px !important;
            height: 10px !important;
            margin-left: -5px !important;
            margin-top: -5px !important;
        }

        .leaflet-container {
            background: #fff !important;
        }

        .ac_results .ac_even,
        .ac_results .ac_odd {
            padding: 10px;
        }

        div.tagsinput {
            overflow: hidden !important;
        }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js');?>"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js');?>"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

        <header class="main-header">
            <a href="<?= base_url(); ?>" class="logo">
                <span class="logo-mini"><b>CMS</b></span>
                <span class="logo-lg"><b>Admin</b>Panel</span>
            </a>
            <nav class="navbar navbar-static-top">
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li>
                            <?= anchor('', '<i class="fa fa-dashboard"></i>', ' data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Beranda"'); ?>
                        </li>
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?= base_url('assets/img/user/' . $usr->foto); ?>" class="user-image" alt="avatar">
                                <span class="hidden-xs"><?= $usr->nama; ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="<?= base_url('assets/img/user/' . $usr->foto); ?>" class="img-circle" alt="avatar">

                                    <p>
                                        <?= $usr->username . ' - ' . $usr->level; ?>
                                        <small><?= mdate('Masuk pada %d %M %Y %H:%s %A', $this->session->userdata('tanggal_login')); ?></small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <?= anchor('user/profil', 'Profil', 'class="btn btn-default btn-flat"'); ?>
                                    </div>
                                    <div class="pull-right">
                                        <?= anchor('user/logout', 'Keluar', 'class="btn btn-default btn-flat"'); ?>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- =============================================== -->

        <!-- Left side column. contains the sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <?php $this->load->view('side_menu', array('usr' => $usr)); ?>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- =============================================== -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper ce-" style="background: url(http://localhost/sipendi/assets/album/bgh.jpg);">
            <?php if (isset($header)) : ?>
                <section class="content-header">
                    <h1><?= $header; ?></h1>
                </section>
            <?php endif; ?>
            <!-- Main content -->
            <section class="content">
                <?php $this->load->view($halaman); ?>

                <!-- ajax-modal -->
                <div class="modal fade" id="ajax-modal">
                    <div class="modal-dialog">
                        <div class="modal-content" id="ajax-modal-content">
                        </div>
                    </div>
                </div>
                <!-- /#ajax-modal -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer" style="text-align: center;">
            Copyright &copy; <?= date('Y'); ?> <?= anchor('', ce_opsi('nama_situs')); ?>. All rights
            reserved.
        </footer>

        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="<?= base_url('assets/style/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?= base_url('assets/style/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
    <!-- SlimScroll -->
    <script src="<?= base_url('assets/style/bower_components/jquery-slimscroll/jquery.slimscroll.min.js'); ?>"></script>
    <!-- FastClick -->
    <script src="<?= base_url('assets/style/bower_components/fastclick/lib/fastclick.js'); ?>"></script>
    <!-- DataTables -->
    <script src="<?= base_url('assets/style/bower_components/datatables.net/js/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?= base_url('assets/style/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js'); ?>">
    </script>
    <!-- date-range-picker -->
    <script src="<?= base_url('assets/style/bower_components/moment/min/moment.min.js'); ?>"></script>
    <script src="<?= base_url('assets/style/bower_components/bootstrap-daterangepicker/daterangepicker.js'); ?>">
    </script>
    <!-- datetimepicker -->
    <script src="<?= base_url('assets/style/bower_components/jquery-datetimepicker/build/jquery.datetimepicker.full.min.js'); ?>">
    </script>
    <!-- iCheck 1.0.1 -->
    <script src="<?= base_url('assets/style/plugins/iCheck/icheck.min.js'); ?>"></script>
    <!-- bootstrap color picker -->
    <script src="<?= base_url('assets/style/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js'); ?>">
    </script>
    <!-- Select2 -->
    <script src="<?= base_url('assets/style/bower_components/select2/dist/js/select2.full.min.js'); ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('assets/style/dist/js/adminlte.min.js'); ?>"></script>
    <!-- CK Editor -->
    <script src="<?= base_url('assets/style/bower_components/ckeditor/ckeditor.js'); ?>"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?= base_url('assets/style/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'); ?>"></script>
    <!-- jQueryAutocomplete -->
    <script src="<?= base_url('assets/style/plugins/jQueryAutocomplete/jquery.autocomplete.min.js'); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-tagsinput/1.3.6/jquery.tagsinput.min.js" integrity="sha512-wTIaZJCW/mkalkyQnuSiBodnM5SRT8tXJ3LkIUA/3vBJ01vWe5Ene7Fynicupjt4xqxZKXA97VgNBHvIf5WTvg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <?php
    if (isset($javascript)) {
        foreach ($javascript as $js => $param) {
            if ($param != null)
                $this->load->view($js, $param);
            else
                $this->load->view($js);
        }
    }
    $this->load->view('js/js_option_kota');
    ?>
    <script>
        $('.daterange').daterangepicker({
            locale: {
                format: 'DD-MM-YYYY'
            }
        });
        $('.colorpicker').colorpicker();
        $('.tagsInput').tagsInput({
            'height': '40px',
            'width': '100%'
        });

        function delete_confirm() {
            var choice = confirm("Apakah Anda yakin akan menghapus data ini?");
            if (choice)
                return true;
            else
                return false;
        }

        function ajaxModal(url) {
            $('#ajax-modal-content').html(
                '<div class="modal-body" style="padding:25px;"><div class="overlay"><i class="fa fa-refresh fa-spin"></i></div></div>'
            );
            $('#ajax-modal').modal('toggle');
            $.get(url, function(data) {
                $('#ajax-modal-content').html(data);
            });
            return false;
        }
        $(document).ready(function() {
            $('.select2').select2();
            $('.sidebar-menu').tree();

            //iCheck for checkbox and radio inputs
            $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
                checkboxClass: 'icheckbox_minimal-blue',
                radioClass: 'iradio_minimal-blue'
            });
            //Red color scheme for iCheck
            $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
                checkboxClass: 'icheckbox_minimal-red',
                radioClass: 'iradio_minimal-red'
            });
            //Flat red color scheme for iCheck
            $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
                checkboxClass: 'icheckbox_flat-green',
                radioClass: 'iradio_flat-green'
            });

            $('[data-toggle="tooltip"]').tooltip();
            $('.datepicker').datetimepicker({
                timepicker: false,
                format: 'Y-m-d'
            });
            $('.datetimepicker').datetimepicker({
                format: 'Y-m-d H:i'
            });
            $('.textarea').wysihtml5();
            $('.tableData').DataTable({
                'pagingType': 'full'
            });
            $('.tableData2').DataTable({
                'lengthChange': false,
                'searching': false,
                'pagingType': 'full'
            });
        });
    </script>
    <script type="text/javascript">
        $(document).on('keyup', '.rupiah', function(e) {
            this.value = formatRupiah(this.value, '');
        });

        /* Fungsi formatRupiah */
        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^.\d]/g, '').toString(),
                split = number_string.split('.'),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            // tambahkan titik jika yang di input sudah menjadi angka ribuan
            if (ribuan) {
                separator = sisa ? ',' : '';
                rupiah += separator + ribuan.join(',');
            }

            rupiah = split[1] != undefined ? rupiah + '.' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? '' + rupiah : '');
        }
        Number.prototype.format = function(n, x, s, c) {
            var re = '\\d(?=(\\d{' + (x || 3) + '})+' + (n > 0 ? '\\D' : '$') + ')',
                num = this.toFixed(Math.max(0, ~~n));

            return (c ? num.replace('.', c) : num).replace(new RegExp(re, 'g'), '$&' + (s || ','));
        };
    </script>
    <script>
        $(function() {
            CKEDITOR.replace('ckeditor');
        })
    </script>
</body>

</html>