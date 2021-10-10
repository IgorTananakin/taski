<?php

function discriminant($a, $b, $c){
    return $b**2 - 4*$a*$c;
};


assert(81 == discriminant(4,7,-2));
assert(0 == discriminant(25,10,1));
assert(-20 == discriminant(30,10,1));

?>

мы можем выполнить выражение return внутри включаемого файла, чтобы завершить процесс выполнения в этом файле и вернуться к выполнению включающего файла
<?php
//ax**2 + bx + c
$a = 1;
$b = 3;
$c = -4;

?>
    <p><?php echo $a; ?>^2+3<?php echo $b;?>-4</p>

    <?php $discriminant = discriminant($a, $b, $c);?>

    <p>D=<?php echo $b;?>^2-4*<?php echo $a.'*'.$c;?>=<?php echo $discriminant ?></p>

    <?php
    if ($discriminant > 0) { ?>

        <p>x1=((-b+sqrt(D))/(2a))=<?php echo (-$b + sqrt($discriminant))/(2*$a); ?></p>
        <p>x2=((-b-sqrt(D))/(2a))=<?php echo (-$b - sqrt($discriminant))/(2*$a); ?></p>


    <?php } elseif ($discriminant == 0) { ?>
        <p>x = -b/(2a) =
            <?php echo -$b; ?>/(2*<?php echo $a; ?>) =
            <?php echo -$b/(2*$a); ?>
        </p>

    <?php } elseif ($discriminant < 0) { ?>
        <p> Нет действительных корней</p>
        <?php ;}
    ?>

