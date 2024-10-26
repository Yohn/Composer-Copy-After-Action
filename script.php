<?php


file_put_contents('YOHN-LOOK.txt', __DIR__);
echo 'done';
exit(1);
//
//$source = __DIR__.'/../yohns/composer-copy-after-action/test-copy.php';
//$destination = __DIR__.'/../../lib/Config/test-copy.php';
//
////$source = __DIR__.'/testing-copy.php'; // Path within the vendor package
////$destination = '/config/testing-copy.php'; // Destination in the root project
//
////echo $source.PHP_EOL;
////echo $destination.PHP_EOL;
////exit(0);
//// Make sure the destination directory exists
//$exit = [];
//if (!is_dir(dirname($destination))) {
//	$exit[] = 'Config directory missing, creating now..';
//	mkdir(dirname($destination), 0755, true);
//}
//if(is_file($destination)) {
//	$exit[] = 'Config file found, re-naming it for backup.';
//	rename($destination, $destination.'-backup.php');
//}
//if (!copy($source, $destination)) {
//	$exit[] = "Failed to copy $source...\n";
//} else {
//	$exit[] = "Config file copied to $destination\n";
//}
//echo implode("\n", $exit);
//exit(1);