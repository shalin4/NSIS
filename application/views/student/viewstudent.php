<?php
/**
 * Created by PhpStorm.
 * User: Lakindu
 * Date: 5/18/2018
 * Time: 10:27 AM
 */
$year = date('Y');
?>

<table border="1">
<thead>
 <th>ID</th>
 <th>Admission No</th>
 <th>Student Name</th>
 <th>City</th>
 <th>Phone</th>
 <th>Age</th>
 <th>Grade</th>
 <th>Action</th>
 <th>Approved</th>
 <th>Complete</th>
 <th>Select</th>

</thead>
    <tbody>
    <?php foreach ($students as $student): ?>
        <tr>
            <td><?php echo $student -> id; ?></td>
            <td><?php echo $student -> admissionno; ?></td>
            <td><?php echo $student -> initialname; ?></td>
            <td><?php echo $student -> city; ?></td>
            <td><?php echo $student -> phone; ?></td>
            <td><?php echo  $year - $student -> birthyear; ?></td>
            <td><?php echo $student -> grade; ?></td>
            <td><a href="<?php echo base_url() ?>index.php/student/viewstudent/view?name=<?php echo $student -> id; ?>"><button>View</button></a>
                <button>Update</button></td>
            <td><button>Approved</button></td>
            <td><button>Complete</button></td>
            <td><input type="checkbox"></td>


        </tr>

    <?php endforeach; ?>



    </tbody>

</table>
