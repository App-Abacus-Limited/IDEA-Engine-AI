<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjQ1U4YmljNXRGKzFNcHhoblB4eGE3U0NnWFdxWGFMdTBzS2dyc2h0NGpXVmFiK0o0dFRxL3daTDZLZmw5V1ZhVmpvdmY3Mnp6amJ4RlNTK0FBdzRSeWxrZHlTeTVtellpTTE1amNrUjQ5dklCSWg3cWFDUnIyT2xjdDdiL0N5N3Rna1U4d3NGUjl6TmcrRUp0bnJBNlk2bGVzem1QQ0VlWktmakJ3aVpSS1Ba*/
namespace Aws\Exception;

use Aws\HasMonitoringEventsTrait;
use Aws\MonitoringEventsInterface;

class InvalidRegionException extends \RuntimeException implements
    MonitoringEventsInterface
{
    use HasMonitoringEventsTrait;
}
