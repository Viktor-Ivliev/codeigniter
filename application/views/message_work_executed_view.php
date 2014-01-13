<div class="row ">
	<div class="col-xs-10 col-sm-10 col-md-10 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 ">
		<div class="alert alert-success messege">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<?php
				switch($info_work_executed)
				{
					case "1": 
							printf("Тема добавлена!"); break;
					case "2": 
							printf("Коментарий добавлен!"); break;
					case "3": 
							printf("Тема отредактирована!"); break;
					case "4": 
							printf("Тема удалена!!!"); break;
				}
			?>
		</div>
	</div>
</div>