<?php
    class Rectangle
    {
        private $longueur;
        private $largeur;

        function    __construct($longueur, $largeur)
        {
            if ($longueur > 0 && $largeur > 0)
            {
                $this->longueur = $longueur;
                $this->largeur = $largeur;
            }
            else
                echo ("Construction du réctangle impossible !\n");
        }

        function    getLongueur()
        {
            return ($this->longueur);
        }

        function    getLargeur()
        {
            return ($this->largeur);
        }

        function    setLongueur($longueur)
        {
            $this->longueur = $longueur;
        }

        function    setLargeur($largeur)
        {
            $this->largeur = $largeur;
        }

        function    perimetre()
        {
            if ($this->getLongueur() > 0 && $this->getLargeur() > 0)
                return (($this->getLongueur() + $this->getLargeur()) * 2);
            return (0);
        }

        function    surface()
        {
            if ($this->getLongueur() > 0 && $this->getLargeur() > 0)
                return (($this->getLongueur() * $this->getLargeur()));
            return (0);
        }
    }

    $rectangle;
    $faux_rectangle;
    $perimetre;
    $surface;

    $rectangle = new Rectangle(2, 3);
    $faux_rectangle = new Rectangle(0, 4);
    $perimetre = $rectangle->perimetre();
    $surface = $rectangle->surface();
    echo ("Le périmètre du réctangle est ".$perimetre." cm\n");
    echo ("La surface du réctangle est ".$surface." cm^2\n");

