-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 01 Ara 2017, 02:07:38
-- Sunucu sürümü: 10.1.28-MariaDB
-- PHP Sürümü: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `natural`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('0k7b9397eg85uvs23m00g4mg485nuk9k', '::1', 1512086763, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323038363736333b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a313b69735f61646d696e7c623a313b),
('0n5na10np7pc9qg39u6aobmpidnupgrd', '::1', 1512093490, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323039333439303b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a313b69735f61646d696e7c623a313b),
('0nblgqs95bqd73pepmlakoglt015sp5m', '::1', 1511985129, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313938353132393b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a323b69735f61646d696e7c623a313b),
('0s6nfakpbd27ujg95tnaeulv4djhrss1', '::1', 1511978699, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313937383639393b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a323b69735f61646d696e7c623a313b),
('1elj92eeceob8oq6s1d4tn9msa8frdbs', '::1', 1512091001, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323039313030313b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a313b69735f61646d696e7c623a313b),
('1ur6irrf1emdeeclsldpc8r1ics5dmnq', '::1', 1512085464, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323038353436343b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a313b69735f61646d696e7c623a313b),
('3iiupuv9nb8u0fhqq8kmril5fqc9ao3l', '::1', 1511986058, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313938363035383b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a323b69735f61646d696e7c623a313b),
('41m9fq999l72merhjhujndsbt9papcq7', '::1', 1512084752, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323038343735323b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a313b69735f61646d696e7c623a313b),
('50tqmnf50id5ojbi375esooranqdd5j4', '::1', 1511982118, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313938323131383b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a323b69735f61646d696e7c623a313b),
('5tc3aip8n0l0402vmaeg5proc4g3g8c2', '::1', 1511975242, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313937353234323b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a303b69735f61646d696e7c623a303b),
('65j0m90umg65vi8ms6ctpo20lhva2p61', '::1', 1511983845, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313938333834353b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a323b69735f61646d696e7c623a313b),
('6h5g4olulbpcriu9boijsdrgqco0ck34', '::1', 1511988894, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313938383839343b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a323b69735f61646d696e7c623a313b),
('6kfpuasugbsjbkl3caela7vjhvnmo0fj', '::1', 1511975570, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313937353537303b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a303b69735f61646d696e7c623a303b),
('7c2lk4fm72847vfsvotc8qivdaa2mtid', '::1', 1512086135, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323038363133353b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a313b69735f61646d696e7c623a313b),
('ab7fmhjsrvdic03hn6brbopkt2cs9bsr', '::1', 1511987171, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313938373137313b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a323b69735f61646d696e7c623a313b),
('af0epefukmpks4qo4q79cu2h1862alnk', '::1', 1511983147, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313938333134373b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a323b69735f61646d696e7c623a313b),
('akn63ipo1ioamvkvcdjquklp7upgknh2', '::1', 1511977418, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313937373431383b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a303b69735f61646d696e7c623a303b),
('atq0septd82l14mcuhej12hhnf274m14', '::1', 1511985434, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313938353433343b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a323b69735f61646d696e7c623a313b),
('bnpkc0vqcue7fpoa4uv928kmkkc59898', '::1', 1511990934, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313939303933343b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a323b69735f61646d696e7c623a313b),
('bvaaasdfbqljrcsbkgfm9b9mqtq4gg3v', '::1', 1511980723, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313938303732333b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a323b69735f61646d696e7c623a313b),
('cmpib6fdbor6jn8kevc38gnoaft48f0l', '::1', 1511981414, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313938313431343b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a323b69735f61646d696e7c623a313b),
('d8eoch8qll50fso5skc91vq44bv5k6cj', '::1', 1511985753, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313938353735333b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a323b69735f61646d696e7c623a313b),
('dikgabsu8ujlmpuo3uq6nobf19aqslv7', '::1', 1511989327, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313938393332373b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a323b69735f61646d696e7c623a313b),
('djslfm4gjk9suhflb42jjos0av29avvl', '::1', 1511980422, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313938303432323b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a323b69735f61646d696e7c623a313b),
('drlirgateuprt69hsepcdkvsjn10sh2n', '::1', 1512086451, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323038363435313b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a313b69735f61646d696e7c623a313b),
('du15mglrdb7mdgkbubl086chllo6g18b', '::1', 1512085811, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323038353831313b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a313b69735f61646d696e7c623a313b),
('e839t2qo9qg1a8d2b6ekfj81cpqjnmtk', '::1', 1511984211, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313938343231313b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a323b69735f61646d696e7c623a313b),
('ek3qf48ldobrrmhtfs30ce126blkm7p6', '::1', 1512090699, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323039303639393b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a313b69735f61646d696e7c623a313b),
('eudgg4orhdd5mcjcc4g1mvie4g562f9j', '::1', 1512090328, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323039303332383b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a313b69735f61646d696e7c623a313b),
('ff49oghddd334hml0ivcbb3ifcvodu1g', '::1', 1511981076, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313938313037363b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a323b69735f61646d696e7c623a313b),
('g2g1cqhdl5p0qrdlbmj92ek23ko365ae', '::1', 1512087690, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323038373639303b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a313b69735f61646d696e7c623a313b),
('g3qc1c5rhtpd4oae62r2sgatnc1gb86o', '::1', 1512089843, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323038393834333b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a313b69735f61646d696e7c623a313b),
('gja07ob5eivj3v1ju2m5fn47q2v9s49e', '::1', 1512088671, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323038383637313b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a313b69735f61646d696e7c623a313b),
('hd0dm09433684pqt04k17lv7867rnd0t', '::1', 1511975937, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313937353933373b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a303b69735f61646d696e7c623a303b),
('homhcbd10duevhg1ile4gtprvoa4u32k', '::1', 1512092409, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323039323430393b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a313b69735f61646d696e7c623a313b),
('i1lt1utqddp4muo100n3c40828nqpjav', '::1', 1511976486, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313937363438363b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a303b69735f61646d696e7c623a303b),
('ir4j8h0i87oluomqekh5r9lquhuu61su', '::1', 1512088017, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323038383031373b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a313b69735f61646d696e7c623a313b),
('jfatteagtf7av2f83it7hl8llgk06uc1', '::1', 1511991447, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313939313431323b757365725f69647c693a343b757365726e616d657c733a353a2264656d6f33223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a303b69735f61646d696e7c623a303b),
('l3dplpqu59qrarqs7k35gqs8ij4qk23q', '::1', 1511986756, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313938363735363b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a323b69735f61646d696e7c623a313b),
('l790vdhbvetipivuoh2db17rrdgp5mkt', '::1', 1512087069, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323038373036393b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a313b69735f61646d696e7c623a313b),
('m6iejggm71jeqqs1usv0tt8ivjod7qq0', '::1', 1511979057, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313937393035373b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a323b69735f61646d696e7c623a313b),
('n1bhkbp0bu3j8lq63bc554luofjtdvvr', '::1', 1512091343, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323039313334333b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a313b69735f61646d696e7c623a313b),
('n22e4rb5vj9p6he8bhf9q6aq3kbul6ct', '::1', 1511981739, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313938313733393b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a323b69735f61646d696e7c623a313b),
('n2bcnvk164hddbd6jrssu4rdr41lhjgk', '::1', 1511982421, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313938323432313b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a323b69735f61646d696e7c623a313b),
('nar12lcgnc3vee6hq9ln4j3c781fr408', '::1', 1511982734, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313938323733343b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a323b69735f61646d696e7c623a313b),
('odoekkvbur6s895iha9cp5pjq0t34jv8', '::1', 1511986369, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313938363336393b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a323b69735f61646d696e7c623a313b),
('oeqpaqtsdb7vgn6rqo5965b4oapbmtf9', '::1', 1512088363, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323038383336333b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a313b69735f61646d696e7c623a313b),
('okpolu8dpcebssdg6sq75pipkn5628lm', '::1', 1511977114, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313937373131343b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a303b69735f61646d696e7c623a303b),
('punl2peni7oiosiok96e4199dvc4v7b5', '::1', 1511989633, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313938393633333b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a323b69735f61646d696e7c623a313b),
('pv154bfdu98h2nq9p265kkiai59ir33c', '::1', 1511976792, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313937363739323b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a303b69735f61646d696e7c623a303b),
('qam9demesn6d2mllraj5so6b0mt79ap7', '::1', 1511987857, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313938373835373b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a323b69735f61646d696e7c623a313b),
('qcr93a5ck0u3lqpt8i2vh6nad6j7ln46', '::1', 1512093167, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323039333136373b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a313b69735f61646d696e7c623a313b),
('qeehhi3gj7sfjjea1tm65n9uo855433c', '::1', 1511983534, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313938333533343b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a323b69735f61646d696e7c623a313b),
('qi4ffhprpda7jb8li3kjvtnbndb3623v', '::1', 1512088983, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323038383938333b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a313b69735f61646d696e7c623a313b),
('qvtm6e9oq7b47qvcmk4e23vhpovfctr3', '::1', 1511988334, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313938383333343b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a323b69735f61646d696e7c623a313b),
('r1pqeeon5bq4h1gmdeo3fjrpn6ev0tks', '::1', 1512089513, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323038393531333b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a313b69735f61646d696e7c623a313b),
('ribjvpdlvpo8mst78f90u3o4f5p0eoj2', '::1', 1511991403, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313939313430333b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a323b69735f61646d696e7c623a313b),
('rnig82kk8ea8m79g4ot17h61vdv29523', '::1', 1511984554, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313938343535343b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a323b69735f61646d696e7c623a313b),
('s3t3d25cg71bs2pt1bpj1b4it5rfu72m', '::1', 1511979366, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313937393336363b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a323b69735f61646d696e7c623a313b),
('sij2o1j3pev23fof6mrfreiglfh41gro', '::1', 1511979684, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313937393638343b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a323b69735f61646d696e7c623a313b),
('slp6mvh0osvtnirhcgiapr4vfs2nekh6', '::1', 1511977788, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313937373738383b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a303b69735f61646d696e7c623a303b),
('ssgf2ltemiqn7ukg65b4iakuvr5fgj9c', '::1', 1512092822, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323039323832323b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a313b69735f61646d696e7c623a313b),
('u95ehv1uoamfcq0sj3hku5chvodm2v59', '::1', 1511978386, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313937383338363b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a323b69735f61646d696e7c623a313b),
('ufcg70r34odolc160jnoki6c6rid5jk5', '::1', 1512093797, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323039333739373b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a313b69735f61646d696e7c623a313b),
('ug313mou3g1ok60uult0870fvsng4fva', '::1', 1512093829, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323039333739373b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a313b69735f61646d696e7c623a313b),
('ul9tskh5riov75er844n4tv54eh57rjo', '::1', 1512087372, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323038373337323b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a313b69735f61646d696e7c623a313b),
('vj9gqqvri0upmohjfigp5i7gg5pms1oo', '::1', 1512091644, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323039313634343b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a313b69735f61646d696e7c623a313b),
('voi8vt3fq08o115efo79orfct4to4ri4', '::1', 1511990214, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313939303231343b757365725f69647c693a353b757365726e616d657c733a363a22626f6b63756b223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c693a323b69735f61646d696e7c623a313b);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `permaId` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `owner` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `place` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `date` date NOT NULL,
  `date2` date DEFAULT NULL,
  `type` int(5) NOT NULL,
  `subType` int(5) NOT NULL,
  `shortDetail` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Tablo döküm verisi `events`
--

INSERT INTO `events` (`id`, `permaId`, `name`, `owner`, `place`, `date`, `date2`, `type`, `subType`, `shortDetail`, `status`) VALUES
(1, 'SariCicek-2018', '2. Sarıçiçek Kampı', 'Doğaktif', 'Sarıçicek Yaylası, Safranbolu, Karabük', '2017-05-15', '2017-05-18', 0, 0, 'Sarıçicekte 2 gece 3 günlük kamp', 0),
(2, 'SariCicek-2018', '2. Sarıçiçek Kampı', 'Doğaktif', 'Sarıçicek Yaylası, Safranbolu, Karabük', '2017-05-15', '2017-05-18', 0, 3, 'Sarıçicekte 2 gece 3 günlük kamp', 0),
(3, 'SariCicek-2018', '2. Sarıçiçek Kampı', 'Doğaktif', 'Sarıçicek Yaylası, Safranbolu, Karabük', '2017-05-15', '2017-05-18', 0, 3, 'Sarıçicekte 2 gece 3 günlük kamp', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `people`
--

CREATE TABLE `people` (
  `id` int(5) NOT NULL,
  `userid` int(5) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `nickName` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `surName` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `gender` int(1) NOT NULL,
  `paranoid` int(1) NOT NULL,
  `citizen` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `camperLevel` int(1) NOT NULL,
  `isStudent` int(1) NOT NULL,
  `uniDep` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL,
  `ref` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `ePhone` varchar(50) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Tablo döküm verisi `people`
--

INSERT INTO `people` (`id`, `userid`, `name`, `nickName`, `surName`, `gender`, `paranoid`, `citizen`, `camperLevel`, `isStudent`, `uniDep`, `ref`, `phone`, `ePhone`) VALUES
(17, 5, 'Burak', 'Harry', 'Karahan', 1, 2, '30ROf0fjYCEsS949xiimAw==', 4, 1, 'Teknoloji Fak. Enerji S. Mühendisliği', 'Zeynel Karadağ', '+905468838488', '+905530899446');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  `avatar` varchar(255) DEFAULT 'default.jpg',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `is_admin` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `is_confirmed` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `is_deleted` tinyint(1) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `avatar`, `created_at`, `updated_at`, `is_admin`, `is_confirmed`, `is_deleted`) VALUES
(3, 'demo2', 'demo2@demo.com', '$2y$10$H8mxYBCQDOI5OZ4Sd6hZgeHjqQuILvItLxvRdJZP1FzxDXTFjiCZm', 'default.jpg', '2017-11-27 11:14:13', NULL, 0, 2, 0),
(4, 'demo3', 'demo3@demo.com', '$2y$10$cxDd36e1nEMJ8VV1v3kEEev1BFexjt8d5YS1JHLukz4qOhj38G9cW', 'default.jpg', '2017-11-27 11:20:07', NULL, 0, 0, 0),
(5, 'bokcuk', 'bok@bok.com', '$2y$10$V0.JHY5R0kogZy7D0PaL7.nSGFC5WTzkZ5FE.7KsqnWrL3t3t9HfW', 'default.jpg', '2017-11-28 21:44:47', NULL, 1, 1, 0),
(6, 'marlonjd', 'bokcuk@bokcuk.com', '$2y$10$k80ji81hY7E85ckOwYcPJugsDAolwCj2iu6Yrd9y.RDVFuOmm3WNO', 'default.jpg', '2017-11-28 21:47:33', NULL, 0, 0, 0);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Tablo için indeksler `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `people`
--
ALTER TABLE `people`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
