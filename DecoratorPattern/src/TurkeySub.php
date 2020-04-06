<?php
	namespace App;
	class TurkeySub extends Sub {
		
		public function addPrimaryToppings() {
			return $this->addTurkey();
		}
		
		public function addTurkey() {
			var_dump("Add turkey");
			return $this;
		}
		
		
		
		
	}