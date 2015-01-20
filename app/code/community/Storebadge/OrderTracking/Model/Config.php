<?php
/**
 * Storebadge_OrderTracking
 *
 * Copyright (C) 2014 Advice Online Europe AB
 *
 * This file is part of Storebadge_OrderTracking.
 *
 * Storebadge_OrderTracking is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Storebadge_OrderTracking is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with Storebadge_OrderTracking. If not, see <http://www.gnu.org/licenses/>.
 *
 * @category  Storebadge
 * @package   Storebadge_OrderTracking
 * @author    Daniel Bergstrom <danjulf@gmail.com>
 * @copyright 2014 Advice Online Europe AB
 * @license   http://www.gnu.org/licenses/lgpl.html GNU LGPL
 */

class Storebadge_OrderTracking_Model_Config
{

    const STOREBADGE_ENABLED    = 'storebadge/ordertracking/enabled';
    const STOREBADGE_STORE      = 'storebadge/ordertracking/store';
    const STOREBADGE_SECRET     = 'storebadge/ordertracking/secret';

    /**
     * Is Order Tracking Enabled
     *
     * @return boolean
     */
    public function isEnabled()
    {
        return Mage::getStoreConfig(self::STOREBADGE_ENABLED);
    }

    /**
     * Retrieve Store from Config
     *
     * @return string
     */
    public function getStore()
    {
        return Mage::getStoreConfig(self::STOREBADGE_STORE);
    }

    /**
     * Retrieve Secret from config
     *
     * @return string
     */
    public function getSecret()
    {
        return Mage::getStoreConfig(self::STOREBADGE_SECRET);
    }

}
