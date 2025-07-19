<?php

declare(strict_types=1);

use Parsing\NewsParser;

ini_set('display errors', 'on');
error_reporting(E_ALL);

require __DIR__ . '/autoload.php';
require __DIR__ . '/dump.php';

$parser = new NewsParser();
$parser->attributes = [
    'title' => 'parser name'
];
echo $parser->title;
echo '<br>';
dump($parser->titles);
echo '<br>';
$parser->title = 'New title name';
dump($parser->title);
echo '<br>';
dump(NewsParser::$staticProperty);
echo '<br>';
dump(NewsParser::CONST_NAME);
echo '<br>';
dump(NewsParser::callStaticMethod());
echo '<br>';
$parser([1, 2, 3, 4, 5, 6, 7]);
