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

    /**
     * Builds Table HTML.
     * May build either full table (filters, actions & table core) or table core (results) only.
     * Building results only is making TableBuilder tables have dynamic behavior:
     * When filters or pagination are applied, Table will automatically return a new subset of rows in accordance
     * with User-supplied parameters.
     *
     * @param boolean $resultsOnly Set "false" to build full table (including filters & actions) or "true" for results/tbody only.
     * @return string Table or Table Results HTML
     */
    public function BuildTableHTML($resultsOnly);
}