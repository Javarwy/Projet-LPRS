# Introduction

Ce répertoire Github est dédié au projet LPRS en PHP pour l'épreuve E5.  

Le contexte est le suivant :

> L'école souhaite développer un site web dédié à la gestion des anciens élèves (alumni) et aux relations avec les entreprises. Ce site servira de plateforme centrale pour renforcer les liens entre l'école, ses anciens élèves, et les partenaires. L'objectif est de faciliter la communication, le réseautage, et la collaboration, tout en offrant des services supplémentaires aux anciens élèves et aux entreprises. 

Il existe quatre rôles principaux : **Étudiant**, **Alumni**, **Entreprises/Partenaires**, et **Professeur**.  
Un gestionnaire/admin vérifie et valide les inscriptions des nouveaux utilisateurs.  

Selon le type d'utilisateur, il aura la possiblité d'interagir dans les trois sections suivantes : **Offres d'emploi**, **Événements**, et **Forum**.  

Ci-dessous un tableau représentant les actions possibles pour chaque type d'utilisateur selon la section :  

| Action                                      | Étudiant                             | Alumni                                       | Entreprise/Partenaire                         | Professeur                          |
| --------------------------------------------|--------------------------------------|----------------------------------------------|-----------------------------------------------|-------------------------------------|
| **Offres d'emploi**                         |                                      |                                              |                                               |                                     |
| Créer                                       |❌                                    |❌                                           |✅                                             |❌                                  |
| Modifier (*créateur uniquement*)            |❌                                    |❌                                           |✅                                             |❌                                  |
| Supprimer (*créateur uniquement*)           |❌                                    |❌                                           |✅                                             |❌                                  |
| Postuler                                    |✅                                    |✅                                           |❌                                             |❌                                  |
| Consulter                                   |✅                                    |✅                                           |✅                                             |✅                                  |
| Gérer candidatures (*créateur uniquement*)  |❌                                    |❌                                           |✅                                             |❌                                  |
| **Événements**                              |                                      |                                              |                                               |                                     |
| Créer                                       |✅ (*avec Professeur uniquement*)     |✅                                           |✅                                             |✅                                  |
| Modifier (*créateur uniquement*)            |✅                                    |✅                                           |✅                                             |✅                                  |
| Supprimer (*créateur uniquement*)           |✅                                    |✅                                           |✅                                             |✅                                  |
| S'inscrire                                  |✅                                    |✅                                           |✅                                             |✅                                  |
| Consulter                                   |✅                                    |✅                                           |✅                                             |✅                                  |
| Gérer inscriptions (*créateur uniquement*)  |✅                                    |✅                                           |✅                                             |✅                                  |
| **Forum**                                   |                                      |                                              |                                               |                                     |
| Créer un post                               |✅ (*section générale et étudiante*) |✅ (*section générale et alumni-entreprises*) |✅ (*section générale et alumni-entreprises*) |✅ (*section générale*)              |
| Modifier un post (*créateur uniquement*)    |✅ (*section générale et étudiante*) |✅ (*section générale et alumni-entreprises*) |✅ (*section générale et alumni-entreprises*) |✅ (*section générale*)              |
| Supprimer un post (*créateur uniquement*)   |✅ (*section générale et étudiante*) |✅ (*section générale et alumni-entreprises*) |✅ (*section générale et alumni-entreprises*) |✅ (*section générale*)              |
| Poster un message                           |✅ (*section générale et étudiante*) |✅ (*section générale et alumni-entreprises*) |✅ (*section générale et alumni-entreprises*) |✅ (*section générale et étudiante*) |
| Consulter                                   |✅ (*section générale et étudiante*) |✅ (*section générale et alumni-entreprises*) |✅ (*section générale et alumni-entreprises*) |✅ (*section générale et étudiante*) |

# Installation

*(À noter que l'IDE utilisé au cours de ce projet est IntelliJ IDEA. Le WAMP utilisé est Wampserver avec phpMyAdmin pour les bases de données.)*


1. Cloner le répertoire dans le dossier wamp64/www/[Dossier]/ via *git clone*.  
2. Ouvrir phpMyAdmin, créer une base de données s'intitulant « projet_lprs » et importer les données du fichier projet_lprs.sql.  
3. Pour accéder au site, ouvrir un navigateur, écrire dans le champ URL « localhost/[Dossier]/ » et sélectionner le dossier où le projet a été cloné.

# Utilisation

Plusieurs comptes sont déjà présents dans la base de données. Les principaux sont les suivants :

| Rôle                    | Email                   | Mot de passe |
|-------------------------|-------------------------|--------------|
| Étudiant                | etudiant@etudiant.com   | etudiant     |
| Alumni                  | alumni@alumni.com       | alumni       |
| Partenaire d'entreprise | charlesmichel@orange.fr | entreprise   |
| Professeur              | prof@prof.com           | prof         |
| Gestionnaire/Admin      | admin@admin.com         | admin        |

Il est possible de créer un compte en renseignant le nom, le prénom, l'email, le mot de passe, le rôle de l'utilisateur et quelques informations supplémentaires si nécessaires. Le compte devra être ensuite validé par un gestionnaire/admin.  

Pour vous connecter, cliquez sur le petit bonhomme violet en haut à droite de la page d'accueil, puis renseignez l'email et le mot de passe du compte.  

## Utilisation : Étudiant

Après connexion via un compte Étudiant, il vous sera possible d'accéder à la rubrique Étudiant :

  - **Annuaire des anciens élèves** : Recherche par nom, promotion, secteur d'activité, etc. des alumnis.
  - **Forum de discussion** : Forums pour échanger sur divers sujets (par exemple, industrie, mentorat, entrepreneuriat).
  - **Opportunités d'emploi et de stage** : Liste des offres d'emploi/stage publiées par les entreprises partenaires avec la possibilité de postuler sur le site.
  - **Participation à des événements** : Liste des événements organisés et inscription possible sur le site. 

## Utilisation : Alumni

Après connexion via un compte Alumni, il vous sera possible d'accéder à la rubrique Alumni :

  - **Annuaire des anciens élèves** : Recherche par nom, promotion, secteur d'activité, etc. des alumnis.
  - **Forum de discussion** : Forums pour échanger sur divers sujets (par exemple, industrie, mentorat, entrepreneuriat).
  - **Opportunités d'emploi et de stage** : Liste des offres d'emploi/stage publiées par les entreprises partenaires avec la possibilité de postuler sur le site.
  - **Participation à des événements** : Liste des événements organisés et inscription possible sur le site.

## Utilisation : Entreprise/Partenaire

Après connexion via un compte Partenaire, il vous sera possible d'accéder à la rubrique Entreprises :

  - **Profils des entreprises** : Espace pour que les entreprises partenaires puissent créer un profil et présentent leurs activités. Une entreprise peut être gérée par plusieurs personnes (salariés et/ou alumni).
  - **Publication d'offres** : Outil pour que les entreprises puissent publier des offres d'emploi, de stage et de projet.
  - **Profils des anciens élèves** : Recherche de talents via l'annuaire des alumni.
  - **Publication d’événements** : Section pour proposer des événements ou projets collaboratifs avec l'école.

## Utilisation : Professeur

Après connexion via un compte Professeur, il vous sera possible d'accéder à la rubrique Professeur :

  - **Profils des anciens élèves** : Recherche des anciens dans l'annuaire des alumni.
  - **Profils des étudiants actuels** : Recherche de talents via l'annuaire des étudiants.
  - **Publication d’événements** : Section pour proposer des événements ou projets collaboratifs avec l'école.
  - **Section des offres** : Afin de prévenir les élèves de nouvelles opportunités.

# Crédits

| Collaborateur | Partie(s)                                       |
|---------------|-------------------------------------------------|
| Aurélien A.   | Étudiant                                        |
| Raphaël C.    | Entreprise/Partenaire ; Inscription/Connexion ; |
| Raphaël M.    | Alumni                                          |
| Yohan V.      | Professeur                                      |
