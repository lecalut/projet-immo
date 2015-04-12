<?php
session_start();


?>
<div class="validation">


<?php
    $_SESSION['pseudo'] = 0;
    $_SESSION['id'] = 0;
?>   

    
 

</div>
<?php
header ("Refresh: 0;URL=index.php");
?>