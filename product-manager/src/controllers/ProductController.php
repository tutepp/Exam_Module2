<?php
namespace Controller;
use models\Product;
use models\ProductModel;
use models\DBConnect;

class ProductController
{
    public $customerDB;

    public function __construct()
    {
        $DB = new DBConnect("mysql:host=localhost;dbname=market_manager", "admin", "19972008");
        $this->customerDB = new ProductModel($DB->connect());
    }

    public function show()
    {
        $product = $this->customerDB->getAll();
        include 'views/list.php';
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'views/add.php';
        } else {

            $name = $_POST['name'];
            $type = $_POST['type'];
            $price = $_POST['price'];
            $quantum = $_POST['quantum'];
            $description= $_POST['description'];
            $product = new Product($name,$type,$price,$quantum,$description);
            $this->customerDB->add($product);
            header('Location: index.php');
            include 'views/add.php';
        }
    }

    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $product = $this->customerDB->get($id);
            include 'views/update.php';
        } else {
            $id = $_POST['id'];
            $product = new Product($_POST['name'], $_POST['type'], $_POST['price'],$_POST['quantum'], $_POST['date'], $_POST['description']);
            $this->customerDB->update($id, $product);
            header('Location: index.php');
            include 'views/update.php';
        }
    }

    public function delete()
    {
        $id = $_GET['id'];
        $this->customerDB->delete($id);
        header('Location: index.php');
    }

    public function search()
    {

        $_SERVER['REQUEST_METHOD']= 'POST';
         $option = $_POST['option'];
         $value = $_POST['value'];
         $product = $this->customerDB->search($option, $value);
         include 'views/search.php';
    }

}

?>