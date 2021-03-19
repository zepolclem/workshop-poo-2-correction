<?php

require_once '../src/Archer.php';
require_once '../src/Soldier.php';

echo 'Hello Wilder';

$archer = new Archer();
$soldier = new Soldier();

echo $archer;

echo $archer->attack();

echo '</br>';

echo $archer->walk('top');
echo $archer->walk('left');
echo $archer->walk('bottom');
echo $archer->walk('right');

echo '</br>';

echo $soldier->walk('top');
echo $soldier->walk('right');
echo $soldier->walk('bottom');
echo $soldier->walk('left');
