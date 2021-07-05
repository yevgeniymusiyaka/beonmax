
					echo the_field('condition');<br>
					echo the_field('value');


<?php 
for($x = 1; $x <= 23; ++$x){
    $rowname = $x . "_row";

    if( have_rows('$rowname') ):
        while ( have_rows('$rowname') ) : the_row();
            $condition = get_sub_field('condition');
            $value = get_sub_field('value');
        endwhile;
    endif;
    
}   








?>

		
<?php
					$post_id = get_the_ID();
					if($post_id == 717){
					?>	
			<table class="management__table">
				<tbody>
					<tr class="management__table__head">
						<td class="management-item__post">Условие</td>
						<td class="management-item__post">Значение</td>
					</tr>	
					<?php 
						for($x = 1; $x <= 23; ++$x){
							$rowname = $x . "_row";

							if( have_rows('$rowname') ):
								while ( have_rows('$rowname') ) : the_row();
									$condition = get_sub_field('condition');
									$value = get_sub_field('value');
									?>
									<tr>
										<td class="management-item__post"><?php echo $condition; ?></td>
										<td class="management-item__post"><?php echo $value; ?></td>
									</tr>
									<?php
								endwhile;
							endif;

						}
						
						}
					?>
				</tbody>
			</table>