# Hunting Table

Hunting Table est un projet de gestion de chasse développé en utilisant le framework Laravel. Cette application vise à fournir aux chasseurs un outil complet pour gérer leurs activités de chasse de manière efficace.

## Installation

```bash
git clone https://github.com/votre-utilisateur/hunting-table.git
cd hunting-table
npm install
composer install
cp .env.example .env
# Configurez le fichier .env avec les informations appropriées
php artisan migrate:fresh --seed
php artisan serve
