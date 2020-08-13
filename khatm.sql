CREATE DATABASE IF NOT EXISTS khatm;


--
-- Table structure for table `katmtitle`
--

CREATE TABLE `katmtitle` (
  `ID` int(25) NOT NULL AUTO_INCREMENT PRIMARY,
  `Name` varchar(300) NOT NULL,
  `Start` date NOT NULL,
  `end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Table structure for table `entekhabj`
--

CREATE TABLE `entekhabj` (
  `ID` int(30) NOT NULL AUTO_INCREMENT PRIMARY,
  `khatmID` int(30) NOT NULL,
  `name` text NOT NULL,
  `joze` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `khatmJoze`
--

CREATE TABLE `khatmJoze` (
  `ID` int(20) NOT NULL AUTO_INCREMENT PRIMARY,
  `joze` int(20) NOT NULL,
  `khatmID` int(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
