@extends('frontend.app')

@section('title','Zally-event-details-flip')

@section('content')
    <!-- section 1 -->
    <section class="smooth--section">
        <div class="container event-details-page-container">
            <div class="event-details-page-contents-container">
                <!-- tittle -->
                <div class="event-details-page-title text-white">FLIP 2.0</div>
                <!-- -events image -->
                <div class="event-page-image-section">
                    <img src="{{asset('frontend/images/event-details-1.png')}}" alt="" srcset="">
                    <div class="event-page-image-btns">
                        <div class="event-page-date-time">
                            <span class="event-time-line text-dark bg-white">12 Sep 2024</span>
                            <span class="event-type text-dark bg-white">flip</span>
                        </div>
                    </div>
                </div>
                <!-- -events details page tab btns -->
                <div class="sl-blog-tab-btn-wrapper">
                    <div class="bi-tab-btns-container">
                        <button class="bi-common-tab-btn text-white active">overview</button>
                        <button class="bi-common-tab-btn text-white">sponsors</button>
                        <button class="bi-common-tab-btn text-white">speakers and panel</button>
                    </div>
                </div>
                <!-- counters  -->
                <div class="event-page-counter-container">
                    <!-- counter 1 -->
                    <div class="event-counter-box">
                        <div class="counter-number">300+</div>
                        <div class="counter-text">founders</div>
                    </div>

                    <!-- counter 2 -->
                    <div class="event-counter-box">
                        <div class="counter-number">11</div>
                        <div class="counter-text">investors</div>
                    </div>
                    <!-- counter 3 -->
                    <div class="event-counter-box">
                        <div class="counter-number">2</div>
                        <div class="counter-text">charities</div>
                    </div>


                </div>
                <!-- tab contents -->
                <div class="event-page-tab-content-container">

                    <div class="event-common-tab text-white active">
                        https://www.flipoff.co.uk/flip-1-0  The technology industry is growing year-on-year. Understanding the impact of AI and new developments on the industry is key for businesses to stay competitive and increase efficiency. Patrick Smith, our founder and CEO, joined a panel at the "Digital Leadership Report" event hosted by Harvey Nash. He was joined by Nick Woods -CIO of MAG (Airports Group), and Christopher Williamson - Technology Director of N Brown Group. Together, they discussed issues in cybersecurity, artificial intelligence, and business transformation.

                        Here are the key takeaways:

                        Intellectual Property Issues:

                        There is uncertainty around IP ownership when engineers use generative AI to create code.
                        Clear legal guidelines are needed to determine who owns the rights to IP generated with AI tools.
                        Business Transformation:

                        Companies are undergoing transformations to boost revenue while adapting to new technologies.
                        M Brown, a retailer, has returned to profitability by improving margins and focusing on financial services, despite a drop in sales.
                        Investments in new platforms and solutions are expected to bring long-term benefits.
                        AI and Operational Efficiency:

                        AI is being utilised to enhance operational efficiency, especially in infrastructure-heavy industries like aviation.
                        For instance, AI is used for precise planning at airports, potentially leading to significant revenue increases.
                        Revenue Generation Focus:

                        Increasing revenue is a top priority, influencing the projects and decisions of companies.
                        There is a focus on aligning technology initiatives with business goals to drive financial performance.
                        Leadership and Board Insights:

                        Boards are concentrating on risk, cost, revenue, and sustainability.
                        Technology is seen as a key enabler for achieving strategic goals, including reducing carbon footprints in industries like aviation, where sustainability is a key topic.
                        AI Adoption in Organisations:

                        Effective AI use depends on how data is utilised, not just its volume.
                        Smaller organisations can compete by being agile and focusing on data quality and application.
                        AI excellence requires robust data governance, and early adoption can provide a competitive advantage.
                        Skill Development and Education:

                        Continuous education and skill development in AI are crucial for all staff, not just technical teams.
                        Business transformation programs should incorporate AI as a tool, integrating it into broader strategic initiatives.
                        Gender Diversity in Tech:

                        There are ongoing challenges in increasing female representation in tech roles, particularly in deep tech areas like cybersecurity and AI.
                        Leadership must create supportive environments and actively encourage women to apply for tech positions.
                        Hybrid Work Models:

                        Hybrid working models are recognised as beneficial for work-life balance and productivity.
                        Organisations are focusing on creating office environments that employees want to return to, rather than mandating office presence.
                        The insights shared underscored the importance of strategic technology adoption. From enhancing cybersecurity measures to leveraging AI and driving business transformation, the discussion highlighted actionable steps for businesses to stay competitive in the digital age. By embracing these strategies, organisations can effectively navigate the challenges and opportunities presented by the ever-evolving digital landscape.

                        Thank you to Harvey Nash for having us on the panel.
                    </div>

                    <div class="event-common-tab text-white ">
                        https://www.flipoff.co.uk/flip-1-0  The technology industry is growing year-on-year. Understanding the impact of AI and new developments on the industry is key for businesses to stay competitive and increase efficiency. Patrick Smith, our founder and CEO, joined a panel at the "Digital Leadership Report" event hosted by Harvey Nash. He was joined by Nick Woods -CIO of MAG (Airports Group), and Christopher Williamson - Technology Director of N Brown Group. Together, they discussed issues in cybersecurity, artificial intelligence, and business transformation.

                        Here are the key takeaways:

                        Intellectual Property Issues:

                        There is uncertainty around IP ownership when engineers use generative AI to create code.
                        Clear legal guidelines are needed to determine who owns the rights to IP generated with AI tools.
                        Business Transformation:

                        Companies are undergoing transformations to boost revenue while adapting to new technologies.
                        M Brown, a retailer, has returned to profitability by improving margins and focusing on financial services, despite a drop in sales.
                        Investments in new platforms and solutions are expected to bring long-term benefits.
                        AI and Operational Efficiency:

                        AI is being utilised to enhance operational efficiency, especially in infrastructure-heavy industries like aviation.
                        For instance, AI is used for precise planning at airports, potentially leading to significant revenue increases.
                        Revenue Generation Focus:

                        Increasing revenue is a top priority, influencing the projects and decisions of companies.
                        There is a focus on aligning technology initiatives with business goals to drive financial performance.
                        Leadership and Board Insights:

                        Boards are concentrating on risk, cost, revenue, and sustainability.
                        Technology is seen as a key enabler for achieving strategic goals, including reducing carbon footprints in industries like aviation, where sustainability is a key topic.
                        AI Adoption in Organisations:

                        Effective AI use depends on how data is utilised, not just its volume.
                        Smaller organisations can compete by being agile and focusing on data quality and application.
                        AI excellence requires robust data governance, and early adoption can provide a competitive advantage.
                        Skill Development and Education:

                        Continuous education and skill development in AI are crucial for all staff, not just technical teams.
                        Business transformation programs should incorporate AI as a tool, integrating it into broader strategic initiatives.
                        Gender Diversity in Tech:

                        There are ongoing challenges in increasing female representation in tech roles, particularly in deep tech areas like cybersecurity and AI.
                        Leadership must create supportive environments and actively encourage women to apply for tech positions.
                        Hybrid Work Models:

                        Hybrid working models are recognised as beneficial for work-life balance and productivity.
                        Organisations are focusing on creating office environments that employees want to return to, rather than mandating office presence.
                        The insights shared underscored the importance of strategic technology adoption. From enhancing cybersecurity measures to leveraging AI and driving business transformation, the discussion highlighted actionable steps for businesses to stay competitive in the digital age. By embracing these strategies, organisations can effectively navigate the challenges and opportunities presented by the ever-evolving digital landscape.

                        Thank you to Harvey Nash for having us on the panel.
                    </div>

                    <div class="event-common-tab text-white ">
                        https://www.flipoff.co.uk/flip-1-0  The technology industry is growing year-on-year. Understanding the impact of AI and new developments on the industry is key for businesses to stay competitive and increase efficiency. Patrick Smith, our founder and CEO, joined a panel at the "Digital Leadership Report" event hosted by Harvey Nash. He was joined by Nick Woods -CIO of MAG (Airports Group), and Christopher Williamson - Technology Director of N Brown Group. Together, they discussed issues in cybersecurity, artificial intelligence, and business transformation.

                        Here are the key takeaways:

                        Intellectual Property Issues:

                        There is uncertainty around IP ownership when engineers use generative AI to create code.
                        Clear legal guidelines are needed to determine who owns the rights to IP generated with AI tools.
                        Business Transformation:

                        Companies are undergoing transformations to boost revenue while adapting to new technologies.
                        M Brown, a retailer, has returned to profitability by improving margins and focusing on financial services, despite a drop in sales.
                        Investments in new platforms and solutions are expected to bring long-term benefits.
                        AI and Operational Efficiency:

                        AI is being utilised to enhance operational efficiency, especially in infrastructure-heavy industries like aviation.
                        For instance, AI is used for precise planning at airports, potentially leading to significant revenue increases.
                        Revenue Generation Focus:

                        Increasing revenue is a top priority, influencing the projects and decisions of companies.
                        There is a focus on aligning technology initiatives with business goals to drive financial performance.
                        Leadership and Board Insights:

                        Boards are concentrating on risk, cost, revenue, and sustainability.
                        Technology is seen as a key enabler for achieving strategic goals, including reducing carbon footprints in industries like aviation, where sustainability is a key topic.
                        AI Adoption in Organisations:

                        Effective AI use depends on how data is utilised, not just its volume.
                        Smaller organisations can compete by being agile and focusing on data quality and application.
                        AI excellence requires robust data governance, and early adoption can provide a competitive advantage.
                        Skill Development and Education:

                        Continuous education and skill development in AI are crucial for all staff, not just technical teams.
                        Business transformation programs should incorporate AI as a tool, integrating it into broader strategic initiatives.
                        Gender Diversity in Tech:

                        There are ongoing challenges in increasing female representation in tech roles, particularly in deep tech areas like cybersecurity and AI.
                        Leadership must create supportive environments and actively encourage women to apply for tech positions.
                        Hybrid Work Models:

                        Hybrid working models are recognised as beneficial for work-life balance and productivity.
                        Organisations are focusing on creating office environments that employees want to return to, rather than mandating office presence.
                        The insights shared underscored the importance of strategic technology adoption. From enhancing cybersecurity measures to leveraging AI and driving business transformation, the discussion highlighted actionable steps for businesses to stay competitive in the digital age. By embracing these strategies, organisations can effectively navigate the challenges and opportunities presented by the ever-evolving digital landscape.

                        Thank you to Harvey Nash for having us on the panel.
                    </div>


                </div>


            </div>
        </div>
    </section>
    <!-- section 1 -->
@endsection
