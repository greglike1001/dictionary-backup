<?php session_start();
 if(isset($_SESSION['u_lvl']) && $_SESSION['u_lvl']!=3){
        header("location:index.php");
    }else if(isset($_SESSION['u_lvl']) && $_SESSION['u_lvl']==3){

 // connect to the database
include('db/db_con.php');
 
 // check if the 'id' variable is set in URL, and check that it is valid
 // get id value
 $definition_id = $_GET['definition_id'];
 $word_id = $_GET['word_id'];
 $user_id = $_GET['user_id'];
 $definition = $_GET['definition'];

 
 // delete the entry 
 $result = mysql_query("DELETE FROM definition_tbl WHERE word_id=$word_id")
 or die(mysql_error()); 
 
 $sql="insert into definition_tbl values (null, $word_id,'$definition',$user_id)";	

 if (!mysql_query($sql,$con)){  
     echo "<p style='color:red'>Error!!!</p>";
 }else{
     echo "<p style='color:green'>You just approved a definition!";
      $result = mysql_query("DELETE FROM propose_definition_tbl WHERE definition_id=$definition_id")
 or die(mysql_error()); 
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