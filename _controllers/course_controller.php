<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 11/04/2019
 * Time: 12:51
 */


if (isset($_POST)  && !empty($_POST) ) {

    $image=$_FILES['image']['name'];
    $path='/assets/img/';
    importImg($path,$image);
    Cours::insertCourse($_POST['cour'],$image,$_POST['niveau']);
    var_dump($image);
    exit();
}

$niveau=Cours::allNiveau();

$cours=Cours::allCours();