<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Online Kurdish to English Dictionary</title>
<?php include('head.php'); ?>
 <script type="text/javascript" src="js/signup.js"></script>  
</head>
<body>   
    <section class="w3-container center my-screen"> 
         <?php include('header.php'); ?>        
        <?php include('topnav.php'); ?>   
         <div class="w3-half signup_con"  >
    <h2>Please Sign up Here</h2>
    <hr/>                   
    <form  name="signup_form" id="signup_form" method="post" >
       <div class="w3-group req">      
        <input class="w3-input" type="text" name="fname" id="fname" style="width:100%; text-transform: capitalize" required>
        <label class="w3-label">First Name</label>  
      </div>
      <div class="w3-group req">      
        <input class="w3-input" type="text" name="lname" id="lname" style="width:100%; text-transform: capitalize" required>
        <label class="w3-label">Last Name</label>
      </div>
      <div class="w3-group req input_container">      
        <input style="height:40px; width:100%" class="w3-input" onkeyup="autocomplet()" type="text" name="loc" id="loc" style="width:100%; text-transform: capitalize" required>
        <ul id="word_list" ></ul>   
        <label class="w3-label">Location</label>
      </div>
      <div class="w3-group req">      
        <input class="w3-input" type="text" name="uname" id="uname" style="width:100%" required  >
        <label class="w3-label">Username</label>
      </div>
      <div class="w3-group req">      
        <input class="w3-input" type="password" name="p1" id="p1" style="width:100%" required >
        <label class="w3-label">Password</label>
      </div>
      <div class="w3-group req">      
        <input class="w3-input" type="password" name="p2" id="p2" equalto="#p1" style="width:100%" required>
        <label class="w3-label">Re-type Password</label>
      </div>
      <input class="w3-input w3-theme-d1" type="submit" name="submit" id="submit" style="width:100%" value="Submit">  
      <br/>
      <p id="remark" style="text-align:center"></p>
     </form>
</div>

   
    </section>
</body>
</html>

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