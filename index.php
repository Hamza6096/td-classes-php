<?php

declare (strict_types=1);

require_once 'Livre.php';
require_once 'Biblio.php';

$biblio = new Biblio("Bibliothèque du Web");
$biblio->ajouter(new Livre("La bible JavaScript", 640));
$biblio->ajouter(new Livre("SQL par l'exemple", 423));
$biblio->ajouter(new Livre("Tout PHP", 1267));
$biblio->lister();
