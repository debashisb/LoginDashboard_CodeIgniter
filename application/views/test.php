<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<table>
    <?php foreach($checked_data as $post){?>
        <tr>
            <td><?php echo $post->username;?></td>
            <td><?php echo $post->password;?></td>
        </tr>
    <?php }?>
</table>


</body>
</html>