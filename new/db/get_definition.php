<?php
session_start();
include('db_con.php');
$word = $_REQUEST['english'];
$sql="select w.word_id, w.english, w.kurdish_en, w.kurdish_ku, d.definition, d.definition_id, u.fname, u.lname,u.user_id,  u.location "
        . "from word_tbl w, definition_tbl d, user_tbl u "
        . "where w.word_id = d.word_id and d.user_id = u.user_id and "
        . "(w.english like '%$word%' || w.kurdish_en like '%$word%' || w.kurdish_ku like '%$word%' || d.definition like '%$word%')";
//$result = mysql_query($sql);
$result2 = mysql_query($sql);

if(!$rs = mysql_fetch_array($result)){
    $sql="select w.word_id, w.english, w.kurdish_en, w.kurdish_ku, d.definition, d.definition_id, u.fname, u.lname,u.user_id,  u.location "
        . "from word_tbl w, definition_tbl d, user_tbl u "
        . "where w.word_id = d.word_id and d.user_id = u.user_id and "
        . "(d.definition like '%$word%')";
    
    $result = mysql_query($sql);
    
   //echo $sql."<br/><br/> 222 ";
 
    
    
} ?>

<style type="text/css">
    .table_style1{
        text-align: left;
        font-size: 16px;
        width: 100%;
        font-weight: 600;
    }
    .table_style1 td{
        color: #356986;
        padding: 4px;
    }
    .table_style1 td b.float-right{
        color: #90150F;
    }
    .table_style1 tr:nth-of-type(odd){
        background: #FFFDF0;
    }
</style>

<?php
while ($rs = mysql_fetch_array($result2)){ ?>
<table class="table_style1">

    <tr><td><b class="float-right">Kurdish (Latin): </b></td><td><?php echo$rs[2]?></td></tr>
    <?php if ($rs[3]!=""){?>
    <tr><td><b class="float-right">Kurdish (Kurdi): </b></td><td><?php echo$rs[3]?></td></tr>
    <?php }?>
    <tr><td><b class="float-right">English Meaning: </b></td><td><p><?php echo$rs[4]?></p></td></tr>
    <tr><td><b class="float-right">Defined by: </b></td><td><?php echo$rs[6]." ". $rs[7]?><?php if($rs[8]!=0){ echo" of ".$rs[9];}?></td></tr>
    <tr> <td height="40"></td><td class="manage_word">
            <a style="color:#0033cc" href="<?php echo "new/edit.php?definition_id=".$rs[5]?>">Edit</a> 
            <?php  if(isset($_SESSION['u_lvl']) && $_SESSION['u_lvl']==3){?>
            <a style="color:red" href="<?php echo "new/delete_word.php?word_id=".$rs[0].'&location=../'?>">Delete</a>
            <?php }?>           
                    </td>
		</tr></table><hr>
                    <?php }?>
    

<?php

    //echo" <p style='color:red; text-align: left'>No definition  found...</p>";

mysql_close($con);
?>
<div style="border-bottom: 1px solid gray"></div>