<?php
include_once '../ws/auxiliar.php';
define('botao_3d_120px', 'botao_3d_120px btn dim btn-success btn-large-dim btn-outline');
define('botao_3d_160px', 'botao_3d_160px btn dim btn-success btn-large-dim btn-outline');
$versao = Auxiliar::get_versao();
$versao_img = Auxiliar::get_versao_img();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>        
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1, user-scalable=no">
        <meta name="google-signin-scope" content="profile email">        
        <title>Plataforma de sorteio da LITECI</title>
        <link rel="stylesheet" href="../config/css/bootstrap.min.css">
        <link href="../config/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
        <link href="../assets/fonts/fontawesome-all.min.css" rel="stylesheet">
        <link href="../config/css/style.css" rel="stylesheet">
        <link href="../config/meustyle.css?v=<?php echo Auxiliar::get_versao(); ?>" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
        <link rel="stylesheet" href="../assets/fonts/simple-line-icons.min.css">
        <link rel="stylesheet" href="../assets/css/Footer-Dark.css">
        

