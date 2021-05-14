<!---->
<!--<form method="post" action="">-->
<!--    <b>Update thong tin khach hang</b> </br>-->
<!--    <input type="text" name="id" value="--><?php //echo $product[0][0]; ?><!--" hidden>-->
<!--    <label class="form-label">Tên</label>-->
<!--    <input type="text" name="name" value="--><?php //echo $product[0][1]->name; ?><!--">-->
<!--    </br>-->
<!--    <label class="form-label" >Email</label>-->
<!--    <input type="email" name="type" value="--><?php //echo $product[0][1]->type; ?><!--">-->
<!--    </br>-->
<!--    <label class="form-label" >Địa chỉ</label>-->
<!--    <input type="text" name="price"value="--><?php //echo $product[0][1]->price; ?><!--">-->
<!--    </br>-->
<!--    <label class="form-label" >Email</label>-->
<!--    <input type="email" name="quantum" value="--><?php //echo $product[0][1]->quantum; ?><!--">-->
<!--    </br>-->
<!--    <label class="form-label" >Địa chỉ</label>-->
<!--    <input type="text" name="date"--><?php //echo $product[0][1]->date; ?><!--">-->
<!--    </br>-->
<!--    <label class="form-label" >Địa chỉ</label>-->
<!--    <input type="text" name="description"date="--><?php //echo $product[0][1]->description; ?><!--">-->
<!--    </br>-->
<!--    <button type="submit"class="btn btn-primary">Update</button>-->
<!--    <a type="button" href="index.php" class="btn btn-secondary">Quay lại</a>-->
<!--</form>-->
<?php
?>
<b>Update san pham</b>
<form method="post">

    <div class="form-group">
        <label class="form-label">Ten san pham</label>
        <input type="text" name="name" value="<?php echo $product[0][1]->name; ?>">
    </div>

    <div class="form-group">
        <label class="form-label">Loai san pham</label>
        <input type="text" name="type"  value="<?php echo $product[0][1]->type; ?>">
    </div>

    <div class="form-group">
        <label class="form-label">Gia san pham</label>
        <input type="text" name="price" value="<?php echo $product[0][1]->price; ?>">
    </div>

    <div class="form-group">
        <label class="form-label">So luong</label>
        <input type="text" name="quantum" value="<?php echo $product[0][1]->quantum; ?>">
    </div>


    <div class="form-group">
        <label class="form-label">Mo ta</label>
        <input type="text" name="description" value="<?php echo $product[0][1]->description; ?>">
    </div>
    </br>
    <button type="submit" >Lưu</button>
    <a type="button" href="index.php" class="btn btn-secondary">Quay lại</a>
</form>
</div>
