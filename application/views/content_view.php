<?php foreach($articles_stories as $item):{ ?>
<!--////////////////////запись//////////////////////////-->  
<div class="panel panel-default">
	<div class="panel-heading">
		<h4 class="panel-title">
			<a class="accordion-toggle bold_hover" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo($item['id']); ?>">
				<Span class="tema"><?php echo($item['title']);?></span> <span class="author"><?php echo($item['author']); ?></span> <Span class="tema"> <?php //echo($this->articles_model->get_row_comment($item['id'])); ?></span>
			</a>
		</h4>
	</div>
	<div id="collapse<?php echo($item['id']); ?>" class="panel-collapse collapse ">
		<div class="panel-body">
			
				<?php echo(nl2br($item['body'])); ?>
			
			<div class="pull-right add_margin_top_buttom ">
					
					<div class="form-group inline">
						<a class="btn btn-success min_siz" href="blog.php?update=%s"><span class="glyphicon glyphicon-pencil"></span></a>
					</div>
					<div class="form-group inline">
						<a  class="btn btn-success min_siz" href="blog.php?del=%s"><span class="glyphicon glyphicon-trash" ></span></a>
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
					<form class="form-horizontal form_size form_none" role="form" method="post" name="comment<?php echo($item['id']); ?>" >
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 ">
								<div class="form-group">
									<label class="control-label" for="inputSuccess">Комментарий</label>
									<textarea type="text" class="form-control border_grin " rows="2" name="body_comment"></textarea>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-10 col-sm-10 col-md-10">
								<div class="form-group ">
									<label class="control-label" for="inputSuccess">Автор</label>
									<input type="text" class="form-control border_grin" name="author_comment"></input>
								</div>
							</div>
							<input type="text" class="display_none" name="stories_comment" value="%s" ></input>
						<input type="text" class="display_none" name="form" value="2" ></input>
							<div class="col-xs-2 col-sm-2 col-md-2">
								<div class="form-group ">
									<button type="submit" class="btn btn-success margin_sabmit">Отправить</button>
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
			foreach($articles_comment as $comment):
			{
					if ($item["id"]===$comment["id_stories"]) 
					{
					?>
			<div class="panel panel-primary">
				<div class="panel-heading author-begraund">
					<span class="author-comment"><?php echo($comment['author']); ?></SPAN>
				</div>
				<div class="panel-body">
						<?php echo($comment['body']); ?>
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