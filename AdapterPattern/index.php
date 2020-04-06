<?php
	require "vendor/autoload.php";
	use Acme\Book;
	use Acme\Kindle;
	use Acme\BookInterface;
	use Acme\EreaderAdapter;
	
	class Person {
	    public function Read(BookInterface $book) {
	    	$book->Open();
	    	$book->TurnPage();
		}
    }
    
    
    echo (new Person())->Read(new  EreaderAdapter(new \Acme\Nook()));


    
    