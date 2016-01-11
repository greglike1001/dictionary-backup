<nav class="w3-topnav w3-theme-d1" >
    <center>
  <a href="#" onClick="$('#addword_form').toggle('slow');">Add a Definition</a>
  
  <?php if(isset($_SESSION['u_lvl']) && $_SESSION['u_lvl']==3){ ?>
   
  <a href="propose_definition.php">Approve a Definition</a>   
  <a href="list_of_approved_definition.php">List of Definitions</a>   
  <?php }?>
</center>
</nav>
<br/>