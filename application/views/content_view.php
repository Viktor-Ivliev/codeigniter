<div class="row">
	<div class="col-xs-10 col-sm-10 col-md-10 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 right_border content_frame">

		<div class="panel-group" id="accordion">
			<?php foreach($stories as $item):{ ?>
			<!--////////////////////запись//////////////////////////-->  
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a class="accordion-toggle bold_hover" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo($item['id']); ?>">
							<Span class="tema"><?php echo($item['title']);?></span> <span class="author"><?php echo($item['author']); ?></span> <Span class="tema"> [<?php echo($this->data_extraction_model->get_row_comment($item['id'])); ?>]</span>
						</a>
					</h4>
				</div>
				<div id="collapse<?php echo($item['id']); ?>" class="panel-collapse collapse <?php 
																								if( set_value('id_stories') === $item['id'])
																								{  echo('in');}//если не правельно введен комент - то открываем запись с формой
																							?> ">
					<div class="panel-body">
						<?php echo(nl2br($item['body'])); ?>
						<a name="form_comment<?php  echo($item['id']); ?>"></a><!--якорь для переноса на неправельно введенную форму-->
						<div class="pull-right add_margin_top_buttom ">
								
								<div class="form-group inline">
									<a class="btn btn-success min_siz" href="<?php echo(base_url());?>index.php/blog_update/index/<?php echo($item['id']); ?>"><span class="glyphicon glyphicon-pencil"></span></a>
								</div>
								<div class="form-group inline">
									<a class="btn btn-success min_siz" href="<?php echo(base_url());?>index.php/delete_stori/index/<?php echo($item['id']); ?>"><span class="glyphicon glyphicon-trash" ></span></a>
								</div>
								<div class="form-group inline">
									<a class="btn btn-success min_siz" onClick="comment<?php echo($item['id']); ?>.style.display=\'none\';"><span class="glyphicon glyphicon-chevron-up" ></span></a>
								</div>
								<div class="form-group inline">
									<a class="btn btn-success min_siz" onClick="comment<?php echo($item['id']); ?>.style.display=\'block\';"><span class="glyphicon glyphicon-chevron-down"></span></a>
								</div>
						</div>
						<hr>
						<!--////////////////////форма//////////////////////////--> 
						<div class="row">	
							<div class="comment_form_begraund col-xs-9 col-sm-9 col-md-9 col-md-offset-1">
								<a name="form_comment<?php  echo($item['id']); ?>"></a>
								<form class="form-horizontal form_size form_none" role="form" method="post" action="<?php echo(base_url());?>index.php/add_comment/#form_comment<?php  echo($item['id']); ?>" name="comment<?php echo($item['id']); ?>" >
									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-12 ">
											<div class="form-group">
												<?php 
												if( set_value('id_stories')  === $item['id'])
												{
													if(form_error('body_comment')=='')
													{?>
														<label class="control-label" for="inputSuccess">Комментарий:*</label>
														<textarea type="text" class="form-control border_grin " rows="2" name="body_comment"><?php echo(set_value('body_comment')); ?></textarea>
													<?php 
													}else
													{?>
														<label class="control-label error_yellow" for="inputSuccess"><?php echo(strip_tags(form_error('body_comment'))); ?></label>
														<textarea type="text" class="form-control border_red " rows="2" name="body_comment"><?php echo(set_value('body_comment')); ?></textarea>
													<?php 
													} ?>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-10 col-sm-10 col-md-10">
											<div class="form-group ">
													<?php 
													if(form_error('author_comment')=='')
													{?>
														<label class="control-label" for="inputSuccess">Автор:*</label>
														<input type="text" class="form-control border_grin" name="author_comment" value="<?php echo(set_value('author_comment')); ?>"></input>
													<?php 
													}else
													{?>
														<label class="control-label error_yellow" for="inputSuccess">Автор<?php echo(strip_tags(form_error('author_comment'))); ?></label>
														<input type="text" class="form-control border_red" name="author_comment" value="<?php echo(set_value('author_comment')); ?>"></input>
													<?php 
													}?>
											</div>
										</div>
										<?php
											}else{
										 ?>
												<label class="control-label" for="inputSuccess">Комментарий:*</label>
												<textarea type="text" class="form-control border_grin " rows="2" name="body_comment"></textarea>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-10 col-sm-10 col-md-10">
											<div class="form-group ">
												<label class="control-label" for="inputSuccess">Автор:*</label>
												<input type="text" class="form-control border_grin" name="author_comment"></input>
											</div>
										</div>
										 <?php } ?>
										<input type="text" class="display_none" name="id_stories" value="<?php  echo($item['id']); ?>" ></input>
										<div class="col-xs-2 col-sm-2 col-md-2">
											<div class="form-group ">
												<button type="submit" class="btn btn-success margin_sabmit" name="comment_add">Отправить</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<hr>
				<!--////////////////////конец форма//////////////////////////--> 

				<!--////////////////////коменты//////////////////////////--> 
						<?php 
						foreach($comment as $comments):
						{
								if ($item["id"]===$comments["id_stories"]) 
								{
								?>
						<div class="panel panel-primary">
							<div class="panel-heading author-begraund">
								<span class="author-comment"><?php echo($comments['author']); ?></SPAN>
							</div>
							<div class="panel-body">
									<?php echo($comments['body']); ?>
							</div>
							</div>
						
						<?php 	} 
						} endforeach; ?>
				<!--////////////////////коменты конец//////////////////////////--> 

					</div>	
				</div>
			</div>
				<!--////////////////////запись конец//////////////////////////-->
			<?php } endforeach; ?>
			
		</div>
	</div>
</div>