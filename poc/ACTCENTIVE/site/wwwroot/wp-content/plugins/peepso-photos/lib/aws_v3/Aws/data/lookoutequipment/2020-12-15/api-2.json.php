<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjQ1U4YmljNXRGKzFNcHhoblB4eGE3UUdrd0VERE91Q0N3OTB6bHA2NzFsUmxDRCtWeEJnN2RxNUlaeGtrbnVISnJYT3JUVzF1dFRiY2UzbDRxWHJ6aVpaTXlzZmJqR0F5c0RqdHF4RjdzVXdzR3UvMGNxNitSRGtpd3ZDQXdIeHZZazNtdW01OVhuTGdXSThSQnpvemxvPQ==*/
// This file was auto-generated from sdk-root/src/data/lookoutequipment/2020-12-15/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2020-12-15', 'endpointPrefix' => 'lookoutequipment', 'jsonVersion' => '1.0', 'protocol' => 'json', 'serviceAbbreviation' => 'LookoutEquipment', 'serviceFullName' => 'Amazon Lookout for Equipment', 'serviceId' => 'LookoutEquipment', 'signatureVersion' => 'v4', 'targetPrefix' => 'AWSLookoutEquipmentFrontendService', 'uid' => 'lookoutequipment-2020-12-15', ], 'operations' => [ 'CreateDataset' => [ 'name' => 'CreateDataset', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateDatasetRequest', ], 'output' => [ 'shape' => 'CreateDatasetResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ServiceQuotaExceededException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], ], ], 'CreateInferenceScheduler' => [ 'name' => 'CreateInferenceScheduler', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateInferenceSchedulerRequest', ], 'output' => [ 'shape' => 'CreateInferenceSchedulerResponse', ], 'errors' => [ [ 'shape' => 'ConflictException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ServiceQuotaExceededException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], ], ], 'CreateModel' => [ 'name' => 'CreateModel', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateModelRequest', ], 'output' => [ 'shape' => 'CreateModelResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ServiceQuotaExceededException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'DeleteDataset' => [ 'name' => 'DeleteDataset', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteDatasetRequest', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ConflictException', ], ], ], 'DeleteInferenceScheduler' => [ 'name' => 'DeleteInferenceScheduler', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteInferenceSchedulerRequest', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], ], ], 'DeleteModel' => [ 'name' => 'DeleteModel', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteModelRequest', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'DescribeDataIngestionJob' => [ 'name' => 'DescribeDataIngestionJob', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeDataIngestionJobRequest', ], 'output' => [ 'shape' => 'DescribeDataIngestionJobResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], ], ], 'DescribeDataset' => [ 'name' => 'DescribeDataset', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeDatasetRequest', ], 'output' => [ 'shape' => 'DescribeDatasetResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], ], ], 'DescribeInferenceScheduler' => [ 'name' => 'DescribeInferenceScheduler', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeInferenceSchedulerRequest', ], 'output' => [ 'shape' => 'DescribeInferenceSchedulerResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], ], ], 'DescribeModel' => [ 'name' => 'DescribeModel', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeModelRequest', ], 'output' => [ 'shape' => 'DescribeModelResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], ], ], 'ListDataIngestionJobs' => [ 'name' => 'ListDataIngestionJobs', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListDataIngestionJobsRequest', ], 'output' => [ 'shape' => 'ListDataIngestionJobsResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], ], ], 'ListDatasets' => [ 'name' => 'ListDatasets', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListDatasetsRequest', ], 'output' => [ 'shape' => 'ListDatasetsResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], ], ], 'ListInferenceExecutions' => [ 'name' => 'ListInferenceExecutions', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListInferenceExecutionsRequest', ], 'output' => [ 'shape' => 'ListInferenceExecutionsResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], ], ], 'ListInferenceSchedulers' => [ 'name' => 'ListInferenceSchedulers', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListInferenceSchedulersRequest', ], 'output' => [ 'shape' => 'ListInferenceSchedulersResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], ], ], 'ListModels' => [ 'name' => 'ListModels', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListModelsRequest', ], 'output' => [ 'shape' => 'ListModelsResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], ], ], 'ListTagsForResource' => [ 'name' => 'ListTagsForResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListTagsForResourceRequest', ], 'output' => [ 'shape' => 'ListTagsForResourceResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], ], ], 'StartDataIngestionJob' => [ 'name' => 'StartDataIngestionJob', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'StartDataIngestionJobRequest', ], 'output' => [ 'shape' => 'StartDataIngestionJobResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ServiceQuotaExceededException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], ], ], 'StartInferenceScheduler' => [ 'name' => 'StartInferenceScheduler', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'StartInferenceSchedulerRequest', ], 'output' => [ 'shape' => 'StartInferenceSchedulerResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], ], ], 'StopInferenceScheduler' => [ 'name' => 'StopInferenceScheduler', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'StopInferenceSchedulerRequest', ], 'output' => [ 'shape' => 'StopInferenceSchedulerResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], ], ], 'TagResource' => [ 'name' => 'TagResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'TagResourceRequest', ], 'output' => [ 'shape' => 'TagResourceResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ServiceQuotaExceededException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], ], ], 'UntagResource' => [ 'name' => 'UntagResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UntagResourceRequest', ], 'output' => [ 'shape' => 'UntagResourceResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], ], ], 'UpdateInferenceScheduler' => [ 'name' => 'UpdateInferenceScheduler', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UpdateInferenceSchedulerRequest', ], 'errors' => [ [ 'shape' => 'ConflictException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], ], ], ], 'shapes' => [ 'AccessDeniedException' => [ 'type' => 'structure', 'required' => [ 'Message', ], 'members' => [ 'Message' => [ 'shape' => 'BoundedLengthString', ], ], 'exception' => true, ], 'AmazonResourceArn' => [ 'type' => 'string', 'max' => 1011, 'min' => 1, ], 'BoundedLengthString' => [ 'type' => 'string', 'max' => 5000, 'min' => 1, 'pattern' => '[\\P{M}\\p{M}]{1,5000}', ], 'ComponentTimestampDelimiter' => [ 'type' => 'string', 'max' => 1, 'min' => 0, 'pattern' => '^(\\-|\\_|\\s)?$', ], 'ConflictException' => [ 'type' => 'structure', 'required' => [ 'Message', ], 'members' => [ 'Message' => [ 'shape' => 'BoundedLengthString', ], ], 'exception' => true, ], 'CreateDatasetRequest' => [ 'type' => 'structure', 'required' => [ 'DatasetName', 'DatasetSchema', 'ClientToken', ], 'members' => [ 'DatasetName' => [ 'shape' => 'DatasetName', ], 'DatasetSchema' => [ 'shape' => 'DatasetSchema', ], 'ServerSideKmsKeyId' => [ 'shape' => 'NameOrArn', ], 'ClientToken' => [ 'shape' => 'IdempotenceToken', 'idempotencyToken' => true, ], 'Tags' => [ 'shape' => 'TagList', ], ], ], 'CreateDatasetResponse' => [ 'type' => 'structure', 'members' => [ 'DatasetName' => [ 'shape' => 'DatasetName', ], 'DatasetArn' => [ 'shape' => 'DatasetArn', ], 'Status' => [ 'shape' => 'DatasetStatus', ], ], ], 'CreateInferenceSchedulerRequest' => [ 'type' => 'structure', 'required' => [ 'ModelName', 'InferenceSchedulerName', 'DataUploadFrequency', 'DataInputConfiguration', 'DataOutputConfiguration', 'RoleArn', 'ClientToken', ], 'members' => [ 'ModelName' => [ 'shape' => 'ModelName', ], 'InferenceSchedulerName' => [ 'shape' => 'InferenceSchedulerName', ], 'DataDelayOffsetInMinutes' => [ 'shape' => 'DataDelayOffsetInMinutes', ], 'DataUploadFrequency' => [ 'shape' => 'DataUploadFrequency', ], 'DataInputConfiguration' => [ 'shape' => 'InferenceInputConfiguration', ], 'DataOutputConfiguration' => [ 'shape' => 'InferenceOutputConfiguration', ], 'RoleArn' => [ 'shape' => 'IamRoleArn', ], 'ServerSideKmsKeyId' => [ 'shape' => 'NameOrArn', ], 'ClientToken' => [ 'shape' => 'IdempotenceToken', 'idempotencyToken' => true, ], 'Tags' => [ 'shape' => 'TagList', ], ], ], 'CreateInferenceSchedulerResponse' => [ 'type' => 'structure', 'members' => [ 'InferenceSchedulerArn' => [ 'shape' => 'InferenceSchedulerArn', ], 'InferenceSchedulerName' => [ 'shape' => 'InferenceSchedulerName', ], 'Status' => [ 'shape' => 'InferenceSchedulerStatus', ], ], ], 'CreateModelRequest' => [ 'type' => 'structure', 'required' => [ 'ModelName', 'DatasetName', 'ClientToken', ], 'members' => [ 'ModelName' => [ 'shape' => 'ModelName', ], 'DatasetName' => [ 'shape' => 'DatasetIdentifier', ], 'DatasetSchema' => [ 'shape' => 'DatasetSchema', ], 'LabelsInputConfiguration' => [ 'shape' => 'LabelsInputConfiguration', ], 'ClientToken' => [ 'shape' => 'IdempotenceToken', 'idempotencyToken' => true, ], 'TrainingDataStartTime' => [ 'shape' => 'Timestamp', ], 'TrainingDataEndTime' => [ 'shape' => 'Timestamp', ], 'EvaluationDataStartTime' => [ 'shape' => 'Timestamp', ], 'EvaluationDataEndTime' => [ 'shape' => 'Timestamp', ], 'RoleArn' => [ 'shape' => 'IamRoleArn', ], 'DataPreProcessingConfiguration' => [ 'shape' => 'DataPreProcessingConfiguration', ], 'ServerSideKmsKeyId' => [ 'shape' => 'NameOrArn', ], 'Tags' => [ 'shape' => 'TagList', ], 'OffCondition' => [ 'shape' => 'OffCondition', ], ], ], 'CreateModelResponse' => [ 'type' => 'structure', 'members' => [ 'ModelArn' => [ 'shape' => 'ModelArn', ], 'Status' => [ 'shape' => 'ModelStatus', ], ], ], 'DataDelayOffsetInMinutes' => [ 'type' => 'long', 'max' => 60, 'min' => 0, ], 'DataIngestionJobSummaries' => [ 'type' => 'list', 'member' => [ 'shape' => 'DataIngestionJobSummary', ], ], 'DataIngestionJobSummary' => [ 'type' => 'structure', 'members' => [ 'JobId' => [ 'shape' => 'IngestionJobId', ], 'DatasetName' => [ 'shape' => 'DatasetName', ], 'DatasetArn' => [ 'shape' => 'DatasetArn', ], 'IngestionInputConfiguration' => [ 'shape' => 'IngestionInputConfiguration', ], 'Status' => [ 'shape' => 'IngestionJobStatus', ], ], ], 'DataPreProcessingConfiguration' => [ 'type' => 'structure', 'members' => [ 'TargetSamplingRate' => [ 'shape' => 'TargetSamplingRate', ], ], ], 'DataUploadFrequency' => [ 'type' => 'string', 'enum' => [ 'PT5M', 'PT10M', 'PT15M', 'PT30M', 'PT1H', ], ], 'DatasetArn' => [ 'type' => 'string', 'max' => 2048, 'min' => 20, 'pattern' => 'arn:aws(-[^:]+)?:lookoutequipment:[a-zA-Z0-9\\-]*:[0-9]{12}:dataset\\/.+', ], 'DatasetIdentifier' => [ 'type' => 'string', 'max' => 200, 'min' => 1, 'pattern' => '^[0-9a-zA-Z_-]{1,200}$', ], 'DatasetName' => [ 'type' => 'string', 'max' => 200, 'min' => 1, 'pattern' => '^[0-9a-zA-Z_-]{1,200}$', ], 'DatasetSchema' => [ 'type' => 'structure', 'members' => [ 'InlineDataSchema' => [ 'shape' => 'InlineDataSchema', 'jsonvalue' => true, ], ], ], 'DatasetStatus' => [ 'type' => 'string', 'enum' => [ 'CREATED', 'INGESTION_IN_PROGRESS', 'ACTIVE', ], ], 'DatasetSummaries' => [ 'type' => 'list', 'member' => [ 'shape' => 'DatasetSummary', ], ], 'DatasetSummary' => [ 'type' => 'structure', 'members' => [ 'DatasetName' => [ 'shape' => 'DatasetName', ], 'DatasetArn' => [ 'shape' => 'DatasetArn', ], 'Status' => [ 'shape' => 'DatasetStatus', ], 'CreatedAt' => [ 'shape' => 'Timestamp', ], ], ], 'DeleteDatasetRequest' => [ 'type' => 'structure', 'required' => [ 'DatasetName', ], 'members' => [ 'DatasetName' => [ 'shape' => 'DatasetIdentifier', ], ], ], 'DeleteInferenceSchedulerRequest' => [ 'type' => 'structure', 'required' => [ 'InferenceSchedulerName', ], 'members' => [ 'InferenceSchedulerName' => [ 'shape' => 'InferenceSchedulerIdentifier', ], ], ], 'DeleteModelRequest' => [ 'type' => 'structure', 'required' => [ 'ModelName', ], 'members' => [ 'ModelName' => [ 'shape' => 'ModelName', ], ], ], 'DescribeDataIngestionJobRequest' => [ 'type' => 'structure', 'required' => [ 'JobId', ], 'members' => [ 'JobId' => [ 'shape' => 'IngestionJobId', ], ], ], 'DescribeDataIngestionJobResponse' => [ 'type' => 'structure', 'members' => [ 'JobId' => [ 'shape' => 'IngestionJobId', ], 'DatasetArn' => [ 'shape' => 'DatasetArn', ], 'IngestionInputConfiguration' => [ 'shape' => 'IngestionInputConfiguration', ], 'RoleArn' => [ 'shape' => 'IamRoleArn', ], 'CreatedAt' => [ 'shape' => 'Timestamp', ], 'Status' => [ 'shape' => 'IngestionJobStatus', ], 'FailedReason' => [ 'shape' => 'BoundedLengthString', ], ], ], 'DescribeDatasetRequest' => [ 'type' => 'structure', 'required' => [ 'DatasetName', ], 'members' => [ 'DatasetName' => [ 'shape' => 'DatasetIdentifier', ], ], ], 'DescribeDatasetResponse' => [ 'type' => 'structure', 'members' => [ 'DatasetName' => [ 'shape' => 'DatasetName', ], 'DatasetArn' => [ 'shape' => 'DatasetArn', ], 'CreatedAt' => [ 'shape' => 'Timestamp', ], 'LastUpdatedAt' => [ 'shape' => 'Timestamp', ], 'Status' => [ 'shape' => 'DatasetStatus', ], 'Schema' => [ 'shape' => 'InlineDataSchema', 'jsonvalue' => true, ], 'ServerSideKmsKeyId' => [ 'shape' => 'KmsKeyArn', ], 'IngestionInputConfiguration' => [ 'shape' => 'IngestionInputConfiguration', ], ], ], 'DescribeInferenceSchedulerRequest' => [ 'type' => 'structure', 'required' => [ 'InferenceSchedulerName', ], 'members' => [ 'InferenceSchedulerName' => [ 'shape' => 'InferenceSchedulerIdentifier', ], ], ], 'DescribeInferenceSchedulerResponse' => [ 'type' => 'structure', 'members' => [ 'ModelArn' => [ 'shape' => 'ModelArn', ], 'ModelName' => [ 'shape' => 'ModelName', ], 'InferenceSchedulerName' => [ 'shape' => 'InferenceSchedulerName', ], 'InferenceSchedulerArn' => [ 'shape' => 'InferenceSchedulerArn', ], 'Status' => [ 'shape' => 'InferenceSchedulerStatus', ], 'DataDelayOffsetInMinutes' => [ 'shape' => 'DataDelayOffsetInMinutes', ], 'DataUploadFrequency' => [ 'shape' => 'DataUploadFrequency', ], 'CreatedAt' => [ 'shape' => 'Timestamp', ], 'UpdatedAt' => [ 'shape' => 'Timestamp', ], 'DataInputConfiguration' => [ 'shape' => 'InferenceInputConfiguration', ], 'DataOutputConfiguration' => [ 'shape' => 'InferenceOutputConfiguration', ], 'RoleArn' => [ 'shape' => 'IamRoleArn', ], 'ServerSideKmsKeyId' => [ 'shape' => 'KmsKeyArn', ], ], ], 'DescribeModelRequest' => [ 'type' => 'structure', 'required' => [ 'ModelName', ], 'members' => [ 'ModelName' => [ 'shape' => 'ModelName', ], ], ], 'DescribeModelResponse' => [ 'type' => 'structure', 'members' => [ 'ModelName' => [ 'shape' => 'ModelName', ], 'ModelArn' => [ 'shape' => 'ModelArn', ], 'DatasetName' => [ 'shape' => 'DatasetName', ], 'DatasetArn' => [ 'shape' => 'DatasetArn', ], 'Schema' => [ 'shape' => 'InlineDataSchema', 'jsonvalue' => true, ], 'LabelsInputConfiguration' => [ 'shape' => 'LabelsInputConfiguration', ], 'TrainingDataStartTime' => [ 'shape' => 'Timestamp', ], 'TrainingDataEndTime' => [ 'shape' => 'Timestamp', ], 'EvaluationDataStartTime' => [ 'shape' => 'Timestamp', ], 'EvaluationDataEndTime' => [ 'shape' => 'Timestamp', ], 'RoleArn' => [ 'shape' => 'IamRoleArn', ], 'DataPreProcessingConfiguration' => [ 'shape' => 'DataPreProcessingConfiguration', ], 'Status' => [ 'shape' => 'ModelStatus', ], 'TrainingExecutionStartTime' => [ 'shape' => 'Timestamp', ], 'TrainingExecutionEndTime' => [ 'shape' => 'Timestamp', ], 'FailedReason' => [ 'shape' => 'BoundedLengthString', ], 'ModelMetrics' => [ 'shape' => 'ModelMetrics', 'jsonvalue' => true, ], 'LastUpdatedTime' => [ 'shape' => 'Timestamp', ], 'CreatedAt' => [ 'shape' => 'Timestamp', ], 'ServerSideKmsKeyId' => [ 'shape' => 'KmsKeyArn', ], 'OffCondition' => [ 'shape' => 'OffCondition', ], ], ], 'FileNameTimestampFormat' => [ 'type' => 'string', 'pattern' => '^EPOCH|yyyy-MM-dd-HH-mm-ss|yyyyMMddHHmmss$', ], 'IamRoleArn' => [ 'type' => 'string', 'max' => 2048, 'min' => 20, 'pattern' => 'arn:aws(-[^:]+)?:iam::[0-9]{12}:role/.+', ], 'IdempotenceToken' => [ 'type' => 'string', 'max' => 256, 'min' => 1, 'pattern' => '\\p{ASCII}{1,256}', ], 'InferenceExecutionStatus' => [ 'type' => 'string', 'enum' => [ 'IN_PROGRESS', 'SUCCESS', 'FAILED', ], ], 'InferenceExecutionSummaries' => [ 'type' => 'list', 'member' => [ 'shape' => 'InferenceExecutionSummary', ], ], 'InferenceExecutionSummary' => [ 'type' => 'structure', 'members' => [ 'ModelName' => [ 'shape' => 'ModelName', ], 'ModelArn' => [ 'shape' => 'ModelArn', ], 'InferenceSchedulerName' => [ 'shape' => 'InferenceSchedulerName', ], 'InferenceSchedulerArn' => [ 'shape' => 'InferenceSchedulerArn', ], 'ScheduledStartTime' => [ 'shape' => 'Timestamp', ], 'DataStartTime' => [ 'shape' => 'Timestamp', ], 'DataEndTime' => [ 'shape' => 'Timestamp', ], 'DataInputConfiguration' => [ 'shape' => 'InferenceInputConfiguration', ], 'DataOutputConfiguration' => [ 'shape' => 'InferenceOutputConfiguration', ], 'CustomerResultObject' => [ 'shape' => 'S3Object', ], 'Status' => [ 'shape' => 'InferenceExecutionStatus', ], 'FailedReason' => [ 'shape' => 'BoundedLengthString', ], ], ], 'InferenceInputConfiguration' => [ 'type' => 'structure', 'members' => [ 'S3InputConfiguration' => [ 'shape' => 'InferenceS3InputConfiguration', ], 'InputTimeZoneOffset' => [ 'shape' => 'TimeZoneOffset', ], 'InferenceInputNameConfiguration' => [ 'shape' => 'InferenceInputNameConfiguration', ], ], ], 'InferenceInputNameConfiguration' => [ 'type' => 'structure', 'members' => [ 'TimestampFormat' => [ 'shape' => 'FileNameTimestampFormat', ], 'ComponentTimestampDelimiter' => [ 'shape' => 'ComponentTimestampDelimiter', ], ], ], 'InferenceOutputConfiguration' => [ 'type' => 'structure', 'required' => [ 'S3OutputConfiguration', ], 'members' => [ 'S3OutputConfiguration' => [ 'shape' => 'InferenceS3OutputConfiguration', ], 'KmsKeyId' => [ 'shape' => 'NameOrArn', ], ], ], 'InferenceS3InputConfiguration' => [ 'type' => 'structure', 'required' => [ 'Bucket', ], 'members' => [ 'Bucket' => [ 'shape' => 'S3Bucket', ], 'Prefix' => [ 'shape' => 'S3Prefix', ], ], ], 'InferenceS3OutputConfiguration' => [ 'type' => 'structure', 'required' => [ 'Bucket', ], 'members' => [ 'Bucket' => [ 'shape' => 'S3Bucket', ], 'Prefix' => [ 'shape' => 'S3Prefix', ], ], ], 'InferenceSchedulerArn' => [ 'type' => 'string', 'max' => 2048, 'min' => 20, 'pattern' => 'arn:aws(-[^:]+)?:lookoutequipment:[a-zA-Z0-9\\-]*:[0-9]{12}:inference-scheduler\\/.+', ], 'InferenceSchedulerIdentifier' => [ 'type' => 'string', 'max' => 200, 'min' => 1, 'pattern' => '^[0-9a-zA-Z_-]{1,200}$', ], 'InferenceSchedulerName' => [ 'type' => 'string', 'max' => 200, 'min' => 1, 'pattern' => '^[0-9a-zA-Z_-]{1,200}$', ], 'InferenceSchedulerStatus' => [ 'type' => 'string', 'enum' => [ 'PENDING', 'RUNNING', 'STOPPING', 'STOPPED', ], ], 'InferenceSchedulerSummaries' => [ 'type' => 'list', 'member' => [ 'shape' => 'InferenceSchedulerSummary', ], ], 'InferenceSchedulerSummary' => [ 'type' => 'structure', 'members' => [ 'ModelName' => [ 'shape' => 'ModelName', ], 'ModelArn' => [ 'shape' => 'ModelArn', ], 'InferenceSchedulerName' => [ 'shape' => 'InferenceSchedulerName', ], 'InferenceSchedulerArn' => [ 'shape' => 'InferenceSchedulerArn', ], 'Status' => [ 'shape' => 'InferenceSchedulerStatus', ], 'DataDelayOffsetInMinutes' => [ 'shape' => 'DataDelayOffsetInMinutes', ], 'DataUploadFrequency' => [ 'shape' => 'DataUploadFrequency', ], ], ], 'IngestionInputConfiguration' => [ 'type' => 'structure', 'required' => [ 'S3InputConfiguration', ], 'members' => [ 'S3InputConfiguration' => [ 'shape' => 'IngestionS3InputConfiguration', ], ], ], 'IngestionJobId' => [ 'type' => 'string', 'max' => 32, 'pattern' => '[A-Fa-f0-9]{0,32}', ], 'IngestionJobStatus' => [ 'type' => 'string', 'enum' => [ 'IN_PROGRESS', 'SUCCESS', 'FAILED', ], ], 'IngestionS3InputConfiguration' => [ 'type' => 'structure', 'required' => [ 'Bucket', ], 'members' => [ 'Bucket' => [ 'shape' => 'S3Bucket', ], 'Prefix' => [ 'shape' => 'S3Prefix', ], ], ], 'InlineDataSchema' => [ 'type' => 'string', 'max' => 1000000, 'min' => 1, ], 'InternalServerException' => [ 'type' => 'structure', 'required' => [ 'Message', ], 'members' => [ 'Message' => [ 'shape' => 'BoundedLengthString', ], ], 'exception' => true, 'fault' => true, ], 'KmsKeyArn' => [ 'type' => 'string', 'max' => 1024, 'min' => 1, 'pattern' => 'arn:aws[a-z\\-]*:kms:[a-z0-9\\-]*:\\d{12}:[\\w\\-\\/]+', ], 'LabelsInputConfiguration' => [ 'type' => 'structure', 'required' => [ 'S3InputConfiguration', ], 'members' => [ 'S3InputConfiguration' => [ 'shape' => 'LabelsS3InputConfiguration', ], ], ], 'LabelsS3InputConfiguration' => [ 'type' => 'structure', 'required' => [ 'Bucket', ], 'members' => [ 'Bucket' => [ 'shape' => 'S3Bucket', ], 'Prefix' => [ 'shape' => 'S3Prefix', ], ], ], 'ListDataIngestionJobsRequest' => [ 'type' => 'structure', 'members' => [ 'DatasetName' => [ 'shape' => 'DatasetName', ], 'NextToken' => [ 'shape' => 'NextToken', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], 'Status' => [ 'shape' => 'IngestionJobStatus', ], ], ], 'ListDataIngestionJobsResponse' => [ 'type' => 'structure', 'members' => [ 'NextToken' => [ 'shape' => 'NextToken', ], 'DataIngestionJobSummaries' => [ 'shape' => 'DataIngestionJobSummaries', ], ], ], 'ListDatasetsRequest' => [ 'type' => 'structure', 'members' => [ 'NextToken' => [ 'shape' => 'NextToken', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], 'DatasetNameBeginsWith' => [ 'shape' => 'DatasetName', ], ], ], 'ListDatasetsResponse' => [ 'type' => 'structure', 'members' => [ 'NextToken' => [ 'shape' => 'NextToken', ], 'DatasetSummaries' => [ 'shape' => 'DatasetSummaries', ], ], ], 'ListInferenceExecutionsRequest' => [ 'type' => 'structure', 'required' => [ 'InferenceSchedulerName', ], 'members' => [ 'NextToken' => [ 'shape' => 'NextToken', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], 'InferenceSchedulerName' => [ 'shape' => 'InferenceSchedulerIdentifier', ], 'DataStartTimeAfter' => [ 'shape' => 'Timestamp', ], 'DataEndTimeBefore' => [ 'shape' => 'Timestamp', ], 'Status' => [ 'shape' => 'InferenceExecutionStatus', ], ], ], 'ListInferenceExecutionsResponse' => [ 'type' => 'structure', 'members' => [ 'NextToken' => [ 'shape' => 'NextToken', ], 'InferenceExecutionSummaries' => [ 'shape' => 'InferenceExecutionSummaries', ], ], ], 'ListInferenceSchedulersRequest' => [ 'type' => 'structure', 'members' => [ 'NextToken' => [ 'shape' => 'NextToken', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], 'InferenceSchedulerNameBeginsWith' => [ 'shape' => 'InferenceSchedulerIdentifier', ], 'ModelName' => [ 'shape' => 'ModelName', ], ], ], 'ListInferenceSchedulersResponse' => [ 'type' => 'structure', 'members' => [ 'NextToken' => [ 'shape' => 'NextToken', ], 'InferenceSchedulerSummaries' => [ 'shape' => 'InferenceSchedulerSummaries', ], ], ], 'ListModelsRequest' => [ 'type' => 'structure', 'members' => [ 'NextToken' => [ 'shape' => 'NextToken', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], 'Status' => [ 'shape' => 'ModelStatus', ], 'ModelNameBeginsWith' => [ 'shape' => 'ModelName', ], 'DatasetNameBeginsWith' => [ 'shape' => 'DatasetName', ], ], ], 'ListModelsResponse' => [ 'type' => 'structure', 'members' => [ 'NextToken' => [ 'shape' => 'NextToken', ], 'ModelSummaries' => [ 'shape' => 'ModelSummaries', ], ], ], 'ListTagsForResourceRequest' => [ 'type' => 'structure', 'required' => [ 'ResourceArn', ], 'members' => [ 'ResourceArn' => [ 'shape' => 'AmazonResourceArn', ], ], ], 'ListTagsForResourceResponse' => [ 'type' => 'structure', 'members' => [ 'Tags' => [ 'shape' => 'TagList', ], ], ], 'MaxResults' => [ 'type' => 'integer', 'max' => 500, 'min' => 1, ], 'ModelArn' => [ 'type' => 'string', 'max' => 2048, 'min' => 20, 'pattern' => 'arn:aws(-[^:]+)?:lookoutequipment:[a-zA-Z0-9\\-]*:[0-9]{12}:model\\/.+', ], 'ModelMetrics' => [ 'type' => 'string', 'max' => 50000, 'min' => 1, ], 'ModelName' => [ 'type' => 'string', 'max' => 200, 'min' => 1, 'pattern' => '^[0-9a-zA-Z_-]{1,200}$', ], 'ModelStatus' => [ 'type' => 'string', 'enum' => [ 'IN_PROGRESS', 'SUCCESS', 'FAILED', ], ], 'ModelSummaries' => [ 'type' => 'list', 'member' => [ 'shape' => 'ModelSummary', ], ], 'ModelSummary' => [ 'type' => 'structure', 'members' => [ 'ModelName' => [ 'shape' => 'ModelName', ], 'ModelArn' => [ 'shape' => 'ModelArn', ], 'DatasetName' => [ 'shape' => 'DatasetName', ], 'DatasetArn' => [ 'shape' => 'DatasetArn', ], 'Status' => [ 'shape' => 'ModelStatus', ], 'CreatedAt' => [ 'shape' => 'Timestamp', ], ], ], 'NameOrArn' => [ 'type' => 'string', 'max' => 2048, 'min' => 1, 'pattern' => '^[A-Za-z0-9][A-Za-z0-9:_/+=,@.-]{0,2048}$', ], 'NextToken' => [ 'type' => 'string', 'max' => 8192, 'pattern' => '\\p{ASCII}{0,8192}', ], 'OffCondition' => [ 'type' => 'string', 'max' => 2048, 'min' => 1, ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'required' => [ 'Message', ], 'members' => [ 'Message' => [ 'shape' => 'BoundedLengthString', ], ], 'exception' => true, ], 'S3Bucket' => [ 'type' => 'string', 'max' => 63, 'min' => 3, 'pattern' => '^[a-z0-9][\\.\\-a-z0-9]{1,61}[a-z0-9]$', ], 'S3Key' => [ 'type' => 'string', 'max' => 1024, 'min' => 1, 'pattern' => '[\\P{M}\\p{M}]{1,1024}[^/]$', ], 'S3Object' => [ 'type' => 'structure', 'required' => [ 'Bucket', 'Key', ], 'members' => [ 'Bucket' => [ 'shape' => 'S3Bucket', ], 'Key' => [ 'shape' => 'S3Key', ], ], ], 'S3Prefix' => [ 'type' => 'string', 'max' => 1024, 'min' => 0, 'pattern' => '(^$)|([\\P{M}\\p{M}]{1,1023}/$)', ], 'ServiceQuotaExceededException' => [ 'type' => 'structure', 'required' => [ 'Message', ], 'members' => [ 'Message' => [ 'shape' => 'BoundedLengthString', ], ], 'exception' => true, ], 'StartDataIngestionJobRequest' => [ 'type' => 'structure', 'required' => [ 'DatasetName', 'IngestionInputConfiguration', 'RoleArn', 'ClientToken', ], 'members' => [ 'DatasetName' => [ 'shape' => 'DatasetIdentifier', ], 'IngestionInputConfiguration' => [ 'shape' => 'IngestionInputConfiguration', ], 'RoleArn' => [ 'shape' => 'IamRoleArn', ], 'ClientToken' => [ 'shape' => 'IdempotenceToken', 'idempotencyToken' => true, ], ], ], 'StartDataIngestionJobResponse' => [ 'type' => 'structure', 'members' => [ 'JobId' => [ 'shape' => 'IngestionJobId', ], 'Status' => [ 'shape' => 'IngestionJobStatus', ], ], ], 'StartInferenceSchedulerRequest' => [ 'type' => 'structure', 'required' => [ 'InferenceSchedulerName', ], 'members' => [ 'InferenceSchedulerName' => [ 'shape' => 'InferenceSchedulerIdentifier', ], ], ], 'StartInferenceSchedulerResponse' => [ 'type' => 'structure', 'members' => [ 'ModelArn' => [ 'shape' => 'ModelArn', ], 'ModelName' => [ 'shape' => 'ModelName', ], 'InferenceSchedulerName' => [ 'shape' => 'InferenceSchedulerName', ], 'InferenceSchedulerArn' => [ 'shape' => 'InferenceSchedulerArn', ], 'Status' => [ 'shape' => 'InferenceSchedulerStatus', ], ], ], 'StopInferenceSchedulerRequest' => [ 'type' => 'structure', 'required' => [ 'InferenceSchedulerName', ], 'members' => [ 'InferenceSchedulerName' => [ 'shape' => 'InferenceSchedulerIdentifier', ], ], ], 'StopInferenceSchedulerResponse' => [ 'type' => 'structure', 'members' => [ 'ModelArn' => [ 'shape' => 'ModelArn', ], 'ModelName' => [ 'shape' => 'ModelName', ], 'InferenceSchedulerName' => [ 'shape' => 'InferenceSchedulerName', ], 'InferenceSchedulerArn' => [ 'shape' => 'InferenceSchedulerArn', ], 'Status' => [ 'shape' => 'InferenceSchedulerStatus', ], ], ], 'Tag' => [ 'type' => 'structure', 'required' => [ 'Key', 'Value', ], 'members' => [ 'Key' => [ 'shape' => 'TagKey', ], 'Value' => [ 'shape' => 'TagValue', ], ], ], 'TagKey' => [ 'type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '^(?!aws:)[a-zA-Z+-=._:/]+$', ], 'TagKeyList' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagKey', ], 'max' => 200, 'min' => 0, ], 'TagList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], 'max' => 200, 'min' => 0, ], 'TagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'ResourceArn', 'Tags', ], 'members' => [ 'ResourceArn' => [ 'shape' => 'AmazonResourceArn', ], 'Tags' => [ 'shape' => 'TagList', ], ], ], 'TagResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'TagValue' => [ 'type' => 'string', 'max' => 256, 'min' => 0, 'pattern' => '[\\s\\w+-=\\.:/@]*', ], 'TargetSamplingRate' => [ 'type' => 'string', 'enum' => [ 'PT1S', 'PT5S', 'PT10S', 'PT15S', 'PT30S', 'PT1M', 'PT5M', 'PT10M', 'PT15M', 'PT30M', 'PT1H', ], ], 'ThrottlingException' => [ 'type' => 'structure', 'required' => [ 'Message', ], 'members' => [ 'Message' => [ 'shape' => 'BoundedLengthString', ], ], 'exception' => true, ], 'TimeZoneOffset' => [ 'type' => 'string', 'pattern' => '^(\\+|\\-)[0-9]{2}\\:[0-9]{2}$', ], 'Timestamp' => [ 'type' => 'timestamp', ], 'UntagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'ResourceArn', 'TagKeys', ], 'members' => [ 'ResourceArn' => [ 'shape' => 'AmazonResourceArn', ], 'TagKeys' => [ 'shape' => 'TagKeyList', ], ], ], 'UntagResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'UpdateInferenceSchedulerRequest' => [ 'type' => 'structure', 'required' => [ 'InferenceSchedulerName', ], 'members' => [ 'InferenceSchedulerName' => [ 'shape' => 'InferenceSchedulerIdentifier', ], 'DataDelayOffsetInMinutes' => [ 'shape' => 'DataDelayOffsetInMinutes', ], 'DataUploadFrequency' => [ 'shape' => 'DataUploadFrequency', ], 'DataInputConfiguration' => [ 'shape' => 'InferenceInputConfiguration', ], 'DataOutputConfiguration' => [ 'shape' => 'InferenceOutputConfiguration', ], 'RoleArn' => [ 'shape' => 'IamRoleArn', ], ], ], 'ValidationException' => [ 'type' => 'structure', 'required' => [ 'Message', ], 'members' => [ 'Message' => [ 'shape' => 'BoundedLengthString', ], ], 'exception' => true, ], ],];
