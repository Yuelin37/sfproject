CREATE TABLE blog_article (id BIGINT AUTO_INCREMENT, title VARCHAR(255), content LONGTEXT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE blog_comment (id BIGINT AUTO_INCREMENT, article_id BIGINT, author VARCHAR(255), content LONGTEXT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX article_id_idx (article_id), PRIMARY KEY(id)) ENGINE = INNODB;
ALTER TABLE blog_comment ADD CONSTRAINT blog_comment_article_id_blog_article_id FOREIGN KEY (article_id) REFERENCES blog_article(id) ON DELETE CASCADE;
