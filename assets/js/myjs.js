$(document).ready(function() {
	'use strict';

	function errore(string, e) {
      window.alert(string);
      e.preventDefault(e);
    }
	
	$('form').submit(function(e) {
		$('form input[type=number]').each(function() {
			if ( $(this).val() < 0 ) {
				errore("Inserisci valori maggiori di 0", e);
				return false;
			}			
		})
	})

	$('#second').submit(function(e) {
		$('#second input[type=text]').each(function() {
			var str = $(this).val();
			//console.log(str);
			for (var i = 0, len = str.length; i < len; i++) {
  				if ( str[i] != '1' && str[i] != '0' ) {
					errore("Inserire solo 1 e 0", e);
					return false;
  				}
			}			
		})
	})

});