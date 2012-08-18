DROP DATABASE `marrydoor`; 

CREATE DATABASE `marrydoor` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `marrydoor`;

-- ---------- Table for users --------------- 

create table users(userId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, marryId VARCHAR(100) UNIQUE, 
emailId VARCHAR(100) NOT NULL,  password VARCHAR(100) NOT NULL, name VARCHAR(250) NOT NULL, 
dob DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00', gender char(1) NOT NULL DEFAULT 'M', motherTounge int(10) NOT NULL, createdOn DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
active TINYINT(5) NOT NULL, handicapped TINYINT(5) NOT NULL, highlighted TINYINT(5) NOT NULL, userType TINYINT NOT NULL, PRIMARY KEY(userId))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- --------Table for userLoggedDetails-------------

create table userLoggedDetails(logId BIGINT
UNIQUE NOT NULL AUTO_INCREMENT,userId BIGINT NOT NULL, loggedIn DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00', 
loggedOut DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00', 
profileUpdage TINYINT(1) DEFAULT 0, PRIMARY KEY(logId), FOREIGN KEY (userId) REFERENCES users(userId))ENGINE=InnoDB AUTO_INCREMENT=0
DEFAULT CHARSET=utf8;

-- ------Table for userPersonalDetails------------

create table userPersonalDetails(personalDetailsId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, userId BIGINT NOT NULL, casteId INT(10) NOT NULL DEFAULT 0, religion INT(10) NOT NULL DEFAULT 0, countryId INT(10) NOT NULL DEFAULT 0, stateId INT(10) NOT NULL DEFAULT 0, distictId INT(10) NOT NULL DEFAULT 0, place INT(10) NOT NULL DEFAULT 0, mobilePhone INT(10) NOT NULL, landPhone INT(15) NOT NULL, intercasteable TINYINT NOT NULL DEFAULT 0, createdBy TINYINT NOT NULL DEFAULT 0, maritalStatus TINYINT NOT NULL DEFAULT 0, PRIMARY KEY(personalDetailsId), FOREIGN KEY (userId) REFERENCES users(userId))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- --------Table for userContactDetails--------------

create table userContactDetails(contactDetailsId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, userId BIGINT NOT NULL, mobileNo INT(10) NOT NULL, landLine INT(15) NOT NULL, alternativeNo VARCHAR(20) NOT NULL, facebookUrl VARCHAR(255), skypeId VARCHAR(255), googleIM VARCHAR(255), yahooIM VARCHAR(255), visibility TINYINT NOT NULL DEFAULT 0, PRIMARY KEY(contactDetailsId), FOREIGN KEY (userId) REFERENCES users(userId))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;


-- ------Table for address---------

create table address(addressId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, userId BIGINT NOT NULL, houseName VARCHAR(255) NOT NULL, place VARCHAR(255) NOT NULL, city VARCHAR(255) NOT NULL, postoffice VARCHAR(255) NOT NULL, district VARCHAR(255) NOT NULL, state VARCHAR(255) NOT NULL, country VARCHAR(255) NOT NULL, pincode INT(10) NOT NULL, addresType TINYINT NOT NULL DEFAULT 0, PRIMARY KEY(addressId), FOREIGN KEY (userId) REFERENCES users(userId))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;



-- ---Table for physicalDetails------

create table physicalDetails(physicalId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, userId BIGINT NOT NULL, heightId BIGINT NOT NULL, weight INT NOT NULL, bodyType TINYINT NOT NULL DEFAULT 0, complexion TINYINT NOT NULL DEFAULT 0, physicalStatus TINYINT NOT NULL DEFAULT 0, PRIMARY KEY(physicalId), FOREIGN KEY (userId) REFERENCES users(userId))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;


-- ---- Tale for education----------

create table education(edId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, userId BIGINT NOT NULL, educationId BIGINT NOT NULL, occupationId BIGINT NOT NULL, employedIn TINYINT NOT NULL DEFAULT 0, yearlyIncome DOUBLE(8,2) NOT NULL, PRIMARY KEY(edId), FOREIGN KEY (userId) REFERENCES users(userId))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;


-- ---- Table for habit------

create table habit(habitId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, userId BIGINT NOT NULL, food TINYINT NOT NULL DEFAULT 0, smoking TINYINT NOT NULL DEFAULT 0, drinking TINYINT NOT NULL DEFAULT 0, PRIMARY KEY(habitId), FOREIGN KEY (userId) REFERENCES users(userId))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;


-- ---Table for familyProfile-----

create table familyProfile(familyProfileID BIGINT UNIQUE NOT NULL AUTO_INCREMENT, userId BIGINT NOT NULL, familyStatus TINYINT NOT NULL DEFAULT 0, familyType TINYINT NOT NULL DEFAULT 0, familyValues TINYINT NOT NULL DEFAULT 0, brothers INT NOT NULL, sisters INT NOT NULL, brotherMarried INT NOT NULL, SisterMarried INT NOT NULL, familyPic VARCHAR(255), visibility TINYINT NOT NULL DEFAULT 0, familyDesc TEXT NOT NULL, userDesc TEXT NOT NULL, PRIMARY KEY(familyProfileID), FOREIGN KEY (userId) REFERENCES users(userId))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;


-- --Table for hobiesAndInterests-----

create table hobiesAndInterests(hobiesId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, userId BIGINT NOT NULL, hobies TEXT NOT NULL, interests TEXT NOT NULL, musics TEXT NOT NULL, reading TEXT NOT NULL, movies TEXT NOT NULL, activities TEXT NOT NULL, cuisine TEXT NOT NULL, languages TEXT NOT NULL, languageOther VARCHAR(100) NOT NULL, PRIMARY KEY(hobiesId), FOREIGN KEY (userId) REFERENCES users(userId))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;


-- -------Table for partnerPreferences--------

create table partnerPreferences(preferenceId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, userId BIGINT NOT NULL,ageFrom INT(10) NOT NULL DEFAULT 0, ageTo INT(10) NOT NULL DEFAULT 0, maritalStatus TINYINT NOT NULL DEFAULT 0, haveChildren TINYINT NOT NULL DEFAULT 0, heightFrom TINYINT NOT NULL DEFAULT 0, heightTo TINYINT NOT NULL DEFAULT 0, physicalStatus TINYINT NOT NULL DEFAULT 0, religion INT(10) NOT NULL DEFAULT 0, caste TEXT NOT NULL, manglik TINYINT NOT NULL DEFAULT 0, star TEXT NOT NULL, eatingHabits TEXT NOT NULL, drinkingHabits TEXT NOT NULL, smokingHabits TEXT NOT NULL, languages TEXT NOT NULL, countries TEXT NOT NULL, states TEXT NOT NULL, districts TEXT NOT NULL, places TEXT NOT NULL, citizenship TEXT NOT NULL, occupation TEXT NOT NULL, annualIncome INT NOT NULL DEFAULT 0, partnerDescription TEXT NOT NULL, PRIMARY KEY(preferenceId), FOREIGN KEY (userId) REFERENCES users(userId))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;


-- ----Table for photos-----

create table photos(photoId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, userId BIGINT NOT NULL, imageName VARCHAR(100) NOT NULL, profileImage TINYINT NOT NULL DEFAULT 0, PRIMARY KEY(photoId), FOREIGN KEY (userId) REFERENCES users(userId))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- --TABLE FOR documents

create table documents(documentId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, userId BIGINT NOT NULL, documentName VARCHAR(100) NOT NULL, documentType TINYINT NOT NULL DEFAULT 0, PRIMARY KEY(documentId), FOREIGN KEY (userId) REFERENCES users(userId))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;	


-- ---TABLE FOR horoscopes-----

create table horoscopes(horoscopeId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, userId BIGINT NOT NULL, sign INT NOT NULL,time VARCHAR(250), astrodate INT NOT NULL,country VARCHAR(250) NOT NULL, state VARCHAR(250) NOT NULL,city VARCHAR(250) NOT NULL, horoscopeFile VARCHAR(100), grahanilaFile VARCHAR(100), visibility INT(100) NOT NULL DEFAULT 0, dosham INT(100) NOT NULL DEFAULT 0, sudham INT(100) NOT NULL DEFAULT 0, PRIMARY KEY(horoscopeId), FOREIGN KEY (userId) REFERENCES users(userId))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;


-- --TABLE FOR reference----

create table reference(referenceId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, userId BIGINT NOT NULL, relation VARCHAR(250) NOT NULL, referName VARCHAR(250) NOT NULL, referHouseName VARCHAR(250) NOT NULL, referPlace VARCHAR(250) NOT NULL, referCity VARCHAR(250) NOT NULL, referState VARCHAR(250) NOT NULL, referPostcode INT(10) NOT NULL, referPostOffice VARCHAR(250) NOT NULL, referDistrict VARCHAR(250) NOT NULL, referCountry VARCHAR(250) NOT NULL, referEmail VARCHAR(250) NOT NULL, referOccupation vARCHAR(250) NOT NULL, referCallFrom VARCHAR(50) NOT NULL, referCallTo INT(10) NOT NULL, referCallTime CHAR(2) NOT NULL, visibility TINYINT NOT NULL DEFAULT 0, PRIMARY KEY(referenceId), FOREIGN KEY (userId) REFERENCES users(userId))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- --TABLE FOR messages

create table messages(messageId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, senderId BIGINT NOT NULL, receiverId BIGINT NOT NULL, message TEXT NOT NULL, status TINYINT NOT NULL DEFAULT 0, sendDate DATE NOT NULL, PRIMARY KEY(messageId))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;


-- ---table for interests------

create table interests(interestId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, senderId BIGINT NOT NULL, receiverId BIGINT NOT NULL, status TINYINT NOT NULL DEFAULT 0, sendDate DATE NOT NULL, PRIMARY KEY(interestId))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;



-- --table for shortlist----

create table shortlist(shortlistId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, userID BIGINT NOT NULL, profileID BIGINT NOT NULL, PRIMARY KEY(shortlistId))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- --table for profileViews---

create table profileViews(profileViewId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, userID BIGINT NOT NULL, visitedId BIGINT NOT NULL, PRIMARY KEY(profileViewId))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- --table for country

create table country(countryId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, name VARCHAR(250) NOT NULL, active BIGINT NOT NULL DEFAULT 1, PRIMARY KEY(countryId))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;	

-- -table for states----

create table states(stateId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, countryId BIGINT NOT NULL, name VARCHAR(250) NOT NULL, active BIGINT NOT NULL DEFAULT 1, PRIMARY KEY(stateId), FOREIGN KEY (countryId) REFERENCES country(countryId))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- -table for districts---


create table districts(districtId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, stateId BIGINT NOT NULL, name VARCHAR(250) NOT NULL, active BIGINT NOT NULL DEFAULT 1, PRIMARY KEY(districtId), FOREIGN KEY (stateId) REFERENCES states(stateId))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- -table for places---

create table places(placeId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, districtId BIGINT NOT NULL, name VARCHAR(250) NOT NULL, type BIGINT NOT NULL DEFAULT 0, active BIGINT NOT NULL DEFAULT 1, PRIMARY KEY(placeId), FOREIGN KEY (districtId) REFERENCES districts(districtId))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- -table for languages--

create table languages(languageId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, name VARCHAR(250) NOT NULL, active BIGINT NOT NULL DEFAULT 1, PRIMARY KEY(languageId))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- -table for religion---

create table religion(religionId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, name VARCHAR(250) NOT NULL, active BIGINT NOT NULL DEFAULT 1, PRIMARY KEY(religionId))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- -table for caste----

create table caste(casteId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, religionId BIGINT NOT NULL, name VARCHAR(250) NOT NULL, active BIGINT NOT NULL DEFAULT 1, PRIMARY KEY(casteId), FOREIGN KEY (religionId) REFERENCES religion(religionId))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- -table for education_master---

create table education_master(educationId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, name VARCHAR(250) NOT NULL, active BIGINT NOT NULL DEFAULT 1, PRIMARY KEY(educationId))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;



-- --table for occupation_master---

create table occupation_master(occupationId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, name VARCHAR(250) NOT NULL, active BIGINT NOT NULL DEFAULT 1, PRIMARY KEY(occupationId))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- --table for hobies_master---

create table hobies_master(hobiesId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, name VARCHAR(250) NOT NULL, active BIGINT NOT NULL DEFAULT 1, PRIMARY KEY(hobiesId))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;


-- ---table for interests_master---

create table interests_master(interestId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, name VARCHAR(250) NOT NULL, active BIGINT NOT NULL DEFAULT 1, PRIMARY KEY(interestId))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- -table for musics_master---

create table musics_master(musicId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, name VARCHAR(250) NOT NULL, active BIGINT NOT NULL DEFAULT 1, PRIMARY KEY(musicId))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- -table for reading_master----

create table reading_master(musicId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, name VARCHAR(250) NOT NULL, active BIGINT NOT NULL DEFAULT 1, PRIMARY KEY(musicId))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- -table for movies_master---

create table movies_master(moviesId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, name VARCHAR(250) NOT NULL, active BIGINT NOT NULL DEFAULT 1, PRIMARY KEY(moviesId))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- -table for activities_master---

create table activities_master(activitiesId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, name VARCHAR(250) NOT NULL, active BIGINT NOT NULL DEFAULT 1, PRIMARY KEY(activitiesId))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- -tables for cuisines_master---

create table cuisines_master(cuisineId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, name VARCHAR(250) NOT NULL, active BIGINT NOT NULL DEFAULT 1, PRIMARY KEY(cuisineId))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- tables for signs_master---

create table signs_master(signId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, name VARCHAR(250) NOT NULL, image VARCHAR(250) NOT NULL, active BIGINT NOT NULL DEFAULT 1, PRIMARY KEY(signId))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;


-- -table for astrodate_master---

create table astrodate_master(astrodateId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, name VARCHAR(250) NOT NULL, active BIGINT NOT NULL DEFAULT 1, PRIMARY KEY(astrodateId))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;


-- -table for admin_users---

create table admin_users(adminId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, username VARCHAR(250) NOT NULL, password VARCHAR(250) NOT NULL, email VARCHAR(250) NOT NULL,adminTypeId BIGINT NOT NULL, lastLogin DATETIME NOT NULL, status BIGINT NOT NULL DEFAULT 1, PRIMARY KEY(adminId))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- -table for admin_types---

create table admin_types(id BIGINT UNIQUE NOT NULL AUTO_INCREMENT, type VARCHAR(10) NOT NULL, PRIMARY KEY(id))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- -tables for coupon---

create table coupon(id BIGINT UNIQUE NOT NULL AUTO_INCREMENT, couponCode VARCHAR(15) UNIQUE NOT NULL, creationDate DATETIME NOT NULL, startDate DATE NOT NULL, endDate DATE NOT NULL, validity INT(2), status TINYINT NOT NULL DEFAULT 0, isUsed TINYINT NOT NULL DEFAULT 0, batchNo VARCHAR(10) NOT NULL, serialNo INT (8) NOT NULL, couponId INT(10) NOT NULL, couponType ENUM( 'normal', 'promo' ) NOT NULL DEFAULT 'normal', PRIMARY KEY(id))ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;	

-- -table for coupon_logs---

create table coupon_logs(id BIGINT UNIQUE NOT NULL AUTO_INCREMENT, adminUserId INT(10) NOT NULL, batchNo INT(10) UNIQUE NOT NULL, creationTime DATETIME NOT NULL, PRIMARY KEY(id))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;


---table for bodyType_master--

create table bodyType_master(id BIGINT UNIQUE NOT NULL AUTO_INCREMENT, name VARCHAR(250) NOT NULL, active BIGINT NOT NULL DEFAULT 1, PRIMARY KEY(id))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;


---table for complexion_master--

create table complexion_master(id BIGINT UNIQUE NOT NULL AUTO_INCREMENT, name VARCHAR(250) NOT NULL, active BIGINT NOT NULL DEFAULT 1, PRIMARY KEY(id))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;





