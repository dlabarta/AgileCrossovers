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


MARS ROVERS KATA
----------------

A squad of robotic rovers are to be landed by NASA on a plateau on Mars. This plateau, which is curiously rectangular, must be navigated by the rovers so that their on-board cameras can get a complete view of the surrounding terrain to send back to Earth.

A rover’s position and location is represented by a combination of x and y co-ordinates and a letter representing one of the four cardinal compass points. The plateau is divided up into a grid to simplify navigation. An example position might be 0, 0, N, which means the rover is in the bottom left corner and facing North.

In order to control a rover, NASA sends a simple string of letters. The possible letters are ‘L’, ‘R’ and ‘M’. ‘L’ and ‘R’ makes the rover spin 90 degrees left or right respectively, without moving from its current spot. ‘M’ means move forward one grid point, and maintain the same heading.

Assume that the square directly North from (x, y) is (x, y+1).

**INPUT**:

- The first line of input is the upper-right coordinates of the plateau, the lower-left coordinates are assumed to be 0,0.

- The rest of the input is information pertaining to the rovers that have been deployed. Each rover has two lines of input. The first line gives the rover’s position, and the second line is a series of instructions telling the rover how to explore the plateau.

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

Otros que que puede ser interesantes:

Xdebug
------
Imprescindible... olvidate de los "var_dump($var)" ;)

http://xdebug.org/

PHP Lint
--------
Comprueba la sintaxis de nuestro código

http://www.php.net/manual/es/function.runkit-lint.php

PHPMD
-----
Detector de código basura y posibles bugs

http://phpmd.org/

PHPloc
------
Para realizar métricas y analizar la estructura del proyecto

https://github.com/sebastianbergmann/phploc

[Source]: https://betabeers.com/event/coding-dojo-por-agile-barcelona-runroom-878/
[Agile Aragon Web]:http://agile-aragon.org/
[Agile Aragon Twitter]:https://twitter.com/agilearagon
[Agile Aragon Google Group]:https://groups.google.com/forum/#!forum/agile-aragon
[Symfony Google Group]: https://groups.google.com/forum/#!forum/symfony-zaragoza
[Symfony Twitter]: https://twitter.com/symfony_zgz
