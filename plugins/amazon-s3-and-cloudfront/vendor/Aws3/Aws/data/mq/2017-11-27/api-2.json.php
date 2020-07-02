<?php

// This file was auto-generated from sdk-root/src/data/mq/2017-11-27/api-2.json
return ['metadata' => ['apiVersion' => '2017-11-27', 'endpointPrefix' => 'mq', 'signingName' => 'mq', 'serviceFullName' => 'AmazonMQ', 'serviceId' => 'mq', 'protocol' => 'rest-json', 'jsonVersion' => '1.1', 'uid' => 'mq-2017-11-27', 'signatureVersion' => 'v4'], 'operations' => ['CreateBroker' => ['name' => 'CreateBroker', 'http' => ['method' => 'POST', 'requestUri' => '/v1/brokers', 'responseCode' => 200], 'input' => ['shape' => 'CreateBrokerRequest'], 'output' => ['shape' => 'CreateBrokerResponse'], 'errors' => [['shape' => 'BadRequestException'], ['shape' => 'UnauthorizedException'], ['shape' => 'InternalServerErrorException'], ['shape' => 'ConflictException'], ['shape' => 'ForbiddenException']]], 'CreateConfiguration' => ['name' => 'CreateConfiguration', 'http' => ['method' => 'POST', 'requestUri' => '/v1/configurations', 'responseCode' => 200], 'input' => ['shape' => 'CreateConfigurationRequest'], 'output' => ['shape' => 'CreateConfigurationResponse'], 'errors' => [['shape' => 'BadRequestException'], ['shape' => 'InternalServerErrorException'], ['shape' => 'ConflictException'], ['shape' => 'ForbiddenException']]], 'CreateTags' => ['name' => 'CreateTags', 'http' => ['method' => 'POST', 'requestUri' => '/v1/tags/{resource-arn}', 'responseCode' => 204], 'input' => ['shape' => 'CreateTagsRequest'], 'errors' => [['shape' => 'NotFoundException'], ['shape' => 'BadRequestException'], ['shape' => 'InternalServerErrorException'], ['shape' => 'ForbiddenException']]], 'CreateUser' => ['name' => 'CreateUser', 'http' => ['method' => 'POST', 'requestUri' => '/v1/brokers/{broker-id}/users/{username}', 'responseCode' => 200], 'input' => ['shape' => 'CreateUserRequest'], 'output' => ['shape' => 'CreateUserResponse'], 'errors' => [['shape' => 'NotFoundException'], ['shape' => 'BadRequestException'], ['shape' => 'InternalServerErrorException'], ['shape' => 'ConflictException'], ['shape' => 'ForbiddenException']]], 'DeleteBroker' => ['name' => 'DeleteBroker', 'http' => ['method' => 'DELETE', 'requestUri' => '/v1/brokers/{broker-id}', 'responseCode' => 200], 'input' => ['shape' => 'DeleteBrokerRequest'], 'output' => ['shape' => 'DeleteBrokerResponse'], 'errors' => [['shape' => 'NotFoundException'], ['shape' => 'BadRequestException'], ['shape' => 'InternalServerErrorException'], ['shape' => 'ForbiddenException']]], 'DeleteTags' => ['name' => 'DeleteTags', 'http' => ['method' => 'DELETE', 'requestUri' => '/v1/tags/{resource-arn}', 'responseCode' => 204], 'input' => ['shape' => 'DeleteTagsRequest'], 'errors' => [['shape' => 'NotFoundException'], ['shape' => 'BadRequestException'], ['shape' => 'InternalServerErrorException'], ['shape' => 'ForbiddenException']]], 'DeleteUser' => ['name' => 'DeleteUser', 'http' => ['method' => 'DELETE', 'requestUri' => '/v1/brokers/{broker-id}/users/{username}', 'responseCode' => 200], 'input' => ['shape' => 'DeleteUserRequest'], 'output' => ['shape' => 'DeleteUserResponse'], 'errors' => [['shape' => 'NotFoundException'], ['shape' => 'BadRequestException'], ['shape' => 'InternalServerErrorException'], ['shape' => 'ForbiddenException']]], 'DescribeBroker' => ['name' => 'DescribeBroker', 'http' => ['method' => 'GET', 'requestUri' => '/v1/brokers/{broker-id}', 'responseCode' => 200], 'input' => ['shape' => 'DescribeBrokerRequest'], 'output' => ['shape' => 'DescribeBrokerResponse'], 'errors' => [['shape' => 'NotFoundException'], ['shape' => 'BadRequestException'], ['shape' => 'InternalServerErrorException'], ['shape' => 'ForbiddenException']]], 'DescribeConfiguration' => ['name' => 'DescribeConfiguration', 'http' => ['method' => 'GET', 'requestUri' => '/v1/configurations/{configuration-id}', 'responseCode' => 200], 'input' => ['shape' => 'DescribeConfigurationRequest'], 'output' => ['shape' => 'DescribeConfigurationResponse'], 'errors' => [['shape' => 'NotFoundException'], ['shape' => 'BadRequestException'], ['shape' => 'InternalServerErrorException'], ['shape' => 'ForbiddenException']]], 'DescribeConfigurationRevision' => ['name' => 'DescribeConfigurationRevision', 'http' => ['method' => 'GET', 'requestUri' => '/v1/configurations/{configuration-id}/revisions/{configuration-revision}', 'responseCode' => 200], 'input' => ['shape' => 'DescribeConfigurationRevisionRequest'], 'output' => ['shape' => 'DescribeConfigurationRevisionResponse'], 'errors' => [['shape' => 'NotFoundException'], ['shape' => 'BadRequestException'], ['shape' => 'InternalServerErrorException'], ['shape' => 'ForbiddenException']]], 'DescribeUser' => ['name' => 'DescribeUser', 'http' => ['method' => 'GET', 'requestUri' => '/v1/brokers/{broker-id}/users/{username}', 'responseCode' => 200], 'input' => ['shape' => 'DescribeUserRequest'], 'output' => ['shape' => 'DescribeUserResponse'], 'errors' => [['shape' => 'NotFoundException'], ['shape' => 'BadRequestException'], ['shape' => 'InternalServerErrorException'], ['shape' => 'ForbiddenException']]], 'ListBrokers' => ['name' => 'ListBrokers', 'http' => ['method' => 'GET', 'requestUri' => '/v1/brokers', 'responseCode' => 200], 'input' => ['shape' => 'ListBrokersRequest'], 'output' => ['shape' => 'ListBrokersResponse'], 'errors' => [['shape' => 'BadRequestException'], ['shape' => 'InternalServerErrorException'], ['shape' => 'ForbiddenException']]], 'ListConfigurationRevisions' => ['name' => 'ListConfigurationRevisions', 'http' => ['method' => 'GET', 'requestUri' => '/v1/configurations/{configuration-id}/revisions', 'responseCode' => 200], 'input' => ['shape' => 'ListConfigurationRevisionsRequest'], 'output' => ['shape' => 'ListConfigurationRevisionsResponse'], 'errors' => [['shape' => 'NotFoundException'], ['shape' => 'BadRequestException'], ['shape' => 'InternalServerErrorException'], ['shape' => 'ForbiddenException']]], 'ListConfigurations' => ['name' => 'ListConfigurations', 'http' => ['method' => 'GET', 'requestUri' => '/v1/configurations', 'responseCode' => 200], 'input' => ['shape' => 'ListConfigurationsRequest'], 'output' => ['shape' => 'ListConfigurationsResponse'], 'errors' => [['shape' => 'BadRequestException'], ['shape' => 'InternalServerErrorException'], ['shape' => 'ForbiddenException']]], 'ListTags' => ['name' => 'ListTags', 'http' => ['method' => 'GET', 'requestUri' => '/v1/tags/{resource-arn}', 'responseCode' => 200], 'input' => ['shape' => 'ListTagsRequest'], 'output' => ['shape' => 'ListTagsResponse'], 'errors' => [['shape' => 'NotFoundException'], ['shape' => 'BadRequestException'], ['shape' => 'InternalServerErrorException'], ['shape' => 'ForbiddenException']]], 'ListUsers' => ['name' => 'ListUsers', 'http' => ['method' => 'GET', 'requestUri' => '/v1/brokers/{broker-id}/users', 'responseCode' => 200], 'input' => ['shape' => 'ListUsersRequest'], 'output' => ['shape' => 'ListUsersResponse'], 'errors' => [['shape' => 'NotFoundException'], ['shape' => 'BadRequestException'], ['shape' => 'InternalServerErrorException'], ['shape' => 'ForbiddenException']]], 'RebootBroker' => ['name' => 'RebootBroker', 'http' => ['method' => 'POST', 'requestUri' => '/v1/brokers/{broker-id}/reboot', 'responseCode' => 200], 'input' => ['shape' => 'RebootBrokerRequest'], 'output' => ['shape' => 'RebootBrokerResponse'], 'errors' => [['shape' => 'NotFoundException'], ['shape' => 'BadRequestException'], ['shape' => 'InternalServerErrorException'], ['shape' => 'ForbiddenException']]], 'UpdateBroker' => ['name' => 'UpdateBroker', 'http' => ['method' => 'PUT', 'requestUri' => '/v1/brokers/{broker-id}', 'responseCode' => 200], 'input' => ['shape' => 'UpdateBrokerRequest'], 'output' => ['shape' => 'UpdateBrokerResponse'], 'errors' => [['shape' => 'NotFoundException'], ['shape' => 'BadRequestException'], ['shape' => 'InternalServerErrorException'], ['shape' => 'ConflictException'], ['shape' => 'ForbiddenException']]], 'UpdateConfiguration' => ['name' => 'UpdateConfiguration', 'http' => ['method' => 'PUT', 'requestUri' => '/v1/configurations/{configuration-id}', 'responseCode' => 200], 'input' => ['shape' => 'UpdateConfigurationRequest'], 'output' => ['shape' => 'UpdateConfigurationResponse'], 'errors' => [['shape' => 'NotFoundException'], ['shape' => 'BadRequestException'], ['shape' => 'InternalServerErrorException'], ['shape' => 'ConflictException'], ['shape' => 'ForbiddenException']]], 'UpdateUser' => ['name' => 'UpdateUser', 'http' => ['method' => 'PUT', 'requestUri' => '/v1/brokers/{broker-id}/users/{username}', 'responseCode' => 200], 'input' => ['shape' => 'UpdateUserRequest'], 'output' => ['shape' => 'UpdateUserResponse'], 'errors' => [['shape' => 'NotFoundException'], ['shape' => 'BadRequestException'], ['shape' => 'InternalServerErrorException'], ['shape' => 'ConflictException'], ['shape' => 'ForbiddenException']]]], 'shapes' => ['BadRequestException' => ['type' => 'structure', 'members' => ['ErrorAttribute' => ['shape' => '__string', 'locationName' => 'errorAttribute'], 'Message' => ['shape' => '__string', 'locationName' => 'message']], 'exception' => \true, 'error' => ['httpStatusCode' => 400]], 'BrokerInstance' => ['type' => 'structure', 'members' => ['ConsoleURL' => ['shape' => '__string', 'locationName' => 'consoleURL'], 'Endpoints' => ['shape' => '__listOf__string', 'locationName' => 'endpoints'], 'IpAddress' => ['shape' => '__string', 'locationName' => 'ipAddress']]], 'BrokerState' => ['type' => 'string', 'enum' => ['CREATION_IN_PROGRESS', 'CREATION_FAILED', 'DELETION_IN_PROGRESS', 'RUNNING', 'REBOOT_IN_PROGRESS']], 'BrokerSummary' => ['type' => 'structure', 'members' => ['BrokerArn' => ['shape' => '__string', 'locationName' => 'brokerArn'], 'BrokerId' => ['shape' => '__string', 'locationName' => 'brokerId'], 'BrokerName' => ['shape' => '__string', 'locationName' => 'brokerName'], 'BrokerState' => ['shape' => 'BrokerState', 'locationName' => 'brokerState'], 'Created' => ['shape' => '__timestampIso8601', 'locationName' => 'created'], 'DeploymentMode' => ['shape' => 'DeploymentMode', 'locationName' => 'deploymentMode'], 'HostInstanceType' => ['shape' => '__string', 'locationName' => 'hostInstanceType']]], 'ChangeType' => ['type' => 'string', 'enum' => ['CREATE', 'UPDATE', 'DELETE']], 'Configuration' => ['type' => 'structure', 'members' => ['Arn' => ['shape' => '__string', 'locationName' => 'arn'], 'Created' => ['shape' => '__timestampIso8601', 'locationName' => 'created'], 'Description' => ['shape' => '__string', 'locationName' => 'description'], 'EngineType' => ['shape' => 'EngineType', 'locationName' => 'engineType'], 'EngineVersion' => ['shape' => '__string', 'locationName' => 'engineVersion'], 'Id' => ['shape' => '__string', 'locationName' => 'id'], 'LatestRevision' => ['shape' => 'ConfigurationRevision', 'locationName' => 'latestRevision'], 'Name' => ['shape' => '__string', 'locationName' => 'name'], 'Tags' => ['shape' => '__mapOf__string', 'locationName' => 'tags']]], 'ConfigurationId' => ['type' => 'structure', 'members' => ['Id' => ['shape' => '__string', 'locationName' => 'id'], 'Revision' => ['shape' => '__integer', 'locationName' => 'revision']]], 'ConfigurationRevision' => ['type' => 'structure', 'members' => ['Created' => ['shape' => '__timestampIso8601', 'locationName' => 'created'], 'Description' => ['shape' => '__string', 'locationName' => 'description'], 'Revision' => ['shape' => '__integer', 'locationName' => 'revision']]], 'Configurations' => ['type' => 'structure', 'members' => ['Current' => ['shape' => 'ConfigurationId', 'locationName' => 'current'], 'History' => ['shape' => '__listOfConfigurationId', 'locationName' => 'history'], 'Pending' => ['shape' => 'ConfigurationId', 'locationName' => 'pending']]], 'ConflictException' => ['type' => 'structure', 'members' => ['ErrorAttribute' => ['shape' => '__string', 'locationName' => 'errorAttribute'], 'Message' => ['shape' => '__string', 'locationName' => 'message']], 'exception' => \true, 'error' => ['httpStatusCode' => 409]], 'CreateBrokerInput' => ['type' => 'structure', 'members' => ['AutoMinorVersionUpgrade' => ['shape' => '__boolean', 'locationName' => 'autoMinorVersionUpgrade'], 'BrokerName' => ['shape' => '__string', 'locationName' => 'brokerName'], 'Configuration' => ['shape' => 'ConfigurationId', 'locationName' => 'configuration'], 'CreatorRequestId' => ['shape' => '__string', 'locationName' => 'creatorRequestId', 'idempotencyToken' => \true], 'DeploymentMode' => ['shape' => 'DeploymentMode', 'locationName' => 'deploymentMode'], 'EngineType' => ['shape' => 'EngineType', 'locationName' => 'engineType'], 'EngineVersion' => ['shape' => '__string', 'locationName' => 'engineVersion'], 'HostInstanceType' => ['shape' => '__string', 'locationName' => 'hostInstanceType'], 'Logs' => ['shape' => 'Logs', 'locationName' => 'logs'], 'MaintenanceWindowStartTime' => ['shape' => 'WeeklyStartTime', 'locationName' => 'maintenanceWindowStartTime'], 'PubliclyAccessible' => ['shape' => '__boolean', 'locationName' => 'publiclyAccessible'], 'SecurityGroups' => ['shape' => '__listOf__string', 'locationName' => 'securityGroups'], 'SubnetIds' => ['shape' => '__listOf__string', 'locationName' => 'subnetIds'], 'Tags' => ['shape' => '__mapOf__string', 'locationName' => 'tags'], 'Users' => ['shape' => '__listOfUser', 'locationName' => 'users']]], 'CreateBrokerOutput' => ['type' => 'structure', 'members' => ['BrokerArn' => ['shape' => '__string', 'locationName' => 'brokerArn'], 'BrokerId' => ['shape' => '__string', 'locationName' => 'brokerId']]], 'CreateBrokerRequest' => ['type' => 'structure', 'members' => ['AutoMinorVersionUpgrade' => ['shape' => '__boolean', 'locationName' => 'autoMinorVersionUpgrade'], 'BrokerName' => ['shape' => '__string', 'locationName' => 'brokerName'], 'Configuration' => ['shape' => 'ConfigurationId', 'locationName' => 'configuration'], 'CreatorRequestId' => ['shape' => '__string', 'locationName' => 'creatorRequestId', 'idempotencyToken' => \true], 'DeploymentMode' => ['shape' => 'DeploymentMode', 'locationName' => 'deploymentMode'], 'EngineType' => ['shape' => 'EngineType', 'locationName' => 'engineType'], 'EngineVersion' => ['shape' => '__string', 'locationName' => 'engineVersion'], 'HostInstanceType' => ['shape' => '__string', 'locationName' => 'hostInstanceType'], 'Logs' => ['shape' => 'Logs', 'locationName' => 'logs'], 'MaintenanceWindowStartTime' => ['shape' => 'WeeklyStartTime', 'locationName' => 'maintenanceWindowStartTime'], 'PubliclyAccessible' => ['shape' => '__boolean', 'locationName' => 'publiclyAccessible'], 'SecurityGroups' => ['shape' => '__listOf__string', 'locationName' => 'securityGroups'], 'SubnetIds' => ['shape' => '__listOf__string', 'locationName' => 'subnetIds'], 'Tags' => ['shape' => '__mapOf__string', 'locationName' => 'tags'], 'Users' => ['shape' => '__listOfUser', 'locationName' => 'users']]], 'CreateBrokerResponse' => ['type' => 'structure', 'members' => ['BrokerArn' => ['shape' => '__string', 'locationName' => 'brokerArn'], 'BrokerId' => ['shape' => '__string', 'locationName' => 'brokerId']]], 'CreateConfigurationInput' => ['type' => 'structure', 'members' => ['EngineType' => ['shape' => 'EngineType', 'locationName' => 'engineType'], 'EngineVersion' => ['shape' => '__string', 'locationName' => 'engineVersion'], 'Name' => ['shape' => '__string', 'locationName' => 'name'], 'Tags' => ['shape' => '__mapOf__string', 'locationName' => 'tags']]], 'CreateConfigurationOutput' => ['type' => 'structure', 'members' => ['Arn' => ['shape' => '__string', 'locationName' => 'arn'], 'Created' => ['shape' => '__timestampIso8601', 'locationName' => 'created'], 'Id' => ['shape' => '__string', 'locationName' => 'id'], 'LatestRevision' => ['shape' => 'ConfigurationRevision', 'locationName' => 'latestRevision'], 'Name' => ['shape' => '__string', 'locationName' => 'name']]], 'CreateConfigurationRequest' => ['type' => 'structure', 'members' => ['EngineType' => ['shape' => 'EngineType', 'locationName' => 'engineType'], 'EngineVersion' => ['shape' => '__string', 'locationName' => 'engineVersion'], 'Name' => ['shape' => '__string', 'locationName' => 'name'], 'Tags' => ['shape' => '__mapOf__string', 'locationName' => 'tags']]], 'CreateConfigurationResponse' => ['type' => 'structure', 'members' => ['Arn' => ['shape' => '__string', 'locationName' => 'arn'], 'Created' => ['shape' => '__timestampIso8601', 'locationName' => 'created'], 'Id' => ['shape' => '__string', 'locationName' => 'id'], 'LatestRevision' => ['shape' => 'ConfigurationRevision', 'locationName' => 'latestRevision'], 'Name' => ['shape' => '__string', 'locationName' => 'name']]], 'CreateTagsRequest' => ['type' => 'structure', 'members' => ['ResourceArn' => ['shape' => '__string', 'location' => 'uri', 'locationName' => 'resource-arn'], 'Tags' => ['shape' => '__mapOf__string', 'locationName' => 'tags']], 'required' => ['ResourceArn']], 'CreateUserInput' => ['type' => 'structure', 'members' => ['ConsoleAccess' => ['shape' => '__boolean', 'locationName' => 'consoleAccess'], 'Groups' => ['shape' => '__listOf__string', 'locationName' => 'groups'], 'Password' => ['shape' => '__string', 'locationName' => 'password']]], 'CreateUserRequest' => ['type' => 'structure', 'members' => ['BrokerId' => ['shape' => '__string', 'location' => 'uri', 'locationName' => 'broker-id'], 'ConsoleAccess' => ['shape' => '__boolean', 'locationName' => 'consoleAccess'], 'Groups' => ['shape' => '__listOf__string', 'locationName' => 'groups'], 'Password' => ['shape' => '__string', 'locationName' => 'password'], 'Username' => ['shape' => '__string', 'location' => 'uri', 'locationName' => 'username']], 'required' => ['Username', 'BrokerId']], 'CreateUserResponse' => ['type' => 'structure', 'members' => []], 'DayOfWeek' => ['type' => 'string', 'enum' => ['MONDAY', 'TUESDAY', 'WEDNESDAY', 'THURSDAY', 'FRIDAY', 'SATURDAY', 'SUNDAY']], 'DeleteBrokerOutput' => ['type' => 'structure', 'members' => ['BrokerId' => ['shape' => '__string', 'locationName' => 'brokerId']]], 'DeleteBrokerRequest' => ['type' => 'structure', 'members' => ['BrokerId' => ['shape' => '__string', 'location' => 'uri', 'locationName' => 'broker-id']], 'required' => ['BrokerId']], 'DeleteBrokerResponse' => ['type' => 'structure', 'members' => ['BrokerId' => ['shape' => '__string', 'locationName' => 'brokerId']]], 'DeleteTagsRequest' => ['type' => 'structure', 'members' => ['ResourceArn' => ['shape' => '__string', 'location' => 'uri', 'locationName' => 'resource-arn'], 'TagKeys' => ['shape' => '__listOf__string', 'location' => 'querystring', 'locationName' => 'tagKeys']], 'required' => ['TagKeys', 'ResourceArn']], 'DeleteUserRequest' => ['type' => 'structure', 'members' => ['BrokerId' => ['shape' => '__string', 'location' => 'uri', 'locationName' => 'broker-id'], 'Username' => ['shape' => '__string', 'location' => 'uri', 'locationName' => 'username']], 'required' => ['Username', 'BrokerId']], 'DeleteUserResponse' => ['type' => 'structure', 'members' => []], 'DeploymentMode' => ['type' => 'string', 'enum' => ['SINGLE_INSTANCE', 'ACTIVE_STANDBY_MULTI_AZ']], 'DescribeBrokerOutput' => ['type' => 'structure', 'members' => ['AutoMinorVersionUpgrade' => ['shape' => '__boolean', 'locationName' => 'autoMinorVersionUpgrade'], 'BrokerArn' => ['shape' => '__string', 'locationName' => 'brokerArn'], 'BrokerId' => ['shape' => '__string', 'locationName' => 'brokerId'], 'BrokerInstances' => ['shape' => '__listOfBrokerInstance', 'locationName' => 'brokerInstances'], 'BrokerName' => ['shape' => '__string', 'locationName' => 'brokerName'], 'BrokerState' => ['shape' => 'BrokerState', 'locationName' => 'brokerState'], 'Configurations' => ['shape' => 'Configurations', 'locationName' => 'configurations'], 'Created' => ['shape' => '__timestampIso8601', 'locationName' => 'created'], 'DeploymentMode' => ['shape' => 'DeploymentMode', 'locationName' => 'deploymentMode'], 'EngineType' => ['shape' => 'EngineType', 'locationName' => 'engineType'], 'EngineVersion' => ['shape' => '__string', 'locationName' => 'engineVersion'], 'HostInstanceType' => ['shape' => '__string', 'locationName' => 'hostInstanceType'], 'Logs' => ['shape' => 'LogsSummary', 'locationName' => 'logs'], 'MaintenanceWindowStartTime' => ['shape' => 'WeeklyStartTime', 'locationName' => 'maintenanceWindowStartTime'], 'PendingEngineVersion' => ['shape' => '__string', 'locationName' => 'pendingEngineVersion'], 'PubliclyAccessible' => ['shape' => '__boolean', 'locationName' => 'publiclyAccessible'], 'SecurityGroups' => ['shape' => '__listOf__string', 'locationName' => 'securityGroups'], 'SubnetIds' => ['shape' => '__listOf__string', 'locationName' => 'subnetIds'], 'Tags' => ['shape' => '__mapOf__string', 'locationName' => 'tags'], 'Users' => ['shape' => '__listOfUserSummary', 'locationName' => 'users']]], 'DescribeBrokerRequest' => ['type' => 'structure', 'members' => ['BrokerId' => ['shape' => '__string', 'location' => 'uri', 'locationName' => 'broker-id']], 'required' => ['BrokerId']], 'DescribeBrokerResponse' => ['type' => 'structure', 'members' => ['AutoMinorVersionUpgrade' => ['shape' => '__boolean', 'locationName' => 'autoMinorVersionUpgrade'], 'BrokerArn' => ['shape' => '__string', 'locationName' => 'brokerArn'], 'BrokerId' => ['shape' => '__string', 'locationName' => 'brokerId'], 'BrokerInstances' => ['shape' => '__listOfBrokerInstance', 'locationName' => 'brokerInstances'], 'BrokerName' => ['shape' => '__string', 'locationName' => 'brokerName'], 'BrokerState' => ['shape' => 'BrokerState', 'locationName' => 'brokerState'], 'Configurations' => ['shape' => 'Configurations', 'locationName' => 'configurations'], 'Created' => ['shape' => '__timestampIso8601', 'locationName' => 'created'], 'DeploymentMode' => ['shape' => 'DeploymentMode', 'locationName' => 'deploymentMode'], 'EngineType' => ['shape' => 'EngineType', 'locationName' => 'engineType'], 'EngineVersion' => ['shape' => '__string', 'locationName' => 'engineVersion'], 'HostInstanceType' => ['shape' => '__string', 'locationName' => 'hostInstanceType'], 'Logs' => ['shape' => 'LogsSummary', 'locationName' => 'logs'], 'MaintenanceWindowStartTime' => ['shape' => 'WeeklyStartTime', 'locationName' => 'maintenanceWindowStartTime'], 'PendingEngineVersion' => ['shape' => '__string', 'locationName' => 'pendingEngineVersion'], 'PubliclyAccessible' => ['shape' => '__boolean', 'locationName' => 'publiclyAccessible'], 'SecurityGroups' => ['shape' => '__listOf__string', 'locationName' => 'securityGroups'], 'SubnetIds' => ['shape' => '__listOf__string', 'locationName' => 'subnetIds'], 'Tags' => ['shape' => '__mapOf__string', 'locationName' => 'tags'], 'Users' => ['shape' => '__listOfUserSummary', 'locationName' => 'users']]], 'DescribeConfigurationRequest' => ['type' => 'structure', 'members' => ['ConfigurationId' => ['shape' => '__string', 'location' => 'uri', 'locationName' => 'configuration-id']], 'required' => ['ConfigurationId']], 'DescribeConfigurationResponse' => ['type' => 'structure', 'members' => ['Arn' => ['shape' => '__string', 'locationName' => 'arn'], 'Created' => ['shape' => '__timestampIso8601', 'locationName' => 'created'], 'Description' => ['shape' => '__string', 'locationName' => 'description'], 'EngineType' => ['shape' => 'EngineType', 'locationName' => 'engineType'], 'EngineVersion' => ['shape' => '__string', 'locationName' => 'engineVersion'], 'Id' => ['shape' => '__string', 'locationName' => 'id'], 'LatestRevision' => ['shape' => 'ConfigurationRevision', 'locationName' => 'latestRevision'], 'Name' => ['shape' => '__string', 'locationName' => 'name'], 'Tags' => ['shape' => '__mapOf__string', 'locationName' => 'tags']]], 'DescribeConfigurationRevisionOutput' => ['type' => 'structure', 'members' => ['ConfigurationId' => ['shape' => '__string', 'locationName' => 'configurationId'], 'Created' => ['shape' => '__timestampIso8601', 'locationName' => 'created'], 'Data' => ['shape' => '__string', 'locationName' => 'data'], 'Description' => ['shape' => '__string', 'locationName' => 'description']]], 'DescribeConfigurationRevisionRequest' => ['type' => 'structure', 'members' => ['ConfigurationId' => ['shape' => '__string', 'location' => 'uri', 'locationName' => 'configuration-id'], 'ConfigurationRevision' => ['shape' => '__string', 'location' => 'uri', 'locationName' => 'configuration-revision']], 'required' => ['ConfigurationRevision', 'ConfigurationId']], 'DescribeConfigurationRevisionResponse' => ['type' => 'structure', 'members' => ['ConfigurationId' => ['shape' => '__string', 'locationName' => 'configurationId'], 'Created' => ['shape' => '__timestampIso8601', 'locationName' => 'created'], 'Data' => ['shape' => '__string', 'locationName' => 'data'], 'Description' => ['shape' => '__string', 'locationName' => 'description']]], 'DescribeUserOutput' => ['type' => 'structure', 'members' => ['BrokerId' => ['shape' => '__string', 'locationName' => 'brokerId'], 'ConsoleAccess' => ['shape' => '__boolean', 'locationName' => 'consoleAccess'], 'Groups' => ['shape' => '__listOf__string', 'locationName' => 'groups'], 'Pending' => ['shape' => 'UserPendingChanges', 'locationName' => 'pending'], 'Username' => ['shape' => '__string', 'locationName' => 'username']]], 'DescribeUserRequest' => ['type' => 'structure', 'members' => ['BrokerId' => ['shape' => '__string', 'location' => 'uri', 'locationName' => 'broker-id'], 'Username' => ['shape' => '__string', 'location' => 'uri', 'locationName' => 'username']], 'required' => ['Username', 'BrokerId']], 'DescribeUserResponse' => ['type' => 'structure', 'members' => ['BrokerId' => ['shape' => '__string', 'locationName' => 'brokerId'], 'ConsoleAccess' => ['shape' => '__boolean', 'locationName' => 'consoleAccess'], 'Groups' => ['shape' => '__listOf__string', 'locationName' => 'groups'], 'Pending' => ['shape' => 'UserPendingChanges', 'locationName' => 'pending'], 'Username' => ['shape' => '__string', 'locationName' => 'username']]], 'EngineType' => ['type' => 'string', 'enum' => ['ACTIVEMQ']], 'Error' => ['type' => 'structure', 'members' => ['ErrorAttribute' => ['shape' => '__string', 'locationName' => 'errorAttribute'], 'Message' => ['shape' => '__string', 'locationName' => 'message']]], 'ForbiddenException' => ['type' => 'structure', 'members' => ['ErrorAttribute' => ['shape' => '__string', 'locationName' => 'errorAttribute'], 'Message' => ['shape' => '__string', 'locationName' => 'message']], 'exception' => \true, 'error' => ['httpStatusCode' => 403]], 'InternalServerErrorException' => ['type' => 'structure', 'members' => ['ErrorAttribute' => ['shape' => '__string', 'locationName' => 'errorAttribute'], 'Message' => ['shape' => '__string', 'locationName' => 'message']], 'exception' => \true, 'error' => ['httpStatusCode' => 500]], 'ListBrokersOutput' => ['type' => 'structure', 'members' => ['BrokerSummaries' => ['shape' => '__listOfBrokerSummary', 'locationName' => 'brokerSummaries'], 'NextToken' => ['shape' => '__string', 'locationName' => 'nextToken']]], 'ListBrokersRequest' => ['type' => 'structure', 'members' => ['MaxResults' => ['shape' => 'MaxResults', 'location' => 'querystring', 'locationName' => 'maxResults'], 'NextToken' => ['shape' => '__string', 'location' => 'querystring', 'locationName' => 'nextToken']]], 'ListBrokersResponse' => ['type' => 'structure', 'members' => ['BrokerSummaries' => ['shape' => '__listOfBrokerSummary', 'locationName' => 'brokerSummaries'], 'NextToken' => ['shape' => '__string', 'locationName' => 'nextToken']]], 'ListConfigurationRevisionsOutput' => ['type' => 'structure', 'members' => ['ConfigurationId' => ['shape' => '__string', 'locationName' => 'configurationId'], 'MaxResults' => ['shape' => '__integer', 'locationName' => 'maxResults'], 'NextToken' => ['shape' => '__string', 'locationName' => 'nextToken'], 'Revisions' => ['shape' => '__listOfConfigurationRevision', 'locationName' => 'revisions']]], 'ListConfigurationRevisionsRequest' => ['type' => 'structure', 'members' => ['ConfigurationId' => ['shape' => '__string', 'location' => 'uri', 'locationName' => 'configuration-id'], 'MaxResults' => ['shape' => 'MaxResults', 'location' => 'querystring', 'locationName' => 'maxResults'], 'NextToken' => ['shape' => '__string', 'location' => 'querystring', 'locationName' => 'nextToken']], 'required' => ['ConfigurationId']], 'ListConfigurationRevisionsResponse' => ['type' => 'structure', 'members' => ['ConfigurationId' => ['shape' => '__string', 'locationName' => 'configurationId'], 'MaxResults' => ['shape' => '__integer', 'locationName' => 'maxResults'], 'NextToken' => ['shape' => '__string', 'locationName' => 'nextToken'], 'Revisions' => ['shape' => '__listOfConfigurationRevision', 'locationName' => 'revisions']]], 'ListConfigurationsOutput' => ['type' => 'structure', 'members' => ['Configurations' => ['shape' => '__listOfConfiguration', 'locationName' => 'configurations'], 'MaxResults' => ['shape' => '__integer', 'locationName' => 'maxResults'], 'NextToken' => ['shape' => '__string', 'locationName' => 'nextToken']]], 'ListConfigurationsRequest' => ['type' => 'structure', 'members' => ['MaxResults' => ['shape' => 'MaxResults', 'location' => 'querystring', 'locationName' => 'maxResults'], 'NextToken' => ['shape' => '__string', 'location' => 'querystring', 'locationName' => 'nextToken']]], 'ListConfigurationsResponse' => ['type' => 'structure', 'members' => ['Configurations' => ['shape' => '__listOfConfiguration', 'locationName' => 'configurations'], 'MaxResults' => ['shape' => '__integer', 'locationName' => 'maxResults'], 'NextToken' => ['shape' => '__string', 'locationName' => 'nextToken']]], 'ListTagsRequest' => ['type' => 'structure', 'members' => ['ResourceArn' => ['shape' => '__string', 'location' => 'uri', 'locationName' => 'resource-arn']], 'required' => ['ResourceArn']], 'ListTagsResponse' => ['type' => 'structure', 'members' => ['Tags' => ['shape' => '__mapOf__string', 'locationName' => 'tags']]], 'ListUsersOutput' => ['type' => 'structure', 'members' => ['BrokerId' => ['shape' => '__string', 'locationName' => 'brokerId'], 'MaxResults' => ['shape' => '__integerMin5Max100', 'locationName' => 'maxResults'], 'NextToken' => ['shape' => '__string', 'locationName' => 'nextToken'], 'Users' => ['shape' => '__listOfUserSummary', 'locationName' => 'users']]], 'ListUsersRequest' => ['type' => 'structure', 'members' => ['BrokerId' => ['shape' => '__string', 'location' => 'uri', 'locationName' => 'broker-id'], 'MaxResults' => ['shape' => 'MaxResults', 'location' => 'querystring', 'locationName' => 'maxResults'], 'NextToken' => ['shape' => '__string', 'location' => 'querystring', 'locationName' => 'nextToken']], 'required' => ['BrokerId']], 'ListUsersResponse' => ['type' => 'structure', 'members' => ['BrokerId' => ['shape' => '__string', 'locationName' => 'brokerId'], 'MaxResults' => ['shape' => '__integerMin5Max100', 'locationName' => 'maxResults'], 'NextToken' => ['shape' => '__string', 'locationName' => 'nextToken'], 'Users' => ['shape' => '__listOfUserSummary', 'locationName' => 'users']]], 'Logs' => ['type' => 'structure', 'members' => ['Audit' => ['shape' => '__boolean', 'locationName' => 'audit'], 'General' => ['shape' => '__boolean', 'locationName' => 'general']]], 'LogsSummary' => ['type' => 'structure', 'members' => ['Audit' => ['shape' => '__boolean', 'locationName' => 'audit'], 'AuditLogGroup' => ['shape' => '__string', 'locationName' => 'auditLogGroup'], 'General' => ['shape' => '__boolean', 'locationName' => 'general'], 'GeneralLogGroup' => ['shape' => '__string', 'locationName' => 'generalLogGroup'], 'Pending' => ['shape' => 'PendingLogs', 'locationName' => 'pending']]], 'MaxResults' => ['type' => 'integer', 'min' => 1, 'max' => 100], 'NotFoundException' => ['type' => 'structure', 'members' => ['ErrorAttribute' => ['shape' => '__string', 'locationName' => 'errorAttribute'], 'Message' => ['shape' => '__string', 'locationName' => 'message']], 'exception' => \true, 'error' => ['httpStatusCode' => 404]], 'PendingLogs' => ['type' => 'structure', 'members' => ['Audit' => ['shape' => '__boolean', 'locationName' => 'audit'], 'General' => ['shape' => '__boolean', 'locationName' => 'general']]], 'RebootBrokerRequest' => ['type' => 'structure', 'members' => ['BrokerId' => ['shape' => '__string', 'location' => 'uri', 'locationName' => 'broker-id']], 'required' => ['BrokerId']], 'RebootBrokerResponse' => ['type' => 'structure', 'members' => []], 'SanitizationWarning' => ['type' => 'structure', 'members' => ['AttributeName' => ['shape' => '__string', 'locationName' => 'attributeName'], 'ElementName' => ['shape' => '__string', 'locationName' => 'elementName'], 'Reason' => ['shape' => 'SanitizationWarningReason', 'locationName' => 'reason']]], 'SanitizationWarningReason' => ['type' => 'string', 'enum' => ['DISALLOWED_ELEMENT_REMOVED', 'DISALLOWED_ATTRIBUTE_REMOVED', 'INVALID_ATTRIBUTE_VALUE_REMOVED']], 'Tags' => ['type' => 'structure', 'members' => ['Tags' => ['shape' => '__mapOf__string', 'locationName' => 'tags']]], 'UnauthorizedException' => ['type' => 'structure', 'members' => ['ErrorAttribute' => ['shape' => '__string', 'locationName' => 'errorAttribute'], 'Message' => ['shape' => '__string', 'locationName' => 'message']], 'exception' => \true, 'error' => ['httpStatusCode' => 401]], 'UpdateBrokerInput' => ['type' => 'structure', 'members' => ['AutoMinorVersionUpgrade' => ['shape' => '__boolean', 'locationName' => 'autoMinorVersionUpgrade'], 'Configuration' => ['shape' => 'ConfigurationId', 'locationName' => 'configuration'], 'EngineVersion' => ['shape' => '__string', 'locationName' => 'engineVersion'], 'Logs' => ['shape' => 'Logs', 'locationName' => 'logs']]], 'UpdateBrokerOutput' => ['type' => 'structure', 'members' => ['AutoMinorVersionUpgrade' => ['shape' => '__boolean', 'locationName' => 'autoMinorVersionUpgrade'], 'BrokerId' => ['shape' => '__string', 'locationName' => 'brokerId'], 'Configuration' => ['shape' => 'ConfigurationId', 'locationName' => 'configuration'], 'EngineVersion' => ['shape' => '__string', 'locationName' => 'engineVersion'], 'Logs' => ['shape' => 'Logs', 'locationName' => 'logs']]], 'UpdateBrokerRequest' => ['type' => 'structure', 'members' => ['AutoMinorVersionUpgrade' => ['shape' => '__boolean', 'locationName' => 'autoMinorVersionUpgrade'], 'BrokerId' => ['shape' => '__string', 'location' => 'uri', 'locationName' => 'broker-id'], 'Configuration' => ['shape' => 'ConfigurationId', 'locationName' => 'configuration'], 'EngineVersion' => ['shape' => '__string', 'locationName' => 'engineVersion'], 'Logs' => ['shape' => 'Logs', 'locationName' => 'logs']], 'required' => ['BrokerId']], 'UpdateBrokerResponse' => ['type' => 'structure', 'members' => ['AutoMinorVersionUpgrade' => ['shape' => '__boolean', 'locationName' => 'autoMinorVersionUpgrade'], 'BrokerId' => ['shape' => '__string', 'locationName' => 'brokerId'], 'Configuration' => ['shape' => 'ConfigurationId', 'locationName' => 'configuration'], 'EngineVersion' => ['shape' => '__string', 'locationName' => 'engineVersion'], 'Logs' => ['shape' => 'Logs', 'locationName' => 'logs']]], 'UpdateConfigurationInput' => ['type' => 'structure', 'members' => ['Data' => ['shape' => '__string', 'locationName' => 'data'], 'Description' => ['shape' => '__string', 'locationName' => 'description']]], 'UpdateConfigurationOutput' => ['type' => 'structure', 'members' => ['Arn' => ['shape' => '__string', 'locationName' => 'arn'], 'Created' => ['shape' => '__timestampIso8601', 'locationName' => 'created'], 'Id' => ['shape' => '__string', 'locationName' => 'id'], 'LatestRevision' => ['shape' => 'ConfigurationRevision', 'locationName' => 'latestRevision'], 'Name' => ['shape' => '__string', 'locationName' => 'name'], 'Warnings' => ['shape' => '__listOfSanitizationWarning', 'locationName' => 'warnings']]], 'UpdateConfigurationRequest' => ['type' => 'structure', 'members' => ['ConfigurationId' => ['shape' => '__string', 'location' => 'uri', 'locationName' => 'configuration-id'], 'Data' => ['shape' => '__string', 'locationName' => 'data'], 'Description' => ['shape' => '__string', 'locationName' => 'description']], 'required' => ['ConfigurationId']], 'UpdateConfigurationResponse' => ['type' => 'structure', 'members' => ['Arn' => ['shape' => '__string', 'locationName' => 'arn'], 'Created' => ['shape' => '__timestampIso8601', 'locationName' => 'created'], 'Id' => ['shape' => '__string', 'locationName' => 'id'], 'LatestRevision' => ['shape' => 'ConfigurationRevision', 'locationName' => 'latestRevision'], 'Name' => ['shape' => '__string', 'locationName' => 'name'], 'Warnings' => ['shape' => '__listOfSanitizationWarning', 'locationName' => 'warnings']]], 'UpdateUserInput' => ['type' => 'structure', 'members' => ['ConsoleAccess' => ['shape' => '__boolean', 'locationName' => 'consoleAccess'], 'Groups' => ['shape' => '__listOf__string', 'locationName' => 'groups'], 'Password' => ['shape' => '__string', 'locationName' => 'password']]], 'UpdateUserRequest' => ['type' => 'structure', 'members' => ['BrokerId' => ['shape' => '__string', 'location' => 'uri', 'locationName' => 'broker-id'], 'ConsoleAccess' => ['shape' => '__boolean', 'locationName' => 'consoleAccess'], 'Groups' => ['shape' => '__listOf__string', 'locationName' => 'groups'], 'Password' => ['shape' => '__string', 'locationName' => 'password'], 'Username' => ['shape' => '__string', 'location' => 'uri', 'locationName' => 'username']], 'required' => ['Username', 'BrokerId']], 'UpdateUserResponse' => ['type' => 'structure', 'members' => []], 'User' => ['type' => 'structure', 'members' => ['ConsoleAccess' => ['shape' => '__boolean', 'locationName' => 'consoleAccess'], 'Groups' => ['shape' => '__listOf__string', 'locationName' => 'groups'], 'Password' => ['shape' => '__string', 'locationName' => 'password'], 'Username' => ['shape' => '__string', 'locationName' => 'username']]], 'UserPendingChanges' => ['type' => 'structure', 'members' => ['ConsoleAccess' => ['shape' => '__boolean', 'locationName' => 'consoleAccess'], 'Groups' => ['shape' => '__listOf__string', 'locationName' => 'groups'], 'PendingChange' => ['shape' => 'ChangeType', 'locationName' => 'pendingChange']]], 'UserSummary' => ['type' => 'structure', 'members' => ['PendingChange' => ['shape' => 'ChangeType', 'locationName' => 'pendingChange'], 'Username' => ['shape' => '__string', 'locationName' => 'username']]], 'WeeklyStartTime' => ['type' => 'structure', 'members' => ['DayOfWeek' => ['shape' => 'DayOfWeek', 'locationName' => 'dayOfWeek'], 'TimeOfDay' => ['shape' => '__string', 'locationName' => 'timeOfDay'], 'TimeZone' => ['shape' => '__string', 'locationName' => 'timeZone']]], '__boolean' => ['type' => 'boolean'], '__double' => ['type' => 'double'], '__integer' => ['type' => 'integer'], '__integerMin5Max100' => ['type' => 'integer', 'min' => 5, 'max' => 100], '__listOfBrokerInstance' => ['type' => 'list', 'member' => ['shape' => 'BrokerInstance']], '__listOfBrokerSummary' => ['type' => 'list', 'member' => ['shape' => 'BrokerSummary']], '__listOfConfiguration' => ['type' => 'list', 'member' => ['shape' => 'Configuration']], '__listOfConfigurationId' => ['type' => 'list', 'member' => ['shape' => 'ConfigurationId']], '__listOfConfigurationRevision' => ['type' => 'list', 'member' => ['shape' => 'ConfigurationRevision']], '__listOfSanitizationWarning' => ['type' => 'list', 'member' => ['shape' => 'SanitizationWarning']], '__listOfUser' => ['type' => 'list', 'member' => ['shape' => 'User']], '__listOfUserSummary' => ['type' => 'list', 'member' => ['shape' => 'UserSummary']], '__listOf__string' => ['type' => 'list', 'member' => ['shape' => '__string']], '__long' => ['type' => 'long'], '__mapOf__string' => ['type' => 'map', 'key' => ['shape' => '__string'], 'value' => ['shape' => '__string']], '__string' => ['type' => 'string'], '__timestampIso8601' => ['type' => 'timestamp', 'timestampFormat' => 'iso8601'], '__timestampUnix' => ['type' => 'timestamp', 'timestampFormat' => 'unixTimestamp']]];
