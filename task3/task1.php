<!DOCTYPE HTML>
<html>
<head>
    <title>Калькулятор</title>
</head>
<body>
<form action="task1.php">
    <input type="text" name="x1">
    <select name="operation">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="text" name="x2">
    <input type="submit" value="=">
    <?php


    function calculator($x1, $x2, $operation)
    {

        if (empty($x1) || empty($x2)) {
            return 'Не переданы аргументы';
        }


        switch ($operation) {
            case '+':
                $result = $x1 + $x2;
                break;
            case '-':
                $result = $x1 - $x2;
                break;
            case '*':
                $result = $x1 * $x2;
                break;
            case '/':
                $result = $x1 / $x2;
                break;
            default:
                return 'Операция не поддерживается';
                break;
        }
        return $result;
    }

    $x1 = $_GET['x1'];
    $x2 = $_GET['x2'];
    $operation = $_GET['operation'];
    echo calculator($x1, $x2, $operation);
    ?>
</form>
</body>
</html>
