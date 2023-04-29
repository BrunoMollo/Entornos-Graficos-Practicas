// Si, esto es completamente inecesario, pero tenia ganas de hacerlo
const px = document.getElementById('pixeles');
const breakpoint = document.getElementById('breakpoint');

const update = () => {
	const screenWidth = window.innerWidth;
	px.innerText = screenWidth;
	if (screenWidth < 576) {
		breakpoint.innerText = 'Extra Small';
	} else if (screenWidth < 768) {
		breakpoint.innerText = 'Small';
	} else if (screenWidth < 992) {
		breakpoint.innerText = 'Medium';
	} else if (screenWidth < 1200) {
		breakpoint.innerText = 'Large';
	} else if (screenWidth < 1400) {
		breakpoint.innerText = 'Extra Large';
	} else {
		breakpoint.innerText = 'Extra Extra Large';
	}
};
update();
window.addEventListener('resize', update);
