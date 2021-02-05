const errorMsg= document.querySelector('.error-msg');

let content = errorMsg.innerHTML;

if(content == "Game added successfully") {
	errorMsg.style.backgroundColor = "green";
	errorMsg.style.color = "white";
}
else if(content == "") {
	errorMsg.style.opacity = '0';
}
else {
	errorMsg.style.backgroundColor = "red";
	errorMsg.style.color = "white";
}

setTimeout(()=> {
	errorMsg.style.opacity = '0';
},2000);