INSERT INTO destinations (name, country, summary, description, price, rating, image, duration)
SELECT 'Albanian Riviera', 'Albania', 'Ionian beaches, hilltop castles, seafood terraces, and bright coastal villages.', 'Explore Albania''s south coast with turquoise coves, Ottoman-era towns, castle viewpoints, seafood lunches, and relaxed beach days along the Ionian Sea.', 699, 4.7, 'https://images.unsplash.com/photo-1596394516093-501ba68a0ba6?auto=format&fit=crop&w=1200&q=80', '6 days'
WHERE NOT EXISTS (SELECT 1 FROM destinations WHERE name = 'Albanian Riviera');

INSERT INTO destinations (name, country, summary, description, price, rating, image, duration)
SELECT 'Dubrovnik', 'Croatia', 'Ancient city walls, Adriatic island hops, limestone lanes, and sunset sea views.', 'Walk Dubrovnik''s historic walls, cruise nearby islands, explore marble streets, and enjoy Adriatic dining with views over the old harbor.', 899, 4.8, 'https://images.unsplash.com/photo-1555990538-c48dbe3db9e9?auto=format&fit=crop&w=1200&q=80', '7 days'
WHERE NOT EXISTS (SELECT 1 FROM destinations WHERE name = 'Dubrovnik');

INSERT INTO destinations (name, country, summary, description, price, rating, image, duration)
SELECT 'New York City', 'United States', 'Skyline icons, Broadway nights, museum days, neighborhood food walks, and harbor views.', 'Experience America through New York City with landmark sightseeing, Broadway seats, museum passes, Central Park time, food tours, and skyline viewpoints.', 749, 4.8, 'https://images.unsplash.com/photo-1485871981521-5b1fd3805eee?auto=format&fit=crop&w=1200&q=80', '5 days'
WHERE NOT EXISTS (SELECT 1 FROM destinations WHERE name = 'New York City');

INSERT INTO destinations (name, country, summary, description, price, rating, image, duration)
SELECT 'St. Petersburg', 'Russia', 'Imperial palaces, canal cruises, grand museums, ballet evenings, and ornate cathedrals.', 'Discover Russia''s imperial capital with palace tours, canal views, museum visits, classical performance nights, and elegant historic squares.', 1099, 4.6, 'https://images.unsplash.com/photo-1556610961-2fecc5927173?auto=format&fit=crop&w=1200&q=80', '7 days'
WHERE NOT EXISTS (SELECT 1 FROM destinations WHERE name = 'St. Petersburg');

INSERT INTO destinations (name, country, summary, description, price, rating, image, duration)
SELECT 'Rio de Janeiro', 'Brazil', 'Beach mornings, mountain viewpoints, samba nights, rainforest trails, and oceanfront stays.', 'Enjoy Brazil''s coastal energy with Copacabana beach time, Sugarloaf and Christ viewpoints, samba evenings, Tijuca Forest trails, and oceanfront dining.', 949, 4.9, 'https://images.unsplash.com/photo-1483729558449-99ef09a8c325?auto=format&fit=crop&w=1200&q=80', '6 days'
WHERE NOT EXISTS (SELECT 1 FROM destinations WHERE name = 'Rio de Janeiro');

INSERT INTO hotels (name, destination_id, address, description, price, rating, image, amenities)
SELECT 'Ionian Cliff Hotel', d.id, 'Himare Coast, Albanian Riviera', 'Sea-view rooms near coves, castle towns, and sunset terraces.', 119, 4.7, 'https://images.unsplash.com/photo-1582719508461-905c673771fd?auto=format&fit=crop&w=1200&q=80', 'Beach Access, Terrace, Restaurant, Transfers'
FROM destinations d
WHERE d.name = 'Albanian Riviera' AND NOT EXISTS (SELECT 1 FROM hotels WHERE name = 'Ionian Cliff Hotel');

INSERT INTO hotels (name, destination_id, address, description, price, rating, image, amenities)
SELECT 'Adriatic Gate Hotel', d.id, 'Old Town, Dubrovnik', 'Boutique stay near the city walls with harbor and island views.', 169, 4.8, 'https://images.unsplash.com/photo-1564501049412-61c2a3083791?auto=format&fit=crop&w=1200&q=80', 'Breakfast, Sea View, Concierge, Ferry Access'
FROM destinations d
WHERE d.name = 'Dubrovnik' AND NOT EXISTS (SELECT 1 FROM hotels WHERE name = 'Adriatic Gate Hotel');

INSERT INTO hotels (name, destination_id, address, description, price, rating, image, amenities)
SELECT 'Midtown Skyline Stay', d.id, 'Midtown Manhattan, New York', 'Modern rooms close to theaters, museums, dining, and subway lines.', 229, 4.6, 'https://images.unsplash.com/photo-1445019980597-93fa8acb246c?auto=format&fit=crop&w=1200&q=80', 'City View, Gym, Breakfast, Subway Access'
FROM destinations d
WHERE d.name = 'New York City' AND NOT EXISTS (SELECT 1 FROM hotels WHERE name = 'Midtown Skyline Stay');

INSERT INTO hotels (name, destination_id, address, description, price, rating, image, amenities)
SELECT 'Nevsky Palace Rooms', d.id, 'Nevsky Prospect, St. Petersburg', 'Elegant central hotel near museums, canals, theaters, and palace squares.', 189, 4.6, 'https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?auto=format&fit=crop&w=1200&q=80', 'Historic Center, Breakfast, Concierge, Transfers'
FROM destinations d
WHERE d.name = 'St. Petersburg' AND NOT EXISTS (SELECT 1 FROM hotels WHERE name = 'Nevsky Palace Rooms');

INSERT INTO hotels (name, destination_id, address, description, price, rating, image, amenities)
SELECT 'Copacabana Wave Resort', d.id, 'Copacabana, Rio de Janeiro', 'Oceanfront stay with beach access, rooftop pool, and mountain views.', 159, 4.8, 'https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=1200&q=80', 'Beach Access, Rooftop Pool, Restaurant, Tours'
FROM destinations d
WHERE d.name = 'Rio de Janeiro' AND NOT EXISTS (SELECT 1 FROM hotels WHERE name = 'Copacabana Wave Resort');

INSERT INTO packages (title, destination_id, description, price, days, type, image, itinerary)
SELECT 'Ionian Coast Escape', d.id, 'Beach and culture route through Albania''s Riviera towns and coves.', 999, 6, 'Beach', d.image, 'Day 1-2: Tirana arrival and coastal transfer, Day 3-4: Riviera beaches and castles, Day 5-6: Villages, seafood, and return'
FROM destinations d
WHERE d.name = 'Albanian Riviera' AND NOT EXISTS (SELECT 1 FROM packages WHERE title = 'Ionian Coast Escape');

INSERT INTO packages (title, destination_id, description, price, days, type, image, itinerary)
SELECT 'Adriatic Heritage', d.id, 'Dubrovnik city walls, island cruising, old town dining, and coastal viewpoints.', 1299, 7, 'Culture', d.image, 'Day 1-2: Old town and walls, Day 3-4: Islands and beaches, Day 5-7: Culture tours, dining, and departure'
FROM destinations d
WHERE d.name = 'Dubrovnik' AND NOT EXISTS (SELECT 1 FROM packages WHERE title = 'Adriatic Heritage');

INSERT INTO packages (title, destination_id, description, price, days, type, image, itinerary)
SELECT 'Big City Icons', d.id, 'New York highlights with Broadway, museums, skyline views, and food walks.', 1099, 5, 'City', d.image, 'Day 1: Arrival and skyline, Day 2: Museums and Central Park, Day 3: Broadway, Day 4: Food tour and harbor, Day 5: Departure'
FROM destinations d
WHERE d.name = 'New York City' AND NOT EXISTS (SELECT 1 FROM packages WHERE title = 'Big City Icons');

INSERT INTO packages (title, destination_id, description, price, days, type, image, itinerary)
SELECT 'Imperial Russia', d.id, 'Palaces, museums, canals, cathedrals, and performance nights in St. Petersburg.', 1599, 7, 'Culture', d.image, 'Day 1-2: City and canals, Day 3-4: Palaces and museums, Day 5-7: Cathedrals, ballet, and departure'
FROM destinations d
WHERE d.name = 'St. Petersburg' AND NOT EXISTS (SELECT 1 FROM packages WHERE title = 'Imperial Russia');

INSERT INTO packages (title, destination_id, description, price, days, type, image, itinerary)
SELECT 'Rio Rhythm', d.id, 'Rio beach days, mountain views, rainforest walks, samba nights, and local food.', 1399, 6, 'Beach', d.image, 'Day 1-2: Beach and city arrival, Day 3: Sugarloaf and Christ viewpoint, Day 4: Rainforest trails, Day 5-6: Samba, dining, and departure'
FROM destinations d
WHERE d.name = 'Rio de Janeiro' AND NOT EXISTS (SELECT 1 FROM packages WHERE title = 'Rio Rhythm');
