# CareerLink

CareerLink est une plateforme complète permettant de connecter les candidats avec des opportunités d'emploi dans divers secteurs. 
Ce projet vise à offrir une expérience utilisateur fluide pour les candidats,
une interface intuitive pour les recruteurs, et une gestion efficace du contenu pour les administrateurs.

---

## Fonctionnalités principales

### Back Office (Administrateurs et Recruteurs)

#### **Gestion des Catégories** (Administrateurs)
- Créer, modifier et supprimer des catégories pour organiser les offres d'emploi.
- Associer chaque offre d'emploi à une catégorie.

#### **Gestion des Tags** (Administrateurs)
- Créer, modifier et supprimer des tags pour identifier les compétences nécessaires.
- Associer des tags aux offres d'emploi pour faciliter la recherche.

#### **Inscription des Recruteurs**
- Les recruteurs peuvent s'inscrire avec des informations de base (nom de l'entreprise, email professionnel, mot de passe).

#### **Gestion des Offres d'Emploi**
- Les recruteurs peuvent créer, modifier et supprimer leurs offres.
- Les administrateurs peuvent archiver les offres inappropriées.

#### **Tableau de Bord Administrateur**
- Statistiques : nombre d'offres par catégorie, tags les plus utilisés, recruteurs les plus actifs.

---

### Front Office (Candidats et Visiteurs)

#### **Login et Inscription**
- Les utilisateurs peuvent créer un compte (candidats, recruteurs).
- Redirection des administrateurs vers le tableau de bord et des autres utilisateurs vers leurs espaces dédiés.

#### **Recherche Dynamique d'Emploi**
- Recherche par mots-clés, catégories, et tags (via AJAX).

#### **Affichage des Offres**
- Dernières offres d'emploi affichées avec pagination.
- Page dédiée pour chaque offre avec détails, catégories, et tags associés.

---

## Technologies utilisées

- **Frontend** : HTML5, CSS (Bootstrap), JavaScript (AJAX)
- **Backend** : PHP 8 (OOP)
- **Base de données** : MySQL (avec PDO)

---

## Installation

### Prérequis
- PHP 8
- Serveur local XAMPP
- MySQL
- Git

### Étapes
1. Clonez le dépôt du projet :
   ```bash
   git clone https://github.com/labitayoub/CareerLink.git
   ```

2. Installez les dépendances nécessaires.

3. Configurez la base de données :
   - Importez le fichier `careerlink.sql` dans votre serveur MySQL.
   - Mettez à jour les paramètres de connexion dans le fichier `config.php`.

4. Lancez le serveur local et accédez au projet via votre navigateur.

---

## Structure du projet

```
CareerLink/
|-- assets/        # Fichiers CSS, JS et images
|-- includes/      # Fichiers PHP partagés (connexion, header, footer, etc.)
|-- views/         # Pages frontend (home, offres, login, etc.)
|-- admin/         # Pages backend pour les administrateurs
|-- recruiter/     # Pages backend pour les recruteurs
|-- config.php     # Configuration de la base de données
|-- index.php      # Point d'entrée principal

```

### Realise par :
-Ayoub Labit

``
#### Aliens 
