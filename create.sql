-- 
-- Table structure for table `scraffiliateusr`
-- 

CREATE TABLE `scraffiliateusr` (
  `usrid` bigint(20) NOT NULL auto_increment,
  `usract` int(11) NOT NULL default '0',
  `usrnam` varchar(100) NOT NULL default '',
  `usrpwd` varchar(100) NOT NULL default '',
  `usractkey` varchar(100) NOT NULL default '',
  `usrip` varchar(100) NOT NULL default '',
  `usreml` varchar(100) NOT NULL default '',
  `usrjondtetme` datetime NOT NULL default '0000-00-00 00:00:00',
  `usrinvby` int(11) NOT NULL default '0',
  `usrlstvstdtetme` datetime NOT NULL default '0000-00-00 00:00:00',
  `usrvst` int(11) NOT NULL default '0',
  `usrvsttdy` int(11) NOT NULL default '0',
  `usrprflstvstdtetme` datetime NOT NULL default '0000-00-00 00:00:00',
  `usrprfvst` int(11) NOT NULL default '0',
  `usrprfvsttdy` int(11) NOT NULL default '0',
  `usrinvlstsnddtetme` datetime NOT NULL default '0000-00-00 00:00:00',
  `usrinvsnd` int(11) NOT NULL default '0',
  `usrinvsndtdy` int(11) NOT NULL default '0',
  `usrinvurllstclkdtetme` datetime NOT NULL default '0000-00-00 00:00:00',
  `usrinvurlclk` int(11) NOT NULL default '0',
  `usrinvurlclktdy` int(11) NOT NULL default '0',
  `usrinvsndmax` int(11) NOT NULL default '0',
  `usrpoints` float NOT NULL default '0',
  `usrpointsindirect` float NOT NULL default '0',
  `usr24` varchar(100) NOT NULL default '',
  `usr25` varchar(100) NOT NULL default '',
  `usr26` varchar(100) NOT NULL default '',
  `usr27` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`usrid`)
) TYPE=MyISAM AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `scraffiliateusr`
-- 

INSERT INTO `scraffiliateusr` (`usrid`, `usract`, `usrnam`, `usrpwd`, `usractkey`, `usrip`, `usreml`, `usrjondtetme`, `usrinvby`, `usrlstvstdtetme`, `usrvst`, `usrvsttdy`, `usrprflstvstdtetme`, `usrprfvst`, `usrprfvsttdy`, `usrinvlstsnddtetme`, `usrinvsnd`, `usrinvsndtdy`, `usrinvurllstclkdtetme`, `usrinvurlclk`, `usrinvurlclktdy`, `usrinvsndmax`, `usrpoints`, `usrpointsindirect`, `usr24`, `usr25`, `usr26`, `usr27`) VALUES 
(1001, 1, 'user', 'password', '', '', '', '0000-00-00 00:00:00', 0, '2008-02-24 19:05:46', 10, 11, '2008-02-24 07:40:54', 2, 1, '2008-02-24 19:06:09', 2, 1, '2008-02-24 17:40:27', 2, 1, 5, 20, 9, '', '', '', ''),
(1002, 1, 'user2', 'password', '', '', '', '0000-00-00 00:00:00', 1001, '0000-00-00 00:00:00', 0, 0, '2008-02-24 19:05:58', 4, 8, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, 2, 11, 0, '', '', '', ''),
(1003, 1, 'user3', 'password', '', '', '', '0000-00-00 00:00:00', 1001, '0000-00-00 00:00:00', 0, 0, '2008-02-24 07:22:42', 1, 1, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, 5, 0, 0, '', '', '', ''),
(1004, 1, 'user4', 'password', '', '', '', '0000-00-00 00:00:00', 1001, '0000-00-00 00:00:00', 0, 0, '2008-02-24 07:28:29', 1, 1, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, 3, 0, 0, '', '', '', ''),
(1005, 1, 'user5', 'password', '', '', '', '0000-00-00 00:00:00', 1002, '0000-00-00 00:00:00', 0, 0, '2008-02-24 07:29:26', 1, 1, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, 4, 10, 0, '', '', '', ''),
(1006, 1, 'user6', 'password', '', '', '', '0000-00-00 00:00:00', 1003, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, 5, 0, 0, '', '', '', ''),
(1007, 1, 'user7', 'password', '', '', '', '0000-00-00 00:00:00', 1004, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, 1, 0, 0, '', '', '', ''),
(1008, 1, 'user8', 'password', '', '', '', '0000-00-00 00:00:00', 1004, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, 2, 0, 0, '', '', '', ''),
(1009, 1, 'user9', 'password', '', '', '', '0000-00-00 00:00:00', 1004, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, 3, 0, 0, '', '', '', ''),
(1010, 1, 'user10', 'password', '', '', '', '0000-00-00 00:00:00', 1004, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, 5, 0, 0, '', '', '', ''),
(1011, 1, 'user11', 'password', '', '', '', '0000-00-00 00:00:00', 1005, '0000-00-00 00:00:00', 0, 0, '2008-02-20 12:38:26', 0, 1, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, 4, 10, 0, '', '', '', ''),
(1012, 1, 'user12', 'password', '', '', '', '0000-00-00 00:00:00', 1005, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, 5, 0, 0, '', '', '', ''),
(1013, 1, 'user13', 'password', '', '', '', '0000-00-00 00:00:00', 1008, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, 4, 0, 0, '', '', '', ''),
(1014, 1, 'user14', 'password', '', '', '', '0000-00-00 00:00:00', 1009, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, 3, 0, 0, '', '', '', ''),
(1015, 1, 'user15', 'password', '', '', '', '0000-00-00 00:00:00', 1014, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, 2, 0, 0, '', '', '', '');













-- --------------------------------------------------------

--
-- Table structure for table `scraffiliateurlclk`
--

CREATE TABLE IF NOT EXISTS `scraffiliateurlclk` (
  `urlclkid` bigint(20) NOT NULL auto_increment,
  `urlclkusrid` bigint(20) NOT NULL,
  `urlclkipaddress` varchar(50) NOT NULL,
  `urlclktmestmp` varchar(50) NOT NULL default '0',
  `urlclk4` varchar(50) NOT NULL,
  PRIMARY KEY  (`urlclkid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `scraffiliateurlclk`
--
