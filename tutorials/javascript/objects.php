<h1>In JavaScript, objects are king. If you understand objects, you understand JavaScript.</h1>
<h6><a href="http://www.w3schools.com/js/js_object_definition.asp">Klik hier w3schools</a></h6>

<p id="p_object"></p>



<script>
	var persoon = { voornaam 				: "Kenneth",
					tussenvoegsel 			: "van",
					achternaam 				: "Miltenburg",
					haarkleur				: "Bruin",
					getrouwd				: false,
					leeftijd				: 86,
					trouwdatum				: 08-01-2016,
					toonPersoonsgegevens	: function()
												{
													return "voornaam: " + this.voornaam + "<br>" + 
															"tussenvoegsel: " + this.tussenvoegsel + "<br>" + 
															"achternaam: " + this.achternaam + "<br>" +
															"haarkleur: " + this.haarkleur + "<br>" +
															"lievelingskleuren: " + this.lievelingskleuren[1];
												},
					lievelingskleuren		: [ "geel", "oranje", "rood" ]
				  };
				  
	persoon.emailadres = "k.v.milgtenburg@gmail.com";
	
	var pTag = document.getElementById("p_object");
	
	
	pTag.innerHTML = persoon.toonPersoonsgegevens() + "<br>email: " + persoon.emailadres;
	
	function persoon1(voornaam, tussenvoegsel, achternaam)
	{
		this.voornaam = voornaam;
		this.tussenvoegsel = tussenvoegsel;
		this.achternaam = achternaam;
	}
	
	
	var test = new persoon1("Fred", "de", "Beuker");
	//alert(test.voornaam);
	
	function Rapport(llnr, name, webdevelopment, gamedevelopment, rekenen, nederlands)
	{
		this.llnr = llnr;
		this.name = name
		this.webdevelopment = webdevelopment;
		this.gamedevelopment = gamedevelopment;
		this.rekenen = rekenen;
		this.nederlands = nederlands;
		this.gemiddelde = function()
					{
						var gemiddelde = (this.webdevelopment + this.gamedevelopment + this.rekenen + this.nederlands)/4;
						return gemiddelde.toFixed(2);
					}
	}
	
	var rapportHarry = new Rapport(308215, "Harry",9.2, 7.2, 3.4, 9.4);
	alert(rapportHarry.gemiddelde());
	
	
	
	
	
	
	
	
	
	
</script>