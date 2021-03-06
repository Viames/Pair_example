<?php 

use Pair\Breadcrumb;

$breadcrumb = Breadcrumb::getInstance();
$breadcrumb->disableLastUrl();

if (is_a($breadcrumb, 'Pair\Breadcrumb') and count($breadcrumb->getPaths())) {
	
	?>
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb"><?php
	
	foreach ($breadcrumb->getPaths() as $item) {
		
		if (property_exists($item,'active') and $item->active) {
			?><li class="breadcrumb-item"><?php
		} else {
			?><li class="breadcrumb-item active" aria-current="page"><?php
		}
		
		if ($item->url) {
			?><a href="<?php print $item->url ?>"><?php print $item->title ?></a><?php
		} else {
			print $item->title;
		}
		
		?></li><?php
		
	}
	
		?></ol>
	</nav><?php

}