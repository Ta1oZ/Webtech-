<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet">
    <title>Lab 7 - 4</title>
</head>
<body>
    <?php
    echo "<h1> Cat Gallery </h1>";
    echo "<div class='pic'>";
    $pic_list = array("https://upload.wikimedia.org/wikipedia/commons/thumb/4/4d/Cat_November_2010-1a.jpg/1200px-Cat_November_2010-1a.jpg"
, "https://static01.nyt.com/images/2021/09/14/science/07CAT-STRIPES/07CAT-STRIPES-mediumSquareAt3X-v2.jpg"
, "https://upload.wikimedia.org/wikipedia/commons/thumb/1/14/Gatto_europeo4.jpg/250px-Gatto_europeo4.jpg"
, "https://i.guim.co.uk/img/media/c9b0aad22638133aa06cd68347bed2390b555e63/0_477_2945_1767/master/2945.jpg?width=1200&height=1200&quality=85&auto=format&fit=crop&s=97bf92d90f51da7067d00f8156512925"
, "https://i.insider.com/5aa10ca0d877e618008b4678?width=700", "https://upload.wikimedia.org/wikipedia/commons/thumb/c/c7/Tabby_cat_with_blue_eyes-3336579.jpg/639px-Tabby_cat_with_blue_eyes-3336579.jpg"
, "https://images.ctfassets.net/440y9b545yd9/4ZP0InpIOw3MPh2NFW9jM4/09f008f8c5608c7587effffbcf03e655/shutterstock_752719666__1_.jpg"
, "https://catadoptionteam.org/wp-content/uploads/2021/07/Homepage-MiddleBox-768x512.jpg", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT6fH4WcqPLntpPILC1Ag-_D7dkrljytz9iNg&usqp=CAU"
, "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSf8bVPK9Xb7owNSKT_Oe4zV--I3GBQHtmosA&usqp=CAU", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSOJlD8XVrfAP6V_PRycSZ_nZ8FN7F15ntofPiylsLCWHGM2BgocL0pqsRl8kKt3M9XELQ&usqp=CAU"
, "https://news.mit.edu/sites/default/files/styles/news_article__image_gallery/public/images/201011/20101110140828-1_0.jpg?itok=U4kmo176"
, "https://www.bluevalleyanimalhospital.net/blog/wp-content/uploads/2019/08/iStock-495910314.jpg", "https://alaskapublic.org/wp-content/uploads/2022/07/juneau_cats.jpg"
, "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRYDV0f3VD1qbGnni3nICp1Sd912dAshgxISA&usqp=CAU", "https://www.humanesociety.org/sites/default/files/styles/1240x698/public/2018/08/cat-home-441939.jpg?h=83a2eac3&itok=RHVSjYLN"
, "https://www.animalhumanesociety.org/sites/default/files/styles/animal_450x330/public/adoption/images/large/2022/09/30/b5f47fbc-518c-4e12-be58-8b1661263d87.jpg?h=8a14a818&itok=lOC9_3P1"
, "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS5Gshfsf6a5GW0DDNwDuwwVQzxMOYF7gF7mQ&usqp=CAU"
, "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTY9MLSa5P_u3nsqFFHUvzTVFIWUHT9AgLf_w&usqp=CAU"
, "https://cdn-prod.medicalnewstoday.com/content/images/articles/322/322716/relaxed-ginger-cat.jpg");
for ($row = 0; $row < 20; $row++)
    {
        echo "<img src= ". $pic_list[$row] . ">";
    }
    echo "</div>";
    ?>
</body>
</html>