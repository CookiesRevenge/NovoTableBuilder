<?php

namespace CookiesRevenge\Novo\Utilities\NovoTableBuilder\Template_Engine_Facades;

class Smarty_Tpl_Facade extends Abstrat_Tpl_Facade
{

    public function ConstructEngineObject()
    {

        $this->tplEngineObject_ = new \Smarty();

        $this->tplEngineObject_->setTemplateDir($this->templateDir_);
        $this->tplEngineObject_->setCompileDir($this->cacheDir_);
        $this->tplEngineObject_->setConfigDir($this->configDir_);
        $this->tplEngineObject_->setCacheDir($this->cacheDir_);

        $this->smarty_->caching = (int) $this->isCachingOn_;
        $this->smarty_->debugging = $this->isDebuggingOn_;
    }

    public function BuildTableHTML()
    {
        return $this->tplEngineObject_->fetch($this->templateDir_ . "/table.tpl");
    }

    public function BuildTableResultsHTML()
    {
        return $this->tplEngineObject_->fetch($this->templateDir_ . "/table_results.tpl");
    }

    public function AssignVariable($varName, $varValue)
    {
        $this->tplEngineObject_->assign($varName, $varValue);
        return $this;
    }

    public function AssignVariables($variables)
    {
        foreach ($variables as $varName => $varValue) {
            $this->tplEngineObject_->assign($varName, $varValue);
        }
        return $this;
    }

    // these two may be overriden using setters
    // it may be good idea to override cache dir, because of W rights on the server
    protected $templateDir_ = "../templates/smarty";
    protected $cacheDir_ = "../templates/smarty_cache";

}
