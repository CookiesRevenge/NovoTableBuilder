<?php

namespace CookiesRevenge\Novo\Utilities\NovoTableBuilder;

interface Builder_Interface
{
    /**
     * Defines a templating engine to be used by the TableBuilder.
     * This may be Smarty, Blade, Mustache or any other desired templating engine.
     * 
     * @param string $templatingEngine name of templating engine, lowercase
     * @return $this The current object (for fluent API support)
     */
    public function SetTemplatingEngine($templatingEngine);

    /**
     * Defines a templating engine to be used by the TableBuilder.
     * This may be Smarty, Blade, Mustache or any other desired templating engine.
     * 
     * @return string Fabricated HTML output for Table
     */
    public function BuildTable();

    /**
     * Defines a templating engine to be used by the TableBuilder.
     * This may be Smarty, Blade, Mustache or any other desired templating engine.
     * 
     * @return string Fabricated HTML output for Table Results, to be injected in Table TBODY
     */
    public function BuildTableResults();
}
