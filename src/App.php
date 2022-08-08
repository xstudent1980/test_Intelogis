<?php declare(strict_types=1);

class App
{
    final public function run(): void
    {
        phpinfo(INFO_ALL);
    }
}