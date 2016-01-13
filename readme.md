![alt tag](https://raw.githubusercontent.com/fiesta-framework/Fiesta/alpha/app/resources/images/fiesta_wild.png)
## Fiesta

[![Build Status](https://travis-ci.org/fiesta-framework/Fiesta.svg?branch=master)](https://travis-ci.org/fiesta-framework/Fiesta)
[![Latest Stable Version](https://poser.pugx.org/fiesta/fiesta/v/stable)](https://packagist.org/packages/fiesta/fiesta) 
[![Total Downloads](https://img.shields.io/badge/downloads-420-yellow.svg)](https://packagist.org/packages/fiesta/fiesta) 
[![Latest Unstable Version](https://poser.pugx.org/fiesta/fiesta/v/unstable)](https://packagist.org/packages/fiesta/fiesta) 
[![License](https://poser.pugx.org/fiesta/fiesta/license)](https://packagist.org/packages/fiesta/fiesta)
[![Monthly Downloads](https://poser.pugx.org/fiesta/fiesta/d/monthly)](https://packagist.org/packages/fiesta/fiesta)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/fiesta-framework/Fiesta/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/fiesta-framework/Fiesta/?branch=master)

Fiesta PHP Framework

### Installation

####Installer Composer

Fiesta utilise `Composer`, Vous pouvez utiliser composer pour installer Fiesta et ses dépendances.

Tout d'abord, télécharger et installer [Composer Windows installer](https://getcomposer.org/)

####Installer Fiesta

Vous pouvez installer Fiesta via [Composer](https://getcomposer.org/) en utilisent la commande `create-project` dans votre terminal

	composer create-project fiesta/fiesta

vous pouvez aussi includer le nom de projet :

	composer create-project fiesta/fiesta nom-de-votre-projet
	

### Exigences du Fiesta

Fiesta a quelques exigences du système:
* PHP >= 5.5
* Activation de Extension mod_rewrite dans Apache

### Versions
 
 [Fiesta Releases](https://github.com/fiesta-framework/Fiesta/releases)

 [Fiesta v 2.5 (latest)](https://github.com/fiesta-framework/Fiesta/tree/master) (05/07/2015)

 [Fiesta v 2.0](https://github.com/fiesta-framework/Fiesta/tree/2.0.0.1) (27/02/2015)

 [Fiesta v 1.5](https://github.com/fiesta-framework/Fiesta/tree/1.5.0) (05/02/2015)
 
 [Fiesta v 1.4.4](https://github.com/fiesta-framework/Fiesta/tree/1.4.4) (01/02/2015)
 
 [Fiesta v 1.4.3](https://github.com/fiesta-framework/Fiesta/tree/1.4.3) (28/01/2015)
 
 [Fiesta v 1.4.2](https://github.com/fiesta-framework/Fiesta/tree/1.4.2) (16/01/2015)
 
 [Fiesta v 1.4.1](https://github.com/fiesta-framework/Fiesta/tree/1.4.1) (15/01/2015)
 
 [Fiesta v 1.4](https://github.com/fiesta-framework/Fiesta/tree/1.4.0) (11/01/2015)
 
 [Fiesta v 1.3.2](https://github.com/fiesta-framework/Fiesta/tree/1.3.2) (10/01/2015)
 
 [Fiesta v 1.3.1](https://github.com/fiesta-framework/Fiesta/tree/1.3.1) (09/01/2015)

### Configuration

Après l'installation de Fiesta vous devez modifier quelques paramètres de configuration dans `app/config`, Mais d'abord vous devez modifier les clés de sécurité de votre projet dans `app/config/security.php` ,key1 doit consiste d'une chaine aléatoire de 32 caractères et key2 doit être consisté d'une chaine de votre choix. Si la clé d'application n'est pas réglée, vos données chiffrées ne seront pas sécurisées.

Aussi vous devez régler le paramètre de l'URL root `url` de votre projet que ce soit dans un serveur local où à distance dans `app/config/app.php`

###  Apache

Fiesta livré avec fichier `.htaccess` qui utilise URL rewriting, is vous utilisez Apache, Soyez sûr que vous avez activé l'extension `mod_rewrite`


### License

The Fiesta framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)

[![Owner](https://img.shields.io/badge/Owner-Youssef%20Had-blue.svg)](https://github.com/youssefhad)
[![Owner](https://img.shields.io/badge/copyright-2014--2016-red.svg)](https://github.com/fiesta-framework/Fiesta)
[![Owner](https://img.shields.io/badge/launched-10%2F10%2F2014-ff2f6c.svg)](https://github.com/fiesta-framework/Fiesta)
