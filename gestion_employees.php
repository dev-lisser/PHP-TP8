<?php

// Exercice 1 : Création du tableau associatif
function creerEmployes() {
    $employes = [
        // À compléter : Ajoutez ici les informations des employés emp001, emp002, emp003
    ];
    return $employes;
}

// Exercice 2 : Ajouter un employé
function ajouterEmploye($employes, $id, $nom, $poste) {
    // À compléter : Ajoutez l'employé au tableau associatif
    return $employes;
}

// Exercice 3 : Supprimer un employé
function supprimerEmploye($employes, $id) {
    // À compléter : Supprimez l'employé correspondant
    return $employes;
}

// Exercice 4 : Parcourir et afficher les employés
function afficherEmployes($employes) {
    // À compléter : Parcourez le tableau et affichez les informations sous forme : ID : emp001 | Nom : Alice | Poste : Développeuse
}

// Exercice 5 : Vérifier un poste
function verifierPoste($employes, $poste) {
    // À compléter : Vérifiez si un poste existe dans le tableau
}

// ========================
// Tests pour chaque fonction
// ========================
echo "===== Exercice 1 : Création du tableau =====\n";
$employes = creerEmployes();
print_r($employes);

echo "\n===== Exercice 2 : Ajouter un employé =====\n";
$employes = ajouterEmploye($employes, "emp004", "Diane", "Responsable RH");
print_r($employes);

echo "\n===== Exercice 3 : Supprimer un employé =====\n";
$employes = supprimerEmploye($employes, "emp002");
print_r($employes);

echo "\n===== Exercice 4 : Afficher les employés =====\n";
afficherEmployes($employes);

echo "\n===== Exercice 5 : Vérifier un poste =====\n";
verifierPoste($employes, "Développeuse");
verifierPoste($employes, "Technicien");

?>
