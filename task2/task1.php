<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
    <tr>
        <td>a<td>
        <td>b<td>
        <td>&&<td>
        <td>||<td>
        <td>xor<td>
    </tr>
    <tr>
        <td><?php $a = false; echo (int)$a; ?><td>
        <td><?php $b = false; echo (int)$b; ?><td>
        <td><?php echo (int)($a && $b); ?><td>
        <td><?php echo (int)($a || $b); ?><td>
        <td><?php echo (int)($a xor $b); ?><td>
    </tr>
    <tr>
        <td><?php $a = true; echo (int)$a; ?><td>
        <td><?php $b = false; echo (int)$b; ?><td>
        <td><?php echo (int)($a && $b); ?><td>
        <td><?php echo (int)($a || $b); ?><td>
        <td><?php echo (int)($a xor $b); ?><td>
    </tr>
    <tr>
        <td><?php $a = false; echo (int)$a; ?><td>
        <td><?php $b = true; echo (int)$b; ?><td>
        <td><?php echo (int)($a && $b); ?><td>
        <td><?php echo (int)($a || $b); ?><td>
        <td><?php echo (int)($a xor $b); ?><td>
    </tr>
    <tr>
        <td><?php $a = true; echo (int)$a; ?><td>
        <td><?php $b = true; echo (int)$b; ?><td>
        <td><?php echo (int)($a && $b); ?><td>
        <td><?php echo (int)($a || $b); ?><td>
        <td><?php echo (int)($a xor $b); ?><td>
    </tr>
</table>
</body>
</html>