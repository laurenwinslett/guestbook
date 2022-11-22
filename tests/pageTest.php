<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class pageTest extends TestCase
{
    public function testSomething(): void
    {
         // Request a specific page
        $page_response =           
file_get_contents('https://guestbook.lwinslett.repl.co/');
      echo $page_response
        $this->assertStringContainsString("View our guestbook below", $page_response);

       
    }
}