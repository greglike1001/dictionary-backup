<!DOCTYPE html>
<html lang="en">
<head>
<title>vapejuices.uk login</title>
<?php include('head.php'); ?> 
<script type="text/javascript" src="js/login.js"></script>  
</head>
<body>   
    <section class="w3-container center my-screen">  
        <?php include('header.php'); ?>        
        <?php include('topnav.php'); ?> 
            <div class="w3-half  login_con"  >
        <h2 style="margin:20px 0;" >Please Login Here</h2>
        <hr/>                   
        <form>
           <div class="w3-group req">      
             <input class="w3-input" type="text" name="uname" id="uname" style="width:100%" required>
             <label class="w3-label">Username</label>
           </div>
           <div class="w3-group req">      
             <input class="w3-input" type="password" name="p1" id="p1" style="width:100%" required>
             <label class="w3-label">Password</label>
           </div>
          
           <input class="w3-input w3-theme-d1" type="button" name="login" id="login" style="width:100%" value="Login">  
           <br/>
           <p id="login_stat" style="text-align:center"></p>
          
         </form>
       </div>
  
    </section>
</body>
</html>