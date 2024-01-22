<?php

/**
 * KeyIdentifier
 *
 * PHP version 5
 *
 * @category  File
 * @package   ASN1
 * @author    Jim Wigginton <terrafrost@php.net>
 * @copyright 2016 Jim Wigginton
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      http://phpseclib.sourceforge.net
 */
namespace FSP\phpseclib3\File\ASN1\Maps;

use FSP\phpseclib3\File\ASN1;
/**
 * KeyIdentifier
 *
 * @package ASN1
 * @author  Jim Wigginton <terrafrost@php.net>
 * @access  public
 */
abstract class KeyIdentifier
{
    const MAP = ['type' => ASN1::TYPE_OCTET_STRING];
}
