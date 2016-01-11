<?php
include('db_con.php');     
    $eng = addslashes($_REQUEST['eng']);
    $en = addslashes($_REQUEST['en']);
    $ku = addslashes($_REQUEST['ku']);
    $def = addslashes($_REQUEST['def']);
    $user_id = addslashes($_REQUEST['user_id']);
        
        $sql = "insert into word_tbl(word_id, english, kurdish_en, kurdish_ku) "
                . "SELECT null, '$eng', '$en', '$ku' from dual "
                . "WHERE NOT EXISTS (SELECT '$eng' from word_tbl  where english = '$eng' and kurdish_en = '$en'and kurdish_ku = '$ku')";
                  
            mysql_query($sql,$con);
                $sql1 = mysql_query("select word_id from word_tbl where english = '$eng' and kurdish_en = '$en'and kurdish_ku = '$ku'");
                $word_id= mysql_fetch_array($sql1);
                
              $sql2="insert into propose_definition_tbl(definition_id, word_id, definition, user_id) "
                . "SELECT null, $word_id[0], '$def', $user_id from dual "
                . "WHERE NOT EXISTS (SELECT $word_id[0] from propose_definition_tbl "
                . "where definition = '$def')";  

     
              
              if(mysql_query($sql2,$con)){                 
                  echo "<p style='color:green'>Your definition was successfully saved and waiting for approval by the admin...</p>";
                   ?>
                <script>                    
                    $("[type=text]").val('');
                    $("[type=textarea]").val('');

                </script>
              <?php
              }else{
                   echo "<p style='color:red'>Error!</p>";
                }
              
          
             
            
      
                           
         
           
  
mysql_close($con);
 
?>
