CREATE TABLE public.departments (
	department_id 	SERIAL 		NOT NULL 	PRIMARY KEY,
	function 	VARCHAR(40) 	NOT NULL
);

CREATE TABLE public.employees (
	employee_id 	SERIAL 		NOT NULL 	PRIMARY KEY,
	department_id 	INT  		NOT NULL 	REFERENCES public.departments(department_id),
	first_name 	VARCHAR(100) 	NOT NULL,
	last_name 	VARCHAR(100) 	NOT NULL,
	email 		VARCHAR(255)
);

CREATE TABLE public.user_access (
	app_id 		SERIAL 		NOT NULL 	PRIMARY KEY,
	user_name 	VARCHAR(50) 	NOT NULL  	UNIQUE,
	password 	VARCHAR(50)  	NOT NULL,
	employee_id 	INT  		NOT NULL  	REFERENCES public.employees(employee_id)
);

CREATE TABLE public.roles (
	role_id 	SERIAL 		NOT NULL 	PRIMARY KEY,
	role_desc 	VARCHAR(200)	NOT NULL,
	department_id   INT 		NOT NULL 	REFERENCES public.departments(department_id)
);

CREATE TABLE public.meeting (
	meeting_id 	SERIAL 		NOT NULL 	PRIMARY KEY,
	employee_id 	INT 		NOT NULL 	REFERENCES public.employees(employee_id),
	date 		DATE 		NOT NULL,
	rating 		INT 		NOT NULL,
	feedback 	VARCHAR(100)
);

CREATE TABLE public.scorecard (
	scorecard_id 	SERIAL 		NOT NULL 	PRIMARY KEY,
	department_id 	INT 		NOT NULL 	REFERENCES public.departments(department_id),
	employee_id 	INT 		NOT NULL 	REFERENCES public.employees(employee_id),
	measurable 	VARCHAR(100) 	NOT NULL,
	goal 		VARCHAR(100) 	NOT NULL,
	date 		DATE,
	update 		VARCHAR(100)
);

CREATE TABLE public.issues (
	issue_id 	SERIAL 		NOT NULL 	PRIMARY KEY,
	employee_id 	INT 		NOT NULL 	REFERENCES public.employees(employee_id),
	priority_num 	INT 		NOT NULL,
	decisions 	VARCHAR(100),
	share 		VARCHAR(100),
	needed 		VARCHAR(100),
	submit  	DATE  		NOT NULL,
	issue	 	VARCHAR(255)
);

CREATE TABLE public.core_values (
	core_value_id 	SERIAL 		NOT NULL 	PRIMARY KEY,
	core_value 	VARCHAR(100)	NOT NULL
);

CREATE TABLE public.core_focus (
	core_focus_id 	SERIAL 		NOT NULL 	PRIMARY KEY,
	passion 	VARCHAR(100),
	niche 		VARCHAR(100)
);

CREATE TABLE public.ten_year_target (
	target_id 	SERIAL 		NOT NULL 	PRIMARY KEY,
	future	 	DATE 		NOT NULL,
	vision 		VARCHAR(255)
);

CREATE TABLE public.marketing (
	marketing_id 	SERIAL 		NOT NULL 	PRIMARY KEY,
	target_market 	VARCHAR(255),
	unique1 	VARCHAR(100),
	unique2 	VARCHAR(100),
	unique3 	VARCHAR(100),
	proven_process 	VARCHAR(255),
	guarantee 	VARCHAR(255)
);

CREATE TABLE public.three_year_picture (
	picture_id 	SERIAL 		NOT NULL 	PRIMARY KEY,
	future 		DATE 		NOT NULL,
	revenue 	FLOAT 		NOT NULL,
	profit 		FLOAT 		NOT NULL,
	measurable 	VARCHAR(255) 	NOT NULL
);

CREATE TABLE public.three_year_visions (
	vision_id 	SERIAL 		NOT NULL 	PRIMARY KEY,
	vision	 	VARCHAR(255)
);

CREATE TABLE public.one_year_plan (
	plan_id 	SERIAL 		NOT NULL 	PRIMARY KEY,
	future 		DATE 		NOT NULL,
	revenue 	FLOAT 		NOT NULL,
	profit 		FLOAT 		NOT NULL,
	measurable 	VARCHAR(255) 	NOT NULL
);

CREATE TABLE public.one_year_goals (
	goal_id 	SERIAL 		NOT NULL 	PRIMARY KEY,
	goal	 	VARCHAR(255)
);

CREATE TABLE public.quarter_rocks (
	quarter_rock_id SERIAL 		NOT NULL 	PRIMARY KEY,
	future 		DATE 		NOT NULL,
	revenue 	FLOAT 		NOT NULL,
	profit 		FLOAT 		NOT NULL,
	measurable 	VARCHAR(255) 	NOT NULL
);

CREATE TABLE public.rocks (
	rock_id 	SERIAL 		NOT NULL 	PRIMARY KEY,
	rock	 	VARCHAR(255)
);

CREATE TABLE USERS (
USER_ID SERIAL NOT NULL PRIMARY KEY,
USER_NAME VARCHAR(200) NOT NULL UNIQUE,
PASSWORD VARCHAR(200) NOT NULL,
HASH VARCHAR(200),
ACCESS INT NOT NULL);
