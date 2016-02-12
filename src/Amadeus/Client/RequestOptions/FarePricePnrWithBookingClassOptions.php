<?php
/**
 * amadeus-ws-client
 *
 * Copyright 2015 Amadeus Benelux NV
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @package Amadeus
 * @license https://opensource.org/licenses/Apache-2.0 Apache 2.0
 */

namespace Amadeus\Client\RequestOptions;

/**
 * FarePricePnrWithBookingClassOptions
 *
 * @package Amadeus\Client\RequestOptions
 * @author dieter <dieter.devlieghere@benelux.amadeus.com>
 */
class FarePricePnrWithBookingClassOptions extends Base
{
    const OVERRIDE_NO_OPTION = 'NOP';
    const OVERRIDE_FAREBASIS = 'FBA';
    const OVERRIDE_FARETYPE_PUB = 'RP';
    const OVERRIDE_FARETYPE_NEG = 'RN';
    const OVERRIDE_FARETYPE_UNI = 'RU';
    const OVERRIDE_FARETYPE_CORPNR = 'RC';
    const OVERRIDE_FARETYPE_CORPUNI = 'RW';

    /**
     * List of override options. self::OVERRIDE_*
     *
     * If there are no override options specified, an option NOP
     * (no option) element will be added to the call.
     *
     * @var string[]
     */
    public $overrideOptions = [];

    /**
     * Specify the validating carrier
     *
     * @var string
     */
    public $validatingCarrier;

    /**
     * This option allows you to override the currency of the office.
     *
     * Corresponding cryptic: FXX/R,FC-USD
     *
     * @var string
     */
    public $currencyOverride;

    /**
     * @var Fare\PricePnrBcFareBasis[]
     */
    public $pricingsFareBasis = [];
}
