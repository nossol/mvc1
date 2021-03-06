<?php

namespace AppTest\Service;

use App\Service\View;
use PHPUnit\Framework\TestCase;

class ViewTest extends TestCase
{
    private View $view;

    protected function setUp(): void
    {
        $this->view = new View();

        parent::setUp(); // TODO: Change the autogenerated stub
    }

    public function testExceptionWhenTemplateInvalid(): void
    {
        $template = 'invalid template';

        $this->view->addTemplate($template);
        $this->view->display();

        self::assertSame('404.tpl', $this->view->getTemplate());
    }

    public function testExceptionWhenParamsInvalid(): void
    {
        $name = 'invalid name';
        $value = 'invalid value';

        $this->view->addTlpParam($name, $value);
        $this->view->display();

        self::assertSame('404.tpl', $this->view->getTemplate());
    }
}
