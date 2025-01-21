<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class Page extends Enum
{
    const HomePage = 'home_page';

    const BusinessPage = 'business_page';
    const BusinessFormPage = 'business_form_page';

    const HumanPage = 'human_page';

    const HumanFormPage = 'human_form_page';

    const GetTheAppPage = 'get_the_app_page';

    const WhyZallyPage = 'why_zally_page';

    const HowItWorksBusinessPage = 'how_it_works_business_page';
}
