<?php
/*
	This file is loaded before start the theme
	You can add some configuration code in this file
*/

// Background image
// If the first page doesn't have a cover image or an image the background is taken from Unsplash images
$backgroundImage = 'https://source.unsplash.com/1600x900/?nature';
if ($page->coverImage()===false) {
	$domImage = DOM::getFirstImage($page->content());
	if ($domImage!==false) {
		$backgroundImage = $domImage;
	}
} else {
	$backgroundImage = $page->coverImage();
}

// Social Networks for icons in the footer
$socialNetworks = array(
	'github'=>'Github',
	'twitter'=>'Twitter',
	'facebook'=>'Facebook',
	'instagram'=>'Instagram',
	'codepen'=>'Codepen',
	'linkedin'=>'Linkedin'
);
