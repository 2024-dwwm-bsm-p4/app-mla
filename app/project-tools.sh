#!/bin/bash

# Afficher le menu
echo "=== Project Tools ==="
echo "1. Lancer les tests"
echo "2. Vérifier la qualité du code"
echo "3. Mettre à jour les dépendances"
echo "4. Nettoyer le cache"
echo "5. Quitter"

# Lecture du choix de l'utilisateur
read -p "Choisissez une option : " choice

# Exécuter la commande choisie
case $choice in
    1)
        echo "Lancement des tests..."
        # Remplacez par la commande réelle pour lancer les tests
        ./vendor/bin/phpunit
        ;;
    2)
        echo "Vérification de la qualité du code..."
        # Remplacez par la commande réelle pour vérifier la qualité du code
        ./vendor/bin/php-cs-fixer fix --dry-run
        ;;
    3)
        echo "Mise à jour des dépendances..."
        # Remplacez par la commande réelle pour mettre à jour les dépendances
        composer update
        ;;
    4)
        echo "Nettoyage du cache..."
        # Remplacez par la commande réelle pour nettoyer le cache
        php bin/console cache:clear
        ;;
    5)
        echo "Sortie du script. Au revoir !"
        exit 0
        ;;
    *)
        echo "Option invalide. Veuillez réessayer."
        ;;
esac


