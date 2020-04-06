<?php
	
	namespace Acme;
	class Nook implements eReaderInterface {
		public function TurnOn() {
			var_dump("Turn Nook on");
		}
		
		public function PressNextButton() {
		 var_dump("Press next button on Nook");
		}
	}