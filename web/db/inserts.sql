INSERT INTO departments (function) VALUES 
('Leadership'),
('Operations'),
('Information Technology'),
('Telecommunications'),
('Cabling'),
('Sales'),
('Engineering');

INSERT INTO public.employees (department_id, first_name, last_name, email) VALUES 
(1, 'John', 'Tanner', 'jtanner@email.com'),
(3, 'Jeff', 'Hollerup', 'jhollerup@email.com'),
(3, 'Jason', 'Behuniak', 'jbehuniak@email.com'),
(3, 'Matt', 'Traylor', 'mtraylor@email.com');

INSERT INTO roles (role_desc, department_id) VALUES
('Business Operations', 1),
('General Management', 1),
('Company Interface', 1),
('Employee Relationships', 1),
('Product Approvals', 1),
('Internet Support', 3),
('Computer Support', 3),
('Hardware Support', 3),
('Anti-Virus Management', 3),
('Product Configuration', 3);

INSERT INTO public.core_values (core_value) VALUES 
('Humbly Confident'),
('Grow or Die'),
('Help First'),
('Do The Right Thing'),
('Do What You Say');

INSERT INTO public.core_focus (passion, niche) VALUES 
('Deliver Value With Every Interaction', 'IT Solutions');

INSERT INTO public.ten_year_target (future, vision) VALUES 
('2028-12-31', '$50 Million in Revenue');

INSERT INTO public.marketing (target_market, unique1, unique2, unique3, proven_process, guarantee) VALUES (	
	'Companies with revenue between $5-$50 Million',
	'99% On-Time Delivery',
	'Local Technicians',
	'24-Hour Response Time',
	'The ABC Proven Process',
	'We''ll show up on time or the first hour is free!'
);

INSERT INTO public.three_year_picture (future, revenue, profit, measurable) VALUES (
	'2021-12-31',
	14.5,
	1.8,
	'300 Customers'
);

INSERT INTO public.three_year_visions (vision) VALUES
('80 Employees'),
('3 New Product Lines'),
('100% Right People in the Right Seats'),
('Bright, Energetic, Fun Office'),
('Strong Culture'),
('Largest Customer Accounts For < 10% of Revenue'),
('Best Place to Work in the State'),
('All Core Processes Documented and Followed by All');


INSERT INTO public.one_year_plan (future, revenue, profit, measurable) VALUES (	
	'2019-12-31',
	8,
	900,
	'150 Customers'
);

INSERT INTO public.one_year_goals (goal) VALUES 
('Sign deals with two premier vendors'),
('100% Right People in the Right Seats'),
('Add Three Salespeople to the Current Team of Seven'),
('All Core Processes Are Documented'),
('Add 50 New Customers');

INSERT INTO public.quarter_rocks (future, revenue, profit, measurable) VALUES (
	'2019-1-1',
	2,
	200,
	'115 Customers'
);

INSERT INTO public.rocks (rock) VALUES 
('Fill One Sale''s Position'),
('Software Version 2.3 in Production'),
('Go/No Go Decision Made on New Office'),
('Purchase Four Trucks');

INSERT INTO issues (employee_id, priority_num, submit, issue) VALUES 
(1, 4, '2018-10-15', 'Need more sales support.' ),
(1, 1, '2018-9-10', 'Increase sales revenue.'),
(2, 2, '2018-10-1', 'Phone Support Integration.'),
(3, 3, '2018-8-12', 'Sophos A/V Firmware Updates.'),
(4, 5, '2018-9-15', 'Online Technical Documents.'),
(2, 6, '2018-10-2', 'Database Archive Needed.'),
(3, 7, '2018-10-7', 'Red Rock Training Schedule.'),
(4, 8, '2018-10-18', 'Company Handbook Out-Of-Date.'),
(4, 9, '2018-8-23', 'Advertising Campaign Kickoff Meeting.'),
(1, 10, '2018-8-18', 'Kobayashi Maru Training Needed.');

INSERT INTO scorecard (department_id, employee_id, measurable, goal, date) VALUES (
	1,
	1,
	'Finish EOS App',
	'30 percent',
	'2018-10-30'
);

INSERT INTO scorecard (department_id, employee_id, measurable, goal, date) VALUES (
	2,
	2,
	'# Leads Generated',
	'10',
	'2018-10-30'
);

INSERT INTO scorecard (department_id, employee_id, measurable, goal, date) VALUES (
	2,
	3,
	'Clients Contacted',
	'30',
	'2018-10-30'
);

INSERT INTO scorecard (department_id, employee_id, measurable, goal, date) VALUES (
	2,
	4,
	'Phones Installed',
	'15',
	'2018-10-30'
);


INSERT INTO ISSUES (employee_id, priority_num, submit, issue, f_name, l_name) VALUES
(1, 1, '2018-7-21', 'July Search Test 1', 'Jeff', 'Hollerup'),
(1, 2, '2018-7-21', 'July Search Test 2', 'Jeff', 'Hollerup'),
(1, 3, '2018-7-21', 'July Search Test 3', 'Jeff', 'Hollerup'),
(1, 4, '2018-7-21', 'July Search Test 4', 'Jeff', 'Hollerup'),
(1, 5, '2018-8-21', 'August Search Test 1', 'Jeff', 'Hollerup'),
(1, 6, '2018-8-21', 'August Search Test 2', 'Jeff', 'Hollerup'),
(1, 7, '2018-8-21', 'August Search Test 3', 'Jeff', 'Hollerup'),
(1, 8, '2018-8-21', 'August Search Test 4', 'Jeff', 'Hollerup'),
(1, 9, '2018-9-21', 'September Search Test 1', 'Jeff', 'Hollerup'),
(1, 10, '2018-9-21', 'September Search Test 2', 'Jeff', 'Hollerup'),
(1, 11, '2018-9-21', 'September Search Test 3', 'Jeff', 'Hollerup');
