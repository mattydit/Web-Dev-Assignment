CREATE TABLE `account` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `order` ( `order_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, `id` int(11) NOT NULL, `order1` varchar(100), `order2` varchar(100), `order3` varchar(100), `order4` varchar(100), `order5` varchar(100), `order6` varchar(100), `order7` varchar(100), `order8` varchar(100), `order9` varchar(100), FOREIGN KEY (id) REFERENCES account(id) ) ENGINE=InnoDB DEFAULT CHARSET=latin1
