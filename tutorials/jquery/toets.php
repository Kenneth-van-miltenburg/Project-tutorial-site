<h4>jQuery Toets</h4>
<br>
<p id="pTag">Amsterdam, Parijs, Berlijn, Londen, Rome, Brussel, Oslo en Madrit.</p>
<br>
<div>
    <ul>
         <li>Amsterdam is de hoofdstad van Nederland</li>
         <li>Parijs is de hoofdstad van Frankrijk</li>
         <li>Berlijn is de hoofdstad van Duitseland</li>
         <li>Londen is de hoofdstad van Engeland</li>
         <li>Rome is de hoofdstad van Italie</li>
         <li>Brussel is de hoofdstad van Belgie</li>
         <li>Oslo is de hoofdstad van Noorwegen</li>
         <li>Madrit is de hoofdstad van Spanje</li>
    </ul>
</div>

<button id="hi" class="button">Druk op deze knop!</button>

<script>
    $("#hi").click(function(){
        //alert("hallo");
        $("html").find("p").css({ backgroundColor : "Grey", 
                                  fontSize : "2em"});
        
        $("li:even").css({ backgroundColor : "blue" });
        $("li:odd").css({ backgroundColor : "yellow" });
        $("li:first").css({ border : "2px solid green" });
        $("li:last").css({ border : "4px solid pink" });
        $("li").css({ fontSize : "1.5em" });
        $("li:eq(3)").hover(function(){
            $(this).css({fontSize : "3em"});
        }, function(){
            $(this).css({fontSize : "1.5em"});
        });
    
    });
</script>