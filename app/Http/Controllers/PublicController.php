<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public $movies = [
        [
            'id' => '1',
            'name' => 'Titanic',
            'director' => 'James Cameron',
            'year' => '1998',
            'genre' => 'Dramatic',
            'duration' => '3h',
            'description' => 'lorem vckjudsanvkjasvnsakjcvnsakjclnsakjchasnkjcnbsajklcnsakjl',
            'url' => 'titanic.jpg',
        ],
        [
            'id' => '2',
            'name' => 'Pulp Fiction',
            'director' => 'Quentin Tarantino',
            'year' => '1994',
            'genre' => 'Action',
            'duration' => '2.5h',
            'description' => 'lorem vckjudsanvkjasvnsakjcvnsakjclnsakjchasnkjcnbsajklcnsakjl',
            'url' => 'pulp-fiction.jpg',
        ],
        [
            'id' => '3',
            'name' => 'John Wick 4',
            'director' => 'Chad Stahelski',
            'year' => '2023',
            'genre' => 'Action',
            'duration' => '2.5h',
            'description' => 'lorem vckjudsanvkjasvnsakjcvnsakjclnsakjchasnkjcnbsajklcnsakjl',
            'url' => 'john-wick4.jpg',
        ],
        [
            'id' => '4',
            'name' => 'Il Gladiatore',
            'director' => 'Redley Scott',
            'year' => '2000',
            'genre' => 'Dramatic',
            'duration' => '3h',
            'description' => 'lorem vckjudsanvkjasvnsakjcvnsakjclnsakjchasnkjcnbsajklcnsakjl',
            'url' => 'il-gladiatore.jpg',
        ],
        [
            'id' => '5',
            'name' => 'Transformers',
            'director' => 'Don Murphy',
            'year' => '2007',
            'genre' => 'Action',
            'duration' => '2h',
            'description' => 'lorem vckjudsanvkjasvnsakjcvnsakjclnsakjchasnkjcnbsajklcnsakjl',
            'url' => 'transformers.jpg',
        ],
        [
            'id' => '6',
            'name' => 'Matrix',
            'director' => 'Wachowsky',
            'year' => '1996',
            'genre' => 'Fantasy',
            'duration' => '3h',
            'description' => 'lorem vckjudsanvkjasvnsakjcvnsakjclnsakjchasnkjcnbsajklcnsakjl',
            'url' => 'matrix.jpg',
        ],
    ];
    public $team = [
        [
            'name' => 'Giovanni',
            'surname' => 'Giovannini',
            'job' => 'CEO',
        ],
        [
            'name' => 'Gianfrancesco',
            'surname' => 'Bianchi',
            'job' => 'Admin',
        ],
        [
            'name' => 'Charles',
            'surname' => 'Verdi',
            'job' => 'Co-Ceo',
        ],
        [
            'name' => 'Fredd',
            'surname' => 'Manson',
            'job' => 'Social Media Manager',
        ],
        [
            'name' => 'Ugo',
            'surname' => 'McNeal',
            'job' => 'Star',
        ],
        [
            'name' => 'Richard',
            'surname' => 'Bush',
            'job' => 'Amministratore delegato',
        ],
    ];
    
    //funzione per homepage
    public function homepage () {
        return view('welcome', ['movies' => $this->movies]);
    }

    //funzione per il team
    public function showTeam() {
        return view('chi-siamo', ['team' => $this->team]);
    }


    // funzione per i servizi.
    public function show($id) {

        foreach($this->movies as $movie){
            if($movie['id'] == $id){
                return view('servizi', ['movie' => $movie]);
            }
        }
    
    }
}
