## Diagramma ER

# Entities

- Users 
- Posts 
- Media 
- Tags 
- Post_Tag (Table pivot)
- Likes
- Comments


### Table name: Users (User | model)

- id_user | PK | INT | AI  - #Identificativo univoco dell'utente.
- name | VARCHAR(255) | NOT NULL  - #Nome dell'utente.
- lastname | VARCHAR(255) | NOT NULL - # Cognome dell'utente.
- email | VARCHAR(255) | UNIQUE | NOT NULL - # Email dell'utente (unica).
- username | VARCHAR(255) | UNIQUE | NOT NULL  - # Username dell'utente (unico).
- password | VARCHAR(255) | NOT NULL  - # Password dell'utente.
- date_of_birth | (DATE)   - # Data di nascita dell'utente.
- biography | TEXT   - # Breve biografia dell'utente.
- picture_profil | VARCHAR(255)   - # Path all'immagine del profilo.



### Table name: Posts (Post | model)

- id_post |PK | INT | AI  - # Identificativo univoco del post.
- id_user | FK | INT - # Identificativo dell'utente che ha creato il post.
- text | TEXT  - # Contenuto testuale del post.
- creation_date | TIMESTAMP  - # Data e ora di creazione del post.
- num_like |INT   - # Numero di like ricevuti dal post.



### Table name: Media (Media | model)

- id_media | PK | INT | AI  - # Identificativo univoco del media.
- id_post | FK | INT  - # Identificativo del post a cui è associato il media.
- type | VARCHAR(255)  - # Tipo di media (immagine/video).
- path | VARCHAR(255)  - # Path al file del media.



### Table name: Tags (Tag | model)

- id_tag | PK | INT | AI  - # Identificativo univoco del tag.
- name | VARCHAR(255)   - #  Nome del tag.



### Table name (pivot): Post_Tag

- id_post |FK | INT  - # Identificativo del post.
- id_tag | FK | INT  - # Identificativo del tag.



### Table name: Likes (Like | model)

- id_like | PK | INT  - #  Identificativo univoco del like.
- id_user | FK | INT   - # Identificativo dell'utente che ha messo like.
- id_post | FK | INT   - # Identificativo del post che ha ricevuto il like.
- date | DATETIME  - # Data in cui è stato messo il like.


### Table name: Comments (Comment | model)

- id_comment | PK | INT  - # Identificativo univoco del commento.
- id_user | FK | INT  - # Identificativo dell'utente che ha scritto il commento.
- id_post | FK | INT  - #Identificativo del post a cui è associato il commento.
- text | TEXT  - # Contenuto testuale del commento.
- creation_date | TIMESTAMP  - # Data e ora di creazione del commento.