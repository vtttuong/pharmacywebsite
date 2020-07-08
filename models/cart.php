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
            die('ERROR');
        }
    }

    public function checkout($cart,$user_id)
    {
        try{
            //calc total price
            $price = 0;
            $stmt = $this->conn->prepare("SELECT price FROM PRODUCT WHERE id=:id");
            foreach($cart as $ele)
            {
                $stmt->execute([":id"=>$ele[0]]);
                $p = $stmt->fetch(PDO::FETCH_ASSOC);
                $p = $p['price'];
                $price += $p*$ele[1];
            }

            //create order
            $stmt = $this->conn->prepare("INSERT INTO ORDERS(id_user,price) VALUES(:id_user,:price)");
            $stmt->execute([":id_user"=>$user_id,":price"=>$price]);
            
            //get id order
            $stmt = $this->conn->prepare("SELECT LAST_INSERT_ID()");
            $stmt->execute();
            $id = $stmt->fetch(PDO::FETCH_ASSOC);
            $id = $id["LAST_INSERT_ID()"];

            //add cart to db
            $stmt = $this->conn->prepare("INSERT INTO OP(id_order,id_product,quantity) VALUES(:id_order,:id_product,:quantity)");
            foreach($cart as $ele)
            {
                $stmt->execute([
                    ":id_order"=>$id,
                    ":id_product"=>$ele[0],
                    ":quantity"=>$ele[1]
                    ]);
            }
            return true;
        }
        catch(PDOException $e)
        {
            //die($e->getMessage());
            header("HTTP/1.1 400 Bad Request");
        }
    }
}