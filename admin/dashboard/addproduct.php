<?php
require_once('../../classes/DB.php');
require_once('../../classes/Style.php');
require_once('../../classes/Fabric.php');
require_once('../../classes/Size.php');
require_once('../../classes/Tag.php');
require_once('../../classes/Product.php');

if($_POST['create'] == '1'){

  if(empty(DB::query('SELECT * FROM products WHERE name =:name', array('name'=>$_POST['name']))[0]['name'])){

    $image = $_FILES['image']['name'];
    $new = uniqid('', true). '.' . $image;
    $target = "images/".basename($new);

  DB::query('INSERT INTO `products`(`name`, `price`, `description`, `color`, `style_id`, `size_id`, `fabric_id`, `tag_id`, `num`, `image`)
   VALUE
   (:name,:price,:description,:color,:style_id,:size_id,:fabric_id,:tag_id,:num,:image)',array(
       ':name'=> $_POST['name'],
       ':price'=> $_POST['price'],
       ':description'=> $_POST['description'],
       ':color'=> $_POST['color'],
       ':style_id'=> $_POST['style_id'],
       ':size_id'=> $_POST['size_id'],
       ':fabric_id'=> $_POST['fabric_id'],
       ':tag_id'=> $_POST['tag_id'],
       ':num'=> $_POST['num'],
       ':image'=> $new

   ));
   move_uploaded_file($_FILES['image']['tmp_name'], $target);
   $msg ='<div class="alert alert-success"> Product was successfully saved!</div>';
  }else{
      $msg ='<div class="alert alert-danger"> Product name already exist</div>';   
  }
      
};

if($_POST['update']== '2'){
  $image = $_FILES['image']['name'];
    $new = uniqid('', true). '.' . $image;
    $target = "images/".basename($new);

  DB::query('UPDATE `products` SET `name`=:name,`price`=:price,`description`=:description,`color`=:color,`style_id`=:style_id,`size_id`=:size_id,`fabric_id`=:fabric_id,`tag_id`=:tag_id,`num`=:num, `image`=:image WHERE id=:id',array(
       ':name'=> $_POST['name'],
       ':price'=> $_POST['price'],
       ':description'=> $_POST['description'],
       ':color'=> $_POST['color'],
       ':style_id'=> $_POST['style_id'],
       ':size_id'=> $_POST['size_id'],
       ':fabric_id'=> $_POST['fabric_id'],
       ':tag_id'=> $_POST['tag_id'],
       ':num'=> $_POST['num'],
       ':image'=> $new,
       ':id'=> $_POST['id']
  ));
  move_uploaded_file($_FILES['image']['tmp_name'], $target);
  
    $msg ='<div class="alert alert-success"> Product was successfully updated!</div>';
};




?>


<?php include_once('_header.php')?>
     <?php include_once('_nav.php')?>
     
      <!-- <div class="panel-header panel-header-lg">
  
  <canvas id="bigDashboardChart"></canvas>
  
  
</div> -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Add Product</h5>
              </div>
              <?php
        if($_POST){
            echo $msg;
        }
    ?>
              <div class="card-body">
                <form action="addproduct.php" method="POST" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Product Name</label>
                        <input name="name" type="text" class="form-control" placeholder="Product Name" value="<?php if(isset($_GET['update'])){ echo Product::show($_GET['update'])['name'];} ?>" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <label>Price</label>
                        <input type="number" class="form-control" name="price" placeholder="Enter Price" value="<?php if(isset($_GET['update'])){ echo Product::show($_GET['update'])['price'];} ?>" required>
                      </div>
                    </div>
                  </div>
                 
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Style</label>
                        <select name="style_id" class="form-control" required>
                          <option value="">-Please Select Style-</option>
                          <?php if(isset($_GET['update'])){ ?>

                            <option selected value="<?php if(isset($_GET['update'])){ echo Product::show($_GET['update'])['style_id'];} ?>">
                            <?php echo Style::show(Product::show($_GET['update'])['style_id'])['name'] ?>
                           </option>
                          <?php } ?>
                          <?php
                            foreach(Style::index() as $style){?>
                               <option value="<?php echo $style['id'] ?>"> <?php echo $style['name'] ?></option>
                           <?php }?>
                         
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Fabric</label>
                        <select name="fabric_id" class="form-control" required>
                          <option value="">-Please Select Fabric-</option>
                          <?php if(isset($_GET['update'])){ ?>
                          <option selected value="<?php if(isset($_GET['update'])){ echo Product::show($_GET['update'])['fabric_id'];} ?>">
                          <?php echo Fabric::show(Product::show($_GET['update'])['fabric_id'])['name'] ?>
                          </option>
                          <?php } ?>
                          <?php
                            foreach(Fabric::index() as $fabric){?>
                               <option value="<?php echo $fabric['id'] ?>"> <?php echo $fabric['name'] ?></option>
                           <?php }?>
                         
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Tag</label>
                        <select name="tag_id" class="form-control" required>
                          <option value="">-Please Select Tag-</option>
                          <?php if(isset($_GET['update'])){ ?>
                            <option selected value="<?php if(isset($_GET['update'])){ echo Product::show($_GET['update'])['tag_id'];} ?>">
                            <?php echo Tag::show(Product::show($_GET['update'])['tag_id'])['name'] ?>
                            </option>
                            <?php } ?>
                          <?php
                            foreach(Tag::index() as $tag){?>
                               <option value="<?php echo $tag['id'] ?>"> <?php echo $tag['name'] ?></option>
                           <?php }?>
                         
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Available Count</label>
                        <input type="number" class="form-control" name="num" placeholder="Enter Available number of product" value="<?php if(isset($_GET['update'])){ echo Product::show($_GET['update'])['num'];} ?>" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Size</label>
                        <select name="size_id" class="form-control" required>
                          <option value="">-Please Select Size-</option>\
                          <?php if(isset($_GET['update'])){ ?>
                            <option selected value="<?php if(isset($_GET['update'])){ echo Product::show($_GET['update'])['size_id'];} ?>">
                            <?php echo Size::show(Product::show($_GET['update'])['size_id'])['name'] ?>
                            </option>
                            <?php } ?>
                          <?php
                            foreach(Size::index() as $size){?>
                               <option value="<?php echo $size['id'] ?>"> <?php echo $size['name'] ?></option>
                           <?php }?>
                         
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Color</label>
                        <input type="text" class="form-control" name="color" placeholder="Product Color" value="<?php if(isset($_GET['update'])){ echo Product::show($_GET['update'])['color'];} ?>" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                    <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="customFile" accept='image/*'>
                        <label class="custom-file-label" for="customFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Product Description</label>
                        <textarea name="description" class="form-control textarea"><?php if(isset($_GET['update'])){ echo Product::show($_GET['update'])['description'];} ?></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">

                    <?php
                    if(isset($_GET['update'])){?>  
                      <input type="hidden" name="id" value="<?php echo $_GET['update'] ?>" />
                      <input type="hidden" name="update" value="2" />
                       <button type="submit" class="btn btn-primary btn-round">Update Product</button>
                    <?php }else{?>
                      <input type="hidden" name="create" value="1" />
                        <button type="submit" class="btn btn-primary btn-round">Add Product</button>
                   <?php  }?>
                     
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Products</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <tr>
                      <th>
                        Name
                      </th>
                      <th>
                        Price
                      </th>
                      <th>
                        Description
                      </th>
                      <th>
                        Color
                      </th>
                      <th>
                       Size
                      </th>
                      <th>
                       Fabric
                      </th>
                      <th>
                       Tag
                      </th>
                      <th>
                       Count
                      </th>
                      <th>
                      </th>
                      <th>
                      </th>
                    </tr>
                  </thead>
                    <tbody>
                      <?php
                      
                      foreach(Product::index() as $product){
                      ?>
                      <tr>
                        <td>
                          <?php echo $product['name'] ?>
                        </td>
                        <td>
                        <?php echo $product['price'] ?>
                        </td>
                        <td>
                        <?php echo $product['description'] ?>
                        </td>
                        <td>
                        <?php echo $product['color'] ?>
                        </td>
                        <td>
                        <?php echo Size::show($product['size_id'])['name'] ?>
                        </td>
                        <td>
                        <?php echo Fabric::show($product['fabric_id'])['name'] ?>
                        </td>
                        <td>
                        <?php echo Tag::show($product['tag_id'])['name'] ?>
                        </td>
                        <td>
                        <?php echo $product['num'] ?>
                        </td>
                        <td>
                          <a href="addproduct.php?update=<?php echo $product['id'] ?>">Edit</a>
                        </td>
                        <td class="text-right">
                          <a href="delete_product.php?id=<?php echo $product['id'] ?>">Delete</a>
                        </td>
                      </tr>
                      <?php }?>
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
        
      </div>
      
 <?php include_once('_footer.php') ?>