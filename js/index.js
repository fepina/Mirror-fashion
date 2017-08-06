var banners=["img/destaque-home.png","img/destaque-home-2.png" ,"img/destaque-home-3.png"];

var bannerAtual=0;

function trocaBanner(){

	bannerAtual=(bannerAtual+1) %3;
	document.querySelector('.destaque img') .src = banners[bannerAtual];
}

setInterval(trocaBanner,4000);



$('.novidades').addClass('painel-compacto'); 


$(".novidades button").click(function(){
	$(".novidades").removeClass('painel-compacto');
});


$('.mais-vendidos').addClass('painel-compacto'); 


$(".mais-vendidos button").click(function(){
	$(".mais-vendidos").removeClass('painel-compacto');
});










/*var destaque= document.querySelector("#destaque");
var imgs = ["img/destaque-home.png", "img/destaque-home-3.png"];

setInterval(function(){
	imgs=imgs.reverse()

	destaque.src=imgs[0];
},1000);*/