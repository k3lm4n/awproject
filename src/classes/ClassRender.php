<?php

namespace Src\classes;

class ClassRender
{

    private $Dir;
    private $Title;
    private $Description;
    private $Keywords;


    public function getTitle()
    {
        return $this->Title;
    }
    public function setTitle($Title)
    {
        $this->Title = $Title;
    }
    public function getDir()
    {
        return $this->Dir;
    }
    public function setDir($Dir)
    {
        $this->Dir = $Dir;
    }
    public function getDescription()
    {
        return $this->Description;
    }
    public function setDescription($Description)
    {
        $this->Description = $Description;
    }
    public function getKeywords()
    {
        return $this->Keywords;
    }
    public function setKeywords($Keywords)
    {
        $this->Keywords = $Keywords;
    }



    #Renderiza Layout
    public function renderLayout()
    {
        include_once(DIRREQ.'app/view/Layout.php');
    }
    #Add Carateriticas no Head
    public function addHead()
    {
        if(file_exists(DIRREQ."app/view/{$this->getDir()}/Head.php")){
            include(DIRREQ."app/view/{$this->getDir()}/Head.php");
        }
    }
    public function addHeader()
    {
        if(file_exists(DIRREQ."app/view/{$this->getDir()}/Header.php")){
            include(DIRREQ."app/view/{$this->getDir()}/Header.php");
        }
    }
    #Add Caracteristicas no Main
    public function addMain()
    {
        if(file_exists(DIRREQ."app/view/{$this->getDir()}/Main.php")){
            include(DIRREQ."app/view/{$this->getDir()}/Main.php");
        }
    }
    #Add Caracteristicas no Footer
    public function addFooter()
    {
        if(file_exists(DIRREQ."app/view/{$this->getDir()}/Footer.php")){
            include(DIRREQ."app/view/{$this->getDir()}/Footer.php"); 
        }
    }
}
