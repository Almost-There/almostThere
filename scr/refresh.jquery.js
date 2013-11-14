/* Auto Page refresh script  */
$(document).ready(function(){
$( "body").fadeOut( 
		function(){
			location.reload(true);
			$( document).ready( function(){
				$(body).fadeIn();
			}); 
		});
};