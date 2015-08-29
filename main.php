

   <html>
 <head>
  <title>Prueba de PHP</title>
 </head>
 <body>
 <?php 
    include_once "clasePadre.php";  
    include_once "claseHija.php";  
      
	 $persona1 = new Persona("JOSE","PERALTA",37834655);
      $empleado1 = new Empleado("JUAN","RAMIREZ",356664421);
        
      $persona1->ToString();
       
      $Empleado->Tostring();
      
 ?>
 </body>
</html>