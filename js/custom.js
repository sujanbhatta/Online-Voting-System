jQuery(document).ready(function(){


	jQuery(".middle-area").backstretch([
		//"images/slider1.jpg",
		
		"images/slider5.jpg",
		"images/slider6.jpg",
		"images/slider7.jpg",
		"images/slider8.jpg",
		"images/slider9.jpg"
		
		// "images/slider5.jpg"

		], {
			duration:5000,
			transition: 'push_left|push_right|cover_up|cover_down|fade',
			transitionDuration:1000

		});
});