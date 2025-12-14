<?php
// Sistema de Gestió de Tasques
// Versió 1.0
function mostrarTasques($tasques) {
    echo "=== LLISTA DE TASQUES ===\n";
    foreach ($tasques as $id => $t) { echo "[$id] $t\n"; }
}
$tasques = ["Comprar pa", "Estudiar Git"];
echo "=== GESTOR DE TASQUES ===\n";
echo "Benvingut al sistema!\n\n";
mostrarTasques($tasques);
?>