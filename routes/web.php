<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProv"id"er and all of them will
| be assigned to the "web" m"id"dleware group. Make something great!
|
*/

Route::get('/', function () {

    $headerLinks = [
        [
            "id" => 1,
            "title" => "characters",
            "active" => "false",
            "url" => "#"
        ],
        [
            "id" => 2,
            "title" => "comics",
            "active" => "true",
            "url" => "/comics"
        ],
        [
            "id" => 3,
            "title" => "movies",
            "active" => "false",
            "url" => "#"
        ],
        [
            "id" => 4,
            "title" => "tv",
            "active" => "false",
            "url" => "#"
        ],
        [
            "id" => 5,
            "title" => "games",
            "active" => "false",
            "url" => "#"
        ],
        [
            "id" => 6,
            "title" => "collectibles",
            "active" => "false",
            "url" => "#"
        ],
        [
            "id" => 7,
            "title" => "videos",
            "active" => "false",
            "url" => "#"
        ],
        [
            "id" => 8,
            "title" => "fans",
            "active" => "false",
            "url" => "#"
        ],
        [
            "id" => 9,
            "title" => "news",
            "active" => "false",
            "url" => "#"
        ],
        [
            "id" => 10,
            "title" => "shop",
            "active" => "false",
            "url" => "#"
        ],
    ];

    $comics = [
        [
            "thumb" => "https://www.coverbrowser.com/image/action-comics/1-1.jpg",
            "price" => "$19.99",
            "series" => "Action Comics",
            "type" => "comic book"
        ],
        [
            "thumb" => "https://www.panini.it/media/catalog/product/cache/a5b5dd3adfe0d321084804c738f29601/M/1/M1BLLA015ISBN_0.jpg",
            "price" => "$3.99",
            "series" => "American Vampire 1976",
            "type" => "comic book"
        ],
        [
            "thumb" => "https://media.wired.com/photos/593384dad80dd005b42b2817/master/w_2560%2Cc_limit/Aquaman-16.jpg",
            "price" => "$16.99",
            "series" => "Aquaman",
            "type" => "graphic novel"
        ],
        [
            "thumb" => "https://d29xot63vimef3.cloudfront.net/image/batgirl/1-1.jpg",
            "price" => "$2.99",
            "series" => "Batgirl",
            "type" => "comic book"
        ],
        [
            "thumb" => "https://static.posters.cz/image/750/locandine-film-in-plexiglass-batman-prowl-comic-cover-i69653.jpg",
            "price" => "$3.99",
            "series" => "Batman",
            "type" => "comic book"
        ],
        [
            "thumb" => "https://static.wikia.nocookie.net/marvel_dc/images/5/50/Batman_Beyond_v.1_1.jpg",
            "price" => "$2.99",
            "series" => "Batman Beyond",
            "type" => "comic book"
        ],
        [
            "thumb" => "https://static.wikia.nocookie.net/marvel_dc/images/0/0d/Batman_Superman_Vol_1_1.jpg",
            "price" => "$3.99",
            "series" => "Batman/Superman",
            "type" => "comic book"
        ],
        [
            "thumb" => "https://static.wikia.nocookie.net/marvel_dc/images/c/cf/Batman_Superman_Annual_Vol_2_1.jpg",
            "price" => "$4.99",
            "series" => "Batman/Superman Annual",
            "type" => "comic book"
        ],
        [
            "thumb" => "https://static.wikia.nocookie.net/marvel_dc/images/5/54/Batman_The_Joker_War_Zone_Vol_1_1.jpg",
            "price" => "$5.99",
            "series" => "Batman: The Joker War Zone",
            "type" => "comic book"
        ],
        [
            "thumb" => "https://static.wikia.nocookie.net/marvel_dc/images/6/64/Batman_Three_Jokers_Collected.jpg",
            "price" => "$6.99",
            "series" => "Batman: Three Jokers",
            "type" => "comic book"
        ],
        [
            "thumb" => "https://static.wikia.nocookie.net/marvel_dc/images/f/f8/Batman_White_Knight_Presents_Harley_Quinn_Vol_1_1.jpg",
            "price" => "$4.99",
            "series" => "Batman: White Knight Presents: Harley Quinn",
            "type" => "comic book"
        ],
        [
            "thumb" => "https://static.wikia.nocookie.net/marvel_dc/images/c/c8/Catwoman_Vol_2_1.jpg",
            "price" => "$16.99",
            "series" => "Catwoman",
            "type" => "graphic novel"
        ]
    ];

    $dcComics = [
        [
            "id" => 1,
            "title" => "Characters",
            "url" => "#"
        ],
        [
            "id"=> 2,
            "title" => "Comics",
            "url" => "#"
        ],
        [
            "id" => 3,
            "title" => "Movies",
            "url" => "#"
        ],
        [
            "id" => 4,
            "title" => "TV",
            "url" => "#"
        ],
        [
            "id" => 5,
            "title" => "Games",
            "url" => "#"
        ],
        [
            "id"=> 6,
            "title"=> "Videos",
            "url"=> "#"
        ],
        [
            "id"=> 7,
            "title"=> "News",
            "url"=> "#"
        ]
    ];

    $shop = [
        [
            "id"=> 1,
            "title"=> "Shop DC",
            "url"=> "#"
        ],
        [
            "id"=> 2,
            "title"=> "Shop DC Collectibles",
            "url"=> "#"
        ]
    ];

    $dc = [
        [
            "id"=> 1,
            "title"=> "Term Of Use",
            "url"=> "#"
        ],
        [
            "id"=> 2,
            "title"=> "Privacy policy (New)",
            "url"=> "#"
        ],
        [
            "id"=> 3,
            "title"=> "Ad Choices",
            "url"=> "#"
        ],
        [
            "id"=> 4,
            "title"=> "Advertising",
            "url"=> "#"
        ],
        [
            "id"=> 5,
            "title"=> "Job",
            "url"=> "#"
        ],
        [
            "id"=> 6,
            "title"=> "Subscription",
            "url"=> "#"
        ],
        [
            "id"=> 7,
            "title"=> "Talent Workshop",
            "url"=> "#"
        ],
        [
            "id"=> 8,
            "title"=> "CPSC Certificates",
            "url"=> "#"
        ],
        [
            "id"=> 9,
            "title"=> "Ratings",
            "url"=> "#"
        ],
        [
            "id"=> 10,
            "title"=> "Shop Help",
            "url"=> "#"
        ],
        [
            "id"=> 11,
            "title"=> "Contact Us",
            "url"=> "#"
        ],
    ];

    $sites = [
        [
            "id"=> 1,
            "title"=> "DC",
            "url"=> "#"
        ],
        [
            "id"=> 2,
            "title"=> "MAD Magazine",
            "url"=> "#"
        ],
        [
            "id"=> 3,
            "title"=> "DC Kids",
            "url"=> "#"
        ],
        [
            "id"=> 4,
            "title"=> "DC Universe",
            "url"=> "#"
        ],
        [
            "id"=> 5,
            "title"=> "DC Power Visa",
            "url"=> "#"
        ]
    ];

    return view('pages.home', compact('headerLinks', 'comics', 'dcComics', 'shop', 'dc', 'sites'));
});

