<?php ob_start();
  $page_title = 'Add Media';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(1);
  
  // $all_media = find_all('media')
?>

<?php include_once('layouts/header.php'); ?>
<?php include 'upload.php'; ?>


<!DOCTYPE html>
<html>
<head>
	

<!-- <style type="text/css">
	.gallery img {
	width: 20%;
	height: auto;
	border-radius: 5px;
	cursor: pointer;
	transition: .3s;
	margin: 5px;

}
</style> -->
</head>
<body>
	<div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading clearfix">
			<p><strong><?php echo $statusMsg; ?></strong></p>
			
			<form class="form-inline" action="" method="post" enctype="multipart/form-data">
				<span class="glyphicon glyphicon-camera"></span><strong>Select Image Files to Upload:</strong>
				<input type="file" class="btn btn-primary" name="files[]" multiple >
				<input type="submit" class="btn btn-default" name="submit" value="UPLOAD">
			</form>
		  </div>
		</div>
	</div>	 
		<!-- <div class="gallery">
			<?php
// Include the database configuration file
			include_once 'includes/load.php';

// Get images from the database
			$query = $db->query("SELECT * FROM media ORDER BY id DESC");

			if($query->num_rows > 0){
				while($row = $query->fetch_assoc()){
					$imageURL = 'uploads/products/'.$row["file_name"];
					?>
					<img src="<?php echo $imageURL; ?>" alt="" />
				<?php }
			}else{ ?>
				<p><strong>No image(s) found...</strong></p>
			<?php } ?>
		</div> -->
	


</body>
</html>

<?php include_once('layouts/footer.php'); ?>
