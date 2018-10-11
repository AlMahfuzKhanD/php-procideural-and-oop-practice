<?php
/**
 * Created by PhpStorm.
 * User: Mahfuz
 * Date: 11-Oct-18
 * Time: 6:51 PM
 */



$file = "Example.txt";
if($handle= fopen($file,'r')){
    echo $content = fread($handle,filesize($file)); // each bite = 1 character
    fclose($handle);
}else{
    echo "The files could not be written";
}
?>