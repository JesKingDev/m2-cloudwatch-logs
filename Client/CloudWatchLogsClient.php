<?php

namespace JesKingDev\CloudwatchLogs\Client;


class CloudWatchLogsClient extends \Aws\CloudWatchLogs\CloudWatchLogsClient
{
    public function __construct()
    {
        $sdkParams = [
            'region' => 'us-east-1', //TODO pull aws sdk region from admin config
            'version' => 'latest', //TODO pull aws sdk version from admin config
            'credentials' => [
                'key' => 'xxxxx', //TODO pull aws sdk key from encrypted admin config
                'secret' => 'xxxxx' //TODO pull aws sdk secret from encryptedadmin config
            ]
        ];
        //TODO add README docs for creating an IAM role and IAM user specifically for CloudWatch (instead of using shared credentials)
        parent::__construct($sdkParams);
    }
}