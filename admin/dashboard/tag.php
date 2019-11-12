<?php

//style query
require_once('../../classes/DB.php');
require_once('../../classes/Tag.php');
if($_POST){

    if(empty(DB::query('SELECT * FROM tag WHERE name =:name', array('name'=>$_POST['name']))[0]['name'])){
    DB::query('INSERT INTO `tag`(`name`, `description`) VALUES
     (:name,:description)',array(
         'name'=> $_POST['name'],
         'description'=> $_POST['description']
     ));
     $msg ='<div class="alert alert-success"> Tag was successfully saved!</div>';
    }else{

        $msg ='<div class="alert alert-danger"> Tag name already exist</div>';
        
    }
        
};

// print_r(Style::index());


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
                <h5 class="card-title">Tag</h5>
              </div>
              <?php
        if($_POST){
            echo $msg;
        }
    ?>
              <div class="card-body">
                <form action="tag.php" method="POST">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label> Tag Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Tag name" required value="">
                      </div>
                    </div>
                    
                  </div>
                  
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Size Description</label>
                        <textarea name="description" placeholder="Tag description" class="form-control textarea" required></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary btn-round">Add Tag</button>
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
                <h4 class="card-title">Tag</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <tr>
                      <th>
                        ID
                      </th>
                      <th>
                        Name
                      </th>
                      <th>
                        Description
                      </th>
                      
                    </tr></thead>
                    <tbody>
                      <?php foreach(Tag::index() as $tag){ ?>
                      <tr>
                        <td>
                         <?php echo $tag['id'] ?>
                        </td>
                        <td>
                        <?php echo $tag['name'] ?>
                        </td>
                        <td>
                        <?php echo $tag['description'] ?>
                        </td>
                        <td class="text-right">
                          <a href="delete_tag.php?id=<?php echo $tag['id'] ?>">Delete Tag</a>
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