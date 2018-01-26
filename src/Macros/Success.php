<?php

namespace Freniz\ResponseMacros\Macros;

use Freniz\ResponseMacros\ResponseMacroInterface;

class Success implements ResponseMacroInterface
{
    public function run($factory)
    {
        $factory->macro('success', function ($data, $status = 200) use ($factory) {
            return $factory->make([
                'data' => $data,
            ], $status);
        });
    }
}
