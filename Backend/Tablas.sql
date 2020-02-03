Usuario --> ID, Nombre, Apellido, fecha de nacimiento, e-mail, password

CREATE TABLE USER (
  id int NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(50),
  apellido VARCHAR(50),
  fechanacimiento DATE,
  email VARCHAR(50),
  password VARCHAR(50),
  PRIMARY KEY (id)
);

ALTER TABLE user AUTO_INCREMENT=1;

INSERT INTO user VALUES (
  default, "Tomas", "Solis", "1991-04-19", "tomsolise@gmail.com", "12341234"
);

INSERT INTO user VALUES (
  default, "Karen", "Barreto", "1991-04-19", "tomsolise@gmail.com", "12341234"
);
