<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="container">
        <form action="<?php echo URL_ROOT; ?>/products/delete" method="POST">
            <h1>Product List</h1>
            <div class="btns">
                <a href="<?php echo URL_ROOT; ?>/products/createProduct" id="add-btn">ADD</a>
                <input type="submit" name="delete" value="MASS DELETE" id="delete-product-btn">
            </div>
            
           <hr>

            <?php foreach ($data['products'] as $product) : ?>
                <div class="main">
                    <input type="checkbox" class="delete-checkbox" name="product_ids[]" value="<?php echo $product->id; ?>">

                    <?php echo $product->SKU ?><br>
                    <?php echo $product->name ?><br>
                    <?php
                    if ($product->price) {
                        echo $product->price . '$';
                    }
                    ?><br>
                    <?php
                    if ($product->size>0) {
                        echo 'Size: ' . $product->size . 'MB';
                    }
                    ?>
                    <?php
                    if ($product->height>0) {
                        echo 'Dimensions: ' . $product->height . 'x',
                        $product->width . 'x',
                        $product->length;
                    }
                    ?>
                    <?php
                    if ($product->weight>0) {
                        echo 'Weight: ' . $product->weight . 'KG';
                    }
                    ?>
                </div>
            <?php endforeach; ?>
        </form>
    </div>
    <style>
        #add-btn{
            margin-right: 25px;
            background-color: #daf2c4;
            color: black;
            padding: 10px 12px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
        }
    
    #delete-product-btn{
            background-color: #ffd4d1;
            color: black;
            padding: 12px 16px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            border: none;
            cursor: pointer;
    }

.container h1 {
  margin: 50px;
}

.container .main {
  font: bold 12px "Helvetica Neue", Helvetica, Arial, sans-serif;
  float: left;
  height: 75px;
  width: 150px;
  margin: 50px;
  text-align: center;
  padding: 30px;
  border: 3px solid black;
}

.container .btns {
  float: right;
  margin: -80px 60px;
} 
    </style>
</body>
</html>