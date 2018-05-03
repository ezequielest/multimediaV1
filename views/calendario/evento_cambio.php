

<td class="bg-danger">
	<span class="text-danger"><?php echo $dia[$i] ?></span> - <span><?php echo $evento['nombre'] ?> </span>
	<a id="link" href="<?php  echo '?view=confirmar&confirmado=0&fecha='. $evento['fecha'] .'&mes='. $mes .'  ' ?>"><i class="fa fa-times" aria-hidden="true"></i></a>

	<a id="link" data-toggle="modal" data-target="#modalIntercambiar<?php echo $dia[$i] ?>" class="pull-right" href=""><i class="fa fa-hand-paper-o" aria-hidden="true"></i></a>

	<!-- Modal -->
	<div class="modal fade" id="modalIntercambiar<?php echo $dia[$i] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Intercambio</h4>
	      </div>

	      <form action="#" method="GET">
	      <div class="modal-body">
			<input type="hidden" name="view" value="confirmar">
	      	De <?php echo $evento['nombre'] ?> por   
	      	<select name="miembro" id="miembro">
	      	<?php foreach ($miembros as $miembro => $valor): ?>
	      		<?php if ($evento['nombre'] != $valor): ?>
	      			<option value="<?php echo $miembro ?>"><?php echo $valor ?></option>
	      		<?php endif ?>
	      	<?php endforeach ?>
	        </select>
	        el día: 
	        <input id="confirmado" name="confirmado" type="hidden" value="3">
	        <input id="fecha" name="fecha" type="hidden" value="<?php echo $evento['fecha'] ?>">
					<input id="nombre" name="nombre" type="hidden" value="<?php echo $evento['nombre'] ?>">
	        <input type="hidden" id="mes" name="mes" value="<?php echo $mes ?>">

	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal" >Canelar</button>
	        <button type="submit" class="btn btn-primary" >Confirmar</button>
	      </div>
	      </form>
	    </div>
	  </div>
	</div>

</td>