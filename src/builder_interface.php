<?php

namespace CookiesRevenge\Novo\Utilities\NovoTableBuilder;

interface Builder_Interface
{
    public function SetTemplatingEngine($templatingEngine);
    public function BuildTable();
    public function BuildTableResults();
}
