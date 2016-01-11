<?php session_start();
 if(isset($_SESSION['u_lvl']) && $_SESSION['u_lvl']!=3){
        header("location:index.php");
    }else if(isset($_SESSION['u_lvl']) && $_SESSION['u_lvl']==3){

 // connect to the database
include('db/db_con.php');
 
 // check if the 'id' variable is set in URL, and check that it is valid
 if (isset($_GET['definition_id']) && is_numeric($_GET['definition_id']))
 {
 // get id value
 $definition_id = $_GET['definition_id'];
 
 // delete the entry
 $result = mysql_query("DELETE FROM propose_definition_tbl WHERE definition_id=$definition_id")
 or die(mysql_error()); 

 
 // redirect back to the view page
    ?>
        <script>  
                window.location="propose_definition.php"        
        </script>
    <?php
 }
 else
 // if id isn't set, or isn't valid, redirect back to view page
 {
     ?>
        <script>  
                window.location="propose_definition.php"        
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