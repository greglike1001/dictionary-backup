        <?php        
           $con = mysql_connect("localhost","dictionary_user","dictionary_password")
                   or die ("Could not connect to server ... \n" );
          
            mysql_select_db("dictionary_db", $con)
                    or die ("Could not connect to database ... \n" );
            
           mysql_query("set names 'utf8'");
            mysql_query("set CHARACTER set 'utf8'",$con);
            mb_internal_encoding("UTF-8");
            @mysql_query("set global character_set_results=utf8");
            ?>

