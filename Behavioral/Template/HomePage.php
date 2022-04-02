<?php

namespace Behavioral\Template;

class HomePage extends Page
{
    protected function getPageHeader(): string
    {
        return "<header>Load css and js files</header>";
    }

    protected function getPageNav(): string
    {
        return "<nav>Navigation List</nav>";
    }

    protected function getPageBody(): string
    {
        return "<body>List Of News Feeds</body>";
    }

    protected function getPageFooter(): string
    {
        return "<footer>Contact Us</footer>";
    }
}