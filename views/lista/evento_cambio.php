

<li class="list-group-item list-group-item-danger">
	<span class="text-dia"><span class="label label-default"><?php echo $dia[$i] ?></span> <?php echo $evento['nombre'] ?></span>

	<a id="link" data-toggle="modal" data-target="#modalIntercambiarLista<?php echo $dia[$i] ?>" class="btn btn-primary pull-right" href=""><i class="fa fa-hand-paper-o" aria-hidden="true"></i></a>

	<a id="link" class="btn btn-default pull-right" href="<?php  echo '?view=confirmar&confirmado=0&fecha='. $evento['fecha'] .'&mes='. $mes .'&miembro='. $evento['nombre'] . ' ' ?>"><i class="fa fa-times" aria-hidden="true"></i></a>

	<!-- Modal -->
	<div class="modal fade" id="modalIntercambiarLista<?php echo $dia[$i] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Intercambio</h4>
	      </div>

	      <form action="#" method="GET">
	      <div class="modal-body">
			<input type="hidden" name="view" value="confirmar">
	      	<?php echo $evento['nombre'] ?> x   
	      	<select name="miembro" id="miembro">
	      	<?php foreach ($miembros as $miembro => $valor): ?>
	      		<?php if ($evento['nombre'] != $valor): ?>
	      			<option value="<?php echo $miembro ?>"><?php echo $valor ?></option>
	      		<?php endif ?>
	      	<?php endforeach ?>
	        </select>
	        <input id="confirmado" name="confirmado" type="hidden" value="3">
	        <input id="fecha" name="fecha" type="hidden" value="<?php echo $evento['fecha'] ?>">
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

</li>