CREATE DATABASE IF NOT EXISTS LibraryData;

use LibraryData;
CREATE TABLE IF NOT EXISTS `item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `typeId` int(11) NOT NULL,
  `ISBN` varchar(13) DEFAULT NULL,
  `ISSN` varchar(10) DEFAULT NULL,
  `categoryId` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `author` varchar(50) NOT NULL,
  `publisher` varchar(50) NOT NULL,
  `pubDate` date NOT NULL,
  `copies` int(11) NOT NULL,
  `availabilityStatus` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `isbn` (`ISBN`),
  UNIQUE KEY `ISSN` (`ISSN`),
  KEY `typeId` (`typeId`,`categoryId`),
  KEY `isbn_2` (`ISBN`),
  KEY `categoryId` (`categoryId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `typeId`, `ISBN`, `ISSN`, `categoryId`, `title`, `author`, `publisher`, `pubDate`, `copies`, `availabilityStatus`, `image`) VALUES
(2, 1, '9780131103627', NULL, 1, 'C Programming Language', 'Kernighan Ritchie', 'Pearson Education', '2014-01-03', 5, 'A', 'ckernighan.jpg'),
(3, 1, '9780596009205', NULL, 1, 'Head First Java', 'Kathy Sierra,Bert Bates', 'OReilly Media', '2014-07-15', 4, 'A', 'hfjava.jpg'),
(4, 1, '9781118407813', NULL, 1, 'Beginning Programming with Java For Dummies', 'Barry Burd', 'Wiley', '2013-06-23', 4, 'A', 'javadummies.jpg'),
(5, 1, '9781449370824', NULL, 1, 'Java In A Nutshell', 'Benjamin J Evans,David Flanagan', 'OReilly Media', '2014-07-25', 5, 'A', 'javanutshell.jpg'),
(6, 1, '9781118203903', NULL, 1, 'Professional Mobile Application Development', 'Jeff McWherter,Scott Gowell', 'Wiley', '2012-09-04', 5, 'A', 'pmad.jpg'),
(7, 1, '9780321833891', NULL, 1, 'Php And Mysql WebDevelopment', 'LauraThomson,Luke Welling', 'Pearson Education', '2013-11-28', 5, 'A', 'phpmysql.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `item_category`
--

CREATE TABLE IF NOT EXISTS `item_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoryName` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `item_category`
--

INSERT INTO `item_category` (`id`, `categoryName`) VALUES
(1, 'Computer'),
(2, 'Science');

-- --------------------------------------------------------

--
-- Table structure for table `item_type`
--

CREATE TABLE IF NOT EXISTS `item_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `typeName` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `item_type`
--

INSERT INTO `item_type` (`id`, `typeName`) VALUES
(1, 'Book'),
(2, 'Journal');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` varchar(50) NOT NULL,
  `forename` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertypeId` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `usertypeId` (`usertypeId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `forename`, `surname`, `email`, `password`, `usertypeId`) VALUES
('555555', 'srinivasa', 'valluri', 's@s.com', 'sv', 2),
('6722417', 'puneet', 'kalva', 'p@gmail.com', 'pkalva', 3),
('888888', 'hemanth', 'kona', 'hemanth@gmail.com', 'hk', 2),
('999999', 'ravi', 'naga', 'ndogi@gmail.com', 'qwertyu', 1),
('admin', 'administrator', 'administrator', 'admin@admin.com', 'admin@123', 1),
('svalluri-cc', 'sphanindra', 'valluri', 'svalluri-cc@conestogac.on.ca', 'Vspnrajun27', 3);

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE IF NOT EXISTS `usertype` (
  `typeId` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`typeId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`typeId`, `type`) VALUES
(1, 'administrator'),
(2, 'student'),
(3, 'faculty');

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE IF NOT EXISTS `user_account` (
  `userId` varchar(50) NOT NULL,
  `takenItems` int(11) NOT NULL DEFAULT '0',
  `maxItems` int(11) NOT NULL DEFAULT '3',
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`userId`, `takenItems`, `maxItems`) VALUES
('555555', 3, 3),
('6722417', 3, 3),
('888888', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_item`
--

CREATE TABLE IF NOT EXISTS `user_item` (
  `userId` varchar(50) NOT NULL,
  `itemId` int(11) NOT NULL,
  `issuedDate` date NOT NULL,
  `dueDate` date NOT NULL,
  PRIMARY KEY (`userId`,`itemId`),
  KEY `userId` (`userId`),
  KEY `itemId` (`itemId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_item`
--

INSERT INTO `user_item` (`userId`, `itemId`, `issuedDate`, `dueDate`) VALUES
('555555', 2, '2014-08-03', '2014-08-11'),
('555555', 3, '2014-08-03', '2014-08-21'),
('555555', 4, '2014-08-03', '2014-08-22'),
('6722417', 2, '2014-08-03', '2014-08-14'),
('6722417', 3, '2014-08-03', '2014-08-07'),
('6722417', 4, '2014-08-03', '2014-08-25'),
('888888', 2, '2014-08-03', '2014-08-06'),
('888888', 3, '2014-08-03', '2014-08-12'),
('888888', 4, '2014-08-03', '2014-08-21');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`typeId`) REFERENCES `item_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `item_ibfk_2` FOREIGN KEY (`categoryId`) REFERENCES `item_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`usertypeId`) REFERENCES `usertype` (`typeId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_account`
--
ALTER TABLE `user_account`
  ADD CONSTRAINT `user_account_ibfk_4` FOREIGN KEY (`userId`) REFERENCES `user_item` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_item`
--
ALTER TABLE `user_item`
  ADD CONSTRAINT `user_item_ibfk_3` FOREIGN KEY (`userId`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_item_ibfk_4` FOREIGN KEY (`itemId`) REFERENCES `item` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

