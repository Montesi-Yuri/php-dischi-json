<?php
    $discs = [
        [
            'artist' => "Baltra",
            'title' => "O'Neal",
            'img' => "https://images.genius.com/5e8a9c608e06521b7d13d02b3ef95ffa.1000x1000x1.jpg",
        ],
        [
            'artist' => "UltraTechno",
            'title' => "Say It Right",
            'img' => "https://is1-ssl.mzstatic.com/image/thumb/Music126/v4/ab/61/46/ab614696-f6a7-e420-4843-afb2fac6fbd0/artwork.jpg/1200x1200bb.jpg"
        ],
        [
            'artist' => "yef",
            'title' => "исполнитель",
            'img' => "https://lastfm.freetls.fastly.net/i/u/500x500/74e21531fa38d29d7ed9d940bac20cfc.jpg"
        ],
        [
            'artist' => "Lønelo, DWELLS",
            'title' => "Take Off Everything, Pt. 2",
            'img' => "https://is1-ssl.mzstatic.com/image/thumb/Music126/v4/df/6c/09/df6c0989-16b0-43fe-d756-99b4c713c0a5/artwork.jpg/1200x1200bf-60.jpg"
        ],
        [
            'artist' => "Gloom, Wirski",
            'title' => "Искать Тебя (Wirski 1991 Mix)",
            'img' => "https://is1-ssl.mzstatic.com/image/thumb/Music124/v4/2d/c5/20/2dc520a1-b93b-bfe6-8d1c-f1359c4cd84e/859741494469_cover.jpg/1200x1200bf-60.jpg"
        ],
        [
            'artist' => "Channel Tres",
            'title' => "Topdown",
            'img' => "https://i.scdn.co/image/ab67616d0000b273250c75ece251118d80d3931f"
        ]
    ];
    $jsonString = json_encode($discs);

    file_put_contents('database/discs.json', $jsonString);