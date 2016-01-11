<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Online Kurdish to English Dictionary</title>
<?php include('head.php'); ?> 
  
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
  function renderForm($definition_id, $word_id, $english, $kurdish_en, $kurdish_ku, $definition, $error)
 {
 if ($error != '')
 {
 echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
 }
 ?> 
 <div class="table-container"> 
 <form action="" method="post">
 <input type="hidden" name="definition_id" value="<?php echo $definition_id; ?>"/>
 <input type="hidden" name="word_id" value="<?php echo $word_id; ?>"/>
  
     <table border="1">
               
         <tr><td width="130"><b class="float-right">ENGLISH: </b></td> <td><input type="text" name="english" disabled = "disabled" value="<?php echo $english;?>"/></td> </tr>
		<tr><td> <b class="float-right">KURDISH_EN: </b></td> <td><input type="text" name="kurdish_en" disabled = "disabled" value="<?php echo $kurdish_en;?>"/></td> </tr>  
                <tr><td> <b class="float-right">KURDISH_KU: </b></td> <td><input type="text" name="kurdish_ku" disabled = "disabled" value="<?php echo $kurdish_ku;?>"/></td>  </tr>
                <tr><td> <b class="float-right">DEFINITION: </b></td><td><textarea rows="4"  class="w3-input " type="text" name="definition" id="definition" style="width:100%"><?php echo $definition;?></textarea></td> </tr>
                <tr><td></td> <td height="40"><input type="submit" name="submit" value="Update"></td>
                    
		</tr>
                
                
     </table>
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
 // confirm that the 'id' value is a valid integer before getting the form data
 if (is_numeric($_POST['definition_id']))
 {
 // get form data, making sure it is valid
 $definition_id = mysql_real_escape_string(htmlspecialchars($_POST['definition_id']));
 $word_id = mysql_real_escape_string(htmlspecialchars($_POST['word_id']));
 $definition = mysql_real_escape_string(htmlspecialchars($_POST['definition']));
 if(isset($_SESSION['u_id'])){
    $user_id = $_SESSION['u_id'];
 }else{
     $user_id=0;
 }
 
 // check that product_name/volume fields are both filled in
 if ($definition == '')
 {
 // generate error message
 $error = 'ERROR: Please fill in all required fields!';
 
 //error, display form
  renderForm($definition_id, $word_id, $english, $kurdish_en, $kurdish_ku, $definition, '');
 }
 else
 {
 // save the data to the database
 $sql2="update definition_tbl set definition = '$definition' where definition_id = $definition_id";   
 
 mysql_query($sql2,$con) or die(mysql_error()); 
 
         
 // once saved, redirect back to the view page
    ?>
        <script>  
                window.location="list_of_approved_definition.php"        
        </script>
    <?php
 }
 }
 else
 {
 // if the 'id' isn't valid, display an error
 echo 'Error!';
 }
 }
 else
 // if the form hasn't been submitted, get the data from the db and display the form
 {
 
 // get the 'id' value from the URL (if it exists), making sure that it is valid (checing that it is numeric/larger than 0)
 if (isset($_GET['definition_id']) && is_numeric($_GET['definition_id']) && $_GET['definition_id'] >= 0)
 {
 // query db
 $definition_id = $_GET['definition_id'];
 $sql = "select w.word_id, w.english, w.kurdish_en, w.kurdish_ku, d.definition "
        . "from word_tbl w, definition_tbl d"
        . " where w.word_id = d.word_id and  d.definition_id = $definition_id";
 $result = mysql_query($sql) 
 or die(mysql_error()); 
 $row = mysql_fetch_array($result);
 
 // check that the 'id' matches up with a row in the databse
 if($row)
 {
     /*
 definition_id bigint unsigned not null auto_increment primary key,
                word_id bigint unsigned, foreign key (word_id) references word_tbl(word_id) on delete cascade,
                definition varchar(1000),
                user_id int unsigned , foreign key (user_id) references user_tbl(user_id) on delete restrict
      * 
      */
 // get data from db
 $word_id = $row['word_id'];
 $english = $row['english'];
 $kurdish_en = $row['kurdish_en'];
 $kurdish_ku = $row['kurdish_ku'];
 $definition = $row['definition'];
 
 
 // show form
 //$defination_id, $word_id, $definition, $user_id, $error
 renderForm($definition_id, $word_id, $english, $kurdish_en, $kurdish_ku, $definition, '');
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