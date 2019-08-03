<?php
/**
 * @author Ramy Hakam
 * tests/units/indexTest.php
 */
namespace Tests\Units;

use Symfony\Component\HttpFoundation\Request;

class IndexTest extends \PHPUnit\Framework\TestCase
{

    public  function  testCanSendHelloMessage(){

        $request = Request::create('/hello/RamyHakam');
        ob_start();
        include  __DIR__.'/../../web/index.php';
        $content = ob_get_clean();

        $this->assertEquals('Hello RamyHakam',$content);

    }

}
