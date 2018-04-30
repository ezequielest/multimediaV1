<td class="bg-success">
	<span class="text-danger"><?php echo $dia[$i] ?></span> - <span class="bg-success"><?php echo $evento['nombre'] ?> </span>
	<a id="link" href="<?php  echo '?view=confirmar&confirmado=0&fecha='. $evento['fecha'] .'&miembro='. $evento['nombre'] .'&mes='. $mes .'  ' ?>"><i class="fa fa-times" aria-hidden="true"></i></a>
</td>