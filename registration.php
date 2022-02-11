<?php
/**
 * Bhaveshpp 
 *
 * This code is developed by Bhavesh Prajapati
 *
 * Do not edit or add to this file, a composer will
 * revert changes while upgrading.
 * 
 * if you need new features or found any bug
 * you can suggest us here.
 * https://github.com/bhaveshpp/magento2-module-base/issues
 *
 * @category Magento2
 * @package  Bhaveshpp_Base
 * @author Bhavesh Prajapati <bhaveshp.magento@gmail.com>
 * @license  https://bhaveshpp.github.io/LICENSE.txt
 */
use Magento\Framework\Component\ComponentRegistrar;
ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'Bhaveshpp_Base',
    __DIR__
);