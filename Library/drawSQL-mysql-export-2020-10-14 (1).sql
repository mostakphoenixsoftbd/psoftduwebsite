CREATE TABLE `posts`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `user_id` INT NOT NULL,
    `title` INT NOT NULL,
    `description` INT NOT NULL,
    `image` INT NOT NULL,
    `category_id` INT NOT NULL,
    `office_id` INT NOT NULL,
    `slug` INT NOT NULL,
    `image` INT NOT NULL,
    `status` INT NOT NULL,
    `view_count` INT NOT NULL,
    `is_approved` INT NOT NULL
);
ALTER TABLE
    `posts` ADD PRIMARY KEY `posts_id_primary`(`id`);
CREATE TABLE `users`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `username` INT NOT NULL,
    `email` INT NOT NULL,
    `role_type` INT NOT NULL,
    `office_type` INT NOT NULL,
    `office_id` INT NOT NULL,
    `image` INT NOT NULL,
    `password` INT NOT NULL
);
ALTER TABLE
    `users` ADD PRIMARY KEY `users_id_primary`(`id`);
CREATE TABLE `categories`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `description` VARCHAR(255) NOT NULL,
    `image` VARCHAR(255) NOT NULL
);
ALTER TABLE
    `categories` ADD PRIMARY KEY `categories_id_primary`(`id`);
CREATE TABLE `faculties`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `description` TEXT NOT NULL,
    `image` VARCHAR(255) NOT NULL,
    `dean_name` VARCHAR(255) NOT NULL,
    `dean_image` VARCHAR(255) NOT NULL,
    `dean_message` TEXT NOT NULL,
    `office_email` VARCHAR(255) NOT NULL,
    `office_phone` VARCHAR(255) NOT NULL
);
ALTER TABLE
    `faculties` ADD PRIMARY KEY `faculties_id_primary`(`id`);
CREATE TABLE `dept_institutes`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `faculty_id` INT NOT NULL,
    `type` VARCHAR(255) NOT NULL,
    `name` VARCHAR(255) NOT NULL,
    `image` VARCHAR(255) NOT NULL,
    `chairman_name` VARCHAR(255) NOT NULL,
    `chairman_image` VARCHAR(255) NOT NULL,
    `chairman_message` TEXT NULL,
    `details` TEXT NULL,
    `sliders` VARCHAR(255) NULL,
    `video` VARCHAR(255) NULL,
    `siv_status` VARCHAR(255) NOT NULL
);
ALTER TABLE
    `dept_institutes` ADD PRIMARY KEY `dept_institutes_id_primary`(`id`);
CREATE TABLE `academic_programs`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `department_id` INT NOT NULL,
    `program_name` VARCHAR(255) NOT NULL,
    `program_type` VARCHAR(255) NOT NULL,
    `details` TEXT NOT NULL
);
ALTER TABLE
    `academic_programs` ADD PRIMARY KEY `academic_programs_id_primary`(`id`);
CREATE TABLE `course_syllabus`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `program_id` INT NOT NULL,
    `description` TEXT NOT NULL,
    `attachment` VARCHAR(255) NOT NULL
);
ALTER TABLE
    `course_syllabus` ADD PRIMARY KEY `course_syllabus_id_primary`(`id`);
CREATE TABLE `halls`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `image` VARCHAR(255) NOT NULL,
    `description` TEXT NOT NULL,
    `provost_name` VARCHAR(255) NOT NULL,
    `provost_image` VARCHAR(255) NOT NULL,
    `provost_message` TEXT NOT NULL,
    `activities` TEXT NOT NULL,
    `facilities` TEXT NOT NULL
);
ALTER TABLE
    `halls` ADD PRIMARY KEY `halls_id_primary`(`id`);
CREATE TABLE `profile`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `phone_number` VARCHAR(255) NOT NULL,
    `image` VARCHAR(255) NOT NULL,
    `details` TEXT NULL,
    `office_type` VARCHAR(255) NOT NULL,
    `office_id` INT NOT NULL,
    `profile_image` INT NOT NULL
);
ALTER TABLE
    `profile` ADD PRIMARY KEY `profile_id_primary`(`id`);
CREATE TABLE `research_centers`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `details` TEXT NOT NULL,
    `director_image` VARCHAR(255) NOT NULL,
    `director_message` TEXT NOT NULL,
    `image` VARCHAR(255) NOT NULL
);
ALTER TABLE
    `research_centers` ADD PRIMARY KEY `research_centers_id_primary`(`id`);
CREATE TABLE `offices`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `image` VARCHAR(255) NOT NULL,
    `details` VARCHAR(255) NOT NULL,
    `head_of_office` VARCHAR(255) NULL,
    `head_of_office_image` VARCHAR(255) NULL
);
ALTER TABLE
    `offices` ADD PRIMARY KEY `offices_id_primary`(`id`);
CREATE TABLE `news`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `title` VARCHAR(255) NOT NULL,
    `user_id` INT NOT NULL,
    `office_id` INT NOT NULL,
    `details` TEXT NOT NULL,
    `publish_date` VARCHAR(255) NOT NULL
);
ALTER TABLE
    `news` ADD PRIMARY KEY `news_id_primary`(`id`);
CREATE TABLE `notices`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `title` VARCHAR(255) NOT NULL,
    `user_id` INT NOT NULL,
    `office_id` INT NOT NULL,
    `details` TEXT NOT NULL,
    `publish_date` VARCHAR(255) NOT NULL,
    `expire_date` VARCHAR(255) NOT NULL,
    `column_8` INT NOT NULL
);
ALTER TABLE
    `notices` ADD PRIMARY KEY `notices_id_primary`(`id`);
CREATE TABLE `events`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `title` VARCHAR(255) NOT NULL,
    `user_id` INT NOT NULL,
    `office_id` INT NOT NULL,
    `details` TEXT NOT NULL,
    `publish_date` VARCHAR(255) NOT NULL,
    `expire_date` VARCHAR(255) NOT NULL
);
ALTER TABLE
    `events` ADD PRIMARY KEY `events_id_primary`(`id`);
ALTER TABLE
    `posts` ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY(`user_id`) REFERENCES `users`(`id`);
ALTER TABLE
    `events` ADD CONSTRAINT `events_user_id_foreign` FOREIGN KEY(`user_id`) REFERENCES `users`(`id`);
ALTER TABLE
    `notices` ADD CONSTRAINT `notices_user_id_foreign` FOREIGN KEY(`user_id`) REFERENCES `users`(`id`);
ALTER TABLE
    `news` ADD CONSTRAINT `news_user_id_foreign` FOREIGN KEY(`user_id`) REFERENCES `users`(`id`);
ALTER TABLE
    `dept_institutes` ADD CONSTRAINT `dept_institutes_faculty_id_foreign` FOREIGN KEY(`faculty_id`) REFERENCES `faculties`(`id`);
ALTER TABLE
    `posts` ADD CONSTRAINT `posts_category_id_foreign` FOREIGN KEY(`category_id`) REFERENCES `categories`(`id`);
ALTER TABLE
    `course_syllabus` ADD CONSTRAINT `course_syllabus_program_id_foreign` FOREIGN KEY(`program_id`) REFERENCES `academic_programs`(`id`);
ALTER TABLE
    `news` ADD CONSTRAINT `news_office_id_foreign` FOREIGN KEY(`office_id`) REFERENCES `offices`(`id`);
ALTER TABLE
    `profile` ADD CONSTRAINT `profile_office_id_foreign` FOREIGN KEY(`office_id`) REFERENCES `offices`(`id`);