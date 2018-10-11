<?php
/**
 * Created by PhpStorm.
 * User: Mahfuz
 * Date: 11-Oct-18
 * Time: 6:46 PM
 */


$file = "Example.txt";
if($handle= fopen($file,'w')){
    fwrite($handle,'I love php,What is your name');
    fclose($handle);
}else{
    echo "The files could not be written";
}
?>