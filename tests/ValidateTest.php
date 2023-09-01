<?php
use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidateTest extends TestCase
{
    public function test_email()
    {
        $email = Validate::email('jwga76@gmail.com');
        $this->assertTrue($email);
        
        $email = Validate::email('jwga76@@gmail.com');
        $this->assertFalse($email);
    }

    public function test_url()
    {
        $url = Validate::url("hello");
        $this->assertFalse($url);

        $url = Validate::url("https://google.com");
        $this->assertTrue($url);
    }

    public function test_password()
    {
        $password = Validate::password('1234567');
        $this->assertTrue($password);

        $password = Validate::password('1234567a');
        $this->assertFalse($password);
    }
}