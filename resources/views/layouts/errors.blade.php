<div class="form-group" >
			  <?php if(count($errors)): ?>
					  <div class="alert alert-danger">

					  	<ul>
					  		<?php foreach($errors->all()  as $error):?>

					  		<li> <?php echo $error;  ?></li>
					  		<?php endforeach; ?>
					  	</ul>
					  		
					  </div>
					<?php endif;?>
 </div>