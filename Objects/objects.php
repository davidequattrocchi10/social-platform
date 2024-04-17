<?php
//Create Objects for Step3 and Step4

// Create Media Objects
$media1 = new Media(1, 'photo', 'https://www.mistersito.com/wp-content/uploads/2021/10/Cosa-sono-i-social-media.png');
$media2 = new Media(2, 'photo', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmJNcUGp-fqQMX0IYBxFjesQe2JDIaS8cdUlxLf0BBvw&s');

// Create Post Object with a Media
$post1 = new Post(
    1,
    'Finalmente si parte! Destinazione vacanze',
    "mare, estate, vacanze, relax, spiaggia",
    $media1
);

// Create Post Object with a multiple Media  
$post2 = new Post(2, 'Una giornata di sole sulla spiaggia', "tramonto, serata, relax", $media1, $media2);


//Create Objects for my web app
$medias = [
    new Media(1, 'photo', 'https://www.mistersito.com/wp-content/uploads/2021/10/Cosa-sono-i-social-media.png'),
    new Media(2, 'photo', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmJNcUGp-fqQMX0IYBxFjesQe2JDIaS8cdUlxLf0BBvw&s'),
    new Media(3, 'photo', 'https://www.nieddittas.it/wp-content/uploads/2021/08/come-si-e-formato-il-mare.jpg'),
    new Media(4, 'photo', 'https://media-assets.wired.it/photos/652d01f3e3cbc27debfaeec3/16:9/w_2560%2Cc_limit/France%2520Shot%2520Saved.jpg'),
    new Media(5, 'photo', 'https://hips.hearstapps.com/hmg-prod/images/oasi-1671721709.png?crop=1xw:1xh;center,top&resize=1200:*'),
    new Media(6, 'photo', 'https://www.dueruote.it/content/dam/dueruote/it/foto/sport/2021/11/11/valentino-rossi-le-moto/gallery/rbig/_GP_9643.jpg'),
    new Media(7, 'photo', 'https://wallpapers.com/images/featured/immagini-della-casa-pgca6letf8qoqubf.jpg'),
    new Media(8, 'photo', 'https://www.aviontourism.com/images/1260-1260-fix/0c4d1ff2-dc66-49ce-a15e-cbe6e19b9b5e'),
    new Media(9, 'photo', 'https://www.nostrofiglio.it/images/2020/11/13/perche-a-natale-si-fa-l-albero-_900x760.jpg'),
    new Media(10, 'photo', 'https://immagini.trovaprezzi.it/magazine/2020/07/hdr.jpg'),
    new Media(11, 'photo', 'https://www.operarelax.com/data/1366/spa14.jpg'),
    new Media(12, 'photo', 'https://s3.eu-central-1.amazonaws.com/pazienti-platform/media_items/files/000/000/844/large/Perch_C3_A9-il-mare-fa-bene-alla-salute-1024x680.jpg?1578570267'),
    new Media(13, 'video', 'videos/20770858-hd_1080_1920_30fps.mp4')
];
$posts = [
    new Post(1, 'Il mondo è un Social Media', 'Social, Internet', $medias[0]),
    new Post(2, 'APP: perchè utilizzarle?', 'Social, Instagram, Facebook, YouTube', $medias[1]),
    new Post(3, 'Voglia di mare', 'Mare, Estate, Cielo', $medias[2]),
    new Post(4, 'Argentina vince il Mondiale', 'Calcio, Argentina, Francia', $medias[3]),
    new Post(5, 'Deserto', 'Viaggio, Vacanze, Caldo', $medias[4]),
    new Post(6, 'La mia passione - La moto', 'Moto, MotoGP, Rossi, VR46', $medias[5]),
    new Post(7, 'Casa dolce casa', 'Home, Lago, Verde', $medias[6]),
    new Post(8, 'Finalmente si parte! Parigi', 'Parigi, Vacanze, Relax', $medias[7]),
    new Post(9, 'Natale sta arrivando', 'Natale, Regali, Albero', $medias[8]),
    new Post(10, 'Tramonti magnifici', 'Tramonto, Relax', $medias[9]),
    new Post(11, 'Massaggi orientali', 'Massaggio, Oriente, Relax', $medias[10]),
    new Post(12, 'Caraibi o Maldive?', 'Mare, Estate, Vacanze, Spiaggia', $medias[11]),
    new Post(13, 'Viaggio nel deserto', 'Deserto, Vacanze', $medias[12])
];
