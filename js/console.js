
var para= $("p")
console.log("para");
para.text("ola");

para.css("color","blue");

para.hide()//display none

para.show();//display:show


para.addClass("fundo-verde");


$("p").on("click",mudaTexto);

function mudaTexto(){
	$("p").text("Banana");
	$("p").css("color","yellow");
}
























/*var paragrafo = document.querySelector("#primeirop");
console.log(paragrafo);
console.log(paragrafo.textContent);
paragrafo.style.color="blue";


paragrafo.addEventListener("click",mudaBackground)/*{adiciona evento ao paragrafo de "observar" 
	//console.log("clicou")aparece dentro do console quantas vezes o paragrafo foi clicado
	paragrafo.style.color="cyan";
})*/

/*paragrafo.style.fontSize="30px";
function mudaBackground(){
	paragrafo.style.backgroundColor="purple";
	avisaUsuario();
}

function avisaUsuario(){
	alert("Mudei o background");
}




/*console.log("fui carregado de um arquivo externo");
var paragrafo=document.querySelector("p"); cria uma  variavel que facilitar o trabalho
console.log(paragrafo); imprime o paragrafo no console
console.log(paragrafo.textContent); imprime o conteudo do paragrafo
paragrafo.textContent="Aqui vai o novo texto"; altere o conteúdo do paragrafo
paragrafo.style.color="white"; altera a cor do conteudo do paragrafo
paragrafo.style


console.log("exibir 1vez");
setInterval(function(){
	console.log("exibido")
	}
	,2000);



*/























