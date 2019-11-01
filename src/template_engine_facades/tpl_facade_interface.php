<?php

namespace CookiesRevenge\Novo\Utilities\NovoTableBuilder\Template_Engine_Facades;

interface Tpl_Facade_Interface {
    public function AssignVariable($varName, $varValue);
    public function AssignVariables($variables);
    public function IsCachingOn(bool $isCachingOn);
    public function IsDebuggingOn(bool $isDebuggingOn);
    public function SetTemplateDir($templateDir);
    public function SetCacheDir($cacheDir);

    public function ConstructEngineObject();
    public function BuildTableHTML();
    public function BuildTableResultsHTML();
}