-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2022 at 06:49 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `animals`
--

CREATE TABLE `animals` (
  `a_name` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `a_age` int(10) NOT NULL,
  `a_gender` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `a_pic` varchar(30) NOT NULL,
  `a_type` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `a_info` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `animals`
--

INSERT INTO `animals` (`a_name`, `a_age`, `a_gender`, `a_pic`, `a_type`, `a_info`) VALUES
('企鵝', 9, '公', 'cold_3.jpg', '企鵝館', '主要生活在南半球，目前已知全世界的企鵝共有19種，另有兩種已滅絕。多數分布在南極地區，而其中環企鵝屬的漢波德企鵝、麥哲倫企鵝與黑腳企鵝分布在緯度較低的溫帶地區，至於加拉帕戈斯企鵝的分布則更接近赤道；完全生活在極地的只有皇帝企鵝及阿德利企鵝兩種。'),
('伊蘭羚羊', 7, '雌', 'fa_4.jpg', '非洲', '是非洲體型最大的羚羊，雄、雌個體差異大，雌羚體色棕褐色帶有垂直白色條紋的外衣，喉部肉垂不明顯；.雄羚羊額頭上有一叢深色毛，體色較深帶藍灰色調，年齡越大顏色越灰暗，白色條紋較不明顯，喉部肉垂比雌羚羊明顯'),
('冠蛇雕', 2, '母', 'tw_4.jpg', '台灣 ', '冠蛇鵰分佈很廣，在東亞、南亞、東南亞都有發現，從喜馬拉雅山到印度和斯里蘭卡到中國南方和台灣及中南半島、菲律賓、印度尼西亞，築巢在森林近水邊的樹冠，鳥巢以樹枝條構成，且一巢只生一個蛋。'),
('台灣黑熊', 3, '公', 'tw_1.jpg', '台灣', '是臺灣特有的亞洲黑熊亞種（臺灣唯一性的原生熊類），胸前的V字型白色條紋（太魯閣語稱做 rabang）是亞洲黑熊共有的特徵。台灣黑熊現存族群數量約為200－600隻，出沒於台灣中央山脈海拔1,000公尺－3,500公尺的山區，活動範圍可達560平方公里。'),
('大猩猩', 5, '公', 'hot_2.jpg', '熱帶', '西部低地大猩猩（Gorilla gorilla）生活在非洲中部的森林中。 這些動物非常聰明，可以用自然物體製作工具來收集更多食物。 這種熱帶雨林動物如今已極度瀕危。 狩獵叢林肉和砍伐大猩猩棲息地是這些大猩猩面臨的兩個主要威脅。'),
('小貓熊', 2, '公', 'wo_3.jpg', '溫帶', '小貓熊是夜行性或晨昏活動的動物，白天在樹上睡覺。小貓熊擅長爬樹，但多半在地面上進食。小貓熊興奮時會有麝香的氣味從肛門排出，牠們會用肛門部位摩擦物體，留下氣味來宣示領域，會成對或整個家庭共同活動。'),
('山獅', 6, '母', 'wo_2.jpg', '溫帶', ' 1.山獅是跳躍高手，由靜止一躍可達6-7公尺，短跑極快，但數百公尺內即疲乏。 2.山獅於清晨、黃昏活動，潛行獵物，生活於固定領域中﹝約12平方哩內﹞，以聲音、擦痕、排遺等宣示領域。 3.山獅成年後天敵甚少。'),
('巴西烏龜', 15, '母', 'wo_4.jpg', '溫帶', '1.巴西烏龜最早由美洲引進國內作為水族寵物飼養，但因飼主的隨意棄養，目前在台灣許多河川、水域皆可發現牠們的蹤跡。 2.巴西烏龜環境適應能力強，為原產地淡水水域的優勢種，喜愛底質為細泥且水生植物茂密的環境。'),
('抹香鯨', 11, '公', 'cold_1.jpg', '企鵝館', '抹香鯨是體型最大的齒鯨，廣泛分布於全世界不結冰的海域，從赤道到兩極都可發現牠們的?跡，其中以深且富生產力的海域為最常出沒在水深超過一千公尺的地方，世界三大洋均可見到抹香鯨的身影，.也有季節性的洄游習性'),
('捷豹', 3, '公', 'hot_3.jpg', '熱帶', '美洲虎（Panthera onca）是美洲最大的貓科動物，是僅次於獅子和老虎的世界第三大貓科動物。 美洲虎更喜歡棲息在美洲的熱帶雨林中，分佈於中美洲的大部分地區以及南到阿根廷北部和巴拉圭。 該物種的範圍也向北延伸到墨西哥。 美洲虎與豹非常相似，但比後者更強壯、更大。 美洲虎是它所居住的生態系統的一種孤獨的頂級捕食者。'),
('斑馬', 4, '母', 'fa_2.jpg', '非洲', '斑馬身上有許多的條紋，每隻的條紋都不一樣，黑白交錯的斑紋可使采采蠅等害蟲較不會寄生在牠們身上，還可調節身體的溫度，形成自然的空調系統，因為白色可反光、降溫，黑色可吸光、升溫。.斑馬的眼生在頭的兩側，視'),
('毒鏢蛙', 2, '母', 'hot_4.jpg', '熱帶', '雖然這個名字聽起來很致命，但實際上只有大約三種這種青蛙是致命的。 金箭蛙（Phyllobates terribilis）是三者中最危險的。 這些青蛙都擁有鮮豔的金色、紅色、綠色、藍色和黃色，這是一種抵禦掠食者的策略。 此功能稱為 aposematic 著色。'),
('水獺', 3, '母', 'tw_3.jpg', '台灣 ', '水獺是一類水棲、肉食性的哺乳動物，在動物分類學中屬於亞科級別，稱為水獺亞科（Lutrinae），現存七個屬及十三個物種。'),
('灰狼', 2, '公', 'wo_5.jpg', '溫帶', '1.狼是狗的祖先，狗是約12000年前在中亞由狼馴養而來的。 2.狼群平均是7-8隻，通常是雙親和其子女，再加上一些近親。 3.為了避免打鬥造成嚴重受傷，狼群以位序來維持社會秩序。最強壯者便是位階最高者，其他個體必須服從牠。'),
('無尾熊', 1, '公', 'fa_3.jpg', '非洲', '體重和毛色由北到南遞增，生長在南方的體型較大毛色較深，前掌所有的趾端都有彎曲程度很大的勾爪以利攀爬，後掌的第2、3趾合併成1趾，後掌前端的爪子也因應梳理身上絨毛的功能，.變成梳齒般的形狀，這種併趾(S'),
('熊貓', 4, '公', 'tw_5.jpg', '台灣', '一般稱作「熊貓」或「貓熊」，屬於食肉目熊科的一種哺乳動物，體色為黑白兩色。.熊貓是中國特有種，現存的主要棲息地是中國中西部四川盆地周邊的山區。.野生的熊貓生育率低，加上對生活環境的要求相當高，瀕臨中'),
('犀牛 ', 12, '雌', 'fa_8.jpg', '非洲', '是最大的奇蹄目動物，也是體型僅次於大象的大型陸地動物，主要分布在非洲和東南亞。.所有的犀牛基本上都是腿短和身體粗壯。.體肥笨拙，皮厚粗糙，並於肩腰等處成褶皺排列；毛被稀少而硬，甚至大部無毛；耳呈卵圓形'),
('狐狸', 3, '母', 'wo_1.jpg', '溫帶', '狐狸繁殖率高，抗病力強，食性雜，好飼養。.毛長，耳尖，腿相對較短，吻獨狹長，似體型中等而尾蓬鬆的狗。.棲息於森林、草原、半沙漠、丘陵、地帶，居樹洞或土穴中。. 為夜行性，生殖期會結成小群，其餘時間單獨'),
('白鯊', 9, '公', 'cold_2.jpg', '企鵝館', '屬於活化石物種，是世上最大的掠食性魚類，在所有主要海洋的沿海表面水域都能找到。.與多數鯊魚相同是機會主義者，於適當時機見到適合的獵物就會攻擊，並無所謂理不理想的獵物。.大白鯊是卵胎生的魚類，卵在雌鯊的'),
('穿山甲', 10, '母', 'tw_2.jpg', '台灣 ', '鯉、鯪鱧，是穿山甲科（也稱鯪鯉科，學名：Manidae）的一類哺乳動物的統稱，屬鱗甲目（Pholidota）下唯一的科，現存 3 8種，分佈在亞洲和非洲的熱帶及亞熱帶地區。它們從頭到尾披覆著魚鱗般的角質甲片，穴居夜行，以白蟻為主食。'),
('老鷹', 6, '公', 'fa_1.jpg', '非洲', '老鷹屬於猛禽類，性情兇猛，肉食性，以鳥、鼠和其它小型動物為食。.嘴彎曲銳利，方便撕開及進食肉塊，腳爪具有鉤爪用來殺死獵物。.兩翼發達，善於飛翔，常在近山區的高空盤旋翱翔尋找獵物，一般多在晝間活動，棲息'),
('花豹', 10, '雌', 'fa_7.jpg', '非洲', '夜行性，除了母親與幼獸以外皆單獨行動。.只要有適量的獵物及遮蔽處就能生存，適應多種不同環境但偏愛有樹林的地區，敏捷靈巧，善於爬樹，也會游泳但一般會避開水，不像老虎般喜愛泡水，樹棲性比較強.豹的視力及聽'),
('蘇門答臘犀牛', 2, '公', 'hot_1.jpg', '熱帶', '當今現存的五種犀牛物種之一，蘇門答臘犀牛（Dicerorhinus sumatrensis）棲息在婆羅洲和蘇門答臘的熱帶森林中。 它是世界上最小的犀牛，有兩個角。 蘇門答臘犀牛是一種極度瀕危的物種，因為它的角已被廣泛獵殺，在中國和越南，犀牛角用於製備傳統藥物。'),
('長頸鹿', 8, '雌', 'fa_6.jpg', '非洲', '棲居於非洲疏林草原或是開放疏林，是世界上最高的哺乳動物。.以食用含羞草亞科為主的木本植物的樹葉、水果以及花朵為生，它們雖然屬於食草動物，但也會被屍體吸引，舔拭骨頭上的乾肉。.作為反芻動物，它們會先咀嚼'),
('非洲象', 5, '公', 'fa_5.jpg', '非洲', '適應力很強，可以在各種環境下生存，選擇棲地的條件是要有充份而乾淨的水源及足夠的食物。.象鼻的功用很多，可以用來撿拾食物、呼吸、喝水，或是把水噴到身上散熱。.耳朵長得很大，上面分布了許多微血管，可以用來');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `u_name` varchar(10) NOT NULL,
  `u_phone` int(10) NOT NULL,
  `u_email` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`u_name`, `u_phone`, `u_email`, `message`) VALUES
('test', 0, 'a@gmail.com', 'hello'),
('APAPA', 0, 'cook9106@gmail.com', 'im so hungry');

-- --------------------------------------------------------

--
-- Table structure for table `missing`
--

CREATE TABLE `missing` (
  `m_No` int(11) NOT NULL,
  `m_name` varchar(10) NOT NULL,
  `m_pic` varchar(30) NOT NULL,
  `m_date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `missing`
--

INSERT INTO `missing` (`m_No`, `m_name`, `m_pic`, `m_date`) VALUES
(3, '雨傘', 'missing-1.jpeg', '2022/06/08'),
(4, '背包', 'missing-2.jpeg', '2022/04/01'),
(5, '貓貓', 'missing-3.jpeg', '2022/02/03'),
(6, '小孩', 'missing-4.jpeg', '2022/01/05');

-- --------------------------------------------------------

--
-- Table structure for table `place_list`
--

CREATE TABLE `place_list` (
  `u_id` int(10) NOT NULL,
  `list_id` int(10) NOT NULL,
  `list_con` varchar(10) NOT NULL,
  `list_address` varchar(30) NOT NULL,
  `total_price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_name` varchar(20) NOT NULL,
  `p_price` int(10) NOT NULL,
  `p_pic` varchar(50) NOT NULL,
  `p_info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_name`, `p_price`, `p_pic`, `p_info`) VALUES
('來去旅行蛙', 150, 'frog.jpg', '陶瓷做成的裝飾品，手提著行李箱不放的他正準備去哪呢?由您來決定吧!'),
('喜氣羊羊', 150, 'sheep.jpg', '羊咩咩造型的小吊飾，可以放在鑰匙串或別上包包，讓嘴角也跟著笑咪咪的可愛小羊一起上揚，感受美好的一天吧!'),
('小鳥手藝裝飾品', 1000, 'bird.jpg', '以麻繩全程手工製作的裝飾品，小巧可愛又逼真，由於製作過程耗時費力，僅限量50隻!快將其帶回家收藏起來吧!!'),
('彩蛋', 15, 'egg.jpg', '想在家體驗到復活節尋找彩蛋的樂趣嗎?以天然顏料繪製的彩蛋，會有甚麼樣的小驚喜在裏頭呢?快來親自察看一番吧!'),
('猴子娃娃', 600, 'monkeyDoll.jpg', '他不僅僅是個棉絮柔軟的布偶，還是能隨時傾聽你一切遭遇並擁抱，讓你感覺到滿滿安全感的好朋友哦~'),
('諾亞方舟', 2999, 'boat.jpg', '我們用縮小燈讓動物變迷你了，快來幫助動物園裡的每隻動物成功搭上船，躲避下一次的大洪水吧!'),
('鮮魚鉛筆盒', 300, 'fishcase.jpg', '具有鮮魚外觀的布鉛筆盒，從此變成受貓咪們推崇的大明星，早一秒下單就多收服一隻貓貓，心動不如馬上行動!');

-- --------------------------------------------------------

--
-- Table structure for table `product_list`
--

CREATE TABLE `product_list` (
  `list_id` int(10) NOT NULL,
  `p_pname` varchar(20) NOT NULL,
  `p_num` int(10) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_list`
--

INSERT INTO `product_list` (`list_id`, `p_pname`, `p_num`, `price`) VALUES
(18, '小鳥手藝裝飾品', 1, 1000),
(39, '來去旅行蛙', 1, 150),
(203, '諾亞方舟', 1, 2999),
(217, '鮮魚鉛筆盒', 1, 300),
(223, '來去旅行蛙', 1, 150),
(233, '喜氣羊羊', 2, 150),
(234, '喜氣羊羊', 1, 150),
(237, '喜氣羊羊', 1, 150),
(293, '喜氣羊羊', 2, 150),
(503, '喜氣羊羊', 1, 150),
(511, '小鳥手藝裝飾品', 1, 1000),
(593, '來去旅行蛙', 1, 150),
(647, '來去旅行蛙', 1, 150),
(655, '喜氣羊羊', 1, 150),
(729, '來去旅行蛙', 2, 150),
(776, '來去旅行蛙', 1, 150),
(803, '彩蛋', 1, 15),
(833, '來去旅行蛙', 2, 150),
(844, '喜氣羊羊', 1, 150),
(893, '喜氣羊羊', 1, 150),
(950, '喜氣羊羊', 1, 150),
(995, '喜氣羊羊', 1, 150);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(10) NOT NULL,
  `u_name` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_gender` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_birth` varchar(10) NOT NULL,
  `u_email` varchar(50) NOT NULL,
  `u_phone` int(10) NOT NULL,
  `u_pwd` varchar(30) NOT NULL,
  `u_pic` varchar(50) NOT NULL,
  `u_role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_name`, `u_gender`, `u_birth`, `u_email`, `u_phone`, `u_pwd`, `u_pic`, `u_role`) VALUES
(1, '劉淑娟', '女', '1996-09-03', 'pengjuan@example.net', 940, '8f29d8LightYellow', 'avatar1.png', 'user'),
(2, '朱家瑋', '男', '1981-07-24', 'tianyong@example.net', 963, 'c16f30PeachPuff', 'avatar2.png', 'user'),
(3, '楊惠雯', '女', '1955-12-26', 'juan99@example.net', 945, 'edd2a8LimeGreen', 'avatar1.png', 'user'),
(4, '石惠如', '女', '1998-03-27', 'tao86@example.org', 937, '166c77LightCyan', 'avatar1.png', 'user'),
(5, '靳怡伶', '女', '1965-01-14', 'gang71@example.net', 930, 'd3d30cMediumSeaGreen', 'avatar1.png', 'user'),
(6, '焦淑芬', '女', '1981-03-09', 'baiguiying@example.o', 924, 'ed6f97AliceBlue', 'avatar1.png', 'user'),
(7, '曲佳慧', '女', '1970-03-19', 'qiang48@example.net', 968, 'f7c1ffDarkCyan', 'avatar1.png', 'user'),
(8, '劉思穎', '女', '1952-01-17', 'wuchao@example.org', 957, '5ee588DarkOrange', 'avatar1.png', 'user'),
(9, '陳琬婷', '女', '1999-08-13', 'junduan@example.org', 998, 'bea9e8HoneyDew', 'avatar1.png', 'user'),
(10, '薛筱涵', '女', '1966-03-25', 'tianli@example.com', 997, '6807efLightYellow', 'avatar1.png', 'user'),
(11, '羅郁雯', '女', '1950-03-09', 'zhongjing@example.co', 914, '269dccWheat', 'avatar1.png', 'user'),
(12, '溫志豪', '男', '1969-12-18', 'qiang71@example.net', 941, '1d378cMintCream', 'avatar2.png', 'user'),
(13, '桂怡安', '女', '1979-09-08', 'yong48@example.com', 906, 'c0adf7DarkSlateBlue', 'avatar1.png', 'user'),
(14, '何俊傑', '男', '1956-01-29', 'gang45@example.com', 951, '32db84MintCream', 'avatar3.png', 'user'),
(24, '王筱涵', '女', '1956-11-29', 'oluo@example.org', 996, 'f990efDarkSlateGray', 'avatar1.png', 'user'),
(25, '彭郁庭', '女', '2001/12/13', 'a1093355@mail.nuk.ed', 900, 'ica5963716', 'peng.jpg', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animals`
--
ALTER TABLE `animals`
  ADD UNIQUE KEY `a_name` (`a_name`);

--
-- Indexes for table `missing`
--
ALTER TABLE `missing`
  ADD PRIMARY KEY (`m_No`);

--
-- Indexes for table `place_list`
--
ALTER TABLE `place_list`
  ADD PRIMARY KEY (`list_id`),
  ADD UNIQUE KEY `list_id` (`list_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_name`);

--
-- Indexes for table `product_list`
--
ALTER TABLE `product_list`
  ADD PRIMARY KEY (`list_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `missing`
--
ALTER TABLE `missing`
  MODIFY `m_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
