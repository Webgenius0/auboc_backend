<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class Section extends Enum
{
    //Home-page
    const HomeSection           = 'home_section';
    const ServiceSection    = 'service_section';
    const BlogSection           = 'blog_section';
    const AboutSection          = 'about_section';

}
