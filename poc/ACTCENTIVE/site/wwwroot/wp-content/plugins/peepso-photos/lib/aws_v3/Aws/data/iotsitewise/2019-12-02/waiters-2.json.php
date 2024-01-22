<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjQ1U4YmljNXRGKzFNcHhoblB4eGE3UjlpMFRQUGE2Q3RtRTRtVUdhU3oydys2K3lhTUpuOVZhM2tUazdlUC94RU52RHFibDd4QktaVHRGNno2SE5FZDBJRVBLY0MxR0t4NllnWEZScUVwZFhVSmgrbnJYRUxvcHRJMnc3SE45ZUhqeE1HOWlUMzZoSmlqNnRhUTVsaXNPTnJHN1pZc2lxSG4yK1Z2NzVEYjRV*/
// This file was auto-generated from sdk-root/src/data/iotsitewise/2019-12-02/waiters-2.json
return [ 'version' => 2, 'waiters' => [ 'AssetModelNotExists' => [ 'delay' => 3, 'maxAttempts' => 20, 'operation' => 'DescribeAssetModel', 'acceptors' => [ [ 'state' => 'success', 'matcher' => 'error', 'expected' => 'ResourceNotFoundException', ], ], ], 'AssetModelActive' => [ 'delay' => 3, 'maxAttempts' => 20, 'operation' => 'DescribeAssetModel', 'acceptors' => [ [ 'state' => 'success', 'matcher' => 'path', 'argument' => 'assetModelStatus.state', 'expected' => 'ACTIVE', ], [ 'state' => 'failure', 'matcher' => 'path', 'argument' => 'assetModelStatus.state', 'expected' => 'FAILED', ], ], ], 'AssetNotExists' => [ 'delay' => 3, 'maxAttempts' => 20, 'operation' => 'DescribeAsset', 'acceptors' => [ [ 'state' => 'success', 'matcher' => 'error', 'expected' => 'ResourceNotFoundException', ], ], ], 'AssetActive' => [ 'delay' => 3, 'maxAttempts' => 20, 'operation' => 'DescribeAsset', 'acceptors' => [ [ 'state' => 'success', 'matcher' => 'path', 'argument' => 'assetStatus.state', 'expected' => 'ACTIVE', ], [ 'state' => 'failure', 'matcher' => 'path', 'argument' => 'assetStatus.state', 'expected' => 'FAILED', ], ], ], 'PortalNotExists' => [ 'delay' => 3, 'maxAttempts' => 20, 'operation' => 'DescribePortal', 'acceptors' => [ [ 'state' => 'success', 'matcher' => 'error', 'expected' => 'ResourceNotFoundException', ], ], ], 'PortalActive' => [ 'delay' => 3, 'maxAttempts' => 20, 'operation' => 'DescribePortal', 'acceptors' => [ [ 'state' => 'success', 'matcher' => 'path', 'argument' => 'portalStatus.state', 'expected' => 'ACTIVE', ], ], ], ],];
