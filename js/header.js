const loginLogo = document.querySelector('.log');
const logDropDown = document.querySelector('.login-dropdown');

let toggleLoginLogo = false;
loginLogo.addEventListener('click', toggleLog);

function toggleLog() {
	if(toggleLoginLogo) {
		logDropDown.style.display = "none";
		toggleLoginLogo = false;
	}
	else {
		logDropDown.style.display = "block";
		toggleLoginLogo = true;
	}
}
