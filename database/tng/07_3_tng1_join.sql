
		
	-- 1번
SELECT
	emp.emp_no
	,CONCAT(emp.last_name,' ',emp.first_name) full_name
	,ti.title
	FROM employees emp
	INNER JOIN titles ti
		ON emp.emp_no = ti.emp_no;
	
	
-- 2번 	
SELECT
	emp.emp_no
	,emp.gender
	,sal.salary
	FROM employees emp
	INNER JOIN salaries sal
		ON emp.emp_no = sal.emp_no
		AND sal.to_date >= 20230905;
	
	
-- 3번	
SELECT
	CONCAT(emp.last_name,' ',emp.first_name) full_name
	,sal.salary
	FROM employees emp
	INNER JOIN salaries sal
		ON emp.emp_no = sal.emp_no
		and emp.emp_no = 10010;
	

-- 4번
SELECT
	emp.emp_no
	,CONCAT(emp.last_name,' ',emp.first_name) full_name
	,dpm.dept_name
	FROM employees emp
	INNER JOIN dept_emp dp
		ON emp.emp_no = dp.emp_no
	INNER JOIN departments dpm
		ON dp.dept_no = dpm.dept_no;
		

-- 5번
SELECT
	emp.emp_no
	,CONCAT(emp.last_name,' ',emp.first_name) full_name
	,sal.salary
	FROM employees emp
	INNER JOIN salaries sal
		ON emp.emp_no = sal.emp_no
		AND sal.to_date >= 20230905
		ORDER by salary desc
		limit 10;


-- 6번

SELECT
	dept_name
	,CONCAT(emp.last_name,' ',emp.first_name) full_name
	,emp.hire_date
	FROM employees emp
	INNER JOIN dept_manager dp_m
		ON emp.emp_no = dp_m.emp_no
		AND dp_m.to_date >= 20230905
	INNER JOIN departments dpm
	ON dpm.dept_no = dp_m.dept_no

-- 7번
SELECT
	avg(sal.salary) staff_avg_Salary
	FROM salaries sal
	INNER JOIN titles ti
		ON sal.emp_no = ti.emp_no
		AND title = 'staff'
		AND sal.to_date > 20230905;
		
		
-- 8번	
SELECT
	CONCAT(emp.last_name,' ',emp.first_name) full_name
	,emp.hire_date
	,emp.emp_no
	,dpm.dept_no
	FROM employees emp
	INNER JOIN dept_manager dpm
		ON emp.emp_no = dpm.emp_no;


-- 9번employees
SELECT
	ti.title
	,FLOOR(AVG(sal.salary)) AS sal_avg
	FROM titles ti
	INNER JOIN salaries sal
		ON ti.emp_no = sal.emp_no
		AND ti.to_date > 20230905
		AND sal.to_date > 20230905
	GROUP BY ti.title HAVING avg(sal.salary) > 60000
	ORDER BY sal_avg DESC;
		
		
-- 10번
SELECT
	ti.title
	,COUNT(emp.emp_no)
	FROM employees emp
	INNER JOIN titles ti
		ON emp.emp_no = ti.emp_no
		AND emp.gender = 'F'
		AND ti.to_date > 20230905
	GROUP BY ti.title;
	
		














