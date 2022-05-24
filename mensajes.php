<?php include 'assets/includes/banner.php'; ?>

<p class="display-1 text-white">Mensajes</p> 

<?php include 'assets/includes/header.php'; ?>

 <!-- FUNCIONALIDADES INCREIBLES -->
    <section class="section section-lg">
<div class="btn-wrapper text-center mb-5">
              <a href="http://intranet.visualnet.cu" class="btn btn-outline-primary">Volver a la Página Principal</a>              
            </div>
<div class="container container-lg">
    <form action="#" method="get">
                <div class="input-group">
                    <!-- USE TWITTER TYPEAHEAD JSON WITH API TO SEARCH -->
                    <input class="form-control" id="system-search" name="q" placeholder="Buscar" required>                   
                        <button type="submit" class="btn btn-default">Buscar ...</button>
                    
                </div>
            </form>
</br>
</br>
<table class="table table-hover table-list-search">
<div class="pull-right">
								<button type="button" class="btn btn-success btn-filter" onclick="filtrar('resueltos')">Resueltos</button>								
								<button type="button" class="btn btn-danger btn-filter" onclick="filtrar('sinResolver')">Sin Resolver</button>
								<button type="button" class="btn btn-default btn-filter" onclick="filtrar('todos')">Mostrar todos</button>
						</div>
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre y Apellidos</th>      
      <th scope="col">Tipo</th>
      <th scope="col">Mensaje</th>      
      <th scope="col">IP</th>
	  <th scope="col">Fecha Inicio</th>
    <th scope="col">Fecha Fin</th>
    <th scope="col">Estado</th>
	  <th scope="col">Resolver</th>
    </tr>
  </thead>
  <tbody>

<?php
include 'assets/includes/conexiones.php';

$sql = "SELECT * FROM mensajes";
$resultado = $conn->query($sql);
$cont=1;
if ($resultado->num_rows > 0) {?> 

   
  
  <?php
  // Reviso el estado y si esta resuelto lo muestro en verde sin boton de check
    while($row = $resultado->fetch_assoc()) {
      if ($row["estado"]!="Sin resolver"){?>
		  <tr class="text-success d-none" name="resuelto">
      <?php }

  //si no esta resuelto entonces activo el formulario de envio con el boton de check
      else{?>
    <form action="?" method="POST">
    <tr class="text-default" name="sinResolver"><?php } ?>
    <input type="hidden" name="id" value="<?php echo $row["id"]; ?>" />
    <th scope="row"><?php echo $row["id"]; ?> </th>        
		<td><?php echo $row["nombre"]; ?></td>		
		<td><?php echo $row["tipo"]; ?></td>
		<td><?php echo $row["mensaje"]; ?></td>
		<td><?php echo $row["ip"]; ?></td>
		<td><?php echo $row["fecha"]; ?></td>
    <td><?php echo $row["fechaFin"]; ?></td>
    <td name="estado"><?php if ($row["estado"]=="Sin resolver"){?>
      
      <input class="text-primary" name='textbox' placeholder="Quien resuelve" type="text">
      <td>  
      <button type="submit" class="btn btn-success ni ni-check-bold" name="submit" value="Enviar"></button><td>
    </form>
      <?php }
      else{
        echo $row["estado"]; }?>   
    </td>

</td>
		</tr>  
    
    <?php 
    
    }
    echo " </tbody></table> 	";
} else {
    echo "0 results";
}


?>
</div>
</section>
	
    </main>

<?php include 'assets/includes/modals.php'; ?>


<?php include 'assets/includes/footer.php'; ?>