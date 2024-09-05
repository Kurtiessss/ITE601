<?php

class payroll {

private string $firstname "Kurt";

private string $lastname = "Alonso";

private float $tax = 50;

private float $salary 500;

public function computeNet(): float { 
	return $net = $this->salary $this->tax;

}

public function getEmployeeName(): string {

return $this->lastname. $this->firstname; }

public function displayNet(): string { return number_format($this->computeNet(),2);

}

}

$payroll new payroll();

echo "Employee's Name: Spayroll->getEmployeeName(). "<br/>";

echo "Final Net: ". Spayroll->displayNet();

?>