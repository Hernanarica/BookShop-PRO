const $userMenuBtn = document.getElementById('user-menu-button');
const $userMenu = document.getElementById('user-menu');

$userMenuBtn.addEventListener('click', () => {
	$userMenu.classList.contains('hidden')
		? $userMenu.classList.replace('hidden', 'animate-fadeInUp')
		: $userMenu.classList.replace('animate-fadeInUp', 'hidden')
});