SELECT number, title, Date_of_issue
FROM	board
ORDER BY number id DESC
LIMIT 5 OFFSET 10;
1페이지 	: 0 (1 - 1) * 5 =0
2페이지	: 5 (2 - 1) * 5 =5
3페이지	: 10 (3 - 1) * 5 =10