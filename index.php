<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Flux RSS</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Liste de mes articles</h1>

    <?php
    $rss = simplexml_load_file('https://openai.com/blog/rss.xml');
    $datePublication = date('d/m/Y', $item->pubDate);
    $enclosureUrl = $item->enclosure['url'];

    foreach ($rss->channel->item as $item) {
        print("<div class='container'>
        <a target='_blank' href='{$item->link}'><h3>{$item->title}</h3></a>
        <p><i>Publié le {$datePublication} / {$item->pubDate} par {$item->author}</i></p>
        <img src='{$item->enclosure['url']}'>
        <p>{$item->description}</p><br/>
        </div>");
    }

    // $rss = simplexml_load_file('https://web.developpez.com/index/rss');
    // $datePublication = date('d/m/Y', $item->pubDate);
    // $enclosureUrl = $item->enclosure['url'];

    // foreach ($rss->channel->item as $item) {
    //     print("<div class='container'>
    //     <a target='_blank' href='{$item->link}'><h3>{$item->title}</h3></a>
    //     <p><i>Publié le {$datePublication} / {$item->pubDate} par {$item->author}</i></p>
    //     <img src='{$item->enclosure['url']}'>
    //     <p>{$item->description}</p><br/>
    //     </div>");
    // }
    ?>
</body>

</html>