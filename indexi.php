<?php
    include 'dbi.php';
     
    include 'headeri.php';

   

    if (isset($_GET ['pagina'])){
        $pagina = $_GET ['pagina'];
    }else {
        $pagina = 'homei';
    }


    switch ($pagina){
        case 'home': include 'homei.php'; break;
        case 'quemsomos': include 'quemsomosi.php'; break;
        case 'comofunciona': include 'comofuncionai.php'; break;
        case 'cadastro_empresai': include 'cadastro_empresai.php'; break;
        case 'confere_cadastro': include 'confere_cadastro.php'; break;
        case 'processa_cadastro': include 'processa_cadastro.php'; break;
        case 'contato': include 'contato.php'; break;
        case 'processa_contato': include 'processa_contato.php'; include 'homei.php'; break;
        default: include 'homei.php'; break;
    } 
    
    include 'footeri.html';
?>

