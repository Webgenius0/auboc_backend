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

    //Business page

    const SectionOne = 'section_one';
    const SectionTwo = 'section_two';
    const SectionThree = 'section_three';
    const SectionFour = 'section_four';
    const SectionFive = 'section_five';

}
