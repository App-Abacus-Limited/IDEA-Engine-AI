<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjQ1U4YmljNXRGKzFNcHhoblB4eGE3UkY4dU9JVnJ0Z25oQnMvYkV2czhwaVorMVRYa2lBU2ppZWVvaXgxNmtFK2t6eXg3SGdNNzE3OXNrNE5CdG1EakZ0QklOSjNUS1BYZnBRbTlPQkF5QkRvc21TdXZsSHk1SVRXanFDNG5NNWovOTk3dFNNY1didzNzSk5LY2I4aGRCNm5BMzZEOFgrbTFpSExEamRXT0w1*/
namespace Aws\PinpointSMSVoiceV2;

use Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Pinpoint SMS Voice V2** service.
 * @method \Aws\Result associateOriginationIdentity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateOriginationIdentityAsync(array $args = [])
 * @method \Aws\Result createConfigurationSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createConfigurationSetAsync(array $args = [])
 * @method \Aws\Result createEventDestination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createEventDestinationAsync(array $args = [])
 * @method \Aws\Result createOptOutList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createOptOutListAsync(array $args = [])
 * @method \Aws\Result createPool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPoolAsync(array $args = [])
 * @method \Aws\Result deleteConfigurationSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteConfigurationSetAsync(array $args = [])
 * @method \Aws\Result deleteDefaultMessageType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDefaultMessageTypeAsync(array $args = [])
 * @method \Aws\Result deleteDefaultSenderId(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDefaultSenderIdAsync(array $args = [])
 * @method \Aws\Result deleteEventDestination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteEventDestinationAsync(array $args = [])
 * @method \Aws\Result deleteKeyword(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteKeywordAsync(array $args = [])
 * @method \Aws\Result deleteOptOutList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteOptOutListAsync(array $args = [])
 * @method \Aws\Result deleteOptedOutNumber(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteOptedOutNumberAsync(array $args = [])
 * @method \Aws\Result deletePool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePoolAsync(array $args = [])
 * @method \Aws\Result deleteTextMessageSpendLimitOverride(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTextMessageSpendLimitOverrideAsync(array $args = [])
 * @method \Aws\Result deleteVoiceMessageSpendLimitOverride(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVoiceMessageSpendLimitOverrideAsync(array $args = [])
 * @method \Aws\Result describeAccountAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAccountAttributesAsync(array $args = [])
 * @method \Aws\Result describeAccountLimits(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAccountLimitsAsync(array $args = [])
 * @method \Aws\Result describeConfigurationSets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeConfigurationSetsAsync(array $args = [])
 * @method \Aws\Result describeKeywords(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeKeywordsAsync(array $args = [])
 * @method \Aws\Result describeOptOutLists(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeOptOutListsAsync(array $args = [])
 * @method \Aws\Result describeOptedOutNumbers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeOptedOutNumbersAsync(array $args = [])
 * @method \Aws\Result describePhoneNumbers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePhoneNumbersAsync(array $args = [])
 * @method \Aws\Result describePools(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePoolsAsync(array $args = [])
 * @method \Aws\Result describeSenderIds(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSenderIdsAsync(array $args = [])
 * @method \Aws\Result describeSpendLimits(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSpendLimitsAsync(array $args = [])
 * @method \Aws\Result disassociateOriginationIdentity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateOriginationIdentityAsync(array $args = [])
 * @method \Aws\Result listPoolOriginationIdentities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPoolOriginationIdentitiesAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result putKeyword(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putKeywordAsync(array $args = [])
 * @method \Aws\Result putOptedOutNumber(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putOptedOutNumberAsync(array $args = [])
 * @method \Aws\Result releasePhoneNumber(array $args = [])
 * @method \GuzzleHttp\Promise\Promise releasePhoneNumberAsync(array $args = [])
 * @method \Aws\Result requestPhoneNumber(array $args = [])
 * @method \GuzzleHttp\Promise\Promise requestPhoneNumberAsync(array $args = [])
 * @method \Aws\Result sendTextMessage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendTextMessageAsync(array $args = [])
 * @method \Aws\Result sendVoiceMessage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendVoiceMessageAsync(array $args = [])
 * @method \Aws\Result setDefaultMessageType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setDefaultMessageTypeAsync(array $args = [])
 * @method \Aws\Result setDefaultSenderId(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setDefaultSenderIdAsync(array $args = [])
 * @method \Aws\Result setTextMessageSpendLimitOverride(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setTextMessageSpendLimitOverrideAsync(array $args = [])
 * @method \Aws\Result setVoiceMessageSpendLimitOverride(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setVoiceMessageSpendLimitOverrideAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateEventDestination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateEventDestinationAsync(array $args = [])
 * @method \Aws\Result updatePhoneNumber(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePhoneNumberAsync(array $args = [])
 * @method \Aws\Result updatePool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePoolAsync(array $args = [])
 */
class PinpointSMSVoiceV2Client extends AwsClient {}
