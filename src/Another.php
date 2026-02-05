<?php

namespace App;

class Another
{
    public function test(): string
    {
        return 'Test';
    }
}

$another = new Another();
echo $another->test();
