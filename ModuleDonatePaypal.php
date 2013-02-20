<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  1up GmbH - David Greminger / Flavian Sierk
 * @author     David Greminger / Flavian Sierk
 * @package    donatepaypal
 * @license    LGPL
 * @filesource
 */

/**
 * Class ModuleDonatePaypal
 *
 * Front end module "donatepaypal".
 * @copyright  1up GmbH - David Greminger / Flavian Sierk
 * @author     David Greminger
 * @package    donatepaypal
 */
class ModuleDonatePaypal extends Module
{
    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'mod_donatepaypal';

    /**
     * Generates content element
     * @return mixed
     */
    public function generate()
    {
        return parent::generate();
    }

    /**
     * Parses the template
     * @return string
     */
    protected function compile()
    {

    }
}