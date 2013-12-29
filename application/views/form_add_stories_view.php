<div class="row">
	<div class="col-xs-10 col-sm-10 col-md-10 col-md-offset-1 margin_left">
	
		<!--форма ввода контента - конец-->	
			<div class="Blue_form" >
				<a name="form_stories"></a>
				<form class="form-horizontal form_size" role="form" action="<?php echo(base_url());?>index.php#form_stories" method="post" >
					<div class="row">
						<div class="col-xs-5 col-sm-5 col-md-5">
							<div class="form-group">
								<?php 
								if(form_error('title')=='')
								{?>
									<label class="control-label" for="inputSuccess">Тема:*</label>
									<input type="text" class="form-control border_grin" name="title" value="<?php echo(set_value('title'));?>"></input>
								<?php 
								}else
								{?>
									<label class="control-label error_yellow" for="inputSuccess"><?php echo(strip_tags(form_error('title'))); ?></label>
									<input type="text" class="form-control border_red" name="title" value="<?php echo(set_value('title'));?>"></input>
								<?php 
								} ?>
							</div>
						</div>
						<div class="col-xs-5 col-sm-5 col-md-5">
							<div class="form-group ">
								<?php 
								if(form_error('author')=='')
								{?>
									
									<label class="control-label" for="inputSuccess">Автор</label>
									<input type="text" class="form-control border_grin" name="author" value="<?php echo(set_value('author'));?>"></input>
								<?php 
								}else
								{?>
									<label class="control-label error_yellow" for="inputSuccess"><?php echo(strip_tags(form_error('author'))); ?></label>
									<input type="text" class="form-control border_red" name="author" value="<?php echo(set_value('author'));?>"></input>
								<?php 
								} ?>
							</div>
						</div>
						<div class="col-xs-2 col-sm-2 col-md-2">
							<div class="form-group ">
								<button type="submit"name="add_stories" class="btn btn-success margin_sabmit">Отправить</button>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-11 col-sm-11 col-md-11 margin_textarea" >
							<div class="form-group">
								<div class="form-group">
									<?php 
									if(form_error('body')=='')
									{?>
										<label class="control-label" for="inputSuccess">Статья:*</label>
										<textarea type="text" class="form-control border_grin " rows="4" name="body" ><?php echo(set_value('body'));?></textarea>
									<?php 
									}else
									{?>
										<label class="control-label error_yellow" for="inputSuccess"><?php echo(strip_tags(form_error('body'))); ?></label>
										<textarea type="text" class="form-control border_red " rows="4" name="body" ><?php echo(set_value('body'));?></textarea>
									<?php 
									} ?>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
	<!--форма ввода контента - конец-->		
	</div>
</div>