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
 * @author Missional Digerati <admin@missionaldigerati.org>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 */
/**
 * A picon icon picker for content
 *
 * @author Missional Digerati <admin@missionaldigerati.org>
 */
namespace Bolt\Extension\MissionalDigerati\BoltPiconSelector;

use Bolt\Asset\File\JavaScript;
use Bolt\Asset\File\Stylesheet;
use Bolt\Controller\Zone;
use Bolt\Extension\SimpleExtension;

class BoltPiconSelectorExtension extends SimpleExtension
{

    /**
     * Register our new field
     *
     * @return array an array of new fields.
     */
    public function registerFields()
    {
        return [
            new Field\PiconSelectorField(),
        ];
    }

    /**
     * Register our assets.
     *
     * @return array    An array of assets
     */
    public function registerAssets()
    {
        $config = $this->getConfig();
        if ((!array_key_exists('picon', $config)) ||
            (!array_key_exists('css_directory', $config['picon'])) ||
            ($config['picon']['css_directory'] === '')
        ) {
            throw new \Exception("You are missing the picon css directory in the config file.");
        }
        return [
            new Stylesheet::create($config['picon']['css_directory'])->setZone(Zone::BACKEND),
            new Stylesheet::create('bolt_picon_selector.css')->setZone(Zone::BACKEND),
            new JavaScript::create('jquery.bolt_picon_selector.js')->setZone(Zone::BACKEND),
        ];
    }
}
