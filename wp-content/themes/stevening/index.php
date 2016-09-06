<?php

$data = Timber::get_context();

require 'data.php';

$data['posts'] = Timber::get_posts(array('post_type' => 'post'));

Timber::render('home.twig', $data);