<?php if ($resultado['dia'] == $i): ?>
						<td id="dom">
						<?php echo $resultado['id_miembro'] ?>
						<a id="link" href="<?php echo $_SERVER['PHP_SELF'] . '?confirmar=ok&dia='. $i .'&num=' . $num_dom .''?>"><i class="fa fa-check" aria-hidden="true"></i></a>
						<a id="link" href="<?php  echo $_SERVER['PHP_SELF'] . '?cambiar=ok&dia=domingo&num='. $num_dom .'' ?>"><i class="fa fa-exchange" aria-hidden="true"></i></a>
						</td>


						<?php $num_dom++; $num_int++; ?>
					<?php if ($num_dom >= count($integrantes)): ?>
						<?php $num_int = 0; ?>
					<?php endif ?>


					<td><?php echo isset($dia[$i]) ? $dia[$i] : ' '; ?></td>