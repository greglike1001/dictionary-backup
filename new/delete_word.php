<?php session_start();
 if(isset($_SESSION['u_lvl']) && $_SESSION['u_lvl']!=3){
        header("location:index.php");
    }else if(isset($_SESSION['u_lvl']) && $_SESSION['u_lvl']==3){

 // connect to the database
include('db/db_con.php');
 
 // check if the 'id' variable is set in URL, and check that it is valid
 if (isset($_GET['word_id']) && is_numeric($_GET['word_id']))
 {
     
 // get id value and location
 $word_id = $_GET['word_id'];
 $location = $_GET['location'];
 
 // delete the entry
 $result = mysql_query("DELETE FROM word_tbl WHERE word_id=$word_id")
 or die(mysql_error()); 

 
 // redirect back to the view page
    ?>
        <script>  
                window.location="<?php echo $location?>"        
        </script>
    <?php
 }
 else
 // if id isn't set, or isn't valid, redirect back to view page
 {
     ?>
        <script>  
                window.location="<?php echo $location?>"        
        </script>
    <?php
 }

    
     }else{ ?>
       <script>  
        window.location="logout.php"        

        </script>
    <?php 
    }    
    ?>