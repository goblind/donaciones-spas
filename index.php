<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Donaciones SPAS</title>
	<link href="stylesheets/fbootstrap.min.css" rel="stylesheet">	
	<link href="stylesheets/style.css" rel="stylesheet">	
	<style>
		body {
			padding-top: 30px;
	  	}
	</style>
</head>
<body>
	
	<div class="container">
		<ul class="media-grid">
			<li>
				<a href="">
				  <img class="thumbnail" src="images/banner.jpg" alt="">
				</a>
			</li>
		</ul>
		<div class="row">
			<div class="span12">
		    	<h5 class="tab">Compra de Rifas</h5>
		    	<div class="row centerText">
			    	<p>Tenemos rifas para vender! Sortea por las últimas 3 cifras de la quiniela nocturna nacional del sábado 18 de octubre. Los premios son los siguientes. Los premios se retiran en Ciudad Autónoma de Buenos Aires.</p>
			    	<ol>
			    		<li>Tablet Serie Dorada SD-M72 (7")</li>
			    		<li>Juguera ATMA EX8231E</li>
			    		<li>Sandwichera Moulinex + Juego de toallas</li>
			    		<li>Tostadora Top House KT600 + Set de mate</li>
			    	</ol>
			    	<p>El valor es de $ 40 cada rifa y el pago se puede realizar on line con tarjeta de crédito. Una vez efectuada tu compra por la cantidad de rifas que quieras tenés que enviar un mail a <strong>animalitos.sarmiento@gmail.com</strong> con los datos para confirmar tu depósito y que puedas elegir tus números.</p>
			    	<br>
			    	<select class="medium" name="selectRifa" id="selectRifa">
		                <option>1 rifa</option>
		                <option>2 rifas</option>
		                <option>3 rifas</option>
		                <option>4 rifas</option>
		                <option>5 rifas</option>
              		</select>
              		<p id='pRifaValor' style="display:inline">El monto a pagar es de <strong>$40</strong>.</p>
              		<br>
              		<div class="row center">
	              		<div class='span2'>
	              			<input id='btnRifa' type='button' class='btn small primary' name='submit' value='Comprar'>
	              		</div>
	              		<div class='span2'></div>
	              		<div class='span2'></div>
	              		<div class='span2'></div>
	              		<div class='span2'></div>
	              		<div class='span2'></div>
              		</div>
              		<br>
              		<p>Por favor recordá, todas las consultas con respecto a la rifa podés enviárnoslas a <strong>animalitos.sarmiento@gmail.com</strong>.</p>
			    </div>
			    <div class="row">
			    	<div class="span6">
			      	</div>
			      	<div class="span6">
			        	
			      	</div>
			    </div>
		  	</div>
		  	<div class="span12">
		    	<h5 class="tab">Donaciones con Tajeta de Crédito</h5>
		    	<div class="row centerText">
			    	<p>Desde la comodidad de tu casa y utilizando una tarjeta de crédito podés ayudar a nuestros animalitos de forma totalmente segura. Ellos te lo agradecen!</p>
			    </div>
			    <div class="row center">
			    	<div class="span2">
			        	<input id='btn50' type='button' class='btn small primary' name='submit' value='$50'>
			      	</div>
			      	<div class="span2">
			        	<input id='btn100' type='button' class='btn small primary' name='submit' value='$100'>
			      	</div>
			      	<div class="span2">
			        	<input id='btn200' type='button' class='btn small primary' name='submit' value='$200'>
			      	</div>
			      	<div class="span2">
			        	<input id='btn300' type='button' class='btn small primary' name='submit' value='$300'>
			      	</div>
			      	<div class="span2">
			        	<input id='btn500' type='button' class='btn small primary' name='submit' value='$500'>
			      	</div>
			      	<div class="span2">
			      	</div>
			    </div>
			    <br>
		  	</div>
		  	<div class="span12">
		    	<h5 class="tab">Transferencia Bancaria</h5>
		    	<div class="row centerText">
			    	<p>También podés realizar una transferencia desde tu banco a nuestra cuenta!</p>
			    </div>
			    <br>
			    <div class="row">
			    	<div class="span6">
	      	    		<address>
				            <strong>Protectora Sarmiento</strong><br>
				            Banco Francés<br>
				            Cuenta Corriente: 342/301266/1<br>
				            CBU: 0170342720000030126611<br>
				            <!-- <abbr title="Phone">P:</abbr> (123) 456-7890 -->
			          	</address>
			      	</div>
			      	<div class="span6">
			        	
			      	</div>
			    </div>
		  	</div>
		  	<div class="span12">
		    	<h5 class="tab">Personalmente</h5>
			    <div class="row centerText">
			    	<p>Podés acercarnos tu donación a nuestro stand en el barrio de Caballito  (Av. Rivadavia entre Acoyte e Hidalgo frente a la puerta del Banco Provincia) todos los sábados de 11hs a 13.30hs. Se suspende por mal clima.</p>
					<br>
					<hr>
			    	<p>Todas las donaciones son utilizadas para garantizar el bienestar de nuestros animales. Somos una institución privada sin ningún tipo de subsidio o ayuda gubernamental. Muchísimas gracias de parte de todo el grupo de voluntarios que conformamos la Sociedad Protectora de Animales Sarmiento.</p>
			    </div>
		  	</div>
		</div>
	<div style="visibility: hidden">	
		<form id='formDonar' action='https://argentina.dineromail.com/Shop/Shop_Ingreso.asp' method='post'>
			<input type='hidden' name='NombreItem' value='Donaciones Protectora Sarmiento'>
			<input type='hidden' name='TipoMoneda' value='1'>
			<input type='hidden' name='PrecioItem' value='50.00'>
			<input type='hidden' name='E_Comercio' value='1170872'>
			<input type='hidden' name='NroItem' value='-'>
			<input type='hidden' name='image_url' value='http://donaciones-protectorasarmiento.herokuapp.com/images/banner.jpg'>
			<input type='hidden' name='DireccionExito' value='http://donaciones-protectorasarmiento.herokuapp.com/ok.html'>
			<input type='hidden' name='DireccionFracaso' value='http://'>
			<input type='hidden' name='DireccionEnvio' value='0'>
			<input type='hidden' name='Mensaje' value='1'>
			<input type='hidden' name='MediosPago' value='4,5,6,14,15,13'>
			<input type='image' src='https://argentina.dineromail.com/imagenes/botones/donar_c.gif?dmbypayu' name='submit' alt='Pagar con DineroMail'>
		</form>
		<form id='formRifa' action='https://argentina.dineromail.com/Shop/Shop_Ingreso.asp' method='post'>
			<input type='hidden' name='NombreItem' value='Rifa'>
			<input type='hidden' name='TipoMoneda' value='1'>
			<input type='hidden' name='PrecioItem' value='40.00'>
			<input type='hidden' name='E_Comercio' value='1170872'> 
			<input type='hidden' name='NroItem' value='-'>
			<input type='hidden' name='image_url' value='http://donaciones-protectorasarmiento.herokuapp.com/images/banner.jpg'>
			<input type='hidden' name='DireccionExito' value='http://donaciones-protectorasarmiento.herokuapp.com/ok.html'>
			<input type='hidden' name='DireccionFracaso' value='http://'>
			<input type='hidden' name='DireccionEnvio' value='0'>
			<input type='hidden' name='Mensaje' value='1'>
			<input type='hidden' name='MediosPago' value='4,5,6,14,15,13'>
			<input type='image' src='https://argentina.dineromail.com/imagenes/botones/donar_c.gif?dmbypayu' name='submit' alt='Pagar con DineroMail'>
		</form>
	</div>	

	<script src="javascripts/jquery-1.11.1.min.js"></script>
	<script src="javascripts/submit.js"></script>
	<div id="fb-root"></div>
    <script src="http://connect.facebook.net/en_US/all.js"></script>
	<script type="text/javascript">
		window.fbAsyncInit = function () {
    	//Inicializacion del SDK
		    FB.init({
		        appId: '1428427990741852', //coloca aquí el APP ID de tu App
		        status: true,
		        cookie: true,
		        xfbml: true
		    });
		 
		    // Hacemos resize del Canvas
		    FB.Canvas.setSize({ width: 760, height: 1100 });//medidas del iframe
		};
		 
		// Load the FB SDK Asynchronously
		(function (d) {
		    var js, id = 'facebook-jssdk'; if (d.getElementById(id)) { return; }
		    js = d.createElement('script'); js.id = id; js.async = true;
		    js.src = "//connect.facebook.net/en_US/all.js";
		    d.getElementsByTagName('head')[0].appendChild(js);
		} (document));
    </script>
</body>
</html>