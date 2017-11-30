-- MySQL dump 10.13  Distrib 5.7.19, for Linux (x86_64)
--
-- Host: localhost    Database: asnc
-- ------------------------------------------------------
-- Server version	5.7.19-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `asnc_article`
--

DROP TABLE IF EXISTS `asnc_article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `asnc_article` (
  `a_id` int(10) NOT NULL AUTO_INCREMENT,
  `a_title` varchar(255) DEFAULT NULL,
  `a_context` text,
  `a_type` varchar(255) DEFAULT NULL,
  `a_time` int(10) DEFAULT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asnc_article`
--

LOCK TABLES `asnc_article` WRITE;
/*!40000 ALTER TABLE `asnc_article` DISABLE KEYS */;
INSERT INTO `asnc_article` VALUES (38,'学生公寓管理中心2017年工作计划','<p align=\"center\"><strong>&nbsp; &nbsp; &nbsp;&nbsp;</strong>2017年将是学校发展转型的关键一年。是实现内涵转型和质量提升，跨越式发展的重要一年。新的一年，我们将紧密团结在以习近平为核心的党中央周围，以党的十八届五中、六中全会为指导，全面贯彻落实全国高校思想政治工作会议精神，以学生工作和大学生思想政治工作为主线，更好地推进学生公寓的管理和大学生思想教育工作。学生公寓管理中心决心在学校的正确领导下，在各学院、相关部门的大力支持下，在全体同学的积极配合下，认真履行主体责任，加强党风廉政建设，将紧密围绕学校学生工作要点，以育人为中心，以加强学生思想政治工作为突破口，促进&ldquo;教育、关怀、服务、成长&rdquo;的全面融合，更好地发挥管理育人和服务育人功能，创建学生公寓为安全、文明、温馨、和谐的生活社区，为学校的稳定和发展做出新的贡献。<strong>2017年，我们将在积极推进思想政治工作进公寓，改变现有学生公寓管理模式的前提下，重点做好以下几方面工作：</strong></p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; 1、认真贯彻落实全国高校思想政治工作会议精神，围绕全过程育人和全方位育人，全力推进思想政治工作进公寓，加强公寓辅导员队伍建设，打造一支合格的公寓管理人员队伍，充分发挥他们在公寓管理服务岗位的育人功能，实现学生公寓思想政治工作的全覆盖；</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;2、在积极推进学生公寓大学生思想政治工作的同时，配合相关部门和各学院，推进党团组织、心里健康教育、阳光体育活动及校园文化进公寓工作；及时掌握学生在公寓内的思想状况和行为表现，规范学生公寓内的《寝室考核档案》，使之成为学生诚信档案的重要组成部分，成为约束学生违规违纪行为、促进学生良好生活习惯养成的重要手段，成为学生发展党员、评先评优及评定奖助学金的重要考核依据，实现学生在公寓内表现与奖惩挂钩，促进良好风气的形成；</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;3、积极借鉴兄弟高校的成功经验和教训，发扬成绩，查找不足，优化管理，坚持把学生利益放在首位，不断发现和解决管理中出现的新问题，当好学校领导的耳目和参谋，更好地发挥本部门的协调作用，确保社会化学生公寓的合理运营；</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; 4、紧密围绕学校学生工作要点，注重公寓文化建设，丰富园区的文化生活，打造精品活动。在条件允许情况下，继续组织好国庆节中外留校学生的&ldquo;饺子宴&rdquo;，和校团委、学生会继续组织第七届寝室生活剧大赛、第四届生活区广场舞比赛等；开展&ldquo;书香寝室&rdquo;评比活动；积极推动和指导各学院开展寝室美化大赛，将体现各学院特色的&ldquo;一院一品&rdquo;活动和学生优秀作品展示引进宿舍，打造园区具有各学院特点的&ldquo;文化长廊&rdquo;；加强与各分院和学生组织的联系，做好园区日常文化建设活动，组织开展安全文明寝室评比等活动；继续开展男女生宿舍互访、健身指导、&ldquo;525&rdquo;心理健康周等系列活动；配合招生就业指导处及职创部合理规划校园青蛙市场，开辟创业平台，做好宿舍内学生微商的管理与引导，有效利用学生生活社区的特有条件推进大学生自主创业工作；提倡低碳生活、绿色环保，组织学生开展节水、节电和创建绿色校园活动。</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; 5、以诚信教育为主线，继续规范和完善学生公寓内大学生诚信教育考核体系。加强社会主义核心价值观在宿舍内的宣传，把诚信教育内容作为新生舍务规范与安全教育的重点，增强学生的诚信意识，把学生在公寓内的遵章守纪和履约践诺情况作为诚信考核的重要方面，并与学生的奖惩挂钩。通过宣传、教育和引导，使学生在园区内的诚信教育和考核工作真正落到实处；</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;6、进一步搞好公寓辅导员队伍建设，为公寓辅导员进驻公寓创造条件，建立相关规章制度，明确聘任条件和工作职责，加强岗位培训和业绩考核，积极组织参加学生工作例会及辅导员沙龙等活动，使之迅速胜任宿舍内的大学生思想政治工作的开展，及时解决学生存在的思想问题，确保学生公寓内学生正常的秩序和良好的思想状态；尽最大努力加强全体宿管员工队伍建设，充分发挥全体宿管员工的聪明才智，实现全员育人。在关心员工的思想和生活的基础上，注重开展一些能使员工产生凝聚力和向心力的活动，将员工和学校紧紧的联系在一起，让员工产生归属感，使之更加热爱岗位、热爱学生，以自己在鞍师工作为荣，在工作中始终保持昂扬向上的精神风貌；除加强考核外，将通过有计划地安排岗位培训、经验交流、理论考试及工作研讨，不断提升其理论水平和业务工作能力；</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; 7、有效利用学生园区内的一切载体，有计划、有针对性地开展宣传工作。建立鞍师学生公寓微信平台，加强与学生的线上与线下交流，使之成为我们了解学生思想动态、意见要求、信息反馈的重要渠道；抓好学生公寓网的网页建设，使网页成为舍务公开和宿舍宣传的重要载体，成为公寓文化活动展示的重要平台，成为学生、家长和社会了解我们的重要窗口；充分利用宿舍区的宣传栏、公寓宣传板报、宿舍内的张贴画、条幅标语、鞍师大学生在线平台、微信群及各公寓楼的QQ群等媒体，积极开展励志、成才、诚信、心理健康、就业指导、传统文化及安全教育，有效发挥园区的宣传职能；通过温馨提示、关注考研、提供就业信息服务、宣传好人好事等内容，更好地促进学风建设；创新工作模式，全面执行学校信息公开制度，继续完善舍务五公开：宿舍资源公开、办事程序公开、服务项目公开、服务收费公开、投诉电话公开；强化五种监督：即学生监督、上级领导监督、相关部门监督、公司监督及公寓党组织监督。</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;7、以关怀教育为手段，继续开展亲情服务，在关怀中送温暖。进一步跟社会化企业理顺关系，将各公寓开展的温馨提示、天气预报、针线包、医药箱、简单工具、小件寄存等亲情项目进一步落实和完善，并通过检查、指导、评比等手段进一步发挥功效；对因病因伤而活动不便的同学提供临时卧具、拐杖或轮椅；继续为患病的同学送慰问餐；及时发现并帮助解决学生在宿舍生活中的各种困难，开展为困难学生送温暖、献爱心活动，积极为贫困生推荐勤工助学岗位。</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; 8、全面做好学生的安全管理工作，将安全责任落实到位。通过多种途径加强对公寓辅导员安全知识培训、普及和宣传，切实履行岗位职责的中的安全责任；全面落实和完善各类突发事件应急预案，组织好每年新生宿舍的应急疏散演练，提高学生应对突发事件的能力；落实责任制，建立定期例会制度，总结和解决学生公寓管理中存在的问题；坚持日常检查和夜间巡查制度，及时发现和排除各类安全隐患，不断增强学生的自我安全防范意识；对各宿舍的安全防火工作和综合治理工作实行目标考核，开展评选平安宿舍活动；加强学生的消防安全意识的培养，严肃处理学生在公寓内的违章动火用电行为，重点开展宿舍内禁烟活动和无烟寝室创建活动；严厉打击新生宿舍的行骗行为，确保新生财产安全；配合学校有关部门，开展对生活区学生暖壶乱放现象的整治，消除安全隐患；做好各类传染病防控工作；加强对宿舍区张贴广告的管理，及时发现和清除不良信息；关注表现异常学生，及时与有关部门联系，及时疏导学生的不良心理情绪，密切注意学生群体中的不稳定因素，及时化解矛盾，积极开展创建平安校园活动。</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; 9、提前介入新校区学生公寓的建设，做好搬迁前的各项准备工作。依照教育部有关大学生公寓建设标准的文件，认真总结现有学生公寓建设中存在的优点与不足，做好新区学生宿舍建设方案的审核，及时为学校提出合理化建议，确保其设计方案合理，使用方便；</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; 10、做好2017届毕业生的离寝办理工作、2016级学生的调寝工作和2017级新生的迎新工作。及时掌握毕业生的思想动态，化解各种矛盾，主动做好思想工作，发现问题及时与相关部门和所在学院沟通，通过周到服务和人文关怀，保证毕业生文明离校；用我们的理解和宽容，让毕业生体会母校的关爱和温暖。</p>\r\n\r\n<p>做好新生的迎新工作，利用咨询热线、新生入学宣传材料和新生QQ群，热情解答新生的各类咨询，做好学校的宣传；及时、准确、科学、合理地制定新生住宿安排方案，做好新生报到的接待工作，全面完成新生入学教育任务，力争使《舍务规范与安全教育》讲座覆盖全体新生。通过我们的爱心服务和生活指导，让新生一进校门就感受到公寓家一般的温暖，并很快适应新的生活环境，熔入学校这个大家庭；做好新生军训的内务评比考核工作；协助研究生处做好研究生的住宿安排和宿舍管理工作。</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 11、按照学校党建工作的部署和要求，注重加强学生公寓党组织建设，充分发挥学生公寓党工委的作用，认真组织公寓辅导员和党员学习好十八届五中、六中全会精神，学习党章党规，学习习总书记在全国高校思想政治工作的讲话，坚持立德树人，全员育人，充分发挥学生公寓内基层党支部的战斗堡垒作用和学生党员、学生干部的先锋模范作用；继续推进&ldquo;六个六&rdquo;工作法，做到&ldquo;违纪学生必谈，考试作弊、挂科、延修的必谈，重点人物必谈，人际关系紧张的必谈，孤儿、单亲家庭必谈，毕不了业的必谈&rdquo;，将其作为各公寓楼党支部及公寓辅导员开展学生思想教育工作的重要切入点；配合各分院党总支做好发展学生党员的考核工作，继续开展&ldquo;一名党员一面旗帜，携手共建文明寝室&rdquo;创先争优活动，及时为党员寝室挂牌，加强对学生公寓内学生党员、学生积极分子的考核与管理，做好推优工作；进一步完善党校学员寝室的考评工作。</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 12、重视学生舍务部干部队伍建设，做好校学生会舍务部换届工作，积极推荐优秀学生干部；加强对其工作的指导和服务，支持其独立开展工作，在学生公寓的日常检查、各类活动的组织、宣传和信息反馈等方面，有效发挥其自我教育、自我管理和自我服务的功能，使其成为学生与我们之间的桥梁和纽带。</p>\r\n\r\n<p>新的一年，我们面临着学校的转型发展，机遇与挑战并存。我们将按照学校新的&ldquo;十三五&rdquo;发展规划，在巩固现有工作的基础上，总结经验，查找不足，克服困难，发扬成绩，紧紧依靠广大同学和全体宿管员工，在力争保持学生公寓管理工作的平稳有序运转的同时，紧密结合学校学生工作，围绕学校育人这一目标，全面推进宿舍内大学生思想政治工作，积极占领思想政治教育的主阵地。通过扎实工作，不断创新，积极构建和谐大学生生活园区，使我校学生公寓管理工作再上新台阶。</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;学生公寓管理中心</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 2017年12月30日</p>','公告',1511860690);
/*!40000 ALTER TABLE `asnc_article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `asnc_picture`
--

DROP TABLE IF EXISTS `asnc_picture`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `asnc_picture` (
  `p_id` int(10) NOT NULL AUTO_INCREMENT,
  `a_id` int(10) DEFAULT NULL,
  `p_path` text,
  PRIMARY KEY (`p_id`),
  KEY `a_id` (`a_id`),
  CONSTRAINT `asnc_picture_ibfk_1` FOREIGN KEY (`a_id`) REFERENCES `asnc_article` (`a_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asnc_picture`
--

LOCK TABLES `asnc_picture` WRITE;
/*!40000 ALTER TABLE `asnc_picture` DISABLE KEYS */;
/*!40000 ALTER TABLE `asnc_picture` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (3,'范宇恒','1913068672@qq.com','$2y$10$oOZ/QIoxvrNoajYvwFuTD.qKZrZNl/8sg33wu6vSGlNoN1mgPmrCO','rnb2kXon3fBs6BnE1e64wgB0iHvAcrKyxOdW7yzbJe4tmfTQjrCgPm3Gx4gm','2017-11-28 18:51:04','2017-11-28 18:51:04');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-28 12:48:59
