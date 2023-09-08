CREATE TABLE events
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    date DATE,
    start  DATETIME NOT NULL,
    end DATETIME NOT NULL
);