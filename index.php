<html>
	<head>
		<title>IMC Calculator - By Julio Rodrigues</title>
		  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css">
	</head>
	<body>
	 	<div class="container">
       		<div class="row">
   			  <nav id="titulo">
				    <div class="nav-wrapper grey darken-4">
				      	<a href="#" class="brand-logo">{{titulo}}</a>
				    </div>
			  </nav>
       		</div>
       		<div id="calculator" class="row">
       			<form>
       				<div class="row">
       					<span>{{tituloform}}</span>
       				</div>
       				<div class="row">
	       				<input type="number" name="altura" placeholder="Insira sua altura. Exemplo: 1,80" v-model="altura">
	       				<input type="number" name="peso" placeholder="Insira seu peso. Exemplo 75" v-model="peso">
       				</div>
       			</form>
       			<div class="row">
       				<h4>Seu IMC:</h4>
       				<p>Seu imc é: </p>
       				 <label for="result"></label>
            		<input type="text" id="result" v-model="resultado">
       			</div>
       		</div>
      	</div>
      	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.2.6/vue.js"></script>
      	<script type="text/javascript" src="calculator.js"></script>
	</body>
</html>