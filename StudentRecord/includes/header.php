<?php include("anchor_config.php");?>
<?php include_once('db.php');?>


<!DOCTYPE html>

<head>
    <title><?php print $PAGE_TITLE;?></title>
    
    <?php if ($CURRENT_PAGE == "Index") { ?>
        <meta name="description" content="Students Records"/>
    <?php } ?>
    
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"  type="text/css" href="bootstrap.min.css">
    <!--<link rel="stylesheet"  type="text/css" href="custom.css">-->


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<html>
<body>