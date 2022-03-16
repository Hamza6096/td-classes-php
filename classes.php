<?php
class Livre implements Stringable
{
    protected string $titre;
    protected int $nbPage;

    public function __construct(string $titre, int $nbPage)
    {
        $this->titre = $titre;
        $this->nbPage = $nbPage;
    }
    public function __toString(): string {
        return "{$this->titre} ({$this->nbPage})<br>";
        }
}

class Biblio
{
    
    protected array $livres;
    public function __construct(protected string $nom)
    {
    }
    public function  ajouter (Livre $livre): void
    {
        $this->livres[] = $livre;
    }
    public function lister():void{
        echo "{$this->nom} :<br>";
        foreach($this->livres as $livre) {
            echo $livre;
        }
    }
}

$biblio = new Biblio("Bibliothèque du Web");
$biblio->ajouter(new Livre("La bible JavaScript", 640));
$biblio->ajouter(new Livre("SQL par l'exemple", 423));
$biblio->ajouter(new Livre("Tout PHP", 1267));
$biblio->lister();
