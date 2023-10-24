INSERT INTO Packages (id, title, description, image)
VALUES
    (0, 'Bali', 'Bali, Indonesia: An enchanting island paradise known for its stunning beaches, lush jungles, and vibrant culture.', 'bali.jpg'),
    (1, 'NYC', 'New York City: The city that never sleeps, where iconic landmarks, diverse neighborhoods, and endless entertainment await.', 'nyc.jpg'),
    (2, 'Monaco', 'Monaco: A glamorous microstate on the French Riviera, famous for its luxurious lifestyle, casinos, and stunning Mediterranean views.', 'monaco.jpg'),
    (3, 'Paris', 'Paris: The "City of Love," where art, fashion, and history converge in a beautiful and romantic setting.', 'paris.jpg'),
    (4, 'Tokyo', 'Tokyo: A futuristic metropolis that seamlessly combines tradition and innovation, offering a unique cultural experience.', 'tokyo.jpg'),
    (5, 'Venice', 'Venice: A romantic water-bound city known for its iconic canals, historic architecture, and captivating atmosphere.', 'venice.jpg');


CREATE TABLE book_form (
    name VARCHAR(255),
    email VARCHAR(255),
    phone VARCHAR(20),
    address TEXT,
    location VARCHAR(255),
    guests INT,
    arrivals DATE,
    leaving DATE
);

CREATE TABLE reviews (
    name VARCHAR(255),
    rating INT,
    comment TEXT
);