DROP DATABASE IF EXISTS PortfolioSite;
CREATE DATABASE PortfolioSite;
USE PortfolioSite;

CREATE TABLE works(
    Work_No INT(11) NOT NULL,
    `Name` VARCHAR(50) NOT NULL,
    Thumbnail_Img VARCHAR(50) NOT NULL,
    PRIMARY KEY (Work_No)
);

CREATE TABLE images(
    Image_ID INT(11) NOT NULL,
    Work_No INT(11) NOT NULL,
    Image_Src VARCHAR(50) NOT NULL,
    Image_Alt VARCHAR(50) NOT NULL,
    PRIMARY KEY (Image_ID)
);

CREATE TABLE category(
    Category_ID INT(11) NOT NULL,
    `Name` VARCHAR(50) NOT NULL,
    PRIMARY KEY (Category_ID)
);

CREATE TABLE work_category(
    Work_No INT(11) NOT NULL,
    Category_ID INT(11) NOT NULL,
    PRIMARY KEY (Work_No, Category_ID)
);





ALTER TABLE images ADD CONSTRAINT work_img_no_fk FOREIGN KEY (Work_No) REFERENCES works (Work_No);
ALTER TABLE work_category ADD CONSTRAINT work_cat_no_fk FOREIGN KEY (Work_No) REFERENCES works (Work_No);
ALTER TABLE work_category ADD CONSTRAINT work_cat_id_fk FOREIGN KEY (Category_ID) REFERENCES category (Category_ID);


