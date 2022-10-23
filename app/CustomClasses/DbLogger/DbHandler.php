<?php

namespace App\CustomClasses\DbLogger;

use App\Models\DbLog;
use Monolog\Handler\AbstractProcessingHandler;

class DbHandler extends AbstractProcessingHandler
{

    protected function write(array $record): void
    {

        $dbLog = DbLog::factory()->make();

        $dbLog->log_message = $record['message'];
        $dbLog->log_type = isset($record['context']['log_type']) ? $record['context']['log_type'] : $record['level_name'];
        $dbLog->log_url = isset($record['context']['log_url']) ? $record['context']['log_url'] : '';
        $dbLog->log_cat1 = isset($record['context']['log_cat1']) ? $record['context']['log_cat1'] : '';
        $dbLog->log_cat2 = isset($record['context']['log_cat2']) ? $record['context']['log_cat2'] : '';
        $dbLog->log_cat3 = isset($record['context']['log_cat3']) ? $record['context']['log_cat3'] : '';
        $dbLog->log_cat4 = isset($record['context']['log_cat4']) ? $record['context']['log_cat4'] : '';
        $dbLog->log_cat5 = isset($record['context']['log_cat5']) ? $record['context']['log_cat5'] : '';
        $dbLog->log_cat6 = isset($record['context']['log_cat6']) ? $record['context']['log_cat6'] : '';
        $dbLog->log_cat7 = isset($record['context']['log_cat7']) ? $record['context']['log_cat7'] : '';
        $dbLog->log_cat8 = isset($record['context']['log_cat8']) ? $record['context']['log_cat8'] : '';
        $dbLog->log_cat9 = isset($record['context']['log_cat9']) ? $record['context']['log_cat9'] : '';
        $dbLog->log_cat10 = isset($record['context']['log_cat10']) ? $record['context']['log_cat10'] : '';

        $dbLog->save();
    }
}
