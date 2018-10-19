function create_code(){
	document.getElementById('code').src='php/vertification.php?n='+Math.random()*10000;
	}
function create_signin_code(){
	document.getElementById('signin_code').src='php/vertification.php?n='+Math.random()*10000;
	}