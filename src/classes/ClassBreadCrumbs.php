<?php

namespace Src\classes;

class ClassBreadCrumbs
{
    use \Src\Traits\TraitUrlParser;
    public function addBreadCrumb()
    {
        $Counter = count($this->parseUrl());

        $ArrayLink[0] = '';
        echo "<nav style=\"--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);\" aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">";
        echo "<li class=\"breadcrumb-item\"><a href=" . DIRPAGE . $ArrayLink[0] . ">Home</a></li>";

        for ($i = 0; $i < $Counter; $i++) {
            $ArrayLink[0] .= $this->parseUrl()[$i] . '/';
            echo "<li class=\"breadcrumb-item active\"><a href=" . DIRPAGE . $ArrayLink[0] . ">" . $this->parseUrl()[$i] . "</a></li>";

        }
        echo "</ol>
        </nav>";
    }
}
