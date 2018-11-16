<?php
if(!empty($_REQUEST['maker'])&&!empty($_REQUEST['model'])){
    $maker= $_REQUEST['maker'];
    $model =$_REQUEST['model'];
    echo("You added new item: <b>$maker $model</b><br />");
}
if(!empty($_REQUEST['year'])){
    $year = $_REQUEST['year'];
    if(2018-$year!=0){
        $diff=2018-$year;
        echo("produced in $year ($diff years old) with <b>" . $_REQUEST['engine'] . "</b> engine </br>");
    }
    else{
        echo("produced in $year with " . $_REQUEST['engine'] . " engine </br>");
    }
}
$text1="yes";
$text2="yes";
$text3="yes";
if(empty($_REQUEST['text1']) ){
    $text1 = "none";
} 
if(empty($_REQUEST['text2'])){
    $text2 = "none";
} 
if(empty($_REQUEST['text3'])){
    $text3 = "none";
}
echo 'Tax payed : <b>'.$text1.'</b></br>';
echo 'Technical check passed :<b>'.$text2.'</b></br>';
echo 'Doesnt require investment :<b>'.$text3.'</b></br>';
echo '<b>$'.$_REQUEST['price'];
?>