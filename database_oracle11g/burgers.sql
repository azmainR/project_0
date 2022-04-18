CREATE TABLE choices (
	id number(5) NOT NULL,
	buns varchar2(20),
	sauce varchar2(20),
	spiceness varchar2(20),
	addons varchar2(20),
	burger varchar2(255),
	PRIMARY KEY (id)
);

SELECT COUNT(id) FROM choices c; 