

<td>
<span class="text-danger"><?php echo $dia[$i] ?></span> - <span class="warning"><?php echo $evento['nombre'] ?> </span>
<a id="link" href="<?php echo '?view=confirmar&confirmado=1&fecha='. $evento['fecha'] .'&mes='. $mes .'  ' ?>"><i class="fa fa-check" aria-hidden="true"></i></a>
<a id="link" class="pull-right" href="<?php echo '?view=confirmar&confirmado=2&fecha='. $evento['fecha'] .'&mes='. $mes .'  ' ?>"><i class="fa fa-exchange" aria-hidden="true"></i></a>
</td>




