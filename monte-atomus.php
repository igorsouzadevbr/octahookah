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
</head>
<body>
	 <div class="default_header">

      	<div class="logo wow zoomIn animated giragira" align="center"><a href=""><img width="100" height="100" style="margin-top: 20px;" src="includes/img/OCTA-PRETA-PNG.png"></a></div>
      	


</div>

<div class="default_body">
	<h1 style="text-align: center; font-family: 'SF UI Display Heavy';animation-delay: 0.5s;" class="wow zoomIn animated delay 10s" >OCTA</h1>
	<p style="text-align: center; font-family: 'ProximaNova-Light'; margin-top: -9px;animation-delay: 0.8s;" class="wow fadeIn animated delay 10s">ÁTOMUS</p>
	<h3 style="text-align: center;animation-delay: 0.9s;" class="wow fadeIn animated">Partiu montar o seu?</h3>
	<p style="font-family: 'ProximaNova-Light';" id="usw">Use o switch button para começar</p>
	<div id="switchbtn" class="switch__container" align="center" style="margin-top: -1rem;">
  <input id="switch-shadow" class="switch switch--shadow" type="checkbox" />
  <label for="switch-shadow"></label>
</div>
<br>
<div id="product_builder" class="product_builder" style="display: none;">
	<form id="form-product-choice" action="#" method="post" enctype="multipart/form-data">

		<div class="pedido part_cad wow animated fadeIn esconder" >
		<h1 style="font-weight: bold;font-family: 'SF UI Display Heavy';">Endereço para envio.</h1>
		<small>Para continuarmos com o pagamento, precisamos que você nos informe quem vai receber e onde.</small>
		<hr>

			<h4 style="text-align: center; font-weight: bold; animation-delay: 0.5s;" class="wow zoomIn animated delay 10s" >Informe os dados para envio do produto.</h4>
			<div class="cad cadus wow animated fadeIn">
				<br>
	
					<input class="input-fcad campo-formulario" style="color: #000; font-family: 'SF UI Display Light';
    font-size: 18px;
    line-height: 1.21em;
    letter-spacing: .007em;" placeholder="Nome" type="text" name="nome" autofocus required>
    <input class="input-fcad campo-formulario" style="color: #000; font-family: 'SF UI Display Light';
    font-size: 18px;
    line-height: 1.21em;
    letter-spacing: .007em;" placeholder="Sobrenome" type="text" name="sobrenome" autofocus required>
    <br>
        <input id="cpf" class="input-fcad campo-formulario" style="margin-top:10px;color: #000; font-family: 'SF UI Display Light';
    font-size: 18px;
    line-height: 1.21em;
    letter-spacing: .007em;" placeholder="CPF" type="cpf" name="cpf" maxlength="11" autofocus required>
    <input class="input-fcad campo-formulario" style="margin-top:10px;color: #000; font-family: 'SF UI Display Light';
    font-size: 18px;
    line-height: 1.21em;
    letter-spacing: .007em;" placeholder="E-mail" type="email" name="email" autofocus required>
    <br>
     <input class="input-fcad campo-formulario" style="width:23em;margin-top:10px;color: #000; font-family: 'SF UI Display Light';
    font-size: 18px;
    line-height: 1.21em;
    letter-spacing: .007em;" placeholder="Endereço" type="text" name="address" autofocus required>
    <br>
    <input class="input-fcad campo-formulario" style="margin-top:10px;color: #000; font-family: 'SF UI Display Light';
    font-size: 18px;
    line-height: 1.21em;
    letter-spacing: .007em;" placeholder="CEP" type="text" name="cep" autofocus required>
    <input class="input-fcad campo-formulario" style="margin-top:10px;color: #000; font-family: 'SF UI Display Light';
    font-size: 18px;
    line-height: 1.21em;
    letter-spacing: .007em;" placeholder="Cidade" type="text" name="cidade" autofocus required>
    <br>
    <select class="campo-formulario-seletor" style="margin-top:10px;color: #000; font-family: 'SF UI Display Light';
    font-size: 18px;
    line-height: 1.21em;
    letter-spacing: .007em;" name="estado" autofocus required>
   <option value="AC">Acre</option>
    <option value="AL">Alagoas</option>
    <option value="AP">Amapá</option>
    <option value="AM">Amazonas</option>
    <option value="BA">Bahia</option>
    <option value="CE">Ceará</option>
    <option value="DF">Distrito Federal</option>
    <option value="ES">Espirito Santo</option>
    <option value="GO">Goiás</option>
    <option value="MA">Maranhão</option>
    <option value="MS">Mato Grosso do Sul</option>
    <option value="MT">Mato Grosso</option>
    <option value="MG">Minas Gerais</option>
    <option value="PA">Pará</option>
    <option value="PB">Paraíba</option>
    <option value="PR">Paraná</option>
    <option value="PE">Pernambuco</option>
    <option value="PI">Piauí</option>
    <option value="RJ">Rio de Janeiro</option>
    <option value="RN">Rio Grande do Norte</option>
    <option value="RS">Rio Grande do Sul</option>
    <option value="RO">Rondônia</option>
    <option value="RR">Roraima</option>
    <option value="SC">Santa Catarina</option>
    <option value="SP">São Paulo</option>
    <option value="SE">Sergipe</option>
    <option value="TO">Tocantins</option>
</select>
<input class="input-fcad campo-formulario" style="margin-top:10px;color: #000; font-family: 'SF UI Display Light';
    font-size: 18px;
    line-height: 1.21em;
    letter-spacing: .007em;" placeholder="Número" type="text" name="numero" autofocus required>
    <br>
    <input class="input-fcad campo-formulario" style="margin-top:10px;color: #000; font-family: 'SF UI Display Light';
    font-size: 18px;
    line-height: 1.21em;
    letter-spacing: .007em;" placeholder="Complemento" type="text" name="complemento" autofocus required>
        <input class="input-fcad campo-formulario" style="margin-top:10px;color: #000; font-family: 'SF UI Display Light';
    font-size: 18px;
    line-height: 1.21em;
    letter-spacing: .007em;" placeholder="Bairro" type="text" name="bairro" autofocus required>
    	  <p id="resposta" style="color: red;font-family: 'ProximaNova-Light';"></p>
    	  <br>
    
 <button class="buttonbuy buttonbuygreen" name="btncontinue" id="continuecad">Selecionar forma de envio</button>

			</div>
		
			<br>
			<small><b>Octa</b> utiliza tecnologia <a href="https://cadenzatecnologia.com.br">Cadenza</a>.</small>
			<br>
			<br>
		</div>
	
	<div class="product_builder part_stem wow fadeIn animated">
		<h3>Escolha a <b>Stem</b></h3>
		<small style="font-family: 'ProximaNova-Light';">Stem será o corpo do seu <b>Átomus</b>, por ela será realizada a passagem e conversão de temperatura do ar.</small>
		<hr>
		<img id="imgstem" class="wow fadeIn animated" src="includes/img/product/colors/stem/STEM-DOURADA-PNG.png" width="50" height="300">

		<p><b>Configure sua Stem</b></p>
		<div class="color-pal">
			<select name="cor-stem" id="stemcolor" form="form-product-choice" style="display: none;" required>
  <option id="select-stem-gold" value="dourado" required></option>
		<option id="select-stem-red"  value="vermelho" required></option>
		<option id="select-stem-blue" value="azul" required></option>
		<option id="select-stem-black"  value="preto" required></option>
		<option id="select-stem-silver"  value="prata" required></option>
		<option id="select-stem-pink"  value="rosa" required></option>
		<option id="select-stem-purple"  value="roxo"required ></option>
</select>
		<span id="option-stem-gold" class="color borda option-goldness option-stemf" data-corstem="dourado"></span>
		<span id="option-stem-red" class="color borda option-red option-stemf" data-corstem="vermelho"></span>
		<span id="option-stem-blue" class="color borda option-blue option-stemf" data-corstem="azul"></span>
		<span id="option-stem-black" class="color borda option-black option-stemf" data-corstem="preto"></span>
		<span id="option-stem-silver" class="color borda option-silver option-stemf" data-corstem="prata"></span>
		<span id="option-stem-pink" class="color borda option-pink option-stemf" data-corstem="rosa"></span>
		<span id="option-stem-purple" class="color borda option-purple option-stemf" data-corstem="roxo"></span>
		<br>
		<small>As cores podem sofrer pequena variação de tom após fabricação.</small>
		<br>
			<span class="button buttonselect" id="btn-step-1">> Configurar Vaso</span>
			<hr>
		</div>

	</div>
		<br>
		<div class="product_builder part_vaso wow fadeIn animated esconder">
		<h3>Escolha o <b>Vaso</b></h3>
		<small style="font-family: 'ProximaNova-Light';">Vaso será a base do seu <b>Átomus</b>, o recipiente onde coloca-se água para a produção de fumaça.</small>
		<hr>
		<img id="imgvaso" class="wow fadeIn animated" src="includes/img/product/colors/vaso/VASO-DOURADO-PNG.png" width="280" height="300">

		<p><b>Configure seu Vaso</b></p>
			<div class="color-pal">
			<select name="cor-vaso" id="vasocolor" form="form-product-choice" style="display: none;" required>
  		<option id="select-vaso-gold"  value="dourado" required></option>
		<option id="select-vaso-red"  value="vermelho" required></option>
		<option id="select-vaso-blue" value="azul" required></option>
		<option id="select-vaso-black"  value="preto" required></option>
		<option id="select-vaso-silver"  value="prata" required></option>
		<option id="select-vaso-pink"  value="rosa" required></option>
		<option id="select-vaso-purple"  value="roxo" required></option>
</select>
		<span id="option-vaso-gold" class="color borda option-goldness option-vaso" data-corvaso="dourado"></span>
		<span id="option-vaso-red" class="color borda option-red option-vaso" data-corvaso="vermelho"></span>
		<span id="option-vaso-blue" class="color borda option-blue option-vaso" data-corvaso="azul"></span>
		<span id="option-vaso-black" class="color borda option-black option-vaso" data-corvaso="preto"></span>
		<span id="option-vaso-silver" class="color borda option-silver option-vaso" data-corvaso="prata"></span>
		<span id="option-vaso-pink" class="color borda option-pink option-vaso" data-corvaso="rosa"></span>
		<span id="option-vaso-purple" class="color borda option-purple option-vaso" data-corvaso="roxo"></span>
		<br>
		<small>As cores podem sofrer pequena variação de tom após fabricação.</small>
		<br>
			<span class="button buttonselectback" id="btn-back-to-1">< Voltar para Stem</span>
			<span class="button buttonselect" id="btn-step-2">> Configurar Rosh</span>
			<hr>
		</div>

	</div>
<br>
		<div class="product_builder part_rosh wow fadeIn animated esconder">
		<h3>Escolha o <b>Rosh</b></h3>
		<small style="font-family: 'ProximaNova-Light';">Rosh será onde você colocará a mistura do tabaco no <b>Átomus</b>.</small>
		<hr>
		<img id="imgrosh" class="wow fadeIn animated" src="includes/img/product/colors/rosh/ROSH-PRETO-PNG.png" height="250">

		<p><b>Configure seu Rosh</b></p>
			<div class="color-pal">
			<select name="cor-rosh" id="roshcolor" form="form-product-choice" style="display: none;" required>
  		<option id="select-rosh-gold"  value="preto" required></option>
</select>
		<span id="option-rosh-black" class="color borda option-black option-rosh" data-corrosh="preto"></span>
		<br>
		<small>As cores podem sofrer pequena variação de tom após fabricação.</small>
			
			<br>
			<span class="button buttonselectback" id="btn-back-to-2">< Voltar para Vaso</span>
			<span class="button buttonselect" id="btn-step-3">> Configurar Prato</span>
			<hr>
		</div>

	</div>
<br>
	<div class="product_builder part_prato wow fadeIn animated esconder">
		<h3>Escolha o <b>Prato</b></h3>
		<small style="font-family: 'ProximaNova-Light';">Prato recolherá as cinzas do carvão depositadas no <b>Átomus</b>.</small>
		<hr>
		<img id="imgprato" class="wow fadeIn animated" src="includes/img/product/colors/prato/PRATO-DOURADO-PNG.png" height="350">

		<p><b>Configure seu Prato</b></p>
			<div class="color-pal">
			<select name="cor-prato" id="pratocolor" form="form-product-choice" style="display: none;" required>
  		<option id="select-prato-gold" value="dourado" required></option>
		<option id="select-prato-red" value="vermelho" required></option>
		<option id="select-prato-blue" value="azul" required></option>
		<option id="select-prato-black" value="preto" required></option>
		<option id="select-prato-silver" value="prata" required></option>
		<option id="select-prato-pink" value="rosa" required></option>
		<option id="select-prato-purple" value="roxo" required></option>
</select>
		<span id="option-prato-gold" class="color borda option-goldness option-prato" data-corprato="dourado"></span>
		<span id="option-prato-red" class="color borda option-red option-prato" data-corprato="vermelho"></span>
		<span id="option-prato-blue" class="color borda option-blue option-prato" data-corprato="azul"></span>
		<span id="option-prato-black" class="color borda option-black option-prato" data-corprato="preto"></span>
		<span id="option-prato-silver" class="color borda option-silver option-prato" data-corprato="prata"></span>
		<span id="option-prato-pink" class="color borda option-pink option-prato" data-corprato="rosa"></span>
		<span id="option-prato-purple" class="color borda option-purple option-prato" data-corprato="roxo"></span>
		<br>
		<small>As cores podem sofrer pequena variação de tom após fabricação.</small>
		<br>
			<span class="button buttonselectback" id="btn-back-to-3">< Voltar para Rosh</span>
			<span class="button buttonselect" id="btn-step-4">> Configurar Mangueira</span>
					<hr>

		</div>

	</div>

		<div class="product_builder part_mangueira wow fadeIn animated esconder">
		<h3>Escolha a <b>Mangueira</b></h3>
		<small style="font-family: 'ProximaNova-Light';">A mangueira tornará o uso do seu <b>Átomus</b> real.</small>
		<hr>
		<img id="imgmangueira" class="wow fadeIn animated" src="includes/img/product/colors/mangueira/MANGUEIRA-DOURADA-PNG.png" width="260" height="300">

		<p><b>Configure sua Mangueira</b></p>
			<div class="color-pal">
			<select name="cor-mangueira" id="mangueiracolor" form="form-product-choice" style="display: none;" required>
  		<option id="select-mangueira-gold" value="dourado" required></option>
		<option id="select-mangueira-red" value="vermelho" required></option>
		<option id="select-mangueira-blue" value="azul" required></option>
		<option id="select-mangueira-black" value="preto" required></option>
		<option id="select-mangueira-silver" value="prata" required></option>
		<option id="select-mangueira-pink" value="rosa" required></option>
		<option id="select-mangueira-purple" value="roxo" required></option>
</select>
		<span id="option-mangueira-gold" class="color borda option-goldness option-mangueira" data-cormangueira="dourado"></span>
		<span id="option-mangueira-red" class="color borda option-red option-mangueira" data-cormangueira="vermelho"></span>
		<span id="option-mangueira-blue" class="color borda option-blue option-mangueira" data-cormangueira="azul"></span>
		<span id="option-mangueira-black" class="color borda option-black option-mangueira" data-cormangueira="preto"></span>
		<span id="option-mangueira-silver" class="color borda option-silver option-mangueira" data-cormangueira="prata"></span>
		<span id="option-mangueira-pink" class="color borda option-pink option-mangueira" data-cormangueira="rosa"></span>
		<span id="option-mangueira-purple" class="color borda option-purple option-mangueira" data-cormangueira="roxo"></span>
		<br>
		<small>As cores podem sofrer pequena variação de tom após fabricação.</small>
		<br>
			<span class="button buttonselectback" id="btn-back-to-4">< Voltar para Prato</span>
			<span class="button buttonselect" id="btn-step-5">> Configurar Piteira</span>
			<hr>
		</div>

	</div>

	<div class="product_builder part_piteira wow fadeIn animated esconder">
		<h3>Escolha a <b>Piteira</b></h3>
		<small style="font-family: 'ProximaNova-Light';">A piteira tornará o uso do seu <b>Átomus</b> mais seguro.</small>
		<hr>
		<img id="imgpiteira" class="wow fadeIn animated" src="includes/img/product/colors/piteira/PITEIRA-DOURADA-PNG.png" height="350">

		<p><b>Configure sua Piteira</b></p>
			<div class="color-pal">
			<select name="cor-piteira" id="piteiracolor" form="form-product-choice" style="display: none;" required>
  		<option id="select-piteira-gold" value="dourado" required></option>
		<option id="select-piteira-red" value="vermelho" required></option>
		<option id="select-piteira-blue" value="azul" required></option>
		<option id="select-piteira-black" value="preto" required></option>
		<option id="select-piteira-silver" value="prata" required></option>
		<option id="select-piteira-pink" value="rosa" required></option>
		<option id="select-piteira-purple" value="roxo" required></option>
</select>
		<span id="option-piteira-gold" class="color borda option-goldness option-piteira" data-corpiteira="dourado"></span>
		<span id="option-piteira-red" class="color borda option-red option-piteira" data-corpiteira="vermelho"></span>
		<span id="option-piteira-blue" class="color borda option-blue option-piteira" data-corpiteira="azul"></span>
		<span id="option-piteira-black" class="color borda option-black option-piteira" data-corpiteira="preto"></span>
		<span id="option-piteira-silver" class="color borda option-silver option-piteira" data-corpiteira="prata"></span>
		<span id="option-piteira-pink" class="color borda option-pink option-piteira" data-corpiteira="rosa"></span>
		<span id="option-piteira-purple" class="color borda option-purple option-piteira" data-corpiteira="roxo"></span>
		<br>
		<small>As cores podem sofrer pequena variação de tom após fabricação.</small>
			<br>
			<span class="button buttonselectback" id="btn-back-to-5">< Voltar para Mangueira</span>
			<span id="button-see-buy" class="button buttonselect">> Ver pedido</span>
	<br>

		</div>

	</div>



	</form>

	<br>
</div>
	


<a href="https://cadenzatecnologia.com.br" target="_blank"><img src="includes/img/logopreta.png" width="110" height="30"></a>
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
	<script src="includes/js/wow.min.js"></script>
	<script src="includes/js/jquery.min.js"></script>
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript">
		$('#switch-shadow').click(function (){
			
			    $("#product_builder").show();
			    $('#switch-shadow').hide();
			     $('#switchbtn').hide();
				  $('.switch-shadow').hide();
				  $('#usw').hide();
		
		});

		
</script>
<script type="text/javascript">

	function CPF(){"user_strict";function r(r){for(var t=null,n=0;9>n;++n)t+=r.toString().charAt(n)*(10-n);var i=t%11;return i=2>i?0:11-i}function t(r){for(var t=null,n=0;10>n;++n)t+=r.toString().charAt(n)*(11-n);var i=t%11;return i=2>i?0:11-i}var n="CPF Inválido",i="CPF Válido";this.gera=function(){for(var n="",i=0;9>i;++i)n+=Math.floor(9*Math.random())+"";var o=r(n),a=n+"-"+o+t(n+""+o);return a},this.valida=function(o){for(var a=o.replace(/\D/g,""),u=a.substring(0,9),f=a.substring(9,11),v=0;10>v;v++)if(""+u+f==""+v+v+v+v+v+v+v+v+v+v+v)return n;var c=r(u),e=t(u+""+c);return f.toString()===c.toString()+e.toString()?i:n}}
var CPF = new CPF();
$("#cpf").keypress(function(){
    $("#resposta").html(CPF.valida($(this).val()));
    if (CPF.valida($(this).val()) == "CPF Inválido") {
    	$("#resposta").css("color", "red");
    	$("#cpf").focus();
    }
      if (CPF.valida($(this).val()) == "CPF Válido") {
    	$("#resposta").css("color", "green");
    }
});

$("#cpf").blur(function(){
     $("#resposta").html(CPF.valida($(this).val()));

         if (CPF.valida($(this).val()) == "CPF Inválido") {
    	$("#resposta").css("color", "red");
    }
      if (CPF.valida($(this).val()) == "CPF Válido") {
    	$("#resposta").css("color", "green");
    }
});
	var cpf = document.querySelector("#cpf");


cpf.addEventListener("blur", function(){
   if(cpf.value) cpf.value = cpf.value.match(/.{1,3}/g).join(".").replace(/\.(?=[^.]*$)/,"-");
});
</script>
<script type="text/javascript">
	  $("#button-see-buy").click(function() {
	  		$('.part_piteira').hide();
	  	    $(".part_cad").show();
			    

	});
  $("#form-product-choice").submit(function(event){    
      event.preventDefault(); //prevent default action 
    var form_data = $(this).serialize(); //En
    $.ajax({
        url : "create-data.php",
        type: "post",
        data : form_data
    }).done(function(response){ 
      if (response == "sucesso") {
        $(".part_cad").hide();
        $(".default_body").hide();
        window.location.href = 'envio.php?redirect=buy-on-web';
        return;
}

      if (response == "erro") {
        alert("erro");
        return;
}
    });

    return false; // evitando recarregamento do form
});
  
</script>
<script type="text/javascript" src="includes/js/0992289313891310231083.js"></script>
</body>

</html>

