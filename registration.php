<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
use Magento\Framework\Component\ComponentRegistrar;

//require "./vendor/autoload.php";
require __DIR__ . "/vendor/autoload.php";

ComponentRegistrar::register(ComponentRegistrar::MODULE, 'Genaker_Laragento', __DIR__);

