/**
 * Module
 */
jQuery( function( $ ) {

    AppSmaller.Module = ( function() {
        var settings = {
            selector: {}
        }

        var state = {}

        var init = function() {
            Debug.log( 'AppSmaller.Module.init()' );

            bindEventHandlers();
        }

        var bindEventHandlers = function() {

        }

        return {
            init: function() { init(); }
        }
    } )();

    $( document ).ready( function() {
        AppSmaller.Module.init();
    } );

} );
