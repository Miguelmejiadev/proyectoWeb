
<section class="portafolio">
	<div class="container">
		
  	
  	
<div class="p-header">
  			<h2 class="mt-5 pt-5 pb-0 text-center text-white" > Últimos proyectos </h2>
    	</div>

  		<div class="grid">
  			

    	<?php 
			$portafolio="";
			$p_controller = new PortaController();
			$p = $p_controller->read();
			

			for ($n=0; $n < count($p); $n++) { 
			
				$portafolio .= 
				'<div class="hoveritem">
    				<a class="link" href="#">
						<div class="hovercontent">
		   				<h1>' .$p[$n]['nom_proyecto'] . ' </h1>  
		   				<h3>' .$p[$n]['descripcion'] . ' </h3>
						     </div>
						<img src= "./public/img/' . $p[$n]['imagen'].'" >
						    
 					 </a>  </div>'; 
			}

			print($portafolio);
		?>

  		
		
		
	</div>

</section>