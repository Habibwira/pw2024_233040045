<?php
echo date('j/n/y');
echo "<br>";
echo date('l, d F y');
echo "<br>";
echo time(); 
echo "<br>";
echo date("l", time() + 24 + 60 + 60 + 60 + 2024);
echo "<br>";
echo mktime(0, 0, 0, 9, 5, 2005);
