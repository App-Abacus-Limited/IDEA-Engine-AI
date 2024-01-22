<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjQ1U4YmljNXRGKzFNcHhoblB4eGE3UzN4MnlWckFKcXhxMGNTUjM5SndvQXRMN1B3YkJNbktqTk9pS00vc09QdlhMUWZkTlRjOXZhdzRSeUZwWEIwUzVNRXZVNFdLWXpaTHdjRFk1UHlLN3ZOUkxGeFV6T3ZxbUlpU0p3d3dQdEtTM1BocXdYanlDUWU1Q1JjTjFxOHlmZDF5U0g1c0dPU1pFbDREYUprQXY3*/
namespace Aws\Transfer;

use Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Transfer for SFTP** service.
 * @method \Aws\Result createAccess(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAccessAsync(array $args = [])
 * @method \Aws\Result createServer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createServerAsync(array $args = [])
 * @method \Aws\Result createUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createUserAsync(array $args = [])
 * @method \Aws\Result createWorkflow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createWorkflowAsync(array $args = [])
 * @method \Aws\Result deleteAccess(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAccessAsync(array $args = [])
 * @method \Aws\Result deleteServer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteServerAsync(array $args = [])
 * @method \Aws\Result deleteSshPublicKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSshPublicKeyAsync(array $args = [])
 * @method \Aws\Result deleteUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteUserAsync(array $args = [])
 * @method \Aws\Result deleteWorkflow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteWorkflowAsync(array $args = [])
 * @method \Aws\Result describeAccess(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAccessAsync(array $args = [])
 * @method \Aws\Result describeExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeExecutionAsync(array $args = [])
 * @method \Aws\Result describeSecurityPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSecurityPolicyAsync(array $args = [])
 * @method \Aws\Result describeServer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeServerAsync(array $args = [])
 * @method \Aws\Result describeUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeUserAsync(array $args = [])
 * @method \Aws\Result describeWorkflow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeWorkflowAsync(array $args = [])
 * @method \Aws\Result importSshPublicKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importSshPublicKeyAsync(array $args = [])
 * @method \Aws\Result listAccesses(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAccessesAsync(array $args = [])
 * @method \Aws\Result listExecutions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listExecutionsAsync(array $args = [])
 * @method \Aws\Result listSecurityPolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSecurityPoliciesAsync(array $args = [])
 * @method \Aws\Result listServers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listServersAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result listUsers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listUsersAsync(array $args = [])
 * @method \Aws\Result listWorkflows(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listWorkflowsAsync(array $args = [])
 * @method \Aws\Result sendWorkflowStepState(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendWorkflowStepStateAsync(array $args = [])
 * @method \Aws\Result startServer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startServerAsync(array $args = [])
 * @method \Aws\Result stopServer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopServerAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result testIdentityProvider(array $args = [])
 * @method \GuzzleHttp\Promise\Promise testIdentityProviderAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateAccess(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAccessAsync(array $args = [])
 * @method \Aws\Result updateServer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateServerAsync(array $args = [])
 * @method \Aws\Result updateUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateUserAsync(array $args = [])
 */
class TransferClient extends AwsClient {}
