var banners = ["img/banner.gif","img/hardware.jpg","img/banner.png"];
var bannerAtual = 0;
var links = ["html/const.html","../teste/index.html"]
var linkAtual = 0
function trocaBanner() {
	if(bannerAtual == 3){
		bannerAtual = 0;
		linkAtual = 0;
	}
	if(bannerAtual == 2){
		linkAtual = 1;
	}
  //bannerAtual = (bannerAtual + 1);
  //document.querySelector('.destaque img').src = banners[bannerAtual];
  document.querySelector('.item').src = banners[bannerAtual];
  document.querySelector('#promo').href = links[linkAtual];
  bannerAtual = (bannerAtual + 1);

}

setInterval(trocaBanner, 3000);
