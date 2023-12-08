<?php


if (isset($_COOKIE["mailID"])){
    setcookie("mailID", 0, time() - (86400 * 30), "/");
    
    echo '<script>
        alert("Logged Out");
        window.location.replace("./");
    </script>';
}
else{
    echo '<script>
        alert("Login First");
        window.location.replace("./");
    </script>';
}


?>