AOS.init();
	AOS.init({
		disable: false,
		startEvent: 'DOMContentLoaded',
		initClassName: 'aos-init',
		animatedClassName: 'aos-animate',
		useClassNames: false,
		disableMutationObserver: false,
		debounceDelay: 50,
		throttleDelay: 99,
		offset: 150,
		delay: 0,
		duration: 600,
		easing: 'ease',
		once: false,
		mirror: false,
		anchorPlacement: 'top-bottom',
	});