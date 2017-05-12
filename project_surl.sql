SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
CREATE TABLE `hits` (
  `uid` int(6) UNSIGNED NOT NULL,
  `surl` varchar(255) DEFAULT NULL,
  `DATE` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `url` (
  `uid` int(6) UNSIGNED NOT NULL,
  `surl` varchar(255) NOT NULL,
  `ourl` longtext NOT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
INSERT INTO `url` (`uid`, `surl`, `ourl`, `date`) VALUES
ALTER TABLE `hits`
  ADD PRIMARY KEY (`uid`);
ALTER TABLE `url`
  ADD PRIMARY KEY (`uid`);
ALTER TABLE `hits`
  MODIFY `uid` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;
ALTER TABLE `url`
  MODIFY `uid` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
