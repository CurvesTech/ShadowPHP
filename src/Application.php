<?php

namespace Shadow;

use Shadow\Http\Request;

class Application
{
    public function process(Request $request): string
    {
        return 'Welcome to Shadow';
    }
}
