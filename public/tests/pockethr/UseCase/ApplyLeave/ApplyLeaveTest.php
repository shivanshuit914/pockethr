<?php

namespace Pockethr\UseCase\ApplyLeave;

use Tests\TestCase;

class ApplyLeaveTest extends TestCase
{
    /**
     * @Test
     */
    public function applyForLeave()
    {
        $leaveRequest = new ApplyLeaveRequest();
        $leaveResponse = new ApplyLeaveResponse();
        $applyLeave = new ApplyLeave();
        $applyLeave->handle($leaveRequest, $leaveResponse);
    }
}