document.addEventListener( 'DOMContentLoaded', ( e ) => {
	console.log( e );
	
	document.getElementById('scrollToTop').addEventListener('click', () => {
		window.scrollTo({ top: 0, behavior: 'smooth' });
	})
	document.querySelector('.header__hamburger').addEventListener('click', e => {
		document.body.classList.add('open');
	})
	document.querySelector('.header__close').addEventListener('click', e => {
		document.body.classList.remove('open');
	})
} );
