<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#3b4ba7">

    <link REL="SHORTCUT ICON" HREF="<?php echo base_url('icon/icon.ico') ?>">

    <!-- Jquery -->
    <script src="<?php echo base_url('lib/jquery/jquery-2.1.4.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('lib/jquery/jquery-mask.js') ?>" type="text/javascript"></script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url('lib/bootstrap/css/bootstrap.min.css') ?>">
    <script src="<?php echo base_url('lib/bootstrap/js/bootstrap.min.js') ?>"></script>

    <!-- MyStyle -->
    <link rel="stylesheet" href="<?php echo base_url('lib/style/style.css') ?>">

    <title> <?php echo $titulo ?></title>
    <style>
        footer {
            position: fixed;
            height: 50px;
            bottom: 0;
            width: 100%;
            background-color: #dedede;
            text-align: center;
            padding-top: 10px;
            font-weight: bold;
        }
    </style>
    <script>
        $(document).ready(function () {
                $('.phone-mask').mask('(00) 0000-0000');
                $('.cpf-mask').mask('000.000.000-00');
                $('.cnpj-mask').mask('00.000.000/0000-00');
        });
    </script>
</head>
<body>
