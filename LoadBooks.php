<?php
/**
 * Created by PhpStorm.
 * User: liudas
 * Date: 18.4.19
 * Time: 12.15
 */
require 'BooksShop.php';

$Repo = new BooksShop();
$books = $Repo->getAll();
echo "<ul>";
    foreach($books as $book)
        echo "<li> <a href=\"BookDetails.php?id=".$book->getId()."\">".$book->getTitle()."</a></li>";
echo "</ul>";
