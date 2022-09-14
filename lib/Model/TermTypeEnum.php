<?php
/**
 * TermTypeEnum
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
 * TermTypeEnum Class Doc Comment
 *
 * @category Class
 * @description Defines product term type.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TermTypeEnum
{
    /**
     * Possible values of this enum
     */
    public const PURCHASE = 'Purchase';

    public const SUBSCRIBE = 'Subscribe';

    public const PAYMENT_PLAN = 'PaymentPlan';

    public const REBATE = 'Rebate';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PURCHASE,
            self::SUBSCRIBE,
            self::PAYMENT_PLAN,
            self::REBATE
        ];
    }
}


