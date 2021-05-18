<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use Log1x\Navi\Facades\Navi;

class Footer extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.footer',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'report_title' => get_field('report title', 'options'),
            'report_pre' => get_field('report pretitle', 'options'),
            'report_img' => get_field('report text', 'options'),
            'report' => get_field('report', 'options'),
            'foot_about' => get_field('about', 'options'),
            'foot_comp' => get_field('companies', 'options')
        ];
    }

    public function navigation($name)
    {
        if (Navi::build()->isEmpty()) {
            return;
        }
        
        return Navi::build($name)->toArray();
    }

}
