<?php
	session_start();
	header("Content-type: text/css; charset: utf-8");
?>

*
{
	margin:0px;
	padding:0px;
}

body
{
	font-family:Verdana, Arial;
	font-size:14px;
}


#container
{
	border:0px solid green;
	width:80%;
	//margin-top:300px;
	//margin-left:100px;
	margin:20px auto;
	background-color: RGB(255,255,255);
}

#banner, #footer
{
	font-size:25px;
	background-color:RGB(255,127,0);
	color:white;
	text-align:center;
	padding:10px;
	font-weight:bold;
	
}

#banner
{
	border:0px solid green;
	border-top-left-radius:12px;
	border-top-right-radius:12px;
}

#content
{
	background-color: RGB(245,245,245);
	border:1px solid RGB(138, 192, 7);
	color:RGB(24, 24, 24);
	padding:5px;
	margin:15px 0px;
}

#footer
{
	border:0px solid yellow;
	border-bottom-left-radius:12px;
	border-bottom-right-radius:12px;
}

#link
{
	border:1px solid RGBA(138, 192, 7, 1);
	padding:6px;
	border-bottom-left-radius:12px;
	border-bottom-right-radius:12px;
	text-align:center;
}



<?php
 if (isset($_SESSION["id"]))
 {
	echo "#user
		  {
			border:1px solid RGBA(138, 192, 7, 1);
			padding:8px;
			margin-top:15px;
			border-bottom-left-radius:0px;
			border-bottom-right-radius:0px;
			border-top-left-radius:12px;
			border-top-right-radius:12px;
			text-align:left;
			background-color:RGBA(245,245,245, 1);
			color: grey
		  }
		  
		  #userrole_link
		  {
			border:1px solid RGBA(138, 192, 7, 1);
			padding:6px;
			border-bottom-left-radius:12px;
			border-bottom-right-radius:12px;
			text-align:center;
			background-color: rgba(101, 193, 205, 1);
			color: white;
		  }";
 }
?>

#user_img
{
	float:right;
}


#register, #login
{
	border:0px solid yellow;
	width:360px;
	margin:0px auto;
}


#register table, #register td, #login table, #login td
{
	border: 0px solid black;
	border-collapse: collapse;
	padding:5px;
}

#register input, #login input
{
	padding:5px;
	width:200px;
}

#register input[type=submit], #login input[type=submit]
{
	width:214px;
}

a
{
	text-decoration:none;
	color:orange;
	//font-weight: bold;
}

#userrole_link a
{
	text-decoration:none;
	color:rgba(237, 245, 245, 1);
}

a:hover
{
	//font-size:13.6px;
}

/*
{
	background-color: rgba(240,237, 245,1);
	border: 0px solid black;
}
*/



<br> div
{
	margin: 0em 1em 1em 1em;
	width: 200px;
	height: 100px;
	color: white;
	font-size: 1.2em;
	font-weight: bold;
	text-align: center;
	border: 1px solid black;
}

#clearBoth
{
	background-color: rgba(200, 200, 200, 1);
	height:20px;
	width:20%;
	clear:both;
	float:left;
}

#div_1
{	
	background-color: yellow;
	float:left;
	width:20%;
	height:600px;
}

#div_2
{	
	background-color: green;
	float:left;
	width:72%;
	height:400px;
}

#div_3
{	
	background-color: blue;
	float:left;
	clear:left;
	width:50%;
}

#div_4
{	
	background-color: pink;
	float: left;
	width:15%;
	
}

#div_5
{	
	background-color: purple;
	float:left;
	width:23%;

}

#div_6
{	
	background-color: green;
	float:left;
	clear:left;
}

#div_7
{	
	background-color: cyan;
	float: left;
}

#div_8
{	
	background-color: beige;
	float:left;
}

#div_9
{	
	background-color: orange;
	float:left;
}

#div_10
{	
	background-color: yellow;
	float: left;
}

#div_11
{	
	background-color: green;
	float: left;
}

#div_12
{	
	background-color: blue;
	float: left;
}

#div_13
{	
	background-color: pink;
	float:left;
}

#div_14
{	
	background-color: purple;
	float:left;

}

#div_15
{	
	background-color: green;
	float:left;
}

#div_16
{	
	background-color: cyan;
	float: left;
}

#div_17
{	
	background-color: beige;
	float:left;
}

#div_18
{	
	background-color: orange;
	float:left;
}

/*
#end
{
	clear:both;
}
*/

#end
{
	overflow:hidden;
}

#dev-home-container
{
	border: 0px solid black;
	overflow:hidden;
}


#dev-home-container nav
{
	background-color:rgba(200, 200, 200, 1);
	border-radius:6px;
	padding:2%;
	margin: 0.5%;
	padding-bottom: 1000em;
	margin-bottom: -998em;
}

#dev-home-container nav
{
	float:left;
	width:20%;
	color:black;
	
}

#dev-home-container section
{
	float:right;
	width: 70%;
	border: 0px solid red;
	min-height: 300px;
}

#dev-home-container a
{
	color:grey;
	//border:1px solid black;
	display:block;
	text-align:right;
	padding:0.3em;
}


#btn_1, #btn_2, .btn_3, .btn_4, .btn_5
{
	padding: 10px;
	font-size: 1.2em;
	font-weight: bold;
	color: rgba(10,10,10,0.5);
	width: 200px;
	float: left;
}

.btn_3
{
	clear: left;
}

.btn_5
{	
	width: 100px;
}

#nr
{
	background-color: rgb(225, 225,225);
	width: 60px;
	float:left;
}


[id^="btn_animate"]
{
	padding: 0.5em;
	font-size: 2em;
	color: rgba(0,0,0, 0.6);
	border-radius: 0.3em;
	margin-top: 2em;
	//box-shadow: 10px 10px 5px rgba(120,120,120, 0.8);
}

#table
{
	border-collapse:collapse;
}

#table th, #table td
{
	border: 2px solid grey;
	padding: 1em;
}

.even
{
	background-color: rgb(167, 224, 130);
	color: white;	
}

.odd
{
	background-color: rgb(101, 193, 205);
	color: white;
}

.tblHeader
{
	background-color: rgb(113, 116, 117);
	color: white;
}

.button
{
	width: 200px;
	color: white;
	margin:0.5em;
	border-radius:15px;
	padding:0.5em;
	font-size:1.2em;
	outline: 0;
	font-weight: bold;
}

.trHover
{
	background-color: rgb(255, 182, 0);
	color: white;
	font-weight: bold;
	font-size: 1.1em;
}

.trToggle
{
	color: yellow;
	font-weight: bold;
	font-size: 1.3em;
}




.parCSSClass
{
	background-color: rgba(220,200,200,1);
}
