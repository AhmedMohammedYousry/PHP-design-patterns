<?php

namespace Behavioral\Template;

abstract class Page
{
    private array $renderedSteps;
    final public function renderPage(): string
    {
        $this->renderedSteps [] = $this->getPageHeader();
        $this->renderedSteps [] = $this->getPageNav();
        $this->renderedSteps [] = $this->getPageBody();
        $this->renderedSteps [] = $this->getPageFooter();
        return implode(" ", $this->renderedSteps);
    }
    abstract protected function getPageHeader(): string;

    abstract protected function getPageNav(): string;

    abstract protected function getPageBody(): string;

    abstract protected function getPageFooter(): string;
}