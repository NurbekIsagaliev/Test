--1
SELECT u.*
FROM users u
INNER JOIN users inviter ON u.invited_by_user_id = inviter.id
WHERE u.posts_qty > inviter.posts_qty;

--2
SELECT *
FROM users
WHERE (group_id, posts_qty) IN (
    SELECT group_id, MAX(posts_qty)
    FROM users
    GROUP BY group_id
);

--3
SELECT group_id
FROM users
GROUP BY group_id
HAVING COUNT(*) > 10000;

--4
SELECT u.*
FROM users u
INNER JOIN users inviter ON u.invited_by_user_id = inviter.id
WHERE u.group_id <> inviter.group_id;


--5
SELECT group_id
FROM users
GROUP BY group_id
ORDER BY SUM(posts_qty) DESC
LIMIT 1;


