<?php
/**
 * Created by PhpStorm.
 * User: liudas
 * Date: 18.4.19
 * Time: 14.10
 */

require 'BooksShop.php';

$Repo = new BooksShop();
$book = $Repo->getBook($_GET['id']);

    echo "<ul>".
            "<li> id: ". $book->getId()." </li>".
            "<li> title: ". $book->getTitle()." </li>".
            "<li> release year: ". $book->getYear()." </li>".
        "</ul>";

