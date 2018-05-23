<?php

define('DS', DIRECTORY_SEPARATOR);

// load kirby
require(__DIR__ . DS . 'kirby' . DS . 'bootstrap.php');

// check for a custom site.php
if(file_exists(__DIR__ . DS . 'site.php')) {
  require(__DIR__ . DS . 'site.php');
} else {
  $kirby = kirby();
}

// load minifier
require(__DIR__ . DS . 'library' . DS . 'magic-min' . DS . 'class.magic-min.php');

// load less compiler
require(__DIR__ . DS . 'library' . DS . 'lessc.inc.php');

// get less variables file with ass. array of vars $lessvars
require(__DIR__ . DS . 'assets' . DS . 'less' . DS . 'variables.php');

// less files to compile
$styles = [
	'main',
	'slider',
    'galerie',
	'buttons',
	'footer',
    'typo'
];

// init less compiler and throw exception on fail
$less = new lessc;
$less->setVariables($lessvars);
foreach($styles as $fname) {
	try {
		$inputFile = __DIR__ . DS . 'assets' . DS . 'less' . DS . $fname . '.less';
		$outputFile = __DIR__ . DS . 'assets' . DS . 'css' . DS . $fname . '.css';

		// create a new cache object, and compile
		$cache = $less->cachedCompile($inputFile);

		file_put_contents($outputFile, $cache["compiled"]);

		// the next time we run, write only if it has updated
		$last_updated = $cache["updated"];
		$cache = $less->cachedCompile($cache);
		if ($cache["updated"] > $last_updated) {
		   file_put_contents($outputFile, $cache["compiled"]);
		}
	} catch (exception $e) {
	  echo "fatal error: " . $e->getMessage();
	}
}


// minify styles
$minified = new Minifier();
ob_start();
$minified->merge(__DIR__ . '/assets/css/main.min.css', __DIR__ . '/assets/css', 'css', array(__DIR__ . '/assets/css/main.min.css'));
ob_end_clean();


// render
echo $kirby->launch();
