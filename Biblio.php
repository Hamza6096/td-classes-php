<?php
declare (strict_types=1);
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