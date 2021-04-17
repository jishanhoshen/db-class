<?php
require "function.php";
$singlePost = new singlePost(1);
echo "<pre>";
print_r($singlePost->postTitle());
echo "</pre>";