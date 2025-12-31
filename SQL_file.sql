create DATABASE photosphere;
use photosphere;

CREATE TABLE user (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(50) NOT NULL,
    bio VARCHAR(50),
    role ENUM('basicUser', 'proUser', 'admin', 'moderator'),
    level VARCHAR(50),
    uploadCount INT DEFAULT 0,
    subscriptionStart DATETIME,
    subscriptionEnd DATETIME,
    profilePicture VARCHAR(50),
    createdAt DATETIME DEFAULT CURRENT_TIMESTAMP,
    lastLogin DATETIME
);

CREATE TABLE album (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    public BOOLEAN DEFAULT TRUE,
    cover VARCHAR(50),
    publishedAt DATETIME,
    updatedAt DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    userId INT,
    FOREIGN KEY (userId) REFERENCES user(id) ON DELETE CASCADE
);

CREATE TABLE photo (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(50),
    description VARCHAR(50),
    imageLink VARCHAR(50),
    fileSize INT,
    dimensions VARCHAR(50),
    state VARCHAR(50),
    viewCount INT DEFAULT 0,
    publishedAt DATETIME,
    createdAt DATETIME DEFAULT CURRENT_TIMESTAMP,
    updatedAt DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    userId INT,
    FOREIGN KEY (userId) REFERENCES user(id) ON DELETE CASCADE
);

CREATE TABLE comment (
    id INT PRIMARY KEY AUTO_INCREMENT,
    content VARCHAR(50) NOT NULL,
    isArchived BOOLEAN DEFAULT FALSE,
    createdAt DATETIME DEFAULT CURRENT_TIMESTAMP,
    updatedAt DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    userId INT,
    photoId INT,
    FOREIGN KEY (userId) REFERENCES user(id) ON DELETE CASCADE,
    FOREIGN KEY (photoId) REFERENCES photo(id) ON DELETE CASCADE
);

CREATE TABLE tag (
    id INT PRIMARY KEY AUTO_INCREMENT,
    slug VARCHAR(50) UNIQUE NOT NULL,
    name VARCHAR(50) NOT NULL
);

CREATE TABLE photo_tag (
    tagId INT,
    photoId INT,
    PRIMARY KEY (tagId, photoId),
    FOREIGN KEY (tagId) REFERENCES tag(id) ON DELETE CASCADE,
    FOREIGN KEY (photoId) REFERENCES photo(id) ON DELETE CASCADE
);

CREATE TABLE photo_album (
    photoId INT,
    albumId INT,
    PRIMARY KEY (photoId, albumId),
    FOREIGN KEY (photoId) REFERENCES photo(id) ON DELETE CASCADE,
    FOREIGN KEY (albumId) REFERENCES album(id) ON DELETE CASCADE
);