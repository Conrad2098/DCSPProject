function purchase() {
	if (confirm("Are you sure you want to Purchase")){
		window.location.replace("./home.html#success");
		
		sessionStorage.removeItem("cart");
	}
}

function checkEntries() {
	var cardNumber = document.getElementById("cardNumber").value;
	var exprDate = document.getElementById("expire").value;
	var csv = document.getElementById("csv").value;
	var address = document.getElementById("address").value;
	
	var cnReg = new RegExp("/^\d{16}$/");
	var exprReg = new RegExp("/^\d{2}\/\d{2}$/");
	var csvReg = new RegExp("/^\d{3}$/");
	var addrReg = new RegExp("/^\d+\s[A-z]+\s[A-z]+/");
	
	if (cardNumber == "" || exprDate == "" || csv == "" || address == "")
	{
		alert('Please enter valid entires for all values');
	}
	else 
	{	
		if (!cnReg.test(cardNumber))
		{
			alert('Please enter valid card number (16 numbers)');
		}
		else if (!exprReg.test(exprDate))
			alert('Please enter valid Expiration Date (00/00 fomat)');

		else if (!csvReg.test(csv))
			alert('Please enter valid CSV number (3 numbers)');

		else if (!addReg.test(address))
			alert('Please enter valid address (ex. 100 streer st)');
		
		else
			purchase();
		}
}