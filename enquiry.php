<?php
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$tel = $_REQUEST['phno'];
$msg = $_REQUEST['msg'];


mail("$email","சக்தி ஜோதிட நிலையம்","உங்களின் சந்தேகம் ஏற்றுக்கொள்ளபபட்டது. நன்றி","<sivavignesh2902@gmail.com>");
mail("sivavignesh2902@gmail.com","From:$name","$msg");
echo("Thanks for the response...");
echo("<script> alert('You want to go to home page');</script><a href='index.html'>Go to home page</a>");



?>