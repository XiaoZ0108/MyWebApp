CREATE TABLE cart (
  id INT NOT NULL AUTO_INCREMENT,
  user_id INT NOT NULL,
  item_id INT NOT NULL,
  quantity INT NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  total INT NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (item_id) REFERENCES item(id)
);
