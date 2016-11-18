<?php
//session_destroy();

//echo $status;
$ci = &get_instance();
//echo var_dump($ci);

if(isset($status) &&  ($status=="add_record_login" or $status=="saved"))
{
	$data=array(
'id'=>'form_create',
	'class'=>'form-1',
	'style'=>'width:26%;margin-top:20px;'
);
//echo $this->session->userdata('fullname');
//isset($_SESSION['fullname'])?$fullname=$this->session->userdata('fullname'):$fullname='';
isset($_SESSION['password'])?$password=$this->session->userdata('password'):$password='';
isset($_SESSION['email_login'])?$email_login=$this->session->userdata('email_login'):$email_login='';
//isset($_SESSION['sex'])?$sex=$this->session->userdata('sex'):$sex='';
//isset($_SESSION['address'])?$address=$this->session->userdata('address'):$address='';


//$fullname='';//$this->session->userdata('fullname');
//$phone='';//$this->session->userdata('phone');
//$email='';//$this->session->userdata('email');
//$sex='';//$this->session->userdata('sex');
//$address='';//$this->session->userdata('address');

//echo $address;
?>

<img src=<?=URL."/assets/images/shield.png";?> style="width:110px; margin-left:auto; margin-right:auto;">

<?php	
echo form_open_multipart("news/login",$data);

echo "<div class=\"legend\" style=\"margin:10px; padding:5px;text-align:center\">LOGIN ACCESS SHIELD</div>";
echo "<div id=\"error_msg\"></div>";
if(isset($status) && $status=="login_error")
{
	echo '<div class="alert alert-info" id="success_message"><span class="icon-info-sign"></span>&nbsp;&nbsp;&nbsp;INVALID LOGIN-'.$title.'</div>';
}
/*
$title_attr=array(
			'placeholder'=>'Enter Your Fullname',
			
			'id'=>"fullname",
			'name'=>"fullname",
				'value'=>$fullname
			);
echo form_label('Fullname','fullname')."<br>";			
echo form_input($title_attr).
		"<br><div id='msg_fullname' style='font-size:x-small;color:red; margin-top:-7px; margin-left:8px;' ></div><br>";
	*/	
		

	
$email_attr=array(
			'placeholder'=>'Enter Your Email',
			
			'id'=>"email_login",
			'name'=>"email_login",
			'value'=>$email_login
			);
			
			
echo form_label('Email','email_login')."<br>";			
echo form_input($email_attr).
		"<br><div id='msg_email_login' style='font-size:x-small;color:red; margin-top:-7px; margin-left:8px;' ></div><br>";



		
$password_attr=array(
			'placeholder'=>'Enter Your Password',
			'type'=>"password",
			'id'=>"password",
			'name'=>"password",
			'value'=>$password
			);
			
			
echo form_label('Password','password')."<br>";			
echo form_input($password_attr).
		"<br><div id='msg_password' style='font-size:x-small;color:red; margin-top:-7px; margin-left:8px;' ></div><br>";



/*
$sex_attr='id="sex" style="margin-left:7px; margin-top:4px;font-weight:normal;" class="legend"';
$value=array(
			' '=>'[-select gender -]',
				'male'=>'Male',
				'female'=>'female'
					);
							
							
echo form_label('Sex','sex')."<br>";
$default_value=(isset($sex) && $sex !="")?$sex:"";
//echo $default_value;
echo form_dropdown('sex',$value,$default_value,$sex_attr).
		"<br><div id='msg_sex' style='font-size:x-small;color:red; margin-top:2px; margin-left:8px;' ></div><br>";


$addr_attr=array(
			'placeholder'=>'Enter Your Address',
			'rows'=>"5",
			'cols'=>"43",
			'style'=>"margin-top=5px;",
			'id'=>"address",
			'name'=>"address",
			'value'=>$address
			
			);
			
			
echo form_label('Address','address')."<br>";			
echo form_textarea($addr_attr).
		"<br><div id='msg_address' style='font-size:x-small;color:red; margin-top:2px; margin-left:1px;' ></div><br>";
*/

echo '<div id="loader" style="float:right"></div><div id="submit_form_login" class="ui-button-primary ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="float:right;"> Login </div>';

echo '<div id="reset_form" class="ui-button-default ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="float:right; margin-right:10px;"> Reset </div><br><br><br><br>';
echo form_close();


?>



<?php
}
if(isset($status) && $status=="records")
{?>


 <table class="form-2" cellpadding="2" cellspacing="2" style="width:50%" align="center" >
    <tr class="form-1">
    <th>ID</th>
    <th>Fullname</th>
    <th>Phone</th>
    <th>Email</th>
    </tr>
<?php foreach ($records as $news_item): ?>


   
    
    <?php
	if($records=="")
	{
		echo "<tr><td colspan='4' align='center'>NO RECORD FOUND</td></tr>";	
	}
	else
	{?>
		<tr>
    <td><?=$news_item['id'];?></td>
    <td><?=$news_item['fullname'];?></td>
    <td><?=$news_item['phone'];?></td>
    <td><?=$news_item['email'];?></td>
    </tr> 
         
        
	<?php }


 endforeach ?>
<tr class="form-1"   style="height:2px; "> 
    <td colspan='4'  style="padding:0px;">&nbsp;</td>
    </tr>
</table>


<?php
}

if(isset($status) && $status=="single_record")
{
	//echo count($records).'---->>';
	?>
    <table class="form-2" cellpadding="2" cellspacing="2" style="width:50%" align="center" >
    <tr class="form-1">
    <th>ID</th>
    <th>Fullname</th>
    <th>Phone</th>
    <th>Email</th>
    </tr>
    
    <?php
	if($records=="")
	{
		echo "<tr><td colspan='4' align='center'>NO RECORD FOUND</td></tr>";	
	}
	else
	{?>
		<tr>
    <td><?=$records['id'];?></td>
    <td><?=$records['fullname'];?></td>
    <td><?=$records['phone'];?></td>
    <td><?=$records['email'];?></td>
    </tr> 
         
        
	<?php }

	?>
    <tr class="form-1"   style="height:2px; "> 
    <td colspan='4'  style="padding:0px;">&nbsp;</td>
    </tr>
</table>
<?php
}



?>