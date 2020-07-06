<?php
class HomeModel extends DB{
    // data

    public function fetchCategory($start,$limit){
        try{
            $stmt = $this->conn->prepare("SELECT id,name FROM CATEGORY LIMIT $start,$limit");
            $stmt->execute();
            $ctgr = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $ctgr;
        }
        catch(PDOException $e)
        {
            die($e->getMessage());
        }
    }

    public function fetchProduct($id_ctgr,$start,$limit){
        try{
            $stmt = $this->conn->prepare("SELECT id,name,img,price,quantity FROM PRODUCT WHERE id_category = :id_ctgr LIMIT $start,$limit");
            $stmt->execute(["id_ctgr"=>$id_ctgr]);
            $product = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $product;
        }
        catch(PDOException $e)
        {
            die($e->getMessage());
        }
    }
}