

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
		  

           function __construct($legago,$sueldo){
			   parent::__construct($nombre,$apellido,$dni);
			   $this->_legajo=$sueldo;
			   $this->_sueldo=$sueldo;  			  
		   }		   
		  
		  function Tostring(){
			  parent::Tostring();
			  echo $this->_legajo."&nbsp".$this->_sueldo;
			  
		  }
	  }
 
 
 
 ?>
 </body>
</html>