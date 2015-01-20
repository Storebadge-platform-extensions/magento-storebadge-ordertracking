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

class Storebadge_OrderTracking_Block_Checkout_Onepage_Success
    extends Mage_Checkout_Block_Onepage_Success
{
    /**
     * Check if Order Tracking is Enabled
     *
     * @return boolean
     */
    public function isOrderTrackingEnabled()
    {
        $enabled =
            Mage::getsingleton('storebadge_ordertracking/config')->isEnabled();
        return $enabled;
    }

    /**
     * Retrieve Order
     *
     * @return Mage_Sales_Model_Order
     */
    public function getOrder()
    {
        $orderId = $this->getOrderId();
        $order = Mage::getSingleton('sales/order')->loadByIncrementId($orderId);
        return $order;
    }

    /**
     * Generate and return order secret
     *
     * @param Mage_Sales_Model_Order $order
     * @return string
     */
    public function getOrderSecret($order)
    {
        $email = $order->getCustomerEmail();
        $orderId = $order->getRealOrderId();
        $storeSecret = $this->getSBSecret();
        return md5($email . $orderId . $storeSecret);
    }

    /**
     * Get Storebadge Store Name
     *
     * @return string
     */
    public function getSBStoreName()
    {
        $storeName =
            Mage::getsingleton('storebadge_ordertracking/config')->getStore();
        return $storeName;
    }

    /**
     * Get Storebadge Secret
     *
     * @return string
     */
    public function getSBSecret()
    {
        $secret =
            Mage::getsingleton('storebadge_ordertracking/config')->getSecret();
        return $secret;
    }

}
