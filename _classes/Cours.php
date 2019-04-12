<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 11/04/2019
 * Time: 13:44
 */

class Cours
{
    static function insertCourse($cours,$image,$niveau){
        global $db;
        $stat = $db->query("INSERT INTO cours(titre,image,niveau) VALUES ('$cours','$image','$niveau')");
        header("location:course");
        return $stat->fetch();
    }
    static function allNiveau(){
        global $db;
        $stat=$db->prepare('SELECT * FROM niveau');
        $stat->execute([]);
        return $stat->fetchAll();
    }
    static function allCours(){
        global $db;
        $stat=$db->prepare('SELECT * FROM cours');
        $stat->execute([]);
        return $stat->fetchAll();
    }
}