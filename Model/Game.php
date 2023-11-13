<?php
    class Game{
        private $gameID;
        private $gameTitle;
        private $gameImg;
        private $gameConsole;
        private $gamePrice;

        public function __construct($id, $title, $console, $price, $img)
        {
            $this->gameID = $id;
            $this->gameTitle = $title;
            $this->gameConsole = $console;
            $this->gamePrice = $price;
            $this->gameImg = $img;
        }

        public function getID(){
            return $this->gameID;
        }

        public function getTitle(){
            return $this->gameTitle;
        }

        public function getConsole(){
            return $this->gameConsole;
        }

        public function getPrice(){
            return $this->gamePrice;
        }

        public function getImg(){
            $msg = "<img src='Data/Images/$this->gameImg'>";
            return $msg;
        }
    }
?>