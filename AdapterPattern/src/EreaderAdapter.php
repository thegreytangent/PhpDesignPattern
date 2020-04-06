<?php
	
	namespace Acme;
	class EreaderAdapter implements BookInterface {
		
		private $reader;
		
		
		public function __construct(eReaderInterface $reader) {
			$this->reader = $reader;
		}
		
		
		
		public function Open() {
			$this->reader->TurnOn();
		}
		
		
		public function TurnPage() {
			$this->reader->PressNextButton();
		}
	}