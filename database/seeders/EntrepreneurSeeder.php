<?php

namespace Database\Seeders;

use App\Models\Entrepreneur;
use Illuminate\Database\Seeder;

class EntrepreneurSeeder extends Seeder
{
    public function run(): void
    {
        $entrepreneurs = [
            [
                'name' => 'Sarah Johnson',
                'email' => 'sarah@ecotechsolutions.com',
                'phone' => '+1 617 555 0123',
                'business_name' => 'EcoTech Solutions',
                'business_description' => 'Creating sustainable technology solutions that amplify community resilience in urban environments. We specialize in smart city infrastructure, renewable energy systems, and waste management technologies.',
                'business_preview' => 'Creating sustainable technology solutions that amplify community resilience in urban environments...',
                'industry' => 'Environmental Technology',
                'location' => 'Boston, Massachusetts',
                'business_address' => '123 Innovation Drive, Boston, MA 02101',
                'business_phone' => '+1 617 555 0123',
                'business_email' => 'info@ecotechsolutions.com',
                'business_hours' => 'Mon - Fri: 8:00 AM - 6:00 PM',
                'website' => 'https://ecotechsolutions.com',
                'social_media' => [
                    'linkedin' => 'https://linkedin.com/company/ecotechsolutions',
                    'twitter' => 'https://twitter.com/ecotechsolutions',
                    'facebook' => 'https://facebook.com/ecotechsolutions'
                ],
                'profile_image' => 'assets/img/user/profile1.JPG',
                'business_logo' => 'assets/icons/digital.png',
                'bio' => 'Environmental engineer and sustainability advocate with 10+ years of experience.',
                'overview' => 'Sarah Johnson is a visionary entrepreneur dedicated to creating sustainable technology solutions that amplify community resilience in urban environments. With over 10 years of experience in environmental engineering and business development, she founded EcoTech Solutions to collaborate with communities in addressing the growing challenges of urbanization and climate change. Her company specializes in smart city infrastructure, renewable energy systems, and waste management technologies that support cities in reducing their environmental footprint while enhancing quality of life for residents. Sarah holds a Master\'s degree in Environmental Engineering from MIT and has been recognized as one of the top 40 under 40 sustainability leaders by Green Business Magazine.',
                'role' => 'Founder & CEO',
                'founded_year' => 2019,
                'business_size' => '25-50 employees',
                'skills' => ['Environmental Engineering', 'Business Development', 'Sustainability', 'Smart Cities'],
                'achievements' => [
                    'Top 40 under 40 sustainability leaders - Green Business Magazine',
                    'MIT Environmental Engineering Masters',
                    'Led 50+ smart city projects'
                ],
                'milestones' => [
                    ['date' => '2023-07', 'description' => 'Secured $5M Series A funding'],
                    ['date' => '2022-03', 'description' => 'Launched smart waste management platform'],
                    ['date' => '2019-05', 'description' => 'Founded EcoTech Solutions']
                ],
                'partners' => ['MIT Technology Lab', 'Boston Smart City Initiative', 'Green Energy Consortium'],
                'value_proposition' => 'Transforming cities into sustainable, resilient communities through innovative technology solutions.',
                'five_year_plan' => 'Expand to 50 cities globally and become the leading provider of integrated smart city solutions.',
                'latitude' => 42.3601,
                'longitude' => -71.0589,
                'status' => 'approved',
                'featured' => true,
                'joined_date' => '2019-05-15'
            ],
            [
                'name' => 'Marcus Chen',
                'email' => 'marcus@aihealthcarelabs.com',
                'phone' => '+1 415 555 0124',
                'business_name' => 'AI Healthcare Labs',
                'business_description' => 'Transforming healthcare through artificial intelligence and machine learning to support communities with advanced diagnostic tools and personalized treatment platforms.',
                'business_preview' => 'Transforming healthcare through artificial intelligence and machine learning to support communities...',
                'industry' => 'AI Healthcare',
                'location' => 'San Francisco, California',
                'business_address' => '456 Tech Valley Blvd, San Francisco, CA 94105',
                'business_phone' => '+1 415 555 0124',
                'business_email' => 'info@aihealthcarelabs.com',
                'business_hours' => 'Mon - Fri: 9:00 AM - 7:00 PM',
                'website' => 'https://aihealthcarelabs.com',
                'social_media' => [
                    'linkedin' => 'https://linkedin.com/company/aihealthcarelabs',
                    'twitter' => 'https://twitter.com/aihealthlabs'
                ],
                'profile_image' => 'assets/img/user/profile2.jpg',
                'business_logo' => 'assets/icons/data-analysis.png',
                'bio' => 'AI researcher and healthcare innovator with PhD in Computer Science from Stanford.',
                'overview' => 'Marcus Chen is at the forefront of healthcare innovation, combining his expertise in artificial intelligence with deep medical knowledge to create breakthrough solutions. As founder and CEO of AI Healthcare Labs, he leads a team of world-class researchers and engineers developing AI-powered diagnostic tools, personalized treatment platforms, and predictive healthcare analytics. Marcus previously worked as a machine learning engineer at Google Health and holds a PhD in Computer Science from Stanford University. His work has been published in over 50 peer-reviewed journals, and his company\'s technology is currently being used in hospitals across 15 countries to improve patient outcomes and reduce healthcare costs.',
                'role' => 'Founder & CEO',
                'founded_year' => 2020,
                'business_size' => '50-100 employees',
                'skills' => ['Artificial Intelligence', 'Machine Learning', 'Healthcare Technology', 'Research'],
                'achievements' => [
                    '50+ peer-reviewed publications',
                    'PhD Computer Science - Stanford University',
                    'Technology deployed in 15 countries'
                ],
                'milestones' => [
                    ['date' => '2023-09', 'description' => 'FDA approval for AI diagnostic tool'],
                    ['date' => '2022-01', 'description' => 'Raised $10M Series B funding'],
                    ['date' => '2020-03', 'description' => 'Founded AI Healthcare Labs']
                ],
                'partners' => ['Stanford Medical School', 'Google Health', 'Mayo Clinic'],
                'value_proposition' => 'Democratizing advanced healthcare through AI-powered solutions accessible to all communities.',
                'five_year_plan' => 'Deploy AI healthcare solutions in 100+ hospitals globally and launch consumer health platform.',
                'latitude' => 37.7749,
                'longitude' => -122.4194,
                'status' => 'approved',
                'featured' => true,
                'joined_date' => '2020-03-10'
            ],
            [
                'name' => 'Elena Rodriguez',
                'email' => 'elena@financeforward.com',
                'phone' => '+52 55 5555 0125',
                'business_name' => 'FinanceForward',
                'business_description' => 'Amplifying financial inclusion for communities at risk of exclusion worldwide through comprehensive fintech platform providing banking services, microloans, and financial education.',
                'business_preview' => 'Amplifying financial inclusion for communities at risk of exclusion worldwide...',
                'industry' => 'Financial Technology',
                'location' => 'Mexico City, Mexico',
                'business_address' => '789 Reforma Avenue, Mexico City, Mexico 06600',
                'business_phone' => '+52 55 5555 0125',
                'business_email' => 'info@financeforward.com',
                'business_hours' => 'Mon - Fri: 8:00 AM - 6:00 PM',
                'website' => 'https://financeforward.com',
                'social_media' => [
                    'linkedin' => 'https://linkedin.com/company/financeforward',
                    'twitter' => 'https://twitter.com/financeforward'
                ],
                'profile_image' => 'assets/img/user/profile3.jpg',
                'business_logo' => 'assets/img/icons/setting.svg',
                'bio' => 'International finance expert passionate about financial inclusion and economic empowerment.',
                'overview' => 'Elena Rodriguez is passionate about financial inclusion and economic empowerment. Through FinanceForward, she has built a comprehensive fintech platform that provides banking services, microloans, and financial education to communities at risk of exclusion worldwide. With a background in international finance and development economics, Elena has collaborated with the World Bank and various organizations before launching her own venture. Her company has facilitated over $500 million in loans to small businesses and individuals across 25 countries. Elena speaks five languages and has been featured in Forbes 30 Under 30 for her contributions to financial technology and social impact.',
                'role' => 'Founder & CEO',
                'founded_year' => 2018,
                'business_size' => '100-200 employees',
                'skills' => ['Financial Technology', 'International Finance', 'Development Economics', 'Microfinance'],
                'achievements' => [
                    'Forbes 30 Under 30',
                    '$500M+ in loans facilitated',
                    'Operations in 25 countries'
                ],
                'milestones' => [
                    ['date' => '2023-12', 'description' => 'Reached $500M in total loans'],
                    ['date' => '2021-06', 'description' => 'Expanded to 25 countries'],
                    ['date' => '2018-08', 'description' => 'Founded FinanceForward']
                ],
                'partners' => ['World Bank', 'Inter-American Development Bank', 'Grameen Foundation'],
                'value_proposition' => 'Breaking down financial barriers to create economic opportunities for underserved communities.',
                'five_year_plan' => 'Reach 1 million users and establish presence in 50 countries with $2B in loans facilitated.',
                'latitude' => 19.4326,
                'longitude' => -99.1332,
                'status' => 'approved',
                'featured' => true,
                'joined_date' => '2018-08-20'
            ],
            [
                'name' => 'David Kim',
                'email' => 'david@spacelogisticspro.com',
                'phone' => '+1 323 555 0126',
                'business_name' => 'SpaceLogistics Pro',
                'business_description' => 'Next-generation space transportation and logistics solutions including advanced spacecraft propulsion systems, orbital manufacturing facilities, and asteroid mining technologies.',
                'business_preview' => 'Next-generation space transportation and logistics solutions...',
                'industry' => 'Space Technology',
                'location' => 'Los Angeles, California',
                'business_address' => '321 Aerospace Blvd, Los Angeles, CA 90245',
                'business_phone' => '+1 323 555 0126',
                'business_email' => 'info@spacelogisticspro.com',
                'business_hours' => 'Mon - Fri: 7:00 AM - 8:00 PM',
                'website' => 'https://spacelogisticspro.com',
                'social_media' => [
                    'linkedin' => 'https://linkedin.com/company/spacelogisticspro',
                    'twitter' => 'https://twitter.com/spacelogpro'
                ],
                'profile_image' => 'assets/img/user/profile4.jpg',
                'business_logo' => 'assets/icons/python.png',
                'bio' => 'Aerospace engineer pioneering the future of commercial spaceflight and space logistics.',
                'overview' => 'David Kim is pioneering the next generation of space transportation and logistics solutions. As founder of SpaceLogistics Pro, he\'s developing advanced spacecraft propulsion systems, orbital manufacturing facilities, and asteroid mining technologies. With a background in aerospace engineering from Caltech and previous experience at SpaceX and Blue Origin, David brings deep technical expertise and industry connections to his venture. His company is working on several groundbreaking projects including reusable launch vehicles, space-based solar power systems, and lunar base infrastructure. David is also an advocate for space exploration accessibility and regularly speaks at international aerospace conferences about the future of commercial spaceflight.',
                'role' => 'Founder & CTO',
                'founded_year' => 2021,
                'business_size' => '20-50 employees',
                'skills' => ['Aerospace Engineering', 'Propulsion Systems', 'Space Technology', 'Manufacturing'],
                'achievements' => [
                    'Caltech Aerospace Engineering degree',
                    'Former SpaceX and Blue Origin engineer',
                    'International aerospace conference speaker'
                ],
                'milestones' => [
                    ['date' => '2023-11', 'description' => 'Successful orbital test flight'],
                    ['date' => '2022-04', 'description' => 'Secured NASA contract'],
                    ['date' => '2021-01', 'description' => 'Founded SpaceLogistics Pro']
                ],
                'partners' => ['NASA', 'SpaceX', 'Caltech Space Lab'],
                'value_proposition' => 'Making space accessible through innovative, cost-effective transportation and logistics solutions.',
                'five_year_plan' => 'Launch commercial space operations and establish the first commercial asteroid mining facility.',
                'latitude' => 34.0522,
                'longitude' => -118.2437,
                'status' => 'approved',
                'featured' => false,
                'joined_date' => '2021-01-15'
            ],
            [
                'name' => 'Amara Patel',
                'email' => 'amara@edutechglobal.com',
                'phone' => '+44 20 7555 0127',
                'business_name' => 'EduTech Global',
                'business_description' => 'Transforming education through immersive virtual reality experiences and innovative learning platforms that make quality education accessible worldwide.',
                'business_preview' => 'Transforming education through immersive virtual reality experiences...',
                'industry' => 'Educational Technology',
                'location' => 'London, United Kingdom',
                'business_address' => '456 Education Lane, London, UK EC1A 1BB',
                'business_phone' => '+44 20 7555 0127',
                'business_email' => 'info@edutechglobal.com',
                'business_hours' => 'Mon - Fri: 9:00 AM - 5:00 PM',
                'website' => 'https://edutechglobal.com',
                'social_media' => [
                    'linkedin' => 'https://linkedin.com/company/edutechglobal',
                    'twitter' => 'https://twitter.com/edutechglobal'
                ],
                'profile_image' => 'assets/img/profile-images/Emerge Store-1.jpg',
                'business_logo' => 'assets/icons/education.png',
                'bio' => 'Education technology innovator focused on making quality education accessible through VR.',
                'overview' => 'Amara Patel is revolutionizing education through cutting-edge virtual reality technology. As founder of EduTech Global, she has created immersive learning experiences that transport students to historical events, inside molecular structures, and across the globe. With a background in computer science and education, Amara has developed VR curricula used in over 500 schools worldwide. Her platform makes quality education accessible to underserved communities by providing virtual field trips, laboratory experiences, and expert instruction that would otherwise be unavailable.',
                'role' => 'Founder & CEO',
                'founded_year' => 2019,
                'business_size' => '30-75 employees',
                'skills' => ['Virtual Reality', 'Educational Technology', 'Computer Science', 'Curriculum Development'],
                'achievements' => [
                    'VR curricula in 500+ schools',
                    'UNESCO Education Innovation Award',
                    'Computer Science degree from Oxford'
                ],
                'milestones' => [
                    ['date' => '2023-06', 'description' => 'Reached 500 schools milestone'],
                    ['date' => '2022-09', 'description' => 'Won UNESCO Education Innovation Award'],
                    ['date' => '2019-03', 'description' => 'Founded EduTech Global']
                ],
                'partners' => ['UNESCO', 'Oxford University', 'British Council'],
                'value_proposition' => 'Democratizing quality education through immersive VR experiences accessible to all.',
                'five_year_plan' => 'Deploy VR education solutions in 2000+ schools and launch consumer education platform.',
                'latitude' => 51.5074,
                'longitude' => -0.1278,
                'status' => 'approved',
                'featured' => false,
                'joined_date' => '2019-03-12'
            ],
            [
                'name' => 'James Wilson',
                'email' => 'james@agritechinnovations.com',
                'phone' => '+1 515 555 0128',
                'business_name' => 'AgriTech Innovations',
                'business_description' => 'Revolutionizing agriculture with smart farming technologies and sustainable practices that increase crop yields while reducing environmental impact.',
                'business_preview' => 'Revolutionizing agriculture with smart farming technologies and sustainable practices...',
                'industry' => 'Agricultural Technology',
                'location' => 'Des Moines, Iowa',
                'business_address' => '789 Farm Tech Drive, Des Moines, IA 50309',
                'business_phone' => '+1 515 555 0128',
                'business_email' => 'info@agritechinnovations.com',
                'business_hours' => 'Mon - Fri: 7:00 AM - 6:00 PM',
                'website' => 'https://agritechinnovations.com',
                'social_media' => [
                    'linkedin' => 'https://linkedin.com/company/agritechinnovations',
                    'twitter' => 'https://twitter.com/agritechinnov'
                ],
                'profile_image' => 'assets/img/profile-images/Emerge Store-5.jpg',
                'business_logo' => 'assets/icons/agriculture.png',
                'bio' => 'Agricultural engineer and sustainability advocate transforming modern farming practices.',
                'overview' => 'James Wilson is transforming agriculture through innovative technology solutions that help farmers increase productivity while protecting the environment. As founder of AgriTech Innovations, he has developed precision farming tools, IoT sensors, and AI-powered crop management systems used by thousands of farmers across the Midwest. With a background in agricultural engineering and sustainable farming practices, James is passionate about feeding the world\'s growing population while preserving natural resources for future generations.',
                'role' => 'Founder & CEO',
                'founded_year' => 2017,
                'business_size' => '40-80 employees',
                'skills' => ['Agricultural Engineering', 'IoT Technology', 'Sustainable Farming', 'Precision Agriculture'],
                'achievements' => [
                    'Technology used by 5000+ farmers',
                    'Agricultural Engineering degree from Iowa State',
                    'Sustainable Farming Innovation Award'
                ],
                'milestones' => [
                    ['date' => '2023-08', 'description' => 'Reached 5000 farmers milestone'],
                    ['date' => '2021-05', 'description' => 'Launched AI crop management platform'],
                    ['date' => '2017-04', 'description' => 'Founded AgriTech Innovations']
                ],
                'partners' => ['Iowa State University', 'USDA', 'Farm Bureau'],
                'value_proposition' => 'Empowering farmers with smart technology to feed the world sustainably.',
                'five_year_plan' => 'Expand to international markets and develop next-generation autonomous farming systems.',
                'latitude' => 41.5868,
                'longitude' => -93.6250,
                'status' => 'approved',
                'featured' => false,
                'joined_date' => '2017-04-18'
            ],
            [
                'name' => 'Cosmus Richard',
                'email' => 'cosmus@umozacoffee.mw',
                'phone' => '+265 999 123 456',
                'business_name' => 'Umoza Coffee',
                'business_description' => 'Premium coffee producer and distributor specializing in high-quality Malawian coffee beans, supporting local farmers and promoting sustainable agriculture practices.',
                'business_preview' => 'Premium coffee producer supporting local farmers and promoting sustainable agriculture...',
                'industry' => 'Agriculture & Food Processing',
                'location' => 'Zolozolo, Mzuzu City, Malawi',
                'business_address' => 'Zolozolo Trading Center, Mzuzu City, Malawi',
                'business_phone' => '+265 999 123 456',
                'business_email' => 'info@umozacoffee.mw',
                'business_hours' => 'Mon - Fri: 8:00 AM - 5:00 PM\nSat: 9:00 AM - 2:00 PM',
                'website' => 'https://umozacoffee.mw',
                'social_media' => [
                    'facebook' => 'https://facebook.com/umozacoffee',
                    'whatsapp' => '+265999123456'
                ],
                'profile_image' => 'assets/img/entrepreneurs/shadreck.jpg',
                'business_logo' => 'assets/img/logos/lg1.png',
                'bio' => 'Coffee entrepreneur and agricultural advocate supporting local farming communities in Malawi.',
                'overview' => 'Cosmus Richard is a passionate coffee entrepreneur dedicated to promoting Malawian coffee on the global stage while supporting local farming communities. As founder of Umoza Coffee Company, he has built a sustainable supply chain that directly benefits smallholder farmers in the northern regions of Malawi. His company focuses on quality coffee production, fair trade practices, and community development initiatives that amplify the self-reliance of rural communities.',
                'role' => 'Founder',
                'founded_year' => 2007,
                'business_size' => '10-25 employees',
                'skills' => ['Coffee Production', 'Supply Chain Management', 'Community Development', 'Sustainable Agriculture'],
                'achievements' => [
                    'Established since 2007',
                    'Supporting 200+ local farmers',
                    'Exporting to 5 countries'
                ],
                'milestones' => [
                    ['date' => '2023-07', 'description' => 'Expanded export operations'],
                    ['date' => '2011-03', 'description' => 'Achieved fair trade certification'],
                    ['date' => '2007-05', 'description' => 'Founded Umoza Coffee Company']
                ],
                'partners' => ['Malawi Coffee Association', 'Fair Trade Malawi', 'Local Farmers Cooperative'],
                'value_proposition' => 'Connecting Malawian coffee farmers to global markets while ensuring fair compensation and sustainable practices.',
                'five_year_plan' => 'Expand to 500+ partner farmers and establish Umoza Coffee as a premium African coffee brand internationally.',
                'latitude' => -11.4667,
                'longitude' => 33.9333,
                'status' => 'approved',
                'featured' => true,
                'joined_date' => '2007-05-10'
            ]
        ];

        foreach ($entrepreneurs as $entrepreneurData) {
            Entrepreneur::create($entrepreneurData);
        }
    }
}