CREATE TABLE IF NOT EXISTS `reviews` (
	`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`page_id` int(11) NOT NULL,
	`name` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
	`content` text NOT NULL,
	`rating` tinyint(1) NOT NULL,
	`submit_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO reviews (page_id, name, email, content, rating, submit_date) VALUES
(1, 'David Deacon', 'david@email.com', 'I use this website daily, the amount of content is brilliant.', 5, '2020-01-09 20:43:02'),
(1, 'John Doe', 'john@email.com', 'Great website, great content, and great support!', 4, '2020-01-09 21:00:41'),
(1, 'Robert Billings', 'reobert@email.com', 'Website needs more content, good website but content is lacking.', 3, '2020-01-09 21:10:16'),
(1, 'Daniel Callaghan', 'dany@email.com', 'Great!', 5, '2020-01-09 23:51:05'),
(1, 'Bobby', 'bob@email.com', 'Not much content.', 2, '2020-01-14 21:54:24'),
(1, 'Joshua Kennedy', 'ken@email.com', 'Fantasic website, has everything I need to know.', 5, '2020-01-16 17:34:27'),
(1, 'Johannes Hansen', 'hans@email.com', 'Really like this website, helps me out a lot!', 5, '2020-01-16 17:35:12'),
(1, 'Wit Kwiatkowski', 'wit@email.com', 'Please provide more quality content.', 5, '2020-01-16 17:36:03'),
(1, 'Ã“li ÃžÃ³rÃ°arson', 'ars@email.com', 'Thanks', 5, '2020-01-16 17:36:34'),
(1, 'Jaroslava BerÃ¡nkovÃ¡', 'jarops@email.com', '', 5, '2020-01-16 17:37:48'),
(1, 'Naomi Holt', 'holt@email.com', 'Appreciate the amount of content you guys do.', 5, '2020-01-16 17:39:17'),
(1, 'Isobel Whitehead', 'iso@email.com', 'Thank you for providing a website that helps us out a lot!', 5, '2020-01-16 17:40:28'),
(1, 'Warren Mills', 'hills@email.com', 'Everything is awesome!', 5, '2020-01-16 19:34:08'),
(1, 'Larry Johnson', 'larry@email.com', 'Brilliant, thank you for providing quality content!', 5, '2020-01-29 18:40:36');