SET time_zone = "+00:00";

--
-- Database: `db_instalike`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_photos`
--

CREATE TABLE IF NOT EXISTS tbl_photos (
	img_id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    img_name varchar(255) NOT NULL,
    img_path varchar(255) NOT NULL,
    img_type varchar(255) NOT NULL,
    img_title varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_photos`
--

-- INSERT INTO tbl_photos (img_id, img_name, img_path, img_type, img_title) VALUES
-- (1, 'Wilhelm', 'images/wilhelm.jpeg', 'image/jpeg', 'Wilhelm Weber'),
-- (2, 'Cody', 'images/cody.jpg', 'image/jpeg', 'Cody Johnson-Lee'),
-- (3, 'Khana', 'images/khana.jpg', 'image/jpeg', 'Khana Kesavan'),
-- (4, 'Theo', 'images/theo.jpg', 'image/jpeg', 'Theonidas Theotokopolous'),
-- (5, 'Erin', 'images/erin.jpg', 'image/jpeg', 'Erin Lawrence');

SELECT * FROM tbl_photos;
--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_photos`
--

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_photos`

