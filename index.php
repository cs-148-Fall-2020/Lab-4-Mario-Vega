<!DOCTYPE HTML>
<html lang = "en">
<head>
  <!-- basic.html -->
  <title>We are working</title>
  <meta charset = "UTF-8" />
</head>
<body>
<?php 
include "top.php";
?>
<main>
    <article>
        <section>
  <table>
	<caption><strong> Registar Enrollement </strong></caption>
	<tr>
                <th> Name </th>
                <th> Subject </th>
                <th> # </th>
                <th> Title </th>
                <th> Day</th>
                <th> Start Time</th>
                <th> End Time </th>
		<th> Building </th>
		<th> Room</th>
                <th> Instructor </th>
	</tr>
<?php

$sql = "SELECT tblStudent.fldFirstName,` Subj`,`#`,`Title`,`Days`,`Start Time`, `End Time`, `Bldg`,`Room`,`Instructor` FROM tblEnrollments
JOIN tblStudentEnrollments ON pmkEnrollmentId = pfkEnrollmentId JOIN tblStudent ON tblStudent.pmkNetId = tblStudentEnrollments.pfkStudentNetId  
ORDER BY `tblEnrollments`.`Start Time` ASC";

$statement = $pdo->prepare($sql);
$statement ->execute();
$records = $statement->fetchAll();
foreach ($records as $record){
        print '<tr>';
        print '<td>' . $record['fldFirstName'] . '</td>';
        print '<td>' . $record[' Subj'] . '</td>';
        print '<td>' . $record['#'] . '</td>';
        print '<td>' . $record['Title'] . '</td>';
        print '<td>' . $record['Days'] . '</td>';
        print '<td>' . $record['Start Time'] . '</td>';
        print '<td>' . $record['End Time'] . '</td>';
	print '<td>' . $record['Bldg'] . '</td>';
	print '<td>' . $record['Room'] . '</td>';
        print '<td>' . $record['Instructor'] . '</td>';
	
	print '</tr>' . PHP_EOL;
}
?>
      </table>
        </section>
    </article>
</main>
    <?php include 'footer.php';?>
</body>
</html>
