<?php

function checkInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
function debug($var)
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}

function importImg($path, $img){
    $image = checkInput($img);
    $imageExtension = pathinfo($path.$image,PATHINFO_EXTENSION);
    if(strtolower($imageExtension) == "jpg" || $imageExtension == "png" || $imageExtension == "jpeg" || $imageExtension == "gif" )
    {
        $tmp_name = $img['tmp_name'];
        move_uploaded_file($tmp_name, $path.$image);
    }
}
function importVid($path, $img){
    $image = checkInput($img['name']);
    $imageExtension     = pathinfo($path.$image,PATHINFO_EXTENSION);
    if(strtolower($imageExtension) == "mp4" || $imageExtension == "mkv" )
    {
        $tmp_name = $img['tmp_name'];
        move_uploaded_file($tmp_name, $path.$image) ;
    }
}
function addClassStage($a,$b){
    if($a == $b) echo "selected";
}
function acc($a,$b){
    if(md5(sha1(md5($a))) == $b){
        echo "active";
    }
}
function id1($a,$b){
    if(md5(sha1(md5($a))) == $b){
        echo "one";
    }
}
function id2($a,$b){
    if(md5(sha1(md5($a))) == $b){
        echo "two";
    }
}
function id3($a,$b){
    if(md5(sha1(md5($a))) == $b){
        echo "three";
    }
}

function validFrom($tab){

    $var = 0;
    $var1 = 0;
    foreach ($tab as $i){
        $var1 ++;
        if(!empty($i)){
            $var ++;
        }else{
            $var --;
        }
    }
    if($var == $var1){
        return true;
    }else{
        return false;
    }
}
function retClass($word){
    if($word == "html"){
        return "fab fa-html5";
    }elseif ($word == "css"){
        return "mdi mdi-language-css3";
    }elseif ($word == "javascript"){
        return "fab fa-node-js";
    }else{
        return "fa fa-code";
    }
}
function retColor($word){
    if($word == "html"){
        return "primary";
    }elseif ($word == "css"){
        return "danger";
    }elseif ($word == "javascript"){
        return "warning";
    }else{
        return "primary";
    }
}
function retColorI($word){
    if($word == "html"){
        return "#4798e8";
    }elseif ($word == "css"){
        return "#ef6e6e";
    }elseif ($word == "javascript"){
        return "#ffbc34";
    }else{
        return "#7460ee";
    }
}

function retClassx($word){
    $word = strtolower($word);
    if($word == "bash"){
        return "mdi mdi-linux";
    }elseif ($word == "c"){
        return "mdi mdi-language-c";
    }elseif ($word == "c++"){
        return "mdi mdi-language-cpp";
    }elseif ($word == "c#"){
        return "mdi mdi-language-csharp";
    }elseif ($word == "java"){
        return "success";
    }elseif ($word == "javascript"){
        return "fab fa-node-js";
    }elseif ($word == "python 3"){
        return "fab fa-python";
    }elseif ($word == "html"){
        return "fab fa-html5";
    }elseif ($word == "php"){
        return "fab fa-php";
    }
}
function retColorx($word){
    $word = strtolower($word);
    if($word == "bash"){
        return "danger";
    }elseif ($word == "c" || $word == "c++" || $word == "c#"){
        return "primary";
    }elseif ($word == "java"){
        return "success";
    }elseif ($word == "javascript"){
        return "warning";
    }elseif ($word == "python 3"){
        return "dark";
    }elseif ($word == "html"){
        return "info";
    }elseif ($word == "php"){
        return "purple";
    }
}
function retColorIx($word){
    $word = strtolower($word);
    if($word == "bash"){
        return "#ef6e6e";
    }elseif ($word == "c" || $word == "c++" || $word == "c#"){
        return "#4798e8";
    }elseif ($word == "java"){
        return "#20c997";
    }elseif ($word == "javascript"){
        return "#ffbc34";
    }elseif ($word == "python 3"){
        return "#343a40";
    }elseif ($word == "html"){
        return "#01c0c8";
    }elseif ($word == "php"){
        return "#7460ee";
    }
}

function firstCode($one, $two){
    if ($one == $two){
        return 'active';
    }
}
function rip($text){
    $text = str_replace("\n","",$text);
    $text = str_replace("\r","",$text);
    $text = str_replace("\t","",$text);
    return $text;

}
function retCode($i){
    $tab = ['Bash','C','C++','c#','JavaScript','Python 3','Html 5','Php 7'];
    return $tab[$i];
}
function ck($a){
return md5(sha1(md5($a)));
//return md5($a);
}
function getGround($id, $code, $lang){
    if ($lang == "html"){
        return "CodeFight-html-$id-$code";
    }elseif ($lang == "php"){
        return "CodeFight-php-$id-$code";
    }else{
        return "CodeFight-Play-Practice-$id-$code";
    }
}