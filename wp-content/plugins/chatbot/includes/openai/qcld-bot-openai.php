<?php
if (!defined('ABSPATH')) exit; // Exit if accessed directly

if(!class_exists('qcld_wpopenai_addons')){


    /**
     * Main Class.
     */
    final class qcld_wpopenai_addons
    {
        private $id = 'Open AI';

        /**
         * WPBot Pro version.
         *
         * @var string
         */
        public $version = '1.0.6';
        
        /**
         * WPBot Pro helper.
         *
         * @var object
         */
        public $helper;

        /**
         * The single instance of the class.
         *
         * @var qcld_wb_Chatbot
         * @since 1.0.0
         */
        protected static $_instance = null;
        
        /**
         * Main wpbot Instance.
         *
         * Ensures only one instance of wpbot is loaded or can be loaded.
         *
         * @return qcld_wb_Chatbot - Main instance.
         * @since 1.0.0
         * @static
         */
        public static function instance() {
            if ( is_null( self::$_instance ) ) {
                self::$_instance = new self();
            }

            return self::$_instance;
        }

        public $response_list;

        /**
         *  Constructor
         */
        public function __construct()
        {
            $this->define_constants();
            $this->includes();
            add_action('wp_ajax_openai_settings_option', [$this, 'openai_settings_option_callback']);
            add_action('wp_ajax_openai_file_upload', [$this, 'openai_file_upload_callback']);
            add_action('wp_ajax_openai_response',[$this,'openai_response_callback']);
            add_action('wp_ajax_openai_file_list',[$this,'openai_file_list_callback']);
            add_action('wp_ajax_openai_finetune_list', [$this,'openai_finetune_list']);
            add_action('wp_ajax_openai_file_delete',[$this,'openai_file_delete_callback']);
            add_action('wp_ajax_nopriv_openai_response', [$this, 'openai_response_callback']);
            add_action('wp_ajax_openai_ft_model_create', [$this, 'openai_ft_model_create']);
            add_action('wp_ajax_openai_ft_model_delete', [$this, 'openai_ft_model_delete']);
            add_action('wp_ajax_qcld_openai_post_data_converter_count', [$this,'qcld_openai_post_data_converter_count']);
            add_action('wp_ajax_qcld_openai_post_data_converter', [$this,'qcld_openai_post_data_converter']);
            add_action('wp_ajax_qcld_openai_upload_pagetraining_file',[$this, 'qcld_openai_upload_pagetraining_file']);
            
            if (is_admin() && !empty($_GET["page"]) && (($_GET["page"] == "openai-panel_dashboard") || ($_GET["page"] == "openai-panel_file") || ($_GET["page"] == "openai-panel_help"))) {
                add_action('admin_enqueue_scripts', array($this, 'qcld_wb_chatbot_admin_scripts'));
            }
    
     
        }

        
        /**
         * Define wpbot Constants.
         *
         * @return void
         * @since 1.0.0
         */
        public function define_constants() {
            if( ! defined( 'QCLD_openai_addon_VERSION' ) ){
                define('QCLD_openai_addon_VERSION', $this->version);
            }
           //define('QCLD_openai_addon_REQUIRED_wpCOMMERCE_VERSION', 2.2);

            if( ! defined( 'QCLD_openai_addon_PLUGIN_DIR_PATH' ) ){
                define('QCLD_openai_addon_PLUGIN_DIR_PATH', plugin_dir_path(__FILE__));
            }
            if( ! defined( 'QCLD_openai_addon_PLUGIN_URL' ) ){
                define('QCLD_openai_addon_PLUGIN_URL', plugin_dir_url(__FILE__));
            }
            if( ! defined( 'QCLD_openai_addon_IMG_URL' ) ){
                define('QCLD_openai_addon_IMG_URL', QCLD_openai_addon_PLUGIN_URL . "images/");
            }
            if( ! defined( 'QCLD_openai_addon_IMG_ABSOLUTE_PATH' ) ){
                define('QCLD_openai_addon_IMG_ABSOLUTE_PATH', plugin_dir_path(__FILE__) . "images");
            }

        }


        public function qcld_wb_chatbot_admin_scripts(){
            wp_register_style('qlcd-open-ai-bootstap', QCLD_openai_addon_PLUGIN_URL . 'css/openai-bootstrap.css', '', QCLD_openai_addon_VERSION, 'screen');
            wp_enqueue_style('qlcd-open-ai-bootstap');
            wp_register_style('qlcd-open-ai-admin-style', QCLD_openai_addon_PLUGIN_URL . 'css/openai-admin-style.css', '', QCLD_openai_addon_VERSION, 'screen');
            wp_enqueue_style('qlcd-open-ai-admin-style');
            wp_register_script('qlcd-openai_collapse', QCLD_openai_addon_PLUGIN_URL . 'js/collapse.js', array('jquery'),'',QCLD_openai_addon_VERSION,true);
            wp_enqueue_script('qlcd-openai_collapse');
            wp_register_script('qlcd-openai_settings', QCLD_openai_addon_PLUGIN_URL . 'js/openai_settings.js', array('jquery'),'',QCLD_openai_addon_VERSION,true);
            wp_enqueue_script('qlcd-openai_settings');
            
            wp_localize_script( 'qlcd-openai_settings', 'openai_ajax', array(
                'url' => admin_url( 'admin-ajax.php' ),
            ) );
            
        }
        /**
         * Include all required files
         *
         * since 1.0.0
         *
         * @return void
         */
        public function includes() {
            require_once( QCLD_wpCHATBOT_PLUGIN_DIR_PATH . "includes/openai/qcld_wp_OpenAI.php" );
            require_once( QCLD_wpCHATBOT_PLUGIN_DIR_PATH . "includes/openai/OpenAi_WPBot_Menu.php" );
          
        }
        public function openai_file_delete_callback(){
            $file_id = sanitize_text_field($_POST['file_id']);
            $url = 'https://api.openai.com/v1/files/'. $file_id;
            $apt_key = "Authorization: Bearer ". get_option('open_ai_api_key');
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
            $headers = array(
                $apt_key,
            );
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            $result = curl_exec($ch);
            if (curl_errno($ch)) {
                echo 'Error:' . curl_error($ch);
            }
            curl_close($ch);
           wp_send_json( json_decode($result));
		   wp_die();
        }
        public function openai_ft_model_create(){
            $file_id = sanitize_text_field($_POST['file_id']);
            $ft_suffix = sanitize_text_field($_POST['ft_suffix']);
            $ft_engines = sanitize_text_field($_POST['ft_engines']);
            $rel = $this->openai_finetune_create($file_id,$ft_suffix,$ft_engines);
            print_r(wp_send_json([$rel]));wp_die();
            echo wp_send_json([$rel]);
            wp_die();
        }
        public function openai_file_list_callback(){
            $url = 'https://api.openai.com/v1/files';
            $apt_key = "Authorization: Bearer ". get_option('open_ai_api_key');
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $url);
            $headers = array(
                "Content-Type: application/json",
                $apt_key,
            );
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($curl);
            curl_close($curl);
            wp_send_json( json_decode($response));
		    wp_die();
        }
        public function qcld_sanitize_text_or_array_field($array_or_string) {
            if( is_string($array_or_string) ){
                $array_or_string = sanitize_text_field($array_or_string);
            }elseif( is_array($array_or_string) ){
                foreach ( $array_or_string as $key => &$value ) {
                    if ( is_array( $value ) ) {
                        $value = $this->sanitize_text_or_array_field($value);
                    }
                    else {
                        $value = sanitize_text_field( $value );
                    }
                }
            }

            return $array_or_string;
        }
        public function qcld_openai_post_data_converter_count()
        {
            global $wpdb;
            $qcldopenai_result = array('status' => 'error');
            if(isset($_POST['data']) && is_array($_POST['data'])){
                $types = Self::qcld_sanitize_text_or_array_field($_POST['data']);
                $sql = "SELECT COUNT(*) FROM ".$wpdb->posts." WHERE post_status='publish' AND post_type IN ('".implode("','",$types)."')";
                $qcldopenai_result['count'] = $wpdb->get_var($sql);
                $qcldopenai_result['status'] = 'success';
                $qcldopenai_result['types'] = $types;
            }
            else $qcldopenai_result['msg'] = 'Please select least one data to convert';
           
            $this->qcld_openai_post_data_converter($qcldopenai_result);
        }

        public function qcld_openai_post_data_converter($result)
        {
            $qcldopenai_result = array('status' => 'error','msg' => 'Something went wrong');
            global $wpdb;
            if(
                isset($result['types'])
                && is_array($result['types'])
            ){
                $types = Self::qcld_sanitize_text_or_array_field($result['types']);
               
                $qcldopenai_total = sanitize_text_field($_POST['total']);
                $qcldopenai_per_page = sanitize_text_field($_POST['per_page']);
                $qcldopenai_page = isset($_POST['page']) && !empty($_POST['page']) ? sanitize_text_field($_POST['page']) : 1;
                if(isset($_POST['file']) && !empty($_POST['file'])){
                    $qcldopenai_file = sanitize_text_field($_POST['file']);
                }else{
                    $qcldopenai_file = md5(time()).'.jsonl';
                }
                if(isset($_POST['id']) && !empty($_POST['id'])){
                    $qcldopenai_convert_id = sanitize_text_field($_POST['id']);
                }else{
                    $qcldopenai_convert_id = wp_insert_post(array(
                        'post_title' => $qcldopenai_file,
                        'post_type' => 'qcldopenai_convert',
                        'post_status' => 'publish'
                    ));
                } try {
                    $upload  = wp_upload_dir(); 
                    $upload_dir = $upload['basedir'] . '/' . 'qcldopenai_site_training';
                    $permissions = 0755;
                    $oldmask = umask(0);
                    if (!is_dir($upload_dir)){
                        mkdir($upload_dir, $permissions);
                        $umask = umask($oldmask);
                        $chmod = chmod($upload_dir, $permissions);
                    } 
                    $gcdirpath = WP_CONTENT_DIR.'/qcldopenai_site_training';
                    $qcldopenai_json_file = fopen(wp_upload_dir()['basedir'] .'/qcldopenai_site_training/'.basename($qcldopenai_file), "w");
                    $qcldopenai_content = '';
                    $sql = "SELECT post_title, post_content FROM ".$wpdb->posts." WHERE post_status='publish' AND post_type IN ('".implode("','",$types)."') ORDER BY post_date";                  
                    $qcldopenai_data = $wpdb->get_results($sql);
                    if($qcldopenai_data && is_array($qcldopenai_data) && count($qcldopenai_data)){
                        foreach($qcldopenai_data as $item){
                            $data = array(
                                "prompt" => $item->post_title.' ->',
                                "completion" => strip_tags($item->post_content)
                            );
                            fwrite($qcldopenai_json_file, json_encode($data) . PHP_EOL);
                        }
                    }
                    fclose($qcldopenai_json_file);
                    $qcldopenai_result['file'] = $qcldopenai_file;
                    $qcldopenai_result['id'] = $qcldopenai_convert_id;
                    $qcldopenai_result['status'] = 'success';
                } catch (\Exception $exception){
                    $qcldopenai_result['msg'] = $exception->getMessage();
                }
            }
            else $qcldopenai_result['msg'] = 'Please select least one data to convert';
            wp_send_json($qcldopenai_result);
        }

        public function openai_ft_model_delete(){
            $ft_id = sanitize_text_field($_POST['ft_id']);
            $url = 'https://api.openai.com/v1/models/' . $ft_id;
            $apt_key = "Authorization: Bearer ". get_option('open_ai_api_key');
            $curl = curl_init();
            $headers = array(
                "Content-Type: multipart/form-data",
                $apt_key,
            );
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'DELETE');
            curl_setopt($curl, CURLOPT_POST, true);
            $res = json_decode(curl_exec ($curl));
            curl_close ($curl);
            echo wp_send_json([$rel]);
            wp_die();

        }
        public function qcld_openai_upload_pagetraining_file(){
          
            if(
                isset($_POST['filename'])
                && !empty($_POST['filename'])
            ){
                $filename = sanitize_text_field($_POST['filename']);
                $line = isset($_POST['line']) && !empty($_POST['line']) ? sanitize_text_field($_POST['line']) : 0;
                $file =   wp_upload_dir()['basedir'].'/qcldopenai_site_training/'.$filename;
                if(file_exists($file)){
                    $qcld_openai_lines = file($file);
                    $fileo =  '@'. wp_upload_dir()['basedir'].'/qcldopenai_site_training/'.$filename;
                    $split_file = wp_upload_dir()['basedir'].'/qcldopenai_site_training/'.$filename;
                    $qcld_openai_json_file = fopen($split_file, "a");
                    $qcld_openai_content = '';
                    for($i = $line; $i <= count($qcld_openai_lines);$i++){
                        if($i == count($qcld_openai_lines)){
                            $qcld_openai_content .= $qcld_openai_lines[$i];
                            $qcld_openai_result['next'] = 'DONE';
                        }
                        else{
                            if(mb_strlen($qcld_openai_content, '8bit') > $this->wpaicg_max_file_size){
                                $qcld_openai_result['next'] = $i+1;
                                break;
                            }
                            else{
                                $qcld_openai_content .= $qcld_openai_lines[$i];
                            }
                        }
                    }
                    fwrite($qcld_openai_json_file,$qcld_openai_content);
                    fclose($qcld_openai_json_file);
                    $url = 'https://api.openai.com/v1/files';
                    $apt_key = "Authorization: Bearer ". get_option('open_ai_api_key');
                    $curl = curl_init($url);
                    $c_file = curl_file_create($split_file, mime_content_type($split_file),basename($split_file));
                    $data = array(
                        'purpose' => 'fine-tune',
                        'file' => $c_file,
                    );
                    curl_setopt($curl, CURLOPT_URL, $url);
                    curl_setopt($curl, CURLOPT_POST, true);
                    $headers = array(
                        "Content-Type: multipart/form-data",
                        $apt_key,
                    );
                    $init = curl_init();
                    curl_setopt($init, CURLOPT_URL,$url);
                    curl_setopt($init, CURLOPT_HTTPHEADER, $headers);
                    curl_setopt($init, CURLOPT_POSTFIELDS, $data);
                    curl_setopt($init, CURLOPT_RETURNTRANSFER, true);
                    $res = json_decode(curl_exec ($init));
                    
                    curl_close ($init);
                    if(!empty($res->error)){
                        $response['status'] = 'error';
                        $response['message'] = $res->error->message;
                    }
                    
                    if(!empty($res->status)){
                        $response['status'] = 'success';
                        $response['message'] = 'Successfully Created file' . $res->id ; 
                        
                    }
                    echo wp_send_json([$response]);
                    wp_die();
                } else {
                    if(!empty($res->status)){
                        $response['status'] = 'error';
                        $response['message'] = 'The file has been removed from wp-uploads';
                    }
                }
            }
        }
        public function openai_file_upload_callback(){
            $uploadedfile = $_FILES['file'];
            $url = 'https://api.openai.com/v1/files';
            $apt_key = "Authorization: Bearer ". get_option('open_ai_api_key');
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_POST, true);
            $headers = array(
                "Content-Type: multipart/form-data",
                $apt_key,
            );
            if (function_exists('curl_file_create')) { 
                $tmp_file = curl_file_create($uploadedfile['tmp_name'], 'jsonl', $uploadedfile['name']);
            } else { 
                $tmp_file = open($uploadedfile['tmp_name']);
            }
               
            $data = array('file'=> $tmp_file,'purpose'=> 'fine-tune');
            $init = curl_init();
            //function parameteres
            curl_setopt($init, CURLOPT_URL,$url);
            curl_setopt($init, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($init, CURLOPT_POSTFIELDS, $data);
            curl_setopt($init, CURLOPT_RETURNTRANSFER, true);
            $res = json_decode(curl_exec ($init));
            
            curl_close ($init);
            if(!empty($res->error)){
                $response['status'] = 'error';
                $response['message'] = $res->error->message;
            }
            
            if(!empty($res->status)){
                $response['status'] = 'success';
                $response['message'] = 'Successfully Created file' . $res->id ; 
                
            }
            echo wp_send_json([$response]);
            wp_die();
        }
       
        
        public function openai_finetune_create($file_id,$ft_suffix,$ft_engines){
            $apt_key = "Authorization: Bearer ". get_option('open_ai_api_key');
            $headers = array(
                "Content-Type: application/json",
                $apt_key,
            );
            $curl = curl_init();
            $qcld_openai_suffix = isset($ft_suffix) ? $ft_suffix : get_option('qcld_openai_suffix');
            $openai_engines = isset($ft_engines) ? $ft_engines : get_option('openai_engines');
            $base_engine = explode('-',$openai_engines);
            $data = json_encode(array('training_file'=>$file_id,'model' => $base_engine[1], 'suffix' => $qcld_openai_suffix ));
            $url = "https://api.openai.com/v1/fine-tunes";
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            $result = json_decode(curl_exec($curl));
            curl_close($curl);
            return $result;  
        }
        public function openai_finetune_list(){
            
            $apt_key = "Authorization: Bearer ". get_option('open_ai_api_key');
            $headers = array(
                "Content-Type: application/json",
                $apt_key,
            );
            $curl_ft = curl_init();
            //$data = json_encode(array('training_file'=>$file_id));
            
            $url = "https://api.openai.com/v1/fine-tunes";
            curl_setopt($curl_ft, CURLOPT_URL, $url);
            curl_setopt($curl_ft, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($curl_ft, CURLOPT_RETURNTRANSFER, true);
            $result = json_decode(curl_exec($curl_ft));
            $ft_arry = [];  
            foreach($result->data as $value ){
              if(($value->training_files[0]->status != 'deleted') && ($value->result_files[0]->status != 'deleted') ){
                    $ft_arry[] = [$value->id,$value->fine_tuned_model,$value->status,$value->training_files[0]->filename,$value->training_files[0]->id];
              }
            }
            curl_close($curl_ft);
            wp_send_json( $ft_arry);
		    wp_die();
         
          
        }
        public function openai_retrive_fine_tune(){
            $apt_key = "Authorization: Bearer ". get_option('open_ai_api_key');
            $headers = array(
                "Content-Type: application/json",
                $apt_key,
            );
            $curl = curl_init();
            $data = json_encode(array('training_file'=>$file_id));
            
            $url = "https://api.openai.com/v1/fine-tunes/ft-72lUhFiarH2WMFDZacdoySmU";
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            $result = json_decode(curl_exec($curl));
            return $result; 
            curl_close($curl);
        }
        public function response_form_file($keyword){
            $max_tokens =  (int)get_option( 'openai_max_tokens');
            $temp = (float)get_option( 'openai_temperature');
            $frequency_penalty = (float)get_option( 'frequency_penalty');
            $presence_penalty = (float)get_option( 'presence_penalty');
            $prompts = $this->get_prompt($keyword);
            $request_body = [
                "prompt" =>  "\n\n" .$keyword ."\n\n",
                "model" => get_option( 'qcld_openai_custom_model'),
                "max_tokens" => $max_tokens,
                "temperature" => $temp,
                "top_p" => 1,
                "presence_penalty" => $presence_penalty,
                "frequency_penalty"=> $frequency_penalty,
                "best_of"=> 1,
            ];
            $postFields = json_encode($request_body);
            $OpenAI =  new qcld_wp_OpenAI();
            $result = $OpenAI->get_response($postFields);

            return $result;
        }
        public function get_prompt($keyword){
          $qcld_openai_prompt = get_option('qcld_openai_prompt',true);
          switch ($qcld_openai_prompt) {
            case "q_and_a":
                return "Q:".$keyword."\nA:";
            case "chat":
                return "\nHuman:".$keyword."\nAI:";
            case "friend_chat":
                return "You:".$keyword."\nFriend:";
            case "grammar_correction":
                return "Correct this to standard English:\n\n ".$keyword." " ;
            case "marv_sarcastic_chatbot" :
                return "Marv is a chatbot that reluctantly answers questions with sarcastic responses:\n\nYou: ".$keyword." \nMarv:";
            case "micro_horror":
                return "\nTopic:  ".$keyword."\n\nTwo-Sentence Horror Story:";
            case "any_command":
                return $keyword;
            case "write_poem":
                return "write a poem about". $keyword;
            case "custom_prompt": 
                return  get_option('qcld_openai_prompt_custom') ."\n" . $keyword;
            default:
                return "Q:".$keyword."\nA:";
          }
        }
        public function openai_response_callback() {
            $response['status'] = 'success';
            $response['message'] ='A preset message';
            $OpenAI =  new qcld_wp_OpenAI();
            $keyword = sanitize_text_field($_POST['keyword']);
            $response_files = $this->response_form_file($keyword);
            
            $response_file = ($response_files);
            if(empty($response_file->choices[0]->text)){
               
                $prompts = $this->get_prompt($keyword);
                $prompt =$prompts;
                $res = $OpenAI->complete(
                    $prompt
                );
                $mess = json_decode($res);
                $response['message'] = $mess->choices[0]->text;
            }else{
                $response['message'] = $response_file->choices[0]->text;
            }
            echo json_encode($response);
	        wp_die();
        }
        public function openai_settings_option_callback() {
             $api_key = sanitize_text_field($_POST['api_key']);
             $openai_engines = sanitize_text_field($_POST['openai_engines']);
             $qcld_openai_prompt = sanitize_text_field($_POST['qcld_openai_prompt']);
             $max_tokens = sanitize_text_field($_POST['max_tokens']);
             $qcld_openai_suffix = sanitize_text_field($_POST['qcld_openai_suffix']);
             $qcld_openai_custom_model = sanitize_text_field($_POST['qcld_openai_custom_model']);
             $frequency_penalty = sanitize_text_field($_POST['frequency_penalty']);
             $presence_penalty = sanitize_text_field($_POST['presence_penalty']);
             $temperature = sanitize_text_field($_POST['temperature']);
             $ai_enabled = sanitize_text_field($_POST['ai_enabled']);
             $ai_only_mode =  sanitize_text_field($_POST['ai_only_mode']);
             $file_id = sanitize_text_field($_POST['file_id']);
             $qcld_openai_prompt_custom = sanitize_text_field($_POST['qcld_openai_prompt_custom']);
            if($api_key  != ''){
                 update_option( 'open_ai_api_key', $api_key );
            }
            if($openai_engines  != ''){
                update_option( 'openai_engines', $openai_engines );
            }
            if($max_tokens  != ''){
                update_option( 'openai_max_tokens', $max_tokens );
            }
            if($qcld_openai_suffix != ''){
               update_option('qcld_openai_suffix', $qcld_openai_suffix);
            }
            if($frequency_penalty  != ''){
               update_option( 'frequency_penalty', $frequency_penalty );
            }
            if($presence_penalty  != ''){
                 update_option( 'presence_penalty', $presence_penalty );
            }
            if($temperature  != ''){
             update_option( 'openai_temperature', $temperature );
            }
            if($qcld_openai_prompt_custom  != ''){
                update_option('qcld_openai_prompt_custom', $qcld_openai_prompt_custom );
            }
            if($qcld_openai_custom_model != ''){
                update_option('qcld_openai_custom_model',$qcld_openai_custom_model);
            }
            if($max_tokens  != ''){
                update_option('ai_enabled',$ai_enabled);
            }
            if($file_id  != ''){
                update_option('file_id',$file_id);
            }
            if(($ai_only_mode != '') && ($ai_only_mode == 0)){
                update_option('ai_only_mode', $ai_only_mode);
                update_option('enable_wp_chatbot_disable_allicon', 0);
                update_option('qcld_disable_start_menu', 0);
                update_option('show_menu_after_greetings', 0);
                update_option('skip_wp_greetings', 0);
                update_option('disable_wp_chatbot_site_search',0);
                update_option('disable_wp_chatbot_call_gen',0);
                update_option('disable_wp_chatbot_feedback',0);
                update_option('disable_wp_chatbot_faq',0);
                update_option('disable_email_subscription',0);
                update_option('disable_str_categories',0);
                update_option('disable_good_bye',0);

            }else if(($ai_only_mode != '') && ($ai_only_mode == 1)){
                update_option('ai_only_mode', $ai_only_mode);
                update_option('enable_wp_chatbot_disable_allicon', 1);
                update_option('qcld_disable_start_menu', 1);
                update_option('show_menu_after_greetings', 1);
                update_option('skip_wp_greetings', 1);
                update_option('disable_wp_chatbot_site_search',1);
                update_option('disable_wp_chatbot_call_gen',1);
                update_option('disable_wp_chatbot_feedback',1);
                update_option('disable_wp_chatbot_faq',1);
                update_option('disable_email_subscription',1);
                update_option('disable_str_categories',1);
                update_option('disable_good_bye',1);
            }
            
            if($qcld_openai_prompt != ''){
                update_option('qcld_openai_prompt', $qcld_openai_prompt);
            }
            $tem = get_option( 'openai_temperature', $temperature );
        
             echo json_encode($ai_enabled);wp_die();
        }
    }

    /**
     * @return qcld_wpopenai_addon
     */
    if(!function_exists('qcld_wpopenai_addons')){
        function qcld_openais() {
            $qcld_wpopenai_addon = new qcld_wpopenai_addons();
            return $qcld_wpopenai_addon->instance();
        
        }
    }
  
    //fire off the plugin
    qcld_openais();

}