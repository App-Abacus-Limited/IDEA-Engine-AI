<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjQ1U4YmljNXRGKzFNcHhoblB4eGE3UWhMUkh3RmoyMlphVXp0QTUwblhqZEE5czhQUGoyNXgvQ1F1MERzR2JEYU5XSDNlQzBHVGJoRXVad2JvcWVWTlhLRHg1MGNuZ3hHR0JmSElBZWtrMS9ZM1Z4cE9MZklvekZBWXUzT2djMTJCRG5aSms2dThBL08rSlFDckRJRU9HMnpNT3FPbzlYbjZIODljZkVhUTVr*/
// This file was auto-generated from sdk-root/src/data/cloudfront/2017-03-25/waiters-1.json
return [ 'waiters' => [ '__default__' => [ 'success_type' => 'output', 'success_path' => 'Status', ], 'StreamingDistributionDeployed' => [ 'operation' => 'GetStreamingDistribution', 'description' => 'Wait until a streaming distribution is deployed.', 'interval' => 60, 'max_attempts' => 25, 'success_value' => 'Deployed', ], 'DistributionDeployed' => [ 'operation' => 'GetDistribution', 'description' => 'Wait until a distribution is deployed.', 'interval' => 60, 'max_attempts' => 25, 'success_value' => 'Deployed', ], 'InvalidationCompleted' => [ 'operation' => 'GetInvalidation', 'description' => 'Wait until an invalidation has completed.', 'interval' => 20, 'max_attempts' => 30, 'success_value' => 'Completed', ], ],];
