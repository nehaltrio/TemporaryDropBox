<?php 

include 'config.php';

$id = $_GET['id']; // Get id from url bar

if (!$id) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="styles.css">

	<title>File Upload PHP Script - Pure Coding</title>
</head>
<body>
	<div class="file__upload">
		<div class="header">
			<p><i class="icon3"></i><span><span>Down</span>load</span></p>			
		</div>
		<form class="body">
			<div class="download">
                <?php 
                    
                $sql = "SELECT * FROM uploaded_files WHERE id='$id'";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    if ($row = mysqli_fetch_assoc($result)) {
                ?>
                <a href="uploads/<?php echo $row['new_name']; ?>" download="<?php echo $row['name']; ?>" class="download_link"><?php echo $row['name']; ?></a>
                <?php
                    }
                }
                
                ?>
            </div>
		</form>
	</div>
</body>
</html>