<div class="row">
	<div class="col-xs-10 col-sm-10 col-md-10 col-md-offset-1 margin_left update_form">
	
		<!--форма ввода контента - конец-->	
			<div class="Blue_form" >
				<form class="form-horizontal form_size" role="form" action="<?php echo(base_url());?>index.php/update_stori" method="post" >
					<div class="row">
						<div class="col-xs-6 col-sm-6 col-md-6">
							<div class="form-group">
								<label class="control-label" for="inputSuccess" name="udate_title">Тема: <span class="update_title"><?php echo($stories['title']); ?> <?php echo(set_value('udate_title'));?></span></label>
							</div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-6">
							<div class="form-group ">	
								<label class="control-label" for="inputSuccess" name="udate_author">Автор: <span class="update_title"><?php echo($stories['author']); ?> <?php echo(set_value('udate_author'));?></span></label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-11 col-sm-11 col-md-11 margin_textarea" >
							<div class="form-group">
								<div class="form-group">
								
									<?php 
									if(form_error('body_update')=='')
									{?>
										<label class="control-label" for="inputSuccess">Статья:*</label>
										<textarea type="text" class="form-control border_grin " rows="4" name="update_body" ><?php echo($stories['body']); ?></textarea>
									<?php 
									}else
									{?>
										<label class="control-label error_yellow" for="inputSuccess"><?php echo(strip_tags(form_error('update_body'))); ?></label>
										<textarea type="text" class="form-control border_red " rows="4" name="update_body" ><?php echo(set_value('update_body'));?></textarea>
									<?php 
									} ?>
								</div>
							</div>
						</div>
					</div>
					<input type="text" class="display_none" name="id" value="<?php  echo($stories['id']); echo(set_value('id')); ?>" ></input>
					<div class="row without_margin_top_bottom">
						<div class="col-xs-6 col-sm-6 col-md-6">
							<button type="submit"name="update_stories" class="btn btn-success margin_sabmit pull-right without_margin_top_bottom">Сохранить</button>
						</div>
					</div>
				</form>
			</div>
	<!--форма ввода контента - конец-->		
	</div>
</div>