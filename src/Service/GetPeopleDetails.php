<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use App\DTO\UserDTO;
use Unsplash\OAuth2\Client\Provider\Unsplash;

class GetPeopleDetails
{    

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    public function getPeople($id)
    {
        $apiUrl ='https://swapi.dev/api/people/';
        $response = $this->client->request(
            'GET',
            $apiUrl.$id
        );

        $people = $response->toArray();
        $userDTO = new UserDTO();
        $userDTO->setName($people['name']);
        $userDTO->setHeight($people['height']);
        $userDTO->setMass($people['mass']);
        $userDTO->setHair_color($people['hair_color']);
        $userDTO->setSkin_color($people['skin_color']);
        $userDTO->setEye_color($people['eye_color']);
        $userDTO->setBirth_year($people['birth_year']);
        $userDTO->setGender($people['gender']);
        $userDTO->setHomeworld($people['homeworld']);
        $userDTO->setSpecies($people['species']);
        $userDTO->setVehicles($people['vehicles']);
        $userDTO->setStarships($people['starships']);
        $userDTO->setMovies($people['films']);

        $apiPlanetUrl = $userDTO->getHomeWorld();

        $response2 = $this->client->request(
            'GET',
            $apiPlanetUrl
        );
        $planetAnswer = $response2->toArray();
        $userDTO->setHomeworld($planetAnswer['name']);

        $apiMoviesUrl = $userDTO->getMovies();

       foreach ($apiMoviesUrl as $movieUrl) {
            $response3 = $this->client->request(
                'GET',
                $movieUrl
            );
            $movieAnswer = $response3->toArray();
            $allmovies[] = $movieAnswer['title'];
        }
        $userDTO->setMovies($allmovies);

        $response2 = $this->client->request(
            'GET',
            $apiPlanetUrl
        );
        $planetAnswer = $response2->toArray();
        $userDTO->setHomeworld($planetAnswer['name']);

        $pictureUrl = "https://www.googleapis.com/customsearch/v1?key=AIzaSyDYlOs2D0nHzwRuk692hQGwtuqCc6p7kBo&cx=97761bfa870ac1dc5&q=";
        $picture = $this->client->request(
            'GET',
            $pictureUrl.$userDTO->getName(),
        );
        $pictureAnswer = $picture->toArray();
        //dd($pictureAnswer);
        $toto = $pictureAnswer['items'][0]['pagemap']['cse_image'][0]['src'];
        
        $userDTO->setPicture($toto);

        return $userDTO;
    }

}
