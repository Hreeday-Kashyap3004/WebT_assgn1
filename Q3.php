<!DOCTYPE html>
<html>
<head>
    <title>Student Table</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Roll No.</th>
        </tr>
        <?php
        $students = array(
            array("John", 21300),
            array("Hari", 21301),
            array("Marry", 21303)
        );

        foreach ($students as $student) {
            echo "<tr><td>{$student[0]}</td><td>{$student[1]}</td></tr>";
        }
        ?>
    </table>
</body>
</html>
