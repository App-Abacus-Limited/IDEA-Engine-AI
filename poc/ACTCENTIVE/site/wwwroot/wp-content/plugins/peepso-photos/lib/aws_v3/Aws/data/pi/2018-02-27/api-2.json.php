<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjQ1U4YmljNXRGKzFNcHhoblB4eGE3UUdrd0VERE91Q0N3OTB6bHA2NzFsUmxDRCtWeEJnN2RxNUlaeGtrbnVISnJYT3JUVzF1dFRiY2UzbDRxWHJ6aVpaTXlzZmJqR0F5c0RqdHF4RjdzVXdzR3UvMGNxNitSRGtpd3ZDQXdIeHZZazNtdW01OVhuTGdXSThSQnpvemxvPQ==*/
// This file was auto-generated from sdk-root/src/data/pi/2018-02-27/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2018-02-27', 'endpointPrefix' => 'pi', 'jsonVersion' => '1.1', 'protocol' => 'json', 'serviceAbbreviation' => 'AWS PI', 'serviceFullName' => 'AWS Performance Insights', 'serviceId' => 'PI', 'signatureVersion' => 'v4', 'signingName' => 'pi', 'targetPrefix' => 'PerformanceInsightsv20180227', 'uid' => 'pi-2018-02-27', ], 'operations' => [ 'DescribeDimensionKeys' => [ 'name' => 'DescribeDimensionKeys', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeDimensionKeysRequest', ], 'output' => [ 'shape' => 'DescribeDimensionKeysResponse', ], 'errors' => [ [ 'shape' => 'InvalidArgumentException', ], [ 'shape' => 'InternalServiceError', ], [ 'shape' => 'NotAuthorizedException', ], ], ], 'GetDimensionKeyDetails' => [ 'name' => 'GetDimensionKeyDetails', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetDimensionKeyDetailsRequest', ], 'output' => [ 'shape' => 'GetDimensionKeyDetailsResponse', ], 'errors' => [ [ 'shape' => 'InvalidArgumentException', ], [ 'shape' => 'InternalServiceError', ], [ 'shape' => 'NotAuthorizedException', ], ], ], 'GetResourceMetadata' => [ 'name' => 'GetResourceMetadata', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetResourceMetadataRequest', ], 'output' => [ 'shape' => 'GetResourceMetadataResponse', ], 'errors' => [ [ 'shape' => 'InvalidArgumentException', ], [ 'shape' => 'InternalServiceError', ], [ 'shape' => 'NotAuthorizedException', ], ], ], 'GetResourceMetrics' => [ 'name' => 'GetResourceMetrics', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetResourceMetricsRequest', ], 'output' => [ 'shape' => 'GetResourceMetricsResponse', ], 'errors' => [ [ 'shape' => 'InvalidArgumentException', ], [ 'shape' => 'InternalServiceError', ], [ 'shape' => 'NotAuthorizedException', ], ], ], 'ListAvailableResourceDimensions' => [ 'name' => 'ListAvailableResourceDimensions', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListAvailableResourceDimensionsRequest', ], 'output' => [ 'shape' => 'ListAvailableResourceDimensionsResponse', ], 'errors' => [ [ 'shape' => 'InvalidArgumentException', ], [ 'shape' => 'InternalServiceError', ], [ 'shape' => 'NotAuthorizedException', ], ], ], 'ListAvailableResourceMetrics' => [ 'name' => 'ListAvailableResourceMetrics', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListAvailableResourceMetricsRequest', ], 'output' => [ 'shape' => 'ListAvailableResourceMetricsResponse', ], 'errors' => [ [ 'shape' => 'InvalidArgumentException', ], [ 'shape' => 'InternalServiceError', ], [ 'shape' => 'NotAuthorizedException', ], ], ], ], 'shapes' => [ 'AdditionalMetricsList' => [ 'type' => 'list', 'member' => [ 'shape' => 'RequestString', ], 'max' => 30, 'min' => 1, ], 'AdditionalMetricsMap' => [ 'type' => 'map', 'key' => [ 'shape' => 'RequestString', ], 'value' => [ 'shape' => 'Double', ], ], 'DataPoint' => [ 'type' => 'structure', 'required' => [ 'Timestamp', 'Value', ], 'members' => [ 'Timestamp' => [ 'shape' => 'ISOTimestamp', ], 'Value' => [ 'shape' => 'Double', ], ], ], 'DataPointsList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DataPoint', ], ], 'DescribeDimensionKeysRequest' => [ 'type' => 'structure', 'required' => [ 'ServiceType', 'Identifier', 'StartTime', 'EndTime', 'Metric', 'GroupBy', ], 'members' => [ 'ServiceType' => [ 'shape' => 'ServiceType', ], 'Identifier' => [ 'shape' => 'RequestString', ], 'StartTime' => [ 'shape' => 'ISOTimestamp', ], 'EndTime' => [ 'shape' => 'ISOTimestamp', ], 'Metric' => [ 'shape' => 'RequestString', ], 'PeriodInSeconds' => [ 'shape' => 'Integer', ], 'GroupBy' => [ 'shape' => 'DimensionGroup', ], 'AdditionalMetrics' => [ 'shape' => 'AdditionalMetricsList', ], 'PartitionBy' => [ 'shape' => 'DimensionGroup', ], 'Filter' => [ 'shape' => 'MetricQueryFilterMap', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'DescribeDimensionKeysResponse' => [ 'type' => 'structure', 'members' => [ 'AlignedStartTime' => [ 'shape' => 'ISOTimestamp', ], 'AlignedEndTime' => [ 'shape' => 'ISOTimestamp', ], 'PartitionKeys' => [ 'shape' => 'ResponsePartitionKeyList', ], 'Keys' => [ 'shape' => 'DimensionKeyDescriptionList', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'Description' => [ 'type' => 'string', 'max' => 2048, 'min' => 1, ], 'DetailStatus' => [ 'type' => 'string', 'enum' => [ 'AVAILABLE', 'PROCESSING', 'UNAVAILABLE', ], ], 'DimensionDetail' => [ 'type' => 'structure', 'members' => [ 'Identifier' => [ 'shape' => 'String', ], ], ], 'DimensionDetailList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DimensionDetail', ], ], 'DimensionGroup' => [ 'type' => 'structure', 'required' => [ 'Group', ], 'members' => [ 'Group' => [ 'shape' => 'RequestString', ], 'Dimensions' => [ 'shape' => 'RequestStringList', ], 'Limit' => [ 'shape' => 'Limit', ], ], ], 'DimensionGroupDetail' => [ 'type' => 'structure', 'members' => [ 'Group' => [ 'shape' => 'String', ], 'Dimensions' => [ 'shape' => 'DimensionDetailList', ], ], ], 'DimensionGroupDetailList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DimensionGroupDetail', ], ], 'DimensionKeyDescription' => [ 'type' => 'structure', 'members' => [ 'Dimensions' => [ 'shape' => 'DimensionMap', ], 'Total' => [ 'shape' => 'Double', ], 'AdditionalMetrics' => [ 'shape' => 'AdditionalMetricsMap', ], 'Partitions' => [ 'shape' => 'MetricValuesList', ], ], ], 'DimensionKeyDescriptionList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DimensionKeyDescription', ], ], 'DimensionKeyDetail' => [ 'type' => 'structure', 'members' => [ 'Value' => [ 'shape' => 'String', ], 'Dimension' => [ 'shape' => 'String', ], 'Status' => [ 'shape' => 'DetailStatus', ], ], ], 'DimensionKeyDetailList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DimensionKeyDetail', ], ], 'DimensionMap' => [ 'type' => 'map', 'key' => [ 'shape' => 'RequestString', ], 'value' => [ 'shape' => 'RequestString', ], ], 'DimensionsMetricList' => [ 'type' => 'list', 'member' => [ 'shape' => 'RequestString', ], 'max' => 5, 'min' => 1, ], 'Double' => [ 'type' => 'double', ], 'ErrorString' => [ 'type' => 'string', ], 'FeatureMetadata' => [ 'type' => 'structure', 'members' => [ 'Status' => [ 'shape' => 'FeatureStatus', ], ], ], 'FeatureMetadataMap' => [ 'type' => 'map', 'key' => [ 'shape' => 'String', ], 'value' => [ 'shape' => 'FeatureMetadata', ], ], 'FeatureStatus' => [ 'type' => 'string', 'enum' => [ 'ENABLED', 'DISABLED', 'UNSUPPORTED', 'ENABLED_PENDING_REBOOT', 'DISABLED_PENDING_REBOOT', 'UNKNOWN', ], ], 'GetDimensionKeyDetailsRequest' => [ 'type' => 'structure', 'required' => [ 'ServiceType', 'Identifier', 'Group', 'GroupIdentifier', ], 'members' => [ 'ServiceType' => [ 'shape' => 'ServiceType', ], 'Identifier' => [ 'shape' => 'IdentifierString', ], 'Group' => [ 'shape' => 'RequestString', ], 'GroupIdentifier' => [ 'shape' => 'RequestString', ], 'RequestedDimensions' => [ 'shape' => 'RequestedDimensionList', ], ], ], 'GetDimensionKeyDetailsResponse' => [ 'type' => 'structure', 'members' => [ 'Dimensions' => [ 'shape' => 'DimensionKeyDetailList', ], ], ], 'GetResourceMetadataRequest' => [ 'type' => 'structure', 'required' => [ 'ServiceType', 'Identifier', ], 'members' => [ 'ServiceType' => [ 'shape' => 'ServiceType', ], 'Identifier' => [ 'shape' => 'RequestString', ], ], ], 'GetResourceMetadataResponse' => [ 'type' => 'structure', 'members' => [ 'Identifier' => [ 'shape' => 'String', ], 'Features' => [ 'shape' => 'FeatureMetadataMap', ], ], ], 'GetResourceMetricsRequest' => [ 'type' => 'structure', 'required' => [ 'ServiceType', 'Identifier', 'MetricQueries', 'StartTime', 'EndTime', ], 'members' => [ 'ServiceType' => [ 'shape' => 'ServiceType', ], 'Identifier' => [ 'shape' => 'RequestString', ], 'MetricQueries' => [ 'shape' => 'MetricQueryList', ], 'StartTime' => [ 'shape' => 'ISOTimestamp', ], 'EndTime' => [ 'shape' => 'ISOTimestamp', ], 'PeriodInSeconds' => [ 'shape' => 'Integer', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'GetResourceMetricsResponse' => [ 'type' => 'structure', 'members' => [ 'AlignedStartTime' => [ 'shape' => 'ISOTimestamp', ], 'AlignedEndTime' => [ 'shape' => 'ISOTimestamp', ], 'Identifier' => [ 'shape' => 'String', ], 'MetricList' => [ 'shape' => 'MetricKeyDataPointsList', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'ISOTimestamp' => [ 'type' => 'timestamp', ], 'IdentifierString' => [ 'type' => 'string', 'max' => 256, 'min' => 0, 'pattern' => '^db-[a-zA-Z0-9-]*$', ], 'Integer' => [ 'type' => 'integer', ], 'InternalServiceError' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorString', ], ], 'exception' => true, 'fault' => true, ], 'InvalidArgumentException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorString', ], ], 'exception' => true, ], 'Limit' => [ 'type' => 'integer', 'max' => 10, 'min' => 1, ], 'ListAvailableResourceDimensionsRequest' => [ 'type' => 'structure', 'required' => [ 'ServiceType', 'Identifier', 'Metrics', ], 'members' => [ 'ServiceType' => [ 'shape' => 'ServiceType', ], 'Identifier' => [ 'shape' => 'RequestString', ], 'Metrics' => [ 'shape' => 'DimensionsMetricList', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListAvailableResourceDimensionsResponse' => [ 'type' => 'structure', 'members' => [ 'MetricDimensions' => [ 'shape' => 'MetricDimensionsList', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListAvailableResourceMetricsRequest' => [ 'type' => 'structure', 'required' => [ 'ServiceType', 'Identifier', 'MetricTypes', ], 'members' => [ 'ServiceType' => [ 'shape' => 'ServiceType', ], 'Identifier' => [ 'shape' => 'RequestString', ], 'MetricTypes' => [ 'shape' => 'MetricTypeList', ], 'NextToken' => [ 'shape' => 'NextToken', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], ], ], 'ListAvailableResourceMetricsResponse' => [ 'type' => 'structure', 'members' => [ 'Metrics' => [ 'shape' => 'ResponseResourceMetricList', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'MaxResults' => [ 'type' => 'integer', 'max' => 20, 'min' => 0, ], 'MetricDimensionGroups' => [ 'type' => 'structure', 'members' => [ 'Metric' => [ 'shape' => 'String', ], 'Groups' => [ 'shape' => 'DimensionGroupDetailList', ], ], ], 'MetricDimensionsList' => [ 'type' => 'list', 'member' => [ 'shape' => 'MetricDimensionGroups', ], ], 'MetricKeyDataPoints' => [ 'type' => 'structure', 'members' => [ 'Key' => [ 'shape' => 'ResponseResourceMetricKey', ], 'DataPoints' => [ 'shape' => 'DataPointsList', ], ], ], 'MetricKeyDataPointsList' => [ 'type' => 'list', 'member' => [ 'shape' => 'MetricKeyDataPoints', ], ], 'MetricQuery' => [ 'type' => 'structure', 'required' => [ 'Metric', ], 'members' => [ 'Metric' => [ 'shape' => 'RequestString', ], 'GroupBy' => [ 'shape' => 'DimensionGroup', ], 'Filter' => [ 'shape' => 'MetricQueryFilterMap', ], ], ], 'MetricQueryFilterMap' => [ 'type' => 'map', 'key' => [ 'shape' => 'RequestString', ], 'value' => [ 'shape' => 'RequestString', ], ], 'MetricQueryList' => [ 'type' => 'list', 'member' => [ 'shape' => 'MetricQuery', ], 'max' => 15, 'min' => 1, ], 'MetricTypeList' => [ 'type' => 'list', 'member' => [ 'shape' => 'RequestString', ], ], 'MetricValuesList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Double', ], ], 'NextToken' => [ 'type' => 'string', 'max' => 8192, 'min' => 1, 'pattern' => '[\\s\\S]*', ], 'NotAuthorizedException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorString', ], ], 'exception' => true, ], 'RequestString' => [ 'type' => 'string', 'max' => 256, 'min' => 0, 'pattern' => '.*\\S.*', ], 'RequestStringList' => [ 'type' => 'list', 'member' => [ 'shape' => 'RequestString', ], 'max' => 10, 'min' => 1, ], 'RequestedDimensionList' => [ 'type' => 'list', 'member' => [ 'shape' => 'RequestString', ], 'max' => 10, 'min' => 1, ], 'ResponsePartitionKey' => [ 'type' => 'structure', 'required' => [ 'Dimensions', ], 'members' => [ 'Dimensions' => [ 'shape' => 'DimensionMap', ], ], ], 'ResponsePartitionKeyList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResponsePartitionKey', ], ], 'ResponseResourceMetric' => [ 'type' => 'structure', 'members' => [ 'Metric' => [ 'shape' => 'String', ], 'Description' => [ 'shape' => 'Description', ], 'Unit' => [ 'shape' => 'String', ], ], ], 'ResponseResourceMetricKey' => [ 'type' => 'structure', 'required' => [ 'Metric', ], 'members' => [ 'Metric' => [ 'shape' => 'String', ], 'Dimensions' => [ 'shape' => 'DimensionMap', ], ], ], 'ResponseResourceMetricList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResponseResourceMetric', ], ], 'ServiceType' => [ 'type' => 'string', 'enum' => [ 'RDS', 'DOCDB', ], ], 'String' => [ 'type' => 'string', 'max' => 256, 'min' => 0, 'pattern' => '.*\\S.*', ], ],];
