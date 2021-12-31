<?php
    $host='localhost';
    $username='root';
    $password='';
    $database = "php-ajax";
    $conn=mysqli_connect($host,$username,$password,"$database");
    // print_r($conn);


    $results = $conn->query("SELECT * FROM users");
    // this above line is responsible to query from the mysql database
?>

<?php while ($data = $results->fetch_assoc()):?>
<!-- <?php print_r($data);?> -->

<tr>
    <td><?php echo $data['id'];?></td>
    <td><?php echo $data['name'];?></td>
    <td><?php echo $data['city'];?></td>
</tr>
<?php endwhile; ?>