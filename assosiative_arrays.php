<html>

   <head>
         <title> assosiative arrays </title> 
</head>

<body>

  <?php 
  
   $student =array("first_name" => "Kamal", "last_name" => "bandara", "age" =>25);

   echo $student["first_name"];
  
  
  ?>

  <br>

  <?php 
  
  echo $student["first_name"] . " " . $student["last_name"];
  
  
  ?>

  <br>

  <?php

    $student ["age"] = 29;

    echo $student["age"];



  ?>



  <br>

  <?php 
  
  print_r ($student) ;
  
  ?>


</body>


</html>