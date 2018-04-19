<?php
/**
 * Created by PhpStorm.
 * User: liudas
 * Date: 18.4.19
 * Time: 18.17
 */

require 'Book.php';

class BooksShop
{


    public function getBook($id){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "Books";

        $connect = new mysqli($servername, $username, $password, $dbname);

        if ($connect->connect_error) {
            die("Connection failed: " . $connect->connect_error);
        }

        $sql = 'SELECT * FROM Books.Books WHERE `bookId` = '.$id;

        $result = $connect->query($sql);

        $book = new Book();
        if ($result->num_rows > 0) {
            // output data of each row
            echo "<ul>";
            while($row = $result->fetch_assoc()) {

                $book->setId($row["bookId"]);
                $book->setTitle($row["title"]);
                $book->setYear($row["year"]);
            }
        } else {
            echo "0 results";
        }
        $connect->close();

        return $book;
    }
    public function getAll(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "Books";

        $connect = new mysqli($servername, $username, $password, $dbname);

        if ($connect->connect_error) {
            die("Connection failed: " . $connect->connect_error);
        }

        $sql = 'SELECT * FROM Books.Books';

        $result = $connect->query($sql);
        $books = [];
        if ($result->num_rows > 0) {
            // output data of each row
            echo "<ul>";
            while($row = $result->fetch_assoc()) {

                $book = new Book();
                $book->setId($row["bookId"]);
                $book->setTitle($row["title"]);
                $book->setYear($row["year"]);
                array_push($books, $book);
            }
        } else {
            echo "0 results";
        }
        $connect->close();

        return $books;
    }

}
