DELIMITER $$
CREATE FUNCTION my_sum(num1 INT, num2 INT)
	RETURNS INT
BEGIN
	RETURN num1 + num2;
END 
DELIMITER $$


SELECT my_sum(1, 2);



