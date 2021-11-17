<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


//create the HTMl markup for the below code.


   <?php
   
   
   $people = array("theo", "adam", "sarah", "beth");    
   $stranger = true;

   if (is_numeric($_POST["name"])){
       echo "<p id='result'>Please, enter a valid name.</p>";
       }else {
       if ($_POST["name"]){
           
           $name = ($_POST["name"]);

           for ($i = 0; $i < sizeof($people); $i++){
               if ($people[$i] == $name){
                   $stranger = false;
                   break;
               }else $stranger = true;
           }
           if ($stranger){        
               echo "<p id='result'>I don't know you, ".$name.".</p>";
           }else {
               echo "<p id='result'>Hello ".$name.", welcome back.</p>" ;
           }
       
           }else {
               echo "<p id='result'>.Please, enter a name.</p>";
           }
       }
   ?>
</body>
</html>