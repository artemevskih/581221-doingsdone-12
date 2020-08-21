INSERT INTO users (email, password, dt_add)
  VALUES ('will.smith@gmail.com', '12345678', NOW()),
    ('john_doe@gmail.com', 'qwerty123', NOW());

INSERT INTO project (name, user_id)
  VALUES ('Входящие', 1),
    ('Учеба', 1),
    ('Работа', 1),
    ('Домашние дела', 2),
    ('Авто', 2);

INSERT INTO tasks (dt_create, status, name, dt_dead, user_id, project_id)
  VALUES (NOW(), 0, 'Собеседование в IT компании', '01.12.2020', 1, 3),
    (NOW(), 0, 'Выполнить тестовое задание', '24.07.2020', 1, 3),
    (NOW(), 1, 'Сделать задание первого раздела', '24.07.2020', 1, 2),
    (NOW(), 0, 'Встреча с другом', '25.07.2020', 1, 1),
    (NOW(), 0, 'Купить корм для кота', null, 2, 4),
    (NOW(), 0, 'Заказать пиццу', null, 2, 4);

SELECT name FROM project
  WHERE user_id = 1;

SELECT name FROM tasks
  WHERE project_id = 3;

UPDATE tasks SET status = 1
  WHERE id = 1;

UPDATE tasks SET name = 'Заказать большую пиццу'
  WHERE id = 6;
