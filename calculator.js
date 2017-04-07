var titulo = new Vue({
  el: '#titulo',
  data: {
    titulo: 'IMC Calculator'
  }
});

var calculator = new Vue ({
	el: '#calculator',
  	data: {
    tituloform: 'Preencha aqui suas informações',
    altura: '',
    peso: ''
  	},
  	computed: {
        resultado: function(){
            return (this.peso / (this.altura * this.altura)).toFixed(2);
           
        }
    }
  
});
