<?php

return [
    'languages' => true,
    'debug' => true,

    
    // Markdown plugin
	'community.markdown-field.buttons'    => [['h1', 'h2', 'h3', 'h4', 'h5', 'h6'], 'bold', 'italic', 'divider', 'link','pagelink', 'email', 'file', 'divider', 'ul', 'ol', 'blockquote'],
	'community.markdown-field.font'       => [
		'family'  => 'sans-serif',
		'scaling' => true,
		'size'    => 'regular',
	],
	'community.markdown-field.query'      => [
		'pagelink' => null,
		'images'   => 'page.images',
		'files'    => 'page.files.filterBy("type", "!=", "image")',
	],
	'community.markdown-field.modals'     => true,
	'community.markdown-field.blank'      => false,
	'community.markdown-field.invisibles' => false,
	'panel' =>[
		'install' => true
	  ]
];


return array(
);