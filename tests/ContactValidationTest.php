<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../includes/submit-contact.php';

class ContactValidationTest extends TestCase
{
    // POS-95
    public function testInvalidEmail()
    {
        $result = validateContactForm(
            "Ali",
            "invalid-email",
            "Hello"
        );

        $this->assertEquals(
            "Invalid email",
            $result
        );
    }

    // POS-96
    public function testSuccessfulSubmission()
    {
        $result = validateContactForm(
            "Ali",
            "ali@gmail.com",
            "Testing"
        );

        $this->assertEquals(
            "Success",
            $result
        );
    }

    // Extra meaningful test
    public function testEmptyFields()
    {
        $result = validateContactForm(
            "",
            "",
            ""
        );

        $this->assertEquals(
            "All fields are required",
            $result
        );
    }
}