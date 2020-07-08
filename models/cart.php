<?php
class CartModel extends DB{
    // data

    public function fetchProduct($id)
    {
        try{
            $stmt = $this->conn->prepare("SELECT PRODUCT.id,PRODUCT.name,PRODUCT.img,CATEGORY.name as category,price FROM PRODUCT INNER JOIN CATEGORY ON PRODUCT.id_category = CATEGORY.id WHERE PRODUCT.id = :id");
            $stmt->execute([":id"=>$id]);
            $data = $stmt->fetch(PDO::FETCH_ASSOC);
            return $data;
        }
        catch(PDOException $e)
        {
            header("HTTP/1.1 500 ERROR SERVER");
            die(ERROR);
        }
    }

}