


<header>

    <div class="header-r ">
        
    
        <div id="user_login">
            
            <?php
            if(isset($_SESSION['u_id'])){
                $user_id = $_SESSION['u_id']; 
            ?>
            
            <?php echo "Welcome! ".$_SESSION['u_name'];?>
            
                <a href="logout.php">(Logout)</a>
                <br/>
                <a style="float:right; color:#003399" href='<?php echo "edit_profile.php?user_id=".$user_id?> '>Edit my profile</a>
            <?php }else{?>
            
            <a href="login.php" style="font-size: 16px; margin-right: 15px;">Login</a>
            <a href="signup.php" style="font-size: 16px" >Signup</a>                   
            
        
            <?php }?>
           
         </div>
  </div>
<div class="w3-clear"></div>
</header>




  
