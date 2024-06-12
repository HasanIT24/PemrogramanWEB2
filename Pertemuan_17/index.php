<?php
$i = 3;
if ($i > 4) { 
    echo "<h1>Halo</h1>"; 
}
else if ($i < 6){   
    echo"<h1> $i lebih kecil dari 6 </h1>";
}
else{
    header("Location: test.php"); 
}
?>
