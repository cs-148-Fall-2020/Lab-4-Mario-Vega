<?php include 'top.php';?>      
<table>
<tr>
                <th> First Name </th>
                <th> Last Name </th>
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

//##############################################################################
//
// This page lists the records based on the query given
// 
//##############################################################################
$records = '';

$sql = "SELECT tblStudent.fldFirstName,tblStudent.fldLastName,` Subj`,`#`,`Title`,`Days`,`Start Time`, `End Time`, `Bldg`,`Room`,`Instructor` FROM tblEnrollments JOIN tblStudentEnrollments ON pmkEnrollmentId = pfkEnrollmentId JOIN tblStudent ON tblStudent.pmkNetId = tblStudentEnrollments.pfkStudentNetId WHERE tblStudentEnrollments.pfkStudentNetId = ? ORDER BY `tblEnrollments`.`Start Time` ASC";
$data = array('sajepa');
if ($thisDatabaseReader->querySecurityOk($sql,1,1)) {
    $sql = $thisDatabaseReader->sanitizeQuery($sql);
    $records = $thisDatabaseReader->select($sql, $data);
    
}
if (is_array($records)) {
    foreach ($records as $record){
            print '<tr>';
            print '<td>' . $record['fldFirstName'] . '</td>';
            print '<td>' . $record['fldLastName'] . '</td>';
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
   
}
?>
</table>
        <?php include 'footer.php';?>