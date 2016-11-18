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
//echo $this->session->userdata('fullname');
isset($_SESSION['fullname'])?$fullname=$this->session->userdata('fullname'):$fullname='';
isset($_SESSION['phone'])?$phone=$this->session->userdata('phone'):$phone='';
isset($_SESSION['email'])?$email=$this->session->userdata('email'):$email='';
isset($_SESSION['password'])?$password=$this->session->userdata('password'):$password='';
//isset($_SESSION['address'])?$address=$this->session->userdata('address'):$address='';


//$fullname='';//$this->session->userdata('fullname');
//$phone='';//$this->session->userdata('phone');
//$email='';//$this->session->userdata('email');
//$sex='';//$this->session->userdata('sex');
//$address='';//$this->session->userdata('address');

//echo $address;
	
echo form_open_multipart("news/register",$data);

echo "<div class=\"legend\" style=\"margin:10px; padding:5px;text-align:center\">REGISTER WITH US</div>";
echo "<div id=\"error_msg\"></div>";
if(isset($status) && $status=="saved")
{
	echo '<div class="alert alert-info" id="success_message"><span class="icon-info-sign"></span>&nbsp;&nbsp;&nbsp; REGISTRATION WAS SUCCESSFULL'.$title.'</div>';
}
$title_attr=array(
			'placeholder'=>'Enter Your Fullname',
			
			'id'=>"fullname",
			'name'=>"fullname",
				'value'=>$fullname
			);
echo form_label('Fullname','fullname')."<br>";			
echo form_input($title_attr).
		"<br><div id='msg_fullname' style='font-size:x-small;color:red; margin-top:-7px; margin-left:8px;' ></div><br>";
		
		
		

		
			
		
$phone_attr=array(
			'placeholder'=>'Enter Your Phone',
			
			'id'=>"phone",
			'name'=>"phone",
			'value'=>$phone
			);
			
			
echo form_label('Phone','phone')."<br>";			
echo form_input($phone_attr).
		"<br><div id='msg_phone' style='font-size:x-small;color:red; margin-top:-7px; margin-left:8px;' ></div><br>";


	
$email_attr=array(
			'placeholder'=>'Enter Your Email',
			
			'id'=>"email",
			'name'=>"email",
			'value'=>$email
			);
			
			
echo form_label('Email','email')."<br>";			
echo form_input($email_attr).
		"<br><div id='msg_email' style='font-size:x-small;color:red; margin-top:-7px; margin-left:8px;' ></div><br>";



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

echo '<div id="submit_form" class="ui-button-primary ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="float:right;"> Submit </div>';

echo '<div id="reset_form" class="ui-button-default ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="float:right; margin-right:10px;"> Reset </div><br><br><br><br>';
echo form_close();


?>


<div  id="form_confirm" class="form-1" style="width:28%; display:none" >
<div class="legend" style="margin:10px; padding:5px;text-align:center">COMFIRM REGISTRATION DETAILS</div>
<br>
<label for="fullname_cf">Fullname</label><br>
<div name="fullname_cf"   id="fullname_cf"  class="legend"></div><br>


<label for="phone_cf">Phone</label><br>
<div name="phone_cf" id="phone_cf"  class="legend"></div><br />

<label for="email_cf">Email</label><br>
<div name="email_cf" id="email_cf"  class="legend"></div><br>


<label for="password_cf">Password</label><br>
<div name="password_cf" id="password_cf"  class="legend"></div><br>
<!-- 
<label for="sex_cf">Sex</label><br>
<div name="sex_cf" id="sex_cf"  class="legend"></div><br>

<label for="address">Address</label><br>
<div name="address_cf" id="address_cf" class="legend"></div><br>
 -->
<div id="edit_form" 
class="ui-button-error ui-button ui-widget 
ui-state-default ui-corner-all ui-button-text-only" 
style="float:left"> Edit </div>

<div id="save_form" 
class="ui-button-success ui-button ui-widget 
ui-state-default ui-corner-all ui-button-text-only" 
style="float:right"> Save </div>

<div id="loader" style="float:right"></div>

<br /><br /><br /><br />
</div>

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