<h4>Toevoegen van nieuwe tekst aan bestaande tekst</h4>
<br>
<ul>
	<li>Mercedes</li>
	<li>Fiat</li>
	<li>Volkswagen</li>
	<li>Ford</li>
</ul>

<button id="append-prepend">Toevoegen extra tekst</button>
<button id="after">Voeg extra &lt;li&gt; toe</button>
<button id="before">Voeg extra &lt;li&gt; toe aan het begin</button>

<script>
	$(document).ready(function(){
		$("append-prepend").click(function(){
			var auto = $("li").first();
			auto.append(" mijn favoriete automerk");
			auto.prepend("Als ik echt moet kiezen is ");
			var listItems = $("li");
			for ( var i =0; i < listItems.length; i++)
			{
				if ( listItems.eq(i).text() == "Ford")
				{
					listItems.eq(i).append(", is het beste automerk");
				}
			}
		});
        
        $("#after").click(function(){
            var allListItems = $("li");
            var lastListItems = allListItems.last();
            lastListItems.after("<li>Bentley</li>")
        });
        
         $("#before").click(function(){
             $("li").first().before("<li>Ferrari</li>")
        });
		
		
	});
</script>