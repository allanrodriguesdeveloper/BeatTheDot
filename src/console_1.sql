SELECT *
FROM users;

UPDATE users
SET email = 'admin@admin.com.br'
WHERE id = 1

INSERT INTO portaria_controle_historico
VALUES (uuid_generate_v4(), $1, $2, $3, now(), null, $4)