<?php

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sach san pham</title>
</head>
<body>
<h2>Danh sach san pham</h2>
<form method="post" action="http://localhost/bill-manager/src/index.php?home=search">
    <input type = "text" name ='value'>
    <select name = "option">
        <option value="name" name = "name">Ten</option>
        <option value="email" name = "type">Loai san pham</option>
        <option value="address" name = "price">Gia tien</option>
        <option value="name" name = "quantum">So luong</option>
        <option value="email" name = "date">Ngay</option>
        <option value="address" name = "description">Mo ta</option>
    </select>
    <button type="submit">Tim kiem</button>
</form>
<table class="table">
    <tr style="background-color:pink">
        <td>STT</td>
        <td>Ten san pham</td>
        <td>Loai san pham</td>
        <td>Gia tien</td>
        <td>So luong</td>
        <td>Ngay</td>
        <td>Mo ta</td>
        <td>Tuy chon</td>
    </tr>
    <?php foreach ($product as $key => $product): ?>
        <tr>
            <td><?php echo ++$key ?></td>
            <td><?php echo $product[1]->name ?></td>
            <td><?php echo $product[1]->type ?></td>
            <td><?php echo $product[1]->price ?></td>
            <td><?php echo $product[1]->quantum ?></td>
            <td><?php echo $product[1]->date ?></td>
            <td><?php echo $product[1]->description ?></td>
            <td>
                <a class ="btn btn-success"      href= "index.php/?home=delete&id=<?php echo $product[0]; ?>"  onclick= "return confirm('Bạn chắc chắn muốn xoá?')">Delete</a>
                <a  class ="btn btn-success" href="index.php/?home=update&id=<?php echo $product[0]; ?>" >Update</a>
                <a class ="btn btn-success"  href="index.php/?home=add&id=<?php echo $product[0]; ?>" >Add</a>
            </td>
        </tr>
    <?php endforeach; ?>



</table>

</body>
</html>
