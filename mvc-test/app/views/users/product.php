<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Product</title>
  <link rel="stylesheet" href="Background.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <div class="row">
    <div class="col-md-6 m-auto border border-info mt-3">

        <form action="">

        <div class="mb-3">
    <p class="text-center fw-bold fs-3 text-warn">Product Details</p>
    </div>

    <div class="mb-3">
    <label class="form-label">Product Name</label>
    <input type="text" name="Pname" class="form-control" placeholder="Enter Product Name">
        </div>

        <div class="mb-3">
        <label class="form-label">Product Price</label>
    <input type="text"name="Pprice" class="form-control" placeholder="Enter Product Price">
        </div>
    
    <div class="mb-3">
    <label class="form-label">Add Product Image</label>
    <input type="file" name="Pimage"class="form-control">
        </div>

        <div class="mb-3">
        <label class="form-label">Select Page Category</label>
    <select class="form-select" name="Pages">
  <option selected>Home</option>
  <option value="Shirt">Shirt</option>
  <option value="jeans">Pants</option>
  <option value="Jacket">Jacket</option>
</select>
        </div>
        <button name="submit" class="bg-info fs-3 fw-bold my-3 form-control">Upload</button>

            </form>
</body>
</html>