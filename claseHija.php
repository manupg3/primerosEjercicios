
   <html>
 <head>
  <title>Prueba de PHP</title>
 </head>
 <body>
 <?php 
      include_once "clasePadre.php";
	  
 
      class Empleado extends Persona{
		  private $_legajo;
		  private $_sueldo;
		  
        
           function __construct($nombre,$apellido,$dni,$_legajo,$_sueldo){
			   parent::__construct($nombre,$apellido,$dni);
			   $this->_legajo=$_legajo;
			   $this->_sueldo=$_sueldo;  			  
		   }		   
		  
		  function Tostring(){
			//  parent::Tostring();
			  echo "<h1>".parent::Tostring()."LEGAJO:".$this->_legajo."<br>&nbsp"."SUELDO: ".$this->_sueldo."</h1>";
			  
		  }
	  }
 
 
 
 ?>
 </body>
</html>