<?php mail('greg.mclellan93@gmail.com', $_POST['name'], $_POST['email'], $_POST['message'], $_POST['reason']); ?> <p>Your email has been sent.</p>

echo "<script>
             alert('message sent succesfully'); 
             window.history.go(-1);
     </script>";