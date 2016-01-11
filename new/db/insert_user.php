<?php
include('db_con.php');      

	$fname = addslashes($_REQUEST['fname']);
        $lname = addslashes($_REQUEST['lname']);
	$email = addslashes($_REQUEST['email']);
	$uname= addslashes($_REQUEST['uname']);
        $p1=hash('ripemd160', $_REQUEST['p1']);
        
        $sql2=mysql_query("select username from user_tbl where username='$uname'");
        $get_user=mysql_fetch_array($sql2);    

        
	$sql="insert into user_tbl values (null, '$fname','$lname','$email','$uname','$p1',1)";
	
      
             if (!mysql_query($sql,$con)){              
                if($get_user[0]!=""){echo"<p style='color:red'>Username not available...</p>";}
                else{echo "<p style='color:red'>There's an error in saving your information...</p>";

                }
            }else{
               echo "<p style='color:green'>Success!";
               ?>
                <script>                    
                    $("[type=text]").val('');
                    $("[type=password]").val('');
                    var seconds =1;
 interval = setInterval(function() {
         if (seconds===0) {
            window.location="login.php" 
        }

        seconds--;
    }, 1000);
                </script>

<?php
            
        }
mysql_close($con);
?>