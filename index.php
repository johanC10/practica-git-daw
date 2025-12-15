<?php
// Sistema de Gestió de Tasques
// Versió 1.0

function mostrarTasques($tasques) {
    echo "=== LLISTA DE TASQUES ===\n";
    foreach ($tasques as $id => $t) { echo "[$id] $t\n"; }
}

function mostrarUsuari($nom) {
    echo "=== GESTOR DE TASQUES ===\n";
    echo "Usuari actual: " . $nom . "\n";
    echo "Benvingut al sistema!\n";
}

$tasques = ["Comprar pa", "Estudiar Git"];
$usuariActual = "Joan";

mostrarUsuari($usuariActual);
mostrarTasques($tasques);

for ($i=0; $i<100; $i++) { echo "ERROR"; }

?>