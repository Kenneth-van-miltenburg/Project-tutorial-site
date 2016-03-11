<h4>Verwijderen van tekst uit bestaande tekst</h4>

<ul>
	<li>Mercedes</li>
	<li>Fiat</li>
	<li>Volkswagen</li>
	<li>Ford</li>
</ul>

<button id="remove">Verwijder laatste &lt;li&gt; uit de lijst</button>
<button id="empty">Verwijderd alle &lt;li&gt; uit de lijst</button>


<script>
	$("document").ready(function(){
		$("#remove").click(function(){
			var listItems = $("li");
			if ( listItems.length != 0){
				var lastListItem = listItems.last();
				lastListItem.remove();
            }else{
				alert("Niet meer klikken, geen <li> meer over");
				$(this).text("Klikken heeft geen zin meer!");
            }	
		});
        $("#empty").click(function(){
            $("ul").empty();
            alert("Niet meer klikken, geen <li> meer over");
            $(this).text("Klikken heeft geen zin meer!");
        });
	});
</script>


