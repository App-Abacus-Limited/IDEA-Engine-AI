<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjQ1U4YmljNXRGKzFNcHhoblB4eGE3UUdrd0VERE91Q0N3OTB6bHA2NzFsUmxDRCtWeEJnN2RxNUlaeGtrbnVISnJYT3JUVzF1dFRiY2UzbDRxWHJ6aVpaTXlzZmJqR0F5c0RqdHF4RjdzVXdzR3UvMGNxNitSRGtpd3ZDQXdIeHZZazNtdW01OVhuTGdXSThSQnpvemxvPQ==*/
// This file was auto-generated from sdk-root/src/data/signer/2017-08-25/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2017-08-25', 'endpointPrefix' => 'signer', 'jsonVersion' => '1.1', 'protocol' => 'rest-json', 'serviceAbbreviation' => 'signer', 'serviceFullName' => 'AWS Signer', 'serviceId' => 'signer', 'signatureVersion' => 'v4', 'signingName' => 'signer', 'uid' => 'signer-2017-08-25', ], 'operations' => [ 'AddProfilePermission' => [ 'name' => 'AddProfilePermission', 'http' => [ 'method' => 'POST', 'requestUri' => '/signing-profiles/{profileName}/permissions', ], 'input' => [ 'shape' => 'AddProfilePermissionRequest', ], 'output' => [ 'shape' => 'AddProfilePermissionResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ServiceLimitExceededException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'InternalServiceErrorException', ], ], ], 'CancelSigningProfile' => [ 'name' => 'CancelSigningProfile', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/signing-profiles/{profileName}', ], 'input' => [ 'shape' => 'CancelSigningProfileRequest', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'InternalServiceErrorException', ], ], ], 'DescribeSigningJob' => [ 'name' => 'DescribeSigningJob', 'http' => [ 'method' => 'GET', 'requestUri' => '/signing-jobs/{jobId}', ], 'input' => [ 'shape' => 'DescribeSigningJobRequest', ], 'output' => [ 'shape' => 'DescribeSigningJobResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'InternalServiceErrorException', ], ], ], 'GetSigningPlatform' => [ 'name' => 'GetSigningPlatform', 'http' => [ 'method' => 'GET', 'requestUri' => '/signing-platforms/{platformId}', ], 'input' => [ 'shape' => 'GetSigningPlatformRequest', ], 'output' => [ 'shape' => 'GetSigningPlatformResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'InternalServiceErrorException', ], ], ], 'GetSigningProfile' => [ 'name' => 'GetSigningProfile', 'http' => [ 'method' => 'GET', 'requestUri' => '/signing-profiles/{profileName}', ], 'input' => [ 'shape' => 'GetSigningProfileRequest', ], 'output' => [ 'shape' => 'GetSigningProfileResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'InternalServiceErrorException', ], ], ], 'ListProfilePermissions' => [ 'name' => 'ListProfilePermissions', 'http' => [ 'method' => 'GET', 'requestUri' => '/signing-profiles/{profileName}/permissions', ], 'input' => [ 'shape' => 'ListProfilePermissionsRequest', ], 'output' => [ 'shape' => 'ListProfilePermissionsResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'InternalServiceErrorException', ], ], ], 'ListSigningJobs' => [ 'name' => 'ListSigningJobs', 'http' => [ 'method' => 'GET', 'requestUri' => '/signing-jobs', ], 'input' => [ 'shape' => 'ListSigningJobsRequest', ], 'output' => [ 'shape' => 'ListSigningJobsResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'InternalServiceErrorException', ], ], ], 'ListSigningPlatforms' => [ 'name' => 'ListSigningPlatforms', 'http' => [ 'method' => 'GET', 'requestUri' => '/signing-platforms', ], 'input' => [ 'shape' => 'ListSigningPlatformsRequest', ], 'output' => [ 'shape' => 'ListSigningPlatformsResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'InternalServiceErrorException', ], ], ], 'ListSigningProfiles' => [ 'name' => 'ListSigningProfiles', 'http' => [ 'method' => 'GET', 'requestUri' => '/signing-profiles', ], 'input' => [ 'shape' => 'ListSigningProfilesRequest', ], 'output' => [ 'shape' => 'ListSigningProfilesResponse', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'InternalServiceErrorException', ], ], ], 'ListTagsForResource' => [ 'name' => 'ListTagsForResource', 'http' => [ 'method' => 'GET', 'requestUri' => '/tags/{resourceArn}', ], 'input' => [ 'shape' => 'ListTagsForResourceRequest', ], 'output' => [ 'shape' => 'ListTagsForResourceResponse', ], 'errors' => [ [ 'shape' => 'InternalServiceErrorException', ], [ 'shape' => 'BadRequestException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'TooManyRequestsException', ], ], ], 'PutSigningProfile' => [ 'name' => 'PutSigningProfile', 'http' => [ 'method' => 'PUT', 'requestUri' => '/signing-profiles/{profileName}', ], 'input' => [ 'shape' => 'PutSigningProfileRequest', ], 'output' => [ 'shape' => 'PutSigningProfileResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'InternalServiceErrorException', ], ], ], 'RemoveProfilePermission' => [ 'name' => 'RemoveProfilePermission', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/signing-profiles/{profileName}/permissions/{statementId}', ], 'input' => [ 'shape' => 'RemoveProfilePermissionRequest', ], 'output' => [ 'shape' => 'RemoveProfilePermissionResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'InternalServiceErrorException', ], ], ], 'RevokeSignature' => [ 'name' => 'RevokeSignature', 'http' => [ 'method' => 'PUT', 'requestUri' => '/signing-jobs/{jobId}/revoke', ], 'input' => [ 'shape' => 'RevokeSignatureRequest', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'InternalServiceErrorException', ], ], ], 'RevokeSigningProfile' => [ 'name' => 'RevokeSigningProfile', 'http' => [ 'method' => 'PUT', 'requestUri' => '/signing-profiles/{profileName}/revoke', ], 'input' => [ 'shape' => 'RevokeSigningProfileRequest', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'InternalServiceErrorException', ], ], ], 'StartSigningJob' => [ 'name' => 'StartSigningJob', 'http' => [ 'method' => 'POST', 'requestUri' => '/signing-jobs', ], 'input' => [ 'shape' => 'StartSigningJobRequest', ], 'output' => [ 'shape' => 'StartSigningJobResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'InternalServiceErrorException', ], ], ], 'TagResource' => [ 'name' => 'TagResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/tags/{resourceArn}', ], 'input' => [ 'shape' => 'TagResourceRequest', ], 'output' => [ 'shape' => 'TagResourceResponse', ], 'errors' => [ [ 'shape' => 'InternalServiceErrorException', ], [ 'shape' => 'BadRequestException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'TooManyRequestsException', ], ], ], 'UntagResource' => [ 'name' => 'UntagResource', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/tags/{resourceArn}', ], 'input' => [ 'shape' => 'UntagResourceRequest', ], 'output' => [ 'shape' => 'UntagResourceResponse', ], 'errors' => [ [ 'shape' => 'InternalServiceErrorException', ], [ 'shape' => 'BadRequestException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'TooManyRequestsException', ], ], ], ], 'shapes' => [ 'AccessDeniedException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], 'code' => [ 'shape' => 'ErrorCode', ], ], 'error' => [ 'httpStatusCode' => 403, ], 'exception' => true, ], 'AccountId' => [ 'type' => 'string', 'max' => 12, 'min' => 12, 'pattern' => '^[0-9]{12}$', ], 'AddProfilePermissionRequest' => [ 'type' => 'structure', 'required' => [ 'action', 'principal', 'statementId', 'profileName', ], 'members' => [ 'profileName' => [ 'shape' => 'ProfileName', 'location' => 'uri', 'locationName' => 'profileName', ], 'profileVersion' => [ 'shape' => 'ProfileVersion', ], 'action' => [ 'shape' => 'String', ], 'principal' => [ 'shape' => 'String', ], 'revisionId' => [ 'shape' => 'String', ], 'statementId' => [ 'shape' => 'String', ], ], ], 'AddProfilePermissionResponse' => [ 'type' => 'structure', 'members' => [ 'revisionId' => [ 'shape' => 'String', ], ], ], 'Arn' => [ 'type' => 'string', 'max' => 2048, 'min' => 20, ], 'BadRequestException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], 'code' => [ 'shape' => 'ErrorCode', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'BucketName' => [ 'type' => 'string', ], 'CancelSigningProfileRequest' => [ 'type' => 'structure', 'required' => [ 'profileName', ], 'members' => [ 'profileName' => [ 'shape' => 'ProfileName', 'location' => 'uri', 'locationName' => 'profileName', ], ], ], 'Category' => [ 'type' => 'string', 'enum' => [ 'AWSIoT', ], ], 'CertificateArn' => [ 'type' => 'string', ], 'ClientRequestToken' => [ 'type' => 'string', ], 'ConflictException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], 'code' => [ 'shape' => 'ErrorCode', ], ], 'error' => [ 'httpStatusCode' => 409, ], 'exception' => true, ], 'DescribeSigningJobRequest' => [ 'type' => 'structure', 'required' => [ 'jobId', ], 'members' => [ 'jobId' => [ 'shape' => 'JobId', 'location' => 'uri', 'locationName' => 'jobId', ], ], ], 'DescribeSigningJobResponse' => [ 'type' => 'structure', 'members' => [ 'jobId' => [ 'shape' => 'JobId', ], 'source' => [ 'shape' => 'Source', ], 'signingMaterial' => [ 'shape' => 'SigningMaterial', ], 'platformId' => [ 'shape' => 'PlatformId', ], 'platformDisplayName' => [ 'shape' => 'DisplayName', ], 'profileName' => [ 'shape' => 'ProfileName', ], 'profileVersion' => [ 'shape' => 'ProfileVersion', ], 'overrides' => [ 'shape' => 'SigningPlatformOverrides', ], 'signingParameters' => [ 'shape' => 'SigningParameters', ], 'createdAt' => [ 'shape' => 'Timestamp', ], 'completedAt' => [ 'shape' => 'Timestamp', ], 'signatureExpiresAt' => [ 'shape' => 'Timestamp', ], 'requestedBy' => [ 'shape' => 'RequestedBy', ], 'status' => [ 'shape' => 'SigningStatus', ], 'statusReason' => [ 'shape' => 'StatusReason', ], 'revocationRecord' => [ 'shape' => 'SigningJobRevocationRecord', ], 'signedObject' => [ 'shape' => 'SignedObject', ], 'jobOwner' => [ 'shape' => 'AccountId', ], 'jobInvoker' => [ 'shape' => 'AccountId', ], ], ], 'Destination' => [ 'type' => 'structure', 'members' => [ 's3' => [ 'shape' => 'S3Destination', ], ], ], 'DisplayName' => [ 'type' => 'string', ], 'EncryptionAlgorithm' => [ 'type' => 'string', 'enum' => [ 'RSA', 'ECDSA', ], ], 'EncryptionAlgorithmOptions' => [ 'type' => 'structure', 'required' => [ 'allowedValues', 'defaultValue', ], 'members' => [ 'allowedValues' => [ 'shape' => 'EncryptionAlgorithms', ], 'defaultValue' => [ 'shape' => 'EncryptionAlgorithm', ], ], ], 'EncryptionAlgorithms' => [ 'type' => 'list', 'member' => [ 'shape' => 'EncryptionAlgorithm', ], ], 'ErrorCode' => [ 'type' => 'string', ], 'ErrorMessage' => [ 'type' => 'string', ], 'GetSigningPlatformRequest' => [ 'type' => 'structure', 'required' => [ 'platformId', ], 'members' => [ 'platformId' => [ 'shape' => 'PlatformId', 'location' => 'uri', 'locationName' => 'platformId', ], ], ], 'GetSigningPlatformResponse' => [ 'type' => 'structure', 'members' => [ 'platformId' => [ 'shape' => 'PlatformId', ], 'displayName' => [ 'shape' => 'DisplayName', ], 'partner' => [ 'shape' => 'String', ], 'target' => [ 'shape' => 'String', ], 'category' => [ 'shape' => 'Category', ], 'signingConfiguration' => [ 'shape' => 'SigningConfiguration', ], 'signingImageFormat' => [ 'shape' => 'SigningImageFormat', ], 'maxSizeInMB' => [ 'shape' => 'MaxSizeInMB', ], 'revocationSupported' => [ 'shape' => 'bool', ], ], ], 'GetSigningProfileRequest' => [ 'type' => 'structure', 'required' => [ 'profileName', ], 'members' => [ 'profileName' => [ 'shape' => 'ProfileName', 'location' => 'uri', 'locationName' => 'profileName', ], 'profileOwner' => [ 'shape' => 'AccountId', 'location' => 'querystring', 'locationName' => 'profileOwner', ], ], ], 'GetSigningProfileResponse' => [ 'type' => 'structure', 'members' => [ 'profileName' => [ 'shape' => 'ProfileName', ], 'profileVersion' => [ 'shape' => 'ProfileVersion', ], 'profileVersionArn' => [ 'shape' => 'Arn', ], 'revocationRecord' => [ 'shape' => 'SigningProfileRevocationRecord', ], 'signingMaterial' => [ 'shape' => 'SigningMaterial', ], 'platformId' => [ 'shape' => 'PlatformId', ], 'platformDisplayName' => [ 'shape' => 'DisplayName', ], 'signatureValidityPeriod' => [ 'shape' => 'SignatureValidityPeriod', ], 'overrides' => [ 'shape' => 'SigningPlatformOverrides', ], 'signingParameters' => [ 'shape' => 'SigningParameters', ], 'status' => [ 'shape' => 'SigningProfileStatus', ], 'statusReason' => [ 'shape' => 'String', ], 'arn' => [ 'shape' => 'string', ], 'tags' => [ 'shape' => 'TagMap', ], ], ], 'HashAlgorithm' => [ 'type' => 'string', 'enum' => [ 'SHA1', 'SHA256', ], ], 'HashAlgorithmOptions' => [ 'type' => 'structure', 'required' => [ 'allowedValues', 'defaultValue', ], 'members' => [ 'allowedValues' => [ 'shape' => 'HashAlgorithms', ], 'defaultValue' => [ 'shape' => 'HashAlgorithm', ], ], ], 'HashAlgorithms' => [ 'type' => 'list', 'member' => [ 'shape' => 'HashAlgorithm', ], ], 'ImageFormat' => [ 'type' => 'string', 'enum' => [ 'JSON', 'JSONEmbedded', 'JSONDetached', ], ], 'ImageFormats' => [ 'type' => 'list', 'member' => [ 'shape' => 'ImageFormat', ], ], 'Integer' => [ 'type' => 'integer', ], 'InternalServiceErrorException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], 'code' => [ 'shape' => 'ErrorCode', ], ], 'error' => [ 'httpStatusCode' => 500, ], 'exception' => true, ], 'JobId' => [ 'type' => 'string', ], 'Key' => [ 'type' => 'string', ], 'ListProfilePermissionsRequest' => [ 'type' => 'structure', 'required' => [ 'profileName', ], 'members' => [ 'profileName' => [ 'shape' => 'ProfileName', 'location' => 'uri', 'locationName' => 'profileName', ], 'nextToken' => [ 'shape' => 'String', 'location' => 'querystring', 'locationName' => 'nextToken', ], ], ], 'ListProfilePermissionsResponse' => [ 'type' => 'structure', 'members' => [ 'revisionId' => [ 'shape' => 'String', ], 'policySizeBytes' => [ 'shape' => 'PolicySizeBytes', ], 'permissions' => [ 'shape' => 'Permissions', ], 'nextToken' => [ 'shape' => 'String', ], ], ], 'ListSigningJobsRequest' => [ 'type' => 'structure', 'members' => [ 'status' => [ 'shape' => 'SigningStatus', 'location' => 'querystring', 'locationName' => 'status', ], 'platformId' => [ 'shape' => 'PlatformId', 'location' => 'querystring', 'locationName' => 'platformId', ], 'requestedBy' => [ 'shape' => 'RequestedBy', 'location' => 'querystring', 'locationName' => 'requestedBy', ], 'maxResults' => [ 'shape' => 'MaxResults', 'location' => 'querystring', 'locationName' => 'maxResults', ], 'nextToken' => [ 'shape' => 'NextToken', 'location' => 'querystring', 'locationName' => 'nextToken', ], 'isRevoked' => [ 'shape' => 'bool', 'location' => 'querystring', 'locationName' => 'isRevoked', ], 'signatureExpiresBefore' => [ 'shape' => 'Timestamp', 'location' => 'querystring', 'locationName' => 'signatureExpiresBefore', ], 'signatureExpiresAfter' => [ 'shape' => 'Timestamp', 'location' => 'querystring', 'locationName' => 'signatureExpiresAfter', ], 'jobInvoker' => [ 'shape' => 'AccountId', 'location' => 'querystring', 'locationName' => 'jobInvoker', ], ], ], 'ListSigningJobsResponse' => [ 'type' => 'structure', 'members' => [ 'jobs' => [ 'shape' => 'SigningJobs', ], 'nextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListSigningPlatformsRequest' => [ 'type' => 'structure', 'members' => [ 'category' => [ 'shape' => 'String', 'location' => 'querystring', 'locationName' => 'category', ], 'partner' => [ 'shape' => 'String', 'location' => 'querystring', 'locationName' => 'partner', ], 'target' => [ 'shape' => 'String', 'location' => 'querystring', 'locationName' => 'target', ], 'maxResults' => [ 'shape' => 'MaxResults', 'location' => 'querystring', 'locationName' => 'maxResults', ], 'nextToken' => [ 'shape' => 'String', 'location' => 'querystring', 'locationName' => 'nextToken', ], ], ], 'ListSigningPlatformsResponse' => [ 'type' => 'structure', 'members' => [ 'platforms' => [ 'shape' => 'SigningPlatforms', ], 'nextToken' => [ 'shape' => 'String', ], ], ], 'ListSigningProfilesRequest' => [ 'type' => 'structure', 'members' => [ 'includeCanceled' => [ 'shape' => 'bool', 'location' => 'querystring', 'locationName' => 'includeCanceled', ], 'maxResults' => [ 'shape' => 'MaxResults', 'location' => 'querystring', 'locationName' => 'maxResults', ], 'nextToken' => [ 'shape' => 'NextToken', 'location' => 'querystring', 'locationName' => 'nextToken', ], 'platformId' => [ 'shape' => 'PlatformId', 'location' => 'querystring', 'locationName' => 'platformId', ], 'statuses' => [ 'shape' => 'Statuses', 'location' => 'querystring', 'locationName' => 'statuses', ], ], ], 'ListSigningProfilesResponse' => [ 'type' => 'structure', 'members' => [ 'profiles' => [ 'shape' => 'SigningProfiles', ], 'nextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListTagsForResourceRequest' => [ 'type' => 'structure', 'required' => [ 'resourceArn', ], 'members' => [ 'resourceArn' => [ 'shape' => 'String', 'location' => 'uri', 'locationName' => 'resourceArn', ], ], ], 'ListTagsForResourceResponse' => [ 'type' => 'structure', 'members' => [ 'tags' => [ 'shape' => 'TagMap', ], ], ], 'MaxResults' => [ 'type' => 'integer', 'box' => true, 'max' => 25, 'min' => 1, ], 'MaxSizeInMB' => [ 'type' => 'integer', ], 'NextToken' => [ 'type' => 'string', ], 'NotFoundException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], 'code' => [ 'shape' => 'ErrorCode', ], ], 'error' => [ 'httpStatusCode' => 404, ], 'exception' => true, ], 'Permission' => [ 'type' => 'structure', 'members' => [ 'action' => [ 'shape' => 'String', ], 'principal' => [ 'shape' => 'String', ], 'statementId' => [ 'shape' => 'String', ], 'profileVersion' => [ 'shape' => 'ProfileVersion', ], ], ], 'Permissions' => [ 'type' => 'list', 'member' => [ 'shape' => 'Permission', ], ], 'PlatformId' => [ 'type' => 'string', ], 'PolicySizeBytes' => [ 'type' => 'integer', ], 'Prefix' => [ 'type' => 'string', ], 'ProfileName' => [ 'type' => 'string', 'max' => 64, 'min' => 2, 'pattern' => '^[a-zA-Z0-9_]{2,}', ], 'ProfileVersion' => [ 'type' => 'string', 'max' => 10, 'min' => 10, 'pattern' => '^[a-zA-Z0-9]{10}$', ], 'PutSigningProfileRequest' => [ 'type' => 'structure', 'required' => [ 'profileName', 'platformId', ], 'members' => [ 'profileName' => [ 'shape' => 'ProfileName', 'location' => 'uri', 'locationName' => 'profileName', ], 'signingMaterial' => [ 'shape' => 'SigningMaterial', ], 'signatureValidityPeriod' => [ 'shape' => 'SignatureValidityPeriod', ], 'platformId' => [ 'shape' => 'PlatformId', ], 'overrides' => [ 'shape' => 'SigningPlatformOverrides', ], 'signingParameters' => [ 'shape' => 'SigningParameters', ], 'tags' => [ 'shape' => 'TagMap', ], ], ], 'PutSigningProfileResponse' => [ 'type' => 'structure', 'members' => [ 'arn' => [ 'shape' => 'string', ], 'profileVersion' => [ 'shape' => 'ProfileVersion', ], 'profileVersionArn' => [ 'shape' => 'Arn', ], ], ], 'RemoveProfilePermissionRequest' => [ 'type' => 'structure', 'required' => [ 'revisionId', 'profileName', 'statementId', ], 'members' => [ 'profileName' => [ 'shape' => 'ProfileName', 'location' => 'uri', 'locationName' => 'profileName', ], 'revisionId' => [ 'shape' => 'String', 'location' => 'querystring', 'locationName' => 'revisionId', ], 'statementId' => [ 'shape' => 'String', 'location' => 'uri', 'locationName' => 'statementId', ], ], ], 'RemoveProfilePermissionResponse' => [ 'type' => 'structure', 'members' => [ 'revisionId' => [ 'shape' => 'String', ], ], ], 'RequestedBy' => [ 'type' => 'string', ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], 'code' => [ 'shape' => 'ErrorCode', ], ], 'error' => [ 'httpStatusCode' => 404, ], 'exception' => true, ], 'RevocationReasonString' => [ 'type' => 'string', 'max' => 500, 'min' => 1, ], 'RevokeSignatureRequest' => [ 'type' => 'structure', 'required' => [ 'reason', 'jobId', ], 'members' => [ 'jobId' => [ 'shape' => 'JobId', 'location' => 'uri', 'locationName' => 'jobId', ], 'jobOwner' => [ 'shape' => 'AccountId', ], 'reason' => [ 'shape' => 'RevocationReasonString', ], ], ], 'RevokeSigningProfileRequest' => [ 'type' => 'structure', 'required' => [ 'profileVersion', 'reason', 'effectiveTime', 'profileName', ], 'members' => [ 'profileName' => [ 'shape' => 'ProfileName', 'location' => 'uri', 'locationName' => 'profileName', ], 'profileVersion' => [ 'shape' => 'ProfileVersion', ], 'reason' => [ 'shape' => 'RevocationReasonString', ], 'effectiveTime' => [ 'shape' => 'Timestamp', ], ], ], 'S3Destination' => [ 'type' => 'structure', 'members' => [ 'bucketName' => [ 'shape' => 'BucketName', ], 'prefix' => [ 'shape' => 'Prefix', ], ], ], 'S3SignedObject' => [ 'type' => 'structure', 'members' => [ 'bucketName' => [ 'shape' => 'BucketName', ], 'key' => [ 'shape' => 'Key', ], ], ], 'S3Source' => [ 'type' => 'structure', 'required' => [ 'bucketName', 'key', 'version', ], 'members' => [ 'bucketName' => [ 'shape' => 'BucketName', ], 'key' => [ 'shape' => 'Key', ], 'version' => [ 'shape' => 'Version', ], ], ], 'ServiceLimitExceededException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], 'code' => [ 'shape' => 'ErrorCode', ], ], 'error' => [ 'httpStatusCode' => 402, ], 'exception' => true, ], 'SignatureValidityPeriod' => [ 'type' => 'structure', 'members' => [ 'value' => [ 'shape' => 'Integer', ], 'type' => [ 'shape' => 'ValidityType', ], ], ], 'SignedObject' => [ 'type' => 'structure', 'members' => [ 's3' => [ 'shape' => 'S3SignedObject', ], ], ], 'SigningConfiguration' => [ 'type' => 'structure', 'required' => [ 'encryptionAlgorithmOptions', 'hashAlgorithmOptions', ], 'members' => [ 'encryptionAlgorithmOptions' => [ 'shape' => 'EncryptionAlgorithmOptions', ], 'hashAlgorithmOptions' => [ 'shape' => 'HashAlgorithmOptions', ], ], ], 'SigningConfigurationOverrides' => [ 'type' => 'structure', 'members' => [ 'encryptionAlgorithm' => [ 'shape' => 'EncryptionAlgorithm', ], 'hashAlgorithm' => [ 'shape' => 'HashAlgorithm', ], ], ], 'SigningImageFormat' => [ 'type' => 'structure', 'required' => [ 'supportedFormats', 'defaultFormat', ], 'members' => [ 'supportedFormats' => [ 'shape' => 'ImageFormats', ], 'defaultFormat' => [ 'shape' => 'ImageFormat', ], ], ], 'SigningJob' => [ 'type' => 'structure', 'members' => [ 'jobId' => [ 'shape' => 'JobId', ], 'source' => [ 'shape' => 'Source', ], 'signedObject' => [ 'shape' => 'SignedObject', ], 'signingMaterial' => [ 'shape' => 'SigningMaterial', ], 'createdAt' => [ 'shape' => 'Timestamp', ], 'status' => [ 'shape' => 'SigningStatus', ], 'isRevoked' => [ 'shape' => 'bool', ], 'profileName' => [ 'shape' => 'ProfileName', ], 'profileVersion' => [ 'shape' => 'ProfileVersion', ], 'platformId' => [ 'shape' => 'PlatformId', ], 'platformDisplayName' => [ 'shape' => 'DisplayName', ], 'signatureExpiresAt' => [ 'shape' => 'Timestamp', ], 'jobOwner' => [ 'shape' => 'AccountId', ], 'jobInvoker' => [ 'shape' => 'AccountId', ], ], ], 'SigningJobRevocationRecord' => [ 'type' => 'structure', 'members' => [ 'reason' => [ 'shape' => 'String', ], 'revokedAt' => [ 'shape' => 'Timestamp', ], 'revokedBy' => [ 'shape' => 'String', ], ], ], 'SigningJobs' => [ 'type' => 'list', 'member' => [ 'shape' => 'SigningJob', ], ], 'SigningMaterial' => [ 'type' => 'structure', 'required' => [ 'certificateArn', ], 'members' => [ 'certificateArn' => [ 'shape' => 'CertificateArn', ], ], ], 'SigningParameterKey' => [ 'type' => 'string', ], 'SigningParameterValue' => [ 'type' => 'string', ], 'SigningParameters' => [ 'type' => 'map', 'key' => [ 'shape' => 'SigningParameterKey', ], 'value' => [ 'shape' => 'SigningParameterValue', ], ], 'SigningPlatform' => [ 'type' => 'structure', 'members' => [ 'platformId' => [ 'shape' => 'String', ], 'displayName' => [ 'shape' => 'String', ], 'partner' => [ 'shape' => 'String', ], 'target' => [ 'shape' => 'String', ], 'category' => [ 'shape' => 'Category', ], 'signingConfiguration' => [ 'shape' => 'SigningConfiguration', ], 'signingImageFormat' => [ 'shape' => 'SigningImageFormat', ], 'maxSizeInMB' => [ 'shape' => 'MaxSizeInMB', ], 'revocationSupported' => [ 'shape' => 'bool', ], ], ], 'SigningPlatformOverrides' => [ 'type' => 'structure', 'members' => [ 'signingConfiguration' => [ 'shape' => 'SigningConfigurationOverrides', ], 'signingImageFormat' => [ 'shape' => 'ImageFormat', ], ], ], 'SigningPlatforms' => [ 'type' => 'list', 'member' => [ 'shape' => 'SigningPlatform', ], ], 'SigningProfile' => [ 'type' => 'structure', 'members' => [ 'profileName' => [ 'shape' => 'ProfileName', ], 'profileVersion' => [ 'shape' => 'ProfileVersion', ], 'profileVersionArn' => [ 'shape' => 'Arn', ], 'signingMaterial' => [ 'shape' => 'SigningMaterial', ], 'signatureValidityPeriod' => [ 'shape' => 'SignatureValidityPeriod', ], 'platformId' => [ 'shape' => 'PlatformId', ], 'platformDisplayName' => [ 'shape' => 'DisplayName', ], 'signingParameters' => [ 'shape' => 'SigningParameters', ], 'status' => [ 'shape' => 'SigningProfileStatus', ], 'arn' => [ 'shape' => 'string', ], 'tags' => [ 'shape' => 'TagMap', ], ], ], 'SigningProfileRevocationRecord' => [ 'type' => 'structure', 'members' => [ 'revocationEffectiveFrom' => [ 'shape' => 'Timestamp', ], 'revokedAt' => [ 'shape' => 'Timestamp', ], 'revokedBy' => [ 'shape' => 'String', ], ], ], 'SigningProfileStatus' => [ 'type' => 'string', 'enum' => [ 'Active', 'Canceled', 'Revoked', ], ], 'SigningProfiles' => [ 'type' => 'list', 'member' => [ 'shape' => 'SigningProfile', ], ], 'SigningStatus' => [ 'type' => 'string', 'enum' => [ 'InProgress', 'Failed', 'Succeeded', ], ], 'Source' => [ 'type' => 'structure', 'members' => [ 's3' => [ 'shape' => 'S3Source', ], ], ], 'StartSigningJobRequest' => [ 'type' => 'structure', 'required' => [ 'source', 'destination', 'profileName', 'clientRequestToken', ], 'members' => [ 'source' => [ 'shape' => 'Source', ], 'destination' => [ 'shape' => 'Destination', ], 'profileName' => [ 'shape' => 'ProfileName', ], 'clientRequestToken' => [ 'shape' => 'ClientRequestToken', 'idempotencyToken' => true, ], 'profileOwner' => [ 'shape' => 'AccountId', ], ], ], 'StartSigningJobResponse' => [ 'type' => 'structure', 'members' => [ 'jobId' => [ 'shape' => 'JobId', ], 'jobOwner' => [ 'shape' => 'AccountId', ], ], ], 'StatusReason' => [ 'type' => 'string', ], 'Statuses' => [ 'type' => 'list', 'member' => [ 'shape' => 'SigningProfileStatus', ], ], 'String' => [ 'type' => 'string', ], 'TagKey' => [ 'type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '^(?!aws:)[a-zA-Z+-=._:/]+$', ], 'TagKeyList' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagKey', ], 'max' => 200, 'min' => 1, ], 'TagMap' => [ 'type' => 'map', 'key' => [ 'shape' => 'TagKey', ], 'value' => [ 'shape' => 'TagValue', ], 'max' => 200, 'min' => 1, ], 'TagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'resourceArn', 'tags', ], 'members' => [ 'resourceArn' => [ 'shape' => 'String', 'location' => 'uri', 'locationName' => 'resourceArn', ], 'tags' => [ 'shape' => 'TagMap', ], ], ], 'TagResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'TagValue' => [ 'type' => 'string', 'max' => 256, ], 'ThrottlingException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], 'code' => [ 'shape' => 'ErrorCode', ], ], 'deprecated' => true, 'deprecatedMessage' => 'Instead of this error, TooManyRequestsException should be used.', 'error' => [ 'httpStatusCode' => 429, ], 'exception' => true, ], 'Timestamp' => [ 'type' => 'timestamp', ], 'TooManyRequestsException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], 'code' => [ 'shape' => 'ErrorCode', ], ], 'error' => [ 'httpStatusCode' => 429, ], 'exception' => true, ], 'UntagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'resourceArn', 'tagKeys', ], 'members' => [ 'resourceArn' => [ 'shape' => 'String', 'location' => 'uri', 'locationName' => 'resourceArn', ], 'tagKeys' => [ 'shape' => 'TagKeyList', 'location' => 'querystring', 'locationName' => 'tagKeys', ], ], ], 'UntagResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'ValidationException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], 'code' => [ 'shape' => 'ErrorCode', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'ValidityType' => [ 'type' => 'string', 'enum' => [ 'DAYS', 'MONTHS', 'YEARS', ], ], 'Version' => [ 'type' => 'string', ], 'bool' => [ 'type' => 'boolean', ], 'string' => [ 'type' => 'string', ], ],];
