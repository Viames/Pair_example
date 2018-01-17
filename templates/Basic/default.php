<?php

/**
 * @version	$Id$
 * @author	Viames Marino
 */

use Pair\Application;

$app = Application::getInstance();

?><!DOCTYPE html>
<html lang="<?php print $this->langCode ?>">
	<head>
		<base href="<?php print BASE_HREF ?>" />
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <title><?php print $this->pageTitle ?></title>
	    <?php print $this->pageStyles ?>
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
		<link rel="stylesheet" href="<?php print $this->templatePath ?>css/simple-sidebar.css">
		<link rel="stylesheet" href="<?php print $this->templatePath ?>css/toastr.css">
	    <link rel="stylesheet" href="<?php print $this->templatePath ?>css/custom.css">
	</head>
	<body>
	    <div id="wrapper">
	    	<div id="sidebar-wrapper">
		    	<ul class="sidebar-nav">
				<?php print $this->sideMenuWidget ?>
				</ul>
	        </div>
	        <div id="page-content-wrapper">
				<div class="container-fluid">
					<div id="messageArea"></div>
					<h2><?php print $app->pageTitle ?></h2>
					<?php print $this->breadcrumbWidget ?>
					<?php print $this->pageContent ?>
					<?php print $this->log ?>
				</div>
	        </div>
	    </div>
		<?php print $this->pageScripts ?>
	    <script defer src="https://use.fontawesome.com/releases/v5.0.4/js/all.js"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
		<script src="<?php print $this->templatePath ?>js/jquery.cookie.js" type="text/javascript"></script>
		<script src="<?php print $this->templatePath ?>js/toastr.js" type="text/javascript"></script>
		<script src="<?php print $this->templatePath ?>js/custom.js" type="text/javascript"></script>
	</body>    
</html>