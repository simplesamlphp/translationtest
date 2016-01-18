<?php
if (!function_exists("gettext")){
    echo "gettext is not installed\n";

    echo getlocales();
}
else{
    echo "gettext is supported\n";
}
?>
<ul>
    <li><a href="setlocale.php">setlocale</a>
</ul>
