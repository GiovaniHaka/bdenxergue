
<?php
    #include "restrito.php";
?>

<html>
    <br>
    <div class = "titulocentral">
        <h1>Cadastro de Empresa</h1>
    </div>

    <br><nav class = "tutorial">
        Seja bem vindo à área de cadastro! Nesta sessão, você fará o cadastro de sua empresa em nosso Banco de Dados!
    </nav><br>


<body>
     <!-- Adicionando Javascript -->
 <script type="text/javascript" >
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
            
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
            
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";
                

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

    </script>

            <!-- Inicio do formulario -->
<div class = "cadastro_empresai">            
    <form method="post" action="processa_cadastro.php">
        <br>
        <label>Nome da Empresa:</label><br>
        <input class = "input is-small" type = "text" name = "cadastroempresa" placeholder = "Nome da Ótica" required/><br><br>
        
        <label>Horário de Abertura:</label><br>
        <input class = "input is-small" type = "time" size = "30" name = "cadastroabertura" placeholder = "Horário de abertura" required/><br><br>
        
        <label>Horário de Fechamento:</label><br>
        <input class = "input is-small" type = "time" size = "30" name = "cadastrofechamento" placeholder = "Horário de fechamento" required/><br><br>
        
        <label>CNPJ:</label><br>
        <input class = "input is-small" type = "text" size = "30" name = "cadastrocnpj" maxlength="14" placeholder = "CNPJ" required/><br><br>
        
        <label>CEP:</label><br>
        <input class = "input is-small" type="text" size = "30" name="cep"  id="cep" value="" maxlength="9" placeholder = "CEP"
            onblur="pesquisacep(this.value);"/><br><br>
        
        <label>Rua:</label><br>
        <input class = "input is-small" type="text" size = "30" name="rua"  id="rua" placeholder = "Rua"/><br><br>
        
        <label>Bairro</label><br>
        <input class = "input is-small" type="text" size = "30" name="bairro"  id="bairro" placeholder = "Bairro"/><br><br>
        
        <label>Cidade:</label><br>
        <input class = "input is-small" type="text" size = "30" name="cidade" id="cidade" placeholder = "Cidade"/><br><br>
        
        <label>UF:</label><br>
        <input class = "input is-small" type = "text" size = "30" name="uf"  id="uf" placeholder = "UF"/><br><br>
        
        <label>Número:</label><br>
        <input class = "input is-small" type = "text" size = "30" name = "cadastronumero" placeholder = "Número" required/><br><br>
        
        <label>Complemento:</label><br>
        <input class = "input is-small" type = "text" size = "30" name = "cadastrocomplemento" placeholder = "Complemento"/><br><br>
        
        <label>Email:</label><br>
        <input class = "input is-small" type = "email" size = "30" name = "cadastroemail" placeholder = "E-mail" required/><br><br>
        
        <label>Telefone:</label><br>
        <input class = "input is-small" type = "text" size = "30" name = "cadastrotelefone" placeholder = "Telefone da Ótica" required/><br><br>
        
        <label>Website:</label><br>
        <input class = "input is-small" type = "text" size = "30" name = "cadastrowebsite" placeholder = "Website da Ótica"/><br><br>
        
        <label>Facebook:</label><br>
        <input class = "input is-small" type = "text" size = "30" name = "cadastrofacebook" placeholder = "Facebook da Ótica"/><br><br>
        
        <label>Instagram:</label><br>
        <input class = "input is-small" type = "text" size = "30" name = "cadastroinstagram" placeholder = "Instagram da Ótica"/><br><br>
    
        <label>Preço Lente de Policarbonato<label><br>
        <input class = "input is-small" type = "text" size = "30" name = "precopolicarbonato" placeholder = "Preço Policarbonato"/><br><br>    
        
        <label>Preço Lente de Vidro<label><br>
        <input class = "input is-small" type = "text" size = "30" name = "precovidro" placeholder = "Preço Vidro"/><br><br>    
        
        <input class = "button" type = "submit" value = "Cadastrar">
        <br>
    </form>
</div>        
</body>
</html>
