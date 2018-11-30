<?php
/**
 * Created by PhpStorm.
 * User: niels
 * Date: 30-11-2018
 * Time: 09:47
 */


print_r($_POST);

//echo "<img src='img/".$_POST['voorwerp'].".png'>";
print_r($_POST['voorwerp']);
foreach ($_POST['voorwerp'] as $voorwerpen) {
    echo "<img src='img/".$voorwerpen.".png'>";
}
