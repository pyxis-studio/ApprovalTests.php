<?php

namespace ApprovalTests\Reporters;

class BeyondCompare3ReporterWindows extends WindowsDiffInfoReporter
{
    public function __construct()
    {
        parent::__construct('BEYOND_COMPARE_3');
    }
}