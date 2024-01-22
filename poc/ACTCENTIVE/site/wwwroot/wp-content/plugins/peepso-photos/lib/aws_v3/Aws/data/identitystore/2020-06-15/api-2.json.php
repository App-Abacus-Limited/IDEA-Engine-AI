<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjQ1U4YmljNXRGKzFNcHhoblB4eGE3UUdrd0VERE91Q0N3OTB6bHA2NzFsUmxDRCtWeEJnN2RxNUlaeGtrbnVISnJYT3JUVzF1dFRiY2UzbDRxWHJ6aVpaTXlzZmJqR0F5c0RqdHF4RjdzVXdzR3UvMGNxNitSRGtpd3ZDQXdIeHZZazNtdW01OVhuTGdXSThSQnpvemxvPQ==*/
// This file was auto-generated from sdk-root/src/data/identitystore/2020-06-15/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2020-06-15', 'endpointPrefix' => 'identitystore', 'jsonVersion' => '1.1', 'protocol' => 'json', 'serviceAbbreviation' => 'IdentityStore', 'serviceFullName' => 'AWS SSO Identity Store', 'serviceId' => 'identitystore', 'signatureVersion' => 'v4', 'signingName' => 'identitystore', 'targetPrefix' => 'AWSIdentityStore', 'uid' => 'identitystore-2020-06-15', ], 'operations' => [ 'DescribeGroup' => [ 'name' => 'DescribeGroup', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeGroupRequest', ], 'output' => [ 'shape' => 'DescribeGroupResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], ], 'DescribeUser' => [ 'name' => 'DescribeUser', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeUserRequest', ], 'output' => [ 'shape' => 'DescribeUserResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], ], 'ListGroups' => [ 'name' => 'ListGroups', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListGroupsRequest', ], 'output' => [ 'shape' => 'ListGroupsResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], ], 'ListUsers' => [ 'name' => 'ListUsers', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListUsersRequest', ], 'output' => [ 'shape' => 'ListUsersResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], ], ], 'shapes' => [ 'AccessDeniedException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'Message', ], 'RequestId' => [ 'shape' => 'RequestId', ], ], 'exception' => true, ], 'AttributePath' => [ 'type' => 'string', 'max' => 255, 'min' => 1, 'pattern' => '[\\p{L}\\p{M}\\p{S}\\p{N}\\p{P}  ]+', ], 'DescribeGroupRequest' => [ 'type' => 'structure', 'required' => [ 'IdentityStoreId', 'GroupId', ], 'members' => [ 'IdentityStoreId' => [ 'shape' => 'IdentityStoreId', ], 'GroupId' => [ 'shape' => 'ResourceId', ], ], ], 'DescribeGroupResponse' => [ 'type' => 'structure', 'required' => [ 'GroupId', 'DisplayName', ], 'members' => [ 'GroupId' => [ 'shape' => 'ResourceId', ], 'DisplayName' => [ 'shape' => 'GroupDisplayName', ], ], ], 'DescribeUserRequest' => [ 'type' => 'structure', 'required' => [ 'IdentityStoreId', 'UserId', ], 'members' => [ 'IdentityStoreId' => [ 'shape' => 'IdentityStoreId', ], 'UserId' => [ 'shape' => 'ResourceId', ], ], ], 'DescribeUserResponse' => [ 'type' => 'structure', 'required' => [ 'UserName', 'UserId', ], 'members' => [ 'UserName' => [ 'shape' => 'UserName', ], 'UserId' => [ 'shape' => 'ResourceId', ], ], ], 'Filter' => [ 'type' => 'structure', 'required' => [ 'AttributePath', 'AttributeValue', ], 'members' => [ 'AttributePath' => [ 'shape' => 'AttributePath', ], 'AttributeValue' => [ 'shape' => 'SensitiveStringType', ], ], ], 'Filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ], 'Group' => [ 'type' => 'structure', 'required' => [ 'GroupId', 'DisplayName', ], 'members' => [ 'GroupId' => [ 'shape' => 'ResourceId', ], 'DisplayName' => [ 'shape' => 'GroupDisplayName', ], ], ], 'GroupDisplayName' => [ 'type' => 'string', 'max' => 1024, 'min' => 1, 'pattern' => '[\\p{L}\\p{M}\\p{S}\\p{N}\\p{P}\\t\\n\\r  ]+', ], 'Groups' => [ 'type' => 'list', 'member' => [ 'shape' => 'Group', ], ], 'IdentityStoreId' => [ 'type' => 'string', 'max' => 12, 'min' => 1, 'pattern' => '^d-[0-9a-f]{10}$', ], 'InternalServerException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'Message', ], 'RequestId' => [ 'shape' => 'RequestId', ], ], 'exception' => true, 'fault' => true, ], 'ListGroupsRequest' => [ 'type' => 'structure', 'required' => [ 'IdentityStoreId', ], 'members' => [ 'IdentityStoreId' => [ 'shape' => 'IdentityStoreId', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], 'NextToken' => [ 'shape' => 'NextToken', ], 'Filters' => [ 'shape' => 'Filters', ], ], ], 'ListGroupsResponse' => [ 'type' => 'structure', 'required' => [ 'Groups', ], 'members' => [ 'Groups' => [ 'shape' => 'Groups', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListUsersRequest' => [ 'type' => 'structure', 'required' => [ 'IdentityStoreId', ], 'members' => [ 'IdentityStoreId' => [ 'shape' => 'IdentityStoreId', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], 'NextToken' => [ 'shape' => 'NextToken', ], 'Filters' => [ 'shape' => 'Filters', ], ], ], 'ListUsersResponse' => [ 'type' => 'structure', 'required' => [ 'Users', ], 'members' => [ 'Users' => [ 'shape' => 'Users', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'MaxResults' => [ 'type' => 'integer', 'max' => 50, 'min' => 1, ], 'Message' => [ 'type' => 'string', 'max' => 65535, 'min' => 1, ], 'NextToken' => [ 'type' => 'string', 'max' => 65535, 'min' => 1, 'pattern' => '^[-a-zA-Z0-9+=/:]*', ], 'RequestId' => [ 'type' => 'string', 'pattern' => '[A-Fa-f0-9]{8}-[A-Fa-f0-9]{4}-[A-Fa-f0-9]{4}-[A-Fa-f0-9]{4}-[A-Fa-f0-9]{12}', ], 'ResourceId' => [ 'type' => 'string', 'max' => 47, 'min' => 1, 'pattern' => '^([0-9a-f]{10}-|)[A-Fa-f0-9]{8}-[A-Fa-f0-9]{4}-[A-Fa-f0-9]{4}-[A-Fa-f0-9]{4}-[A-Fa-f0-9]{12}$', ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [ 'ResourceType' => [ 'shape' => 'ResourceType', ], 'ResourceId' => [ 'shape' => 'ResourceId', ], 'Message' => [ 'shape' => 'Message', ], 'RequestId' => [ 'shape' => 'RequestId', ], ], 'exception' => true, ], 'ResourceType' => [ 'type' => 'string', 'enum' => [ 'GROUP', 'USER', 'IDENTITY_STORE', ], ], 'SensitiveStringType' => [ 'type' => 'string', 'max' => 1024, 'min' => 1, 'pattern' => '[\\p{L}\\p{M}\\p{S}\\p{N}\\p{P}\\t\\n\\r  ]+', 'sensitive' => true, ], 'ThrottlingException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'Message', ], 'RequestId' => [ 'shape' => 'RequestId', ], ], 'exception' => true, ], 'User' => [ 'type' => 'structure', 'required' => [ 'UserName', 'UserId', ], 'members' => [ 'UserName' => [ 'shape' => 'UserName', ], 'UserId' => [ 'shape' => 'ResourceId', ], ], ], 'UserName' => [ 'type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '[\\p{L}\\p{M}\\p{S}\\p{N}\\p{P}]+', 'sensitive' => true, ], 'Users' => [ 'type' => 'list', 'member' => [ 'shape' => 'User', ], ], 'ValidationException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'Message', ], 'RequestId' => [ 'shape' => 'RequestId', ], ], 'exception' => true, ], ],];
