    <br>    
        <nav class = "tutorial">
            <div class = "tutorial_etapa">
                <h1><b>Etapa 1</b><h1>
                Primeiro, insira os valores de sua receita nos campos "Esférico" e "Cilíndrico" de cada olho!

            </div>
            <div class = "tutorial_etapa">
                <h1><b>Etapa 2</b><h1>
                Selecione um tipo de "Material" e "Adicional" para suas lentes! Em seguida, seleciona o "Bairro" de seu interesse!
            </div>
            <div class = "tutorial_etapa">
                <h1><b>Etapa 3</b><h1>
                Por fim, feita as etapas anteriores, clique em "Buscar" e confira as melhores óticas selecionadas para você!
            </div>
            
        </nav>
    <br>

<body>
    
    <main class="receita">
            <div class="olhoe">
                <img class="imagemolho" src="olhoazul.png" alt=" olho esquerdo">
                <input class = "input" type="Esférico E" placeholder = "Esférico Esquerdo">
                    <br>
                <input class = "input" type="Cilíndrico E" placeholder = "Cilíndrico Esquerdo">
                    <br>
            </div>

            <div class="olhod">
                <img class="imagemolho" src="olhoazul.png" alt="">
                <input class = "input" type="Esférico D" placeholder = "Esférico Direito">
                    <br>
                <input class = "input" type="Cilíndrico D" placeholder = "Cilíndrico Direito" >
                    <br>
            </div>
            <br><br>
    <div >
        <div>
          <form name = "searchmaterial" method = "post" >
                <select class = "select" name= "select_material">
                    <option>Selecione o Material</option>
                    <?php
                        $result_material = "SELECT * FROM tipo_material";
                        $resultado = mysqli_query ($conexao, $result_material);
                        while ($rowmaterial = mysqli_fetch_array ($resultado)){?>
                            <option value = "<?php echo $rowmaterial ['id_tipo_material']; ?>"><?php echo $rowmaterial ['material']; ?>
                            </option> <?php

                        }
                    ?>
                </select>
            

            <form name = "searchadicional" method = "post">
                <select class = "select" name="select_bairro">
                    <option>Selecione Adicional</option>
                    <option value="Antiabrasivo">Antiabrasivo</option>
                    <option value="Antirreflexivo">Antirreflexivo</option>
                </select>
            

            <form name = "searchbairro" method = "post">
                <select class = "select" name="select_bairro">
                    <option>Selecione Bairro</option>
                    <option value="Ipiranga">Ipiranga</option>
                    <option value="Ermelino Matarazzo">Ermelino Matarazzo</option>
                    <option value="Vila Aricanduva">Vila Aricanduva</option>
                </select>
                <br><br>

            
                    
    </main>
        <!-- <form name = "search" method = "post" action = "busca.php">
                <input type = "text" name = "buscamaterial" placeholder = "Material"/> -->
    
   
        <div>
            <br>
                <input class = "button" type = "submit" value = "Buscar" action = "index.php">
            <br>
        </div>
        
       
        <?php
        include "maps.php";
        ?>
        <br>


            <div>
                <?php
                    #QUando colocar adicional no banco de dados, ativar aqui, mudar select e mudar o preço.
                    #@$adicional = mysqli_fetch_array ($consulta);
                    #echo $adicional['adicional'];
                ?>
            </div>

            <div class = "tutorial">
                <div class = "selecionado">
                    <label><b>Bairro: </b></label>
                    <?php
                        @$bairro = $_REQUEST ['select_bairro'];
                        echo $bairro;
                    ?>
                </div>

                <div class = "selecionado">
                    <label><b> Material: </b></label>
                    <?php 
                        $material = mysqli_fetch_array ($consulta2);
                        echo $material['material'];
                    ?>
                </div>

                <div class = "selecionado">
                    <label><b> Adicional: </b></label>
                    <?php 
                        $material = mysqli_fetch_array ($consulta2);
                        echo $material['material'];
                    ?>
                </div>
            </div>

        <main class = "resultado">
          
            <div class = "table">
                <?php
                echo '<table><tr><th> Ótica </th><th> Preço </th><th> Endereço </th><th> Horário </th></tr>';
                while ($rows = mysqli_fetch_array ($consulta)){
                    echo '<tr><td>'.$rows['nome'].'</td>';
                    echo '<td>'."R$".$rows['preco'].'</td>';
                    echo '<td>'.$rows['rua'].", nº ".$rows['numero'].'</td>';
                    echo '<td>'."Abre ".$rows['abertura']." fecha ".$rows['fechamento'].'</td><tr>';
                                       
                }

                echo '</table>';
                ?>
            </div>
            <br>
            </main>
</body>

