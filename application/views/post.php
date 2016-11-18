<?php

//echo $status;
$ci = &get_instance();
//echo var_dump($ci);

if(isset($status) &&  ($status=="add_record" or $status=="saved"))
{
	$data=array(
'id'=>'form_create',
	'class'=>'form-1',
	'style'=>'width:28%;margin-top:20px;'
);

}
isset($_SESSION['title'])?$title=$this->session->userdata('title'):$title='';
isset($_SESSION['content'])?$content=$this->session->userdata('content'):$content='';

echo form_open_multipart("post",$data);

echo "<div class=\"legend\" style=\"margin:10px; padding:5px;text-align:center\">DROP YOU POST HERE</div>";
echo "<div id=\"error_msg\"></div>";
if(isset($status) && $status=="saved")
{
	echo '<div class="alert alert-info" id="success_message"><span class="icon-info-sign"></span>&nbsp;&nbsp;&nbsp;POST SAVED SUCCESSFULLY</div>';
}
$title_attr=array(
			'placeholder'=>'Enter Post Title',
			
			'id'=>"title",
			'name'=>"title",
				'value'=>$title
			);
echo form_label('Title','title')."<br>";			
echo form_input($title_attr).
		"<br><div id='msg_title' style='font-size:x-small;color:red; margin-top:-7px; margin-left:8px;' ></div><br>";
		
		
		

	

$addr_attr=array(
			'placeholder'=>'Enter Your Post Content',
			'rows'=>"5",
			'cols'=>"43",
			'style'=>"margin-top=5px;",
			'id'=>"content",
			'name'=>"content",
			'value'=>$content
			
			);
			
			
echo form_label('Content','content')."<br>";			
echo form_textarea($addr_attr).
		"<br><div id='msg_content' style='font-size:x-small;color:red; margin-top:2px; margin-left:1px;' ></div><br>";


echo '<div id="submit_form_post" class="ui-button-primary ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" 
style="float:right;"> Post </div>';

echo '<div id="reset_form" class="ui-button-default ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="float:right; margin-right:10px;"> Reset </div><br><br><br><br>';
echo form_close();


?>
