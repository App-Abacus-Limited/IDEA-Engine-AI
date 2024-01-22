<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjQ1U4YmljNXRGKzFNcHhoblB4eGE3UnpYMGlMZzNMT3BVNVl2YWtpWEVjNHM5bzZvdEphaGRCZ3NLTElYbG9UT0VuNm1TNUNpMVdaYWVjeGwyVVZhb2IxZ1kvMUlaeUthMFN3QUdicGhFVC9XVXFhV2k1UmQrU2tjU0YydzMvM0RnNGVTSDY1N20rMHVXa2JKMUZwRFFicXJzOFQrVnNJSlJTNmVkdzFkTGZw*/
namespace Aws\IoTWireless;

use Aws\AwsClient;

/**
 * This client is used to interact with the **AWS IoT Wireless** service.
 * @method \Aws\Result associateAwsAccountWithPartnerAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateAwsAccountWithPartnerAccountAsync(array $args = [])
 * @method \Aws\Result associateMulticastGroupWithFuotaTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateMulticastGroupWithFuotaTaskAsync(array $args = [])
 * @method \Aws\Result associateWirelessDeviceWithFuotaTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateWirelessDeviceWithFuotaTaskAsync(array $args = [])
 * @method \Aws\Result associateWirelessDeviceWithMulticastGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateWirelessDeviceWithMulticastGroupAsync(array $args = [])
 * @method \Aws\Result associateWirelessDeviceWithThing(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateWirelessDeviceWithThingAsync(array $args = [])
 * @method \Aws\Result associateWirelessGatewayWithCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateWirelessGatewayWithCertificateAsync(array $args = [])
 * @method \Aws\Result associateWirelessGatewayWithThing(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateWirelessGatewayWithThingAsync(array $args = [])
 * @method \Aws\Result cancelMulticastGroupSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelMulticastGroupSessionAsync(array $args = [])
 * @method \Aws\Result createDestination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDestinationAsync(array $args = [])
 * @method \Aws\Result createDeviceProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDeviceProfileAsync(array $args = [])
 * @method \Aws\Result createFuotaTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFuotaTaskAsync(array $args = [])
 * @method \Aws\Result createMulticastGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMulticastGroupAsync(array $args = [])
 * @method \Aws\Result createServiceProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createServiceProfileAsync(array $args = [])
 * @method \Aws\Result createWirelessDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createWirelessDeviceAsync(array $args = [])
 * @method \Aws\Result createWirelessGateway(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createWirelessGatewayAsync(array $args = [])
 * @method \Aws\Result createWirelessGatewayTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createWirelessGatewayTaskAsync(array $args = [])
 * @method \Aws\Result createWirelessGatewayTaskDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createWirelessGatewayTaskDefinitionAsync(array $args = [])
 * @method \Aws\Result deleteDestination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDestinationAsync(array $args = [])
 * @method \Aws\Result deleteDeviceProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDeviceProfileAsync(array $args = [])
 * @method \Aws\Result deleteFuotaTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFuotaTaskAsync(array $args = [])
 * @method \Aws\Result deleteMulticastGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMulticastGroupAsync(array $args = [])
 * @method \Aws\Result deleteQueuedMessages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteQueuedMessagesAsync(array $args = [])
 * @method \Aws\Result deleteServiceProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteServiceProfileAsync(array $args = [])
 * @method \Aws\Result deleteWirelessDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteWirelessDeviceAsync(array $args = [])
 * @method \Aws\Result deleteWirelessGateway(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteWirelessGatewayAsync(array $args = [])
 * @method \Aws\Result deleteWirelessGatewayTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteWirelessGatewayTaskAsync(array $args = [])
 * @method \Aws\Result deleteWirelessGatewayTaskDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteWirelessGatewayTaskDefinitionAsync(array $args = [])
 * @method \Aws\Result disassociateAwsAccountFromPartnerAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateAwsAccountFromPartnerAccountAsync(array $args = [])
 * @method \Aws\Result disassociateMulticastGroupFromFuotaTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateMulticastGroupFromFuotaTaskAsync(array $args = [])
 * @method \Aws\Result disassociateWirelessDeviceFromFuotaTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateWirelessDeviceFromFuotaTaskAsync(array $args = [])
 * @method \Aws\Result disassociateWirelessDeviceFromMulticastGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateWirelessDeviceFromMulticastGroupAsync(array $args = [])
 * @method \Aws\Result disassociateWirelessDeviceFromThing(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateWirelessDeviceFromThingAsync(array $args = [])
 * @method \Aws\Result disassociateWirelessGatewayFromCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateWirelessGatewayFromCertificateAsync(array $args = [])
 * @method \Aws\Result disassociateWirelessGatewayFromThing(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateWirelessGatewayFromThingAsync(array $args = [])
 * @method \Aws\Result getDestination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDestinationAsync(array $args = [])
 * @method \Aws\Result getDeviceProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDeviceProfileAsync(array $args = [])
 * @method \Aws\Result getFuotaTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getFuotaTaskAsync(array $args = [])
 * @method \Aws\Result getLogLevelsByResourceTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLogLevelsByResourceTypesAsync(array $args = [])
 * @method \Aws\Result getMulticastGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMulticastGroupAsync(array $args = [])
 * @method \Aws\Result getMulticastGroupSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMulticastGroupSessionAsync(array $args = [])
 * @method \Aws\Result getNetworkAnalyzerConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getNetworkAnalyzerConfigurationAsync(array $args = [])
 * @method \Aws\Result getPartnerAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPartnerAccountAsync(array $args = [])
 * @method \Aws\Result getResourceEventConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResourceEventConfigurationAsync(array $args = [])
 * @method \Aws\Result getResourceLogLevel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResourceLogLevelAsync(array $args = [])
 * @method \Aws\Result getServiceEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getServiceEndpointAsync(array $args = [])
 * @method \Aws\Result getServiceProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getServiceProfileAsync(array $args = [])
 * @method \Aws\Result getWirelessDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getWirelessDeviceAsync(array $args = [])
 * @method \Aws\Result getWirelessDeviceStatistics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getWirelessDeviceStatisticsAsync(array $args = [])
 * @method \Aws\Result getWirelessGateway(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getWirelessGatewayAsync(array $args = [])
 * @method \Aws\Result getWirelessGatewayCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getWirelessGatewayCertificateAsync(array $args = [])
 * @method \Aws\Result getWirelessGatewayFirmwareInformation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getWirelessGatewayFirmwareInformationAsync(array $args = [])
 * @method \Aws\Result getWirelessGatewayStatistics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getWirelessGatewayStatisticsAsync(array $args = [])
 * @method \Aws\Result getWirelessGatewayTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getWirelessGatewayTaskAsync(array $args = [])
 * @method \Aws\Result getWirelessGatewayTaskDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getWirelessGatewayTaskDefinitionAsync(array $args = [])
 * @method \Aws\Result listDestinations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDestinationsAsync(array $args = [])
 * @method \Aws\Result listDeviceProfiles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDeviceProfilesAsync(array $args = [])
 * @method \Aws\Result listFuotaTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFuotaTasksAsync(array $args = [])
 * @method \Aws\Result listMulticastGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listMulticastGroupsAsync(array $args = [])
 * @method \Aws\Result listMulticastGroupsByFuotaTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listMulticastGroupsByFuotaTaskAsync(array $args = [])
 * @method \Aws\Result listPartnerAccounts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPartnerAccountsAsync(array $args = [])
 * @method \Aws\Result listQueuedMessages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listQueuedMessagesAsync(array $args = [])
 * @method \Aws\Result listServiceProfiles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listServiceProfilesAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result listWirelessDevices(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listWirelessDevicesAsync(array $args = [])
 * @method \Aws\Result listWirelessGatewayTaskDefinitions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listWirelessGatewayTaskDefinitionsAsync(array $args = [])
 * @method \Aws\Result listWirelessGateways(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listWirelessGatewaysAsync(array $args = [])
 * @method \Aws\Result putResourceLogLevel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putResourceLogLevelAsync(array $args = [])
 * @method \Aws\Result resetAllResourceLogLevels(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resetAllResourceLogLevelsAsync(array $args = [])
 * @method \Aws\Result resetResourceLogLevel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resetResourceLogLevelAsync(array $args = [])
 * @method \Aws\Result sendDataToMulticastGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendDataToMulticastGroupAsync(array $args = [])
 * @method \Aws\Result sendDataToWirelessDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendDataToWirelessDeviceAsync(array $args = [])
 * @method \Aws\Result startBulkAssociateWirelessDeviceWithMulticastGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startBulkAssociateWirelessDeviceWithMulticastGroupAsync(array $args = [])
 * @method \Aws\Result startBulkDisassociateWirelessDeviceFromMulticastGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startBulkDisassociateWirelessDeviceFromMulticastGroupAsync(array $args = [])
 * @method \Aws\Result startFuotaTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startFuotaTaskAsync(array $args = [])
 * @method \Aws\Result startMulticastGroupSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startMulticastGroupSessionAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result testWirelessDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise testWirelessDeviceAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateDestination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDestinationAsync(array $args = [])
 * @method \Aws\Result updateFuotaTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateFuotaTaskAsync(array $args = [])
 * @method \Aws\Result updateLogLevelsByResourceTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateLogLevelsByResourceTypesAsync(array $args = [])
 * @method \Aws\Result updateMulticastGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateMulticastGroupAsync(array $args = [])
 * @method \Aws\Result updateNetworkAnalyzerConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateNetworkAnalyzerConfigurationAsync(array $args = [])
 * @method \Aws\Result updatePartnerAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePartnerAccountAsync(array $args = [])
 * @method \Aws\Result updateResourceEventConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateResourceEventConfigurationAsync(array $args = [])
 * @method \Aws\Result updateWirelessDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateWirelessDeviceAsync(array $args = [])
 * @method \Aws\Result updateWirelessGateway(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateWirelessGatewayAsync(array $args = [])
 */
class IoTWirelessClient extends AwsClient {}
