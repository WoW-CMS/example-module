<?php
/**
 * BlizzCMS
 *
 * @author WoW-CMS
 * @copyright Copyright (c) 2019 - 2022, WoW-CMS (https://wow-cms.com)
 * @license https://opensource.org/licenses/MIT MIT License
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Example extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();

        mod_located('example', true);

    }

    public function index()
    {
        $this->template->build('index');
    }
}
