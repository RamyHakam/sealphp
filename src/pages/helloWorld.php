<?php
/**
 * @author Ramy Hakam
 * src/pages/helloWorld.php
 */

$name = isset($name)? $name : 'World';
echo "Hello {$name}";
