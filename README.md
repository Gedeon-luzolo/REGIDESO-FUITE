Por utiliser cette application, faites les commandes suivantes

## Installation

1. Décompressez l'archive téléchargée.
2. Copiez et collez le dossier **Siteweb** dans votre dossier **projets**. Renommez le dossier avec le nom de votre projet.
3. Dans votre terminal, exécutez la commande `composer install`.
4. Copiez le fichier `.env.example` et renommez-le en `.env`, puis mettez à jour les configurations (en particulier la configuration de la base de données).
5. Dans votre terminal, exécutez la commande `php artisan key:generate`.
6. Exécutez la commande `php artisan migrate --seed` pour créer les tables de la base de données et insérer les enregistrements des rôles et des utilisateurs.
7. Exécutez la commande `npm install`
