<?php
session_start();
include('db_con.php');
$password=hash('ripemd160', ($_REQUEST['p1']));
$username = $_REQUEST['uname'];
if(isset($username) && isset($password)){   
    $result = mysql_query("select fname,lname, user_lvl, user_id, password from user_tbl where username='$username' and password ='$password'");
        
    if(!$get_result = mysql_fetch_array($result)){
        echo"Invalid Username or Password...";
    }else {
        $_SESSION['u_name']=ucfirst($get_result[0])." ".ucfirst($get_result[1]);
        $_SESSION['u_lvl']=$get_result[2];        
        $_SESSION['u_id']=$get_result[3];
        ?>

<script>  
        window.location="index.php"        
</script>

    <?php
    }   
}
mysql_close($con);
?>