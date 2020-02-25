var allimg = ['ice1','ice2','ice3','ice4'];
var productView = document.querySelector('.product-view img');

var product = document.querySelectorAll('.columns li');

product.forEach(items => items.addEventListener('click', function (elem){
	for (var i = 0; i < product.length; i++){
		product[i].classList.remove('ctive');
	}

	// 

	if(this.className === 'Sweet_Cream'){
		productView.src = 'public/img/' + allimg[0]+'.png';
	}

	if(this.className === 'Chocalate'){
		productView.src = 'public/img/' + allimg[1]+'.png';
	}

	if(this.className === 'Vanila'){
		productView.src = 'public/img/' + allimg[2]+'.png';
	}

	if(this.className === 'Milo'){
		productView.src = 'public/img/' + allimg[3]+'.png';
	}
	

}))
