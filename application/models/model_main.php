<?php

use RepositotyBD\Creator;
use RepositotyBD\Project;

include ('application/Repository/RepositoryDB.php');
class Model_Main extends Model
{
    public function get_data()
    {

        if(isset($_POST['add_product'])){

            $sku =    $_POST['sku'];
            $name =   $_POST['name'];
            $price=   $_POST['price'];
            $type  =  $_POST['type'];
            $_POST['size'] == ''  ?  $size =  "NULL" : $size = $_POST['size'];
            $_POST['width'] == '' ?  $width = "NULL" : $width = $_POST['width'];
            $_POST['weight'] == '' ? $weight = "NULL" : $weight  = $_POST['weight'];
            $_POST['height'] == '' ? $height = "NULL" : $height = $_POST['height'];
            $_POST['length'] == '' ? $length = "NULL" : $length = $_POST['length'];

            $project = new Project();
            $project->insert_DB($sku,$name, $price,$type, $size, $weight, $width, $height ,$length );
            $data = $project->GetProduct();
            return $data;
        }elseif(isset($_POST['delete'])){
            $arr = $_POST['check'];
            $project = new Project();
            foreach ($arr as $id){
               $project->delete_DB($id);
            }
            $data =  $project->GetProduct();
            return $data;

        } else{
            $project = new Project();
            $data =  $project->GetProduct();
            return $data;
        }



    }









}