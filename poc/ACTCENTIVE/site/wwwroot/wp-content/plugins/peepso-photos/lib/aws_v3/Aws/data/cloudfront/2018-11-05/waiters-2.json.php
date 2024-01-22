<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjQ1U4YmljNXRGKzFNcHhoblB4eGE3UjlpMFRQUGE2Q3RtRTRtVUdhU3oydys2K3lhTUpuOVZhM2tUazdlUC94RU52RHFibDd4QktaVHRGNno2SE5FZDBJRVBLY0MxR0t4NllnWEZScUVwZFhVSmgrbnJYRUxvcHRJMnc3SE45ZUhqeE1HOWlUMzZoSmlqNnRhUTVsaXNPTnJHN1pZc2lxSG4yK1Z2NzVEYjRV*/
// This file was auto-generated from sdk-root/src/data/cloudfront/2018-11-05/waiters-2.json
return [ 'version' => 2, 'waiters' => [ 'DistributionDeployed' => [ 'delay' => 60, 'operation' => 'GetDistribution', 'maxAttempts' => 25, 'description' => 'Wait until a distribution is deployed.', 'acceptors' => [ [ 'expected' => 'Deployed', 'matcher' => 'path', 'state' => 'success', 'argument' => 'Distribution.Status', ], ], ], 'InvalidationCompleted' => [ 'delay' => 20, 'operation' => 'GetInvalidation', 'maxAttempts' => 30, 'description' => 'Wait until an invalidation has completed.', 'acceptors' => [ [ 'expected' => 'Completed', 'matcher' => 'path', 'state' => 'success', 'argument' => 'Invalidation.Status', ], ], ], 'StreamingDistributionDeployed' => [ 'delay' => 60, 'operation' => 'GetStreamingDistribution', 'maxAttempts' => 25, 'description' => 'Wait until a streaming distribution is deployed.', 'acceptors' => [ [ 'expected' => 'Deployed', 'matcher' => 'path', 'state' => 'success', 'argument' => 'StreamingDistribution.Status', ], ], ], ],];
