<head>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl;?>/xhtml/html/information.css">
</head>

<ul>
	<?php foreach ($model as $links){?>
		<li><a href="<?php echo $links->links;?>"><?php echo $links->name?></a></li>
	<?php }?>
</ul>