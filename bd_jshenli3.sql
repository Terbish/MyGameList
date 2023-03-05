-- Active: 1675025700040@@cssql.seattleu.edu@3306@bd_jshenli3


DROP TABLE User, Studio, GamePlatform, Game, List, Review, Genre, Platform, UserList, ListGame, GenreInfo, GameGenre;

CREATE TABLE User(
    USER_ID         INT         NOT NULL AUTO_INCREMENT,
    USERNAME        VARCHAR(20) NOT NULL,
    USER_EMAIL      VARCHAR(50) NOT NULL,
    USER_PASSWORD   VARCHAR(20) NOT NULL,
    REGION          CHAR(2)     NOT NULL,
    VERIFICATION    CHAR(1)     NOT NULL,

    PRIMARY KEY (USER_ID)
);

CREATE TABLE Studio(
    STUDIO_ID               INT             NOT NULL AUTO_INCREMENT,
    STUDIO_FORMATION_DATE   DATE            NOT NULL,
    STUDIO_NAME             VARCHAR(50)     NOT NULL,

    PRIMARY KEY (STUDIO_ID)
);

CREATE TABLE Game(
    GAME_ID            INT              NOT NULL AUTO_INCREMENT,
    GAME_NAME          VARCHAR(100)      NOT NULL,
    PRICE              DECIMAL(5, 2)    NOT NULL,
    AVG_REVIEW_SCORE   DECIMAL(3, 1),
    GAME_LANGUAGE      CHAR(3)          NOT NULL,          
    RELEASE_DATE       DATE             NOT NULL,
    STUDIO_ID          INT              NOT NULL,

    PRIMARY KEY (GAME_ID),
    FOREIGN KEY (STUDIO_ID) REFERENCES Studio(STUDIO_ID)
);

CREATE TABLE List(
    LIST_ID             INT         NOT NULL AUTO_INCREMENT,
    USER_ID             INT         NOT NULL,
    LIST_CREATION_DATE  DATETIME    NOT NULL DEFAULT CURRENT_TIMESTAMP,
    LIST_NAME           VARCHAR(20) NOT NULL,

    PRIMARY KEY (LIST_ID),
    FOREIGN KEY (USER_ID) REFERENCES User(USER_ID)
);

CREATE TABLE Review(
    REVIEW_ID       INT         NOT NULL AUTO_INCREMENT,
    REVIEW_DATE     DATETIME    NOT NULL DEFAULT CURRENT_TIMESTAMP,
    REVIEW_SCORE    INT(10)     NOT NULL,
    REVIEW_TEXT     TEXT        NOT NULL,
    USER_ID         INT         NOT NULL,
    GAME_ID         INT         NOT NULL,

    PRIMARY KEY (REVIEW_ID),
    FOREIGN KEY (USER_ID) REFERENCES User(USER_ID),
    FOREIGN KEY (GAME_ID) REFERENCES Game(GAME_ID)
);


CREATE TABLE Genre(
    GENRE_ID            INT             NOT NULL AUTO_INCREMENT,
    GENRE_NAME          VARCHAR(20)     NOT NULL,
    GENRE_DESCRIPTION   TEXT            NOT NULL,

    PRIMARY KEY (GENRE_ID)
);

CREATE TABLE Platform(
    PLATFORM_ID         INT             NOT NULL AUTO_INCREMENT,
    PLATFORM_NAME       VARCHAR(50)     NOT NULL,

    PRIMARY KEY (PLATFORM_ID)
);

CREATE TABLE GamePlatform(
    GAME_ID            INT              NOT NULL,
    PLATFORM_ID        INT              NOT NULL,
    PRIMARY KEY (GAME_ID, PLATFORM_ID),
    FOREIGN KEY (GAME_ID) REFERENCES Game(GAME_ID),
    FOREIGN KEY (PLATFORM_ID) REFERENCES Platform(PLATFORM_ID)
);

CREATE TABLE UserList(
    USER_ID         INT         NOT NULL,
    LIST_ID         INT         NOT NULL,

    PRIMARY KEY(USER_ID, LIST_ID),
    FOREIGN KEY (USER_ID) REFERENCES User(USER_ID),
    FOREIGN KEY (LIST_ID) REFERENCES List(LIST_ID)
);

CREATE TABLE ListGame(
    GAME_ID         INT         NOT NULL,
    LIST_ID         INT         NOT NULL,

    PRIMARY KEY (GAME_ID, LIST_ID),
    FOREIGN KEY (GAME_ID) REFERENCES Game(GAME_ID),
    FOREIGN KEY (LIST_ID) REFERENCES List (LIST_ID)
);

CREATE TABLE GameGenre(
    GAME_ID             INT             NOT NULL,
    GENRE_ID            INT             NOT NULL,

    PRIMARY KEY (GAME_ID, GENRE_ID),
    FOREIGN KEY (GAME_ID) REFERENCES Game(GAME_ID),
    FOREIGN KEY (GENRE_ID) REFERENCES Genre(GENRE_ID)
);


INSERT INTO User(USERNAME, USER_EMAIL, USER_PASSWORD, REGION, VERIFICATION)
VALUES
('john123', 'john123@gmail.com', 'password123', 'US', 'Y'),
('jane456', 'jane456@yahoo.com', 'password456', 'CA', 'N'),
('adam789', 'adam789@hotmail.com', 'password789', 'UK', 'Y'),
( 'sarah101', 'sarah101@outlook.com', 'password101', 'US', 'Y'),
('tom456', 'tom456@gmail.com', 'password456', 'UK', 'N'),
('alice789', 'alice789@yahoo.com', 'password789', 'CA', 'Y'),
('bob123', 'bob123@hotmail.com', 'password123', 'US', 'Y'),
('emma101', 'emma101@outlook.com', 'password101', 'UK', 'N'),
('lucas456', 'lucas456@gmail.com', 'password456', 'CA', 'Y'),
('olivia789', 'olivia789@yahoo.com', 'password789', 'US', 'N');

INSERT INTO Studio (STUDIO_FORMATION_DATE, STUDIO_NAME)
VALUES 
('2005-05-22', 'Blizzard Entertainment'),
('1987-03-03', 'Square Enix'),
('2010-09-17', 'CD Projekt Red'),
('1991-06-11', 'Sega'),
('2006-11-17', 'Ubisoft'),
('2012-11-04', 'Supergiant Games'),
('2007-01-05', 'Naughty Dog'),
('1997-02-06', 'Bioware'),
('2002-08-01', 'Rockstar'),
('1996-05-01', 'Bethesda Game Studios'),
('1999-01-01', 'Santa Monica Studio'),
('2009-01-01', 'Mojang Studios'),
('1986-11-01', 'FromSoftware'),
('1996-08-02', 'NintendoEPD'),
('1996-08-24', 'Valve'),
('2000-01-01', 'Guerrilla Games'),
('2015-12-16', 'Kojima Production'),
('2002-05-01', "Infinity Ward"),
('1989-04-26', 'Game Freak'),
('2005-01-15', '2K Games'),
('2003-06-12', 'Obsidian Entertainment');




INSERT INTO Game (GAME_NAME, PRICE, AVG_REVIEW_SCORE, GAME_LANGUAGE, RELEASE_DATE, STUDIO_ID)
VALUES
('Grand Theft Auto V', 59.99, NULL, 'ENG', '2013-09-17', 9),
('The Witcher 3: Wild Hunt', 39.99, NULL, 'ENG', '2015-05-19', 3),
('Red Dead Redemption 2', 79.99, NULL, 'ENG', '2018-10-26', 9),
('Horizon Zero Dawn', 49.99, NULL, 'ENG', '2017-02-28', 16),
('Final Fantasy VII Remake', 59.99, NULL, 'ENG', '2020-04-10', 2),
('Bloodborne', 19.99, NULL, 'ENG', '2015-03-24', 13),
('God of War', 39.99, NULL, 'ENG', '2018-04-20', 11),
('The Last of Us Part II', 59.99, NULL, 'ENG', '2020-06-19', 7),
('Death Stranding', 39.99, NULL, 'ENG', '2019-11-08', 17),
('Uncharted 4: A Thief''s End', 19.99, NULL, 'ENG', '2016-05-10', 7),
('Assassin''s Creed Valhalla', 59.99, NULL, 'ENG', '2020-11-10', 5),
('Call of Duty: Modern Warfare', 59.99, NULL, 'ENG', '2019-10-25', 18),
('The Legend of Zelda: Breath of the Wild', 59.99, NULL, 'JPN', '2017-03-03', 14),
('Super Mario Odyssey', 59.99, NULL, 'JPN', '2017-10-27', 14),
('Animal Crossing: New Horizons', 59.99, NULL, 'JPN', '2020-03-20', 14),
('Pokemon Sword', 59.99, NULL, 'JPN', '2019-11-15', 19),
('Portal 2', 9.99, NULL, 'ENG', '2011-04-19', 15),
('Half-Life 2', 9.99, NULL, 'ENG', '2004-11-16', 15),
('BioShock', 19.99, NULL, 'ENG', '2007-08-21', 20),
('Fallout: New Vegas', 9.99, NULL, 'ENG', '2010-10-19', 21);


CREATE TRIGGER update_avg_review_score
AFTER INSERT ON Review
FOR EACH ROW
BEGIN
    UPDATE Game
    SET avg_review_score = (
        SELECT AVG(REVIEW_SCORE)
        FROM Review
        WHERE Review.GAME_ID = Game.GAME_ID
    )
    WHERE Game.GAME_ID = NEW.GAME_ID;
END;


INSERT INTO `Review`(REVIEW_SCORE, REVIEW_TEXT, USER_ID, GAME_ID)
VALUES
(8, 'I really enjoyed this game. The graphics were amazing!', 1, 1),
(6, 'It was okay. I expected more from this game.', 2, 1),
(10, 'This game was awesome! I highly recommend it.', 3, 2),
(9, 'One of the best games I have ever played.', 4, 3),
(7, 'It was fun, but not really my type of game.', 5, 2),
(5, 'Disappointing. I was expecting more from this game.', 6, 3),
(8, 'I enjoyed playing this game, but it was a bit repetitive.', 7, 2),
(9, 'Absolutely loved this game. Would play again.', 8, 1),
(4, 'This game was terrible. Would not recommend.', 9, 3),
(6, 'It was okay. Not great, but not terrible either.', 10, 2);

INSERT INTO List (USER_ID, LIST_NAME)
VALUES
  (3, 'Favorites'),
  (5, 'Wishlist'),
  (2, 'Completed'),
  (7, 'To Play'),
  (4, 'Retro Games'),
  (1, 'Action'),
  (8, 'Adventure'),
  (6, 'Strategy'),
  (2, 'Horror'),
  (5, 'Simulation');

INSERT INTO Genre (GENRE_NAME, GENRE_DESCRIPTION)
VALUES 
('Action', 'Games that emphasize physical challenges and require hand-eye coordination and reaction time.'),
('Adventure', 'Games that emphasize exploration and puzzle-solving.'),
('RPG', 'Games that feature character development, customization, and decision-making.'),
('Strategy', 'Games that require planning, resource management, and tactical thinking.'),
('Sports', 'Games that simulate sports or other physical activities.'),
('Simulation', 'Games that simulate real-world activities or systems.'),
('Puzzle', 'Games that feature problems that require creative thinking and problem-solving.'),
('Horror', 'Games that aim to scare the player and evoke a sense of fear or dread.'),
('Survival', 'Games that require the player to survive in a harsh environment or against overwhelming odds.'),
('FPS', 'Games that emphasize first-person shooting and gunplay.');

INSERT INTO Platform (PLATFORM_NAME)
VALUES 
('Windows'),
('Xbox One'),
('Playstation 4'),
('Nintendo Switch'),
('Mac'),
('Linux'),
('Xbox 360'),
('Playstation 3'),
('iOS'),
('Android');

INSERT INTO GamePlatform (GAME_ID, PLATFORM_ID)
VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 1),
(2, 2),
(2, 3),
(3, 1),
(3, 2),
(3, 3),
(4, 1),
(4, 5),
(5, 1),
(5, 4),
(6, 1),
(7, 3),
(8, 1),
(8, 3),
(9, 1),
(10, 3),
(11, 1),
(11, 2),
(11, 3),
(12, 1),
(12, 2),
(12, 3),
(13, 4),
(14, 4),
(15, 4),
(16, 4),
(17, 1),
(17, 2),
(17, 3),
(18, 1),
(18, 2),
(18, 3),
(19, 1),
(19, 2),
(19, 3),
(20, 1),
(20, 2),
(20, 3);


INSERT INTO ListGame(GAME_ID, LIST_ID)
VALUES
(1, 1),
(2, 1),
(3, 2),
(4, 2),
(5, 3),
(6, 3),
(7, 4),
(8, 4),
(9, 5),
(10, 5);

INSERT INTO UserList(USER_ID, LIST_ID)
VALUES
(1, 1),
(2, 1),
(3, 2),
(4, 3),
(5, 2),
(6, 1),
(7, 3),
(8, 2),
(9, 1),
(10, 3);

INSERT INTO GameGenre (GAME_ID, GENRE_ID)
VALUES 
(1, 1),
(1, 10),
(2, 3),
(2, 2),
(3, 1),
(3, 4),
(4, 6),
(5, 8),
(6, 1),
(6, 10);


/* Queries involving inner join on two or more tables */
/* List the users who reviewed an English game, the game name and the review scores they gave */
SELECT User.USERNAME, Game.GAME_NAME, Review.REVIEW_SCORE
FROM User
INNER JOIN Review
ON User.USER_ID = Review.USER_ID
INNER JOIN Game
ON Review.GAME_ID = Game.GAME_ID
WHERE Game.GAME_LANGUAGE = 'ENG';

/* Queries involving aggregate functions, such as SUM, COUNT, AVG, etc */
/* list the names of each game that has a review and their average review scores ordered by score from highest to lowest */
SELECT g.GAME_NAME, AVG(r.REVIEW_SCORE) AS AVG_REVIEW_SCORE
FROM Game g
INNER JOIN Review r ON g.GAME_ID = r.GAME_ID
GROUP BY g.GAME_NAME
HAVING AVG_REVIEW_SCORE IS NOT NULL
ORDER BY AVG_REVIEW_SCORE DESC;


/* Queries involving subqueries */
/* list the names, release dates, and prices of games that are more expensive than the average price of games released after 2010.*/
SELECT GAME_NAME, RELEASE_DATE, PRICE
FROM Game
WHERE RELEASE_DATE > '2010-01-01' AND PRICE > (
    SELECT AVG(PRICE)
    FROM Game
    WHERE RELEASE_DATE > '2010-01-01'
)
ORDER BY RELEASE_DATE;

/* Queries involving GROUP BY and HAVING clause */
/* Find the studios that have released at least one game and their average review score is above a certain threshold.  */
SELECT s.STUDIO_NAME, AVG(g.AVG_REVIEW_SCORE) AS AVG_REVIEW
FROM Studio s
JOIN Game g ON s.STUDIO_ID = g.STUDIO_ID
GROUP BY s.STUDIO_NAME
HAVING COUNT(g.GAME_ID) >= 1 AND AVG(g.AVG_REVIEW_SCORE) > 6.0;

/* Queries involving left outer join or right outer join of two tables */
/* list all the games with their respective studio names */
SELECT Game.GAME_NAME, Studio.STUDIO_NAME, Studio.`STUDIO_ID`
FROM Game
LEFT OUTER JOIN Studio ON Game.STUDIO_ID = Studio.STUDIO_ID
ORDER BY `STUDIO_ID`;