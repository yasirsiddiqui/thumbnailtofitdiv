<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Example</title>
</head>
<body>
<?php

include_once 'thumbnail.class.php';

$obj = new Thumbnail();
?>
<div style="float:left; mergin-left:10px;">
<?php

$thumbnail = $obj->generateThumbnail("./DSC00722.JPG", "./DSC00722.JPG_thumb1.JPG", 50, 50);

if($thumbnail) {
?>	
	
	<div style="width:50px; height:50px; border:#F00 2px solid; display: table-cell; text-align: center; vertical-align: middle;">
	<img src="<?php echo $thumbnail;?>">
	</div>
<?php 	
}
?>
</div>
<div style="float:left;  margin-left:10px;">
<?php 

$thumbnail = $obj->generateThumbnail("./DSC00778.JPG", "./DSC00778.JPG_thumb2.JPG", 100, 110);

if($thumbnail) {
?>
	<div style="width:100px; height:110px; border:#F00 2px solid; display: table-cell; text-align: center; vertical-align: middle;">
	<img src="<?php echo $thumbnail;?>"></div>

<?php 
}

?>
</div>

<div style="float:left; margin-left:10px;">
<?php 

$thumbnail = $obj->generateThumbnail("./IMG_3994.JPG", "./IMG_3994.JPG_thumb3.JPG", 190, 290);
if($thumbnail) {
?>
	<div style="width:190px; height:290px; border:#F00 2px solid; display: table-cell; text-align: center; vertical-align: middle;">
	<img src="<?php echo $thumbnail;?>"></div>
	
<?php
}	
?>
</div>

<div style="float:left; margin-left:10px;">
<?php 

$thumbnail = $obj->generateThumbnail("./IMG_3994.JPG", "./IMG_3994.JPG_thumb4.JPG", 180, 160);
if($thumbnail) {
?>
	<div style="width:180px; height:160px; border:#F00 2px solid; display: table-cell; text-align: center; vertical-align: middle;">
	<img src="<?php echo $thumbnail;?>"></div>
	
<?php
}	
?>
</div>

<div style="float:left;  margin-left:10px;">
<?php

$thumbnail = $obj->generateThumbnail("./DSC00722.JPG", "./DSC00722_thumb5.JPG", 300,200);

if($thumbnail) {
?>	
	
	<div style="width:300px; height:200px; border:#F00 2px solid; display: table-cell; text-align: center; vertical-align: middle;">
	<img src="<?php echo $thumbnail;?>">
	</div>
<?php 	
}
?>
</div>

</body>
</html>