<?php

namespace App\View\Composers;
use Roots\Acorn\View\Composer;

use Log1x\Navi\Facades\Navi;

class Header extends Composer
{
    protected static $views = [
        'partials.header',
    ];

    public function with()
    {
        return [
            'navi' => $this->navi('primary'),
            'report' => get_field('report', 'options'),
            'report_icon' => get_field('report icon', 'options'),
            'social' => get_field('social', 'options'),
            'twit' => get_field('twitter hashtag', 'options'),
            'header_text' => get_field('header text', 'options'),
            'header_icon' => get_field('header icon', 'options'),
        ];
    }

    public function navi($menu) {
      if (Navi::build()->isEmpty()) {
          return;
      }
      
      return Navi::build($menu)->toArray();
    }

}