<?php

// File Inclusion Vulnerability
$file = $_GET['page']; 
if ($file) {
	include($file);
} else {
	include("index.html");
}

