
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Masque de saisi</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="/css/css.css">
    <link rel="stylesheet" href="/font/css/all.css">
</head>
<body>
    <div class="container"><br>
      <label class="titre" style="margin-left: 393px;font-weight: bold; font-size: 40px;">Recensement Parcellaire</label>
        <a class="btn btn-success btn-sm btn-add2 fa fa-plus" style="margin-right: 563px;margin-top: 0px;" >Ajout</a>
        <label href="#" style="margin-left: 363px;"> <?php echo "Operateur de saisi : "; ?> <strong> <?=  session()->get('nom') ?></strong> </label>

        <a href="<?php echo base_url(); ?>/sign_controller/logout" class="btn btn-primary btn-sm  fa fa-link-slash" style="margin-left: 1141px; margin-bottom: 22px;"> Disconnect</a><br><br>
    <div class="tbl-GlobalExploitation">
        <table class="table table-striped" style="width:100%" id="show_data">
            <thead>
                <tr>
                    <th>id_code</th>
                    <th>code2</th>
                    <th>kaominina</th>
                    <th>fokontany</th>
                    <th>vohitra</th>
                    <th>laharana_tokan_trano</th>
                    <th>laharana</th>
                    <th>plof</th>
                    <th>lot</th>
                    <!-- <th>mpanao_saisi</th> -->
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
      </div>
    </div>
