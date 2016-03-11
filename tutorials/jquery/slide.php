<h4>JQuery Slide</h4>
<button id="btn_slide_down">Slide Down</button> 
<button id="btn_slide_up">Slide Up</button> 
<button id="btn_slide_toggle">SlideToggleUp</button>

<div id='fade_demo'>
	Fade Demo
</div>



<script>
	$("document").ready(function(){
		var btnCSS = { padding : "0.5em",
					   fontSize: "2em",
					   borderRadius: "0.3em"};
					   
		var divCSS = { border : "10px solid orange",
					   backgroundColor : "rgba(0, 0, 220, 0.3)",
					   "font-size" : "2em",
					   padding : "2em",
					   width : "200px",
					   height : "200px",
					   marginTop : "1em"};
	
		$("button[id^='btn_slide_']").css(btnCSS);
		$("[id='fade_demo']").css(divCSS);
		
		$("[id$='up']").click(function(){
			$("#fade_demo").slideUp(2000, function(){
				//alert("Hallo ik ben weg!!");
				console.log($(this).text());
				//$(this).css("visibility", "hidden").css("display", "block");
				if ( $("[id$='toggle']").text() == "SlideToggleDown")
				{
					$("[id$='toggle']").text("SlideToggleUp")
				}
				else
				{
					$("[id$='toggle']").text("SlideToggleDown")
				}
			});
		});
		
		$("[id$='down']").click(function(){
			$("#fade_demo").slideDown(2000, function(){
				if ( $("[id$='toggle']").text() == "SlideToggleDown")
				{
					$("[id$='toggle']").text("SlideToggleUp")
				}
				else
				{
					$("[id$='toggle']").text("SlideToggleUp")
				}
			});			
		});
		
		$("[id$='toggle']").click(function(){
			$("#fade_demo").slideToggle(2000, function(){
				if ( $("[id$='toggle']").text() == "SlideToggleUp")
				{
					$("[id$='toggle']").text("SlideToggleDown")
				}
				else
				{
					$("[id$='toggle']").text("SlideToggleUp")
				}
			});			
		});
	});
</script>