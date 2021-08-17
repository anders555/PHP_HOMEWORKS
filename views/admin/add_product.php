<?php 
// debug($_POST);
if (!empty($_POST)) {
  $data = $_POST;
  $data['price'] = (int) $data['price'];

  $allowedTypes = ['image/jpeg', 'image/png'];
  if (!empty($_FILES['image']) && in_array($_FILES['image']['type'] ?? null, $allowedTypes)) {
      $image = rand(1, 1000).$_FILES['image']['name'];
      $to = __DIR__ . '/../../assets/img/' . $image;
      move_uploaded_file($_FILES['image']['tmp_name'], $to);
      $data['image'] = '/assets/img/' . $image;
  } else {
    $image = '/assets/img/941war-logo.jpg';
  }
  $sql = "INSERT INTO products (name, price, image) 
VALUES ('{$data['name']}', '{$data['price']}', '$image')";
  $res = mysqli_query($connection, $sql);

}



?>

<div class="container-fluid">
  <form method="post" enctype="multipart/form-data">
      <div class="form-group">
          <label>Название товара</label>
          <input type="text" class="form-control" name="name">
      </div>
      <div class="form-group">
          <label>Цена товара</label>
          <input type="text" class="form-control" name="price">
      </div>
      <div class="form-group">
          <label>Изображение товара</label>
          <input type="file" class="form-control" name="image">
      </div>


      <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>