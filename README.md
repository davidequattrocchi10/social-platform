# Social-Platform Project

## Introduction

This project aims to create a social platform where users can register, log in, create posts, like posts, and search for posts by name. 

## Project Features

- **User Registration and Login**: Users can register with their email, username, and other information. After logging in, they receive a unique ID and password.
- **Post Creation**: Users can create their own posts and view posts created by others.
- **Like System**: Users can like posts created by other users.
- **Search Functionality**: Users can search for posts by their name.

## Database Schema

The database schema includes the following tables:

### Table: Users (User | model)

- **id_user** | PK | INT | AI - Unique identifier for the user.
- **name** | VARCHAR(255) | NOT NULL - User's first name.
- **lastname** | VARCHAR(255) | NOT NULL - User's last name.
- **email** | VARCHAR(255) | UNIQUE | NOT NULL - User's email (must be unique).
- **username** | VARCHAR(255) | UNIQUE | NOT NULL - User's username (must be unique).
- **password** | VARCHAR(255) | NOT NULL - User's password.
- **date_of_birth** | DATE - User's date of birth.
- **biography** | TEXT - User's biography.
- **picture_profil** | VARCHAR(255) - Path to the user's profile picture.

### Table: Posts (Post | model)

- **id_post** | PK | INT | AI - Unique identifier for the post.
- **id_user** | FK | INT - Identifier of the user who created the post.
- **text** | TEXT - Content of the post.
- **creation_date** | TIMESTAMP - Date and time the post was created.
- **num_like** | INT - Number of likes received by the post.

### Table: Media (Media | model)

- **id_media** | PK | INT | AI - Unique identifier for the media.
- **id_post** | FK | INT - Identifier of the post associated with the media.
- **type** | VARCHAR(255) - Type of media (image/video).
- **path** | VARCHAR(255) - Path to the media file.

### Table: Tags (Tag | model)

- **id_tag** | PK | INT | AI - Unique identifier for the tag.
- **name** | VARCHAR(255) - Name of the tag.

### Table: Post_Tag (Pivot table)

- **id_post** | FK | INT - Identifier of the post.
- **id_tag** | FK | INT - Identifier of the tag.

### Table: Likes (Like | model)

- **id_like** | PK | INT - Unique identifier for the like.
- **id_user** | FK | INT - Identifier of the user who liked the post.
- **id_post** | FK | INT - Identifier of the post that was liked.
- **date** | DATETIME - Date when the like was made.

### Table: Comments (Comment | model)

- **id_comment** | PK | INT | AI - Unique identifier for the comment.
- **id_user** | FK | INT - Identifier of the user who wrote the comment.
- **id_post** | FK | INT - Identifier of the post the comment is associated with.
- **text** | TEXT - Content of the comment.
- **creation_date** | TIMESTAMP - Date and time the comment was created.

## Getting Started
To set up and run this project, you'll need the following:

* **PHP:** The project is written in PHP.
* **Javascript:** The project uses Javascript to implement functionalities like the search bar and like system (through AJAX calls).
* **MySQL:** The project uses a MySQL database to store user data, posts, and other information.
* **Web Server:** A web server like Apache is required to serve the application's HTML, CSS, and JavaScript files.

### Prerequisites

- MAMP (for setting up a local server)
- PHP
- MySQL
- JS

### Installation

1. **Clone the repository to your local machine**:
   ```sh
   git clone https://github.com/davidequattrocchi10/social-platform.git
