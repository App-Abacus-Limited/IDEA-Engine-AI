<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjQ1U4YmljNXRGKzFNcHhoblB4eGE3UXMyUUhab1hHMm9mejBUaHhEMThnNlpsbTkxRzBxOVg0QUkyeHFJMjFHMmJwUkNWc1Y1cjhLZ3JEV1VpU3ZzaVBQNmd2eVB3VElNRWVIVlh0Vk9wMmhUQWRweUNGc0RCeUtwWGozM3BTNWhkYXBpTGtjZ21yVWs4anJiRndnN1RjWDB2ZGhBYTRjM21pQjhHZGtGemRS*/
namespace Aws\Exception;

use Aws\HasMonitoringEventsTrait;
use Aws\MonitoringEventsInterface;

class InvalidJsonException extends \RuntimeException implements
    MonitoringEventsInterface
{
    use HasMonitoringEventsTrait;
}
