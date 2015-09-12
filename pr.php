<!DOCTYPE html>
<!-- saved from url=(0015)http://baas.lk/ -->
<html hola_ext_inject="disabled"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>baas.lk</title>

<link href="profile.css" rel="stylesheet">

<link href="./SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
<style type="text/css">

<?php
// show potential errors / feedback (from login object)
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
            echo $error;
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            echo $message;
        }
    }
}
?>

<?php
// show potential errors / feedback (from registration object)
if (isset($registration)) {
    if ($registration->errors) {
        foreach ($registration->errors as $error) {
            echo $error;
        }
    }
    if ($registration->messages) {
        foreach ($registration->messages as $message) {
            echo $message;
        }
    }
}
?>


<style>
#apDiv8 {
	position:absolute;
	width:100%;
	height:420px;
	z-index:1;
	top: 80px;
	background-color: #999999;
}
#apDiv9 {
	position:absolute;
	width:100%;
	height:5px;
	z-index:5;
	left: -176px;
	top: -80px;
	background-color: #333333;
}

#apDivtabmain {
	position:absolute;
	width:769px;
	height:382px;
	z-index:7;
	left: 235px;
	top: 200px;
}


.block label { display: inline-block; width: 200px; text-align: right; }


</style>

<script src="./SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css">
<style type="text/css">
#apDiv12 {
	position:absolute;
	width:196px;
	height:364px;
	z-index:8;
	left: 9px;
	top: 199px;
	background-color: #999;
	border-top-color: #666;
	border-right-color: #666;
	border-bottom-color: #666;
	border-left-color: #666;
	overflow: scroll;
}
#form-label{
	position:absolute;
	width:195px;
	height:58px;
	z-index:9;
}
#apDiv13 {
	position:absolute;
	width:197px;
	height:73px;
	z-index:9;
	left: 1px;
	top: 104px;
}
#apDiv14 {
	position:absolute;
	width:227px;
	height:147px;
	z-index:9;
	left: 2px;
	top: 195px;
}
#apDiv15 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:9;
}
#apDiv16 {
	position:absolute;
	width:120px;
	height:57px;
	z-index:9;
	left: 20px;
	top: 261px;
}


</style>

 
    
       

<div id="apDivtabmain">
  <div id="TabbedPanels1" class="TabbedPanels">
    <ul class="TabbedPanelsTabGroup">
      <li class="TabbedPanelsTab" tabindex="0">General</li>
      <li class="TabbedPanelsTab" tabindex="0">Personal</li>
      <li class="TabbedPanelsTab" tabindex="0">Authentication</li>
    </ul>
    <div class="TabbedPanelsContentGroup">
      <div class="TabbedPanelsContent">
        
       
        <form name="form1" method="post" action="components/update-profile-general.php" enctype="multipart/form-data" >
		
		 <div id="form-label">
         <label> First Name</label>
         
        <input type="text" placeholder="			<?php echo $rws['user_firstname'];?>" name="user_firstname" 	value="<?php echo $rws['user_firstname'];?>">
                
         </div>

        
        
       
       
       
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <div id="apDiv13">
          <label for="label">Last Name</label>
          <input type="text" placeholder="<?php echo $rws['user_lastname'];?>" name="user_lastname" value="<?php echo $rws['user_lastname'];?>">
        </div>
        
        
        
        <p>&nbsp;</p>
        <p>&nbsp;</p>
     
         
			 
		 
		 
        <label>Profile Picture</label>
		<br>
			
        <img src="userfiles/avatars/<?php echo $rws['user_avatar'];?>" width="200" height="200">
        <input name="ImageFile" type="file" id="uploadFile"/>
		  <center>
	
     
        <div class="submit">
          
          <center>
       
			  <input type="submit" name="submit" id="submit" value="Save">
		
        </center>
		
		</div>
        </form>
      </div>
      <div class="TabbedPanelsContent">
      
        
        <form name="form1" method="post" action="components/update-profile-personal.php" enctype="multipart/form-data" >
		
			
			
			
		     <div class="block">
			 
			 
				<div >
                    <label for="">Catagory</label>
                    <input type="text"  placeholder="<?php echo $rwssp['sp_catagory'];?>" name="sp_catagory" value="<?php echo $rwssp['sp_catagory'];?>">    
                </div>
				
				
					
                <div >
                    <label for="">Description</label>
                    <textarea class="form-control" placeholder="<?php echo $rwssp['description'];?>" rows="10" placeholder="<?php echo $rwssp['description'];?>" name="description" value="<?php echo $rwssp['description'];?>"><?php echo $rwssp['description'];?></textarea>
                </div>
				
				
				
				<div >
                    <label for="">Contact Number</label>
                    <input type="text"  placeholder="<?php echo $rwssp['sp_contact_NO'];?>" name="sp_contact_NO" value="<?php echo $rwssp['sp_contact_NO'];?>">    
                </div>
				
				<div>
                    <label for="">Birthday</label>   
                    <input type="date" placeholder="<?php echo $rwssp['sp_dob'];?>" name="sp_dob" value="<?php echo $rwssp['sp_dob'];?>">      
                </div>
				
				 <label for="">Gender</label>        
				 
                <div>
                    <div class="radio-inline">
                        <label>
                            <input type="radio" name="sp_gender" id="optionsRadios1" value="Male" checked>Male</label>
                    </div>              
                    <div class="radio-inline">
                        <label>
                            <input type="radio" name="sp_gender" id="optionsRadios1" value="Female">Female</label>
                    </div>
                </div>
				
				 <div>
                    <label for="">Area</label>
                    <input type="text" placeholder="<?php echo $rwssp['sp_area'];?>" name="sp_area" value="<?php echo $rwssp['sp_area'];?>" id="area">    
                </div>
				
				
                <div class="form-group float-label-control">
                    <label for="">Address</label>
                    <input type="text" class="form-control" placeholder="<?php echo $rwssp['sp_address'];?>" name="sp_address" value="<?php echo $rwssp['sp_address'];?>">    
                </div>
				
				
                <label for="">Website</label>
                <div class="form-group float-label-control">
                    <div class="input-group">                  
                        <span class="input-group-addon">http://</span>
                        <input type="text" class="form-control" placeholder="<?php echo $rwssp['sp_website'];?>" name="sp_website" value="<?php echo $rwssp['sp_website'];?>">                  
                    </div>
                </div> 
				
				 <div >
                    <label for="">Previous work</label>
                    <textarea class="form-control" placeholder="<?php echo $rwssp['sp_previous_work'];?>" rows="10" placeholder="<?php echo $rwssp['sp_previous_work'];?>" name="sp_previous_work" value="<?php echo $rwssp['sp_previous_work'];?>"><?php echo $rwssp['sp_previous_work'];?></textarea>
                </div>
				
				
            </div>
				
				
				
  	
		

	
     
        <div class="submit">
          
          <center>
       
			  <input type="submit" name="submit" id="submit2" value="Save">
		
        </center>
		
		</div>
        </form>
      
      
      
      
      
      
      
      
      
      </div>
      <div class="TabbedPanelsContent">
      
      
      
      
                  <div class="col-md-6">
			
			<hr/>
             <form method="post" action="edit.php" name="user_edit_form_name">
			<label for="user_name"><?php echo "New Username"; ?></label>
			<input id="user_name" type="text" name="user_name" pattern="[a-zA-Z0-9]{2,64}" required /> (<?php echo "Currently"; ?>: <?php echo htmlspecialchars($_SESSION['user_name']); ?>)
			<input type="submit" name="user_edit_submit_name" value="<?php echo "Change Username"; ?>" />
			</form>
			
			<hr/>
			
			<!-- edit form for user email / this form uses HTML5 attributes, like "required" and type="email" -->
			<form method="post" action="edit.php" name="user_edit_form_email">
				<br>
				<label for="user_email"><?php echo "New Email"; ?></label>
				<input id="user_email" type="email" name="user_email" required /> (<?php echo "Currently"; ?>: <?php echo htmlspecialchars($_SESSION['user_email']); ?>)
				<input type="submit" name="user_edit_submit_email" value="<?php echo "Change Email"; ?>" />
			</form><hr/>

			<!-- edit form for user's password / this form uses the HTML5 attribute "required" -->
			<form method="post" action="edit.php" name="user_edit_form_password">
				<label for="user_password_old"><?php echo "Old password"; ?></label>
				
				<input id="user_password_old" type="password" name="user_password_old" autocomplete="off" />
				<label for="user_password_new">  <?php echo " New password"; ?></label>
				<input id="user_password_new" type="password" name="user_password_new" autocomplete="off" />
				<label for="user_password_repeat"> <?php echo "New password repeat"; ?></label>
				<input id="user_password_repeat" type="password" name="user_password_repeat" autocomplete="off" />
				<br>
				<input type="submit" name="user_edit_submit_password" value="<?php echo "Change password"; ?>" />
			</form><hr/>

			<p>
			  <!-- backlink -->
			  
			  <a href="login.php"><?php echo "Back to login"; ?></a>
			  
			  
			  
			  
			  
			  </p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
         </div>
      </div>
    </div>
  </div>
</div>

<div id="apDiv12">Recent Feedbacks</div>
<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
</script><br>
<br>
<br>
<br>

</body></html>