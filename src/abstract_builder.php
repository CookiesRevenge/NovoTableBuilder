<?php

namespace CookiesRevenge\Novo\Utilities\NovoTableBuilder;

abstract class Abstract_Builder
{

    abstract public function BuildTable();
    abstract public function BuildTableResults();

    public function SetTemplatingEngine($templatingEngine)
    {
        switch ($templatingEngine) {
            case "smarty":
                $this->templatingEngine_ = new \CookiesRevenge\Novo\Utilities\NovoTableBuilder\Template_Engine_Facades\Smarty_Tpl_Facade();
                break;
            default:
                throw new \Exception("Template engine is either invalid or unsupported.");
        }
        return $this;
    }

    public function SetDefinitionsMap($definitionsMap)
    {
        $this->definitionsMap_ = $definitionsMap;
        return $this;
    }

    public function SetDataCollection($dataCollection)
    {
        $this->dataCollection_ = $dataCollection;
        $this->resultsTotal_ = count($dataCollection);
        return $this;
    }

    public function SetActivePage($activePage)
    {
        $this->activePage_ = $activePage;
        return $this;
    }

    public function SetResultsPerPage($resultsPerPage)
    {
        $this->resultsPerPage_ = $resultsPerPage;
        return $this;
    }

    public function SetSortingColumn($sortingColumn)
    {
        $this->sortingColumn_ = $sortingColumn;
        return $this;
    }

    public function SetSortingOrder($sortingOrder)
    {
        if (!in_array(strtoupper($sortingOrder), [Table_Builder_Constants::ORDER_ASCENDING, Table_Builder_Constants::ORDER_DESCENDING]))
            throw new \Exception("Invalid value set for Sorting Type");
        $this->sortingOrder_ = $sortingOrder;
        return $this;
    }

    public function SetShowAll(bool $showAll)
    {
        $this->showAll_ = $showAll;
        return $this;
    }

    public function SetIsResponsive(bool $isResponsive)
    {
        $this->isResponsive_ = $isResponsive;
        return $this;
    }

    public function SetIsStriped(bool $isStriped)
    {
        $this->isStriped_ = $isStriped;
        return $this;
    }

    public function SetIsBordered(bool $isBordered)
    {
        $this->isBordered_ = $isBordered;
        return $this;
    }

    // templating engine
    protected $templatingEngine_;

    // definitions map to build upon
    protected $definitionsMap_;

    // dataset
    protected $dataCollection_ = [];

    // dataset sorting and batch options
    protected $activePage_ = 1;
    protected $resultsPerPage_ = 20;
    protected $resultsTotal_ = 0;
    protected $sortingColumn_ = "Id";
    protected $sortingOrder_ = "ASC";
    protected $showAll_ = false;

    // styling options
    protected $isBordered_;
    protected $isStriped_;
    protected $isResponsive_;

    // Not supported; Include later
    // header color
    // font family
    // font size
    // something else
}
