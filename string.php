<?php

$single_quote = 'single quote';
$name = 'PHP';
$double_quote = "$name is a great language";
$long_string = <<<LONGDOC
A multiline string
will look like this
and wrap in HEREDOC
LONGDOC;

echo $double_quote . PHP_EOL;

echo $long_string . PHP_EOL;


// string manipulation

