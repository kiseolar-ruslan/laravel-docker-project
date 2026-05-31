<?php

namespace App\TestServices;

class TestService
{
    public function __construct(protected string $appUrl)
    {
    }

    public function getProjectUrl(): string
    {
        return $this->appUrl;
    }
}
