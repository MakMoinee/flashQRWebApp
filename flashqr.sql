/*
 Navicat Premium Data Transfer

 Source Server         : Local
 Source Server Type    : MySQL
 Source Server Version : 80030 (8.0.30)
 Source Host           : localhost:3306
 Source Schema         : flashqr

 Target Server Type    : MySQL
 Target Server Version : 80030 (8.0.30)
 File Encoding         : 65001

 Date: 21/04/2024 05:26:50
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for accounts
-- ----------------------------
DROP TABLE IF EXISTS `accounts`;
CREATE TABLE `accounts`  (
  `accountID` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `accountType` int NOT NULL,
  `studentNumber` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `middleName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthDate` date NOT NULL,
  `guardian` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactNumber` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `isActivated` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`accountID`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of accounts
-- ----------------------------

-- ----------------------------
-- Table structure for answers
-- ----------------------------
DROP TABLE IF EXISTS `answers`;
CREATE TABLE `answers`  (
  `answerID` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `accountID` int NOT NULL,
  `quizID` int NOT NULL,
  `flashCardID` int NOT NULL,
  `answer` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`answerID`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of answers
-- ----------------------------

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories`  (
  `categoryID` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `categoryName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `accountID` int NOT NULL,
  `createdBy` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagePath` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`categoryID`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of categories
-- ----------------------------

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for flash_cards
-- ----------------------------
DROP TABLE IF EXISTS `flash_cards`;
CREATE TABLE `flash_cards`  (
  `flashCardID` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `flashCardName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoryID` int NOT NULL,
  `imagePath` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `accountID` int NOT NULL,
  `createdBy` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`flashCardID`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of flash_cards
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_100000_create_password_reset_tokens_table', 1);
INSERT INTO `migrations` VALUES (2, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (4, '2024_01_17_074844_create_accounts_table', 1);
INSERT INTO `migrations` VALUES (5, '2024_03_16_075003_create_categories_table', 1);
INSERT INTO `migrations` VALUES (6, '2024_03_16_102700_create_flash_cards_table', 1);
INSERT INTO `migrations` VALUES (7, '2024_03_20_053105_create_quizzes_table', 1);
INSERT INTO `migrations` VALUES (8, '2024_03_24_173545_create_user_approved_logs_table', 1);
INSERT INTO `migrations` VALUES (9, '2024_04_15_150018_create_answers_table', 1);
INSERT INTO `migrations` VALUES (10, '2024_04_20_073106_create_user_histories_table', 1);

-- ----------------------------
-- Table structure for password_reset_tokens
-- ----------------------------
DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_reset_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token` ASC) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type` ASC, `tokenable_id` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for quizzes
-- ----------------------------
DROP TABLE IF EXISTS `quizzes`;
CREATE TABLE `quizzes`  (
  `quizID` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `flashCardID` int NOT NULL,
  `question` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `keyAnswer` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`quizID`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of quizzes
-- ----------------------------

-- ----------------------------
-- Table structure for user_approved_logs
-- ----------------------------
DROP TABLE IF EXISTS `user_approved_logs`;
CREATE TABLE `user_approved_logs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `accountID` int NOT NULL,
  `approver` int NOT NULL,
  `isActivated` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user_approved_logs
-- ----------------------------

-- ----------------------------
-- Table structure for user_histories
-- ----------------------------
DROP TABLE IF EXISTS `user_histories`;
CREATE TABLE `user_histories`  (
  `userHistoryID` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `accountID` int NOT NULL,
  `action` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`userHistoryID`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user_histories
-- ----------------------------

-- ----------------------------
-- View structure for vwcategories
-- ----------------------------
DROP VIEW IF EXISTS `vwcategories`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `vwcategories` AS select `categories`.`categoryID` AS `categoryID`,`categories`.`categoryName` AS `categoryName`,`categories`.`accountID` AS `accountID`,`categories`.`createdBy` AS `createdBy`,`categories`.`imagePath` AS `imagePath`,`categories`.`created_at` AS `created_at`,`categories`.`updated_at` AS `updated_at`,`accounts`.`accountType` AS `accountType` from (`categories` join `accounts` on((`categories`.`accountID` = `accounts`.`accountID`)));

-- ----------------------------
-- View structure for vwflashcards
-- ----------------------------
DROP VIEW IF EXISTS `vwflashcards`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `vwflashcards` AS select `flash_cards`.`flashCardID` AS `flashCardID`,`flash_cards`.`flashCardName` AS `flashCardName`,`flash_cards`.`categoryID` AS `categoryID`,`flash_cards`.`imagePath` AS `imagePath`,`flash_cards`.`description` AS `description`,`flash_cards`.`accountID` AS `accountID`,`flash_cards`.`createdBy` AS `createdBy`,`flash_cards`.`created_at` AS `created_at`,`flash_cards`.`updated_at` AS `updated_at`,`categories`.`categoryName` AS `categoryName` from (`flash_cards` join `categories` on((`flash_cards`.`categoryID` = `categories`.`categoryID`)));

-- ----------------------------
-- View structure for vwhistoryrecords
-- ----------------------------
DROP VIEW IF EXISTS `vwhistoryrecords`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `vwhistoryrecords` AS select `user_histories`.`userHistoryID` AS `userHistoryID`,`user_histories`.`action` AS `action`,`user_histories`.`description` AS `description`,`accounts`.`lastName` AS `lastName`,`accounts`.`firstName` AS `firstName`,`accounts`.`middleName` AS `middleName`,`user_histories`.`created_at` AS `created_at`,`user_histories`.`accountID` AS `accountID` from (`user_histories` join `accounts` on((`user_histories`.`accountID` = `accounts`.`accountID`)));

-- ----------------------------
-- View structure for vwquizzes
-- ----------------------------
DROP VIEW IF EXISTS `vwquizzes`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `vwquizzes` AS select `quizzes`.`quizID` AS `quizID`,`quizzes`.`flashCardID` AS `flashCardID`,`quizzes`.`question` AS `question`,`quizzes`.`keyAnswer` AS `keyAnswer`,`quizzes`.`created_at` AS `created_at`,`quizzes`.`updated_at` AS `updated_at`,`flash_cards`.`flashCardName` AS `flashCardName`,`categories`.`categoryName` AS `categoryName`,`flash_cards`.`description` AS `description`,`flash_cards`.`imagePath` AS `imagePath` from ((`quizzes` join `flash_cards` on((`quizzes`.`flashCardID` = `flash_cards`.`flashCardID`))) join `categories` on((`flash_cards`.`categoryID` = `categories`.`categoryID`)));

-- ----------------------------
-- View structure for vwresults
-- ----------------------------
DROP VIEW IF EXISTS `vwresults`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `vwresults` AS select `quizzes`.`flashCardID` AS `flashCardID`,`answers`.`accountID` AS `accountID`,`flash_cards`.`flashCardName` AS `flashCardName`,max(`answers`.`created_at`) AS `created_at`,sum((case when (`quizzes`.`keyAnswer` = `answers`.`answer`) then 5 else 0 end)) AS `score` from ((`answers` join `quizzes` on((`answers`.`quizID` = `quizzes`.`quizID`))) join `flash_cards` on((`quizzes`.`flashCardID` = `flash_cards`.`flashCardID`))) group by `quizzes`.`flashCardID`,`answers`.`accountID`,`flash_cards`.`flashCardName`;

-- ----------------------------
-- View structure for vwusers
-- ----------------------------
DROP VIEW IF EXISTS `vwusers`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `vwusers` AS select `accounts`.`accountID` AS `accountID`,`accounts`.`accountType` AS `accountType`,`accounts`.`studentNumber` AS `studentNumber`,`accounts`.`lastName` AS `lastName`,`accounts`.`firstName` AS `firstName`,`accounts`.`middleName` AS `middleName`,`accounts`.`isActivated` AS `isActivated`,`accounts`.`created_at` AS `created_at`,`user_approved_logs`.`approver` AS `approver` from (`accounts` join `user_approved_logs` on((`accounts`.`accountID` = `user_approved_logs`.`accountID`)));

SET FOREIGN_KEY_CHECKS = 1;
