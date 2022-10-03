const $hamburgerMenu = document.querySelector('#hamburgerBtn');
const $mobileMenu = document.getElementById('mobile-menu');
const $iconOpen = document.getElementById('iconOpen');
const $iconClose = document.getElementById('iconCLose');

$hamburgerMenu.addEventListener('click', () => {
	$iconClose.classList.toggle('hidden');
	$iconOpen.classList.toggle('hidden');
	
	$mobileMenu.classList.contains('hidden')
		? $mobileMenu.classList.replace('hidden','block')
		: $mobileMenu.classList.replace('block','hidden');
});