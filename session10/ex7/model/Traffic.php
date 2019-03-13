<?php
    class Traffic{
      
        // Contains mapping between a location keyword and traffic condition 
        // for morning, afternoon, and evening
        private $conditionTableMorning; 
        private $conditionTableAfternoon; 
        private $conditionTableEvening; 

        public function __construct() {
            $this->conditionTableMorning = ["Jurong"=>"Heavy","Clementi"=>"Heavy","Orchard"=>"Heavy"];
            $this->conditionTableAfternoon = ["Jurong"=>"Light","Clementi"=>"Light","Orchard"=>"Heavy"];
            $this->conditionTableEvening = ["Jurong"=>"Light","Clementi"=>"Moderate","Orchard"=>"Heavy"];
        }

        public function getTrafficStatus($location,$hourOfTheDay) {
            if($hourOfTheDay >= 5 && $hourOfTheDay < 12){
                return $this->computeTrafficStatus($location,$this->conditionTableMorning);
            }
            elseif($hourOfTheDay >= 12 && $hourOfTheDay < 18){
                return $this->computeTrafficStatus($location,$this->conditionTableAfternoon);
            }
            else {
                return $this->computeTrafficStatus($location,$this->conditionTableEvening);
            }
        }

        // Return a predefined traffic status information
        // based on the location and conditionTable arguments
        private function computeTrafficStatus($location,$conditionTable) {

            ## Steps:
            // (1) Check if location matches one of the keyword in conditionTable
            // (2) If a match exists, return the corresponding condition
            // (3) Else, return "Unknown"

            ## Examples (consider that $conditionTable is $this->conditionTableEvening):
            // (1) if location is "West Jurong", since we have "Jurong"=>"Light"  
            //     in conditionTable, return "Light"
            // (2) If location is "Clementi Avenue 6", since we have "Clementi"=>"Moderate" 
            //     in conditionTable, return "Moderate"
            // (3) If location is "Bencoleen Street", since we do have a matching location keyword
            //     in conditionTable, return "Unknown"

            ## Enter Code Here
        }
           
    }
?>
