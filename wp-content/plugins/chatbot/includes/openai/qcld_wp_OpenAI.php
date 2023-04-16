<?php
include_once(ABSPATH . 'wp-includes/pluggable.php');
if(!class_exists('qcld_wp_OpenAI')){
    class qcld_wp_OpenAI{
        public $baseURL = "https://api.openai.com/v1/";
        private $defaultEngine = "davinci";
        public function setDefaultEngine($defaultEngine){
            $this->defaultEngine = $defaultEngine;
        }

        public function get_response($postFields){
            $url = "https://api.openai.com/v1/completions";
            $apt_key = "Authorization: Bearer ". get_option('open_ai_api_key');
    
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            
            $headers = array(
            "Content-Type: application/json",
            $apt_key ,
            );
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            
        
            curl_setopt($curl, CURLOPT_POSTFIELDS, $postFields);
            
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
            $response = curl_exec($curl);
            curl_close($curl);
        

            return  json_decode($response);
        }

 

        public function complete( $prompt) {
            $max_tokens =  (int)get_option( 'openai_max_tokens');
            $temp = (float)get_option( 'openai_temperature');
            $frequency_penalty = (float)get_option( 'frequency_penalty');
            $presence_penalty = (float)get_option( 'presence_penalty');
            $request_body = [
                "prompt" => $prompt,
                "model" => get_option( 'openai_engines'),
                "max_tokens" => $max_tokens,
                "temperature" => $temp,
                "top_p" => 1,
                "presence_penalty" => $presence_penalty,
                "frequency_penalty"=> $frequency_penalty,
                "best_of"=> 1,
                "stream" => false,
            ];
            $postFields = json_encode($request_body);
            
            
            $result = self::get_response($postFields);
           // var_dump(json_encode($result));wp_die();
            return json_encode($result);
        // return $returnResult ? ($json ? json_encode($result) : $result) : $this->_removeUnfinishedSentence($prompt . ($result?->choices[0]?->text ?? ""));

        }
    }
}