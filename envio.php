<?php
$cookieuser = $_COOKIE['cep'];
if (!isset($cookieuser)) {
  header('Location: configure.php');
  return;
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Octa | Monte o seu</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" href="includes/fonts/loadfonts.css">
    <link rel="stylesheet" href="includes/css/mainweb.css">
    <link rel="stylesheet" href="includes/css/mainstore.css">
    <link rel="stylesheet" href="includes/css/bootstrap.css">
    <link rel="stylesheet" href="includes/css/animate.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="shortcut icon" href="favicon.ico" />
    <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script type="text/javascript" src="//assets.moip.com.br/v2/moip.min.js"></script>
</head>
<body>
   <div class="default_header">

        <div class="logo wow zoomIn animated giragira" align="center"><a href=""><img width="100" height="100" style="margin-top: 20px;" src="includes/img/OCTA-PRETA-PNG.png"></a></div>
        
        </div>
        <div class="default_body">
<div id="freight" class="envio part_freight wow animated fadeIn" >
			<h1 style="font-weight: bold;font-family: 'SF UI Display Heavy';">Forma de envio</h1>
		<small>Você quer receber o mais rápido possível?</small>
		<br>
		 
		<br>
		<?php
		#FRETE
		if( !function_exists( 'calculaFrete' ))
{
   function calculaFrete(
      $cod_servico, /* codigo do servico desejado */
      $cep_origem,  /* cep de origem, apenas numeros */
      $cep_destino, /* cep de destino, apenas numeros */
      $peso,        /* valor dado em Kg incluindo a embalagem. 0.1, 0.3, 1, 2 ,3 , 4 */
      $altura,      /* altura do produto em cm incluindo a embalagem */
      $largura,     /* altura do produto em cm incluindo a embalagem */
      $comprimento, /* comprimento do produto incluindo embalagem em cm */
      $valor_declarado='0' /* indicar 0 caso nao queira o valor declarado */
   ){

      $cod_servico = strtoupper( $cod_servico );
      if( $cod_servico == 'SEDEX10' ) $cod_servico = 40215 ; 
      if( $cod_servico == 'SEDEXACOBRAR' ) $cod_servico = 40045 ; 
      if( $cod_servico == 'SEDEX' ) $cod_servico = 40010 ; 
      if( $cod_servico == 'PAC' ) $cod_servico = 41106 ;

      # ###########################################
      # Código dos Principais Serviços dos Correios
      # 41106 PAC sem contrato
      # 40010 SEDEX sem contrato
      # 40045 SEDEX a Cobrar, sem contrato
      # 40215 SEDEX 10, sem contrato
      # ###########################################

      $correios = "http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx?nCdEmpresa=&sDsSenha=&sCepOrigem=".$cep_origem."&sCepDestino=".$cep_destino."&nVlPeso=".$peso."&nCdFormato=1&nVlComprimento=".$comprimento."&nVlAltura=".$altura."&nVlLargura=".$largura."&sCdMaoPropria=n&nVlValorDeclarado=".$valor_declarado."&sCdAvisoRecebimento=n&nCdServico=".$cod_servico."&nVlDiametro=0&StrRetorno=xml";

      $xml = simplexml_load_file($correios);

      $_arr_ = array();
      if($xml->cServico->Erro == '0'):
         $_arr_['codigo'] = $xml -> cServico -> Codigo ;
         $_arr_['valor'] = $xml -> cServico -> Valor ;
         $_arr_['prazo'] = $xml -> cServico -> PrazoEntrega .' dias' ;
         // return $xml->cServico->Valor;
         return $_arr_ ; 
      else:
         return false;
      endif;
   }
}

  $origem = '03337075';
  ?><script src="includes/js/wow.min.js"></script>
	<script src="includes/js/jquery.min.js"></script>
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script><?php
	$cepdestino = $_COOKIE['cep'];
  $destino = $cepdestino;
  $peso = '0.6';
  $altura = '55';
  $largura = '20';
  $comprimento = '60';
  $freteexpress = calculaFrete( 
        'SEDEX', 
        $origem, 
        $destino, 
        $peso, 
        $altura, $largura, $comprimento, 0 );
  $freteeco = calculaFrete( 
        'PAC', 
        $origem, 
        $destino, 
        $peso, 
        $altura, $largura, $comprimento, 0 );
#
		#FRETE
		?>
		   <select id="freight-type" class="campo-formulario-seletor" style="width:19em;margin-top:10px;color: #000; font-family: 'SF UI Display Light';
    font-size: 18px;
    line-height: 1.21em;
    letter-spacing: .007em;" name="frete" autofocus required>

   <option value="SEDEX">Frete Expresso (R$ <?php echo $freteexpress['valor'];?>) <?php echo $freteexpress['prazo'];?> úteis</option>
    <option value="PAC">Frete Econômico (R$ <?php echo $freteeco['valor'];?>) <?php echo $freteeco['prazo'];?> úteis</option>

</select>
<br>
 <span id="button-see-buy" class="button buttonselect">Continuar</span>
<br>
<br>

		</div>
      <div class="pedido part_final wow animated fadeIn" id="pedido-ver" style="display: none;">
        <hr>
    <h1 style="font-weight: bold;font-family: 'SF UI Display Heavy';">Este é seu novo Átomus.</h1>
    <hr>
  

      <h4 style="text-align: center; font-weight: bold; animation-delay: 0.5s;" class="wow zoomIn animated delay 10s" >SERIES PREMIUM</h4>
      <?php 
      //pegar pedido
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
      $cookieusero = $_COOKIE['e41l'];
      $pegarpedido = mysqli_query($conecta, "SELECT * FROM options_hookah WHERE user='$cookieusero'");
      $pedidoarray = mysqli_fetch_array($pegarpedido);
      $corstem = $pedidoarray['stem'];
      $corvaso = $pedidoarray['vaso'];
      $corrosh = $pedidoarray['rosh'];
      $corprato = $pedidoarray['prato'];
      $cormangueira = $pedidoarray['mangueira'];
      $corpiteira = $pedidoarray['piteira'];

      ?>
      <small style="font-family: 'ProximaNova-Light';">Stem - <?php echo ucfirst($corstem); ?><br>Vaso - <?php echo ucfirst($corvaso); ?><br>Rosh - <?php echo ucfirst($corrosh); ?><br>Prato - <?php echo ucfirst($corprato); ?><br>Mangueira - <?php echo ucfirst($cormangueira); ?><br>Piteira - <?php echo ucfirst($corpiteira); ?></small>
        <p style="color: #999999;font-size: 20px;">R$ 699,<b style="font-size: 15px;">00</b></p>
      
      <p><b style="color: lightgreen;">✔</b> Parcelamento em até 10x de R$ 69,90</p>
      <p><b style="color: lightgreen;">✔</b> Garantia de 6 meses direto com a Octa Hookah</p>
      <p><b style="color: lightgreen;">✔</b> Fabricação em 2 dias úteis</p>

      <p id="totalfreight">CADENZA TECNOLOGIA</p>
      <button class="buttonbuy buttonbuygreen" type="submit" name="btnseeconfig" id="configbutton-see">Fechar Pedido</button>

      <br>
      <br>
    </div>
<div class="pagto part_pagto wow animated fadeIn" id="pagto">
        <hr>
    <h1 style="font-weight: bold;font-family: 'SF UI Display Heavy';">Como você vai pagar?</h1>
  
      <?php
      require_once('payments/moip-add.php');
             $pegarusuario = mysqli_query($conecta, "SELECT * FROM pedidos WHERE uuid='$cookieusero'");
      $usuarioarray = mysqli_fetch_array($pegarusuario);
      $nomeuser = $usuarioarray['nome'].$usuarioarray['sobrenome'];
      $emailuser = $usuarioarray['email'];
      $cpfuser = $usuarioarray['cpf'];
      $endereco = $usuarioarray['address'];
      $numero = $usuarioarray['numero'];
      $cidade = $usuarioarray['cidade'];
      $bairro = $usuarioarray['bairro'];
      $estado = $usuarioarray['estado'];
      $cep = $usuarioarray['cep'];
    


      ?>
      <button class="buttonbuy buttonselect" id="pay-boleto">Pagar com Boleto</button>
       <button class="buttonbuy buttonbuygreen" id="pay-card">Pagar com Cartão de Crédito</button>

       <form id="pag" class="pag pag-credit" action="javascript:void(0)" >
         <textarea id="public_key" style="display:none;">
  -----BEGIN PUBLIC KEY-----
MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAqXp/MOdQvvYlkW8DOMJ4
Og/BfxzeKv7MTewFrPMtc6ZFOnhzloe1i+eBJxIkpvwfe5rkcFGb2+l07lCUxiQv
gi/KHa+qUyUNKmbXGTk60Pw81GeyClwY/Fs6KtldEW2Mf/zBEPoj4uaMHfQpPQKA
6hoddqym3HJwSo0vo3PizB34kuaggdqVn573HMnTYOPPawwwhp6hS7GIhmNCkZ+/
G3tOH0ruLJEXkPk7kXUADueFqqfpZZYcWOYzxWzV98uH1ZYC/c/gbRTktJFLKDhL
Eallhmy+8znRNI3AydQMiv4q9Lybe1JXGi7WCpMhUkV19ijeGiUS+1Q5zatfEU/7
RwIDAQAB
-----END PUBLIC KEY-----</textarea>
      <textarea id="encrypted_value" style="display:none;">
  INTERN</textarea>
<br>
         <input class="input-fcad campo-formulario" style="margin-top:10px;color: #000; font-family: 'SF UI Display Light';
    font-size: 18px;
    line-height: 1.21em;
    letter-spacing: .007em;" type="text" placeholder="Número do Cartão" id="number" onchange="mcc(this);" />
    <br>
<input class="input-fcad campo-formulario" style="margin-top:10px;color: #000; font-family: 'SF UI Display Light';
    font-size: 18px;
    line-height: 1.21em;
    letter-spacing: .007em;" type="text" placeholder="Código de Segurança" id="cvc"/>
    <br>
<input class="input-fcad campo-formulario" style="margin-top:10px;color: #000; font-family: 'SF UI Display Light';
    font-size: 18px;
    line-height: 1.21em;
    letter-spacing: .007em;" type="text" placeholder="Mês de Expiração" id="month"/>
     <br>
<input class="input-fcad campo-formulario" style="margin-top:10px;color: #000; font-family: 'SF UI Display Light';
    font-size: 18px;
    line-height: 1.21em;
    letter-spacing: .007em;" type="text" placeholder="Ano de Expiração" id="year" />
    <br>
    <br>
    <p id="dadosinc" style="display: none;color: red;">Dados do Cartão Incorretos!</p>
     <span class="buttonbuy buttonbuygreen" id="card-user-pay">Pagar</span>
     
       </form>
    </div>
    <br>

<a href="https://cadenzatecnologia.com.br" target="_blank"><img src="includes/img/logopreta.png" width="110" height="30"></a> & <img src="https://www.wirecard.com/uploads/_1200x630_crop_center-center_82_none/wirecard-logo-dark-seo.png?mtime=1588233213" width="110" height="50">
<hr>
</div>

<div class="default_footer">
  
<br>
  <div class="social_media" style="text-align: center;">
    <nav id="menufooter" style="text-align: center;">
    <ul >
      <li><a href="https://www.facebook.com/octahookah" target="_blank"><img src="includes/img/fbicon.png"></a></li>
      <li><a href="https://www.instagram.com/octahookah" target="_blank"><img src="includes/img/igicon.png"></a></li>
    </ul>
</nav>
    
  </div>
    <nav id="menufooter" style="text-align: center;">
    <ul >
      <li><a href="">Sobre nós</a></li>
        <li><a href="">Contato</a></li>
        <li><a href="">Trocas e Devoluções</a></li>
        <li><a href="">Política Octa</a></li>
    </ul>
</nav>
<br>
<small style="font-family: 'ProximaNova-Light'; margin: auto;display: block;text-align: center;">Octa Hookah &copy; 2021<br> Sob domínio e responsabilidade de LS Produções Artísticas<br>Av. Guilherme Giorgi, 607, São Paulo - SP<br>CNPJ: 33.067.220/0001-91<br><br>Tecnologia <a href="https://www.cadenzatecnologia.com.br" target="_blank">Cadenza (Pay)</a></small>
</div>
  </div>
    <script src="includes/js/wow.min.js"></script>
  <script src="includes/js/jquery.min.js"></script>
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>

  <script type="text/javascript">

        $("#card-user-pay").click(function() {
      
          var cc = new Moip.CreditCard({
            number  : $("#number").val(),
            cvc     : $("#cvc").val(),
            expMonth: $("#month").val(),
            expYear : $("#year").val(),
            pubKey  : $("#public_key").val()
          });
          console.log(cc);
          if( cc.isValid()){
            $("#encrypted_value").val(cc.hash());
            document.getElementById('encrypted_value').innerHTML = cc.hash();
            console.log(cc.hash());
            $.ajax({
        url : "tryPay.php",
        type: "post",
        data : "hash=" + cc.hash();
    }).done(function(response){ 
        


    });
          }
          else{
            $("#encrypted_value").val('');
            $("#dadosinc").show();
          }
        });
    $('#button-see-buy').click(function(){
      //frete=pedido
      var frete = $('#freight-type').val();
      var calculo = 699;
      if (frete == 'PAC') {
        calculo = 699 + <?php echo $freteeco['valor'];?>;
         document.getElementById('totalfreight').innerHTML = 'Total com Frete PAC: R$ ' +calculo+',00';
      }
        if (frete == 'SEDEX') {
        calculo = 699 + <?php echo $freteexpress['valor'];?>;
         document.getElementById('totalfreight').innerHTML = 'Total com Frete SEDEX: R$ ' +calculo+',00';
      }
     
      $('#pedido-ver').show();
        $('#freight').hide();
       
    });
  </script>
  <script type="text/javascript">
/* Máscaras ER */
function mascara(o,f){
    v_obj=o
    v_fun=f
    setTimeout("execmascara()",1)
}
function execmascara(){
    v_obj.value=v_fun(v_obj.value)
}
function mcc(v){
    v=v.replace(/\D/g,"");
    v=v.replace(/^(\d{4})(\d)/g,"$1 $2");
    v=v.replace(/^(\d{4})\s(\d{4})(\d)/g,"$1 $2 $3");
    v=v.replace(/^(\d{4})\s(\d{4})\s(\d{4})(\d)/g,"$1 $2 $3 $4");
    v=v.substring(0,19);
    return v;
}
function id( el ){
  return document.getElementById( el );
}
window.onload = function(){
  id('number').onkeypress = function(){
    mascara( this, mcc );
  }
}
</script>

  </body>