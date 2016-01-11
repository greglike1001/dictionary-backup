
<!DOCTYPE html>
<html lang="en">
<head>
<title>Online Kurdish to English Dictionary</title>
<meta charset="UTF-8" />


</head>
<body>   
    <section class="w3-container center my-screen">
        
    
        <?php        
           $con = mysql_connect("localhost","dictionary_user","dictionary_password")
                   or die ("Could not connect to server ... \n" ).  mysql_error();
          
            mysql_select_db("kurdish", $con)
                    or die ("Could not connect to database ... \n" ).mysql_error();
            
            mysql_query("set names 'utf8'");
            mysql_query("set CHARACTER set 'utf8'",$con);
            mb_internal_encoding("UTF-8");
            @mysql_query("set global character_set_results=utf8");
            
            $sql ="select * from KurDictionary order by id" ;
            
            

$result = mysql_query($sql);  
/*
 * word_id bigint unsigned not null auto_increment primary key,
                english varchar(50) not null,
                kurdish_en varchar(50) not null,
                kurdish_ku varchar(50
 * 
 * definition_id bigint unsigned not null auto_increment primary key,
                word_id bigint unsigned, foreign key (word_id) references word_tbl(word_id) on delete cascade,
                definition varchar(1000),
                user_id int unsigned , foreign key (user_id) references user_tbl(user_id) on delete restrict
 */
?>
       
        
      
        <?php 
        $ctr = 0;
        
        while($rs = mysql_fetch_array($result)){
            if($ctr%500==0){echo"INSERT INTO `definition_tbl` (`definition_id`, `word_id`, `definition`, `user_id`) VALUES <br/>";}
            //$definition = addslashes($rs[3]);
            $definition = mysql_real_escape_string(htmlspecialchars($rs[3]));
            
            echo "('$rs[0]','$rs[0]', '$definition', '3')";
            $ctr++;  
            if($ctr%500==0&& $ctr!=0){echo';';}else{ echo',';}
            echo"<br/>";
                 
        }
        
        ?>
<!--
<table border="1" cellspacing="0" cellpadding="0">
    <tr>
        <td>ID</td>
        <td>ENGLISH</td>
        <td>KURDISH(EN)</td>
       
    </tr>
     <?php //while($rs = mysql_fetch_array($result)){ ?>
     <tr>
     <td><?php //echo$rs[0]?></td>
     <td><?php //echo$rs[1]?></td>
     <td><?php //echo$rs[2]?></td>
     </tr>
  <?php //}?>           

</table>
-->	


    </section>
</body>
</html>
