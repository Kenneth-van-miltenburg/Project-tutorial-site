<h4>Object prototype</h4>
<p>Geef een review:</p>
<p><textarea id="reviewTxt">
</textarea></p>
<p id="showReviews"></p>
<button id="btnReview">Laat reviews zien</button>

<script>
	var cssTxtArea = { width : "200px",
					   height: "100px" };
	
	$("#reviewTxt").css(cssTxtArea);
	// De constructor van een javascript prototype
	function game(gameName, gameGenre, price)
	{
		// Properties
		this.gameName = gameName;
		this.gameGenre = gameGenre;
		this.price = price;
		this.reviews = ["Heel slecht", "Geweldig"];
		// Maak in het prototype een method  (addReview)die drie reviews kan wegschrijven naar een array (reviews)
		
	}
	
	var eersteGame = new game("KingsValley", "Platformer game", 0.85);
	var tweedeGame = new game("Pyramid Panic", "Labyrinth game", 1.50);
	var derdeGame = new game("Lara Croft", "adventure game", 45.90);
	
	game.prototype.rating = "five stars";
	
	game.prototype.showInfo = function(newPrice){
		this.price = newPrice;
		return "De naam van mijn favoriete game is " +  this.gameName + " Het is een " + this.gameGenre +
			   " De prijs bedraagt " + this.price + " euro. Hij is maar liefst bekroond met " + this.rating;
	};
	
	// showInfoGame
	// De naam van mijn favoriete game is <gameName>. Het is een <gameGenre>
	// De prijs bedraagt <price> euro. Hij is maar liefst bekroond met <rating>
	
	console.log("De naam van de game: " + eersteGame.gameName + "\n" +
				"De rating van de game: " + eersteGame.rating);
				
	console.log("De naam van de game: " + tweedeGame.gameName + "\n" +
				"De rating van de game: " + tweedeGame.rating);
				
	console.log(eersteGame.showInfo(58.90));
	
	// Maak een handle voor de button
	var btnRev = document.getElementById("btnReview");
	
	// Voeg een event toe aan de button
	btnRev.onclick = function(){
		
		// Verander de tekst op de knop
		if ( btnRev.innerHTML == "Laat reviews zien")
		{
			btnRev.innerHTML = "Voeg review toe";
		}
		
		// Haal de tekst in de textarea op
		var txtarea = document.getElementById("reviewTxt").value;
		
		// Als de tekstarea geen tekst bevat, doe niets...
		if ( txtarea != "")
		{
			document.getElementById("reviewTxt").value = "";
			eersteGame.reviews.unshift(txtarea);
		}
		
		// Lees het array reviews uit het object uit en stop de waarden in een string. 
		// Beeld deze af in een p-tag op de pagina
		var txt = "";
		for (var i=0; i<eersteGame.reviews.length; i++)
		{
			txt += eersteGame.reviews[i] + "<br>";
		}
		document.getElementById("showReviews").innerHTML = txt;
		
	};

</script>