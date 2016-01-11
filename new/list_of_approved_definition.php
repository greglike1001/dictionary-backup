<?php
session_start();
?>
<!DOCTYPE html>
<?php
 if(isset($_SESSION['u_lvl']) && $_SESSION['u_lvl']!=3){
        header("location:index.php");
    }else if(isset($_SESSION['u_lvl']) && $_SESSION['u_lvl']==3){

?>
<html lang="en">
<head>
<title>Online Kurdish to English Dictionary</title>
<?php include('head.php'); ?>   
</head>
<body>   
   <section class="w3-container center my-screen">
        <?php include('header.php'); ?>        
        <?php include('topnav.php'); ?>   
        
        
       
  

<?php
/* 
	VIEW-PAGINATED.PHP
	Displays all data from 'players' table
	This is a modified version of view.php that includes pagination
*/

	// connect to the database
	include('db/db_con.php');
	
	// number of results to show per page
	$per_page = 100;
	
	// figure out the total pages in the database
      
	$result = mysql_query("select w.word_id, w.english, w.kurdish_en, w.kurdish_ku, d.definition, d.definition_id, u.fname, u.lname,u.user_id,  u.location from word_tbl w, definition_tbl d, user_tbl u where w.word_id = d.word_id and d.user_id = u.user_id order by w.english");
        
        
        //echo "select w.word_id, w.english, w.kurdish_en, w.kurdish_ku d.definition, u.fname, u.lname, u.location from word_tbl w, propose_definition_tbl d, user_tbl u where w.word_id = p.word_id and p.user_id = u.user_id";
        
	$total_results = mysql_num_rows($result);
	$total_pages = ceil($total_results / $per_page);

	// check if the 'page' variable is set in the URL (ex: view-paginated.php?page=1)
	if (isset($_GET['page']) && is_numeric($_GET['page']))
	{ 
		$show_page = $_GET['page'];
		
		// make sure the $show_page value is valid
		if ($show_page > 0 && $show_page <= $total_pages)
		{
			$start = ($show_page -1) * $per_page;
			$end = $start + $per_page; 
		}
		else
		{
			// error - show first set of results
			$start = 0;
			$end = $per_page; 
		}		
	}
	else
	{
		// if page isn't set, show first set of results
		$start = 0;
		$end = $per_page; 
	}
	
	// display pagination        
    if($total_results!=0){?>
       <h3>List of Approved Definition</h3>
        <div class="table-container"> 
	<p class="motif"> <b>Page:</b> 
	
        <?php for ($i = 1; $i <= $total_pages; $i++)
	{ ?>
		<a href='list_of_approved_definition.php?page=<?php echo$i?>'><?php echo $i?></a> 
	<?php }?>
                
	</p>
		
	

	<table class="w3-table w3-striped w3-bordered" style="font-size: 12px">
	
              <tr> 
                <td text-aloign="center">ENGLISH</th>
                <td text-aloign="center">KURDISH (EN)</td>
                <td text-aloign="center">KURDISH (KU)</td>
                <td text-aloign="center">DEFINITION</td>
               <!-- <td text-aloign="center">DEFINE BY</td> -->
                <td></td>
            </tr>   
            
            
            
            
           
<?php
	// loop through results of database query, displaying them in the table	
	for ($i = $start; $i < $end; $i++)
	{
		// make sure that PHP doesn't try to show results that don't exist
		if ($i == $total_results) { break; } 
	
		// echo out the contents of each row into a table
              
                ?>
		
                
                		
            <tr>
               <td><?php echo mysql_result($result, $i, 'w.english')?></td> 
	       <td><?php echo mysql_result($result, $i, 'w.kurdish_en')?></td> 
               <td><?php echo mysql_result($result, $i, 'w.kurdish_ku')?></td> 
               <td><p><?php echo mysql_result($result, $i, 'd.definition')?></p></td>
               <!--<td ><?php// echo mysql_result($result, $i, 'u.fname');?> <?php //if(mysql_result($result, $i, 'u.lname')!=null){echo " ". mysql_result($result, $i, 'u.lname')." of ". mysql_result($result, $i, 'u.location');}?></td> -->
               <td class="manage_word">   
                        <a style="color:#0033cc" href="<?php echo "edit_approved_definition.php?definition_id=".mysql_result($result, $i, 'd.definition_id')?>">Edit</a> 
                        <a style="color:red" href="<?php echo "delete_word.php?word_id=".mysql_result($result, $i, 'w.word_id').'&location=list_of_approved_definition.php'?>">Delete</a>
     
               </td>
	</tr>
        
	<?php }?>
	</table>
        <?php }else{?>
        
        <p> No definition to display...</p>
        <?php }?>
        </div>
	



  
    </section>
</body>
</html>
<?php
     }else{ ?>
       <script>  
        window.location="logout.php"        

        </script>
    <?php 
    }    
    ?>

<?php mysql_close($con);?>

  

