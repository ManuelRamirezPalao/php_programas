<?php
$numero = 13;
$rosa = 'color';
$rosa = 'color2';
const PATH1='php_Programas/variables.php';
echo PATH1;
define('PATH2','cursoPHP');

function test(){
global $rosa;
echo $rosa;
}
test();
print_r(get_defined_constants(true));

 ?>
