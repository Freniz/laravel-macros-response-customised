<?php

namespace Freniz\ResponseMacros;

interface ResponseMacroInterface
{
    /**
     * Run.
     * @param  ResponseFactory $factory
     */
    public function run($factory);
}
