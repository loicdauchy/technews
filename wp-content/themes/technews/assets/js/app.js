window.onscroll = () => {
	if (window.scrollY > 200) {
		document.getElementById('boxNav').style.background = '#fff';
		document.getElementById('boxNav').style.boxShadow =
			'1px 4px 13px 0px rgba(0,0,0,0.75)';
	} else {
		document.getElementById('boxNav').style.background = 'transparent';
		document.getElementById('boxNav').style.boxShadow = 'inherit';
	}
};
