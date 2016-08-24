<html>
<head>
    <title>CodeIgniter Eloquent</title>
</head>
<body>
    <h3>Eloquent ORM inside CodeIgniter 3.x</h3>
    <p>This is a example:</p>

    <p>List of Programming Languages</p>
    <ul>
    <?php foreach ($list as $obj) { ?>
        <li><?php echo $obj->name ?> </li>
    <?php } ?>
    </ul>
</body>
</html>
