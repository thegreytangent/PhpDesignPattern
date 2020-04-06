<?php
	
	namespace App;
	class VeggieSub extends Sub {
		
		
		public function addPrimaryToppings() {
			return $this->addVeggies();
		}
		
		
		public function addVeggies() {
			var_dump("Add Veggies");
			return $this;
		}
		
		
	}