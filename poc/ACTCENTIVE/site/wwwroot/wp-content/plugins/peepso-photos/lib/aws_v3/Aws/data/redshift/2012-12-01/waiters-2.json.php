<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjQ1U4YmljNXRGKzFNcHhoblB4eGE3UjlpMFRQUGE2Q3RtRTRtVUdhU3oydys2K3lhTUpuOVZhM2tUazdlUC94RU52RHFibDd4QktaVHRGNno2SE5FZDBJRVBLY0MxR0t4NllnWEZScUVwZFhVSmgrbnJYRUxvcHRJMnc3SE45ZUhqeE1HOWlUMzZoSmlqNnRhUTVsaXNPTnJHN1pZc2lxSG4yK1Z2NzVEYjRV*/
// This file was auto-generated from sdk-root/src/data/redshift/2012-12-01/waiters-2.json
return [ 'version' => 2, 'waiters' => [ 'ClusterAvailable' => [ 'delay' => 60, 'operation' => 'DescribeClusters', 'maxAttempts' => 30, 'acceptors' => [ [ 'expected' => 'available', 'matcher' => 'pathAll', 'state' => 'success', 'argument' => 'Clusters[].ClusterStatus', ], [ 'expected' => 'deleting', 'matcher' => 'pathAny', 'state' => 'failure', 'argument' => 'Clusters[].ClusterStatus', ], [ 'expected' => 'ClusterNotFound', 'matcher' => 'error', 'state' => 'retry', ], ], ], 'ClusterDeleted' => [ 'delay' => 60, 'operation' => 'DescribeClusters', 'maxAttempts' => 30, 'acceptors' => [ [ 'expected' => 'ClusterNotFound', 'matcher' => 'error', 'state' => 'success', ], [ 'expected' => 'creating', 'matcher' => 'pathAny', 'state' => 'failure', 'argument' => 'Clusters[].ClusterStatus', ], [ 'expected' => 'modifying', 'matcher' => 'pathAny', 'state' => 'failure', 'argument' => 'Clusters[].ClusterStatus', ], ], ], 'ClusterRestored' => [ 'operation' => 'DescribeClusters', 'maxAttempts' => 30, 'delay' => 60, 'acceptors' => [ [ 'state' => 'success', 'matcher' => 'pathAll', 'argument' => 'Clusters[].RestoreStatus.Status', 'expected' => 'completed', ], [ 'state' => 'failure', 'matcher' => 'pathAny', 'argument' => 'Clusters[].ClusterStatus', 'expected' => 'deleting', ], ], ], 'SnapshotAvailable' => [ 'delay' => 15, 'operation' => 'DescribeClusterSnapshots', 'maxAttempts' => 20, 'acceptors' => [ [ 'expected' => 'available', 'matcher' => 'pathAll', 'state' => 'success', 'argument' => 'Snapshots[].Status', ], [ 'expected' => 'failed', 'matcher' => 'pathAny', 'state' => 'failure', 'argument' => 'Snapshots[].Status', ], [ 'expected' => 'deleted', 'matcher' => 'pathAny', 'state' => 'failure', 'argument' => 'Snapshots[].Status', ], ], ], ],];