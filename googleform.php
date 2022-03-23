
<!DOCTYPE html>
<html>
<head>
<title>Create Dynamic form Using JavaScript</title>
<script src="form.js" type="text/javascript"></script>
<link href="form.css" rel="stylesheet" type="text/css">
<style>
    img{
        height:20px;
        width:20px;
    }
</style>
</head>
<body>
<div class="main_content">
<!--
========================================================================================
Header Div.
========================================================================================
-->
<div class="first">

</div>
<!--
======================================================================================
This Div is for the Buttons. When user click on buttons, respective field will appear.
=======================================================================================
-->
<div class="two">
<h4>Frequently Used Form Fields</h4><button onclick="nameFunction()">input box</button><br>
<button onclick="emailFunction()">Email</button><br>
<button onclick="contactFunction()">button</button><br>
<button onclick="textareaFunction()">text area</button><br>
<button onclick="resetElements()">Reset</button><br>
<button onclick="radioElements()">radio button</button><br>
</div>
<!--
========================================================================================
This Div is meant to display final form.
========================================================================================
-->
<div class="three">
<h2>Your Dynamic Form!</h2>
<form action="#" id="mainform" method="get" name="mainform">
<span id="myForm"></span>
<p></p><input type="submit" value="Submit">
</form>
</div>
<!--
========================================================================================
Footer Div.
========================================================================================
-->

</div>
<?php
 //if(array_key_exists())
?>
</body>
</html>


