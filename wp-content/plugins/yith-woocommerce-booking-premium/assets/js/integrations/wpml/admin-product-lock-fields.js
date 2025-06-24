jQuery( function ( $ ) {
	"use strict";

	$( function () {
		var allowedIds = '#_yith_booking_checkin,#_yith_booking_checkout,#_yith_booking_export_future_ics';

		function getLockImage() {
			return $( '.wcml_lock_img' ).clone().removeClass( 'wcml_lock_img' ).addClass( 'yith-wcbk-wcml-lock-img' ).show()
		}

		function filterAllowed( $elements ) {
			return $elements.filter( ':not(' + allowedIds + ')' )
		}

		function disableFieldsIn( $element ) {
			var toReadOnlyFields         = filterAllowed( $element.find( 'input[type=text], input[type=number], input[type=password], input[type=email], textarea' ) ),
				toDisabledFields         = filterAllowed( $element.find( 'select, input[type=checkbox], input[type=radio], button' ) ),
				toAddDisabledClassFields = filterAllowed( $element.find( '.yith-plugin-fw-onoff-container' ) ),
				toPreventClickFields     = filterAllowed( $element.find( '.yith-wcbk-printer-field__on-off, .yith-wcbk-admin-action-link, yith-plugin-fw__button--trash, yith-plugin-fw__button--add, .yith-wcbk-availability-rules__new-rule, .yith-wcbk-availability-rule__delete-rule,  .yith-wcbk-price-rules__new-rule, .yith-wcbk-price-rules__delete-rule, .yith-plugin-fw__list-table-blank-state__cta' ) );

			toReadOnlyFields.prop( 'readonly', true )
			toDisabledFields.prop( 'disabled', true )
			toAddDisabledClassFields.addClass( 'yith-disabled' )
			toPreventClickFields.addClass( 'yith-disabled' )
				.on( 'click', function ( e ) {
					e.preventDefault();
					e.stopPropagation();
				} )

			return toReadOnlyFields.add( toDisabledFields ).add( toAddDisabledClassFields ).add( toPreventClickFields )
		}

		function disableFieldsAndShowLockIn( $element ) {
			const fields = disableFieldsIn( $element )

			fields.each( function () {
				var container = $( this ).closest( '.yith-wcbk-form-field__container' )
				if ( container.length ) {
					var hasLock = container.find( '.yith-wcbk-wcml-lock-img' )
					if ( ! hasLock.length ) {
						container.append( getLockImage() );
					}
				} else {
					$( this ).after( getLockImage() );
				}
			} );
		}

		$( '.yith-wcbk-product-metabox-options-panel' ).each( function () {
			disableFieldsAndShowLockIn( $( this ) )
		} )
	} )
} );