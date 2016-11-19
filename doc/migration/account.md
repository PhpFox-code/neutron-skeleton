### Migrate Password
Copy password

```sql
INSERT
IGNORE INTO pf5_auth_password (user_id, hash, salt, source_id, static_salt, updated)
SELECT user_id,
       password,
       password_salt,
       'fox' AS source_id,
       '' AS static_salt,
       joined AS updated
FROM phpfox_user;
```

```sql
CREATE TABLE `pf5_auth_ticket` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `source_id` varchar(32) NOT NULL DEFAULT '',
  `identity` varchar(64)  NOT NULL DEFAULT '',
  `credential` varchar(64) NOT NULL DEFAULT '',
  `updated` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;
```

Count total pages
```sql
SELECT count(*) FROM phpfox_user WHERE profile_page_id >0;
```

Create table user
```sql
CREATE TABLE `pf5_user` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `level_id` smallint(4) unsigned NOT NULL DEFAULT '0',
  `user_photo_id` int(11) unsigned NOT NULL DEFAULT '0',
  `gender` tinyint(3) NOT NULL DEFAULT '0',
  `status_id` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `view_id` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `username` varchar(100) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT '',
  `email` varchar(255) DEFAULT NULL,
  `locale_id` varchar(12) NOT NULL DEFAULT 'en_US',
  `timezone` varchar(32) NOT NULL DEFAULT 'GMT+7',
  `created` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB;
```

Reset user
```sql
TRUNCATE pf5_user;
```

Copy user information
```sql
INSERT
IGNORE INTO pf5_user (user_id, level_id, view_id, status_id,username, fullname, email, gender, created)
SELECT user_id,
	   user_group_id AS level_id,
       view_id,
       status_id,
       user_name AS username,
       full_name AS fullname,
       email,
       gender,
       joined AS created
FROM phpfox_user
WHERE profile_page_id =0;
```