<?php
namespace Models;
use PDO;
class ProductModel{
    protected $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }
    public function add($product)
    {
        $sql = "INSERT INTO product (name, type, price,quantum,date,description) VALUES (?, ?, ?, ?, ?, ?)";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1,$product->name);
        $statement->bindParam(2,$product->type);
        $statement->bindParam(3,$product->price);
        $statement->bindParam(4,$product->quantum);
        $statement->bindParam(5,$product->date);
        $statement->bindParam(6,$product->description);
        return $statement->execute();

    }
    public function update($id, $product)
    {
        $sql = "UPDATE product SET name = ?, type = ? , price = ?,quantum = ?, date = ? , description = ? WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1,$product->name);
        $statement->bindParam(2,$product->type);
        $statement->bindParam(3,$product->price);
        $statement->bindParam(4,$product->quantum);
        $statement->bindParam(5,$product->date);
        $statement->bindParam(6,$product->description);
        $statement->bindParam(7,$id);
        return $statement->execute();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM product WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        return $statement->execute();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM product";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $products = [];
        foreach ($result as $row )
            {
                $product = new Product($row['name'],$row['type'],$row['price'],$row['quantum'],$row['date'],$row['description']);
                $products[] = [$row['id'], $product];
            }
        return $products;


    }
    public function get($id)
    {
        $sql = "SELECT * FROM product WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        $statement->execute();
        $result = $statement->fetchAll();
        $products = [];
        foreach ($result as $row )
        {
            $product = new Product($row['name'],$row['type'],$row['price'],$row['quantum'],$row['date'],$row['description']);
            $products[] = [$row['id'], $product];
        }
        return $products;


    }

    public function search($option,$value)
    {
        $sql = "SELECT * FROM `product` WHERE `$option` like '%$value%' ";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $products = [];
        foreach ($result as $row )
        {
            $product = new Product ($row['name'],$row['type'],$row['price'],$row['quantum'],$row['date'],$row['description']);
            $products[] = [$row['id'], $product];
        }
        return $products;
    }
}
?>