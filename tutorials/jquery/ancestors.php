<h4>Ancestors and JQuery</h4>

<div>
	<ul>
		<li>een</li>
		<li>twee</li>
		<li>drie</li>
		<li>vier</li>
		<li>vijf</li>	
	</ul>
</div>

<p>Klik op de button om de parent van de listitems te selecteren</p>
<p>DubbelKlik op de button om de parents van de listitems te selecteren</p>

<button id="btn_parent">Klik hier</button>

<p>Klik op de button hieronder om alle parent tages t/m de content div te voorzien van een groene border van 10px solid</p>
<button id="btn_cssParentsUntil">Klik hier</button>


<script>
	$("document").ready(function(){
		
		
		$("#btn_parent").click(function(){
			$("ul").css("list-style-type", "none");
			
			//Selecteren parent listitems
			$("li").parent().css("border", "5px dashed orange");		
		});
		
		$("#btn_parent").dblclick(function(){
			$("li").parents().css("border", "5px solid pink");		
		});
		
		$("#btn_cssParentsUntil").click(function(){
			$("li").parentsUntil("div#content").css("border", "5px solid grey");
		});
		
		
		
	
	});
</script>