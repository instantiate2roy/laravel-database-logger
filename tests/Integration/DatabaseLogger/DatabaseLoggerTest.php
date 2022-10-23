<?php

namespace Tests\Integration\DatabaseLogger;

use App\Models\DbLog;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;

class DatabaseLoggerTest extends TestCase
{
    private $errorMsg;
    private $logType;

    public function setUp(): void
    {
        parent::setUp();
        $this->errorMsg = 'Sample Message';
        $this->logType = 'TEST_ERROR';
    }

    /**
     * Test to see if record is inserted into message_log table
     *
     * @return void
     */
    public function test_DatabaseLogger_can_save_to_log_table()
    {
        Log::channel('db')->error($this->errorMsg, ['log_type' => $this->logType]);

        $logCollection = DbLog::where([['log_type', $this->logType], ['log_message', $this->errorMsg]])->get();
        foreach ($logCollection as $log) {
            $this->assertEquals($log->log_message, $this->errorMsg);
            $this->assertEquals($log->log_type, $this->logType);
        }

    }

    public function tearDown(): void
    {
        //clean out test data
        DbLog::where([['log_type', $this->logType], ['log_message', $this->errorMsg]])->forceDelete();

    }
}
