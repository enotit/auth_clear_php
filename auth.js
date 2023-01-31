const xhr=new XMLHttpRequest();
xhr.open('GET', "./forms/popup_signin.php", true); // Для примера
xhr.send();

function getpopupform(code)
{
	const popup=document.getElementById("popup");
	if (!popup)
	return '<div class="popup" id="popup">' +
		'<a class="close" href="#" onclick="closepopup()"> X </a>' +
		'<br>' + code +
		'</div>'
}


function signin(e) {
	if (xhr.readyState === 4 && xhr.status === 200) {
		const code = getpopupform(xhr.responseText);
		document.body.innerHTML = code + document.body.innerHTML;
	}
}


function closepopup(){
	const popup=document.getElementById("popup");
	popup.remove();
}
