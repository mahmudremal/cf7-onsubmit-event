// import { toast } from 'toast-notification-alert';

( function ( $ ) {
	class FutureWordPress_Frontend {
		/**
		 * Constructor
		 */
		constructor() {
			this.ajaxUrl = fwpSiteConfig?.ajaxUrl ?? '';
			this.ajaxNonce = fwpSiteConfig?.ajax_nonce ?? '';
			this.enabled = fwpSiteConfig?.cf7events ?? true;
			this.cf7_action = fwpSiteConfig?.cf7_action ?? '';
			this.gTagId = fwpSiteConfig?.gTagId ?? '';
			this.init();
		}
		init() {
			const thisClass = this;var theInterval, selector, callback, url;
			selector = '.fwp-tabs__navs';
			// theInterval = setInterval( () => {}, 1000 );
			if( thisClass.enabled ) {
				document.querySelectorAll( '.wpcf7-form' ).forEach( ( el, ei ) => {
					// if( el.querySelectorAll( '.wpcf7-response-output' ).length >= 1 ) {
					// 	if( typeof gtag_report_conversion === 'function' ) {url = undefined;gtag_report_conversion( url );}
					// 	else {console.log( 'GTag not Initiated' );}
					// }
					thisClass.hooks( el );
					// el.addEventListener( 'submit', function( e ) {
					// 	if( typeof gtag_report_conversion === 'function' ) {
					// 		console.log( 'Form submitting' );
					// 		url = null;gtag_report_conversion( url );
					// 	}
					// } );
				} );
			}
		}
		/**
		 * Fires on contact form submission,before and after and aon status.
		 * https://contactform7.com/dom-events/
		 * https://stackoverflow.com/questions/27798264/contact-form-7-ajax-callback
		 * @param {*} e 
		 */
		hooks( e = false ) {
			const thisClass = this;
			if( ! e ) {e = document;}
			// wpcf7invalid wpcf7spam wpcf7mailsent wpcf7mailfailed
			// [ 'wpcf7spam', 'wpcf7invalid', 'wpcf7mailfailed' ].forEach( ( hook ) => {
			// 	e.addEventListener( hook, function( event ) {
			// 		console.log( event );
			// 		if( event.message ) {
			// 			toast.show({title: event.message, position: 'bottomright', type: 'alert'});
			// 		}
			// 	}, false );
			// } );
			if( typeof gtag_report_conversion === 'undefined' ) {
				var gtag_report_conversion = function( url ) {
					gtag('event', 'conversion', {
							'send_to': thisClass.gTagId,
							'event_callback': function () {
								if (typeof( url ) != 'undefined') {
									window.location = url;
								}
							}
					});
					return false;
				}
			}
			e.addEventListener( 'wpcf7mailsent', function( event ) {
				gtag_report_conversion( undefined );
				// if( typeof gtag === 'undefined' ) {toast.show({title: 'GTag not Initiated', position: 'bottomright', type: 'alert' });}
				// console.log( event );
				// if( event.message ) {
					// toast.show({title: event.message, position: 'bottomright', type: 'alert'});
				// }
			}, false );
		}
	}
	new FutureWordPress_Frontend();
} )( ( typeof jQuery !== 'undefined' ) ? jQuery : false );
