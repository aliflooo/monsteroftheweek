use aff13;

SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS items (
  id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  name varchar(255) NOT NULL,
  price decimal(3, 2) NOT NULL
);

--
-- Dumping data for table `items`
--

-- INSERT INTO items (id, name, price) VALUES
-- (1, 'Using Magic For Dummies', 24.99),
-- (2, 'Leather Jacket', 42.00),
-- (3, 'Mustang Keychain', 1.99),
-- (4, 'Welcome Mat', 0.99),
-- (5, 'Encyclopedia Britannica, Weird Edition', 24.99),
-- (6, 'Rubik’s Cube', 4.99),
-- (7, 'Magic 8-Ball', 7.25),
-- (8, 'Wilhelm’s Spectral Walkman', 42.00),
-- (9, 'Adder Stone', 13.99),
-- (10, 'The First Crossing', 16.99),
-- (11, 'Eldritch Waffle House Mug', 6.99),
-- (12, 'Magic Eye Glasses', 10.99);

SELECT * FROM items;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE users;
CREATE TABLE IF NOT EXISTS users (
  id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  name varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  password varchar(255) NOT NULL
);

--
-- Dumping data for table `users`
--

INSERT INTO users (id, name, email, password) VALUES
(1, 'Aliyah Flores', 'test@gmail.com', 'test20');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

DROP TABLE users_items;
CREATE TABLE IF NOT EXISTS users_items (
  id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  user_id int(11) NOT NULL,
  item_id int(11) NOT NULL,
  status enum('Added to cart','Confirmed') NOT NULL
);
--
-- Dumping data for table `users_items`
--

-- INSERT INTO users_items (id, user_id, item_id, status) VALUES
-- (7, 3, 3, 'Added to cart'),
-- (8, 3, 4, 'Added to cart'),
-- (9, 3, 5, 'Added to cart'),
-- (10, 3, 11, 'Added to cart'),
-- (11, 1, 9, 'Added to cart'),
-- (12, 1, 2, 'Added to cart'),
-- (13, 1, 8, 'Added to cart'),
-- (14, 4, 2, 'Confirmed'),
-- (18, 5, 11, 'Added to cart'),
-- (20, 5, 5, 'Added to cart');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--

--
-- Indexes for table `users`
--

--
-- Indexes for table `users_items`
--
ALTER TABLE users_items
  ADD KEY user_id (user_id, item_id),
  ADD KEY item_id (item_id);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--

--
-- AUTO_INCREMENT for table `users`
--

--
-- AUTO_INCREMENT for table `users_items`
--

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_items`
--
ALTER TABLE users_items
  ADD CONSTRAINT users_items_ibfk_1 FOREIGN KEY (user_id) REFERENCES users (id),
  ADD CONSTRAINT users_items_ibfk_2 FOREIGN KEY (item_id) REFERENCES items (id);
COMMIT;
