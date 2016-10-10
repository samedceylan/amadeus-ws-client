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

namespace Amadeus\Client\RequestCreator;

use Amadeus\Client\RequestOptions\FareCheckRulesOptions;
use Amadeus\Client\RequestOptions\FareConvertCurrencyOptions;
use Amadeus\Client\RequestOptions\FareInformativeBestPricingWithoutPnrOptions;
use Amadeus\Client\RequestOptions\FareInformativePricingWithoutPnrOptions;
use Amadeus\Client\RequestOptions\FareMasterPricerCalendarOptions;
use Amadeus\Client\RequestOptions\FareMasterPricerTbSearch;
use Amadeus\Client\RequestOptions\FarePricePnrWithBookingClassOptions;
use Amadeus\Client\Struct;

/**
 * Fare Request Creator
 *
 * Responsible for creating all "Fare_" messages
 *
 * methods for creation must have the correct name
 * 'create'<message name without underscores>
 *
 * @package Amadeus\Client\RequestCreator
 * @author Dieter Devlieghere <dieter.devlieghere@benelux.amadeus.com>
 */
class Fare
{
    /**
     * createFareMasterPricerTravelBoardSearch
     *
     * @param FareMasterPricerTbSearch $params
     * @return Struct\Fare\MasterPricerTravelBoardSearch
     */
    public function createFareMasterPricerTravelBoardSearch(FareMasterPricerTbSearch $params)
    {
        return new Struct\Fare\MasterPricerTravelBoardSearch($params);
    }

    /**
     * createFareMasterPricerCalendar
     *
     * @param FareMasterPricerCalendarOptions $params
     * @return Struct\Fare\MasterPricerCalendar
     */
    public function createFareMasterPricerCalendar(FareMasterPricerCalendarOptions $params)
    {
        return new Struct\Fare\MasterPricerCalendar($params);
    }


    /**
     * createFareCheckRules
     *
     * @param FareCheckRulesOptions $params
     * @return Struct\Fare\CheckRules
     */
    public function createFareCheckRules(FareCheckRulesOptions $params)
    {
        return new Struct\Fare\CheckRules($params);
    }

    /**
     * createFareConvertCurrency
     *
     * @param FareConvertCurrencyOptions $params
     * @return Struct\Fare\ConvertCurrency
     */
    public function createFareConvertCurrency(FareConvertCurrencyOptions $params)
    {
        return new Struct\Fare\ConvertCurrency($params);
    }

    /**
     * makeFarePricePnrWithBookingClass
     *
     * @param FarePricePnrWithBookingClassOptions $params
     * @param string $version
     * @return Struct\Fare\PricePNRWithBookingClass12|Struct\Fare\PricePNRWithBookingClass13
     */
    public function createFarePricePnrWithBookingClass(FarePricePnrWithBookingClassOptions $params, $version)
    {
        if ($version < 13) {
            return new Struct\Fare\PricePNRWithBookingClass12($params);
        } else {
            return new Struct\Fare\PricePNRWithBookingClass13($params);
        }
    }

    /**
     * createFareInformativePricingWithoutPNR
     *
     * @param FareInformativePricingWithoutPnrOptions $params
     * @param string $version
     * @return Struct\Fare\InformativePricingWithoutPNR12|Struct\Fare\InformativePricingWithoutPNR13
     */
    public function createFareInformativePricingWithoutPNR(FareInformativePricingWithoutPnrOptions $params, $version)
    {
        if ($version < 13) {
            return new Struct\Fare\InformativePricingWithoutPNR12($params);
        } else {
            return new Struct\Fare\InformativePricingWithoutPNR13($params);
        }
    }

    /**
     * createFareInformativeBestPricingWithoutPNR
     *
     * @param FareInformativeBestPricingWithoutPnrOptions $params
     * @param string $version
     * @return Struct\Fare\InformativeBestPricingWithoutPNR12|Struct\Fare\InformativeBestPricingWithoutPNR13
     */
    public function createFareInformativeBestPricingWithoutPNR(
        FareInformativeBestPricingWithoutPnrOptions $params,
        $version
    ) {
        if ($version < 13) {
            return new Struct\Fare\InformativeBestPricingWithoutPNR12($params);
        } else {
            return new Struct\Fare\InformativeBestPricingWithoutPNR13($params);
        }
    }
}
