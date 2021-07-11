<?php

namespace Src\interfaces;

interface InterfaceView
{
    public function setTitle($Title);
    public function setDir($Dir);
    public function setDescription($Description);
    public function setKeywords($Keywords);
    public function renderLayout();
}
