<?php
declare (strict_types=1);
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