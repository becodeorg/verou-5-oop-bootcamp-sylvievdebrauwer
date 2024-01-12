<?php
require_once("Group.php");
require_once("Student.php");

$group1 = new Group();
$group2 = new Group();

$student1 = new Student("Pad", 3);
$student2 = new Student("Vos", 5);
$student3 = new Student("Wezel", 6);
$student4 = new Student("Adder", 1);
$student5 = new Student("Uil", 9);
$student6 = new Student("Mr. Eekhoorn", 10);
$student7 = new Student("Mevr. Eekhoorn", 10);
$student8 = new Student("Meneer Fazant", 4);
$student9 = new Student("Mevrouw Fazant", 6);
$student10 = new Student("Konijnenjong", 10);

$group1->addStudent($student1);
$group1->addStudent($student2);
$group1->addStudent($student3);
$group1->addStudent($student4);
$group1->addStudent($student5);
$group1->addStudent($student6);
$group1->addStudent($student7);
$group1->addStudent($student8);
$group1->addStudent($student9);
$group1->addStudent($student10);

$student11 = new Student("Boer", 1);
$student12 = new Student("Grauwe Klauwier", 2);
$student13 = new Student("Meneer Egel", 3);
$student14 = new Student("Mevrouw Woelmuis", 4);
$student15 = new Student("Mol", 2);
$student16 = new Student("Eenoog", 8);
$student17 = new Student("Lef", 7);
$student18 = new Student("Het Witte Hert", 10);
$student19 = new Student("Mevrouw Roek", 5);
$student20 = new Student("Sluiperslang", 4);

$group2->addStudent($student11);
$group2->addStudent($student12);
$group2->addStudent($student13);
$group2->addStudent($student14);
$group2->addStudent($student15);
$group2->addStudent($student16);
$group2->addStudent($student17);
$group2->addStudent($student18);
$group2->addStudent($student19);
$group2->addStudent($student20);

echo $group1->getAverageGrade();
echo "<br>";
echo $group2->getAverageGrade();
echo "<br>";

$group1->changeGroup($group2, $student1);
$group2->changeGroup($group1, $student20);

echo $group1->getAverageGrade();
echo "<br>";
echo $group2->getAverageGrade();
echo "<br>";