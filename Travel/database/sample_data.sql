-- Sample data for travel destinations
INSERT INTO destinations (name, country, summary, description, price, rating, image, duration) VALUES
('Santorini', 'Greece', 'Whitewashed cliff towns, cobalt domes, volcanic beaches, and sunset sailing.', 'Experience the iconic beauty of Santorini with stunning whitewashed buildings, cobalt blue domes, and dramatic volcanic cliffs overlooking the Aegean Sea.', 799, 4.9, 'https://images.unsplash.com/photo-1570077188670-e3a8d69ac5ff?auto=format&fit=crop&w=1200&q=80', '6 days'),
('Kyoto', 'Japan', 'Temple gardens, tea houses, bamboo groves, and elegant ryokan evenings.', 'Immerse yourself in Japanese culture with ancient temples, serene gardens, traditional tea ceremonies, and authentic ryokan experiences.', 999, 4.8, 'https://images.unsplash.com/photo-1493976040374-85c8e12f0c0e?auto=format&fit=crop&w=1200&q=80', '7 days'),
('Marrakesh', 'Morocco', 'Colorful souks, desert glamping, rooftop dining, and artisan workshops.', 'Explore vibrant markets, ancient medinas, stunning desert landscapes, and experience authentic Moroccan hospitality.', 649, 4.7, 'https://images.unsplash.com/photo-1597212618440-806262de4f6b?auto=format&fit=crop&w=1200&q=80', '5 days'),
('Banff', 'Canada', 'Alpine lakes, glacier walks, scenic rail routes, and cozy lodge nights.', 'Discover pristine mountain scenery with turquoise lakes, world-class hiking trails, and luxury mountain lodge accommodations.', 849, 4.9, 'https://images.unsplash.com/photo-1501785888041-af3ef285b470?auto=format&fit=crop&w=1200&q=80', '6 days');

-- Sample hotels
INSERT INTO hotels (name, destination_id, address, description, price, rating, image, amenities) VALUES
('Aegean View Suites', 1, 'Caldera Edge, Santorini', 'Luxury suites with private plunge pools and sunset views', 149, 4.8, 'https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=1200&q=80', 'Pool, Spa, Restaurant, Room Service'),
('Kiyomizu Ryokan', 2, 'Higashiyama Ward, Kyoto', 'Traditional Japanese inn with hot springs and kaiseki dining', 179, 4.9, 'https://images.unsplash.com/photo-1590490360182-c33d57733427?auto=format&fit=crop&w=1200&q=80', 'Hot Spring, Dining, Garden, Parking'),
('Atlas Courtyard Hotel', 3, 'Medina, Marrakesh', 'Beautifully restored riad with traditional architecture', 99, 4.7, 'https://images.unsplash.com/photo-1571896349842-33c89424de2d?auto=format&fit=crop&w=1200&q=80', 'Courtyard, Rooftop Terrace, Restaurant, Bar');

-- Sample packages
INSERT INTO packages (title, destination_id, description, price, days, type, image, itinerary) VALUES
('Island Romance', 1, 'Perfect couple getaway with sunset dining and beach escapes', 1199, 6, 'Couples', 'https://images.unsplash.com/photo-1570077188670-e3a8d69ac5ff?auto=format&fit=crop&w=1200&q=80', 'Day 1-2: Arrival & Exploration, Day 3-4: Island Tours, Day 5-6: Relaxation & Departure'),
('Culture Trail', 2, 'Deep dive into Japanese temples, gardens, and traditions', 1449, 8, 'Culture', 'https://images.unsplash.com/photo-1493976040374-85c8e12f0c0e?auto=format&fit=crop&w=1200&q=80', 'Day 1-2: Kyoto Overview, Day 3-4: Temple Circuit, Day 5-6: Tea Ceremony & Crafts, Day 7-8: Garden Tours'),
('Desert & Medina', 3, 'Adventure through souks, deserts, and berber villages', 899, 5, 'Adventure', 'https://images.unsplash.com/photo-1597212618440-806262de4f6b?auto=format&fit=crop&w=1200&q=80', 'Day 1-2: Medina Exploration, Day 3: Desert Glamping, Day 4-5: Berber Villages & Return'),
('Rocky Mountain Reset', 4, 'Nature escape with hiking, lakes, and mountain lodges', 1299, 6, 'Nature', 'https://images.unsplash.com/photo-1501785888041-af3ef285b470?auto=format&fit=crop&w=1200&q=80', 'Day 1-2: Arrival & Training, Day 3-5: Guided Hikes, Day 6: Scenic Rail & Departure');

-- Sample reviews
INSERT INTO users (name, email, password) VALUES
('Maya Chen', 'maya@example.com', '$2y$10$gIhwg0fbxqmq470l1EwlIOGQz7dUh1FhF7ThcBIb7yTZFnD3y1Vha'),
('Omar Ellis', 'omar@example.com', '$2y$10$gIhwg0fbxqmq470l1EwlIOGQz7dUh1FhF7ThcBIb7yTZFnD3y1Vha'),
('Nina Patel', 'nina@example.com', '$2y$10$gIhwg0fbxqmq470l1EwlIOGQz7dUh1FhF7ThcBIb7yTZFnD3y1Vha');

INSERT INTO reviews (user_id, destination_id, rating, title, text) VALUES
(1, 2, 5, 'Kyoto was perfection', 'Every transfer, tour, and dinner reservation worked perfectly. The Kyoto itinerary was thoughtful and calm.'),
(2, 1, 5, 'Honeymoon dream', 'Roamly made our honeymoon feel effortless. Santorini at sunset was exactly what we hoped for.'),
(3, 1, 4, 'Great experience', 'Great hotels, clear booking flow, and fast support when we changed dates.');
