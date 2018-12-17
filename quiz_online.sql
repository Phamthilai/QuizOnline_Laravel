CREATE DATABASE quiz_online;
USE quiz_online;

CREATE TABLE admin
(
	id INT,
    username VARCHAR(100),
    passwords VARCHAR(50),
    role INT,
    PRIMARY KEY(id)
);
CREATE TABLE users
(
	id INT,
    username_user VARCHAR(100),
    email VARCHAR(100),
    phone INT,
    school VARCHAR(150),
    active INT,
    PRIMARY KEY(id)
);
CREATE TABLE subjects
(
	id INT,
    name_subject VARCHAR(100),
    PRIMARY KEY(id)
);
CREATE TABLE topic
(
	id INT,
    id_subjects INT,
    name_topic VARCHAR(100),
    quantity_question INT,
    times DATE,
    PRIMARY KEY(id),
	FOREIGN KEY (id_subjects) REFERENCES subjects(id)
);
CREATE TABLE question_detail
(
	id INT,
    id_subjects INT,
    PRIMARY KEY(id),
    FOREIGN KEY (id_subjects) REFERENCES subjects(id)
);
CREATE TABLE question_subjects_detail
(
	id INT,
    id_question_detail INT,
    name_question VARCHAR(250),
    content VARCHAR(250),
    PRIMARY KEY(id),
    FOREIGN KEY (id_question_detail) REFERENCES question_detail(id)
);
CREATE TABLE answer_question
(
	id INT,
    id_question_subjects_detail INT,
    answer VARCHAR(250),
    status_answer TINYINT,
    PRIMARY KEY(id),
    FOREIGN KEY (id_question_subjects_detail) REFERENCES question_subjects_detail(id)
);
CREATE TABLE student_start
(
	id INT,
    id_users INT,
    id_topic INT,
    start_time DATETIME,
    end_time DATETIME,
    status_student_start VARCHAR(250),
    PRIMARY KEY(id),
    FOREIGN KEY (id_topic) REFERENCES topic(id),
    FOREIGN KEY (id_users) REFERENCES users(id)
);
CREATE TABLE student_result
(
	id INT,
    id_student_start INT,
    id_question_detail INT,
    answer_of_student VARCHAR(250),
    PRIMARY KEY(id),
    FOREIGN KEY (id_student_start) REFERENCES student_start(id),
    FOREIGN KEY (id_question_detail) REFERENCES question_detail(id)
);

