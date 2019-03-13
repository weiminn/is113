<?php
    class TrafficDuration{
      
        // We have obtained Google API Key ($myKey) for illustration purpose 
        private $myKey="AIzaSyB3gNTYadl70GB-tuXjCsT5jn_XkVJ4jfY";

        // For real deployment, you need to obtain your own key
        // See: https://developers.google.com/maps/documentation/directions/get-api-key

        private $departureTime = "now";
        private $trafficModel = "pessimistic";
        private $baseUrl = "https://maps.googleapis.com/maps/api/directions/json?";

        private $origin;
        private $destination;  

        // Constructor
        public function __construct($origin, $destination) {
            $this->origin = $origin;
            $this->destination = $destination;
        }

        //  Method for computing travel duration information 
        public function getDuration() {
            $url = $this->baseUrl . "origin=" . urlencode($this->origin) . "&destination=" . 
                        urlencode($this->destination) . 
                        "&departure_time=" . $this->departureTime . "&traffic_model=" . 
                                                    $this->trafficModel . "&key=" . $this->myKey;

            $content = file_get_contents($url);
            $data = json_decode($content);
            if (count($data->routes)>0){
                $duration = $data->routes[0]->legs[0]->duration->text;
            }
            else {
                $duration = "unknown";
            }
            return $duration;
        }
           
    }
?>
