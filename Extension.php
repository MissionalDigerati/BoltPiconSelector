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

use Bolt\Application;
use Bolt\BaseExtension;

/**
 * Since this is not in the marketplace, we need to add the include_once.  So not PSR-4 friendly.  As per issue at
 * https://github.com/bolt/bolt/issues/1986
 **/
include_once 'PiconSelectorField.php';

/**
 * Bolt Picon Selector is an Extension for the Bolt CMS (@link http://bolt.cm)
 *
 * @package default
 * @author Johnathan Pulos
 **/
class Extension extends BaseExtension
{

    /**
     * Construct the class
     *
     * @param Application $app The application being loaded
     * @return void
     * @author 
     **/
    public function __construct(Application $app)
    {
        parent::__construct($app);
        $this->app['config']->getFields()->addField(new PiconSelectorField());
        if ($this->app['config']->getWhichEnd() == 'backend') {
            $this->app['htmlsnippets'] = true;
            $this->app['twig.loader.filesystem']->prependPath(__DIR__ . '/views');
        }
    }

    /**
     * Get the name of the extension/
     *
     * @return string
     * @author Johnathan Pulos
     **/
    public function getName()
    {
        return "Bolt Picon Selector [Custom Field]";
    }

    /**
     * Initialize the class
     *
     * @return void
     * @access public
     * @author Johnathan Pulos
     **/
    public function initialize()
    {
        if ($this->app['config']->getWhichEnd() == 'backend') {
            $this->addJquery();
            $this->addCss('assets/picons.css', true);
            $this->addCss('assets/bolt_picon_selector.css', true);
            $this->addJavascript('assets/jquery.bolt_picon_selector.js', true);
        }
    }

}
