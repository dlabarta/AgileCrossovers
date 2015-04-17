[![Build Status](https://travis-ci.org/dlabarta/AgileCrossovers.svg?branch=master)](https://travis-ci.org/dlabarta/AgileCrossovers)

Agile CrossOvers – TDD en PHP
-----------------------------

- Symfony Zaragoza
    - [Symfony Google Group]
    - [Symfony Twitter]
- Agile Aragón
    - Objetivos
    - Katas, Dojos, Charlas de Introducción, Cervezas ágiles...
    - [Agile Aragon Web]
    - [Agile Aragon Twitter]
    - [Agile Aragon Google Group]
- ¿Que vamos a hacer hoy?
    - Coding Dojo - Kata
    - Pair Programming
    - TDD
    - Formato Randori


- The position is made up of two integers and a letter separated by spaces, corresponding to the x and y co-ordinates and the rover’s orientation.

Each rover will be finished sequentially, which means that the second rover won’t start to move until the first one has finished moving.

**OUTPUT**:

- The output for each rover should be its final co-ordinates and heading.

**Example:**

Test Input: 5 5 1 2 N LMLMLMLMM 3 3 E MMRMMRMRRM

Expected Output: 1 3 N 5 1 E

[Source]

Herramientas
------------

Algunas herramientas que vamos a utilizar:

PHPUnit
-------
Para los test unitarios

http://www.phpunit.de/

integración con PhpStorm

https://www.jetbrains.com/phpstorm/help/testing-php-applications.html


PHP_CodeSniffer
---------------
Comprueba que nuestro código se ajusta a los estándares.

http://pear.php.net/manual/en/package.php.php-codesniffer.annotated-ruleset.php


Servidores de integración continua
----------------------------------
Jenkins
http://jenkins-ci.org/

Esqueleto jenkins para proyectos php
http://jenkins-php.org/

Otra opción:

Servidor de integración continua online
http://travis-ci.org

Este proyecto testeado por Travis (ver fichero .travis.yml)
https://travis-ci.org/dlabarta/AgileCrossovers




Otros links interesantes en este repo: https://github.com/francho/TestingLab-php

[Source]: https://betabeers.com/event/coding-dojo-por-agile-barcelona-runroom-878/
[Agile Aragon Web]:http://agile-aragon.org/
[Agile Aragon Twitter]:https://twitter.com/agilearagon
[Agile Aragon Google Group]:https://groups.google.com/forum/#!forum/agile-aragon
[Symfony Google Group]: https://groups.google.com/forum/#!forum/symfony-zaragoza
[Symfony Twitter]: https://twitter.com/symfony_zgz
