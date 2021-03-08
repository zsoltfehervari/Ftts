<?php

final class Ftts{
    
    private $langs_arr = array(
        "us"=>"US English",
        "uk"=>"British English",
        "fr"=>"French",
        "sp"=>"Spanish",
        "ge"=>"German",
        "it"=>"Italian",
        "po"=>"Portuguese",
        "ru"=>"Russian"
    );

    private $voices_arr = array
    (
        "Alice" => "IVONA Kimberly22", //US English
        "Daisy" => "IVONA Salli22",
        "George"=> "IVONA Joey22",
        "Jenna" => "IVONA Jennifer22",
        "John"=> "IVONA Eric22",
        "Emma" => "IVONA Amy22 (UK English)", //UK English
        "Harry" => "IVONA Brian22 (UK English)",
        "Gabriel" => "IVONA Mathieu22 (French)",  //French
        "Jade" => "IVONA CΘline22 (French)",
        "Isabella"=>"IVONA Conchita22 (Spanish [Modern])", //Spanish
        "Mateo"=>"IVONA Enrique22 (Spanish [Modern])",
        "Michael"=>"IVONA Hans22 (German)", //German
        "Nadine"=>"IVONA Marlene22 (German)",
        "Alessandra"=>"IVONA Carla22 (Italian)", //Italian
        "Giovanni"=>"IVONA Giorgio22 (Italian)",
        "Rodrigo"=>"IVONA Cristiano22 (Portuguese)", //Portuguese
        "Valentina" =>"IVONA Tatyana22 (Russian)" //Russian
    );
    

    private function speech($text,$lang,$voice,$speed){

        if((int)$speed > 2 || (int) $speed < -1){
            $speed = 0;
        }

        $url = 'http://www.fromtexttospeech.com/';

        $data = array('input_text' => $text, 'language' => $lang, "voice" => $voice,"speed"=> $speed ,"action" => "process_text");

        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data)
            )
        );
        $context  = stream_context_create($options);
        $result = file($url, false, $context);

        if ($result === FALSE) {   
            return false;
        };
        
        $find = explode("'",$result[103])[1];

        $URL = "http://www.fromtexttospeech.com".$find;


        $mp3 = base64_encode(file_get_contents($URL));
        
        return "data:audio/mp3;base64,".$mp3;

        }




////////////////////////////////////////////////////////////// US

    public function Alice ($text = "",$speed = 0){

            return $this->speech
            (
                $text,
                $this->langs_arr['us'],
                $this->voices_arr['Alice'],
                $speed
            );
        }

    public function Daisy ($text = "",$speed = 0){

            return $this->speech
            (
                $text,
                $this->langs_arr['us'],
                $this->voices_arr['Daisy'],
                $speed
            );
        }

    public function George ($text = "",$speed = 0){

            return $this->speech
            (
                $text,
                $this->langs_arr['us'],
                $this->voices_arr['George'],
                $speed
            );
        }

    public function Jenna ($text = "",$speed = 0){

            return $this->speech
            (
                $text,
                $this->langs_arr['us'],
                $this->voices_arr['Jenna'],
                $speed
            );
        }

    public function John ($text = "",$speed = 0){

            return $this->speech
            (
                $text,
                $this->langs_arr['us'],
                $this->voices_arr['John'],
                $speed
            );
        }

////////////////////////////////////////////////////////////// UK    

    public function Emma ($text = "",$speed = 0){

            return $this->speech
            (
                $text,
                $this->langs_arr['uk'],
                $this->voices_arr['Emma'],
                $speed
            );
        }

    public function Harry ($text = "",$speed = 0){

            return $this->speech
            (
                $text,
                $this->langs_arr['uk'],
                $this->voices_arr['Harry'],
                $speed
            );
        }

////////////////////////////////////////////////////////////// FR

    public function Gabriel ($text = "",$speed = 0){

            return $this->speech
            (
                $text,
                $this->langs_arr['fr'],
                $this->voices_arr['Gabriel'],
                $speed
            );
        }

    public function Jade ($text = "",$speed = 0){

            return $this->speech
            (
                $text,
                $this->langs_arr['fr'],
                $this->voices_arr['Jade'],
                $speed
            );
        }

////////////////////////////////////////////////////////////// SP

    public function Isabella ($text = "",$speed = 0){

            return $this->speech
            (
                $text,
                $this->langs_arr['sp'],
                $this->voices_arr['Isabella'],
                $speed
            );
        }

    public function Mateo ($text = "",$speed = 0){

            return $this->speech
            (
                $text,
                $this->langs_arr['sp'],
                $this->voices_arr['Mateo'],
                $speed
            );
        }

////////////////////////////////////////////////////////////// GE

    public function Michael ($text = "",$speed = 0){

            return $this->speech
            (
                $text,
                $this->langs_arr['ge'],
                $this->voices_arr['Michael'],
                $speed
            );
        }

    public function Nadine ($text = "",$speed = 0){

            return $this->speech
            (
                $text,
                $this->langs_arr['ge'],
                $this->voices_arr['Nadine'],
                $speed
            );
        }

////////////////////////////////////////////////////////////// IT

    public function Alessandra ($text = "",$speed = 0){

            return $this->speech
            (
                $text,
                $this->langs_arr['it'],
                $this->voices_arr['Alessandra'],
                $speed
            );
        }

    public function Giovanni ($text = "",$speed = 0){

            return $this->speech
            (
                $text,
                $this->langs_arr['it'],
                $this->voices_arr['Giovanni'],
                $speed
            );
        }

////////////////////////////////////////////////////////////// PO

    public function Rodrigo ($text = "",$speed = 0){

            return $this->speech
            (
                $text,
                $this->langs_arr['po'],
                $this->voices_arr['Rodrigo'],
                $speed
            );
        }

////////////////////////////////////////////////////////////// RU

    public function Valentina ($text = "",$speed = 0){

            return $this->speech
            (
                $text,
                $this->langs_arr['ru'],
                $this->voices_arr['Valentina'],
                $speed
            );
        }        


        
    }



?>