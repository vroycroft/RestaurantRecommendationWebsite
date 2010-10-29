DROP DATABASE IF EXISTS Restaurants;

CREATE DATABASE IF NOT EXISTS Restaurants;
GRANT ALL PRIVILEGES ON Restaurants.* to 'user'@'localhost' identified by 'Restaurants';
--
-- 
--
USE Restaurants;

--
-- Table structure for table `RestaurantInfo`
--

CREATE TABLE IF NOT EXISTS `Restaurants`.`RestaurantInfo` (
  `restaurant_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `street_address` varchar(50) NOT NULL,
  `city` varchar(25) NOT NULL,
  `state` varchar(2) NOT NULL,
  `zip` varchar(5) NOT NULL,
  `image` varchar(25) NOT NULL DEFAULT "default.jpeg",
  `average_user_rating` DEC(1,1) NOT NULL,
  `website` varchar(50) NOT NULL,
  `price` INT NOT NULL,
  `delivery` INT NOT NULL,
  `takeout` INT NOT NULL,
  `accommodate_groups` INT NOT NULL,
  `reservations` INT NOT NULL,
  `outside_seating` INT NOT NULL,
  `bar` INT NOT NULL,
  `kids` INT NOT NULL,
  `fast_food` INT NOT NULL,
  `steakhouse_influence` INT NOT NULL,
  `american_influence` INT NOT NULL,
  `middle_eastern_influence` INT NOT NULL,
  `asian_influence` INT NOT NULL,
  `italian_influence` INT NOT NULL,
  `chinese_influence` INT NOT NULL,
  `japanese_influence` INT NOT NULL,
  `indian_influence` INT NOT NULL,
  `french_influence` INT NOT NULL,
  `greek_influence` INT NOT NULL,
  `mexican_influence` INT NOT NULL,
  `vegetarian_influence` INT NOT NULL,
  `seafood_influence` INT NOT NULL,
  PRIMARY KEY (`restaurant_id`)
); 

--
-- Dumping data for table `RestaurantInfo`
--

INSERT INTO `Restaurants`.`RestaurantInfo` (`name`, `street_address`, `city`, `state`, `zip`, `image`, `average_user_rating`, `price`, `website`, `delivery`, `takeout`, `accommodate_groups`, `reservations`, `outside_seating`, `bar`, `kids`, `fast_food`, `steakhouse_influence`, `american_influence`, `middle_eastern_influence`, `asian_influence`, `italian_influence`, `chinese_influence`, `japanese_influence`, `indian_influence`, `french_influence`, `greek_influence`, `mexican_influence`, `vegetarian_influence`, `seafood_influence`) VALUES
('Aladin', '2032 Plank Road', 'Fredericksburg', 'VA', '22401', 'default.jpeg', 4.0, 2, 'not applicable', 1, 1, 1, 0, 1, 1, 0, 0, 0, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0),
('Asia Cafe', '840 Warrenton Road', 'Fredericksburg', 'VA', '22406', 'default.jpeg', 3.5, 2, 'not applicable', 1, 1, 1, 1, 0, 0, 1, 0, 0, 0, 0, 4, 0, 4, 4, 0, 0, 0, 0, 0, 0),
('Burger King', '3052 Plank Road', 'Fredericksburg', 'VA', '22401', 'default.jpeg', 3.0, 1, 'http://www.burgerking.com', 0, 1, 1, 0, 0, 0, 1, 1, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0),
('Chick-fil-A', '9900 Southpoint Parkway', 'Fredericksburg', 'VA', '22407', 'default.jpeg', 4.0, 1, 'http://www.chick-fil-a.com', 0, 1, 1, 0, 0, 0, 1, 1, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Chipotle’, '3051 Plank Rd’, 'Fredericksburg', 'VA', '22401', 'default.jpeg', 4, 3, ‘www.chipotle.com', 0, 1, 0, 0, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 5, 1, 0),
('El Charro', ‘4611 Southpoint Parkway’, 'Fredericksburg', 'VA', '22408', 'default.jpeg', 3.0, 2, 'not applicable', 0, 1, 1, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 1, 1),
('Firebirds Wood Fired Grill', '1 Towne Center Boulevard', 'Fredericksburg', 'VA', '22401', 'default.jpeg', 4.0, 3, 'http://www.firebirdsrestaurants.com', 0, 1, 1, 1, 1, 1, 1, 0, 5, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Fu Kien Gourmet', '435 Jefferson Davis Highway', 'Fredericksburg', 'VA', '22401', 'default.jpeg', 3.5, 1, 'not applicable', 1, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 3, 0, 5, 0, 0, 0, 0, 0, 2, 0),
('Glory Days', '9969 Jefferson Davis Hwy', 'Fredericksburg', 'VA', '22407', 'default.jpeg', 3.5, 3, 'http://www.glorydaysgrill.com/', 0, 1, 1, 0, 1, 1, 0, 0, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0),
('Great China', '1340 Central Park Boulevard', 'Fredericksburg', 'VA', '22401', 'default.jpeg', 3.0, 1, 'not applicable', 1, 1, 1, 1, 0, 0, 1, 0, 0, 0, 0, 4, 0, 4, 0, 0, 0, 0, 0, 1, 0),
('Hard Times Cafe', '314 Jefferson Davis Highway', 'Fredericksburg', 'VA', '22401', 'default.jpeg', 4.5, 2, 'http://www.hardtimes.com', 0, 1, 1, 0, 0, 1, 1, 0, 1, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0),
('Indian Queen Restaurant', '1964 William Street', 'Fredericksburg', 'VA', '22401', 'default.jpeg', 4.0, 2, 'not applicable', 0, 1, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 1, 0),
('Laziza', '4256 Plank Road', 'Fredericksburg', 'VA', '22407', 'default.jpeg', 4.0, 2, 'http://www.lazizaoffredericksburg.com', 1, 1, 1, 1, 0, 1, 1, 0, 0, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0),
('La Petite Auberge', '311 William Street', 'Fredericksburg', 'VA', '22401', 'default.jpeg', 4.0, 4, 'http://www.lapetiteaubergefredericksburg.com', 0, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0, 1, 0),
('McDonalds', '1212 Jefferson Davis Highway', 'Fredericksburg', 'VA', '22401', 'default.jpeg', 3.0, 1, 'http://www.mcdonalds.com', 0, 1, 1, 0, 1, 0, 1, 1, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0),
('Olde Towne Steak & Seafood', '1612 Caroline Street', 'Fredericksburg', 'VA', '22401', 'default.jpeg', 3.5, 4, 'http://www.oldetownesteakandseafood.com', 0, 1, 1, 1, 0, 0, 1, 0, 4, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4), 
('Outback Steakhouse’, '2941 Plank Rd’, 'Fredericksburg', 'VA', '22401', 'default.jpeg', 3, 3, ‘www.outback.com', 0, 1, 1, 1, 1, 1, 1, 0, 5, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
(‘Pancho Villa Mexican Restaurant', '2931 Plank Road', 'Fredericksburg', 'VA', '22401', 'default.jpeg', 4.0, 2, 'http://www.panchovilla.com', 0, 0, 1, 0, 1, 1, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 5, 2, 0),
(‘Parthenon Restaurant', '2024 Augustine Avenue', 'Fredericksburg', 'VA', '22401', 'default.jpeg', 4.0, 2, 'not applicable', 0, 1, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 2, 0),
('Renato Italian Restaurant', '422 William Street', 'Fredericksburg', 'VA', '22401', 'default.jpeg', 4.0, 3, 'http://www.ristoranterenato.com', 0, 1, 1, 1, 0, 1, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 0, 0, 3, 0),
('Sakura Japanese Steak House', '4540 Plank Road', 'Fredericksburg', 'VA', '22401', 'default.jpeg', 4.0, 3, 'http://www.sakurasteakhouse.com', 0, 0, 1, 1, 0, 0, 1, 0, 4, 1, 0, 3, 0, 0, 3, 0, 0, 0, 0, 0, 0), 
('Sammy Ts', '801 Caroline Street’, 'Fredericksburg', 'VA', '22401', 'default.jpeg', 3.5, 2, 'http://www.sammyts.com', 0, 1, 1, 0, 1, 0, 0, 0, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 0),
('TruLuvs - A Modern American Bistro', '1101 Sophia Street', 'Fredericksburg', 'VA', '22401', 'default.jpeg', 3.5, 2, 'http://www.truluvs.com', 0, 0, 1, 1, 1, 1, 0, 0, 3, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Vinnys Italian Grill & Pizzeria', '201 Kings Highway', 'Fredericksburg', 'VA', '22401', 'default.jpeg', 4.0, 2, 'http://www.fredericksburgpizza.com', 0, 1, 1, 0, 0, 0, 1, 0, 0, 4, 0, 0, 4, 0, 0, 0, 0, 0, 0, 1, 0);

-- --------------------------------------------------------