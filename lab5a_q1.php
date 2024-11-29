<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
    <?php 
        
        $name = "Nur Ariffin Mohd Zin";
        $matric_number = "A1234567";
        $course = "Bachelor of Computer Science";
        $year_of_study = "3rd Year";
        $address = "123, Jalan Example, 50450 Kuala Lumpur";
    ?>

    <!-- HTML Table to display the details -->
    <table border="1" cellpadding="10">
        <tr>
            <th>Details</th>
            <th>Information</th>
        </tr>
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo $matric_number; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo $year_of_study; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>
</body>
</html>
