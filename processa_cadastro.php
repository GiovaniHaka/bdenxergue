
<?php

    
    include 'dbi.php';
    
    $empresa = $_POST ['cadastroempresa'];
    $abertura = $_POST ['cadastroabertura'];
    $fechamento = $_POST ['cadastrofechamento'];
    $cnpj = $_POST ['cadastrocnpj'];
    $uf = $_POST ['uf'];
    $cidade = $_POST ['cidade'];
    $bairro = $_POST ['bairro'];
    $cep = $_POST ['cep'];
    $rua = $_POST ['rua'];
    $numero = $_POST ['cadastronumero'];
    $complemento = $_POST ['cadastrocomplemento'];
    $email = $_POST ['cadastroemail'];
    $telefone = $_POST ['cadastrotelefone'];
    $website = $_POST ['cadastrowebsite'];
    $facebook = $_POST ['cadastrofacebook'];
    $instagram = $_POST ['cadastroinstagram'];
    $precopolicarbonato = $_POST ['precopolicarbonato'];
    $precovidro = $_POST ['precovidro'];

    $insertempresa = "INSERT INTO empresa (nome, abertura, fechamento, cnpj, 
            uf, cidade, cep, bairro, rua, numero, complemento, 
            email, telefone, website, facebook, instagram) 
            VALUES ('$empresa', '$abertura', '$fechamento', '$cnpj', '$uf',
            '$cidade', '$cep', '$bairro', '$rua', '$numero', '$complemento', '$email',
            '$telefone', '$website', '$facebook', '$instagram')";
            
        mysqli_query ($conexao, $insertempresa) or die ("erro de registro");


    $ultimo_id_inserido = mysqli_insert_id($conexao);

    $querypolicarbonato = "INSERT INTO material (id_material, material, preco, id_empresa) VALUES (1, 'Policarbonato', $precopolicarbonato, $ultimo_id_inserido)";
        mysqli_query ($conexao, $querypolicarbonato);

    $queryvidro = "INSERT INTO material (id_material, material, preco, id_empresa) VALUES (2, 'Vidro', $precovidro, $ultimo_id_inserido)";
        mysqli_query ($conexao, $queryvidro);

echo "<script>alert('Sua empresa foi cadastrada!');window.location='indexi.php'</script>";
?>