
<?php
	//include our connection
	include 'dbconfig.php';
	$imgSelect = "SELECT * FROM products WHERE rowid = '".$_GET['id']."'";
	$query = $db->query($imgSelect);
    $fetch = $query->fetchArray();
	//delete the row of selected id
	if(unlink("uploads/".$fetch['imageName'])){
	$sql = "DELETE FROM products WHERE rowid = '".$_GET['id']."'";
	$db->query($sql);
 
    echo "<script>window.location='index.php'</script>";
	}
?>