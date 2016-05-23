var form = document.getElementById("formProduct");
 
if (form.addEventListener) {                   
    form.addEventListener("submit", validateProduct);
} 
else if (form.attachEvent) {                  
    form.attachEvent("onsubmit", validateProduct);
}

function validateProduct(evt) {

	var id  = document.getElementById('id');
	var type  = document.getElementById('type');
	var nameP  = document.getElementById('nameP');
	var quantity  = document.getElementById('quantity');
	var price  = document.getElementById('price');


	var error = 0;

	spanId = document.querySelector('.msg-id');
	if (id.value == "") {	
		spanId.innerHTML = " * Por favor, indique o código da mercadoria!";
		spanId.style.display = 'block';		
		error += 1;
	}
	else 
		spanId.style.display = 'none';
	
	spanType = document.querySelector('.msg-type');	
	if (type.value == "") {
		spanType.innerHTML = " * Por favor, indique o tipo da mercadoria!";
		spanType.style.display = 'block';	
		error += 1;
	}
	else 
		spanType.style.display = 'none';

	spanName = document.querySelector('.msg-name');	
	if (nameP.value == "") {
		spanName.innerHTML = " * Por favor, indique o nome da mercadoria!";
		spanName.style.display = 'block';
		error += 1;
	}
	else 
		spanName.style.display = 'none';

	spanQuantity = document.querySelector('.msg-quantity');	
	if (quantity.value == "") {
		spanQuantity.innerHTML = " * Por favor, indique a quantidade da mercadoria em valor numérico!";
		spanQuantity.style.display = 'block';
		error += 1;
	} 
	else if (isNaN(quantity.value)) {
		spanQuantity.innerHTML = " * Por favor, indique a quantidade da mercadoria em valor numérico!";
		spanQuantity.style.display = 'block';
		error += 1;

	}
	else 
		spanQuantity.style.display = 'none';

	spanPrice = document.querySelector('.msg-price');	
	if (price.value == "") {
		spanPrice.innerHTML = " * Por favor, indique o preço da mercadoria!";
		spanPrice.style.display = 'block';
		error += 1;
	}
	else if (isNaN(price.value))
	{
		spanPrice.innerHTML = " * Por favor, indique o preço válido da mercadoria (00.00)!";
		spanPrice.style.display = 'block';
		error += 1;
	}
	else 
		spanPrice.style.display = 'none';

	
	if (error > 0) {
		evt.preventDefault();
	}
}

