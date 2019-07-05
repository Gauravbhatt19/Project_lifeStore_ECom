
CREATE TABLE `items` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `name` varchar(255) NOT NULL,
 `price` int(11) NOT NULL,
 PRIMARY KEY (`id`)
);


CREATE TABLE `users` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `name` varchar(255) NOT NULL,
 `email` varchar(255) NOT NULL,
 `password` varchar(255) NOT NULL,
 `contact` varchar(255) NOT NULL,
 `city` varchar(255) NOT NULL,
 `address` varchar(255) NOT NULL,
 PRIMARY KEY (`id`)
) ;

CREATE TABLE `users_items` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `user_id` int(11) NOT NULL,
 `item_id` int(11) NOT NULL,
 `status` enum('Added to cart','Confirmed') NOT NULL,
 PRIMARY KEY (`id`),
 KEY `item_id` (`item_id`),
 KEY `user_id` (`user_id`),
 CONSTRAINT `users_items_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
 CONSTRAINT `users_items_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`)
);
