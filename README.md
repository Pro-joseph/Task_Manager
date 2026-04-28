# TaskManager — Laravel MVP

Application de gestion de tâches interne pour équipes. Chaque utilisateur dispose d'un espace isolé pour créer, organiser et suivre ses tâches quotidiennes.

---

## Stack technique

- **Framework** : Laravel 13
- **Base de données** : MySQL
- **Templating** : Blade
- **Auth** : Laravel Breeze
- **Debug** : Laravel Debugbar + Laravel Telescope

---

## Prérequis

Avant de commencer, assurez-vous d'avoir installé :

- PHP >= 8.4
- Composer
- Node.js >= 18 & npm
- MySQL
- Laravel Herd (ou un serveur local équivalent)

---

## Installation

### 1. Cloner le dépôt

```bash
git clone https://github.com/Pro-joseph/task-manager.git
cd task-manager
```

### 2. Installer les dépendances PHP

```bash
composer install
```

### 3. Installer les dépendances JavaScript

```bash
npm install
```

### 4. Configurer l'environnement

```bash
cp .env.example .env
php artisan key:generate
```

Ouvrez `.env` et renseignez vos informations de base de données :

```env
APP_NAME=TaskManager
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=task_manager
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Créer la base de données

Dans MySQL, créez la base de données :

```sql
CREATE DATABASE task_manager;
```

### 6. Exécuter les migrations et les seeders

```bash
php artisan migrate --seed
```

### 7. Compiler les assets

```bash
npm run dev
```

### 8. Lancer le serveur

```bash
php artisan serve
```

---

## Outils de debug

### Laravel Debugbar

Actif automatiquement en environnement `local`. Visible en bas de chaque page — affiche les requêtes SQL, le temps d'exécution et les éventuels problèmes N+1.

### Laravel Telescope

Accessible sur [http://localhost:8000/telescope](http://localhost:8000/telescope)

Permet d'inspecter chaque requête HTTP : payload reçu, queries SQL associées, exceptions levées.

> Telescope n'est actif qu'en environnement `local`.

---

## Comptes de test

Après `php artisan migrate --seed`, les comptes suivants sont disponibles :

| Email | Mot de passe | Rôle |
|---|---|---|
| user@example.com | password | Utilisateur |

---

## Fonctionnalités

- Inscription / Connexion / Déconnexion
- Création, modification, suppression de tâches
- Statuts : À faire / En cours / Terminé
- Filtrage par statut et par catégorie
- Changement de statut rapide depuis la liste
- Date d'échéance avec alerte visuelle si dépassée
- Pagination (4 tâches par page)
- Compteur de tâches par statut sur le dashboard
- Isolation totale entre utilisateurs

---

## Structure des branches Git

```
main
├── feature/auth
├── feature/task-crud
└── feature/filters
```

---

## Commandes utiles

```bash
# Voir toutes les routes nommées
php artisan route:list

# Relancer les migrations avec données de test
php artisan migrate:fresh --seed

# Vider le cache de configuration
php artisan config:clear

# Installer Telescope
php artisan telescope:install
php artisan migrate
```

---

## MLD

```
users       (id, name, email, password, created_at, updated_at)
categories  (id, nom, created_at, updated_at)
tasks      (id, titre, description, statut, due_date, created_at, updated_at,
             user_id FK→users, categorie_id FK→categories)
```
