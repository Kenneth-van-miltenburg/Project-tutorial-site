<h3>Het invoegen van een record in de database met Ajax (Create)</h3>

<select id='selct_userrole'>

</select>

<script>
    var xmlhtp = new XMLHttpRequest();
    
    xmlhtp.onreadystatechange = function()
    {
        if (xmlhtp.readyState == 4 && xmlhtp.status = 200)
        {
            alert(xmlhtp.responseText);
        }
    }

    
    xmlhtp.open("post", "http://localhost/2015-2016/inlogregistratie-tutorialsite/tutorials/json/json_data_update.php" , true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhtp.send("userrole=test");


</script>