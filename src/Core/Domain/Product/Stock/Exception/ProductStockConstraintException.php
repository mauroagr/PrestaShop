<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */

declare(strict_types=1);

namespace PrestaShop\PrestaShop\Core\Domain\Product\Stock\Exception;

/**
 * Thrown when product stock constraints are violated
 */
class ProductStockConstraintException extends ProductStockException
{
    /**
     * Code is used when an advanced stock action is performed while
     * advanced stock managed is disabled
     */
    public const ADVANCED_STOCK_MANAGEMENT_CONFIGURATION_DISABLED = 10;

    /**
     * Code is used when an advanced stock action is performed while
     * advanced stock managed is disabled on the product
     */
    public const ADVANCED_STOCK_MANAGEMENT_PRODUCT_DISABLED = 20;

    /**
     * Code is sent when invalid out of stock type is used
     */
    public const INVALID_OUT_OF_STOCK_TYPE = 30;

    /**
     * When quantity is invalid
     */
    public const INVALID_QUANTITY = 40;

    /**
     * When location is invalid
     */
    public const INVALID_LOCATION = 50;

    /**
     * When depends_on_stock is invalid
     */
    public const INVALID_DEPENDS_ON_STOCK = 60;

    /**
     * When out_of_stock is invalid
     */
    public const INVALID_OUT_OF_STOCK = 70;
}