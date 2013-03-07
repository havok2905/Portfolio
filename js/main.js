$(window).ready(function()
{
	handleSound();
	handleSlider();
});

function handleSound()
{
	$(".nav-link").hover(
		function()
		{
			$("audio").get(0).load();
			$("audio").get(0).play();
		},
		function()
		{
			$("audio").get(0).pause();
		}
	);
}

function handleSlider()
{
	var total_width = 0; 
	var count = 0;

	$("#stage-images li img").bind("load", function()
	{
		$(this).css("left", total_width + "px");
		total_width -= this.width;
		console.log(total_width);
	});

	setInterval(function()
	{
		var width = this.width;

		$("#stage-images li img").each(function(index)
		{
			$(this).animate({left:'+=1024px'}, 1000);
		});

		switch(count % 5)
		{
			case 0:
				var image = $("#stage-images li img").get(0)
				console.log(image);
				$(image).css("left","-5120px");
				break;
			case 1:
				var image = $("#stage-images li img").get(1)
				$(image).css("left","-5120px");
				break;
			case 2:
				var image = $("#stage-images li img").get(2)
				$(image).css("left","-5120px"); 
				break;
			case 3:
				var image = $("#stage-images li img").get(3)
				$(image).css("left","-5120px");
				break;
			case 4:
				var image = $("#stage-images li img").get(4)
				$(image).css("left","-5120px");
				break;
		}

		count ++;
	}, 5000);

}