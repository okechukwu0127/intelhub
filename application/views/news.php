<?php

//echo $status;
$ci = &get_instance();
//echo var_dump($ci);

//var_dump($news);



	if(is_array($news))
	{
		
				foreach($news as $news_data){
					
					echo '<div class="form-2" style="width:50%; margin-left:auto;margin-right:auto; margin-top:20px;">';
					echo '<div class="legend" style="padding:10px;">'.$news_data['title'].
					'<div style="font-weight:none;float:right;font-size:10px;color:red;">'.$news_data['date_time'].'</div></div>';
					echo	'<div style="margin-top:10px;">'.$news_data['content'].'</div></div>';
					
				}
	
	
	}
												


?>
