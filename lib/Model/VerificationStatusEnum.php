<?php
/**
 * VerificationStatusEnum
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Domdistrict Shop API
 *
 * BUILD TIME: 2022-09-08 12:31:24  ENVIRONMENT: Staging (//config/appsettings-stg.json)
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.1.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * VerificationStatusEnum Class Doc Comment
 *
 * @category Class
 * @description Verification statuses.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class VerificationStatusEnum
{
    /**
     * Possible values of this enum
     */
    public const CODE_NOT_SENT = 'CodeNotSent';

    public const CODE_SENT = 'CodeSent';

    public const ERROR = 'Error';

    public const COMPLETE = 'Complete';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CODE_NOT_SENT,
            self::CODE_SENT,
            self::ERROR,
            self::COMPLETE
        ];
    }
}


