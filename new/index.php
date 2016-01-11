<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>add definition</title>
<?php include('head.php'); ?>   
<script type="text/javascript" src="js/add_word.js"></script>  
</head>
<body>
    <section class="w3-container center my-screen">
        <?php include('header.php'); ?>        
        <?php include('topnav.php'); ?>     
        
    <div class="w3-threefourth center" style="float:none">
    
    
      
<h3 style="margin:20px 0;cursor: pointer;border: 1px solid;background-color: #171D2B;color: #FFFFFF;text-align: center;padding-top: 15px;padding-bottom: 15px;font-weight: bold;"  >Please add your definition here &nbsp;&nbsp;&nbsp; &#9660;</h3>
        
    <form id="addword_form" action="" method="post" style="display:none;">
        <input  type="hidden" name="user_id" id="user_id" value="<?php if(isset($_SESSION['u_id'])){echo $_SESSION['u_id'];}else{echo "0";}?>">
      <div class="w3-group req">      
       
      </div>
        <div class="w3-group req">      
        <input  class="w3-input" type="text" name="en" id="en" style="width:100%; text-transform: capitalize" required>
        <label class="w3-label">Kurdish(en)</label>  
      </div>
        <div class="w3-group req">      
        <input class="w3-input" type="text" name="ku" id="ku" style="width:100%; text-transform: capitalize" >
        <label class="w3-label">Kurdish(ku) optional</label>  
      </div>        
      
        <div class="w3-group req">  
            <textarea rows="4"  class="w3-input "  name="def" id="def" style="width:100%" required></textarea>        
        <label class="w3-label">Definition</label>  
      </div>
        
    
    <input class="w3-input w3-theme-d1 submit" type="submit" name="submit" id="submit" style="width:100%" value="Submit">  
        
    </form>
 
        <br/>
        
        <div id="remark"></div>   
</div>

    <nav class="w3-topnav w3-theme-d1">

    
   
    </section>
</body>
</html>
    

