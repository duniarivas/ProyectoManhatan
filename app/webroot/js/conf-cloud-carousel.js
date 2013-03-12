$(document).ready(function(){
						   
	// This initialises carousels on the container elements specified, in this case, carousel1.
	$("#carousel1").CloudCarousel(		
		{			
			xPos: 350,
			yPos: 120,
			buttonLeft: $("#left-but"),
			buttonRight: $("#right-but"),
			altBox: $("#alt-text"),
			titleBox: $("#title-text"),
			autoRotate: 'right'
		}
	);
});