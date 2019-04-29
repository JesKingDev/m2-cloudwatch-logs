# AWS CloudWatch Logs Handler for Magento

[![License](https://img.shields.io/badge/license-MIT-brightgreen.svg)](https://github.com/JesKingDev/m2-cloudwatch-logs/blob/master/LICENSE)
[![Version](https://img.shields.io/badge/version-unreleased-red.svg)](https://github.com/JesKingDev/m2-cloudwatch-logs/releases)

Magento 2 extension for sending log entries to 
[AWS CloudWatch Logs](http://docs.aws.amazon.com/AmazonCloudWatch/latest/logs/WhatIsCloudWatchLogs.html) service from [Monolog](https://github.com/Seldaek/monolog). Based on [Max Banton's AWS CloudWatch handler](https://github.com/maxbanton/cwhHandler). 

Before using this extension, it's recommended to get acquainted with the [pricing](https://aws.amazon.com/en/cloudwatch/pricing/) for AWS CloudWatch services.

This extension is under development.

## Future Features
### v1.0
* Magento Admin configuration option panel for AWS SDK parameters
* Configuurable Log Group Name
* Configurable Log Stream Name
* Instructions for usage/implementation in a module defined Logger
### v1.1
* Add environment variable support for Log Group and Log Stream names allowing injection of  ec2 instance id, application name, or other variables for improved flexibility.
### v1.2
* Enable hanlder for all Magento framework logs (system, exception, debug, etc.)

## Installation
With version 1.0, the package will be made available with [Composer](https://getcomposer.org/).
 
## Issues
Feel free to [report any issues or request a feature](https://github.com/JesKingDev/m2-cloudwatch-logs/issues/new).

## Contributing
Pull requests are welcome! Refer to [contribution guidelines](https://github.com/JesKingDev/m2-cloudwatch-logs/blob/master/CONTRIBUTING.md).

## Credits

Thank you to [@risaco](https://github.com/risaco) for her [inpirational talk about AWS CloudWatch](https://github.com/risaco/CLOUDWATCHING) at [Southern Dev Co 2019](http://southerndev.co/). Seeing the power of the AWS CloudWatch logs triggered the idea for a proof of concept for Magento.