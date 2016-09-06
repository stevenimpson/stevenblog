<?php

$data['site'] = array(
	'name' => 'Stevens Blog',
);

$data['cats'] = Timber::get_terms('category');
$data['menu'] = new TimberMenu('header-menu');