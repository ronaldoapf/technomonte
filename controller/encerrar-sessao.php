<?php
    session_start();
    session_destroy();
    
    echo '
        <script type="text/javascript">
            alert("Volte sempre!");
            window.location="../view/login.php";
        </script>  
    ';
?>