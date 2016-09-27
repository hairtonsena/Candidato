<!DOCTYPE html>
<html>
    <head>
        <!--<link rel="icon" href="<?php // echo base_url("")  ?>" type="image/png"/>-->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title> cPainel </title>
        <link rel="stylesheet" href="<?php echo base_url("lib_cp/lib/bt/css/bootstrap.min.css"); ?>">
        <link rel="stylesheet" href="<?php echo base_url("lib_cp/css/style.css"); ?>">

        <script>
            Config = {
                base_url: function (url) {
                    var url_base = '<?php echo base_url() ?>';
                    return url_base + url;
                },
                redirecionar_pagina: function (pg) {
                    window.location.href = pg;
                }

            };
        </script>
        <script src="<?php echo base_url("lib_cp/lib/jquery.js"); ?>"></script>
        <script src="<?php echo base_url("lib_cp/lib/bt/js/bootstrap.min.js"); ?>"></script>
        <!--<script src="<?php // echo base_url("lib_cp/lib/jquery-ui-1.10.4/ui/jquery-ui.js") ?>"></script>-->
        <!--<script src="<?php // echo base_url('lib/tinymce/tinymce/tinymce.min.js') ?>"></script>-->
        <script src="<?php echo base_url('lib_cp/lib/ckeditor/ckeditor.js') ?>"></script>
    </head>
    <body>
