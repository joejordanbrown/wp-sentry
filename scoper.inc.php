<?php

declare( strict_types=1 );

use Isolated\Symfony\Component\Finder\Finder;

return [
	'prefix' => 'WPSentry\\ScopedVendor',

	'finders' => [
		Finder::create()
		      ->files()
		      ->ignoreVCS( true )
		      ->notName( '/LICENSE|.*\\.md|.*\\.dist|Makefile|composer\\.json|composer\\.lock/' )
		      ->exclude( [
			      'doc',
			      'test',
			      'test_old',
			      'tests',
			      'Tests',
			      'vendor-bin',
		      ] )
		      ->in( 'vendor' ),
		Finder::create()->append( [
			'composer.json',
		] ),
	],

	'whitelist' => [
		'Sentry\*',
		'Monolog\*',
	],

	'files-whitelist' => [
		'vendor/ralouphie/getallheaders/src/getallheaders.php',
	],

	'whitelist-global-classes'   => true,
	'whitelist-global-constants' => true,
	'whitelist-global-functions' => true,
];
