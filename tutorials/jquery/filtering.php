<h4>JQuery Filtering</h4>

<ol>
	<li id="rotdag">maandag</li>
	<li>dinsdag</li>
	<li>woensdag</li>
	<li>donderdag</li>
	<li>vrijdag</li>
</ol>

<button id="rmMonday" class="button">Verwijder maandag</button>
<button id="rmFriday" class="button">Verwijder vrijdag</button>
<button id="rmWednesday" class="button">Verwijder woensdag</button>
<button id="rmEverthingButFri" class="button">Verwijder alles behalve vrijdag</button>
<button id="rmID" class="button">Verwijder maandag met ID</button>
<button id="daysOfWeek" class="button">Dagen van de week...</button>
<button id="notWednesday" class="button">Rand om dagen behalve woensdag</button>

<script>
	// 1) verwijder maandag uit de lijst. gebruikt remove() en een jquery filter. Zet dit onder een knop
	// 2) Verwijder vrijdag uit de lijst. Gebruik remove() en een jquery filter.Zet dit onder een knop
	// 3) Verwijder woensdag uit de lijst. Gebruik remove() en een jquery filter.Zet dit onder een knop
	// 4) Verwijder alle dagen behalve vrijdag uit de lijst. Gebruik remove() en een jquery filter.Zet dit onder een knop
	// 5) Verwijder de dag met id rotdag uit de lijst. Gebruik remove() en een jquery filter.Zit dit onder een knop
	$("#rmMonday").click(function(){
		var toRemove = $("li").first();
		if ( toRemove.text() == "maandag")
		{
			toRemove.remove();
		}
		setTimeout(function(){ window.location.reload(); }, 3000);
	});
	
	$("#rmFriday").click(function(){
		var toRemove = $("li").last();
		if ( toRemove.text() == "vrijdag")
		{
			toRemove.remove();
		}
		setTimeout(function(){window.location.reload();}, 3000);
	});
	
	$("#rmWednesday").click(function(){
		var toRemove = $("li").eq(2);
		if ( toRemove.text() == "woensdag")
		{
			toRemove.remove();
		}
		setTimeout(function(){window.location.reload();}, 3000);
	});
	
	$("#rmEverthingButFri").click(function(){
		var toRemove = $("li");
		for ( var i = 0; i < toRemove.length; i++)
		{
			if (toRemove.eq(i).text() == "vrijdag")
			{
				$("li").not(toRemove.eq(i)).remove();
			}
		}
		setTimeout(function(){window.location.reload();}, 3000);
	});
	
	$("#rmID").click(function(){
		$("li").filter("#rotdag").remove();
		setTimeout(function(){window.location.reload();}, 3000);
	});
	
	// 1) Maak een knop die wanneer je er op drukt de tekst op zich krijgt van ieder afzonderlijk listitem
	// 2) Na iedere seconde verschijnt de volgende tekst.
	
		$("#daysOfWeek").click(function(){
		var textSize = 1;
		$("li").each(function(){
			$(this).css({ fontSize : textSize + "em"});
			textSize += 0.5;
			/*
			var test = this
			setTimeout(function()
					   {	
							var day = $(test).text();
							$("#daysOfWeek").text(day);}, 5000);
			
			setTimeout(function(){
				var day = $(this).text();
				$("#daysOfWeek").text(day);
			}, 1000)});
			*/
		});	
	});
	
	$("#notWednesday").click(function(){
			$("li").not($("li").eq(2)).css( { border : "10px solid yellow",
											  margin : "1em" });
		
	});
</script>