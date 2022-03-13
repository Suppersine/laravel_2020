<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class Testcontroller extends Controller
{
    public function TestPage() {
        echo "Test OK!";
    }

    public function TestParameterPage($parameter) {
        echo "I get the $parameter already";
    }
}