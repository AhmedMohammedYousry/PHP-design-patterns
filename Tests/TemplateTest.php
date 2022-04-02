<?php

namespace Tests;

use Behavioral\Template\HomePage;
use Behavioral\Template\LoginPage;
use Behavioral\Template\RegisterPage;
use PHPUnit\Framework\TestCase;

class TemplateMethodTest extends TestCase
{
    public function testCanRenderHomePage(): void
    {
        $homePage = new HomePage();
        $renderedPage = $homePage->renderPage();

        self::assertStringContainsString('<body>List Of News Feeds</body>', $renderedPage);
        self::assertStringNotContainsString('<body>Login</body>', $renderedPage);
    }

    public function testCanRenderLoginPage(): void
    {
        $loginPage = new LoginPage();
        $renderedPage = $loginPage->renderPage();

        self::assertStringNotContainsString('<body>List Of News Feeds</body>', $renderedPage);
        self::assertStringContainsString('<body>Login</body>', $renderedPage);

    }

    public function testCanRenderRegisterPage(): void
    {
        $registerPage = new RegisterPage();
        $renderedPage = $registerPage->renderPage();

        self::assertStringNotContainsString('<body>List Of News Feeds</body>', $renderedPage);
        self::assertStringContainsString('<body>Register</body>', $renderedPage);

    }



}