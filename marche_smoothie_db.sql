-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2019 at 06:43 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marche_smoothie_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `CART_ID` int(15) NOT NULL,
  `U_ID` int(15) NOT NULL,
  `SM_ID` int(15) NOT NULL,
  `DATE` date NOT NULL,
  `STATUS` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`CART_ID`, `U_ID`, `SM_ID`, `DATE`, `STATUS`) VALUES
(3, 5, 1, '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `favourite`
--

CREATE TABLE `favourite` (
  `ID` int(10) NOT NULL,
  `SM_ID` int(10) NOT NULL,
  `U_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `favourite`
--

INSERT INTO `favourite` (`ID`, `SM_ID`, `U_ID`) VALUES
(1, 1, 6),
(5, 3, 6);

-- --------------------------------------------------------

--
-- Table structure for table `smoothies`
--

CREATE TABLE `smoothies` (
  `ID` int(12) NOT NULL,
  `S_NAME` varchar(50) NOT NULL,
  `INGREDIENT` varchar(255) NOT NULL,
  `DESCRIPTION` varchar(255) NOT NULL,
  `IMAGE` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `smoothies`
--

INSERT INTO `smoothies` (`ID`, `S_NAME`, `INGREDIENT`, `DESCRIPTION`, `IMAGE`) VALUES
(1, 'Aztec Chocolate', 'Ingredients: 100% Dark Peruvian chocolate, Raw cocoa powder, Chipotle, Corn, Pear, Banana, Carob, Almond butter, Cinnamon, Vanilla extract\r\nContains: Tree Nuts', 'Our latest â€œchocolate-yâ€ creation hails from our Latin American friends. \r\nYou will love the dark and rich taste of chocolate inspired by traditional recipes. \r\nWhatâ€™s more? A tiny hint of spice that will wake up your tastebuds.', 'img/aztec-chocolate_s.jpg'),
(2, 'PB&J', 'Ingredients: Raspeberry, Cherry, Banana, Raw wild jungle peanuts, Peanut butter, Organic rye, dates, Red chard, Himalayan pink salt\r\nContains: Gluten, Peanuts', 'Retour en enfance avec ce mÃ©lange bien connu de beurre dâ€™arachide et de fruits rouges. \r\nVotre esprit se remÃ©more de beaux souvenirs pendant que votre corps, lui, fait le plein dâ€™Ã©nergie et vous prÃ©pare Ã  crÃ©er de nouveaux moments mÃ©morables.', 'img/pbj_s.jpg'),
(3, 'Mean Green', 'Ingredients: Kale, Cucumber, Green Apple, Celery, Lemon Juice, Ginger', 'Bright and refreshing, this powerful green smoothie gets its namesake from its bold bite of lemon and ginger. \r\nFull of minerals and vitamins, youâ€™ll soon realize Mean Green may not be as mean as you think... but rather may actually be your bodyâ€™s new', 'img/mean-green_s.jpg'),
(4, 'Cold Brew Crisp', 'Ingredients: Cold Brew Coffee, Banana, Cashew Butter, Vanilla Bean Paste, Organic Cacao Nibs, Roasted Coffee Beans, Organic Maca, Himalayan Pink Salt\r\nContains: Tree Nuts', 'Premium cold brewed coffee mixed with cocoa nibs and a touch of vanilla, come together for an exquisite coffee experience to jump start your morning. \r\nYouâ€™ll be so delighted with all the added superfood goodness brought to you by maca and cashews, this', 'img/cold-brew-crisp_s.jpg'),
(5, 'Carrot Ginger', 'Ingredients: Carrot, Banana, Ginger, Red Apple, Dates, Organic Chia Seeds, Lemon Juice, Nutmeg, Cinnamon', 'If you ever wondered what a slice of cake for breakfast would taste like, we got the perfect smoothie for you. \r\nOne sip and youâ€™ll swear you\'re biting into a decadent slice of carrot cake. \r\nBut skip the sugar and carbs; instead, we got for you fibre, ', 'img/carrot-ginger_s.jpg'),
(6, 'Macadamia Sunrise', 'Ingredients: Macadamia, Red Cherry, Avocado, Green Apple, Banana, Coconut Butter, Flax Seed, Himalayan Pink Salt\r\nContains: Tree Nuts', 'Rise and shine with this sunny rush of rich coconut, nutty macadamias, and sweet red cherries. \r\nYour body will thank you for the healthy doses of Vitamin B and Omega-3 as you radiate through your day.', 'img/macadamia-sunrise_s.jpg'),
(7, 'Boreal Berry', 'Ingredients: Blueberry, Raspberry, Strawberry, Banana, Kale, Sunflower Seeds, Maple Nuggets, Organic Chaga Powder', 'Berry lovers rejoice, youâ€™ll find your little slice of heaven with this blend inspired by our homeland. \r\nWild blueberries, strawberries, and raspberries join forces for a berry-ful supercharged breakfast packed with fibre and antioxidants.', 'img/boreal-berry_s.jpg'),
(8, 'Harvest Spice', 'Ingredients: Organic Pumpkin Seed Protein, Red Apple, Banana, Cinnamon, Organic Gluten-Free Rolled Oats, Organic Chia Seeds, Maple Nuggets', 'â€œComfortâ€ is the first word that comes to mind when tasting this autumn-inspired blend. \r\nA collection of fall-flavours with an extra punch of protein, it makes a perfect combination for those brisk sunny mornings.', 'img/harvest-spice_s.jpg'),
(9, 'Banana Pecan', 'Ingredients: Banana, Pecans, Greek yogurt, Butternut squash, Macadamia, Dates, Sea salt\r\nContains: Milk, Tree nuts', 'Bananas and pecans are paired together for a rich and flavourful smoothie. \r\nBut donâ€™t be fooled by this familiar tasting decadent treat, it packs a mean punch of minerals and nutrients that will nourish your body with the goodies it needs.', 'img/banana-pecan_s.jpg'),
(10, 'Tropical Storm', 'Ingredients: Passion fruit, Dragon fruit, Mango, Raspberry, Pineapple, Carott, American Saffron, Turmeric root', 'Sit back and take a flight directly to the sandy beaches of the tropics. \r\nChunks of mango, dragon fruit, pineapple, and passion fruit are combined together for a flavour storm that will send your tastebuds into overdrive.', 'img/tropical-storm_s.jpg'),
(11, 'Peanut Butter Cup', 'Ingredients: Cold brew coffee, 100% dark Peruvian chocolate, Peanut butter, Banana, Carob, Bok choy	\r\nContains: Peanuts', 'Delight yourself after a morning workout in this protein punch of peanut and chocolate goodness. \r\nRounded out with a little kick of caffeine, you\'ll wonder how you ever tackled the morning rush without it!', 'img/peanut-butter-cup_s.jpg'),
(12, 'Matcha Zen', 'Ingredients: Edamame, Honeydew Melon, Clementine, Japanese matcha, Naranjilla, Avocado, Spinach, Creamed pure honey, Lime juice, Thai basil\r\nContains: Soy', 'Take your morning routine to another level with this mindful and spirited green concoction featuring Japanese matcha, honeydew, Thai basil, and edamame. \r\nSo sit back, relax and let your body rejoice with this healthy beverage full of vitamins, fibre, and', 'img/matcha-zen_s.jpg'),
(13, 'Cocoa Mint Boost', 'Ingredients: Organic Cacao Nibs , Peppermint, Banana, Mango, Kale, Cashew Butter, Vanilla Bean Paste\r\nContains: Tree Nuts', 'A mint chocolate chip shake for breakfast? Who could blame you when it tastes so good and is brimming with antioxidants, vitamin A, and minerals. \r\nThis modern twist on the ice cream parlour favourite will make you fall in love with your mornings all over', 'img/cocoa-mint-boost_s.jpg'),
(14, 'PiÃ±a Colada', 'Ingredients: Pineapple, Coconut Butter, Lime Juice, Spinach, Wheatgrass', 'If we could ever put summer in a smoothie, the result would be this beach inspired beverage. \r\nLight and refreshing, youâ€™ll love the familiar taste of pineapple and coconut while appreciating the added source of iron and magnesium provided by the wheatg', 'img/pina-colada_s.jpg'),
(15, 'Acai Bellini', 'Ingredients: Peach, Organic Acai, Strawberries, Banana, Organic Gluten-Free Rolled Oats, Organic Hemp Seeds, Himalayan Pink Salt\r\nContains: Soy', 'Bright and fruity, get transported to a magical place with this delightful blend of peaches and strawberries. \r\nYour palate will appreciate the added touch of aÃ§ai that is high in antioxidants and Omega-3.', 'img/acai-bellini_s.jpg'),
(16, 'Mango Goji', 'Ingredients: Mango, Goji Berries, Pineapple, Papaya, Cashew Butter, Organic Camu Camu Powder, Lemon Juice, Himalayan Pink Salt\r\nContains: Tree Nuts', 'If youâ€™re yearning for a beach experience in a cup, this is the closest youâ€™ll get! \r\nBig chunks of mangos, papayas, and pineapples paired with the subtle tartness of vitamin A rich Goji berries will have you start planning your next vacation before y', 'img/mango-goji_s.jpg'),
(18, 'abc', 'mango', 'tasty smoohtie', 'img/user.png');

-- --------------------------------------------------------

--
-- Table structure for table `smoothies_order`
--

CREATE TABLE `smoothies_order` (
  `ID` int(10) NOT NULL,
  `U_ID` int(10) NOT NULL,
  `SM_1` int(10) NOT NULL,
  `SM_2` int(10) NOT NULL,
  `SM_3` int(10) NOT NULL,
  `SM_4` int(10) NOT NULL,
  `SM_5` int(10) NOT NULL,
  `SM_6` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `smoothies_order`
--

INSERT INTO `smoothies_order` (`ID`, `U_ID`, `SM_1`, `SM_2`, `SM_3`, `SM_4`, `SM_5`, `SM_6`) VALUES
(1, 5, 1, 2, 3, 4, 6, 7),
(2, 5, 1, 1, 3, 2, 3, 4),
(3, 6, 1, 2, 3, 5, 7, 9),
(4, 6, 1, 2, 10, 16, 15, 13),
(5, 5, 1, 2, 3, 4, 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(15) NOT NULL,
  `F_NAME` varchar(25) NOT NULL,
  `L_NAME` varchar(25) NOT NULL,
  `CONTACT_NO` varchar(20) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `PASSWORD` varchar(15) NOT NULL,
  `ADDRESS1` varchar(60) NOT NULL,
  `ADDRESS2` varchar(60) NOT NULL,
  `CITY` varchar(15) NOT NULL,
  `PROVINCE` varchar(15) NOT NULL,
  `POSTAL_CODE` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `F_NAME`, `L_NAME`, `CONTACT_NO`, `EMAIL`, `PASSWORD`, `ADDRESS1`, `ADDRESS2`, `CITY`, `PROVINCE`, `POSTAL_CODE`) VALUES
(5, 'tushar', 'more', '5145761298', 'tush1298@gmail.com', '123', '1832 LINCOLN AVENUE,', 'APARTMENT 20', 'montreal', 'quebec', 'H3H1H3'),
(6, 'vaibhavi', 'khatri', '1457812989', 'vaibhi298@gmail.com', '123', '1832 LINCOLN AVENUE,', 'APARTMENT 20', 'montreal', 'Quebec', 'h3h1h3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`CART_ID`),
  ADD KEY `cart_fk_user_id` (`U_ID`),
  ADD KEY `cart_fk_smoothie_id` (`SM_ID`);

--
-- Indexes for table `favourite`
--
ALTER TABLE `favourite`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `smoothies`
--
ALTER TABLE `smoothies`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `smoothies_order`
--
ALTER TABLE `smoothies_order`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `CART_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `favourite`
--
ALTER TABLE `favourite`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `smoothies`
--
ALTER TABLE `smoothies`
  MODIFY `ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `smoothies_order`
--
ALTER TABLE `smoothies_order`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_fk_smoothie_id` FOREIGN KEY (`SM_ID`) REFERENCES `smoothies` (`ID`),
  ADD CONSTRAINT `cart_fk_user_id` FOREIGN KEY (`U_ID`) REFERENCES `users` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
