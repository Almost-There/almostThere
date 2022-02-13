$(document).ready(function(){

var $bubbles = $('.bubbles');
function bubbles() {
  
// Settings
	var
			min_bubble_count =30,		// min bubbliage
			max_bubble_count = 110,		// max bubbliage
			min_bubble_size = 20,		// smallest bubble diameter (px)
			max_bubble_size = 80;		// largest bubble diameter (px)

	// Calculate a random number of bubbles based on our min/max
		var bubbleCount = min_bubble_count + Math.floor(Math.random() * (max_bubble_count + 1));
	  
	// Create the bubbles
		for (var i = 0; i < bubbleCount; i++) { $bubbles.append('<div class="bubble-outer"><div class="bubble"></div></div>'); }
	  
	// Randomize the various bubble elements
	$bubbles.find('.bubble-outer').each(function(){    
		// random the bubble positions (0 - 100%)
		var pos_rand = Math.floor(Math.random() * 101);
		// random their size
		var size_rand = min_bubble_size + Math.floor(Math.random() * (max_bubble_size + 1));
		// random the time they start rising (0-15s)
		var delay_rand = Math.floor(Math.random() * 16);
		// random their speed (3-8s)
		var speed_rand = 3 + Math.floor(Math.random() * 9);
		// cache the this selector
		var $this = $(this);
		// apply the new styles
	$this.css({
			'left' : pos_rand + '%',
			'-webkit-animation-duration' : speed_rand + 's',
			'-moz-animation-duration' : speed_rand + 's',
			'-ms-animation-duration' : speed_rand + 's',
			'animation-duration' : speed_rand + 's',
			'-webkit-animation-delay' : delay_rand + 's',
			'-moz-animation-delay' : delay_rand + 's',
			'-ms-animation-delay' : delay_rand + 's',
			'animation-delay' : delay_rand + 's'
	});
		$this.children('.bubble').css({ 'width' : size_rand + 'px', 'height' : size_rand + 'px' });
	}); 
}

$('.bubble-toggle').click(function(){
	if($bubbles.is(':empty')) {
		bubbles();
		$bubbles.show();
	$(this).text('Bubbles Off'); }
	else {
		$bubbles.fadeOut(function(){
		$(this).empty();
    });
    $(this).text('Bubbles On');
  }
  
  return false;
});
bubbles();})