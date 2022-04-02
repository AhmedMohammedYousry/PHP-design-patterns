<?php

namespace Behavioral\Template;

class LoginPage extends Page
{
    protected function getPageHeader(): string
    {
        return "<header>Load css and js files</header>";
    }

    protected function getPageNav(): string
    {
        return "";
    }

    protected function getPageBody(): string
    {
        return "<body>Login</body>";
    }

    protected function getPageFooter(): string
    {
        return "<footer>Contact Us</footer>";
    }
}