<?php

namespace App\Services;

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
