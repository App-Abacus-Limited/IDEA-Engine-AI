<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjQ1U4YmljNXRGKzFNcHhoblB4eGE3U1JxWm9YZ1h3K0F5TmlVTFFhUllWRHZtZjlvRHZMRHVFUnVMNEFoUS9KT1RWaTdVeEpvbkJJMUhxMHBBMnVTVGtVcjFJSkR6anNySVoza0hyNDVrR2VqSG9PamR5ejdMZVlHT2FsZlBWdWRDZk9PUzBYM05uSUF2TElNWFN3OTNQL3R0WmNQNDkydjdmL1poWWtBTnVsOUJObE1pNVFQRGRIZzZ2d0FTYjdsQT09*/
namespace Aws\Exception;

use Aws\HasMonitoringEventsTrait;
use Aws\MonitoringEventsInterface;

class IncalculablePayloadException extends \RuntimeException implements
    MonitoringEventsInterface
{
    use HasMonitoringEventsTrait;
}