<select name="" id="">
<?php
for ($dia = 1;$dia <= 31; $dia++ ) {
    echo "<option>$dia</option>";
}
?>
</select>

<select name="" id="">
<?php
    $mes = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Semtembro', 'Outubro', 'Novembro', 'Dezembro'];

    for ($i = 0; $i <= 11; $i++ ) {
        echo "<option>$mes[$i]</option>";
    }
?>
</select>   

<select name="" id="">
<?php
    for ($ano = 2022;$ano >= 1900; $ano-- ) {
        echo "<option>$ano</option>";
    }
?>
</select>

