<?php
// Creazione oggetti Media
$media1 = new Media(1, 'photo', 'https://www.mistersito.com/wp-content/uploads/2021/10/Cosa-sono-i-social-media.png');
$media2 = new Media(2, 'photo', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmJNcUGp-fqQMX0IYBxFjesQe2JDIaS8cdUlxLf0BBvw&s');

// Creazione oggetto Post con un singolo Media
$post1 = new Post(
    1,
    'Finalmente si parte! Destinazione vacanze',
    "mare, estate, vacanze, relax, spiaggia",
    $media1
);

// Creazione oggetto Post con più Media
$post2 = new Post(2, 'Una giornata di sole sulla spiaggia', "tramonto, serata, relax", $media1, $media2);
