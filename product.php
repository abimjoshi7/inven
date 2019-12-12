<?php ob_start();
  $page_title = 'All Product';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   page_require_level(2);
  $products = join_product_table();
?>

<?php include_once('layouts/header.php'); ?>

  <div class="row">

    <div class="col-md-12">
      <div class="panel panel-default filterable">
        <div class="panel-heading clearfix">
         <div class="pull-right">
           <a href="add_product.php" class="btn btn-primary">Add New</a>
         </div>
         <div class="pull-left">
          <button class="btn btn-primary btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
         </div>
        </div>
        <div class="panel-body">
          <table class="table table-bordered">
            <thead>
              <tr class="filters">
                <th><input type="text" class="form-control" placeholder="SKU" disabled></th>
                <th>Image </th>
                <th><input type="text" class="form-control" placeholder="Name" disabled></th>
                <th><input type="text" class="form-control" placeholder="Description" disabled></th>
                <th><input type="text" class="form-control" placeholder="Category" disabled></th>
                <th><input type="text" class="form-control" placeholder="Instock" disabled></th>
                <th><input type="text" class="form-control" placeholder="Buy Price" disabled></th>
                <th><input type="text" class="form-control" placeholder="Sell Price" disabled></th>
                <th><input type="text" class="form-control" placeholder="Clarity" disabled></th>
                <th><input type="text" class="form-control" placeholder="Color" disabled></th>
                <th><input type="text" class="form-control" placeholder="Cut" disabled></th>
                <th><input type="text" class="form-control" placeholder="Action" disabled></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($products as $product):?>
              <tr>
                <!-- <td class="text-center"><?php echo count_id();?></td> --> 
                <td> <?php echo remove_junk($product['id']); ?></td> 
                <td>
                  <?php if($product['media_id'] === '0'): ?>
                    <img class="img-avatar img-circle" src="uploads/products/no_image.jpg" alt="">
                  <?php else: ?>
                  <img class="img-avatar img-circle" src="uploads/products/<?php echo $product['image']; ?>" alt="">
                <?php endif; ?>
                </td>
                
                <td> <?php echo remove_junk($product['name']); ?></td>
                <td class="text-center"> <?php echo remove_junk($product['cut_type']); ?></td>
                <td class="text-center"> <?php echo remove_junk($product['category']); ?></td>
                <td class="text-center"> <?php setlocale(LC_MONETARY, 'en_IN'); $product['quantity'] = money_format('%!i', $product['quantity']); echo remove_junk($product['quantity']); ?></td>
                <td class="text-center"> <?php setlocale(LC_MONETARY, 'en_IN'); $product['buy_price'] = money_format('%!i', $product['buy_price']); echo remove_junk($product['buy_price']); ?></td>
                <td class="text-center"> <?php setlocale(LC_MONETARY, 'en_IN'); $product['sale_price'] = money_format('%!i', $product['sale_price']);
                echo remove_junk($product['sale_price']); ?></td>
                <td class="text-center"> <?php echo remove_junk($product['clarity_scale']); ?></td>
                <td class="text-center"> <?php echo remove_junk($product['color_scale']); ?></td>
                <td class="text-center"> <?php echo remove_junk($product['cut_scale']); ?></td>
                
                
                

                <td class="text-center">
                  <div class="btn-group">
                    <a href="edit_product.php?id=<?php echo (int)$product['id'];?>" class="btn btn-info btn-xs"  title="Edit" data-toggle="tooltip">
                      <span class="glyphicon glyphicon-edit"></span>
                    </a>
                    <a href="delete_product.php?id=<?php echo (int)$product['id'];?>" class="btn btn-danger btn-xs"  title="Delete" data-toggle="tooltip">
                      <span class="glyphicon glyphicon-trash"></span>
                    </a>
                  </div>
                </td>
              </tr>
             <?php endforeach; ?>
            </tbody>
          </tabel>
        </div>
      </div>
    </div>
  </div>
  
 <?php include_once('layouts/footer.php'); ?>
