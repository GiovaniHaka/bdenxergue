<?php
        #mysqli
        $servidor = "localhost"; #quando migrar para um servidor, colocar o num de ip do server
        $usuario = "root";
        $senha = "";
        $database ="enxergue";
    
        $conexao = mysqli_connect ($servidor, $usuario, $senha, $database);
        

        @$buscarbairro = $_REQUEST ['select_bairro'];
        @$buscarmaterial = $_REQUEST ['select_material'];
        $resultbusca = "SELECT empresa.nome, empresa.rua, empresa.numero, material.material, material.preco, empresa.cidade, empresa.abertura, empresa.fechamento 
        FROM empresa, material WHERE empresa.id_empresa = material.id_empresa AND material.id_material = '$buscarmaterial' AND empresa.bairro = '$buscarbairro'";
        $consulta = mysqli_query ($conexao, $resultbusca);
        
        @$buscarbairro = $_REQUEST ['select_bairro'];
        @$buscarmaterial = $_REQUEST ['select_material'];
        $resultbusca = "SELECT empresa.nome, empresa.rua, empresa.numero, material.material, material.preco, empresa.cidade, empresa.abertura, empresa.fechamento
        FROM empresa, material WHERE empresa.id_empresa = material.id_empresa AND material.id_material = '$buscarmaterial' AND empresa.bairro = '$buscarbairro'";
        $consulta2 = mysqli_query ($conexao, $resultbusca);

?>