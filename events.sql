CREATE TABLE events
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    start DATETIME NOT NULL,
    end DATETIME NOT NULL,
);

INSERT INTO DATABASE calendar;