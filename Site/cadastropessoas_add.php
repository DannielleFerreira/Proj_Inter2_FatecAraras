<?php
    include_once 'classes\pessoa.php';

    if (isset($_POST['gravar']))
    {
        
        $CPF     = $_POST['cpf'];
        $NOME    = $_POST['nome'];
        $FONE    = $_POST['fone'];
        $EHWHATS = 'S';
        $SENHA   =$_POST['password'];
        $EMAIL   =$_POST['email'];
        $ATIVO   = 'S';
        $EHOFICIAL = 'N';
        $LIB_CADDESASTRE =$_POST['fone'];
        $REGISTRO_OFICIAL = 's';
        $CONTATOS =$_POST['contatos'];
        $END_LOG =$_POST['logradouro'];
        $END_NUM =$_POST['n'];
        $END_BAI =$_POST['bairro'];
        $END_CID =$_POST['cidade'];
        $END_CEP =$_POST['cep'];
        $END_COM =$_POST['complemento'];
        $END_UF  =$_POST['uf'];

        $P = new Pessoa;

        if ($P->PessoaADD($CPF,
                        $NOME,
                        $FONE,
                        $EHWHATS,
                        $SENHA,
                        $EMAIL,
                        $ATIVO,
                        $EHOFICIAL,
                        $LIB_CADDESASTRE,
                        $REGISTRO_OFICIAL,
                        $CONTATOS,
                        $END_LOG,
                        $END_NUM,
                        $END_BAI,
                        $END_CID,
                        $END_CEP,
                        $END_COM,
                        $END_UF,
                        $erro) > 0)
        {
            //echo 'Inserido com sucesso !';
            header("location: index.php");
            //exit;
        }
        else{
            echo 'Falhou ! <br/> Motivo:<br/>'.$erro;
            echo "a5";
        }
        unset($P); 
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Formulario de cadastro</title>
</head>
<body>
    <div class="container">
        <div class="form-image">
            <img src="img/Global warming-rafiki.png" alt="">
        </div>
        <div class="form">
            <form action="cadastropessoas_add.php" method="POST">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastra-se</h1>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-box" >
                        <label for="nome">Nome Completo</label>
                        <input id="nome" type="text" name="nome" placeholder="Digite seu nome Completo" required>
                    </div>
                     <div class="input-box">
                        <label for="cpf">CPF</label>
                        <input id="cpf" type="text" name="cpf" placeholder="xxx.xxx.xxx-xx">
                    </div>
                    <div class="input-box">
                        <label for="fone">Celular</label>
                        <input id="fone" type="tel" name="fone" placeholder="(xx) xxxxx-xxxx" required>
                        <input type="checkbox" id="what" name="S" value="what">
                        <label for="what">É WhatsApp</label>
                    </div>
                    <div class="input-box">
                        <label for="logradouro">Logradouro</label>
                        <input id="logradouro" type="text" name="logradouro" placeholder="Digite o seu logradouro" required>
                    </div>
                    <div class="input-box">
                        <label for="n">Nº</label>
                        <input id="n" type="text" name="n" placeholder="Digite o número da sua recidência" required>
                    </div>
                    <div class="input-box">
                        <label for="bairro">Bairro</label>
                        <input id="bairro" type="text" name="bairro" placeholder="Digite seu bairro" required>
                    </div>
                    <div class="input-box">
                        <label for="cidade">Cidade</label>
                        <input id="cidade" type="text" name="cidade" placeholder="Digite sua cidade" required>
                    </div>
                    <div class="input-box">
                        <label for="uf">UF</label>
                        <input id="uf" type="text" name="uf" placeholder="Digite seu estado" required>
                    </div>
                    <div class="input-box">
                        <label for="cep">CEP</label>
                        <input id="cep" type="text" name="cep" placeholder="xx.xxx-xxx" required>
                    </div>
                    <div class="input-box">
                        <label for="complemento">Complemento</label>
                        <input id="complemento" type="text" name="complemento">
                    </div>
                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="Digite o e-mail" required>
                    </div>
                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input id="password" type="password" name="password" placeholder="Digite a senha" required>
                    </div>
                    <div class="input-box">
                        <label for="confirmpassword">Confirme a senha</label>
                        <input id="confirmpassword" type="password" name="comfirmpassword" placeholder="Digite a senha" required>
                    </div>
                    <div class="input-box">
                        <label for="oficial">Número de registro</label>
                        <input id="oficial" type="text" name="oficial" placeholder="Digite o número do seu registro oficial">
                        <input type="checkbox" id="oficial" name="N" value="oficial">
                        <label for="oficial">Você é um oficial.</label>
                    </div>
                    <div class="input-box">
                        <label for="contatos">Contatos</label>
                        <textarea id="contatos" type="text" name="contatos"> Contatos de familiares </textarea>
                    </div>
                    <div class="continue-button ">
                       <button><input type="submit" name="gravar" id="gravar" value="gravar"></button> 
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>