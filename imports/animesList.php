<?php

ini_set('display_errors', 1);
ini_set('display_startup_erros', 1);
error_reporting(E_ALL);

require 'composer/vendor/autoload.php';

// Here we define our query as a multi-line string
$queryPages = '
query ($page: Int) {
  Page(page: $page, perPage: 50) {
    pageInfo {
      total
      perPage
      currentPage
      lastPage
      hasNextPage
    }
    media(seasonYear: 2019) {
      id
    }
  }
}
';

$queryAnimes = '
query ($page: Int) {
  Page(page: $page, perPage: 50) {
    media(seasonYear: 2019) {
      id
      startDate {
        year
        month
        day
      }
	  coverImage {
      extraLarge
      large
      medium
      color
    }
      season
      status
      title {
        romaji
      }
    }
  }
}
';

// Define our query variables and values that will be used in the query request
$variablesPages = [
    "page" => 1
];

// Make the HTTP Api request
$http = new GuzzleHttp\Client;
$response = $http->post('https://graphql.anilist.co', [
    'json' => [
        'query' => $queryPages,
        'variables' => $variablesPages,
    ]
]);

$jsonPages = json_decode($response->getBody()->getContents());

$lastPage = $jsonPages->data->Page->pageInfo->lastPage;

echo 'Qtd Páginas: ' . $lastPage . '<br>';

$pageAtual = 1;

for($i = 1; $i <= $lastPage; $i++){
    $variablesAnimes = [
        "page" => $pageAtual
    ];

    echo "<br>Página atual: " . $pageAtual . "<br>";

    $responseAnimes = $http->post('https://graphql.anilist.co', [
        'json' => [
            'query' => $queryAnimes,
            'variables' => $variablesAnimes,
        ]
    ]);

    $jsonAnimes = json_decode($responseAnimes->getBody()->getContents(), true);

    $pageAtual = $pageAtual+1;

    foreach($jsonAnimes as $dados){
        for($j = 0; $j < 50; $j++){
            echo $dados["Page"]["media"][$j]["title"]["romaji"] . "<br>";
            echo $dados["Page"]["media"][$j]["coverImage"]["extraLarge"] . "<br>";
        }
    }

    echo "<br>";

}

echo 'Última página: ' . $pageAtual . '<br>';

//var_dump($json->data->Page->pageInfo->total); TOTAL DE ANIMES

// INSERIR ANIMES NO BANCO