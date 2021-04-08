<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Customer Sales</title>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Address</th>
            <th>City</th>
            <th>State</th>
            <th>Zip Code</th>
        </tr>
        <?php foreach($users as $User){?>
        <tr>
            <td><?php echo $User -> customer_id?></td>
            <td><?php echo $User -> first_name." ".$User -> last_name?></td>
            <td><?php echo $User -> phone?></td>
            <td><?php echo $User -> email?></td>
            <td><?php echo $User -> street?></td>
            <td><?php echo $User -> city?></td>
            <td><?php echo $User -> state?></td>
            <td><?php echo $User -> zip_code?></td>
            
        </tr>
        <?php }?>
    </table>
</body>
</html>