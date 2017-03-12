<?php
// Think of this page as a "controller", this is where all your PHP logic will go.
// Here you will require anything necessary to your files "Config, functions etc."
// Your PHP logic will go here
$page['title'] = 'Contact';

$contactOptions = [
['name' => 'web design', 'value' => 'web'],
['name' => 'hosting', 'value' => 'hosting'],
['name' => 'graphic design', 'value' => 'graphics']
];

require 'views/contact.view.php';