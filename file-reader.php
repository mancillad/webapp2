<?php

function fileData($fileName) {
    $file = fopen($fileName, 'r');

    while (($line = fgets($file)) !== false) {
        yield $line;
    }
}

foreach (fileData('bigData.csv') as $line)
//file operations

<?