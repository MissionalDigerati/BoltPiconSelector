<?php
/**
 * This file is part of BoltPiconSelector Bolt CMS Extension.
 * 
 * BoltPiconSelector Bolt CMS Extension is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * BoltPiconSelector Bolt CMS Extension is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see 
 * <http://www.gnu.org/licenses/>.
 *
 * @author Johnathan Pulos <johnathan@missionaldigerati.org>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * 
 */

namespace Bolt\Extension\MissionalDigerati\BoltPiconSelector;

use Bolt\Field\FieldInterface;

class PiconSelectorField implements FieldInterface
{

  /**
   * Get the name of the field
   *
   * @return string the field name
   * @author Johnathan Pulos <johnathan@missionaldigerati.org>
   **/
  public function getName()
  {
    return 'picon_selector';
  }

  /**
   * Get the template to load for the field
   *
   * @return string the template name
   * @author Johnathan Pulos <johnathan@missionaldigerati.org>
   **/
  public function getTemplate()
  {
    return '_picon_selector.twig';
  }

  /**
   * Get the type of column you want to store this field as
   *
   * @return string The type of field
   * @author Johnathan Pulos <johnathan@missionaldigerati.org>
   **/
  public function getStorageType()
  {
    return 'text';
  }

  /**
   * Get any storage options for the field
   *
   * @return array An array of options
   * @author Johnathan Pulos <johnathan@missionaldigerati.org>
   **/
  public function getStorageOptions()
  {
    return array('default'  =>  '');
  }

}
