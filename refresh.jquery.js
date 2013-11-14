/* Auto Page refresh script  */
$( "body").fadeOut( 
		function(){
			location.reload(true);
			$( document).ready( function(){$(body).fadeIn();}); 
		});