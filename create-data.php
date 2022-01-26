<?php
$sabor = $_POST['sabores'];
$tamanho = $_POST['tamanho-caixa'];


	$expira = time() + 60*60; 
	
	$host = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "octa";

	//Iniciando a conexão
	$conecta = mysqli_connect($host, $usuario, $senha, $banco) OR print(mysql_error());

	if(!$conecta){
		echo "Erro ao conectar ao banco de dados!";
	}

	//Outras configs
	date_default_timezone_set('America/Sao_Paulo');
	$globalData = date("dd/mm/YYYY");
	$globalHora = date("H:i");
	
	$uuiduser = md5(uniqid(rand(), true));
	$nome = $_POST['nome'];
		$sobrenome = $_POST['sobrenome'];
			$cpf = $_POST['cpf'];
				$email = $_POST['email'];
					$address = $_POST['address'];
						$cep = $_POST['cep'];
							$cidade = $_POST['cidade'];
								$estado = $_POST['estado'];
									$numero = $_POST['numero'];
										$complemento = $_POST['complemento'];
										$bairro = $_POST['bairro'];
	//CRIAR PEDIDO
	$enviarpedido = mysqli_query($conecta, "INSERT INTO pedidos(uuid, nome, sobrenome, email, cpf, address, cep, cidade, estado, numero, complemento, bairro)
		VALUES('$uuiduser', '$nome', '$sobrenome', '$email', '$cpf','$address','$cep','$cidade','$estado','$numero','$complemento','$bairro') ");

	//CRIAR PEDIDO - OPCOES (ADICIONAR ID PAGTO DEPOIS DE INTEGRACAO)
	$enviaropcoes = mysqli_query($conecta, "INSERT INTO options_box(user, sabores, tamanho)
		VALUES ('$uuiduser','$sabor','$tamanho')");
	if ($enviarpedido && $enviaropcoes) {
		//USUARIO LOGADO
function unsetcookie($key, $path = '', $domain = '', $secure = false)
{
    if (array_key_exists($key, $_COOKIE)) {
        if (false === setcookie($key, null, -1, $path, $domain, $secure)) {
            return false;
        }

        unset($_COOKIE[$key]);
    }

    return true;
}
		echo "sucesso";
			unsetcookie('cep');
			unsetcookie('e41l');

			setcookie('cep', $cep, $expira);
			setcookie('e41l', $uuiduser, $expira);

		
		
	} else {
		echo "erro";
	}

?>