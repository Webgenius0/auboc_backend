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

    //! Service page
    const ServiceSectionOne     = 'service_section_one';
    const ServiceSectionTwo     = 'service_section_two';
    const ServiceSectionThree   = 'service_section_three';
    const ServiceSectionFour    = 'service_section_four';
    const ServiceSectionFive    = 'service_section_five';


    //!! Blog page
    const BlogSection           = 'blog_section';

    // const BlogSectionTwo        = 'blog_section_two';
    // const BlogSectionThree      = 'blog_section_three';
    // const BlogSectionFour       = 'blog_section_four';
    // const BlogSectionFive       = 'blog_section_five';


    //!! About page
    const AboutSection          = 'about_section';

}
