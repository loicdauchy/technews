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

document.getElementById('burger').addEventListener('click', function () {
	document.getElementById('menuMobile').classList.add('openMobileMenu');
	setTimeout(() => {
		document.getElementById('menuMobile').classList.add('showContent');
	}, 300);
});
document.getElementById('closeMenu').addEventListener('click', function () {
	document.getElementById('menuMobile').classList.remove('showContent');
	setTimeout(() => {
		document.getElementById('menuMobile').classList.remove('openMobileMenu');
	}, 200);
});
