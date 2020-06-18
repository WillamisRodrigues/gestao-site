function init() {
  var objEstado = {
    "ac": [
      {
        "nome": "Acre",
        "capital": "Rio Branco"
      }],
      "al": [{
        "nome": "Alagoas",
        "capital": "Maceió"
      }],
      "ap": [{
        "nome": "Amapá",
        "capital": "Macapá"
      }],
      "am": [
      {
        "nome": "Amazonas",
        "capital": "Manaus"
      }],
      "ba": [{
        "nome": "Bahia",
        "capital": "Salvador"
      }],
      "ce": [{
        "nome": "Ceará",
        "capital": "Fortaleza"
      }],
      "df": [{
        "nome": "Distrito Federal",
        "capital": "Brasília"
      }],
      "es": [{
        "nome": "Espírito Santo",
        "capital": "Vitória"
      }],
      "go": [{
        "nome": "Goiás",
        "capital": "Goiânia"
      }],
      "ma": [{
        "nome": "Maranhão",
        "capital": "São Luís"
      }],
    "mt": [{
        "nome": "Mato Grosso",
        "capital": "Cuiabá"
      }],
      "ms": [{
        "nome": "Mato Grosso do Sul",
        "capital": "Campo Grande"
      }],
      "mg": [{
        "nome": "Minas Gerais",
        "capital": "Belo Horizonte"
      }],
    "pr": [{
        "nome": "Paraná",
        "capital": "Curitiba"
      }],
      "pb": [{
        "nome": "Paraíba",
        "capital": "João Pessoa"
      }],
      "pa": [{
        "nome": "Pará",
        "capital": "Belém"
      }],
    "pe": [{
        "nome": "Pernambuco",
        "capital": "Recife"
      }],
      "pi": [{
        "nome": "Piauí",
        "capital": "Terezina"
      }],
      "rj": [{
        "nome": "Rio de Janeiro",
        "capital": "Rio de Janeiro"
      }],
    "rn": [{
        "nome": "Rio Grande do Norte",
        "capital": "Natal"
      }],
      "rs": [{
        "nome": "Rio Grande do Sul",
        "capital": "Porto Alegre"
      }],
      "ro": [{
        "nome": "Rondônia",
        "capital": "Porto Velho"
      }],
    "rr": [{
        "nome": "Roraima",
        "capital": "Boa Vista"
      }],
      "sc": [{
        "nome": "Santa Catarina",
        "capital": "Florianópolis"
      }],
      "se": [{
        "nome": "Sergipe",
        "capital": "Aracaju"
      }],
      "sp": [{
        "nome": "São Paulo",
        "capital": "São Paulo"
      }],
      "to": [{
        "nome": "Tocantins",
        "capital": "Palmas"
      }]
}

var i = j = k = l = m = 0;
var msg = document.getElementById('msg');
var D = document.getElementById('E'); 
SVGDoc = D.getSVGDocument(); 
SVGRoot = SVGDoc.documentElement; 
svgns = 'http://www.w3.org/2000/svg';
var estados = SVGRoot.getElementsByTagName('path');
var qdeEstados = estados.length;
var todasRegioes = SVGRoot.querySelectorAll('.regiao');
var regiaoNorte = SVGRoot.querySelector('#norte');
var regiaoNordeste = SVGRoot.querySelector('#nordeste');
var regiaoSudeste = SVGRoot.querySelector('#sudeste');
var regiaoCentroOeste = SVGRoot.querySelector('#centro-oeste');
var regiaoSul = SVGRoot.querySelector('#sul');
for ( ; i<qdeEstados; i++ ) { 
	estados[i].onmouseover = function(evt) {
		var x = evt.pageX;
		var y = evt.pageY + 250;
    this.style.fill = '#0100be';
    this.style.cursor = 'pointer';
		var siglaEstado = this.parentNode.id;
	
	$('#nome_estado').html(objEstado[siglaEstado][0].nome).css({
		top: y,
		left: x,
		padding: '0 0.6em',
		border: '2px solid white',
		boxShadow: '4px 4px 6px #444'
	});
	}
	estados[i].onmouseout = function() {
		var fillColor = this.getAttribute('fill'); 
		this.style.fill = fillColor;
		$('#nome_estado').html('').css({
		border: 'none',
	});
	$('#capital_estado').html('').css({
		border: 'none',
	});
	}
}

var regioes = [regiaoNorte, regiaoNordeste, regiaoSudeste, regiaoCentroOeste, regiaoSul, ''];
	for ( ; k<6; k++ ) (function(k) {  
		$('input').eq(k).click(function() {
			regiaoNorte.style.opacity = .15;	
			regiaoNordeste.style.opacity = .15; 
			regiaoSudeste.style.opacity = .15; 
			regiaoCentroOeste.style.opacity = .15; 
			regiaoSul.style.opacity = .15;
			if ( k !== 5) {
				regioes[k].style.opacity = 1;	
			
			} else {
			regiaoNorte.style.opacity = 1;	
			regiaoNordeste.style.opacity = 1; 
			regiaoSudeste.style.opacity = 1; 
			regiaoCentroOeste.style.opacity = 1; 
			regiaoSul.style.opacity = 1;
			$('#conteudoAjax').html('');
			}
		});
	})(k);

// AJAX
	var carregando = $('#carregando')
	var conteudoAjax = $('#conteudoAjax')

	function mostrarCarregando(){  
     carregando.css('display', 'block');  
 	};
	
	function aposCarregamento(){  
     carregando.hide();  
     conteudoAjax.fadeIn(1000);  
	};  

$('input').click(function(){ // Carregar nomes  dos estados das regiões   
	mostrarCarregando();  
    indexRegiaoClicada = $('input').index(this);
	switch(indexRegiaoClicada){  
        case 0:  
            conteudoAjax.slideUp();  
            conteudoAjax.load('ajax/regioes.html #n', aposCarregamento);  
            break;  
        case 1:  
            conteudoAjax.slideUp();  
            conteudoAjax.load('ajax/regioes.html #ne', aposCarregamento);  
            break;  
        case 2:  
            conteudoAjax.slideUp();  
            conteudoAjax.load('ajax/regioes.html #se', aposCarregamento); 
            break;  
        case 3:  
            conteudoAjax.slideUp();  
            conteudoAjax.load('ajax/regioes.html #co', aposCarregamento);  
            break;  
        case 4:  
            conteudoAjax.slideUp();  
            conteudoAjax.load('ajax/regioes.html #s', aposCarregamento);  
            break;  
		default:  
            aposCarregamento();  
            break;  
    }  	
});

for ( ; m<qdeEstados; m++ ) { // Carregar descrição do estado  
	estados[m].onclick = function() { 
	mostrarCarregando();  
		regiaoNorte.style.opacity = 1;	
		regiaoNordeste.style.opacity = 1; 
		regiaoSudeste.style.opacity = 1; 
		regiaoCentroOeste.style.opacity = 1; 
		regiaoSul.style.opacity = 1;
	var estadoClicado = this.parentNode.id;
	conteudoAjax.slideUp();  
    conteudoAjax.load('ajax/estados.html #'+estadoClicado+'', aposCarregamento); 
	}
}

}
window.addEventListener("load", init, false);