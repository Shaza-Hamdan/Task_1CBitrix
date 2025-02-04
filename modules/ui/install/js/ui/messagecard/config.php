<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'css' => 'dist/messagecard.bundle.css',
	'js' => 'dist/messagecard.bundle.js',
	'rel' => [
		'main.core',
		'main.core.events',
		'ui.design-tokens',
		'ui.fonts.opensans',
	],
	'skip_core' => false,
];
