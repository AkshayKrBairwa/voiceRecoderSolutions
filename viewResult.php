<?php
        $hname ='xxx.xxx.xxx.xx';
        $uname = 'xxxxx';
        $pass = 'xxxxxxx';
        $db = 'xxxxxx';
$conn = mysqli_connect($hname, $uname, $pass, $db);
if(!$conn){
    die("Cannot Connect to Database".mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="alb">
		<?php 
		 $sql = "SELECT * FROM `heb` ORDER BY `id` DESC";
		 $res = mysqli_query($conn, $sql);

		 if (mysqli_num_rows($res) > 0) {
		 	while ($audio = mysqli_fetch_assoc($res)) { 
		 ?>
		 		
	        <audio src="uploads/<?=$audio['audio_url']?>" 
	        	   controls>
	        	
            </audio>

	    <?php 
	     }
		 }else {
		 	echo "<h1>Empty</h1>";
		 }
		 ?>
	</div>
    
</body>
</html>
