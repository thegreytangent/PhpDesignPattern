<?php
	
	namespace Acme;
	class Book implements BookInterface {
		
		public function Open() {
			var_dump("Opening a book");
		}
		
		
		public function TurnPage() {
			var_dump("Turning the page");
		}
		
	}