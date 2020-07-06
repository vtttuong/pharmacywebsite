<?php
class BuyModel extends DB{
    // data

    public function fetchCategory(){
        try{
            $stmt = $this->conn->prepare("SELECT id,name FROM CATEGORY ");
            $stmt->execute();
            $ctgr = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $ctgr;
        }
        catch(PDOException $e)
        {
            die($e->getMessage());
        }
    }

    public function fetchProduct($id_ctgr){
        try{
            $stmt = $this->conn->prepare("SELECT id,name,img,price,quantity FROM PRODUCT WHERE id_category = :id_ctgr ");
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