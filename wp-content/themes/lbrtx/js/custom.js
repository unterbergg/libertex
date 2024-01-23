document.addEventListener( 'DOMContentLoaded', ( e ) => {
	
	document.getElementById('scrollToTop').addEventListener('click', () => {
		window.scrollTo({ top: 0, behavior: 'smooth' });
	})
	document.querySelector('.header__hamburger').addEventListener('click', e => {
		document.body.classList.add('open');
	})
	document.querySelector('.header__close').addEventListener('click', e => {
		document.body.classList.remove('open');
	})

	const headerNotice = document.querySelector('.header__notice');
	const vector = `<svg xmlns="http://www.w3.org/2000/svg" width="15" height="8" viewBox="0 0 15 8" fill="none">
		<path d="M1.04116 7.82064L7.50066 1.44472L13.9602 7.82064C14.0756 7.93479 14.2305 7.99869 14.3918 7.99869C14.5532 7.99869 14.7081 7.93479 14.8235 7.82064C14.8794 7.7652 14.9238 7.69902 14.9541 7.62599C14.9844 7.55296 15 7.47454 15 7.39532C15 7.3161 14.9844 7.23768 14.9541 7.16464C14.9238 7.09161 14.8794 7.02544 14.8235 6.97L7.95172 0.185769C7.83104 0.0666607 7.66918 -6.4088e-07 7.50066 -6.55613e-07C7.33214 -6.70346e-07 7.17029 0.0666607 7.04961 0.185769L0.177823 6.96869C0.121547 7.02417 0.0768176 7.09051 0.0462762 7.16378C0.0157347 7.23706 5.9816e-08 7.31578 5.2863e-08 7.39532C4.59099e-08 7.47485 0.0157347 7.55358 0.0462761 7.62685C0.0768175 7.70013 0.121547 7.76647 0.177823 7.82195C0.293233 7.9361 0.448162 8 0.609491 8C0.770821 8 0.925748 7.9361 1.04116 7.82195L1.04116 7.82064Z" fill="white"/>
	</svg>`;
	const fullNotice = headerNotice.querySelector('.wrapper p').innerHTML;
	const shortNotice = fullNotice.slice(0, 100) + '...' + vector ;

	const showNotice = () => {
		headerNotice.classList.toggle('open');
		headerNotice.querySelector('.wrapper p').innerHTML = headerNotice.classList.contains('open') ? fullNotice + vector : shortNotice;
	}

	const toggleNotice = () => {
		if (window.innerWidth < 768) {
			headerNotice.querySelector('.wrapper p').innerHTML = shortNotice;
			headerNotice.addEventListener('click', showNotice, true);
		} else {
			headerNotice.querySelector('.wrapper').innerHTML = fullNotice;
			headerNotice.removeEventListener('click', showNotice, true);
		}
	}

	toggleNotice();
	window.addEventListener('resize', toggleNotice, true);

	const tools = document.querySelector('.tools__grid');
	document.querySelector('.tools__more')?.addEventListener('click', e => {
		tools.classList.add('open-tools');
	});
} );
