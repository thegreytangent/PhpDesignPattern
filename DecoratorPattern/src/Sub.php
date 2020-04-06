<?php
	
	namespace App;
	abstract class Sub {
		
		public function make() {
			return $this->layBread()->addLetuce()->addPrimaryToppings()->addSauces();
		}
		
		
		abstract function addPrimaryToppings();
		
		
		protected function layBread() {
			var_dump("laying down the bread");
			return $this;
		}
		
		
		protected function addLetuce() {
			var_dump("Add Letuce");
			return $this;
		}
		
		
		protected function addSauces() {
			var_dump("Add saucees");
			return $this;
		}
		
	}