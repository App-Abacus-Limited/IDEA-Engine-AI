<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjQ1U4YmljNXRGKzFNcHhoblB4eGE3UUdrd0VERE91Q0N3OTB6bHA2NzFsUmxDRCtWeEJnN2RxNUlaeGtrbnVISnJYT3JUVzF1dFRiY2UzbDRxWHJ6aVpaTXlzZmJqR0F5c0RqdHF4RjdzVXdzR3UvMGNxNitSRGtpd3ZDQXdIeHZZazNtdW01OVhuTGdXSThSQnpvemxvPQ==*/
// This file was auto-generated from sdk-root/src/data/macie/2017-12-19/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2017-12-19', 'endpointPrefix' => 'macie', 'jsonVersion' => '1.1', 'protocol' => 'json', 'serviceFullName' => 'Amazon Macie', 'serviceId' => 'Macie', 'signatureVersion' => 'v4', 'targetPrefix' => 'MacieService', 'uid' => 'macie-2017-12-19', ], 'operations' => [ 'AssociateMemberAccount' => [ 'name' => 'AssociateMemberAccount', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'AssociateMemberAccountRequest', ], 'errors' => [ [ 'shape' => 'InvalidInputException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalException', ], ], ], 'AssociateS3Resources' => [ 'name' => 'AssociateS3Resources', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'AssociateS3ResourcesRequest', ], 'output' => [ 'shape' => 'AssociateS3ResourcesResult', ], 'errors' => [ [ 'shape' => 'InvalidInputException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalException', ], ], ], 'DisassociateMemberAccount' => [ 'name' => 'DisassociateMemberAccount', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DisassociateMemberAccountRequest', ], 'errors' => [ [ 'shape' => 'InvalidInputException', ], [ 'shape' => 'InternalException', ], ], ], 'DisassociateS3Resources' => [ 'name' => 'DisassociateS3Resources', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DisassociateS3ResourcesRequest', ], 'output' => [ 'shape' => 'DisassociateS3ResourcesResult', ], 'errors' => [ [ 'shape' => 'InvalidInputException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalException', ], ], ], 'ListMemberAccounts' => [ 'name' => 'ListMemberAccounts', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListMemberAccountsRequest', ], 'output' => [ 'shape' => 'ListMemberAccountsResult', ], 'errors' => [ [ 'shape' => 'InternalException', ], [ 'shape' => 'InvalidInputException', ], ], ], 'ListS3Resources' => [ 'name' => 'ListS3Resources', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListS3ResourcesRequest', ], 'output' => [ 'shape' => 'ListS3ResourcesResult', ], 'errors' => [ [ 'shape' => 'InvalidInputException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalException', ], ], ], 'UpdateS3Resources' => [ 'name' => 'UpdateS3Resources', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UpdateS3ResourcesRequest', ], 'output' => [ 'shape' => 'UpdateS3ResourcesResult', ], 'errors' => [ [ 'shape' => 'InvalidInputException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalException', ], ], ], ], 'shapes' => [ 'AWSAccountId' => [ 'type' => 'string', 'pattern' => '[0-9]{12}', ], 'AccessDeniedException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], 'resourceType' => [ 'shape' => 'ResourceType', ], ], 'exception' => true, ], 'AssociateMemberAccountRequest' => [ 'type' => 'structure', 'required' => [ 'memberAccountId', ], 'members' => [ 'memberAccountId' => [ 'shape' => 'AWSAccountId', ], ], ], 'AssociateS3ResourcesRequest' => [ 'type' => 'structure', 'required' => [ 's3Resources', ], 'members' => [ 'memberAccountId' => [ 'shape' => 'AWSAccountId', ], 's3Resources' => [ 'shape' => 'S3ResourcesClassification', ], ], ], 'AssociateS3ResourcesResult' => [ 'type' => 'structure', 'members' => [ 'failedS3Resources' => [ 'shape' => 'FailedS3Resources', ], ], ], 'BucketName' => [ 'type' => 'string', 'max' => 500, ], 'ClassificationType' => [ 'type' => 'structure', 'required' => [ 'oneTime', 'continuous', ], 'members' => [ 'oneTime' => [ 'shape' => 'S3OneTimeClassificationType', ], 'continuous' => [ 'shape' => 'S3ContinuousClassificationType', ], ], ], 'ClassificationTypeUpdate' => [ 'type' => 'structure', 'members' => [ 'oneTime' => [ 'shape' => 'S3OneTimeClassificationType', ], 'continuous' => [ 'shape' => 'S3ContinuousClassificationType', ], ], ], 'DisassociateMemberAccountRequest' => [ 'type' => 'structure', 'required' => [ 'memberAccountId', ], 'members' => [ 'memberAccountId' => [ 'shape' => 'AWSAccountId', ], ], ], 'DisassociateS3ResourcesRequest' => [ 'type' => 'structure', 'required' => [ 'associatedS3Resources', ], 'members' => [ 'memberAccountId' => [ 'shape' => 'AWSAccountId', ], 'associatedS3Resources' => [ 'shape' => 'S3Resources', ], ], ], 'DisassociateS3ResourcesResult' => [ 'type' => 'structure', 'members' => [ 'failedS3Resources' => [ 'shape' => 'FailedS3Resources', ], ], ], 'ErrorCode' => [ 'type' => 'string', 'max' => 10, ], 'ExceptionMessage' => [ 'type' => 'string', 'max' => 10000, ], 'FailedS3Resource' => [ 'type' => 'structure', 'members' => [ 'failedItem' => [ 'shape' => 'S3Resource', ], 'errorCode' => [ 'shape' => 'ErrorCode', ], 'errorMessage' => [ 'shape' => 'ExceptionMessage', ], ], ], 'FailedS3Resources' => [ 'type' => 'list', 'member' => [ 'shape' => 'FailedS3Resource', ], ], 'FieldName' => [ 'type' => 'string', 'max' => 1000, ], 'InternalException' => [ 'type' => 'structure', 'members' => [ 'errorCode' => [ 'shape' => 'ErrorCode', ], 'message' => [ 'shape' => 'ExceptionMessage', ], ], 'exception' => true, 'fault' => true, ], 'InvalidInputException' => [ 'type' => 'structure', 'members' => [ 'errorCode' => [ 'shape' => 'ErrorCode', ], 'message' => [ 'shape' => 'ExceptionMessage', ], 'fieldName' => [ 'shape' => 'FieldName', ], ], 'exception' => true, ], 'LimitExceededException' => [ 'type' => 'structure', 'members' => [ 'errorCode' => [ 'shape' => 'ErrorCode', ], 'message' => [ 'shape' => 'ExceptionMessage', ], 'resourceType' => [ 'shape' => 'ResourceType', ], ], 'exception' => true, ], 'ListMemberAccountsRequest' => [ 'type' => 'structure', 'members' => [ 'nextToken' => [ 'shape' => 'NextToken', ], 'maxResults' => [ 'shape' => 'MaxResults', ], ], ], 'ListMemberAccountsResult' => [ 'type' => 'structure', 'members' => [ 'memberAccounts' => [ 'shape' => 'MemberAccounts', ], 'nextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListS3ResourcesRequest' => [ 'type' => 'structure', 'members' => [ 'memberAccountId' => [ 'shape' => 'AWSAccountId', ], 'nextToken' => [ 'shape' => 'NextToken', ], 'maxResults' => [ 'shape' => 'MaxResults', ], ], ], 'ListS3ResourcesResult' => [ 'type' => 'structure', 'members' => [ 's3Resources' => [ 'shape' => 'S3ResourcesClassification', ], 'nextToken' => [ 'shape' => 'NextToken', ], ], ], 'MaxResults' => [ 'type' => 'integer', 'box' => true, 'max' => 250, ], 'MemberAccount' => [ 'type' => 'structure', 'members' => [ 'accountId' => [ 'shape' => 'AWSAccountId', ], ], ], 'MemberAccounts' => [ 'type' => 'list', 'member' => [ 'shape' => 'MemberAccount', ], ], 'NextToken' => [ 'type' => 'string', 'max' => 500, ], 'Prefix' => [ 'type' => 'string', 'max' => 10000, ], 'ResourceType' => [ 'type' => 'string', 'max' => 1000, ], 'S3ContinuousClassificationType' => [ 'type' => 'string', 'enum' => [ 'FULL', ], ], 'S3OneTimeClassificationType' => [ 'type' => 'string', 'enum' => [ 'FULL', 'NONE', ], ], 'S3Resource' => [ 'type' => 'structure', 'required' => [ 'bucketName', ], 'members' => [ 'bucketName' => [ 'shape' => 'BucketName', ], 'prefix' => [ 'shape' => 'Prefix', ], ], ], 'S3ResourceClassification' => [ 'type' => 'structure', 'required' => [ 'bucketName', 'classificationType', ], 'members' => [ 'bucketName' => [ 'shape' => 'BucketName', ], 'prefix' => [ 'shape' => 'Prefix', ], 'classificationType' => [ 'shape' => 'ClassificationType', ], ], ], 'S3ResourceClassificationUpdate' => [ 'type' => 'structure', 'required' => [ 'bucketName', 'classificationTypeUpdate', ], 'members' => [ 'bucketName' => [ 'shape' => 'BucketName', ], 'prefix' => [ 'shape' => 'Prefix', ], 'classificationTypeUpdate' => [ 'shape' => 'ClassificationTypeUpdate', ], ], ], 'S3Resources' => [ 'type' => 'list', 'member' => [ 'shape' => 'S3Resource', ], ], 'S3ResourcesClassification' => [ 'type' => 'list', 'member' => [ 'shape' => 'S3ResourceClassification', ], ], 'S3ResourcesClassificationUpdate' => [ 'type' => 'list', 'member' => [ 'shape' => 'S3ResourceClassificationUpdate', ], ], 'UpdateS3ResourcesRequest' => [ 'type' => 'structure', 'required' => [ 's3ResourcesUpdate', ], 'members' => [ 'memberAccountId' => [ 'shape' => 'AWSAccountId', ], 's3ResourcesUpdate' => [ 'shape' => 'S3ResourcesClassificationUpdate', ], ], ], 'UpdateS3ResourcesResult' => [ 'type' => 'structure', 'members' => [ 'failedS3Resources' => [ 'shape' => 'FailedS3Resources', ], ], ], ],];
