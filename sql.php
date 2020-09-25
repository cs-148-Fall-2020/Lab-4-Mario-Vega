<?php
include "top.php";
?>

<h2> Create a table statement</h2>
<pre>
CREATE TABLE `tblEnrollments` (
  ` Subj` varchar(4) DEFAULT NULL,
  `#` varchar(3) DEFAULT NULL,
  `Title` varchar(30) DEFAULT NULL,
  `Comp Numb` int(5) DEFAULT NULL,
  `Sec` varchar(3) DEFAULT NULL,
  `Ptrm` varchar(1) DEFAULT NULL,
  `Lec Lab` varchar(4) DEFAULT NULL,
  `Attr` varchar(4) DEFAULT NULL,
  `Camp Code` varchar(1) DEFAULT NULL,
  `Coll Code` varchar(5) DEFAULT NULL,
  `Max Enrollment` int(3) DEFAULT NULL,
  `Current Enrollment` int(3) DEFAULT NULL,
  `True Max` varchar(3) DEFAULT NULL,
  `Start Time` varchar(5) DEFAULT NULL,
  `End Time` varchar(5) DEFAULT NULL,
  `Days` varchar(10) DEFAULT NULL,
  `Credits` varchar(9) DEFAULT NULL,
  `Bldg` varchar(6) DEFAULT NULL,
  `Room` varchar(9) DEFAULT NULL,
  `GP Ind` varchar(1) DEFAULT NULL,
  `Instructor` varchar(35) DEFAULT NULL,
  `NetId` varchar(8) DEFAULT NULL,
  `Email` varchar(35) DEFAULT NULL,
  `Fees` varchar(68) DEFAULT NULL,
  `XListings` varchar(116) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
</pre>

<h2>Insert sql example</h2>
<p>
INSERT INTO `tblEnrollments` (` Subj`, `#`, `Title`, `Comp Numb`, `Sec`, `Ptrm`, `Lec Lab`, `Attr`, `Camp Code`, `Coll Code`, `Max Enrollment`, `Current Enrollment`, `True Max`, `Start Time`, `End Time`, `Days`, `Credits`, `Bldg`, `Room`, `GP Ind`, `Instructor`, `NetId`, `Email`, `Fees`, `XListings`) VALUES
('ANFS', '491', 'Doctoral Dissertation Research', 90005, 'A', '1', 'TD', '', 'M', 'CALS', 20, 0, '', 'TBA', '', '       ', '1 to 18', '', '', 'N', 'Harvey, Jean Ruth', 'jharvey', 'Jean.Harvey@uvm.edu', '', ' ');</p>

<h2>Select sql example </h2>
<p>SELECT ` Subj`,`#`,`Title`,`Bldg`,`Room`,`Days`,`Start Time`FROM`tblEnrollments` WHERE `Days` LIKE '%M%' AND `Bldg` LIKE '%votey%' AND `Room` LIKE '%303%' AND `#` LIKE '%148% ORDER BY `tblEnrollments`.`Start Time` ASC</p>
<p>INSERT INTO `tblStudentEnrollments` (`pfkStudentNetId`, `pfkEnrollmentId`) VALUES ('mavega', '1530');</p>
<p>INSERT INTO `tblStudentEnrollments` (`pfkStudentNetId`, `pfkEnrollmentId`) VALUES ('mavega', '1517');</p>
<p>SELECT tblStudent.fldFirstName,` Subj`,`#`,`Title`,`Days`,`Start Time`, `End Time`, `Bldg`,`Room`,`Instructor` FROM tblEnrollments
JOIN tblStudentEnrollments ON pmkEnrollmentId = pfkEnrollmentId JOIN tblStudent ON tblStudent.pmkNetId = tblStudentEnrollments.pfkStudentNetId  
ORDER BY `tblEnrollments`.`Start Time` ASC</p>
<p>INSERT INTO `tblStudentEnrollments` (`pfkStudentNetId`, `pfkEnrollmentId`) VALUES ('alconnor', '12','456');</p>
<p>INSERT INTO `tblStudentEnrollments` (`pfkStudentNetId`, `pfkEnrollmentId`) VALUES ('sajepa', '789','900');</p>
<?php
include "footer.php"
?>

