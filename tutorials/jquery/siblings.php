<h4>JQuery Siblings</p>
<p>Klik op de button om de siblings van de ul-tag met id="tel" te selecteren</p>
<button id="btn_siblings" class="button">Klik hier</button>

<p>Klik op mij en de letters binnen de listitems worden steeds groter</p>
<button id="btn_enlarge" class="button">Klik hier!</button>

<p>Geef alle p-tags na het tweede p-tage een border met een gele rand, een<br>oranje achtergrond. Gebruik de method nextAll()</p>
<button id="btn_nextall" class="button">Klik hier!</button>

<p>Geef alle p-tags tot en met het voorlaatste p-tage, na het tweede p-tag, een border met een gele rand en een oranje achtergrond met de method nextUntil()</p>
<button id="btn_nextuntil" class="button">Klik hier!</button>

<button id="btn_nextuntil" class="button">Klik hier!</button>

<div>
	<ul id="tel">
		<li>een</li>
		<li>twee</li>
		<li>drie</li>
		<li>vier</li>
		<li>vijf</li>	
	</ul>
	
<hr>

	<ul id="alpha">
		<li>a</li>
		<li>b</li>
		<li>c</li>		
	</ul>
	
	<p>eerste paragraaf</p>
	<p>tweede paragraaf</p>
	<p>derde paragraaf</p>
	<p>vierde paragraaf</p>
	<p>vijfde paragraaf</p>
	<p>zesde paragraaf</p>
</div>




	$("document").ready(function(){
		$("ul").css("list-style-type", "none");
	
		$("#btn_siblings").click(function(){
			$("li").siblings().css({ border 		 : "2px solid grey", 
									 backgroundColor : "orange",
									 width 			 : "150px"});
		});
		
		var liObj = $("#tel li:first");
		var tekstGrootte = parseFloat(liObj.css("font-size"));
		$("#btn_enlarge").click(function(){
			console.log(tekstGrootte);
			tekstGrootte += 20;
			liObj.css("font-size", tekstGrootte + "px");
			liObj = liObj.next();
		});
		
		
		$("#btn_nextall").click(function(){
			$("p:eq(5)").nextAll().css({ border : "2px solid yellow", backgroundColor : "orange"});
		});
		
		$("#btn_nextuntil").click(function(){
			$("p:eq(5)").nextUntil("p:last").css({ border : "2px solid yellow", backgroundColor : "orange"});
		});
			
        var pObj = $("p:last");
		//var tekstGrootte = parseFloat(liObj.css("font-size"));
		$("#btn_prev").click(function(){
			pObj.css({margin : "1em", border : "2px solid grey"});
			pObj = pObj.prev();
		});
		
		setInterval(function(){ 
			pObj.css({margin : "1em", border : "2px solid grey"});
			pObj = pObj.prev();
		}, 100);
		
		
	});
</script>