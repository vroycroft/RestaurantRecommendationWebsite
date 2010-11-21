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
  `image` varchar(25) NOT NULL DEFAULT "default.jpg",
  `average_user_rating` DEC(3,1) NOT NULL,
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
('Aladin', '2032 Plank Road', 'Fredericksburg', 'VA', '22401', 'Aladin.jpg', 4.0, 2, 'not applicable', 1, 1, 1, 0, 1, 1, 0, 0, 0, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0),
('Asia Cafe', '840 Warrenton Road', 'Fredericksburg', 'VA', '22406', 'Asia_Cafe.jpg', 3.5, 2, 'not applicable', 1, 1, 1, 1, 0, 0, 1, 0, 0, 0, 0, 4, 0, 4, 4, 0, 0, 0, 0, 0, 0),
('Barefoot Greens Restaurant', '1017 Sophia Street', 'Fredericksburg', 'VA', '22401', 'barefootgreens.jpg', 4.0, 1, 'not applicable', 0, 1, 1, 0, 1, 0, 1, 2, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 4),
('Bangkok Cafe', '825 Caroline Street' , 'Fredericksburg', 'VA', '22401', 'Bangkok_Cafe.jpg', 3.5, 2, 'http://Bangkokcafe.com', 0, 1, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 4, 0, 0, 0, 0, 0, 1, 0),
('Basilico', '2577 Cowan Boulevard', 'Fredericksburg', 'VA', '22401', 'basilico.jpg', 4.0, 2, 'http://www.fredericksburgitaliandeli.com', 1, 1, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 0, 0, 2, 0),
('Bravo Cucina', '1 Towne Centre Boulevard', 'Fredericksburg', 'VA', '22407', 'Bravo.jpg', 3.5, 2, 'http://www.bravoitalian.com', 0, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 0, 0, 2, 0),
('Brocks Riverside Grill', '503 Sophia Street', 'Fredericksburg', 'VA', '22401', 'brocks.jpg', 3.5, 2, 'http://www.brocksgrill.com', 0, 0, 1, 1, 1, 1, 0, 0, 5, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5),
('Burger King', '3052 Plank Road', 'Fredericksburg', 'VA', '22401', 'Burger_King.jpg', 3.0, 1, 'http://www.burgerking.com', 0, 1, 1, 0, 0, 0, 1, 5, 1, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0),
('Capital Ale House', '917 Caroline Street' , 'Fredericksburg', 'VA', '22401', 'default.jpg', 4.0, 2, 'not applicable', 0, 1, 1, 0, 0, 1, 0, 0, 1, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('Carlos OKellys Mexican Cafe', '2306 Plank Road', 'Fredericksburg', 'VA', '22401', 'carlosOKellys.jpg', 2.0, 2, 'http://www.carlosokellys.com', 0, 1, 1, 0, 0, 1, 1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 1, 0),
('Chick-fil-A', '9900 Southpoint Parkway', 'Fredericksburg', 'VA', '22407', 'Chick_Fil_A2.jpg', 4.0, 1, 'http://www.chick-fil-a.com', 0, 1, 1, 0, 0, 0, 1, 5, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Chipotle', '3051 Plank Road', 'Fredericksburg', 'VA', '22401', 'Chipotle2.jpg', 4, 1, 'http://www.chipotle.com', 0, 1, 0, 0, 0, 0, 0, 3, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 5, 1, 0),
('El Charro', '4611 Southpoint Parkway', 'Fredericksburg', 'VA', '22408', 'El_Charro.jpg', 3.0, 2, 'not applicable', 0, 1, 1, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 1, 1),
('Firebirds Wood Fired Grill', '1 Towne Center Boulevard', 'Fredericksburg', 'VA', '22401', 'Firebirds.bmp', 4.0, 3, 'http://www.firebirdsrestaurants.com', 0, 1, 1, 1, 1, 1, 1, 0, 5, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Five Guys Hamburgers & Fries', '1661 Carl D Silver Parkway', 'Fredericksburg', 'VA', '22401', 'fiveGuys.jpg', 4.5, 1, 'http://www.fiveguys.com', 0, 1, 1, 0, 0, 0, 1, 5, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Fu Kien Gourmet', '435 Jefferson Davis Highway', 'Fredericksburg', 'VA', '22401', 'Fu_Kien.bmp', 3.5, 1, 'not applicable', 1, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 3, 0, 5, 0, 0, 0, 0, 0, 2, 0),
('Glory Days', '9969 Jefferson Davis Highway', 'Fredericksburg', 'VA', '22407', 'Glory_Days_Grill.jpg', 3.5, 3, 'http://www.glorydaysgrill.com/', 0, 1, 1, 0, 1, 1, 0, 0, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0),
('Great China', '1340 Central Park Boulevard', 'Fredericksburg', 'VA', '22401', 'Great_China.jpg', 3.0, 1, 'not applicable', 1, 1, 1, 1, 0, 0, 1, 0, 0, 0, 0, 4, 0, 4, 0, 0, 0, 0, 0, 1, 0),
('Guru Indian Cuisine', '1320 Central Park Boulevard', 'Fredericksburg', 'VA', '22401', 'guru.jpg', 2.5, 2, 'http://guruindiancuisine.com', 0, 1, 1, 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 1, 0),
('Hard Times Cafe', '314 Jefferson Davis Highway', 'Fredericksburg', 'VA', '22401', 'Hard_Times.jpg', 4.5, 2, 'http://www.hardtimes.com', 0, 1, 1, 0, 0, 1, 1, 0, 1, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0),
('India Queen Restaurant', '1964 William Street', 'Fredericksburg', 'VA', '22401', 'India_Queen.jpg', 4.0, 2, 'not applicable', 0, 1, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 1, 0),
('Kabob City','737 Warrenton Road' , 'Fredericksburg', 'VA', '22406', 'Kabob_City.Bmp', 4.0, 2, 'not applicable', 0, 1, 1, 0, 0, 0, 0, 1, 0, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0),
('Laziza', '4256 Plank Road', 'Fredericksburg', 'VA', '22407', 'Laziza.jpg', 4.0, 2, 'http://www.lazizaoffredericksburg.com', 1, 1, 1, 1, 0, 1, 1, 0, 0, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0),
('La Petite Auberge', '311 William Street', 'Fredericksburg', 'VA', '22401', 'La_Petite_Auberge.jpg', 4.0, 4, 'http://www.lapetiteaubergefredericksburg.com', 0, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0, 1, 0),
('Ledo Pizza', '2801 Plank Road' , 'Fredericksburg', 'VA', '22401', 'default.jpg', 3.0, 1.5, 'not applicable', 0, 1, 1, 0, 0, 0, 1, 1, 0, 1, 0, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0),
('Longhorn', '10012 Southpoint Parkway', 'Fredericksburg', 'VA', '22407', 'default.jpg', 3.5, 2, 'not applicable', 0, 1, 1, 0, 0, 1, 1, 0, 5, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('McDonalds', '1212 Jefferson Davis Highway', 'Fredericksburg', 'VA', '22401', 'McDonalds.jpg', 3.0, 1, 'http://www.mcdonalds.com', 0, 1, 1, 0, 1, 0, 1, 5, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0),
('Mexico', '9825 Jefferson Davis Hwy', 'Fredericksburg', 'VA', '22408', 'Mexico.Bmp', 3.5, 2, 'http://www.mexico-restaurant.com/', 0, 1, 1, 1, 0, 1, 1, 1, 0,1, 0, 0, 0, 0, 0, 0, 0, 0, 5, 2, 1),
('Otani', '12131 Amos Alane' , 'Fredericksburg', 'VA', '22401', 'Otani.jpg', 3.5, 3, 'not applicable', 0, 1, 1, 1, 0, 0, 1, 0, 4, 1, 0, 0, 0, 0, 4, 0, 0, 0, 0, 1, 1),
('Olde Towne Steak & Seafood', '1612 Caroline Street', 'Fredericksburg', 'VA', '22401', 'Olde_Town_Steak_and_Seafood.jpg', 3.5, 4, 'http://www.oldetownesteakandseafood.com', 0, 1, 1, 1, 0, 0, 1, 0, 4, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4), 
('Outback Steakhouse', '2941 Plank Rd', 'Fredericksburg', 'VA', '22401', 'Outback2.jpg', 3, 3, 'http://www.outback.com', 0, 1, 1, 1, 1, 1, 1, 0, 5, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('Ozeki Japanese Steak & Seafood House', '10119 Southpoint Parkway', 'Fredericksburg', 'VA', '22407', 'default.jpg', 3.5, 2, 'http://www.ozekijapanesesteakhouse.com', 0, 0, 1, 1, 0, 0, 1, 0, 5, 1, 0, 3, 0, 0, 4, 0, 0, 0, 0, 0, 5),
('Pancho Villa Mexican Restaurant', '2931 Plank Road', 'Fredericksburg', 'VA', '22401', 'Pancho_Villa.jpg', 4.0, 2, 'http://www.panchovilla.com', 0, 0, 1, 0, 1, 1, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 5, 2, 0),
('Panera Bread','1760 Carl D Silver Parkway' , 'Fredericksburg', 'VA', '22401', 'Panera_Bread.jpg', 4.0, 2, 'http://www.panerabread.com', 0, 1, 0, 0, 0, 0, 0, 1, 0, 4, 0, 0, 0, 0, 0, 0, 1, 0, 0, 2, 0),
('Parthenon Restaurant', '2024 Augustine Avenue', 'Fredericksburg', 'VA', '22401', 'Parthenon.jpg', 4.0, 2, 'not applicable', 0, 1, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 2, 0),
('Red Lobster', '3109 Mall Drive', 'Fredericksburg', 'VA', '22401', 'Red_Lobster.jpg', 4.5, 3, 'http://www.redlobster.com', 0, 1, 1, 0, 1, 1, 1, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 5),
('Red Robin', '10109 Jefferson Davis Highway', 'Fredericksburg', 'VA', '22407', 'redRobin.jpg', 4.5, 1, 'http://www.redrobin.com', 0, 1, 1, 0, 1, 1, 1, 4, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0),
('Renato Italian Restaurant', '422 William Street', 'Fredericksburg', 'VA', '22401', 'Renatos.jpg', 4.0, 3, 'http://www.ristoranterenato.com', 0, 1, 1, 1, 0, 1, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 0, 0, 3, 0),
('Rodangos Steakhouse', '1259 Carl D Silver Parkway' , 'Fredericksburg', 'VA', '22401', 'Rodangos_Steakhouse.jpg', 4, 2, ' not applicable', 0, 1, 1, 0, 1, 1, 1, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0),
('Sakura Japanese Steak House', '4540 Plank Road', 'Fredericksburg', 'VA', '22401', 'Sakura.jpg', 4.0, 3, 'http://www.sakurasteakhouse.com', 0, 0, 1, 1, 0, 0, 1, 0, 4, 1, 0, 3, 0, 0, 3, 0, 0, 0, 0, 0, 0), 
('Sammy Ts', '801 Caroline Street', 'Fredericksburg', 'VA', '22401', 'Sammy_Ts.jpg', 3.5, 2, 'http://www.sammyts.com', 0, 1, 1, 0, 1, 0, 0, 0, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 0),
('Shoneys', '2203 Plank Road' , 'Fredericksburg', 'VA', '22401', 'default.jpg', 2.0, 2, 'http://www.shoneys.com', 0, 1, 1, 0, 0, 0, 1, 0, 1, 3, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1),
('Smokey Bones', '1801 Carl D Silver Parkway', 'Fredericksburg', 'VA', '22401', 'smokeybones.jpg', 4, 2, 'http://www.smokeyBones.com', 0, 1, 1, 0, 0, 1, 1, 1, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('Soup and Taco', '813 Caroline Street' , 'Fredericksburg', 'VA', '22401', 'default.jpeg', 4.0, 3, 'not applicable', 0, 1, 0, 0, 1, 1, 1, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 4, 1, 0),
('Sunset Thai', '1885 Carl D Silver Parkway' , 'Fredericksburg', 'VA', '22401', 'Sunset_Thai.jpg', 3, 2, ' http://Bangkokcafe.com', 0, 1, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 4, 0, 0, 0, 0, 0, 1, 0),
('Taco Bell', '543 Jefferson Davis Highway', 'Fredericksburg', 'VA', '22401', 'tacobell.jpg', 4, 1, 'http://www.tacobell.com', 0, 1, 1, 0, 0, 0, 1, 3, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 4, 2, 0),
('The Melting Pot', '1618 Carl D Silver Parkway', 'Fredericksburg', 'VA', '22401', 'meltingPot.png', 4.0, 3, 'http://www.meltingpot.com', 0, 0, 1, 1, 0, 1, 0, 1, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0),
('TruLuvs - A Modern American Bistro', '1101 Sophia Street', 'Fredericksburg', 'VA', '22401', 'TruLuvs.jpg', 3.5, 2, 'http://www.truluvs.com', 0, 0, 1, 1, 1, 1, 0, 0, 3, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Umi Japanese Fine Dining', '1500 Jefferson Davis Highway', 'Fredericksburg', 'VA', '22401', 'default.jpg', 4.0, 2, 'not applicable', 0, 1, 1, 1, 0, 0, 1, 0, 0, 0, 0, 5, 0, 0, 5, 0, 0, 0, 0, 1, 0), 
('Vinnys Italian Grill & Pizzeria', '201 Kings Highway', 'Fredericksburg', 'VA', '22401', 'Vinnys.jpg', 4.0, 2, 'http://www.fredericksburgpizza.com', 0, 1, 1, 0, 0, 0, 1, 0, 0, 4, 0, 0, 4, 0, 0, 0, 0, 0, 0, 1, 0);

-- --------------------------------------------------------


--
-- Table structure for table `Users`
--


CREATE TABLE IF NOT EXISTS `Restaurants`.`Users` (
  `user_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
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
  PRIMARY KEY (`user_id`)
); 

--
-- Dumping data for table `Users`
--

INSERT INTO `Restaurants`.`Users` (`first_name`, `last_name`, `username`, `password`, `price`,
  `delivery`,
  `takeout`,
  `accommodate_groups`,
  `reservations`,
  `outside_seating`,
  `bar`,
  `kids`,
  `fast_food`,
  `steakhouse_influence`,
  `american_influence`,
  `middle_eastern_influence`,
  `asian_influence`,
  `italian_influence`,
  `chinese_influence`,
  `japanese_influence`,
  `indian_influence`,
  `french_influence`,
  `greek_influence`,
  `mexican_influence`,
  `vegetarian_influence`,
  `seafood_influence`) VALUES
('Vanessa', 'Roycroft', 'vr', SHA('vr'), 2, 1, 1, 0, 0, 1, 0, 0, 2, 5, 5, 2, 3, 5, 5, 5, 3, 1, 1, 4, 1, 3),
('Gary', 'Mills', 'gm', SHA('gm'), 2, 1, 1, 0, 0, 0, 1, 1, 2, 3, 3, 1, 3, 4, 3, 4, 1, 1, 3, 4, 1, 4),
('Amy', 'Sams', 'as', SHA('as'), 1, 0, 1, 0, 0, 1, 0, 0, 2, 4, 5, 1, 4, 3, 4, 1, 0, 1, 1, 4, 1, 5),
('Josh', 'Abbott', 'ja', SHA('ja'), 1, 0, 0, 0, 0, 0, 0, 0, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5),
('Moe', 'Howard', 'mh', SHA('mh'),    3, 1, 1, 1, 1, 1, 0, 0, 4, 5, 5, 0, 2, 4, 2, 3, 1, 3, 1, 1, 1, 5),
('Larry', 'Fine', 'lf', SHA('lf'),    2, 1, 0, 1, 0, 1, 1, 0, 2, 2, 3, 4, 1, 5, 3, 1, 1, 1, 3, 2, 1, 5),
('Curly', 'Howard', 'ch', SHA('ch'),  1, 1, 0, 1, 0, 1, 0, 1, 1, 4, 3, 3, 3, 3, 3, 3, 3, 3, 3, 1, 1, 2),
('Homer', 'Simpson', 'hs', SHA('hs'), 1, 1, 0, 1, 0, 0, 1, 0, 2, 5, 5, 0, 0, 3, 4, 1, 0, 1, 1, 4, 0, 3),
('Marge', 'Simpson', 'ms', SHA('ms'), 3, 1, 1, 0, 1, 0, 0, 0, 5, 1, 5, 0, 3, 3, 4, 1, 0, 1, 1, 2, 5, 4),
('Bart', 'Simpson', 'bs', SHA('bs'),  1, 1, 0, 0, 0, 1, 0, 1, 5, 2, 5, 0, 2, 1, 1, 1, 0, 1, 1, 2, 0, 0);

--
-- Table structure for table `UserRatings`
--

CREATE TABLE IF NOT EXISTS `Restaurants`.`UserRatings` (
  `user_id` smallint(6) NOT NULL,
  `restaurant_id` smallint(6) NOT NULL,
  `rating` INT NOT NULL);
