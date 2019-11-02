<?php

namespace CookiesRevenge\Novo\Utilities\NovoTableBuilder;

class Table_Builder extends Abstract_Builder
{

    public function BuildTable() {
        $this->templatingEngine_->ConstructEngineObject();
        $this->assignTableMetadata();
        return $this->templatingEngine_->BuildTableHTML(false);
    }

    public function BuildTableResults() {
        $this->templatingEngine_->ConstructEngineObject();
        $this->assignTableMetadata();
        return $this->templatingEngine_->BuildTableHTML(true);
    }

    private function assignTableMetadata() {
        $this->templatingEngine_
            ->AssignVariable("title", $this->definitionsMap_["title"])
            ->AssignVariable("entity", $this->definitionsMap_["entity"])
            ->AssignVariable("search_url", $this->definitionsMap_["search_url"])

            ->AssignVariable("records", $this->dataCollection_["records"])
            ->AssignVariable("filters", isset($this->dataCollection_["filters"]) ? $this->dataCollection_["filters"] : null)

            ->AssignVariable("pagination", $this->definitionsMap_["pagination"])
            ->AssignVariable("active_page", $this->activePage_)
            ->AssignVariable("total_pages", ceil($this->resultsTotal_ / $this->resultsPerPage_)
            ->AssignVariable("total_records", $this->resultsTotal_)

            ->AssignVariable("sorting_column", $this->sortingColumn_)
            ->AssignVariable("sorting_order", $this->sortingOrder_)

            ->AssignVariable("filter_definitions", $this->definitionsMap_["filters"])
            ->AssignVariable("field_definitions", $this->definitionsMap_["fields"])

            ->AssignVariable("show_all_checkbox", $this->definitionsMap_["show_all"] ?? false)
            ->AssignVariable("succeeding_partial", isset($this->definitionsMap_["succeeding_partial"]) ? $this->definitionsMap_["succeeding_partial"] : null))
            ->AssignVariable("multiline_actions", isset($this->definitionsMap_["multiline_actions"]) ? $this->definitionsMap_["multiline_actions"] : null)
            ->AssignVariable("table_actions", isset($this->definitionsMap_["table_actions"]) ? $this->definitionsMap_["table_actions"] : null);
    }
}