<?php
	
	namespace Acme;
	class Kindle implements eReaderInterface {
		public function TurnOn() {
			var_dump("Turn kindle on");
		}
		
		public function PressNextButton() {
		 var_dump("Press next button on kindle");
		}
	}