<?php

 class Publication
 {
    private $i_p;
    private $image_p;
    private $date_p;
    private $nbrlike_p;
    private $pass_r;
    private $nbrdislike_p;
    private $text_p;
    private $mode_p;   

    public function __construct($id,$me,$p,$t,$nl,$ndl)
    {
        $this->id_p=$id;
        $this->image_p=$me;
        $this->date_p=date("d/m/y");
        $this->nbrlike_p=$nl;
        $this->nbrdislike_p=$ndl;
        $this->pass_r=$p;
        $this->text_p=$t;
    }

    public function getId()
    {
        return $this->id_p;
    }

    public function getImage()
    {
        return $this->image_p;
    }

    public function getDatePublication()
    {
        return $this->date_p;
    }

    public function getNombreLike()
    {
        return $this->nbrlike_p;
    }
    public function  getTexte()
    {
        return $this->text_p;
    }
    public function getNbrDislike()
    {
        return $this->nbrdislike_p;
    }

 }
 ?>
