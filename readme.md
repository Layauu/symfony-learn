# Symfony learn

[![Symfony](https://github.com/Layauu/symfony-learn/actions/workflows/symfony.yml/badge.svg)](https://github.com/Layauu/symfony-learn/actions/workflows/symfony.yml)

Ce projet est un projet d'apprentissage de Symfony 5, il est basé sur le cours de Yoan Dev. 
Chaine youtube : https://www.youtube.com/@yoandevco

Vous y retrouverez ici les différentes étapes du développement avec les commandes utilisées.

## Environnement de développement

### Prérequis

- PHP 7.4
- Composer
- Symfony CLI
- Docker
- Docker-compose

Vous pouvez vérifier les prérequis avec la commande suivante :

```bash
symfony check:requirements
```

### Lancer l'environnement de développement

```bash
composer install
npm install
npm run build
docker-compose up -d
symfony.exe serve
```

## Créer une entité

```bash
symfony.exe console make:entity
```

## Créer une migration

```bash
symfony.exe console make:migration
```

## Lancer les migrations

```bash
symfony.exe console doctrine:migrations:migrate
```
Ou
```bash
symfony.exe console d:m:m
```

## Lancer des tests

```bash
php bin/phpunit --testdox
```