# Tutorial
- Abrir vscode ver se ta logado (canto inferior esquerdo) file open folder: seleciona tudo e apaga

- /var/www/html/ e da um ok terminal novo terminal git clone LINK_GITHUB da um enter file open folder: seleciona tudo e apaga

- /var/www/html/curso_php_26 e da um ok terminal novo terminal verifica se esta em: /var/www/html/curso_php_26


MariaDB

CREATE USER 'aluno'@localhost IDENTIFIED BY '1234';

GRANT ALL PRIVILEGES ON *.* TO 'aluno'@localhost IDENTIFIED BY '1234';

https://phoenixnap.com/kb/how-to-create-mariadb-user-grant-privileges#:~:text=To%20create%20a%20new%20MariaDB,to%20a%20local%20MySQL%20server.


-- C create
INSERT INTO usuario(nome, email, status, cadastro_preenchido)
VALUES ("fulano de tal", "fulano@ciclano.com.br", false, false);


-- R read (todos os usuarios);
select * from usuario;

--R read Only (1 usuario)
select * from usuario WHERE id = 3;

-- U Update Only (1 usuario);
Update usuario SET email="ariel@infoserv.com" WHERE IN (1, 2);

-- U Update (mais de 1 usuario)
Update usuario SET status=true, cadastro_preenchido=true WHERE IN (1, 2);


-- D Delete (excluir 1 usuario)
Delete FROM usuario WHERE id = 3;

-- D Delete (excluir 1 usuario)
Delete FROM usuario WHERE id IN (3, 7);


-- ALTER TABLE 
ALTER TABLE usuario Add Column cadastro_preenchido bool default false;

ALTER TABLE usuario Modify Column cadastro_preenchido bool NOT NULL default false;

ALTER TABLE usuario DROP column cadastro_preenchido;

ALTER TABLE usuario ADD column 'criado_em' timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP;