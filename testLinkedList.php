<?php
include_once "Classes/MyLinkedList.php";

$myLinkedList = new MyLinkedList();
$myLinkedList->addFirst(1);
$myLinkedList->addLast(2);
$myLinkedList->addLast(3);
$myLinkedList->addLast(4);
$myLinkedList->addLast(5);
echo "<pre>";
var_dump($myLinkedList->removeBoolean(1));
echo "<br/>";
print_r($myLinkedList->readList());
