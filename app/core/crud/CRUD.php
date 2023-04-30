<?php

class CRUD
{
    public $quest;

    function __construct($quest)
    {
        $this->quest=$quest;

        try{
            if($quest == 'create'){
                echo "create";
                die;
            }
            if($quest == 'read'){
                echo "read";
                die;
            }
            if($quest == 'update'){
                echo "update";
                die;
            }
            if($quest == 'delete'){
                echo "delete";
                die;
            }
            else{
                throw new Exception("method not fond!");
            }
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }


    function create()
    {
        $sql = "INSERT INTO `product`(`id`, `name`, `title`, `discription`, `price`, `image`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]')";
    }

    function read()
    {
        $sql = "SELECT * FROM `product` WHERE 1";
    }

    function update()
    {
        $sql = "UPDATE `product` SET `id`='[value-1]',`name`='[value-2]',`title`='[value-3]',`discription`='[value-4]',`price`='[value-5]',`image`='[value-6]' WHERE 1";
    }

    function delete()
    {
        $sql = "DELETE FROM `product` WHERE 0";
    }
}