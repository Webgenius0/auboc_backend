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
    const HomeSection = 'home_section';

    //! Service page
    const ServiceSectionOne = 'service_section_one';
    const ServiceSectionTwo = 'service_section_two';
    const ServiceSectionThree = 'service_section_three';
    const ServiceSectionFour = 'service_section_four';
    const ServiceSectionFive = 'service_section_five';


    //Business page

    const SectionOne = 'section_one';
    const SectionTwo = 'section_two';
    const SectionThree = 'section_three';
    const SectionFour = 'section_four';
    const SectionFive = 'section_five';

}
