<!-- Write a PHP program for print Previous semester Result using variables & constants in PHP. -->
<?php

const SEMESTER = 'Fall';
const YEAR = 2024;

$studentName = 'Fazal';
$subject1 = 'Introduction to Computer Science';
$subject2 = 'Mathematics';
$subject3 = 'Basics of C';
$subject4 = 'Python';

$marks1 = 85;
$marks2 = 78;
$marks3 = 92;
$marks4 = 67;

$totalMarks = 100 * 4; // assuming 100 marks for each subject

$totalObtainedMarks = $marks1 + $marks2 + $marks3 + $marks4;

$percentage = ($totalObtainedMarks / $totalMarks) * 100;

if ($percentage >= 90) {
  $grade = 'A';
} elseif ($percentage >= 80) {
  $grade = 'B';
} elseif ($percentage >= 70) {
  $grade = 'C';
} elseif ($percentage >= 60) {
  $grade = 'D';
} else {
  $grade = 'F';
}

echo "Previous Semester's Result:\n";
echo "Semester: ". SEMESTER. " ". YEAR. "\n";
echo "Student Name: ". $studentName. "\n";
echo "Subjects and Marks:\n";
echo $subject1. ": ". $marks1. "\n";
echo $subject2. ": ". $marks2. "\n";
echo $subject3. ": ". $marks3. "\n";
echo $subject4. ": ". $marks4. "\n";
echo "Total Percentage: ". $percentage. "%\n";
echo "Grade: ". $grade. "\n";

?>