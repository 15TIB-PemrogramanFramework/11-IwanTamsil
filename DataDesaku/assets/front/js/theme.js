;( function( $ ) {
	
	"use strict";
	var CHEF = window.CHEF || {};
	
	/* ---------- INIT MAIN NAVIG ---------- */
	CHEF.initMainMenu = function() {
		$( '#drop-down-left' ).dropdown_menu( {
			open_delay : 50,
			close_delay : 100
		} );
		// handle main menu items tagline
		if( $( '#drop-down-left' ).length ) {
			jQuery( '#drop-down-left > li > a' ).each( function() {
				var title_tag = jQuery( this ).attr( 'title' );
				if( title_tag != '' && title_tag != 'undefined' ) {
					var label = jQuery( this ).text();
					var tag = '<span class="k-item-desc">' + title_tag + '</span>';
					jQuery( this ).html( label + tag );
				}
			} );
		}
	}
	/* ---------- end INIT MAIN NAVIG --------- */
	
	/* ---------- handle navigation for smaller devices */
	CHEF.mobileMenuClone = '';
	if( $( 'nav#k-menu' ).length ) CHEF.mobileMenuClone = $( 'nav#k-menu' ).clone().attr( 'id', 'navigation-mobile' );
	CHEF.mobileNav = function() {
		CHEF.mobileMenuClone.insertAfter( 'nav#k-menu' );
		if( $( 'nav#navigation-mobile' ).length ) {
			$( 'nav#navigation-mobile' ).removeClass( 'k-main-navig' );
			$( 'nav#navigation-mobile > ul' ).removeAttr( 'id' ).removeClass( 'k-dropdown-menu' ).addClass( 'list-unstyled' );
		}
	}
	CHEF.listenerMenu = function() {
		$( '#mobile-nav-switch' ).on( 'click', function(e) {
			$( this ).toggleClass( 'open' );
			$( 'nav#navigation-mobile' ).stop().slideToggle( 'fast' );
			e.preventDefault();
		} );
	}
	/* ---------- end handle navigation for smaller devices */
	
	/* ---------- handle top-search toggle ---------- */
	CHEF.topSearchToggle = function() {
		$( '#bt-toggle-search' ).on( 'click', function(e) {
			$( this ).toggleClass( 'opened' );
			$( '#top-searchform' ).stop().slideToggle( 150, '', function() { $( '#sitesearch' ).focus(); } );
			e.preventDefault();
		} );
	}
	CHEF.chckNavigOpened = function() {
		var is_small_res = ( $( '.visible-xs' ).css( 'display' ) === 'block' ) ? true : false;
		var is_mobile_nav_visible = ( $( 'nav#navigation-mobile' ).css( 'display' ) === 'block' ) ? true : false;
		if( !is_small_res && is_mobile_nav_visible ) {
			$( 'nav#navigation-mobile' ).css( 'display', 'none' );
		}
	}
	/* ---------- end handle top-search toggle ---------- */
	
	/* ---------- Google Maps ---------- */
	CHEF.googleMaps = function(){
		if( $( '.map' ).length ) {
	
			$( '.map' ).each( function( i, e ) {
	
				var $gmap = $( e );
				var $gmap_title = $gmap.attr( 'data-gmaptitle' );
				var $gmap_id = $gmap.attr( 'id' );
				var $gmap_lat = $gmap.attr( 'data-gmaplat' );
				var $gmap_lng = $gmap.attr( 'data-gmaplon' );
				var $gmap_zoom = parseInt( $gmap.attr( 'data-gmapzoom' ) );
				var $gmap_icon = $gmap.attr( 'data-gmapmarker' );
				
				var $c_name = $gmap.attr( 'data-cname' );
				var $c_address = $gmap.attr( 'data-caddress' );
				var $c_city = $gmap.attr( 'data-ccity' );
				var $c_state = ( $gmap.attr( 'data-cstate' ) != '' ) ? ', ' + $gmap.attr( 'data-cstate' ) + ' ' : '';
				var $c_zip = $gmap.attr( 'data-czip' );
				var $c_country = $gmap.attr( 'data-ccountry' );
				
				var contentString;
				if( $c_name == '' && $c_address == '' && $c_city == '' && $c_state == '' && $c_zip == '' && $c_country == '' ) contentString = '';
				else contentString = '<div class="map-info-win"><strong>' + $c_name + '</strong><br />' + $c_address + '<br />' + $c_city + $c_state + $c_zip + '<br />' + $c_country + '</div>';
				
				var latlng = new google.maps.LatLng( $gmap_lat, $gmap_lng );			
				var options = { 
					scrollwheel: false,
					draggable: true, 
					zoomControl: true,
					disableDoubleClickZoom: true,
					disableDefaultUI: true,
					zoom: $gmap_zoom,
					center: latlng,
					mapTypeId: google.maps.MapTypeId.ROADMAP
				};
				
				var styles = [ 
							  {
								featureType: "all",
								stylers: [
								  { saturation: -80 }
								]
							  },{
								featureType: "road.arterial",
								elementType: "geometry",
								stylers: [
								  { hue: "#82a536" },
								  { saturation: 40 }
								]
							  },{
								featureType: "poi.business",
								elementType: "labels",
								stylers: [
								  { visibility: "off" }
								]
							  }
							];
				
				var styledMap = new google.maps.StyledMapType( styles,{ name: "BPS Theme Map" } );
				var map = new google.maps.Map( document.getElementById( $gmap_id ), options );
				var m_icon = ( $gmap_icon != '' ) ? $gmap_icon : '';
			
				var marker = new google.maps.Marker( {
					position: latlng,
					map: map,
					icon: m_icon,
					title: $gmap_title
				} );
				
				map.mapTypes.set( 'map_style', styledMap );
				map.setMapTypeId( 'map_style' );
				
				if( contentString != '' ) {
					var infowindow = new google.maps.InfoWindow( {
						content: contentString
					} );
					
					infowindow.open( map, marker ); // show info by default
					
					google.maps.event.addListener( marker, 'click', function() {
						infowindow.open( map, marker );
					} );
				}
	
			} );
		}	
	}
	/* ---------- end Google Maps ---------- */
	
	/* ---------- Fancybox ---------- */
	CHEF.fancyBoxer = function() {
		if( $( '.fancybox' ).length || $( '.fancybox-media' ).length ) {
			
			$( '.fancybox' ).fancybox( {				
				padding : 0,
				helpers : {
					title : { type: 'inside' }
				}
			} );
				
			$( '.fancybox-media' ).fancybox( {
				padding : 0,
				openEffect  : 'none',
				closeEffect : 'none',
				helpers : {
					media : {}
				}
			} );

		}
	}
	/* ---------- end Fancybox ---------- */
	
	/* ---------- responsive videos ---------- */
	CHEF.responsiveVideos = function() {
		if( $( '.video-container' ).length ) {
			$( '.video-container' ).fitVids( {
				customSelector: "iframe[src^='http://blip.tv'], iframe[src^='https://w.soundcloud.com']" 
			} );
			$( '.video-container' ).css( 'display', 'block' );
		}
	}
	/* ---------- end responsive videos ---------- */
	
	/* ---------- audio player ---------- */
	CHEF.responsiveAudios = function() {
		if( $( '.audio-container' ).length ) {
			$( 'audio' ).audioPlayer( {
				classPrefix: 'audioplayer',
				strPlay: 'Play',
				strPause: 'Pause',
				strVolume: 'Volume'
			} );
		}
	}
	/* ---------- end audio player ---------- */
	
	/* ---------- easy pie charts ---------- */
	CHEF.pieChartz = function() {
		if( $( '.chart' ).length ) {
			jQuery( '.chart' ).each( function() {
				var p_color = $( this ).data( 'color' );
				var p_width = $( this ).data( 'width' );
				var p_line  = $( this ).data( 'line' );
				$( this ).easyPieChart( {
					barColor: p_color,
					lineWidth: p_line,
					lineCap: "square",
					size: p_width,
					scaleColor: false,
					animate: 1000,
					onStep: function( value ) {
						this.$el.find( 'span' ).text( ~~value );
					}
				} );
			} );
		}
	}
	/* ---------- end easy pie charts ---------- */
	
	/* ---------- IE patches ---------- */
	CHEF.IEpatches = function() {
		if( navigator.userAgent.match( /IEMobile\/10\.0/ ) ) {
			var msViewportStyle = document.createElement( 'style' );
			msViewportStyle.appendChild( document.createTextNode( '@-ms-viewport{ width: auto!important; }' ) );
			document.querySelector( 'head' ).appendChild( msViewportStyle );
		}
	}
	/* ---------- end IE patches ---------- */

	
	// events
	$( document ).ready( function() {
		CHEF.initMainMenu(); // init main menu
		CHEF.mobileNav(); // create mobile nav menu
		CHEF.listenerMenu(); // toggle mobile nav
		CHEF.IEpatches(); // set of patches relating to IE
		CHEF.topSearchToggle(); // toggle top-search
		CHEF.googleMaps(); // Google Maps
		CHEF.fancyBoxer(); // fancybox
		CHEF.responsiveVideos(); // fitVids
		CHEF.responsiveAudios(); // audio player
		CHEF.pieChartz(); // easy pie charts
	} );
	
	$( window ).resize( function() {
		CHEF.chckNavigOpened(); // check if mobile nav is opened while the screen res is sufficient
	} );
	
} )( jQuery );