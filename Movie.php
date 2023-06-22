<?php 

class Movie {

    public $genres;
    public $title;
    public $duration;
    public $poster;
    
    public function __construct(array $genre, $title, $duration, $poster) 
    {
        $this->genres = $genre;
        $this->title = $title;
        $this->duration = $duration;
        $this->poster = $poster;

        // foreach($this->genres as $genre){
        //     if (!$genre instanceof Genre){
        //         die("il genere deve essere della classe Genre");
        //     }
        // }
    }

    public function getGenresAsString(){

        
        $genresArray = [];

        foreach($this->genres as $genre) {
            array_push($genresArray, $genre->name);
        }

        return implode(", ", $genresArray);
    }
}

?>