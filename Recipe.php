<?php   
   $i = $_GET['i'];
   $r = $_GET['r'];
   //Call the Recipe Puppy API for the recipes and Print out the final JSON object
   $recipes = file_get_contents("http://www.recipepuppy.com/api/?i=".$i."&q=".$r."&p=2");

   echo json_encode(json_decode($recipes));
?>