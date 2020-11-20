CREATE DATABASE  IF NOT EXISTS `ghosp` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `ghosp`;
-- MySQL dump 10.13  Distrib 5.7.31, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: ghosp
-- ------------------------------------------------------
-- Server version	5.7.31

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
-- Table structure for table `administradores`
--

DROP TABLE IF EXISTS `administradores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `administradores` (
  `id_administrador` int(11) NOT NULL AUTO_INCREMENT,
  `funcionario_id` int(11) NOT NULL,
  PRIMARY KEY (`id_administrador`,`funcionario_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `administradores`
--

LOCK TABLES `administradores` WRITE;
/*!40000 ALTER TABLE `administradores` DISABLE KEYS */;
/*!40000 ALTER TABLE `administradores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `areas_atuacao_medicas`
--

DROP TABLE IF EXISTS `areas_atuacao_medicas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `areas_atuacao_medicas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_area_atuacao` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `areas_atuacao_medicas`
--

LOCK TABLES `areas_atuacao_medicas` WRITE;
/*!40000 ALTER TABLE `areas_atuacao_medicas` DISABLE KEYS */;
INSERT INTO `areas_atuacao_medicas` VALUES (1,'Administração em saúde'),(2,'Alergia e imunologia pediátrica'),(3,'Angiorradiologia e cirurgia endovascular'),(4,'Atendimento ao queimado'),(5,'Cardiologia pediátrica'),(6,'Cirurgia bariátrica'),(7,'Cirurgia crânio-maxilo-facial'),(8,'Cirurgia do trauma'),(9,'Cirurgia videolaparoscópica'),(10,'Citopatologia'),(11,'Densitometria óssea'),(12,'Dor'),(13,'Ecocardiografia'),(14,'Ecografia vascular com doppler'),(15,'Eletrofisiologia clínica invasiva'),(16,'Emergência pediátrica'),(17,'Endocrinologia pediátrica'),(18,'Endoscopia digestiva'),(19,'Endoscopia ginecológica'),(20,'Endoscopia respiratória'),(21,'Ergometria'),(22,'Estimulação cardíaca eletrônica implantável'),(23,'Foniatria'),(24,'Gastroenterologia pediátrica'),(25,'Hansenologia'),(26,'Hematologia e hemoterapia pediátrica'),(27,'Hemodinâmica e cardiologia intervencionista'),(28,'Hepatologia'),(29,'Infectologia hospitalar'),(30,'Infectologia pediátrica'),(31,'Mamografia'),(32,'Medicina aeroespacial'),(33,'Medicina do adolescente'),(34,'Medicina do sono'),(35,'Medicina fetal'),(36,'Medicina intensiva pediátrica'),(37,'Medicina paliativa'),(38,'Medicina tropical'),(39,'Nefrologia pediátrica'),(40,'Neonatologia'),(41,'Neurofisiologia clínica'),(42,'Neurologia pediátrica'),(43,'Neurorradiologia'),(44,'Nutrição parenteral e enteral'),(45,'Nutrição parenteral e enteral pediátrica'),(46,'Nutrologia pediátrica'),(47,'Oncologia pediátrica'),(48,'Pneumologia pediátrica'),(49,'Psicogeriatria'),(50,'Psicoterapia'),(51,'Psiquiatria da infância e adolescência'),(52,'Psiquiatria forense'),(53,'Radiologia intervencionista e angiorradiologia'),(54,'Reprodução assistida'),(55,'Reumatologia pediátrica'),(56,'Sexologia'),(57,'Toxicologia médica'),(58,'Transplante de medula óssea'),(59,'Ultrassonografia em ginecologia e obstetrícia');
/*!40000 ALTER TABLE `areas_atuacao_medicas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cirurgias`
--

DROP TABLE IF EXISTS `cirurgias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cirurgias` (
  `id_cirurgia` int(11) NOT NULL,
  `equipe_id` int(11) NOT NULL,
  `procedimento_id` int(11) NOT NULL,
  PRIMARY KEY (`id_cirurgia`,`equipe_id`,`procedimento_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cirurgias`
--

LOCK TABLES `cirurgias` WRITE;
/*!40000 ALTER TABLE `cirurgias` DISABLE KEYS */;
/*!40000 ALTER TABLE `cirurgias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `consultas`
--

DROP TABLE IF EXISTS `consultas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `consultas` (
  `id_consulta` int(11) NOT NULL,
  `procedimento_id` int(11) NOT NULL,
  PRIMARY KEY (`id_consulta`,`procedimento_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `consultas`
--

LOCK TABLES `consultas` WRITE;
/*!40000 ALTER TABLE `consultas` DISABLE KEYS */;
/*!40000 ALTER TABLE `consultas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `enderecos`
--

DROP TABLE IF EXISTS `enderecos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `enderecos` (
  `id_endereco` int(11) NOT NULL AUTO_INCREMENT,
  `rua` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `cep` varchar(8) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `complemento` varchar(45) DEFAULT NULL,
  `nome_estado` varchar(45) NOT NULL,
  `estado_id` int(11) NOT NULL,
  `pais_id` int(11) NOT NULL,
  PRIMARY KEY (`id_endereco`,`estado_id`,`pais_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enderecos`
--

LOCK TABLES `enderecos` WRITE;
/*!40000 ALTER TABLE `enderecos` DISABLE KEYS */;
/*!40000 ALTER TABLE `enderecos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `enfermeiros`
--

DROP TABLE IF EXISTS `enfermeiros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `enfermeiros` (
  `id_enfermeiro` int(11) NOT NULL AUTO_INCREMENT,
  `coren` varchar(45) NOT NULL,
  `funcionario_id` int(11) NOT NULL,
  PRIMARY KEY (`id_enfermeiro`,`funcionario_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enfermeiros`
--

LOCK TABLES `enfermeiros` WRITE;
/*!40000 ALTER TABLE `enfermeiros` DISABLE KEYS */;
/*!40000 ALTER TABLE `enfermeiros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `equipes`
--

DROP TABLE IF EXISTS `equipes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `equipes` (
  `id_equipe` int(11) NOT NULL,
  `chefe_id` int(11) NOT NULL,
  `qte_integrantes` int(11) NOT NULL DEFAULT '1',
  `integrante1_id` int(11) DEFAULT NULL,
  `integrante2_id` int(11) DEFAULT NULL,
  `integrante3_id` int(11) DEFAULT NULL,
  `integrante4_id` int(11) DEFAULT NULL,
  `integrante5_id` int(11) DEFAULT NULL,
  `integrante6_id` int(11) DEFAULT NULL,
  `integrante7_id` int(11) DEFAULT NULL,
  `integrante8_id` int(11) DEFAULT NULL,
  `integrante9_id` int(11) DEFAULT NULL,
  `integrante10_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_equipe`,`chefe_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipes`
--

LOCK TABLES `equipes` WRITE;
/*!40000 ALTER TABLE `equipes` DISABLE KEYS */;
/*!40000 ALTER TABLE `equipes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `especialidades_medicas`
--

DROP TABLE IF EXISTS `especialidades_medicas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `especialidades_medicas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_especialidade` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `especialidades_medicas`
--

LOCK TABLES `especialidades_medicas` WRITE;
/*!40000 ALTER TABLE `especialidades_medicas` DISABLE KEYS */;
INSERT INTO `especialidades_medicas` VALUES (1,'Acupuntura'),(2,'Alergia e imunologia'),(3,'Anestesiologia'),(4,'Angiologia'),(5,'Cardiologia'),(6,'Cirurgia cardiovascular'),(7,'Cirurgia da mão'),(8,'Cirurgia de cabeça e pescoço'),(9,'Cirurgia do aparelho digestivo'),(10,'Cirurgia geral'),(11,'Cirurgia oncológica'),(12,'Cirurgia pediátrica'),(13,'Cirurgia plástica'),(14,'Cirurgia torácica'),(15,'Cirurgia vascular'),(16,'Clínica médica'),(17,'Coloproctologia'),(18,'Dermatologia'),(19,'Endocrinologia e metabologia'),(20,'Endoscopia'),(21,'Gastroenterologia'),(22,'Genética médica'),(23,'Geriatria'),(24,'Ginecologia e obstetrícia'),(25,'Hematologia e hemoterapia'),(26,'Homeopatia'),(27,'Infectologia'),(28,'Mastologia'),(29,'Medicina de emergência'),(30,'Medicina de família e comunidade'),(31,'Medicina do trabalho'),(32,'Medicina de tráfego'),(33,'Medicina esportiva'),(34,'Medicina física e reabilitação'),(35,'Medicina intensiva'),(36,'Medicina legal e perícia médica'),(37,'Medicina nuclear'),(38,'Medicina preventiva e social'),(39,'Nefrologia'),(40,'Neurocirurgia'),(41,'Neurologia'),(42,'Nutrologia'),(43,'Oftalmologia'),(44,'Oncologia clínica'),(45,'Ortopedia e traumatologia'),(46,'Otorrinolaringologia'),(47,'Patologia'),(48,'Patologia clínica/medicina laboratorial'),(49,'Pediatria'),(50,'Pneumologia'),(51,'Psiquiatria'),(52,'Radiologia e diagnóstico por imagem'),(53,'Radioterapia'),(54,'Reumatologia'),(55,'Urologia');
/*!40000 ALTER TABLE `especialidades_medicas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estados`
--

DROP TABLE IF EXISTS `estados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estados` (
  `id` int(11) NOT NULL,
  `nome` varchar(75) DEFAULT NULL,
  `uf` varchar(2) DEFAULT NULL,
  `ibge` int(2) DEFAULT NULL,
  `pais` int(3) DEFAULT NULL,
  `ddd` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Unidades Federativas';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estados`
--

LOCK TABLES `estados` WRITE;
/*!40000 ALTER TABLE `estados` DISABLE KEYS */;
INSERT INTO `estados` VALUES (1,'Acre','AC',12,1,'68'),(2,'Alagoas','AL',27,1,'82'),(3,'Amazonas','AM',13,1,'97,92'),(4,'Amapá','AP',16,1,'96'),(5,'Bahia','BA',29,1,'77,75,73,74,71'),(6,'Ceará','CE',23,1,'88,85'),(7,'Distrito Federal','DF',53,1,'61'),(8,'Espírito Santo','ES',32,1,'28,27'),(9,'Goiás','GO',52,1,'62,64,61'),(10,'Maranhão','MA',21,1,'99,98'),(11,'Minas Gerais','MG',31,1,'34,37,31,33,35,38,32'),(12,'Mato Grosso do Sul','MS',50,1,'67'),(13,'Mato Grosso','MT',51,1,'65,66'),(14,'Pará','PA',15,1,'91,94,93'),(15,'Paraíba','PB',25,1,'83'),(16,'Pernambuco','PE',26,1,'81,87'),(17,'Piauí','PI',22,1,'89,86'),(18,'Paraná','PR',41,1,'43,41,42,44,45,46'),(19,'Rio de Janeiro','RJ',33,1,'24,22,21'),(20,'Rio Grande do Norte','RN',24,1,'84'),(21,'Rondônia','RO',11,1,'69'),(22,'Roraima','RR',14,1,'95'),(23,'Rio Grande do Sul','RS',43,1,'53,54,55,51'),(24,'Santa Catarina','SC',42,1,'47,48,49'),(25,'Sergipe','SE',28,1,'79'),(26,'São Paulo','SP',35,1,'11,12,13,14,15,16,17,18,19'),(27,'Tocantins','TO',17,1,'63'),(99,'Exterior','EX',99,NULL,NULL);
/*!40000 ALTER TABLE `estados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `exames`
--

DROP TABLE IF EXISTS `exames`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `exames` (
  `id_exame` int(11) NOT NULL,
  `procedimento_id` int(11) NOT NULL,
  PRIMARY KEY (`id_exame`,`procedimento_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exames`
--

LOCK TABLES `exames` WRITE;
/*!40000 ALTER TABLE `exames` DISABLE KEYS */;
/*!40000 ALTER TABLE `exames` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `funcionarios`
--

DROP TABLE IF EXISTS `funcionarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `funcionarios` (
  `id_funcionario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `telefone` varchar(45) NOT NULL,
  `cpf` varchar(13) NOT NULL,
  `data_nascimento` date NOT NULL,
  `sexo` varchar(9) NOT NULL,
  `identidade` varchar(45) DEFAULT NULL,
  `orgao_expedidor` varchar(15) DEFAULT NULL,
  `tipo_funcionario_id` int(11) NOT NULL,
  `endereco_id` int(11) NOT NULL,
  PRIMARY KEY (`id_funcionario`,`tipo_funcionario_id`,`endereco_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `funcionarios`
--

LOCK TABLES `funcionarios` WRITE;
/*!40000 ALTER TABLE `funcionarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `funcionarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `medicos`
--

DROP TABLE IF EXISTS `medicos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `medicos` (
  `id_medico` int(11) NOT NULL AUTO_INCREMENT,
  `crm` varchar(45) DEFAULT NULL,
  `funcionario_id` int(11) NOT NULL,
  `especialidade_id` int(11) NOT NULL,
  `area_atuacao_id` int(11) NOT NULL,
  PRIMARY KEY (`id_medico`,`funcionario_id`,`especialidade_id`,`area_atuacao_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `medicos`
--

LOCK TABLES `medicos` WRITE;
/*!40000 ALTER TABLE `medicos` DISABLE KEYS */;
/*!40000 ALTER TABLE `medicos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pacientes`
--

DROP TABLE IF EXISTS `pacientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pacientes` (
  `id_paciente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `cpf` varchar(13) NOT NULL,
  `data_nascimento` date NOT NULL,
  `plano_saude` varchar(3) NOT NULL,
  `alergias` longtext,
  `doencas_cronicas` longtext,
  `identidade` varchar(45) DEFAULT NULL,
  `orgao_expedidor` varchar(4) DEFAULT NULL,
  `sexo` varchar(9) DEFAULT NULL,
  `telefone` varchar(11) DEFAULT NULL,
  `endereco_id` int(11) NOT NULL,
  PRIMARY KEY (`id_paciente`,`endereco_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pacientes`
--

LOCK TABLES `pacientes` WRITE;
/*!40000 ALTER TABLE `pacientes` DISABLE KEYS */;
/*!40000 ALTER TABLE `pacientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paises`
--

DROP TABLE IF EXISTS `paises`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paises` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) DEFAULT NULL,
  `nome_pt` varchar(60) DEFAULT NULL,
  `sigla` varchar(2) DEFAULT NULL,
  `bacen` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Países e Nações';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paises`
--

LOCK TABLES `paises` WRITE;
/*!40000 ALTER TABLE `paises` DISABLE KEYS */;
INSERT INTO `paises` VALUES (1,'Brazil','Brasil','BR',1058),(2,'Afghanistan','Afeganistão','AF',132),(3,'Albania','Albânia, Republica da','AL',175),(4,'Algeria','Argélia','DZ',590),(5,'American Samoa','Samoa Americana','AS',6912),(6,'Andorra','Andorra','AD',370),(7,'Angola','Angola','AO',400),(8,'Anguilla','Anguilla','AI',418),(9,'Antarctica','Antártida','AQ',3596),(10,'Antigua and Barbuda','Antigua e Barbuda','AG',434),(11,'Argentina','Argentina','AR',639),(12,'Armenia','Armênia, Republica da','AM',647),(13,'Aruba','Aruba','AW',655),(14,'Australia','Austrália','AU',698),(15,'Austria','Áustria','AT',728),(16,'Azerbaijan','Azerbaijão, Republica do','AZ',736),(17,'Bahamas','Bahamas, Ilhas','BS',779),(18,'Bahrain','Bahrein, Ilhas','BH',809),(19,'Bangladesh','Bangladesh','BD',817),(20,'Barbados','Barbados','BB',833),(21,'Belarus','Belarus, Republica da','BY',850),(22,'Belgium','Bélgica','BE',876),(23,'Belize','Belize','BZ',884),(24,'Benin','Benin','BJ',2291),(25,'Bermuda','Bermudas','BM',906),(26,'Bhutan','Butão','BT',1198),(27,'Bolivia','Bolívia','BO',973),(28,'Bosnia and Herzegowina','Bósnia-herzegovina (Republica da)','BA',981),(29,'Botswana','Botsuana','BW',1015),(30,'Bouvet Island','Bouvet, Ilha','BV',1023),(31,'British Indian Ocean Territory','Território Britânico do Oceano Indico','IO',7820),(32,'Brunei Darussalam','Brunei','BN',1082),(33,'Bulgaria','Bulgária, Republica da','BG',1112),(34,'Burkina Faso','Burkina Faso','BF',310),(35,'Burundi','Burundi','BI',1155),(36,'Cambodia','Camboja','KH',1414),(37,'Cameroon','Camarões','CM',1457),(38,'Canada','Canada','CA',1490),(39,'Cape Verde','Cabo Verde, Republica de','CV',1279),(40,'Cayman Islands','Cayman, Ilhas','KY',1376),(41,'Central African Republic','Republica Centro-Africana','CF',6408),(42,'Chad','Chade','TD',7889),(43,'Chile','Chile','CL',1589),(44,'China','China, Republica Popular','CN',1600),(45,'Christmas Island','Christmas, Ilha (Navidad)','CX',5118),(46,'Cocos (Keeling) Islands','Cocos (Keeling), Ilhas','CC',1651),(47,'Colombia','Colômbia','CO',1694),(48,'Comoros','Comores, Ilhas','KM',1732),(49,'Congo','Congo','CG',1775),(50,'Congo, the Democratic Republic of the','Congo, Republica Democrática do','CD',8885),(51,'Cook Islands','Cook, Ilhas','CK',1830),(52,'Costa Rica','Costa Rica','CR',1961),(53,'Cote d`Ivoire','Costa do Marfim','CI',1937),(54,'Croatia (Hrvatska)','Croácia (Republica da)','HR',1953),(55,'Cuba','Cuba','CU',1996),(56,'Cyprus','Chipre','CY',1635),(57,'Czech Republic','Tcheca, Republica','CZ',7919),(58,'Denmark','Dinamarca','DK',2321),(59,'Djibouti','Djibuti','DJ',7838),(60,'Dominica','Dominica, Ilha','DM',2356),(61,'Dominican Republic','Republica Dominicana','DO',6475),(62,'East Timor','Timor Leste','TL',7951),(63,'Ecuador','Equador','EC',2399),(64,'Egypt','Egito','EG',2402),(65,'El Salvador','El Salvador','SV',6874),(66,'Equatorial Guinea','Guine-Equatorial','GQ',3310),(67,'Eritrea','Eritreia','ER',2437),(68,'Estonia','Estônia, Republica da','EE',2518),(69,'Ethiopia','Etiópia','ET',2534),(70,'Falkland Islands (Malvinas)','Falkland (Ilhas Malvinas)','FK',2550),(71,'Faroe Islands','Feroe, Ilhas','FO',2593),(72,'Fiji','Fiji','FJ',8702),(73,'Finland','Finlândia','FI',2712),(74,'France','Franca','FR',2755),(76,'French Guiana','Guiana francesa','GF',3255),(77,'French Polynesia','Polinésia Francesa','PF',5991),(78,'French Southern Territories','Terras Austrais e Antárticas Francesas','TF',3607),(79,'Gabon','Gabão','GA',2810),(80,'Gambia','Gambia','GM',2852),(81,'Georgia','Georgia, Republica da','GE',2917),(82,'Germany','Alemanha','DE',230),(83,'Ghana','Gana','GH',2895),(84,'Gibraltar','Gibraltar','GI',2933),(85,'Greece','Grécia','GR',3018),(86,'Greenland','Groenlândia','GL',3050),(87,'Grenada','Granada','GD',2976),(88,'Guadeloupe','Guadalupe','GP',3093),(89,'Guam','Guam','GU',3131),(90,'Guatemala','Guatemala','GT',3174),(91,'Guinea','Guine','GN',3298),(92,'Guinea-Bissau','Guine-Bissau','GW',3344),(93,'Guyana','Guiana','GY',3379),(94,'Haiti','Haiti','HT',3417),(95,'Heard and Mc Donald Islands','Ilha Heard e Ilhas McDonald','HM',3603),(96,'Holy See (Vatican City State)','Vaticano, Estado da Cidade do','VA',8486),(97,'Honduras','Honduras','HN',3450),(98,'Hong Kong','Hong Kong','HK',3514),(99,'Hungary','Hungria, Republica da','HU',3557),(100,'Iceland','Islândia','IS',3794),(101,'India','Índia','IN',3611),(102,'Indonesia','Indonésia','ID',3654),(103,'Iran (Islamic Republic of)','Ira, Republica Islâmica do','IR',3727),(104,'Iraq','Iraque','IQ',3697),(105,'Ireland','Irlanda','IE',3751),(106,'Israel','Israel','IL',3832),(107,'Italy','Itália','IT',3867),(108,'Jamaica','Jamaica','JM',3913),(109,'Japan','Japão','JP',3999),(110,'Jordan','Jordânia','JO',4030),(111,'Kazakhstan','Cazaquistão, Republica do','KZ',1538),(112,'Kenya','Quênia','KE',6238),(113,'Kiribati','Kiribati','KI',4111),(114,'Korea, Democratic People`s Republic of','Coreia, Republica Popular Democrática da','KP',1872),(115,'Korea, Republic of','Coreia, Republica da','KR',1902),(116,'Kuwait','Kuwait','KW',1988),(117,'Kyrgyzstan','Quirguiz, Republica','KG',6254),(118,'Lao People`s Democratic Republic','Laos, Republica Popular Democrática do','LA',4200),(119,'Latvia','Letônia, Republica da','LV',4278),(120,'Lebanon','Líbano','LB',4316),(121,'Lesotho','Lesoto','LS',4260),(122,'Liberia','Libéria','LR',4340),(123,'Libyan Arab Jamahiriya','Líbia','LY',4383),(124,'Liechtenstein','Liechtenstein','LI',4405),(125,'Lithuania','Lituânia, Republica da','LT',4421),(126,'Luxembourg','Luxemburgo','LU',4456),(127,'Macau','Macau','MO',4472),(128,'North Macedonia','Macedônia do Norte','MK',4499),(129,'Madagascar','Madagascar','MG',4502),(130,'Malawi','Malavi','MW',4588),(131,'Malaysia','Malásia','MY',4553),(132,'Maldives','Maldivas','MV',4618),(133,'Mali','Mali','ML',4642),(134,'Malta','Malta','MT',4677),(135,'Marshall Islands','Marshall, Ilhas','MH',4766),(136,'Martinique','Martinica','MQ',4774),(137,'Mauritania','Mauritânia','MR',4880),(138,'Mauritius','Mauricio','MU',4855),(139,'Mayotte','Mayotte (Ilhas Francesas)','YT',4885),(140,'Mexico','México','MX',4936),(141,'Micronesia, Federated States of','Micronesia','FM',4995),(142,'Moldova, Republic of','Moldávia, Republica da','MD',4944),(143,'Monaco','Mônaco','MC',4952),(144,'Mongolia','Mongólia','MN',4979),(145,'Montserrat','Montserrat, Ilhas','MS',5010),(146,'Morocco','Marrocos','MA',4740),(147,'Mozambique','Moçambique','MZ',5053),(148,'Myanmar','Mianmar (Birmânia)','MM',930),(149,'Namibia','Namíbia','NA',5070),(150,'Nauru','Nauru','NR',5088),(151,'Nepal','Nepal','NP',5177),(152,'Netherlands','Países Baixos (Holanda)','NL',5738),(154,'New Caledonia','Nova Caledonia','NC',5428),(155,'New Zealand','Nova Zelândia','NZ',5487),(156,'Nicaragua','Nicarágua','NI',5215),(157,'Niger','Níger','NE',5258),(158,'Nigeria','Nigéria','NG',5282),(159,'Niue','Niue, Ilha','NU',5312),(160,'Norfolk Island','Norfolk, Ilha','NF',5355),(161,'Northern Mariana Islands','Marianas do Norte','MP',4723),(162,'Norway','Noruega','NO',5380),(163,'Oman','Oma','OM',5568),(164,'Pakistan','Paquistão','PK',5762),(165,'Palau','Palau','PW',5754),(166,'Panama','Panamá','PA',5800),(167,'Papua New Guinea','Papua Nova Guine','PG',5452),(168,'Paraguay','Paraguai','PY',5860),(169,'Peru','Peru','PE',5894),(170,'Philippines','Filipinas','PH',2674),(171,'Pitcairn','Pitcairn, Ilha','PN',5932),(172,'Poland','Polônia, Republica da','PL',6033),(173,'Portugal','Portugal','PT',6076),(174,'Puerto Rico','Porto Rico','PR',6114),(175,'Qatar','Catar','QA',1546),(176,'Reunion','Reunião, Ilha','RE',6602),(177,'Romania','Romênia','RO',6700),(178,'Russian Federation','Rússia, Federação da','RU',6769),(179,'Rwanda','Ruanda','RW',6750),(180,'Saint Kitts and Nevis','São Cristovão e Neves, Ilhas','KN',6955),(181,'Saint LUCIA','Santa Lucia','LC',7153),(182,'Saint Vincent and the Grenadines','São Vicente e Granadinas','VC',7056),(183,'Samoa','Samoa','WS',6904),(184,'San Marino','San Marino','SM',6971),(185,'Sao Tome and Principe','São Tome e Príncipe, Ilhas','ST',7200),(186,'Saudi Arabia','Arábia Saudita','SA',531),(187,'Senegal','Senegal','SN',7285),(188,'Seychelles','Seychelles','SC',7315),(189,'Sierra Leone','Serra Leoa','SL',7358),(190,'Singapore','Cingapura','SG',7412),(191,'Slovakia (Slovak Republic)','Eslovaca, Republica','SK',2470),(192,'Slovenia','Eslovênia, Republica da','SI',2461),(193,'Solomon Islands','Salomão, Ilhas','SB',6777),(194,'Somalia','Somalia','SO',7480),(195,'South Africa','África do Sul','ZA',7560),(196,'South Georgia and the South Sandwich Islands','Ilhas Geórgia do Sul e Sandwich do Sul','GS',2925),(197,'Spain','Espanha','ES',2453),(198,'Sri Lanka','Sri Lanka','LK',7501),(199,'St. Helena','Santa Helena','SH',7102),(200,'St. Pierre and Miquelon','São Pedro e Miquelon','PM',7005),(201,'Sudan','Sudão','SD',7595),(202,'Suriname','Suriname','SR',7706),(203,'Svalbard and Jan Mayen Islands','Svalbard e Jan Mayen','SJ',7552),(204,'Swaziland','Eswatini','SZ',7544),(205,'Sweden','Suécia','SE',7641),(206,'Switzerland','Suíça','CH',7676),(207,'Syrian Arab Republic','Síria, Republica Árabe da','SY',7447),(208,'Taiwan, Province of China','Formosa (Taiwan)','TW',1619),(209,'Tajikistan','Tadjiquistao, Republica do','TJ',7722),(210,'Tanzania, United Republic of','Tanzânia, Republica Unida da','TZ',7803),(211,'Thailand','Tailândia','TH',7765),(212,'Togo','Togo','TG',8001),(213,'Tokelau','Toquelau, Ilhas','TK',8052),(214,'Tonga','Tonga','TO',8109),(215,'Trinidad and Tobago','Trinidad e Tobago','TT',8150),(216,'Tunisia','Tunísia','TN',8206),(217,'Turkey','Turquia','TR',8273),(218,'Turkmenistan','Turcomenistão, Republica do','TM',8249),(219,'Turks and Caicos Islands','Turcas e Caicos, Ilhas','TC',8230),(220,'Tuvalu','Tuvalu','TV',8281),(221,'Uganda','Uganda','UG',8338),(222,'Ukraine','Ucrânia','UA',8311),(223,'United Arab Emirates','Emirados Árabes Unidos','AE',2445),(224,'United Kingdom','Reino Unido','GB',6289),(225,'United States','Estados Unidos','US',2496),(226,'United States Minor Outlying Islands','Ilhas Menores Distantes dos Estados Unidos','UM',18664),(227,'Uruguay','Uruguai','UY',8451),(228,'Uzbekistan','Uzbequistão, Republica do','UZ',8478),(229,'Vanuatu','Vanuatu','VU',5517),(230,'Venezuela','Venezuela','VE',8508),(231,'Viet Nam','Vietnã','VN',8583),(232,'Virgin Islands (British)','Virgens, Ilhas (Britânicas)','VG',8630),(233,'Virgin Islands (U.S.)','Virgens, Ilhas (E.U.A.)','VI',8664),(234,'Wallis and Futuna Islands','Wallis e Futuna, Ilhas','WF',8753),(235,'Western Sahara','Saara Ocidental','EH',6858),(236,'Yemen','Iémen','YE',3573),(237,'Yugoslavia','Iugoslávia, República Fed. da','YU',3883),(238,'Zambia','Zâmbia','ZM',8907),(239,'Zimbabwe','Zimbabue','ZW',6653),(240,'Bailiwick of Guernsey','Guernsey, Ilha do Canal (Inclui Alderney e Sark)','GG',1504),(241,'Bailiwick of Jersey','Jersey, Ilha do Canal','JE',1508),(243,'Isle of Man','Man, Ilha de','IM',3595),(246,'Crna Gora (Montenegro)','Montenegro','ME',4985),(247,'SÉRVIA','Republika Srbija','RS',7370),(248,'Republic of South Sudan','Sudao do Sul','SS',7600),(249,'Zona del Canal de Panamá','Zona do Canal do Panamá',NULL,8958),(252,'Dawlat Filasṭīn','Palestina','PS',5780),(253,'Åland Islands','Aland, Ilhas','AX',153),(255,'Curaçao','Curaçao','CW',200),(256,'Saint Martin','São Martinho, Ilha de (Parte Holandesa)','SM',6998),(258,'Bonaire','Bonaire','AN',990),(259,'Antartica','Antartica','AQ',420),(260,'Heard Island and McDonald Islands','Ilha Herad e Ilhas Macdonald','AU',3433),(261,'Saint-Barthélemy','São Bartolomeu','FR',6939),(262,'Saint Martin','São Martinho, Ilha de (Parte Francesa)','SM',6980),(263,'Terres Australes et Antarctiques Françaises','Terras Austrais e Antárcticas Francesas','TF',7811);
/*!40000 ALTER TABLE `paises` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `procedimentos`
--

DROP TABLE IF EXISTS `procedimentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `procedimentos` (
  `id_procedimento` int(11) NOT NULL AUTO_INCREMENT,
  `data_procedimento` datetime NOT NULL,
  `nome_procedimento` varchar(45) NOT NULL,
  `tipo_procedimento_id` int(11) NOT NULL,
  `situacao_procedimento_id` int(11) NOT NULL,
  `paciente_id` int(11) NOT NULL,
  PRIMARY KEY (`id_procedimento`,`tipo_procedimento_id`,`situacao_procedimento_id`,`paciente_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `procedimentos`
--

LOCK TABLES `procedimentos` WRITE;
/*!40000 ALTER TABLE `procedimentos` DISABLE KEYS */;
/*!40000 ALTER TABLE `procedimentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `situacoes_procedimentos`
--

DROP TABLE IF EXISTS `situacoes_procedimentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `situacoes_procedimentos` (
  `id` int(11) NOT NULL,
  `nome_situacao` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `situacoes_procedimentos`
--

LOCK TABLES `situacoes_procedimentos` WRITE;
/*!40000 ALTER TABLE `situacoes_procedimentos` DISABLE KEYS */;
INSERT INTO `situacoes_procedimentos` VALUES (1,'EM ANDAMENTO'),(2,'REALIZADO'),(3,'CANCELADO'),(4,'SOLICITADO');
/*!40000 ALTER TABLE `situacoes_procedimentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipos_funcionarios`
--

DROP TABLE IF EXISTS `tipos_funcionarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipos_funcionarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_funcionario` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipos_funcionarios`
--

LOCK TABLES `tipos_funcionarios` WRITE;
/*!40000 ALTER TABLE `tipos_funcionarios` DISABLE KEYS */;
INSERT INTO `tipos_funcionarios` VALUES (1,'MEDICO'),(2,'ENFERMEIRO'),(3,'ADMINISTRADOR');
/*!40000 ALTER TABLE `tipos_funcionarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipos_procedimentos`
--

DROP TABLE IF EXISTS `tipos_procedimentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipos_procedimentos` (
  `id` int(11) NOT NULL,
  `nome_procedimento` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipos_procedimentos`
--

LOCK TABLES `tipos_procedimentos` WRITE;
/*!40000 ALTER TABLE `tipos_procedimentos` DISABLE KEYS */;
INSERT INTO `tipos_procedimentos` VALUES (1,'CIRURGIA'),(2,'EXAME'),(3,'CONSULTA');
/*!40000 ALTER TABLE `tipos_procedimentos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-19 22:36:59
