const carouselSlide = document.querySelector('.carousel-slide');
const carouselImage = document.querySelectorAll('.carousel-slide img');

// Buttons
const prevBtn = document.querySelector('.prevBtn');
const nextBtn = document.querySelector('.nextBtn');
const loginLogo = document.querySelector('.log');
const logDropDown = document.querySelector('.login-dropdown');

let size = carouselImage[0].clientWidth;
let counter = 1;
let toggleLoginLogo = false;

carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';

// event listener
window.addEventListener('resize', ()=> {
	size = carouselImage[0].clientWidth;
	carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
});

prevBtn.addEventListener('click', autoPrev);
nextBtn.addEventListener('click', autoNext);

carouselSlide.addEventListener('transitionend', ()=> {
	if(carouselImage[counter].id === 'lastclone') {
		carouselSlide.style.transition = 'none';
		counter = carouselImage.length - 2;
		carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
	}
	if(carouselImage[counter].id === 'firstclone') {
		carouselSlide.style.transition = 'none';
		counter = 1;
		carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
	}
});

loginLogo.addEventListener('click', toggleLog);

// FUNCTIONS

function autoPrev() {
	if(counter <= 0) return;
	carouselSlide.style.transition = "transform 0.3s cubic-bezier(0,1.12,.98,1)";
	counter--;
	carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
}

function autoNext() {
	if(counter >= carouselImage.length -1) return;
	carouselSlide.style.transition = "transform 0.3s cubic-bezier(0,1.12,.98,1)";
	counter++;
	carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
}

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

// async funtions
setInterval(autoNext,5000);



