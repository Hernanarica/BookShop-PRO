/** @type {import('tailwindcss').Config} */
module.exports = {
	content: [
		'./resources/views/**/*.blade.php',
		'./resources/js/**/*.js'
	],
	theme: {
		extend: {
			keyframes: {
				fadeInUp: {
					'from': { opacity: '0', transform: 'translateY(10px)' },
					'to': { opacity: '1' }
				}
			},
			animation: {
				fadeInUp: 'fadeInUp 300ms forwards'
			}
		}
	},
	plugins: [
		require('@tailwindcss/forms')
	]
};