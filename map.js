function map() {

	jQuery(".constituency-circles").hover(function(){

	 	//Find constituency with correct id
		var thisConstituency = "#" + jQuery(this).attr('id');

		//Find position of thisConstituency
		var thisConstituencyBottom = parseInt(jQuery(thisConstituency).css("bottom").replace(/[^-\d\.]/g, ''));
		var thisConstituencyRight = parseInt(jQuery(thisConstituency).css("right").replace(/[^-\d\.]/g, ''));

		//Define thisConstituencyText variable
		var thisConstituencyText = thisConstituency + "-text";

		//Define thisConstituencyText position
		var thisConstituencyTextBottom = thisConstituencyBottom + 40 + "px";
		var thisConstituencyTextRight = thisConstituencyRight + 20 + "px";

		//Add CSS to thisConstituency text so that it displays just above the circle
		jQuery(thisConstituencyText).css("bottom", thisConstituencyTextBottom);
		jQuery(thisConstituencyText).css("right", thisConstituencyTextRight);

		//Show constituency text for constituency that's been clicked on
		jQuery(thisConstituencyText).show();	
		}, function () {
			//Make array of all constituencies
			var allConstituencies = []
			jQuery('.constituency-circles').each(function(){
			 	allConstituencies.push( "#" + jQuery(this).attr('id') );
			});
			//Hide all constituency texts
			jQuery(allConstituencies).each(function(){
				jQuery(this + "-text").hide();
			});

		}
	);
}