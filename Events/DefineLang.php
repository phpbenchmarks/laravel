<?php

namespace PhpBenchmarksLaravel\Events;

class DefineLang
{
    /** @var string */
    protected $lang;

    public function __construct()
    {
        $locales = ['fr_FR', 'en_GB', 'aa_BB'];
        $this->lang = $locales[rand(0, 2)];
    }

    public function getLang()
    {
        return $this->lang;
    }
}
