<h4>JQuery Animation</h4>

<div id="animation_demo">
	<img id="imgAnimal" src="./img/trump.png" width="250px">
</div>

<button id="btn_animate">Laat Trump rond gaan!</button>
<button id="btn_animate_stop">Stop Trump!</button>

<script>
	$("document").ready(function(){
		var divCSS = { border			:	"0px solid black",
					   backgroundColor	:	"white",
					   border			:	"0px solid orange",
					   fontSize			:	"1.4em",
					   padding			:	"0.5em",
					   width			:	"250px",
					   height			:	"150px",
					   color			:	"white",
					   position			:	"relative",
					   top				:	"10px",
					   left				:	"0%"};
		var animationTime = 500;
		
		var animationLeft = {left : "500px"};
		
		var animationDown = {top : "250px"};
		
		var animationRight = {left : "0px"};
		
		var animationUp = { top : "0px"};
		
		$("#animation_demo").css(divCSS);
		
		$("[id^='btn_']").click(function(){
		$("#animation_demo")
			.animate(animationLeft,
					 3 * animationTime, 
					 function(){ 
						$(this).animate(animationDown,
							animationTime, function() {
								  $(this).animate(animationRight, 
										3 * animationTime, function(){
											  $(this).animate(animationUp, animationTime, function(){
                                                                                                    });
																			
											  });
								  });									 
					 });
	});
		
	
	$("#btn_animate_stop").click(function(){
		$("#animation_demo").stop(true, false);
	});	
	
	var btn_animation_on = { boxShadow : "10 10 10px rgba(120, 120, 120, 0.5)"};
	
	var btn_animation_off = { boxShadow : "0 0 0px rgba(120, 120, 120, 0.5)"};
	
	
	$("[id^='btn_animate']").hover(function(){ 
		//$(this).css("box-shadow", "10px 10px 5px rgba(120,120,120, 0.8)");
		$(this).animate(btn_animation_on, 100);
	}, function(){
		$(this).animate(btn_animation_off, 100);
	});
		
	});
	
	
</script>