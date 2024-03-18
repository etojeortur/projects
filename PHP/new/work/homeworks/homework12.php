<?php
$file_hello = file_put_contents("/homeworks/Hello.txt", 'Hello, world!');
$content_hello = file_get_contents("/homeworks/Hello.txt");
echo $content_hello;
