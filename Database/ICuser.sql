CREATE TABLE ICuser (
  id INT NOT NULL AUTO_INCREMENT,
  username VARCHAR(190) NOT NULL,
  password VARCHAR(190) NOT NULL,  
  email VARCHAR(190) NOT NULL,  
  PRIMARY KEY (id),
  UNIQUE KEY email (email)
);