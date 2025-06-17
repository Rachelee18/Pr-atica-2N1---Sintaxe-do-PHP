<?php
function calcularMedia($notas) {
    return array_sum($notas) / count($notas);
}

function formatarPreco($valor) {
    return "R$ " . number_format($valor, 2, ",", ".");
}
?>