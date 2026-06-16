<?php
define('SITE_NAME', 'Roamly Travel');
define('SITE_TAGLINE', 'Curated escapes, simple booking, memorable stays.');
define('BASE_URL', '');
define('ADMIN_EMAIL', 'admin@roamly.local');

$featuredDestinations = [
    [
        'id' => 1,
        'name' => 'Santorini',
        'country' => 'Greece',
        'price' => 799,
        'rating' => 4.9,
        'image' => 'https://images.unsplash.com/photo-1570077188670-e3a8d69ac5ff?auto=format&fit=crop&w=1200&q=80',
        'summary' => 'Whitewashed cliff towns, cobalt domes, volcanic beaches, and sunset sailing.',
        'duration' => '6 days',
    ],
    [
        'id' => 2,
        'name' => 'Kyoto',
        'country' => 'Japan',
        'price' => 999,
        'rating' => 4.8,
        'image' => 'https://images.unsplash.com/photo-1493976040374-85c8e12f0c0e?auto=format&fit=crop&w=1200&q=80',
        'summary' => 'Temple gardens, tea houses, bamboo groves, and elegant ryokan evenings.',
        'duration' => '7 days',
    ],
    [
        'id' => 3,
        'name' => 'Marrakesh',
        'country' => 'Morocco',
        'price' => 649,
        'rating' => 4.7,
        'image' => 'https://images.unsplash.com/photo-1597212618440-806262de4f6b?auto=format&fit=crop&w=1200&q=80',
        'summary' => 'Colorful souks, desert glamping, rooftop dining, and artisan workshops.',
        'duration' => '5 days',
    ],
    [
        'id' => 4,
        'name' => 'Banff',
        'country' => 'Canada',
        'price' => 849,
        'rating' => 4.9,
        'image' => 'https://images.unsplash.com/photo-1501785888041-af3ef285b470?auto=format&fit=crop&w=1200&q=80',
        'summary' => 'Alpine lakes, glacier walks, scenic rail routes, and cozy lodge nights.',
        'duration' => '6 days',
    ],
    [
        'id' => 5,
        'name' => 'Albanian Riviera',
        'country' => 'Albania',
        'price' => 699,
        'rating' => 4.7,
        'image' => 'https://images.unsplash.com/photo-1596394516093-501ba68a0ba6?auto=format&fit=crop&w=1200&q=80',
        'summary' => 'Ionian beaches, hilltop castles, seafood terraces, and bright coastal villages.',
        'duration' => '6 days',
    ],
    [
        'id' => 6,
        'name' => 'Dubrovnik',
        'country' => 'Croatia',
        'price' => 899,
        'rating' => 4.8,
        'image' => 'https://images.unsplash.com/photo-1555990538-c48dbe3db9e9?auto=format&fit=crop&w=1200&q=80',
        'summary' => 'Ancient city walls, Adriatic island hops, limestone lanes, and sunset sea views.',
        'duration' => '7 days',
    ],
    [
        'id' => 7,
        'name' => 'New York City',
        'country' => 'United States',
        'price' => 749,
        'rating' => 4.8,
        'image' => 'https://images.unsplash.com/photo-1485871981521-5b1fd3805eee?auto=format&fit=crop&w=1200&q=80',
        'summary' => 'Skyline icons, Broadway nights, museum days, neighborhood food walks, and harbor views.',
        'duration' => '5 days',
    ],
    [
        'id' => 8,
        'name' => 'St. Petersburg',
        'country' => 'Russia',
        'price' => 1099,
        'rating' => 4.6,
        'image' => 'https://images.unsplash.com/photo-1556610961-2fecc5927173?auto=format&fit=crop&w=1200&q=80',
        'summary' => 'Imperial palaces, canal cruises, grand museums, ballet evenings, and ornate cathedrals.',
        'duration' => '7 days',
    ],
    [
        'id' => 9,
        'name' => 'Rio de Janeiro',
        'country' => 'Brazil',
        'price' => 949,
        'rating' => 4.9,
        'image' => 'https://images.unsplash.com/photo-1483729558449-99ef09a8c325?auto=format&fit=crop&w=1200&q=80',
        'summary' => 'Beach mornings, mountain viewpoints, samba nights, rainforest trails, and oceanfront stays.',
        'duration' => '6 days',
    ],
];

$hotels = [
    ['id' => 1, 'name' => 'Aegean View Suites', 'destination' => 'Santorini', 'price' => 149, 'rating' => 4.8, 'image' => 'https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=1200&q=80'],
    ['id' => 2, 'name' => 'Kiyomizu Ryokan', 'destination' => 'Kyoto', 'price' => 179, 'rating' => 4.9, 'image' => 'https://images.unsplash.com/photo-1590490360182-c33d57733427?auto=format&fit=crop&w=1200&q=80'],
    ['id' => 3, 'name' => 'Atlas Courtyard Hotel', 'destination' => 'Marrakesh', 'price' => 99, 'rating' => 4.7, 'image' => 'https://images.unsplash.com/photo-1571896349842-33c89424de2d?auto=format&fit=crop&w=1200&q=80'],
    ['id' => 4, 'name' => 'Ionian Cliff Hotel', 'destination' => 'Albanian Riviera', 'price' => 119, 'rating' => 4.7, 'image' => 'https://images.unsplash.com/photo-1582719508461-905c673771fd?auto=format&fit=crop&w=1200&q=80'],
    ['id' => 5, 'name' => 'Adriatic Gate Hotel', 'destination' => 'Dubrovnik', 'price' => 169, 'rating' => 4.8, 'image' => 'https://images.unsplash.com/photo-1564501049412-61c2a3083791?auto=format&fit=crop&w=1200&q=80'],
    ['id' => 6, 'name' => 'Midtown Skyline Stay', 'destination' => 'New York City', 'price' => 229, 'rating' => 4.6, 'image' => 'https://images.unsplash.com/photo-1445019980597-93fa8acb246c?auto=format&fit=crop&w=1200&q=80'],
    ['id' => 7, 'name' => 'Nevsky Palace Rooms', 'destination' => 'St. Petersburg', 'price' => 189, 'rating' => 4.6, 'image' => 'https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?auto=format&fit=crop&w=1200&q=80'],
    ['id' => 8, 'name' => 'Copacabana Wave Resort', 'destination' => 'Rio de Janeiro', 'price' => 159, 'rating' => 4.8, 'image' => 'https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=1200&q=80'],
];

$packages = [
    ['id' => 1, 'title' => 'Island Romance', 'destination' => 'Santorini', 'price' => 1199, 'days' => 6, 'type' => 'Couples', 'image' => $featuredDestinations[0]['image']],
    ['id' => 2, 'title' => 'Culture Trail', 'destination' => 'Kyoto', 'price' => 1449, 'days' => 8, 'type' => 'Culture', 'image' => $featuredDestinations[1]['image']],
    ['id' => 3, 'title' => 'Desert & Medina', 'destination' => 'Marrakesh', 'price' => 899, 'days' => 5, 'type' => 'Adventure', 'image' => $featuredDestinations[2]['image']],
    ['id' => 4, 'title' => 'Rocky Mountain Reset', 'destination' => 'Banff', 'price' => 1299, 'days' => 6, 'type' => 'Nature', 'image' => $featuredDestinations[3]['image']],
    ['id' => 5, 'title' => 'Ionian Coast Escape', 'destination' => 'Albanian Riviera', 'price' => 999, 'days' => 6, 'type' => 'Beach', 'image' => $featuredDestinations[4]['image']],
    ['id' => 6, 'title' => 'Adriatic Heritage', 'destination' => 'Dubrovnik', 'price' => 1299, 'days' => 7, 'type' => 'Culture', 'image' => $featuredDestinations[5]['image']],
    ['id' => 7, 'title' => 'Big City Icons', 'destination' => 'New York City', 'price' => 1099, 'days' => 5, 'type' => 'City', 'image' => $featuredDestinations[6]['image']],
    ['id' => 8, 'title' => 'Imperial Russia', 'destination' => 'St. Petersburg', 'price' => 1599, 'days' => 7, 'type' => 'Culture', 'image' => $featuredDestinations[7]['image']],
    ['id' => 9, 'title' => 'Rio Rhythm', 'destination' => 'Rio de Janeiro', 'price' => 1399, 'days' => 6, 'type' => 'Beach', 'image' => $featuredDestinations[8]['image']],
];

$flightAppointments = [
    1 => [
        ['flight' => 'RM 204', 'route' => 'New York (JFK) to Athens (ATH)', 'date' => '2026-07-12', 'depart' => '08:15 AM', 'arrive' => '01:45 AM +1', 'status' => 'Morning departure'],
        ['flight' => 'RM 288', 'route' => 'Chicago (ORD) to Athens (ATH)', 'date' => '2026-07-12', 'depart' => '05:40 PM', 'arrive' => '10:20 AM +1', 'status' => 'Evening departure'],
        ['flight' => 'RM 331', 'route' => 'Athens (ATH) to Santorini (JTR)', 'date' => '2026-07-13', 'depart' => '12:05 PM', 'arrive' => '12:55 PM', 'status' => 'Island connection'],
    ],
    2 => [
        ['flight' => 'RM 612', 'route' => 'Los Angeles (LAX) to Tokyo (HND)', 'date' => '2026-08-03', 'depart' => '11:10 AM', 'arrive' => '03:25 PM +1', 'status' => 'Direct international'],
        ['flight' => 'RM 636', 'route' => 'Seattle (SEA) to Tokyo (NRT)', 'date' => '2026-08-03', 'depart' => '02:35 PM', 'arrive' => '05:50 PM +1', 'status' => 'Afternoon departure'],
        ['flight' => 'RM 701', 'route' => 'Tokyo (HND) to Osaka (ITM)', 'date' => '2026-08-04', 'depart' => '07:20 PM', 'arrive' => '08:30 PM', 'status' => 'Kyoto rail transfer after landing'],
    ],
    3 => [
        ['flight' => 'RM 420', 'route' => 'New York (JFK) to Casablanca (CMN)', 'date' => '2026-09-09', 'depart' => '09:30 PM', 'arrive' => '09:45 AM +1', 'status' => 'Overnight flight'],
        ['flight' => 'RM 427', 'route' => 'Washington (IAD) to Casablanca (CMN)', 'date' => '2026-09-09', 'depart' => '06:05 PM', 'arrive' => '06:35 AM +1', 'status' => 'Early arrival'],
        ['flight' => 'RM 451', 'route' => 'Casablanca (CMN) to Marrakesh (RAK)', 'date' => '2026-09-10', 'depart' => '11:15 AM', 'arrive' => '12:05 PM', 'status' => 'Medina transfer window'],
    ],
    4 => [
        ['flight' => 'RM 158', 'route' => 'Denver (DEN) to Calgary (YYC)', 'date' => '2026-10-04', 'depart' => '07:55 AM', 'arrive' => '10:30 AM', 'status' => 'Morning mountain arrival'],
        ['flight' => 'RM 172', 'route' => 'Seattle (SEA) to Calgary (YYC)', 'date' => '2026-10-04', 'depart' => '12:45 PM', 'arrive' => '03:18 PM', 'status' => 'Afternoon arrival'],
        ['flight' => 'RM 195', 'route' => 'Chicago (ORD) to Calgary (YYC)', 'date' => '2026-10-04', 'depart' => '04:25 PM', 'arrive' => '07:02 PM', 'status' => 'Evening arrival'],
    ],
    5 => [
        ['flight' => 'RM 512', 'route' => 'New York (JFK) to Tirana (TIA)', 'date' => '2026-07-22', 'depart' => '06:30 PM', 'arrive' => '11:20 AM +1', 'status' => 'Coastal transfer included'],
        ['flight' => 'RM 526', 'route' => 'Chicago (ORD) to Tirana (TIA)', 'date' => '2026-07-22', 'depart' => '08:10 PM', 'arrive' => '02:05 PM +1', 'status' => 'Evening departure'],
    ],
    6 => [
        ['flight' => 'RM 544', 'route' => 'New York (JFK) to Dubrovnik (DBV)', 'date' => '2026-08-14', 'depart' => '05:45 PM', 'arrive' => '10:55 AM +1', 'status' => 'Old town arrival'],
        ['flight' => 'RM 558', 'route' => 'Boston (BOS) to Dubrovnik (DBV)', 'date' => '2026-08-14', 'depart' => '07:20 PM', 'arrive' => '12:15 PM +1', 'status' => 'Island ferry window'],
    ],
    7 => [
        ['flight' => 'RM 071', 'route' => 'Los Angeles (LAX) to New York (JFK)', 'date' => '2026-09-05', 'depart' => '09:00 AM', 'arrive' => '05:25 PM', 'status' => 'Evening check-in'],
        ['flight' => 'RM 087', 'route' => 'Miami (MIA) to New York (LGA)', 'date' => '2026-09-05', 'depart' => '01:40 PM', 'arrive' => '04:35 PM', 'status' => 'Central transfer'],
    ],
    8 => [
        ['flight' => 'RM 812', 'route' => 'New York (JFK) to St. Petersburg (LED)', 'date' => '2026-10-18', 'depart' => '04:55 PM', 'arrive' => '09:35 AM +1', 'status' => 'Museum afternoon'],
        ['flight' => 'RM 824', 'route' => 'Washington (IAD) to St. Petersburg (LED)', 'date' => '2026-10-18', 'depart' => '06:25 PM', 'arrive' => '11:05 AM +1', 'status' => 'Palace transfer'],
    ],
    9 => [
        ['flight' => 'RM 904', 'route' => 'Miami (MIA) to Rio de Janeiro (GIG)', 'date' => '2026-11-09', 'depart' => '10:15 PM', 'arrive' => '08:40 AM +1', 'status' => 'Beach morning arrival'],
        ['flight' => 'RM 918', 'route' => 'New York (JFK) to Rio de Janeiro (GIG)', 'date' => '2026-11-09', 'depart' => '07:05 PM', 'arrive' => '07:55 AM +1', 'status' => 'Overnight direct'],
    ],
];

$reviews = [
    ['name' => 'Maya Chen', 'rating' => 5, 'text' => 'Every transfer, tour, and dinner reservation worked perfectly. The Kyoto itinerary was thoughtful and calm.'],
    ['name' => 'Omar Ellis', 'rating' => 5, 'text' => 'Roamly made our honeymoon feel effortless. Santorini at sunset was exactly what we hoped for.'],
    ['name' => 'Nina Patel', 'rating' => 4, 'text' => 'Great hotels, clear booking flow, and fast support when we changed dates.'],
];
?>
