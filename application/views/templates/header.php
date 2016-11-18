<html>
<head>

<link rel="stylesheet" href="<?=CSS;?>tipsy.css"  type="text/css"  />
<link rel="stylesheet" href="<?=CSS;?>bootstrap.min.css"  type="text/css"  />
<link rel="stylesheet" href="<?=CSS;?>index.css"  type="text/css"  />
<link rel="stylesheet" href="<?=CSS;?>sticky-footer-navbar.css"  type="text/css"  />

<link rel="stylesheet" href="<?=CSS;?>custom-theme/jquery-ui-1.9.2.custom.css"  type="text/css"  />

<script src="<?=JS;?>jquery.js"  type="text/javascript"  /></script>
<script src="<?=JS;?>bootstrap.min.js"  type="text/javascript"  /></script>
<script src="<?=JS;?>jquery.tipsy.js"  type="text/javascript"  /></script>
<script src="<?=JS;?>jquery.easing.1.3.js"  type="text/javascript"  /></script>

<script type="text/javascript">
$(function()
{

	
	$('.tipsy_tooltip_html').tipsy({html: true });
	
	
	
	
	$("#submit_form_post").bind("click",function(){
	
	
	var error =1;
	if ($('#title').val()=='' || $('#content').val()=='' )
	{
		 var error=1;
	}
	else
	{
		var error =0;
	}
	
	
	
	if(error==1)
		{
			$("#error_msg").html('<div class="alert alert-error"><span class="icon-info-sign"></span>&nbsp;&nbsp;&nbsp;Post Title or Content can not be empty</div>');
			$("#form_create").animate({ 
								left:"+=150",
									right:"+=100"},150,'easeInOutBounce'
									,
									function()
									{
									$("#form_create").animate({ 
								left:"-=150",
									right:"-=100"},150,'easeOutElastic',
											function()
											{
											$("#form_create").animate({ 
										left:"+=50",
											right:"+=50"},300,'easeInOutBounce',
												function()
												{
													
												$("#form_create").animate({ 
														left:"-=50",
															right:"-=50"},300,'easeOutElastic')	
												})	
									}
										
									
									)	
										
									}
									
									)
									
						
			
		}
		else
		{	
		
		$("#loader").html('<img src="<?=IMG;?>loading.gif">');
						var json={};
						
						//////////////////////////////////
						//json['fullname_val']=$("#fullname").val();
						//json['phone_val']=$("#phone").val();
						json['title_val']=$("#title").val();
						json['content_val']=$("#content").val();
						//json['address_val']=$("#address").val();
						
						
						//////////////////////////////////
						
						
						json['ajax']="save_login_post";
						
						$.ajax({
							url:'<?=base_url("check_controller/check")  ;?>',
							data:json,
							type:'post',
							timeout: 6000,
							success: function(html)
							{
								$("#loader").empty()
								$("body").fadeOut("fast",function(){ $("body").empty().append(html).fadeIn("fast") });
								
								//alert(html)
							
							},
							error: function(error, url, line) {
			   // controller.sendLog({acc:'error', data:'ERR:'+error+' URL:'+url+' L:'+line});
				
						var acc='error';
						var data='ERR:'+error+' URL:'+url+' L:'+line;
						alert(data)
						//$("#msg_"+key).html('<span class="ui-state-error" style="">Network error, please enter '+key+'  again </span>');
						
							}
						})
						
		}
		
	})
	
	$("#submit_form_login").bind("click",function(){
	
	
	var error =1;
	if ($('#email_login').val()=='' || $('#password').val()=='' )
	{
		 var error=1;
	}
	else
	{
		var error =0;
	}
	
	
	
	if(error==1)
		{
			$("#error_msg").html('<div class="alert alert-error"><span class="icon-info-sign"></span>&nbsp;&nbsp;&nbsp;Enter your email and password</div>');
			$("#form_create").animate({ 
								left:"+=150",
									right:"+=100"},150,'easeInOutBounce'
									,
									function()
									{
									$("#form_create").animate({ 
								left:"-=150",
									right:"-=100"},150,'easeOutElastic',
											function()
											{
											$("#form_create").animate({ 
										left:"+=50",
											right:"+=50"},300,'easeInOutBounce',
												function()
												{
													
												$("#form_create").animate({ 
														left:"-=50",
															right:"-=50"},300,'easeOutElastic')	
												})	
									}
										
									
									)	
										
									}
									
									)
									
						
			
		}
		else
		{	
		
		$("#loader").html('<img src="<?=IMG;?>loading.gif">');
						var json={};
						
						//////////////////////////////////
						//json['fullname_val']=$("#fullname").val();
						//json['phone_val']=$("#phone").val();
						json['email_val']=$("#email_login").val();
						json['password_val']=$("#password").val();
						//json['address_val']=$("#address").val();
						
						
						//////////////////////////////////
						
						
						json['ajax']="save_login";
						
						$.ajax({
							url:'<?=base_url("check_controller/check")  ;?>',
							data:json,
							type:'post',
							timeout: 6000,
							success: function(html)
							{
								$("#loader").empty()
								$("body").fadeOut("fast",function(){ $("body").append(html).fadeIn("fast") });
								
								//alert(html)
							
							},
							error: function(error, url, line) {
			   // controller.sendLog({acc:'error', data:'ERR:'+error+' URL:'+url+' L:'+line});
				
						var acc='error';
						var data='ERR:'+error+' URL:'+url+' L:'+line;
						alert(data)
						//$("#msg_"+key).html('<span class="ui-state-error" style="">Network error, please enter '+key+'  again </span>');
						
							}
						})
						
		}
		
	})

	$("#submit_form").bind("click",function(){
		
		
		//var fields =['fullname','phone','email','sex','address'];
		var fields =['fullname','phone','email','password'];
		
		$("#success_message").remove('');
		
		for (index=0; index < fields.length; ++index)
		{
		if( $("#msg_"+fields[index]+" img").attr("src") !="<?=IMG;?>selected.png"  || $("#"+fields[index]).val()=="")$("#msg_"+fields[index]).html('<img class="tipsy_tooltip_html" src="<?=IMG;?>report.png" align="top" width="11" style="margin-top:-9px; cursor:pointer">');
		}
		
		
		var error=0;
		
		for (index=0; index < fields.length; ++index)
		{
		  if ( $("#msg_"+fields[index]+" img").attr("src") !="<?=IMG;?>selected.png" || $("#"+fields[index]).val()==""){ error=1;  }
		  
		 // alert(error+"---"+fields[index]); 
		}
		
		   
		if(error==1)
		{
			$("#error_msg").html('<div class="alert alert-error"><span class="icon-info-sign"></span>&nbsp;&nbsp;&nbsp;Some Fields are not filled out properly</div>');
			$("#form_create").animate({ 
								left:"+=150",
									right:"+=100"},150,'easeInOutBounce'
									,
									function()
									{
									$("#form_create").animate({ 
								left:"-=150",
									right:"-=100"},150,'easeOutElastic',
											function()
											{
											$("#form_create").animate({ 
										left:"+=50",
											right:"+=50"},300,'easeInOutBounce',
												function()
												{
													
												$("#form_create").animate({ 
														left:"-=50",
															right:"-=50"},300,'easeOutElastic')	
												})	
									}
										
									
									)	
										
									}
									
									)
									
						
			
		}
		else
		{
		$("#error_msg").html('');
		$("#fullname_cf").html($("#fullname").val());
			$("#phone_cf").html($("#phone").val());
				$("#email_cf").html($("#email").val());
					$("#password_cf").html($("#password").val());
					//$("#address_cf").html($("#address").val());
					
					
			$("#form_create").slideUp("slow",function()
			{
				$("#form_confirm").slideDown("slow");	
				
			})
		
		
		}/*
		
		*/
		
		
		})
		
		
		$("#reset_form").bind("click",function(){
			
			$("#success_message").html('');
			$("#form_create").animate({ 
								top:"+=60"
									},800,'easeInOutBounce'
									,
									function()
									{
									$("#form_create").animate({ 
								top:"-=60"
								},400,'easeInOutElastic',
								function(){
								var fields =['fullname','phone','email','password'];
								
								var error=0;
										$("#error_msg").html('');
									for (index=0; index < fields.length; ++index)
									{
										$("#msg_"+fields[index]).html('');
										$("#"+fields[index]).val('');
										
									}
									
								})
									})
			
			
		})
		
		
		
		$("#save_form").bind("click",function(){
			
			
			
				//alert(key)	
						//var datastring ="tgg=text_title&value="+$(this).val();
						$("#loader").html('<img src="<?=IMG;?>loading.gif">');
						var json={};
						
						//////////////////////////////////
						json['fullname_val']=$("#fullname").val();
						json['phone_val']=$("#phone").val();
						json['email_val']=$("#email").val();
						json['password_val']=$("#password").val();
						//json['address_val']=$("#address").val();
						
						
						//////////////////////////////////
						
						
						json['ajax']="save";
						
						$.ajax({
							url:'<?=base_url("check_controller/check")  ;?>',
							data:json,
							type:'post',
							timeout: 6000,
							success: function(html)
							{
								$("#loader").empty()
								$("body").fadeOut("fast",function(){ $("body").empty().append(html).fadeIn("fast") });
								
								
							
							},
							error: function(error, url, line) {
			   // controller.sendLog({acc:'error', data:'ERR:'+error+' URL:'+url+' L:'+line});
				
						var acc='error';
						var data='ERR:'+error+' URL:'+url+' L:'+line;
						alert(data)
						//$("#msg_"+key).html('<span class="ui-state-error" style="">Network error, please enter '+key+'  again </span>');
						
							}
						})
			
		})
		
		
		
		$("#edit_form").bind("click",function(){
		
		
			$("#form_create").slideDown("slow",function()
			{
				$("#form_confirm").slideUp("slow");	
				
			})
			
		})
		


	$('form.form-1 input,select,textarea').each(function(){
	
				
				$(this).on("change",function()
				{
					$("#success_message").html('');
				//alert($(this).val());
				var key=$(this).attr('name');
				//alert(key)	
						
						$("#msg_"+key+"2").html('');
						$("#msg_"+key).html('<img src="<?=IMG;?>loading.gif">');
						var json={};
						json[key]=$(this).val();
						json['ajax']=1;
						json['handler']=$(this).attr('name');
						
						
						if(json['handler']=='')
						{
						json['handler']='title';	
						}
						
						
						$.ajax({
							url:'<?=base_url("check_controller/check")  ;?>',
							data:json,
							type:'post',
							timeout: 6000,
							success: function(html)
							{
								$("#msg_"+key).empty().append(html)
								
								
							
							},
							error: function(error, url, line) {
			   // controller.sendLog({acc:'error', data:'ERR:'+error+' URL:'+url+' L:'+line});
				
						var acc='error';
						var data='ERR:'+error+' URL:'+url+' L:'+line;
						//alert(data)
						$("#msg_"+key).html('<span class="ui-state-error" style="">Network error, please enter '+key+'  again </span>');
						
							}
					})	
						
						
						})
						.bind("blur , click",function()
						{
						var key=$(this).attr('name');	
						if($("#"+key).val()=='')
								{
								$("#msg_"+key).html('<span class="ui-state-error" style="text-transform:capitalize">'+key+' can not be empty</span>')	
									
								}	
						})	
		
		
	})
})

</script>





	<title><?php echo $title ?></title>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?=URL;?>" style="font-weight:bolder;">
      <img src="<?=URL;?>/assets/images/80x80.png" style="float:left;width:40px;margin-top:-10px; margin-right:20px;"/>Splash</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
       
        
        <?php
		if(isset($_SESSION['login']))
		{
			if($_SESSION['login']=='yes')
			{
			 ?>
              <li class="active"><a href="<?=URL.'post/';?>">New Post</a></li>
             <?php	
				
			}
			else
			{
			 ?>
			  <li class="active"><a href="<?=URL.'register/';?>">Register</a></li>
			 <li><a href="<?=URL.'login/';?>">Login</a></li>
			 <?php
				
			}
			
		}
		else
		{
		 ?>
          <li class="active"><a href="<?=URL.'register/';?>">Register</a></li>
         <li><a href="<?=URL.'login/';?>">Login</a></li>
         <?php
			
		}
		?>
        
        
        <li class="dropdown" style="display:none;">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">News <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search for news" style="width:100%;">
        </div>
       
      </form>
      <ul class="nav navbar-nav navbar-right">
        <?php
		if(isset($_SESSION['login']))
		{
			if($_SESSION['login']=='yes')
			{
				
			
			?>
             <li><a href="#"><?=$_SESSION['login_name'];?></a></li>
              <li><a href="<?=URL.'logout/';?>">Logout</a></li>
            <?php
			
			}
			
			
		}
		
		?>
        
       
       
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

	