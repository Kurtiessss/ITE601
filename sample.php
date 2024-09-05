 <?php



 private string Sfirstname = "Kurt"; 
 private string Slastname = "Alonso";

 private int $prelim 78;

 private int $midterm 80;

 private int $endterm 90;

 public function computeFinalGrades() {

 $ave=$this->prelim Sthis->midterm + $this->endterm; $ave $ave=$this->prelim $this->midterm + $this->endterm; $ave


return $ave /3;


}

public function getCompleteName(): string ( {
}

return $this->lastname.", ".$this->firstname; 


public function DisplayGrade(): string ( {

return number format($this->compute FinalGrades(),2;

}


$studentGrade = new studentGrade ();
echo "Student Name: ". $studentGrade ->getCompleteName() . "<br/>";
echo "Final Grade ": $studentGrade->computeFinalGrades();




?>