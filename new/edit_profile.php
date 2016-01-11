<?php
session_start();
if(!isset($_SESSION['u_name'])){
  header("Location: login.php");
  exit();
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Online Kurdish to English Dictionary</title>
<?php include('head.php'); ?> 
  <script type="text/javascript" src="js/update_user.js"></script>  
</head>
<body>   
    <section class="container center my-screen">
        <?php include('header.php'); ?> 
        <?php include('topnav.php'); ?> 
        <div class="w3-clear"></div>
        <?php function success($msg){?>
     <div class="center w3-half" style=" float: none"><?php echo $msg?></div>
     <?php }?>
        
 <?php 
 // if there are any errors, display them
 /*
  * user_id int unsigned not null auto_increment primary key,
		fname varchar(20),
                lname varchar(20),
		location varchar(30), foreign key (location) references country_tbl(country) on delete restrict,
                username varchar(20) unique,
                password varchar(100),
  */
  function renderForm($user_id, $fname, $lname, $location, $username,  $error)
 {
 if ($error != '')
 {
 echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
 }
 ?> 
 <div class="w3-half signup_con"  >
 <form  name="signup_form" id="signup_form" method="post" >
 <input type="hidden" name="user_id" value="<?php echo $user_id; ?>"/>
 
       <div class="w3-group req">      
        <input class="w3-input" type="text" value="<?php echo $fname;?>" name="fname" id="fname" style="width:100%; text-transform: capitalize" required >
        <label class="w3-label">First Name</label>  
      </div>
      <div class="w3-group req">      
        <input class="w3-input" type="text" value="<?php echo $lname;?>" name="lname" id="lname" style="width:100%; text-transform: capitalize" required>
        <label class="w3-label">Last Name</label>
      </div>
      <div class="w3-group req input_container">      
        <input style="height:40px; width:100%" value="<?php echo $location;?>" class="w3-input" onkeyup="autocomplet()" type="text" name="loc" id="loc" style="width:100%; text-transform: capitalize" required>
        <ul id="word_list" ></ul>   
        <label class="w3-label">Location</label>
      </div>
      <div class="w3-group req">      
        <input class="w3-input" type="text" value="<?php echo $username;?>" name="uname" id="uname" style="width:100%" required  >
        <label class="w3-label">Username</label>
      </div>
      <div class="w3-group req">      
        <input class="w3-input" value=""type="password" name="p1" id="p1" style="width:100%" required >
        <label class="w3-label">New Password</label>
      </div>
      <div class="w3-group req">      
        <input class="w3-input" value="" type="password" name="p2" id="p2" equalto="#p1" style="width:100%" required>
        <label class="w3-label">Re-type New Password</label>
      </div>
      <input class="w3-input w3-theme-d1" type="submit" name="submit" id="submit" style="width:100%" value="Submit">  
      <br/>
      <p id="remark" style="text-align:center"></p>
     </form>
</div>
<?php }?>  
    
    </section>
</body>
</html>
 <?php
 



 // connect to the database
include('db/db_con.php');
 
 // check if the form has been submitted. If it has, process the form and save it to the database
 if (isset($_POST['submit']))
 { 

 }
 else
 // if the form hasn't been submitted, get the data from the db and display the form
 {
 
 // get the 'id' value from the URL (if it exists), making sure that it is valid (checing that it is numeric/larger than 0)
 if (isset($_GET['user_id']) && is_numeric($_GET['user_id']) && $_GET['user_id'] >= 0)
 {
 // query db
 $user_id = $_GET['user_id'];
 $sql = "select * from user_tbl where user_id = $user_id";
 $result = mysql_query($sql) 
 or die(mysql_error()); 
 $row = mysql_fetch_array($result);
 
 // check that the 'id' matches up with a row in the databse
 if($row)
 {

 // get data from db
 $user_id = $row['user_id'];
 $fname = $row['fname'];
 $lname = $row['lname'];
 $loc = $row['location'];
 $uname = $row['username'];
 
 
 // show form
 //$defination_id, $word_id, $definition, $user_id, $error
 renderForm($user_id, $fname, $lname, $loc, $uname, '');
 }
 else
 // if no match, display result
 {
 echo "No results!";
 }
 }
 else
 // if the 'id' in the URL isn't valid, or if there is no 'id' value, display an error
 {
 echo 'Error!';
 }
 }
   
  
    ?>

                <script type="text/javascript">
function autocomplet() {
	var min_length = 0; // min caracters to display the autocomplete
	var keyword = $('#loc').val();
	if (keyword.length >= min_length) {
		$.ajax({
			url: 'db/get_country.php',
			type: 'POST',
			data: {keyword:keyword},
			success:function(data){
				$('#word_list').show();
				$('#word_list').html(data);
			}
		});
	} else {
		$('#word_list').hide();
	}
}

// set_item : this function will be executed when we select an item
function set_item(item) {
	// change input value
	$('#loc').val(item);
	// hide proposition list
	$('#word_list').hide();
}

function hide_wlist(){
    $('#word_list').hide();
}
</script>