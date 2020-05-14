/**
 * File skip-link-focus-fix.js.
 *
 * Helps with accessibility for keyboard only users.
 *
 * Learn more: https://git.io/vWdr2
 */
( function() {
	var isWebkit = navigator.userAgent.toLowerCase().indexOf( 'webkit' ) > -1,
	    isOpera  = navigator.userAgent.toLowerCase().indexOf( 'opera' )  > -1,
	    isIe     = navigator.userAgent.toLowerCase().indexOf( 'msie' )   > -1;

	if ( ( isWebkit || isOpera || isIe ) && document.getElementById && window.addEventListener ) {
		window.addEventListener( 'hashchange', function() {
			var id = location.hash.substring( 1 ),
				element;

			if ( ! ( /^[A-z0-9_-]+$/.test( id ) ) ) {
				return;
			}

			element = document.getElementById( id );

			if ( element ) {
				if ( ! ( /^(?:a|select|input|button|textarea)$/i.test( element.tagName ) ) ) {
					element.tabIndex = -1;
				}

				element.focus();
			}
		}, false );
	}
})();



//Navbar Animation
var prevScrollpos = window.pageYOffset;
window.onscroll = function () {
var currentScrollpos = window.pageYOffset;

	if (prevScrollpos > currentScrollpos) {
	//document.getElementsByTagName("nav")[0].style.backgroundColor = 'red';
	} 
	else {
	document.getElementsByTagName("nav")[0].style.backgroundColor = 'rgba(100, 197, 184,1)';
	}

	if(currentScrollpos === 0){
	document.getElementsByTagName("nav")[0].style.backgroundColor = 'rgba(100, 197, 184,0.6)';
	}

	prevScrollpos = currentScrollpos;
};
