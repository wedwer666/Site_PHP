<?php
include "db.php";

mysqli_query($conn, "CREATE TABLE `category` (
  `id_cat` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;");

$one ="CREATE VIEW up  AS SELECT id_products,name,image,price,`count`,user_product.id_up,user_product.id_user 
FROM products JOIN user_product WHERE products.id_products = user_product.id_produs;";
mysqli_query($conn, $one);

$masa = "CREATE TABLE `user_product` ( 
  `id_up` INT NOT NULL AUTO_INCREMENT , 
  `id_produs` INT NOT NULL , 
  `id_user` INT NOT NULL , 
  `count` INT NOT NULL , 
  PRIMARY KEY (`id_up`)) 
ENGINE = InnoDB;";
mysqli_query($conn, $masa);


mysqli_query($conn, "INSERT INTO `category` (`id_cat`, `name`, `description`, `image`) VALUES
(1, 'Placi de baza', 'Placi de baza', 'http://www.shopit.md/data/pic/catalog/item/0001/1217/_preview/600x600/l92ldd.jpg'),
(2, 'Monitoare', '', 'http://www.shopit.md/data/pic/catalog/item/0000/754/_preview/600x600/ja3yi2.jpg'),
(3, 'Tastaturi, mouse, manipulatoare', '', 'https://www.arenait.net/files/2011/08/Logitech_Wireless_Solar_Keyboard_K750_for_Mac.jpg'),
(5, 'Tablete PC', 'maxHeight=288;maxWidth=520', 'http://twimgs.com/ddj/images/article/2012/0412/intel_slate_tablet.jpg'),
(6, 'Accesorii IT', '', 'http://www.geekyedge.com/wp-content/uploads/2013/05/Accessories-for-your-Android-Tablets.jpg'),
(7, 'Multimedia', '', 'http://www.theartcareerproject.com/wp-content/uploads/2015/01/Multimedia-Design.jpg'),
(8, 'Jocuri si Console', '', 'http://www.anchel.com/wp-content/uploads/2012/05/iPhone-vs-Handhelds.png'),
(9, 'Utilaj pentru retea', '', 'http://www.kontrax.bg/uploads/assets/Networking.jpg');");



$three ="CREATE TABLE `member_types` (
  `id_member` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
mysqli_query($conn, $three);


mysqli_query($conn, "INSERT INTO `member_types` (`id_member`, `name`) VALUES
(1, 'Admin'),
(2, 'User');");



$four ="CREATE TABLE `products` (
  `id_products` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  `max` int(11) NOT NULL,
  `price` double NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_cat` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
mysqli_query($conn, $four);



mysqli_query($conn, "INSERT INTO `products` (`id_products`, `name`, `image`, `description`, `max`, `price`, `id_user`, `id_cat`, `date`) VALUES
(0, 'Asus Zenpad 10 z300m', 'http://promos.asus.com/US/website/ZenPad/img/Z170C_kv.png', ' 10.1, 2GB RAM, 16GB eMMC, 2MP Front ', 400, 1000, 0, 5, '0000-00-00'),
(1, 'ASUS VE228TR', 'https://www.blogcdn.com/www.engadget.com/media/2013/08/asus-pq321.jpg', '21.5\" TFT+LED backlight, Full HD(16:9) 1920x1080, 0.248mm, 5ms, DC1000000:1 (1000:1), 250cd/m2, 170°/160°, H:30-85kHz, V:55-75Hz, D-Sub, DVI-D, Speakers 2x1W', 12, 30000, 1, 2, '2017-03-11'),
(2, 'AOC Monitors', 'http:\/\/t3chsmash.com/wp-content/uploads/2014/05/aoc-d2357ph-vorderansicht.jpg', '35\" Curved LED Display. EXPLORE. Gaming. 27\" NVIDIA G-SYNC Professional Gaming Monitor. EXPLORE. Corporate. 27\" IPS Monitor. EXPLORE.', 20, 12000, 2, 2, '0000-00-00'),
(3, 'BonQ', 'http://bqpimage.azureedge.net/au-img/1438761829thumb.jpg', 'BenQ EW2750ZL 27 1920x1080 VA Widescreen LED Zeroframe Multimedia Monitor - Blay', 10, 6000, 1, 2, '0000-00-00'),
(4, 'MSI B150M PRO-VDH', 'https://www.scan.co.uk/images/products/2634655-c.jpg', 'Format: mATX\r\nSoclu procesor: 1151\r\nModel chipset: B150\r\nInterfata grafica: PCI Express x16 3.0\r\nTip memorie: DDR4\r\nTehnologie: Dual channel', 200, 1000, 3, 1, '0000-00-00'),
(5, 'ASUS Z170 PRO GAMING', 'https://images10.newegg.com/ProductImage/13-132-567-11.jpg', 'LGA1151 socket for 6th Intel Core Desktop Processors\r\nDual DDR4 3400 (OC) support\r\n', 20, 100, 1, 1, '0000-00-00'),
(6, 'MSI B250M MORTAR', 'https://www.msi.com/asset/resize/image/global/product/product_1_20170106135351_586f30efc65bc.png62405b38c58fe0f07fcef2367d8a9ba1/600.png', 'Supports 7th / 6th Gen Intel Core / Pentium / Celeron processors for LGA 1151 socket\r\nSupports DDR4-2400 Memory (Max.)\r\nDDR4 Boost: Give your DDR4 memory a performance boost\r\nVR Ready: Best virtual reality game experience without latency\r\nGAMING LEDs: Ambient LED lights for an awesome look & feel', 300, 4000, 0, 1, '0000-00-00'),
(7, 'Tastatura Gaming Trust', 'https://s0emagst.akamaized.net/products/3224/3223402/images/res_1099a6b414759d12e67d578376a7f4f8_350x350_63r1.jpg', 'GXT 830, Led, iluminata, Negru', 300, 1000, 0, 3, '0000-00-00'),
(8, 'Tastatura Mecanica ', 'http://www.syntech.co.za/wp-content/uploads/2016/09/RD-K55611.png', 'Gaming Redragon Devarajas, Black', 400, 1500, 0, 3, '0000-00-00'),
(9, 'Kit Tastatura', 'http://stat.altex.ro/media/catalog/product/cache/1/image/600x/9df78eab33525d08d6e5fb8d27136e95/g/a/gammrvkm800-1.jpg', 'Microsoft Sculpt Ergonomic Desktop, Wireless, Negru', 300, 1200, 0, 3, '0000-00-00'),
(12, 'Surface Pro 4', 'https://dri1.img.digitalrivercontent.net/Storefront/Company/msintl/images/English/en-INTL-Surface-Pro4-Refresh-CoreM-SU3-00001/en-INTL-XL-Surface-Pro4-Refresh-CoreM-SU3-00001-RM1-mnco.jpg', 'Laptop power and performance with 6th  Intel core processor\r\n12.3-inch high-resolution PixelSense display brings your work to life\r\nSurface Pen sold separately\r\nCompatible with Surface Dial', 20, 7000, 0, 5, '0000-00-00'),
(13, 'Surface Pro 45', 'https://dri1.img.digitalrivercontent.net/Storefront/Company/msintl/images/English/en-INTL-Surface-Pro4-Refresh-CoreM-SU3-00001/en-INTL-XL-Surface-Pro4-Refresh-CoreM-SU3-00001-RM1-mnco.jpg', 'Laptop power and performance with 6th  Intel core processor\r\n12.3-inch high-resolution PixelSense display brings your work to life\r\nSurface Pen sold separately\r\nCompatible with Surface Dial', 20, 7000, 0, 5, '0000-00-00');");


$six ="CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(256) NOT NULL,
  `id_member` int(11) NOT NULL DEFAULT '2',
  `uuid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
mysqli_query($conn, $six);


mysqli_query($conn, "INSERT INTO `users` (`id_user`, `username`, `password`, `id_member`, `uuid`) VALUES
(1, 'masa', 'masa', 2, 28509737),
(2, 'compandreimd', 'com123', 2, 2147483647),
(3, 'Maria', 'masa', 2, 99),
(5, 'radu', 'radu', 2, 984);");


$seven ="CREATE TABLE `user_product` (
  `id_up` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_produs` int(11) NOT NULL,
  `count` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
mysqli_query($conn, $seven);


mysqli_query($conn, "INSERT INTO `user_product` (`id_up`, `id_user`, `id_produs`, `count`) VALUES
(4, 2147483647, 4, 1),
(5, 2147483647, 6, 1),
(7, 2147483647, 12, 1),
(8, 2147483647, 13, 1);");



$eight ="CREATE ALGORITHM=UNDEFINED DEFINER=`sql11163254`@`%` SQL SECURITY DEFINER VIEW `up`  AS  select `products`.`id_products` AS `id_products`,`products`.`name` AS `name`,`products`.`image` AS `image`,`products`.`price` AS `price`,`user_product`.`count` AS `count`,`user_product`.`id_up` AS `id_up`,`user_product`.`id_user` AS `id_user` from (`products` join `user_product`) where (`products`.`id_products` = `user_product`.`id_produs`) ;";
mysqli_query($conn, $eight);


$nine = "ALTER TABLE `category`
  ADD PRIMARY KEY (`id_cat`),
  ADD UNIQUE KEY `name` (`name`);";
mysqli_query($conn, $nine);


$ten = "ALTER TABLE `member_types`
  ADD PRIMARY KEY (`id_member`),
  ADD UNIQUE KEY `name` (`name`);";
mysqli_query($conn, $ten);


$eleven ="ALTER TABLE `products`
  ADD PRIMARY KEY (`id_products`),
  ADD UNIQUE KEY `id_products` (`id_products`),
  ADD UNIQUE KEY `name` (`name`);";
mysqli_query($conn, $eleven);


$twelve ="ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`); ";
mysqli_query($conn, $twelve);


$treispr ="ALTER TABLE `user_product`
  ADD PRIMARY KEY (`id_up`); ";
mysqli_query($conn, $treispr);


$paisp ="ALTER TABLE `category`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;";
mysqli_query($conn, $paisp);

$cinsp ="ALTER TABLE `member_types`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;";
mysqli_query($conn, $cinsp);
  
$saispre ="ALTER TABLE `products`
  MODIFY `id_products` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;";
mysqli_query($conn, $saispre);

$saptep ="ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;";
mysqli_query($conn, $saptep);

$nousprez ="ALTER TABLE `user_product`
  MODIFY `id_up` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;";
mysqli_query($conn, $nousprez);


?>