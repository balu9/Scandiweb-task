<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scandiweb</title>
    <script src="../../public/javascript/typeSwitcher.js"></script>
</head>

<body>
    <h1>Product Add</h1>
    <input type="button" value="Cancel" class="pBtn1" onClick="document.location.href='http://localhost/test-Scandiweb/products';" />
<input type="submit" form="product_form" value="Save" class="pBtn2" >
<hr>
 
<p id="err"></p>
    <form onsubmit="return validate()" action="http://localhost/test-Scandiweb/products/createProduct" id="product_form" method="POST">
        <label for="SKU">SKU: </label>
        <input type="text" name="SKU" id="sku" required><br></br>
        <label for="name">Name: </label>
        <input type="text" name="name" id="name" required><br></br>
        <label for="price">Price: </label>
        <input type="text" name="price" pattern="[0-9.]+" id="price" required><br></br>

        <select name="typeSwitcher" id= "productType" onchange="catg()">
            <option value="DVD">DVD</option>
            <option value="Book">Book</option>
            <option value="Furniture">Furniture</option>
        </select><br></br>

        <div id="DVD">
            <label for="size">Size: </label>
            <input type="text" name="size" id="size"  pattern="[0-9]+">
            <p>Please, provide size in MB</p><br></br>
        </div>
        
        <div id="Furniture" style="display:none">
            <label for="height">Height: </label>
            <input type="text" name="height" id="height" pattern="[0-9]+"><br></br>
             <label for="width">Width: </label>
            <input type="text" name="width" id="width" pattern="[0-9]+"><br></br>
            <label for="length">Length: </label>
            <input type="text" name="length" id="length" pattern="[0-9]+">
            <p>Please, provide dimensions in HxWxL format</p><br></br>
        </div>
        

        <div id="Book" style="display:none">
            <label for="weight">Weight: </label>
            <input type="text" name="weight" id="weight"  pattern="[0-9]+">
            <p>Please, provide weight in KiloGrams (KG).</p><br></br>
        </div>

        
        

    </form>
<style>
 .pBtn1 {
  background-color: white;
  margin-top: -55px;
  margin-right: 70px;
  color: black;
  padding: 5px 10px;
  float:  right;
  cursor: pointer;
}

    .pBtn2 {
  background-color: white;
  margin-top: -55px;
  margin-right: 170px;
  color: black;
  padding: 5px 10px;
  float:  right;
  cursor: pointer;
}

#product_form {
    margin-left: 25px;
}

#err{
    text-align: center;
    font-size: x-large;
    color: red;
}
    
</style>

</body>

</html>