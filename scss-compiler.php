<?php
/*
SCSS Compiler 
By https://Doonaweb.ir
Based on https://scssphp.github.io/scssphp/
*
// Load scssphp library
require_once 'scssphp/scss.inc.php';

// Define input and output file paths
$scss_file = 'assets/scss/style.scss';
$css_file = 'style.css';

// Create scss compiler object
$compiler = new ScssPhp\ScssPhp\Compiler();

// Set scss file path as import path
$compiler->setImportPaths(dirname($scss_file));

// Set output style to compressed
$compiler->setOutputStyle('compressed');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	if (isset($_POST['action']) && $_POST['action'] == 'compile') {
		// Compile scss to css
		$compiled_css = $compiler->compile(file_get_contents($scss_file));

		// Save compiled css to file
		file_put_contents($css_file, $compiled_css);

		echo "کامپایل موفقیت آمیز بود.";
	} else {
		http_response_code(400);
		echo "Bad Request";
	}
} else {
	http_response_code(405);
	echo "Method Not Allowed";
}