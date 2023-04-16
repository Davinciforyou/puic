<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}
?>

<div class="wrap">
  <h1 style="display:none">
    <?php esc_html_e('WPBot', 'wpbot'); ?>
  </h1>
</div>
<div class="wp-chatbot-wrap">
<div class="icon32"><br>
</div>
<form action="<?php echo esc_attr($action); ?>" method="POST" id="wp-chatbot-admin-form"
          enctype="multipart/form-data">
  <div class="container form-container">
    <header class="wp-chatbot-admin-header">
      <div class="row">
        <div class="col-sm-6">
          <h2><?php echo __('WPBot Control Panel', 'wpbot'); ?><?php echo get_option('wp_chatbot_index_meta'); ?></h2>
        </div>
        <div class="col-sm-6 text-right wp-chatbot-version">
          
          <div class="wpchatbot-lite-version-section">
          <h3 class="wpchatbot-liteversion">
            <?php esc_html_e('The Lite Version', 'wpbot'); ?> 
          </h3>
      <a class="wpchatbot-Upgrade" href="https://www.wpbot.pro/" target="_blank">Upgrade To Pro</a>
            </div>
        </div>
      </div>
    </header>
    <section class="wp-chatbot-tab-container-inner">
      <div class="wp-chatbot-tabs wp-chatbot-tabs-style-flip">
        <nav>
          <ul>
            <li tab-data="started"><a href="<?php echo esc_attr($action); ?>&tab=started"> <span class="wpwbot-admin-tab-icon"> <i class="fa fa-toggle-on"> </i> </span> <span class="wpwbot-admin-tab-name">
              <?php esc_html_e('GETTING STARTED', 'wpbot'); ?>
              </span> </a></li>
            <li tab-data="general"><a href="<?php echo esc_attr($action); ?>&tab=general"> <span class="wpwbot-admin-tab-icon"> <i class="fa fa-toggle-on"> </i> </span> <span class="wpwbot-admin-tab-name">
              <?php esc_html_e('GENERAL SETTINGS', 'wpbot'); ?>
              </span> </a></li>
            <li tab-data="themes"><a href="<?php echo esc_attr($action); ?>&tab=themes"> <span class="wpwbot-admin-tab-icon"> <i class="fa fa-gear faa-spin"></i> </span> <span class="wpwbot-admin-tab-name">
              <?php esc_html_e('ICONS & THEMES', 'wpbot'); ?>
              </span> </a></li>
            <li tab-data="support"><a href="<?php echo esc_attr($action); ?>&tab=support"> <span class="wpwbot-admin-tab-icon"> <i class="fa fa-life-ring"></i> </span> <span class="wpwbot-admin-tab-name">
              <?php esc_html_e('FAQ Builder', 'wpbot'); ?>
              </span> </a></li>
            <!--<li tab-data="notification"><a href="<?php echo esc_attr($action); ?>&tab=notification">
                                    <span class="wpwbot-admin-tab-icon">
                                    <i class="fa fa-bell-o"></i>
                                    </span>
                                    <span class="wpwbot-admin-tab-name"><?php esc_html_e('Notification Builder', 'wpbot'); ?></span>
                                </a></li>-->
            <li tab-data="language"><a href="<?php echo esc_attr($action); ?>&tab=language"> <span class="wpwbot-admin-tab-icon"> <i class="fa fa-language"></i> </span> <span class="wpwbot-admin-tab-name">
              <?php esc_html_e('LANGUAGE CENTER', 'wpbot'); ?>
              </span> </a></li>
            <li tab-data="startmenu"><a href="<?php echo esc_attr($action); ?>&tab=startmenu"> <span class="wpwbot-admin-tab-icon"> <i class="fa fa-bars"></i> </span> <span class="wpwbot-admin-tab-name"><?php echo esc_html__('Start Menu', 'wpbot'); ?></span> </a></li>
            
            <!--<li tab-data="hours"><a href="<?php echo esc_attr($action); ?>&tab=hours">
                                    <span class="wpwbot-admin-tab-icon">
                                    <i class="fa fa-calendar"></i>
                                    </span>
                                    <span class="wpwbot-admin-tab-name"><?php esc_html_e('Bot Activity Hour', 'wpbot'); ?></span>
                                </a></li>-->
            <li tab-data="ai"><a href="<?php echo esc_attr($action); ?>&tab=ai"> <span class="wpwbot-admin-tab-icon"> <i class="fa fa-500px"></i> </span> <span class="wpwbot-admin-tab-name">
              <?php esc_html_e('Dialogflow', 'wpbot'); ?>
              </span> </a></li>
            
            <div class="cxsc-settings_openai_border"> <a href="<?php echo esc_attr($action); ?>_openAi"> <span class="wpwbot-admin-tab-icon"> <i class="fa fa-gear"></i> 
            </span> <span class=""> <?php esc_html_e('Open Ai Settings', 'wpbot'); ?> </span> 
            </a>
            </div>
            <li tab-data="custom_css"> <a href="<?php echo esc_attr($action); ?>&tab=ai"> <span class="wpwbot-admin-tab-icon"> <i class="fa fa-code"></i> 
            </span> <span class="wpwbot-admin-tab-name"> <?php esc_html_e('Custom CSS', 'wpbot'); ?></span> </a>
            </li>

            <li tab-data="rpl"><a href="<?php echo esc_attr($action); ?>&tab=rpl"> <span class="wpwbot-admin-tab-icon"> <i class="fa fa-plug"></i> </span> <span class="wpwbot-admin-tab-name"> <?php esc_html_e('Conversational Form', 'wpbot'); ?> </span> </a>
            </li>


           
            <!--<li tab-data="app"><a href="<?php echo esc_attr($action); ?>&tab=app">
                                    <span class="wpwbot-admin-tab-icon">
                                    <i class="fa fa-mobile"></i>
                                    </span>
                                    <span class="wpwbot-admin-tab-name"><?php esc_html_e('MOBILE APP', 'wpbot'); ?></span>
                                </a></li>
                            <li tab-data="custom"><a href="<?php echo esc_attr($action); ?>&tab=custom">
                                    <span class="wpwbot-admin-tab-icon">
                                    <i class="fa fa-code"></i>
                                    </span>
                                    <span class="wpwbot-admin-tab-name"><?php esc_html_e('Custom CSS', 'wpbot'); ?> </span>
                                </a></li>-->
            
          </ul>

  </nav>




        <div class="content-wrap">
          <section id="section-flip-1">
            <div class="top-section getting_gtarted_section">
              <div class="col-xs-12">
                <div class="content form-container qcbot_help_secion"> 
                  <h2 style="margin-top: 10px;"><?php echo esc_html__('WPBot Interactions', 'wpbot'); ?></h2>
                  <h3 style=" color: #222; margin: 0; padding: 0 0 12px 0; font-size: 16px; font-weight: bold;"><?php echo esc_html__('You can create user interactions in the following ways:', 'wpbot'); ?></h3>
                  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                          <?php echo esc_html__(' Predefined intents - Built-in ChatBot Features', 'wpbot'); ?>
                          </a>
                        </h4>
                      </div>
                      <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                        <?php echo esc_html__(' Predefined intents can work without integration to DialogFlow API and AI. These are readily available as soon as you install the plugin and can be turned on or off individually.', 'wpbot'); ?>
                          <div class="section-container">
                              <div class="wpb_column vc_column_container vc_col-sm-6">
                                <div class="vc_column-inner ">
                                  <div class="wpb_wrapper">
                                    <div class="to-icon-box  left txt-left">
                                      <div class="to-icon-txt fa-4x-txt ">
                                        <h3>
                                          <span>// </span><?php echo esc_html__('Simple Text Responses', 'wpbot'); ?>
                                        </h3>
                                        <p><?php echo esc_html__('Create unlimited text responses from your WordPress backend. The ChatBot uses advanced search algorithm for natural language phrase matching with user input.', 'wpbot'); ?> </p>
                                      </div>
                                    </div>
                                    <div class="to-icon-box  left txt-left">
                                      <div class="to-icon-txt fa-4x-txt ">
                                        <h3>
                                          <span>// </span><?php echo esc_html__('Send eMail, Call Me Back &amp; Feedback Collection', 'wpbot'); ?>
                                        </h3>
                                        <p><?php echo esc_html__('Users can send a email to the site admin directly from the Chat window for customer support. The Call Me Back feature lets you get call requests from your customers which will be emailed to you. You can also use WPBot to collect Feedback from your customers regarding anything! You can disable/enable these features from the Start Menu.', 'wpbot'); ?> </p>
                                      </div>
                                    </div>
                                    <div class="to-icon-box  left txt-left">
                                      <div class="to-icon-txt fa-4x-txt ">
                                        <h3>
                                          <span>// </span><?php echo esc_html__('Advanced Site Search', 'wpbot'); ?> <span class="qc_wpbot_pro"><?php echo esc_html__('PRO', 'wpbot'); ?></span>
                                        </h3>
                                        <p><?php echo esc_html__('If no matching text response is found WPBot will conduct an advanced website search and try to match user queries with your website contents and show results.', 'wpbot'); ?> </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="wpb_column vc_column_container vc_col-sm-6">
                                <div class="vc_column-inner ">
                                  <div class="wpb_wrapper">
                                    <div class="to-icon-box  left txt-left">
                                      <div class="to-icon-txt fa-4x-txt ">
                                        <h3>
                                          <span>// </span><?php echo esc_html__('Frequently Asked Questions', 'wpbot'); ?>
                                        </h3>
                                        <p><?php echo esc_html__('Create a set of Frequently Asked Questions or FAQ so users can quickly find answers to the most common questions they have.', 'wpbot'); ?></p>
                                      </div>
                                    </div>
                                    <div class="to-icon-box  left txt-left">
                                      <div class="to-icon-txt fa-4x-txt ">
                                        <h3>
                                          <span>// </span><?php echo esc_html__('Ask for name, email, phone number etc.', 'wpbot'); ?>
                                        </h3>
                                        <p><?php echo esc_html__('Asking for the name is the default workflow. In the pro version, you can also ask for an email and phone number if you want to or skip the Greetings part altogether and load any intent of your choice.', 'wpbot'); ?></p>
                                      </div>
                                    </div>
                                    <div class="to-icon-box  left txt-left">
                                      <div class="to-icon-txt fa-4x-txt ">
                                        <h3>
                                          <span>// </span><?php echo esc_html__('Newsletter Subscription', 'wpbot'); ?> <span class="qc_wpbot_pro"><?php echo esc_html__('PRO', 'wpbot'); ?></span>
                                        </h3>
                                        <p><?php echo esc_html__('WPBot can prompt User for eMail subscription. Link this with your Retargeting ChatBot window popup and a special offer. People can register their email address that you can later export as CSV!', 'wpbot'); ?> <strong><?php echo esc_html__('GDPR compliant', 'wpbot'); ?></strong> <?php echo esc_html__('with unsubscribe option from the ChatBot!', 'wpbot'); ?> </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          <?php echo esc_html__('Menu Driven - Created with Conversational Form Builder Addon', 'wpbot'); ?>
                          </a>
                        </h4>
                      </div>
                      <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                          <p><?php echo esc_html__('Extend the Start Menu with the', 'wpbot'); ?> <strong><?php echo esc_html__('powerful Conversational Forms', 'wpbot'); ?></strong><?php echo esc_html__('&nbsp; Addon for WPBot. It extends WPBot’s functionality and adds the ability to create <strong>conditional conversations', 'wpbot'); ?></strong> <?php echo esc_html__('and/or', 'wpbot'); ?> <strong><?php echo esc_html__('forms', 'wpbot'); ?></strong> <?php echo esc_html__('for the WPBot. It is a visual,', 'wpbot'); ?> <strong> <?php echo esc_html__('drag and drop', 'wpbot'); ?></strong> <?php echo esc_html__('form builder that is easy to use and very flexible. Supports conditional logic and use of variables to build all types of forms or just ', 'wpbot'); ?><strong><?php echo esc_html__('menu driven', 'wpbot'); ?></strong>
                            <strong><?php echo esc_html__('conversations', 'wpbot'); ?> </strong><?php echo esc_html__('with if else logic', 'wpbot'); ?> <strong>. </strong><?php echo esc_html__('Conversations or forms can be', 'wpbot'); ?> <strong><?php echo esc_html__('eMailed', 'wpbot'); ?></strong> <?php echo esc_html__('to you and', 'wpbot'); ?> <strong><?php echo esc_html__('saved in the database', 'wpbot'); ?></strong>.
                          </p>
                          <h4><?php echo esc_html__('Conversational Form Builder Free or Pro version works with the WPBot Free or Pro versions.', 'wpbot'); ?></h4>
                          <a class="FormBuilder" href="https://wordpress.org/plugins/conversational-forms/" target="_blank"><?php echo esc_html__('Download Free Version', 'wpbot'); ?></a>
                          <a class="FormBuilder" href="https://www.quantumcloud.com/products/conversations-and-form-builder/" target="_blank"><?php echo esc_html__('Grab the Pro version', 'wpbot'); ?></a>
                          <h4><?php echo esc_html__('What Can You Do with it?', 'wpbot'); ?></h4>
                          <p><?php echo esc_html__('Conversation Forms allows you to create a wide variety of forms, that might include:', 'wpbot'); ?></p>
                          <ul>
                            <li><?php echo esc_html__('Create menu or button driven conversations', 'wpbot'); ?></li>
                            <li><?php echo esc_html__('Conditional', 'wpbot'); ?> <strong><?php echo esc_html__('Menu Driven Conversations', 'wpbot'); ?></strong>
                              <span class="qc_wpbot_pro" style="font-size: 9px;"><?php echo esc_html__('PRO', 'wpbot'); ?></span>
                            </li>
                            <li><?php echo esc_html__('Standard Contact Forms', 'wpbot'); ?></li>
                            <li><?php echo esc_html__('Dynamic,', 'wpbot'); ?> <strong><?php echo esc_html__('conditional Forms', 'wpbot'); ?></strong> <?php echo esc_html__('– where fields can change based on the user selections', 'wpbot'); ?> <span class="qc_wpbot_pro" style="font-size: 9px;"><?php echo esc_html__('PRO', 'wpbot'); ?></span>
                            </li>
                            <li><?php echo esc_html__('Job', 'wpbot'); ?> <strong><?php echo esc_html__('Application Forms', 'wpbot'); ?></strong>
                            </li>
                            <li>
                              <strong><?php echo esc_html__('Lead Capture', 'wpbot'); ?></strong> <?php echo esc_html__('Forms', 'wpbot'); ?>
                            </li>
                            <li><?php echo esc_html__('Various types of', 'wpbot'); ?> <strong><?php echo esc_html__('Calculators', 'wpbot'); ?></strong>
                              <span class="qc_wpbot_pro" style="font-size: 9px;"><?php echo esc_html__('PRO', 'wpbot'); ?></span>
                            </li>
                            <li><?php echo esc_html__('Feedback ', 'wpbot'); ?><strong><?php echo esc_html__('Survey', 'wpbot'); ?></strong> <?php echo esc_html__('Forms etc.', 'wpbot'); ?> </li>
                          </ul>

                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          <?php echo esc_html__('DialogFlow ES and CX, OpenAI', 'wpbot'); ?>
                          </a>
                        </h4>
                      </div>
                      <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                          <div class="section-container">
                            <div class="wpb_column vc_column_container vc_col-sm-6">
                              <div class="wpb_wrapper">
                                <h2 style="font-size: 20px;"><?php echo esc_html__('DialogFlow Essential', 'wpbot'); ?></h2> 
                                <p>
                                <?php echo esc_html__('Intents created in Dialogflow give you the power to build a truly human like, intelligent and comprehensive chatbot. Build any type of Intents and Responses (including rich message responses) directly in DialogFlow and train the bot accordingly. When you create custom intents and responses in DialogFlow, WPBot will ', 'wpbot'); ?><strong> <?php echo esc_html__('automatically', 'wpbot'); ?></strong> <?php echo esc_html__('display them when user inputs match with your Custom Intents along with the responses you created. You can also build Rich responses by enabling Facebook messenger Response option.', 'wpbot'); ?>
                               </p>
                                <p style="text-align: left;"><?php echo esc_html__('In addition you can also Enable ', 'wpbot'); ?><strong><?php echo esc_html__('Advanced Chained Question and Answers', 'wpbot'); ?></strong> <?php echo esc_html__('using follow up Intents, Contexts, Entities etc. and then have resulting answers from your users emailed to you. This feature lets you create a a series of questions in DialogFlow that will be asked by the bot and based on the user inputs a response will be displayed.', 'wpbot'); ?> <span class="qc_wpbot_pro" style="font-size: 9px;"><?php echo esc_html__('PRO', 'wpbot'); ?></span>
                                </p>
                                <p style="text-align: left;"><?php echo esc_html__('WPBot also supports Rich responses using Facebook Messenger integration. This allows you to display Image, ', 'wpbot'); ?><strong><?php echo esc_html__('Cards', 'wpbot'); ?></strong><?php echo esc_html__(', Quick Text Reply or Custom PayLoad inside the ChatBot window. You can also insert an', 'wpbot'); ?> <strong><?php echo esc_html__('image', 'wpbot'); ?></strong> <?php echo esc_html__('or', 'wpbot'); ?> <strong><?php echo esc_html__('youtube video', 'wpbot'); ?></strong> <?php echo esc_html__('link inside the DialogFlow responses and they will be automatically rendered by the WPBot!', 'wpbot'); ?> <span class="qc_wpbot_pro" style="font-size: 9px;"><?php echo esc_html__('PRO', 'wpbot'); ?></span>
                                </p>
                                <h2 style="font-size: 20px;"><?php echo esc_html__('OpenAI', 'wpbot'); ?></h2><?php echo esc_html__('Connect the ChatBot to OpenAI. OpenAI’s API provides access to GPT-3, for a wide variety of natural language tasks. Train your ChatBot with (pre-trained) GPT-3 to answer any user questions using. Select your preferred Engine from DaVinci, Ada, Curie or Babbag! Add your own API key to the addon to connect to your OpenAI account. To go live, you need to apply to OpenAI.', 'wpbot'); ?>
                              </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-6">
                              <div class="wpb_wrapper">
                                <h2 style="font-size: 20px;"><?php echo esc_html__('DialogFlow CX', 'wpbot'); ?> <span class="qc_wpbot_pro"><?php echo esc_html__('PRO', 'wpbot'); ?></span>
                                </h2>
                                <p><?php echo esc_html__('WPBot supports', 'wpbot'); ?> <strong><?php echo esc_html__('visual workflow builder', 'wpbot'); ?></strong> <?php echo esc_html__('Dialogflow CX. It provides a new way of designing agents, taking a state machine approach to agent design. This gives you clear and explicit control over a conversation, a better end-user experience, and a better development <strong>workflow', 'wpbot'); ?></strong>. </p>
                                <ul>
                                  <li>
                                    <strong><?php echo esc_html__('Console visualization</strong>: A new <strong>visual builder</strong> makes building and maintaining agents easier. Conversation paths are graphed as a state machine model, which makes conversations easier to design, enhance, and maintain.', 'wpbot'); ?>
                                  </li>
                                  <li>
                                    <strong><?php echo esc_html__('Intuitive and powerful conversation control:', 'wpbot'); ?></strong> <?php echo esc_html__('Conversation states and state transitions are first-class types that provide explicit and powerful control over conversation paths. You can clearly define a series of steps that you want the end-user to go through.', 'wpbot'); ?>
                                  </li>
                                  <li>
                                    <strong><?php echo esc_html__('Flows for agent partitions</strong>: With flows, you can partition your agent into smaller conversation topics. Different team members can own different flows, which makes large and complex agents easy to build.', 'wpbot'); ?>
                                  </li>
                                  <img style="width:100%" src="<?php echo QCLD_wpCHATBOT_IMG_URL . '/dialogflow-cx-1024x676.jpg';?>" alt="Dialogflow CX">
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
          </section>
          <section id="section-flip-2">
            <div class="top-section">
              <div class="row">
                <div class="col-xs-12">
          <div class="cxsc-settings-blocks-notic">
                  <p class="d-ib"><?php echo esc_html__('Please see the plugin`s Getting Started section for how to create interactions.', 'wpbot'); ?>
      <p class="d-ib"><?php echo esc_html__('The ChatBot can work with ANY language. Just change the language texts from the ChatBot Settings->Language Center.', 'wpbot'); ?>
       <p class="d-ib"><?php echo esc_html__('Please see the plugin`s Help and Debugging section to troubleshoot common issues.', 'wpbot'); ?>

          </div>
          
          <b>
                  <!-- <p>Please see the plugin's Help and Debugging section to troubleshoot common issues.</p> -->
                  </b>
                  <div class="cxsc-settings-blocks">
                    <div class="form-group">
                      <?php
                                                $url = get_site_url();
                                                $url = parse_url($url);
                                                $domain = $url['host'];
                                                
                                                $admin_email = get_option('admin_email');
                                                ?>
                      <h4 class="qc-opt-title"><?php echo esc_html__('Emails Will be Sent to', 'wpbot'); ?></h4>
                      <input type="text" class="form-control qc-opt-dcs-font"
                                                       name="qlcd_wp_chatbot_admin_email"
                                                       value="<?php echo(get_option('qlcd_wp_chatbot_admin_email') != '' ? get_option('qlcd_wp_chatbot_admin_email') : $admin_email); ?>">
                      <label for="disable_wp_chatbot"><?php echo esc_html__('Support and Call Back requests will be sent to this address', 'wpbot'); ?> </label>
                    </div>
                  </div>
                  <div class="cxsc-settings-blocks">
                    <div class="form-group">
                      <?php

                                                $url = get_site_url();  
                                                $url = parse_url($url);
                                                $domain = $url['host'];
                                                
                                                $fromEmail = "wordpress@" . $domain;

                                                ?>
                      <h4 class="qc-opt-title"><?php echo esc_html__('From Email Address', 'wpbot'); ?></h4>
                      <input type="text" class="form-control qc-opt-dcs-font"
                                                       name="qlcd_wp_chatbot_from_email"
                                                       value="<?php echo(get_option('qlcd_wp_chatbot_from_email') != '' ? get_option('qlcd_wp_chatbot_from_email') : $fromEmail); ?>">
                      <label for="qlcd_wp_chatbot_from_email"><?php echo esc_html__('All emails will be sent from this email address. If you change the From Email Address then please make sure the domain remains same. Otherwise, the emails may not be received.', 'wpbot'); ?> </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <h4 class="qc-opt-title">
                    <?php esc_html_e('Disable WPBot', 'wpbot'); ?>
                  </h4>
                  <div class="cxsc-settings-blocks">
                    <input value="1" id="disable_wp_chatbot" type="checkbox"
                                                   name="disable_wp_chatbot" <?php echo(get_option('disable_wp_chatbot') == 1 ? 'checked' : ''); ?>>
                    <label for="disable_wp_chatbot">
                      <?php esc_html_e('Disable WPBot to Load', 'wpbot'); ?>
                    </label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <h4 class="qc-opt-title">
                    <?php esc_html_e('Disable WPbot on Mobile Device', 'wpbot'); ?>
                  </h4>
                  <div class="cxsc-settings-blocks">
                    <input value="1" id="disable_wp_chatbot_on_mobile" type="checkbox"
                                                   name="disable_wp_chatbot_on_mobile" <?php echo(get_option('disable_wp_chatbot_on_mobile') == 1 ? 'checked' : ''); ?>>
                    <label for="disable_wp_chatbot_on_mobile">
                      <?php esc_html_e('Disable WpBot to Load on Mobile Device', 'wpbot'); ?>
                    </label>
                  </div>
                </div>
              </div>
        
              <div class="row">
                <div class="col-xs-12">
                  <h4 class="qc-opt-title">
                    <?php esc_html_e('Enable RTL', 'wpbot'); ?>
                  </h4>
                  <div class="cxsc-settings-blocks">
                    <input value="1" id="enable_wp_chatbot_rtl" type="checkbox"
                                                   name="enable_wp_chatbot_rtl" <?php echo(get_option('enable_wp_chatbot_rtl') == 1 ? 'checked' : ''); ?>>
                    <label for="enable_wp_chatbot_rtl">
                      <?php esc_html_e('Enable RTL (Right to Left language) Support for Chat', 'wpbot'); ?>
                    </label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <h4 class="qc-opt-title"> <?php echo esc_html__('Show Start Menu After Greetings', 'wpbot'); ?> </h4>
                  <div class="cxsc-settings-blocks">
                    <input value="1" id="show_menu_after_greetings" type="checkbox"
                                                   name="show_menu_after_greetings" <?php echo(get_option('show_menu_after_greetings') == 1 ? 'checked' : ''); ?>>
                    <label for="show_menu_after_greetings"><?php echo esc_html__('Show Start Menu After Greetings', 'wpbot'); ?> </label>
                  </div>
                </div>
              </div>
         
              <div class="row">
                <div class="col-xs-12">
                  <h4 class="qc-opt-title">
                    <?php esc_html_e('WPBot Open Full Screen in Mobile', 'wpbot'); ?>
                  </h4>
                  <div class="cxsc-settings-blocks">
                    <input value="1" id="enable_wp_chatbot_mobile_full_screen" type="checkbox"
                                                   name="enable_wp_chatbot_mobile_full_screen" <?php echo(get_option('enable_wp_chatbot_mobile_full_screen') == 1 ? 'checked' : ''); ?>>
                    <label for="enable_wp_chatbot_mobile_full_screen">
                      <?php esc_html_e('Enable WpBot Open Full Screen in Mobile', 'wpbot'); ?>
                    </label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <h4 class="qc-opt-title"><?php echo esc_html__('Bot Response Delay', 'wpbot'); ?> </h4>
                  <div class="cxsc-settings-blocks">
                    <select name="wpbot_preloading_time" id="wpbot_preloading_time">
                      <option value="100" <?php echo(get_option('wpbot_preloading_time') == '100' ? 'selected="selected"' : ''); ?>>0 Second</option>
                      <option value="500" <?php echo(get_option('wpbot_preloading_time') == '500' ? 'selected="selected"' : ''); ?>>0.5 Second</option>
                      <option value="1000" <?php echo(get_option('wpbot_preloading_time') == '1000' ? 'selected="selected"' : ''); ?>>1 Second</option>
                      <option value="2000" <?php echo(get_option('wpbot_preloading_time') == '2000' ? 'selected="selected"' : ''); ?>>2 Second</option>
                      <option value="3000" <?php echo(get_option('wpbot_preloading_time') == '3000' ? 'selected="selected"' : ''); ?>>3 Second</option>
                    </select>
                    <label for="wpbot_preloading_time"><?php echo esc_html__('Bot Response Delay', 'wpbot'); ?> </label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <h4 class="qc-opt-title">
                    <?php esc_html_e('Override WPBot Icon\'s Position', 'wpbot'); ?>
                  </h4>
                  <div class="cxsc-settings-blocks">
                    <?php
                                            $qcld_wb_chatbot_position_x = get_option('wp_chatbot_position_x');
                                            if ((!isset($qcld_wb_chatbot_position_x)) || ($qcld_wb_chatbot_position_x == "")) {
                                                $qcld_wb_chatbot_position_x = __("120", "wp_chatbot");
                                            }
                                            $qcld_wb_chatbot_position_y = get_option('wp_chatbot_position_y');
                                            if ((!isset($qcld_wb_chatbot_position_y)) || ($qcld_wb_chatbot_position_y == "")) {
                                                $qcld_wb_chatbot_position_y = __("120", "wp_chatbot");
                                            } ?>
                    <input type="number" class="qc-opt-dcs-font"
                                                   name="wp_chatbot_position_x"
                                                   id=""
                                                   value="<?php echo($qcld_wb_chatbot_position_x); ?>"
                                                   placeholder="<?php esc_html_e('From Right In px', 'wpbot'); ?>">
                    <span class="qc-opt-dcs-font">
                    <?php esc_html_e('From Right In px', 'wpbot'); ?>
                    </span>
                    <input type="number" class="qc-opt-dcs-font"
                                                   name="wp_chatbot_position_y"
                                                   id=""
                                                   value="<?php echo($qcld_wb_chatbot_position_y); ?>"
                                                   placeholder="<?php esc_html_e('From Bottom In Px', 'wpbot'); ?>">
                    <span class="qc-opt-dcs-font">
                    <?php esc_html_e('From Bottom In px', 'wpbot'); ?>
                    </span> </div>
                </div>
                <!--.col-sm-12--> 
              </div>
              <!--                                row-->
              
              <div class="row">
                <div class="col-xs-12">
                  <h4 class="qc-opt-title"><strong>
                    <?php esc_html_e('WPBot', 'wpbot'); ?>
                    </strong>
                    <?php esc_html_e('Loading Control Options', 'wpbot'); ?>
                  </h4>
                  <div class="cxsc-settings-blocks">
                    <div class="row">
                      <div class="col-sm-4 text-right"> <span class="qc-opt-title-font">
                        <?php esc_html_e('Show on Home Page', 'wpbot'); ?>
                        </span> </div>
                      <div class="col-sm-8">
                        <label class="radio-inline">
                          <input id="wp-chatbot-show-home-page" type="radio"
                                                               name="wp_chatbot_show_home_page"
                                                               value="on" <?php echo(get_option('wp_chatbot_show_home_page') == 'on' ? 'checked' : ''); ?>>
                          <?php esc_html_e('YES', 'wpbot'); ?>
                        </label>
                        <label class="radio-inline">
                          <input id="wp-chatbot-show-home-page" type="radio"
                                                               name="wp_chatbot_show_home_page"
                                                               value="off" <?php echo(get_option('wp_chatbot_show_home_page') == 'off' ? 'checked' : ''); ?>>
                          <?php esc_html_e('NO', 'wpbot'); ?>
                        </label>
                      </div>
                    </div>
                    <!--  row-->
                    <div class="row">
                      <div class="col-sm-4 text-right"> <span class="qc-opt-title-font">
                        <?php esc_html_e('Show on blog posts', 'wpbot'); ?>
                        </span> </div>
                      <div class="col-sm-8">
                        <label class="radio-inline">
                          <input class="wp-chatbot-show-posts" type="radio"
                                                               name="wp_chatbot_show_posts"
                                                               value="on" <?php echo(get_option('wp_chatbot_show_posts') == 'on' ? 'checked' : ''); ?>>
                          <?php esc_html_e('YES', 'wpbot'); ?>
                        </label>
                        <label class="radio-inline">
                          <input class="wp-chatbot-show-posts" type="radio"
                                                               name="wp_chatbot_show_posts"
                                                               value="off" <?php echo(get_option('wp_chatbot_show_posts') == 'off' ? 'checked' : ''); ?>>
                          <?php esc_html_e('NO', 'wpbot'); ?>
                        </label>
                      </div>
                    </div>
                    <!-- row-->
                    <div class="row">
                      <div class="col-md-4 text-right"> <span class="qc-opt-title-font">
                        <?php esc_html_e('Show on  pages', 'wpbot'); ?>
                        </span> </div>
                      <div class="col-md-8">
                        <label class="radio-inline">
                          <input class="wp-chatbot-show-pages" type="radio"
                                                               name="wp_chatbot_show_pages"
                                                               value="on" <?php echo(get_option('wp_chatbot_show_pages') == 'on' ? 'checked' : ''); ?>>
                          <?php esc_html_e('All Pages', 'wpbot'); ?>
                        </label>
                        <label class="radio-inline">
                          <input class="wp-chatbot-show-pages" type="radio"
                                                               name="wp_chatbot_show_pages"
                                                               value="off" <?php echo(get_option('wp_chatbot_show_pages') == 'off' ? 'checked' : ''); ?>>
                          <?php esc_html_e('Selected Pages Only ', 'wpbot'); ?>
                        </label>
                        <div id="wp-chatbot-show-pages-list">
                          <ul class="checkbox-list">
                            <?php
                                                            $wp_chatbot_pages = get_pages();
                                                            $wp_chatbot_select_pages = unserialize(get_option('wp_chatbot_show_pages_list'));
                                                            foreach ($wp_chatbot_pages as $wp_chatbot_page) {
                                                                ?>
                            <li>
                              <input
                                                                            id="wp_chatbot_show_page_<?php echo $wp_chatbot_page->ID; ?>"
                                                                            type="checkbox"
                                                                            name="wp_chatbot_show_pages_list[]"
                                                                            value="<?php echo $wp_chatbot_page->ID; ?>" <?php if (!empty($wp_chatbot_select_pages) && in_array($wp_chatbot_page->ID, $wp_chatbot_select_pages) == true) {
                                                                        echo 'checked';
                                                                    } ?> >
                              <label
                                                                            for="wp_chatbot_show_page_<?php echo $wp_chatbot_page->ID; ?>"> <?php echo $wp_chatbot_page->post_title; ?></label>
                            </li>
                            <?php } ?>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!--row-->
                    <div class="row">
                      <div class="col-sm-4 text-right"> <span class="qc-opt-title-font">
                        <?php _e('Exclude from Custom Post', 'wpbot'); ?>
                        </span></div>
                      <div class="col-sm-8">
                        <div id="wp-chatbot-exclude-post-list">
                          <ul class="checkbox-list">
                            <?php
                              $get_cpt_args = array(
                                  'public'   => true,
                                  '_builtin' => false
                              );
                              
                              $post_types = get_post_types( $get_cpt_args, 'object' );
                              $wp_chatbot_exclude_post_list = maybe_unserialize(get_option('wp_chatbot_exclude_post_list'));
                             
                              foreach ($post_types as $post_type) {
                                  ?>
                            <li>
                              <input
                                      id="wp_chatbot_exclude_post_<?php echo $post_type->name; ?>"
                                      type="checkbox"
                                      name="wp_chatbot_exclude_post_list[]"
                                      value="<?php echo $post_type->name; ?>" <?php if (!empty($wp_chatbot_exclude_post_list) && in_array($post_type->name, $wp_chatbot_exclude_post_list) == true) {
                                  echo 'checked';
                              } ?> >
                            <label
                              for="wp_chatbot_exclude_post_<?php echo $post_type->name; ?>"> <?php echo $post_type->name; ?></label>
                            </li>
                            <?php } ?>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- cxsc-settings-blocks--> 
                </div>
                <!-- col-xs-12--> 
              </div>
              <!--  row--> 
              
            </div>
            <!-- top-section--> 
          </section>
          <section id="section-flip-3">
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#wp-chatbot-icon-theme-settings"><?php echo esc_html__('Icons & Themes', 'wpbot'); ?></a></li>
              <li><a data-toggle="tab" href="#wp-chatbot-custom-color-options"><?php echo esc_html__('Custom Style Options', 'wpbot'); ?></a></li>
            </ul>
            <div class="tab-content">
              <div id="wp-chatbot-icon-theme-settings" class="tab-pane fade in active">
                <div class="top-section">
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="row">
                        <div class="col-xs-12">
                          <p class="wpqcld_chk_seft"> <a target="_blank" href="https://www.quantumcloud.com/products/themes/chatbot-theme/"><img src="<?php echo QCLD_wpCHATBOT_IMG_URL ?>/chatbot-theme.jpg" alt="" /></a> </p>
                        </div>
                      </div>
                      <h4 class="qc-opt-title">
                        <?php esc_html_e('WPBot Icon', 'wpbot'); ?>
                      </h4>
                      <div class="cxsc-settings-blocks">
                        <ul class="radio-list">
                          <!--<li><label for="wp_chatbot_icon_0" class="qc-opt-dcs-font"><img src="<?php echo QCLD_wpCHATBOT_IMG_URL; ?>/icon-0.png"
                                                                alt=""> <input id="wp_chatbot_icon_0" type="radio"
                                                                                name="wp_chatbot_icon" <?php echo(get_option('wp_chatbot_icon') == 'icon-0.png' ? 'checked' : ''); ?>
                                                                                value="icon-0.png">
                                                            <?php esc_html_e('Icon - 0', 'wpbot'); ?></label>
                                                        </li>
                                                        <li><label for="wp_chatbot_icon_1" class="qc-opt-dcs-font"><img src="<?php echo QCLD_wpCHATBOT_IMG_URL; ?>/icon-1.png"
                                                                alt=""> <input id="wp_chatbot_icon_1" type="radio"
                                                                                name="wp_chatbot_icon" <?php echo(get_option('wp_chatbot_icon') == 'icon-1.png' ? 'checked' : ''); ?>
                                                                                value="icon-1.png">
                                                            <?php esc_html_e('Icon - 1', 'wpbot'); ?></label>
                                                        </li>-->
                          <li>
                            <label for="wp_chatbot_icon_2" class="qc-opt-dcs-font"><img src="<?php echo QCLD_wpCHATBOT_IMG_URL; ?>/icon-2.png"
                                                                alt="">
                              <input id="wp_chatbot_icon_2" type="radio"
                                                                                name="wp_chatbot_icon" <?php echo(get_option('wp_chatbot_icon') == 'icon-2.png' ? 'checked' : ''); ?>
                                                                                value="icon-2.png">
                              <?php esc_html_e('Icon - 2', 'wpbot'); ?>
                            </label>
                          </li>
                          <li>
                            <label for="wp_chatbot_icon_3" class="qc-opt-dcs-font"><img src="<?php echo QCLD_wpCHATBOT_IMG_URL; ?>/icon-3.png"
                                                                alt="">
                              <input id="wp_chatbot_icon_3" type="radio"
                                                                                name="wp_chatbot_icon" <?php echo(get_option('wp_chatbot_icon') == 'icon-3.png' ? 'checked' : ''); ?>
                                                                                value="icon-3.png">
                              <?php esc_html_e('Icon - 3', 'wpbot'); ?>
                            </label>
                          </li>
                          <li>
                            <label for="wp_chatbot_icon_4" class="qc-opt-dcs-font"><img src="<?php echo QCLD_wpCHATBOT_IMG_URL; ?>/icon-4.png"
                                                                alt="">
                              <input id="wp_chatbot_icon_4" type="radio"
                                                                                name="wp_chatbot_icon" <?php echo(get_option('wp_chatbot_icon') == 'icon-4.png' ? 'checked' : ''); ?>
                                                                                value="icon-4.png">
                              <?php esc_html_e('Icon - 4', 'wpbot'); ?>
                            </label>
                          </li>
                          <li>
                            <label for="wp_chatbot_icon_5" class="qc-opt-dcs-font"><img src="<?php echo QCLD_wpCHATBOT_IMG_URL; ?>/icon-5.png"
                                                                alt="">
                              <input id="wp_chatbot_icon_5" type="radio"
                                                                                name="wp_chatbot_icon" <?php echo(get_option('wp_chatbot_icon') == 'icon-5.png' ? 'checked' : ''); ?>
                                                                                value="icon-5.png">
                              <?php esc_html_e('Icon - 5', 'wpbot'); ?>
                            </label>
                          </li>
                          <li>
                            <label for="wp_chatbot_icon_6" class="qc-opt-dcs-font"><img src="<?php echo QCLD_wpCHATBOT_IMG_URL; ?>/icon-6.png"
                                                                alt="">
                              <input id="wp_chatbot_icon_6" type="radio"
                                                                                name="wp_chatbot_icon" <?php echo(get_option('wp_chatbot_icon') == 'icon-6.png' ? 'checked' : ''); ?>
                                                                                value="icon-6.png">
                              <?php esc_html_e('Icon - 6', 'wpbot'); ?>
                            </label>
                          </li>
                          <li>
                            <label for="wp_chatbot_icon_7" class="qc-opt-dcs-font"><img src="<?php echo QCLD_wpCHATBOT_IMG_URL; ?>/icon-7.png"
                                                                alt="">
                              <input id="wp_chatbot_icon_7" type="radio"
                                                                                name="wp_chatbot_icon" <?php echo(get_option('wp_chatbot_icon') == 'icon-7.png' ? 'checked' : ''); ?>
                                                                                value="icon-7.png">
                              <?php esc_html_e('Icon - 7', 'wpbot'); ?>
                            </label>
                          </li>
                          <li>
                            <label for="wp_chatbot_icon_8" class="qc-opt-dcs-font"><img src="<?php echo QCLD_wpCHATBOT_IMG_URL; ?>/icon-8.png"
                                                                alt="">
                              <input id="wp_chatbot_icon_8" type="radio"
                                                                                name="wp_chatbot_icon" <?php echo(get_option('wp_chatbot_icon') == 'icon-8.png' ? 'checked' : ''); ?>
                                                                                value="icon-8.png">
                              <?php esc_html_e('Icon - 8', 'wpbot'); ?>
                            </label>
                          </li>
                          <li>
                            <label for="wp_chatbot_icon_9" class="qc-opt-dcs-font"><img src="<?php echo QCLD_wpCHATBOT_IMG_URL; ?>/icon-9.png"
                                                                alt="">
                              <input id="wp_chatbot_icon_9" type="radio"
                                                                                name="wp_chatbot_icon" <?php echo(get_option('wp_chatbot_icon') == 'icon-9.png' ? 'checked' : ''); ?>
                                                                                value="icon-9.png">
                              <?php esc_html_e('Icon - 9', 'wpbot'); ?>
                            </label>
                          </li>
                          <li>
                            <label for="wp_chatbot_icon_10" class="qc-opt-dcs-font"><img src="<?php echo QCLD_wpCHATBOT_IMG_URL; ?>/icon-10.png"
                                                                alt="">
                              <input id="wp_chatbot_icon_10" type="radio"
                                                                                name="wp_chatbot_icon" <?php echo(get_option('wp_chatbot_icon') == 'icon-10.png' ? 'checked' : ''); ?>
                                                                                value="icon-10.png">
                              <?php esc_html_e('Icon - 10', 'wpbot'); ?>
                            </label>
                          </li>
                          <li>
                            <label for="wp_chatbot_icon_11" class="qc-opt-dcs-font"><img src="<?php echo QCLD_wpCHATBOT_IMG_URL; ?>/icon-11.png"
                                                                alt="">
                              <input id="wp_chatbot_icon_11" type="radio"
                                                                                name="wp_chatbot_icon" <?php echo(get_option('wp_chatbot_icon') == 'icon-11.png' ? 'checked' : ''); ?>
                                                                                value="icon-11.png">
                              <?php esc_html_e('Icon - 11', 'wpbot'); ?>
                            </label>
                          </li>
                          <li>
                            <label for="wp_chatbot_icon_12" class="qc-opt-dcs-font"><img src="<?php echo QCLD_wpCHATBOT_IMG_URL; ?>/icon-12.png"
                                                                alt="">
                              <input id="wp_chatbot_icon_12" type="radio"
                                                                                name="wp_chatbot_icon" <?php echo(get_option('wp_chatbot_icon') == 'icon-12.png' ? 'checked' : ''); ?>
                                                                                value="icon-12.png">
                              <?php esc_html_e('Icon - 12', 'wpbot'); ?>
                            </label>
                          </li>
                          <li>
                            <label for="wp_chatbot_icon_13" class="qc-opt-dcs-font"><img src="<?php echo QCLD_wpCHATBOT_IMG_URL; ?>/icon-13.png"
                                                                alt="">
                              <input id="wp_chatbot_icon_13" type="radio"
                                                                                name="wp_chatbot_icon" <?php echo(get_option('wp_chatbot_icon') == 'icon-13.png' ? 'checked' : ''); ?>
                                                                                value="icon-13.png">
                              <?php esc_html_e('Icon - 13', 'wpbot'); ?>
                            </label>
                          </li>
                          <li>
                            <?php
                                                            if (get_option('wp_chatbot_custom_icon_path') != "") {
                                                                $wp_chatbot_custom_icon_path = get_option('wp_chatbot_custom_icon_path');
                                                            } else {
                                                                $wp_chatbot_custom_icon_path = QCLD_wpCHATBOT_IMG_URL . 'custom.png';
                                                            }
                                                            ?>
                            <label for="wp_chatbot_custom_icon_input" class="qc-opt-dcs-font"> <img id="wp_chatbot_custom_icon_src"
                                                                src="<?php echo $wp_chatbot_custom_icon_path; ?>" alt="">
                              <input id="wp_chatbot_custom_icon_input" type="radio"
                                                                name="wp_chatbot_icon"
                                                                value="custom.png" <?php echo(get_option('wp_chatbot_icon') == 'custom.png' ? 'checked' : ''); ?>>
                              <?php esc_html_e('Custom Icon', 'wpbot'); ?>
                            </label>
                          </li>
                        </ul>
                      </div>
                      <!--  cxsc-settings-blocks--> 
                      <br>
                      <div class="cxsc-settings-blocks">
                        <div class="form-group">
                          <h4 class="qc-opt-title">
                            <?php _e('WPBot Icon Background Color.', 'woochatbot'); ?>
                          </h4>
                          <input id="wp_chatbot_floatingiconbg_color" type="text"
                                                                                    name="wp_chatbot_floatingiconbg_color"
                                                                                    value="<?php echo(get_option('wp_chatbot_floatingiconbg_color') != '' ? get_option('wp_chatbot_floatingiconbg_color') : '#fff'); ?>"/>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      <h4 class="qc-opt-title">
                        <?php esc_html_e(' Upload custom Icon ', 'wpbot'); ?>
                      </h4>
                      <div class="cxsc-settings-blocks">
                        <input type="hidden" name="wp_chatbot_custom_icon_path"
                                                        id="wp_chatbot_custom_icon_path"
                                                        value="<?php echo $wp_chatbot_custom_icon_path; ?>"/>
                        <button type="button" class="wp_chatbot_custom_icon_button button">
                        <?php esc_html_e('Upload Icon', 'wpbot'); ?>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="top-section">
                  <div class="row">
                    <div class="col-xs-12">
                      <h4 class="qc-opt-title">
                        <?php esc_html_e(' WPBot Agent Image', 'wpbot'); ?>
                      </h4>
                      <div class="cxsc-settings-blocks">
                        <ul class="radio-list">
                          <li>
                            <label for="wp_chatbot_agent_image_def" class="qc-opt-dcs-font"> <img src="<?php echo QCLD_wpCHATBOT_IMG_URL; ?>icon-0.png"
                                                                alt="">
                              <input id="wp_chatbot_agent_image_def" type="radio"
                                                                                name="wp_chatbot_agent_image" <?php echo(get_option('wp_chatbot_agent_image') == 'agent-0.png' ? 'checked' : ''); ?>
                                                                                value="agent-0.png">
                              <?php esc_html_e('Default Agent', 'wpbot'); ?>
                            </label>
                          </li>
                          <li>
                            <?php
                                                            if (get_option('wp_chatbot_custom_agent_path') != "") {
                                                                $wp_chatbot_custom_agent_path = get_option('wp_chatbot_custom_agent_path');
                                                            } else {
                                                                $wp_chatbot_custom_agent_path = QCLD_wpCHATBOT_IMG_URL . 'custom-agent.png';
                                                            }
                                                            ?>
                            <label for="wp_chatbot_agent_image_custom" class="qc-opt-dcs-font"> <img id="wp_chatbot_custom_agent_src"
                                                                src="<?php echo esc_url($wp_chatbot_custom_agent_path); ?>"
                                                                alt="Agent">
                              <input type="radio" name="wp_chatbot_agent_image"
                                                                id="wp_chatbot_agent_image_custom"
                                                                value="custom-agent.png" <?php echo(get_option('wp_chatbot_agent_image') == 'custom-agent.png' ? 'checked' : ''); ?>>
                              <?php echo esc_html__('Custom Agent', 'wpbot'); ?></label>
                          </li>
                        </ul>
                      </div>
                      <!--                                        cxsc-settings-blocks--> 
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      <h4 class="qc-opt-title">
                        <?php esc_html_e('Custom Agent Icon', 'wpbot'); ?>
                      </h4>
                      <div class="cxsc-settings-blocks">
                        <input type="hidden" name="wp_chatbot_custom_agent_path"
                                                        id="wp_chatbot_custom_agent_path"
                                                        value="<?php echo $wp_chatbot_custom_agent_path; ?>"/>
                        <button type="button" class="wp_chatbot_custom_agent_button button">
                        <?php esc_html_e('Upload Agent Icon', 'wpbot'); ?>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="top-section">
                  <div class="row">
                    <div class="col-sm-12">
                      <h4 class="qc-opt-title">
                        <?php esc_html_e('WPBot Themes', 'wpbot'); ?>
                      </h4>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-3">
                      <label for="qcld_wb_chatbot_theme_0"> <img class="thumbnail theme_prev"
                                                    src="<?php echo QCLD_wpCHATBOT_IMG_URL; ?>templates/template-00.JPG"
                                                    alt="Theme Basic">
                        <input id="qcld_wb_chatbot_theme_0" type="radio"
                                                    name="qcld_wb_chatbot_theme" <?php echo(get_option('qcld_wb_chatbot_theme') == 'template-00' ? 'checked' : ''); ?>
                                                    value="template-00">
                        <?php esc_html_e('Theme Basic', 'wpbot'); ?>
                      </label>
                    </div>
                    <div class="col-sm-3">
                      <label for="qcld_wb_chatbot_theme_1"> <img class="thumbnail theme_prev"
                                                    src="<?php echo QCLD_wpCHATBOT_IMG_URL; ?>templates/template-01.JPG"
                                                    alt="Theme Basic">
                        <input id="qcld_wb_chatbot_theme_1" type="radio"
                                                    name="qcld_wb_chatbot_theme" <?php echo(get_option('qcld_wb_chatbot_theme') == 'template-01' ? 'checked' : ''); ?>
                                                    value="template-01">
                        <?php esc_html_e('Theme One', 'wpbot'); ?>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <!--<hr>
                                    <div id="top-section">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4 class="qc-opt-title"> <?php esc_html_e('Custom Backgroud', 'wpbot'); ?></h4>
                                                <div class="cxsc-settings-blocks">
                                                    <input value="1" id="qcld_wb_chatbot_change_bg" type="checkbox"
                                                        name="qcld_wb_chatbot_change_bg" <?php echo(get_option('qcld_wb_chatbot_change_bg') == 1 ? 'checked' : ''); ?>>
                                                    <label for="qcld_wb_chatbot_change_bg"><?php esc_html_e('Change the wpwBot message board background for Theme 2 and Theme 3.', 'wpbot'); ?> </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row qcld-wp-chatbot-board-bg-container" <?php if (get_option('qcld_wb_chatbot_change_bg') != 1) {
                                            echo 'style="display:none"';
                                        } ?>>
                                            <div class="col-xs-6">
                                                <p class="wp-chatbot-settings-instruction"> <?php esc_html_e('Upload wpwBot message board background (Ideal image size 376px X 688px).', 'wpbot'); ?> </p>
                                                <div class="cxsc-settings-blocks">
                                                    <?php
                                                    if (get_option('qcld_wb_chatbot_board_bg_path') != "") {
                                                        $qcld_wb_chatbot_board_bg_path = get_option('qcld_wb_chatbot_board_bg_path');
                                                    } else {
                                                        $qcld_wb_chatbot_board_bg_path = QCLD_wpCHATBOT_IMG_URL . 'background/background.png';
                                                    }
                                                    ?>
                                                    <input type="hidden" name="qcld_wb_chatbot_board_bg_path"
                                                        id="qcld_wb_chatbot_board_bg_path"
                                                        value="<?php echo $qcld_wb_chatbot_board_bg_path; ?>"/>
                                                    <button type="button" class="qcld_wb_chatbot_board_bg_button button"><?php esc_html_e('Upload  WpBot background.', 'wpbot'); ?></button>
                                                </div>
                                            </div>
                                            
                                            <div class="col-xs-6">
                                                <p class="wp-chatbot-settings-instruction"> <?php esc_html_e('Custom message board background', 'wpbot'); ?> </p>
                                                <img id="qcld_wb_chatbot_board_bg_image" style="height:100%;width:100%"
                                                    src="<?php echo $qcld_wb_chatbot_board_bg_path; ?>"
                                                    alt="Custom Background">
                                            </div>
                                        </div>
                                    </div>-->
              
              <div id="wp-chatbot-custom-color-options" class="tab-pane fade">
                <div class="top-section">
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="cxsc-settings-blocks">
                        <div class="form-group">
                          <h4 class="qc-opt-title">
                            <?php _e('Bot Floating Icon Background Color.', 'woochatbot'); ?>
                          </h4>
                          <input id="wp_chatbot_floatingiconbg_color" type="text"
                                                                                    name="wp_chatbot_floatingiconbg_color"
                                                                                    value="<?php echo(get_option('wp_chatbot_floatingiconbg_color') != '' ? get_option('wp_chatbot_floatingiconbg_color') : '#fff'); ?>"/>
                        </div>
                      </div>
                      <h3 class="qc-opt-title">
                        <?php _e('Custom Style Options', 'woochatbot'); ?>
                      </h3>
                      <div class="cxsc-settings-blocks">
                        <input value="1" id="enable_wp_chatbot_custom_color" type="checkbox"
                                                                                name="enable_wp_chatbot_custom_color" <?php echo(get_option('enable_wp_chatbot_custom_color') == 1 ? 'checked' : ''); ?>>
                        <label for="enable_wp_chatbot_custom_color">
                          <?php _e('Enable Style Colors ', 'woochatbot'); ?>
                        </label>
                      </div>
                      <br>
                      <div class="cxsc-settings-blocks">
                        <div class="form-group">
                          <h4 class="qc-opt-title">
                            <?php _e('Text Color.', 'woochatbot'); ?>
                          </h4>
                          <input id="wp_chatbot_text_color" type="text"
                                                                                    name="wp_chatbot_text_color"
                                                                                    value="<?php echo(get_option('wp_chatbot_text_color') != '' ? get_option('wp_chatbot_text_color') : '#37424c'); ?>"/>
                        </div>
                      </div>
                      <div class="cxsc-settings-blocks">
                        <div class="form-group">
                          <h4 class="qc-opt-title">
                            <?php _e('Link Color.', 'woochatbot'); ?>
                          </h4>
                          <input id="wp_chatbot_link_color" type="text"
                                                                                    name="wp_chatbot_link_color"
                                                                                    value="<?php echo(get_option('wp_chatbot_link_color') != '' ? get_option('wp_chatbot_link_color') : '#e2cc1f'); ?>"/>
                        </div>
                      </div>
                      <div class="cxsc-settings-blocks">
                        <div class="form-group">
                          <h4 class="qc-opt-title">
                            <?php _e('Link Hover Color.', 'woochatbot'); ?>
                          </h4>
                          <input id="wp_chatbot_link_hover_color" type="text"
                                                                                    name="wp_chatbot_link_hover_color"
                                                                                    value="<?php echo(get_option('wp_chatbot_link_hover_color') != '' ? get_option('wp_chatbot_link_hover_color') : '#734006'); ?>"/>
                        </div>
                      </div>
                      <div class="cxsc-settings-blocks">
                        <div class="form-group">
                          <h4 class="qc-opt-title">
                            <?php _e('Bot Message  Background Color.', 'woochatbot'); ?>
                          </h4>
                          <input id="wp_chatbot_bot_msg_bg_color" type="text"
                                                                                    name="wp_chatbot_bot_msg_bg_color"
                                                                                    value="<?php echo(get_option('wp_chatbot_bot_msg_bg_color') != '' ? get_option('wp_chatbot_bot_msg_bg_color') : '#1f8ceb'); ?>"/>
                        </div>
                      </div>
                      <div class="cxsc-settings-blocks">
                        <div class="form-group">
                          <h4 class="qc-opt-title">
                            <?php _e('Bot Message Text Color.', 'woochatbot'); ?>
                          </h4>
                          <input id="wp_chatbot_bot_msg_text_color" type="text"
                                                                                    name="wp_chatbot_bot_msg_text_color"
                                                                                    value="<?php echo(get_option('wp_chatbot_bot_msg_text_color') != '' ? get_option('wp_chatbot_bot_msg_text_color') : '#ffffff'); ?>"/>
                        </div>
                      </div>
                      <div class="cxsc-settings-blocks">
                        <div class="form-group">
                          <h4 class="qc-opt-title">
                            <?php _e('User Message  Background Color.', 'woochatbot'); ?>
                          </h4>
                          <input id="wp_chatbot_user_msg_bg_color" type="text"
                                                                                    name="wp_chatbot_user_msg_bg_color"
                                                                                    value="<?php echo(get_option('wp_chatbot_user_msg_bg_color') != '' ? get_option('wp_chatbot_user_msg_bg_color') : '#ffffff'); ?>"/>
                        </div>
                      </div>
                      <div class="cxsc-settings-blocks">
                        <div class="form-group">
                          <h4 class="qc-opt-title">
                            <?php _e('User Message Text Color.', 'woochatbot'); ?>
                          </h4>
                          <input id="wp_chatbot_user_msg_text_color" type="text"
                                                                                    name="wp_chatbot_user_msg_text_color"
                                                                                    value="<?php echo(get_option('wp_chatbot_user_msg_text_color') != '' ? get_option('wp_chatbot_user_msg_text_color') : '#000000'); ?>"/>
                        </div>
                      </div>
                      <div class="cxsc-settings-blocks">
                        <div class="form-group">
                          <h4 class="qc-opt-title">
                            <?php _e('Buttons Background Color.', 'woochatbot'); ?>
                          </h4>
                          <input id="wp_chatbot_buttons_bg_color" type="text"
                                                                                    name="wp_chatbot_buttons_bg_color"
                                                                                    value="<?php echo(get_option('wp_chatbot_buttons_bg_color') != '' ? get_option('wp_chatbot_buttons_bg_color') : '#1f8ceb'); ?>"/>
                        </div>
                      </div>
                      <div class="cxsc-settings-blocks">
                        <div class="form-group">
                          <h4 class="qc-opt-title">
                            <?php _e('Buttons Hover Background Color.', 'woochatbot'); ?>
                          </h4>
                          <input id="wp_chatbot_buttons_bg_color" type="text"
                                                                                    name="wp_chatbot_buttons_bg_color_hover"
                                                                                    value="<?php echo(get_option('wp_chatbot_buttons_bg_color_hover') != '' ? get_option('wp_chatbot_buttons_bg_color_hover') : '#1f8ceb'); ?>"/>
                        </div>
                      </div>
                      <div class="cxsc-settings-blocks">
                        <div class="form-group">
                          <h4 class="qc-opt-title">
                            <?php _e('Buttons Text Color.', 'woochatbot'); ?>
                          </h4>
                          <input id="wp_chatbot_buttons_text_color" type="text"
                                                                                    name="wp_chatbot_buttons_text_color"
                                                                                    value="<?php echo(get_option('wp_chatbot_buttons_text_color') != '' ? get_option('wp_chatbot_buttons_text_color') : '#ffffff'); ?>"/>
                        </div>
                      </div>
                      <div class="cxsc-settings-blocks">
                        <div class="form-group">
                          <h4 class="qc-opt-title">
                            <?php _e('Buttons Text Color Hover.', 'woochatbot'); ?>
                          </h4>
                          <input id="wp_chatbot_buttons_text_color" type="text"
                                                                                        name="wp_chatbot_buttons_text_color_hover"
                                                                                        value="<?php echo(get_option('wp_chatbot_buttons_text_color_hover') != '' ? get_option('wp_chatbot_buttons_text_color_hover') : '#ffffff'); ?>"/>
                        </div>
                      </div>
                      <div class="cxsc-settings-blocks">
                        <div class="form-group">
                          <h4 class="qc-opt-title">
                            <?php _e('Header background Color', 'woochatbot'); ?>
                          </h4>
                          <input id="wp_chatbot_header_background_color" type="text"
                            name="wp_chatbot_header_background_color"
                            value="<?php echo(get_option('wp_chatbot_header_background_color') != '' ? get_option('wp_chatbot_header_background_color') : '#ffffff'); ?>"/>
                        </div>
                      </div>
                      <div class="cxsc-settings-blocks">
                        <div class="form-group">
                          <h4 class="qc-opt-title">
                            <?php _e('Theme Primary Color', 'woochatbot'); ?>
                          </h4>
                          <input id="wp_chatbot_theme_primary_color" type="text"
                                                                                        name="wp_chatbot_theme_primary_color"
                                                                                        value="<?php echo(get_option('wp_chatbot_theme_primary_color') != '' ? get_option('wp_chatbot_theme_primary_color') : '#ffffff'); ?>"/>
                        </div>
                      </div>
                      <div class="cxsc-settings-blocks">
                        <div class="form-group">
                          <h4 class="qc-opt-title">
                            <?php _e('Theme Secondary Color', 'woochatbot'); ?>
                          </h4>
                          <input id="wp_chatbot_theme_secondary_color" type="text"
                                                            name="wp_chatbot_theme_secondary_color"
                                                            value="<?php echo(get_option('wp_chatbot_theme_secondary_color') != '' ? get_option('wp_chatbot_theme_secondary_color') : '#ffffff'); ?>"/>
                        </div>
                      </div>
                      <div class="cxsc-settings-blocks">
                        <div class="form-group">
                          <h4 class="qc-opt-title">
                            <?php _e('Font size', 'woochatbot'); ?>
                          </h4>
                          <input id="wp_chatbot_font_size" type="number"
                                                               name="wp_chatbot_font_size"
                                                               value="<?php echo(get_option('wp_chatbot_font_size') != '' ? get_option('wp_chatbot_font_size') : '16'); ?>"/>
                        </div>
                      </div>
                      <div class="cxsc-settings-blocks">
                        <div class="form-group">
                          <h4 class="qc-opt-title">
                            <?php 
                                                        _e('User message Font family ', 'woochatbot'); 
                                                        $user_font = get_option('wp_chat_user_font_family') != '' ? get_option('wp_chat_user_font_family') : '';
                                                        $user_font_family = str_replace("\\", "",$user_font);
                                                        ?>
                          </h4>
                          <input id="wp_chatbot_user_font" type="text" name="wp_chatbot_user_font"
                                                        value="<?php echo(get_option('wp_chatbot_user_font') != '' ? get_option('wp_chatbot_user_font') : '');?>">
                          <input id="wp_chat_user_font_family" type="hidden"
                                                               name="wp_chat_user_font_family"
                                                               />
                        </div>
                      </div>
                      <div class="cxsc-settings-blocks">
                        <div class="form-group">
                          <h4 class="qc-opt-title">
                            <?php 
                                                        _e('Bot message Font family ', 'woochatbot');
                                                        $bot_font = get_option('wp_chat_bot_font_family') != '' ? get_option('wp_chat_bot_font_family') : '';
                                                        $bot_font_family = str_replace("\\", "",$bot_font); 
                                                        ?>
                          </h4>
                          <input id="wp_chatbot_bot_font" type="text" name="wp_chatbot_bot_font"
                                                        value="<?php echo(get_option('wp_chatbot_bot_font') != '' ? get_option('wp_chatbot_bot_font') : '');?>">
                          <input id="wp_chat_bot_font_family" type="hidden"
                                                               name="wp_chat_bot_font_family"
                                                               />
                        </div>
                      </div>
                      <script>
                                                    jQuery(function ($) {
                                                        $('#wp_chat_user_font_family').val(JSON.stringify(<?php echo $user_font_family; ?>));
                                                        $('#wp_chat_bot_font_family').val(JSON.stringify(<?php echo $bot_font_family; ?>));
                                                        $('#wp_chatbot_user_font')
                                                        .fontpicker()
                                                        .on('change', function() {
                                                            var tmp = this.value.split(':'),
                                                                family = tmp[0],
                                                                variant = tmp[1] || '400',
                                                                weight = parseInt(variant,10),
                                                                italic = /i$/.test(variant);
                                                            var css = {
                                                                fontFamily: "'" + family + "'",
                                                                fontWeight: weight,
                                                                fontStyle: italic ? 'italic' : 'normal'
                                                            };

                                                            $('#wp_chat_user_font_family').val(JSON.stringify(css));
                                                        });
                                                        $('#wp_chatbot_bot_font')
                                                        .fontpicker()
                                                        .on('change', function() {
                                                            var tmp = this.value.split(':'),
                                                                    family = tmp[0],
                                                                    variant = tmp[1] || '400',
                                                                    weight = parseInt(variant,10),
                                                                    italic = /i$/.test(variant);

                                                                    // Set selected font on body
                                                            var css = {
                                                                fontFamily: "'" + family + "'",
                                                                fontWeight: weight,
                                                                fontStyle: italic ? 'italic' : 'normal'
                                                            };
                                                            $('#wp_chat_bot_font_family').val(JSON.stringify(css));
                                                        });
                                                    });
                                                </script> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section id="section-flip-4">
            <div class="row">
              <div class="col-xs-12"> </div>
            </div>
            <div class="top-section">
              <h4 class="qc-opt-title">
                <?php esc_html_e('Build FAQ Query and Answers', 'wpbot'); ?>
              </h4>
              <div class="block-inner ui-sortable" id="wp-chatbot-support-builder">
                <?php
                                    $support_quereis=$this->qcld_wb_chatbot_str_replace(unserialize( get_option('support_query')));
                                    $support_ans=$this->qcld_wb_chatbot_str_replace(unserialize( get_option('support_ans')));
                                    if (count($support_ans) >= 1) {
                                        //foreach (get_option('support_ans') as $support_ans){
                                        $query_ans_counter=0;
                                        foreach (array_combine($support_quereis, $support_ans) as $query => $ans) {
                                            ?>
                <div class="row"> <span class="pull-right"> </span>
                  <div class="col-xs-12">
                    <button type="button"
                                                            class="btn btn-danger btn-sm wp-chatbot-remove-support pull-right"> <i class="fa fa-times" aria-hidden="true"></i> </button>
                    <span  class="wp-chatbot-support-cross pull-right" > <i  class="fa fa-crosshairs" aria-hidden="true"></i> </span>
                    <div class="cxsc-settings-blocks">
                      <p class="qc-opt-dcs-font">
                        <?php esc_html_e('FAQ query ', 'wpbot'); ?>
                      </p>
                      <input type="text" class="form-control" name="support_query[]"
                                                               placeholder="<?php esc_html_e('FAQ query ', 'wpbot'); ?>" value="<?php echo $query ?>">
                      <br>
                      <p class="qc-opt-dcs-font">
                        <?php esc_html_e('FAQ answer', 'wpbot'); ?>
                      </p>
                      <?php wp_editor(html_entity_decode(stripcslashes($ans)), 'support_ans'.'_'.$query_ans_counter, array('textarea_name' =>
                                                        'support_ans[]',
                                                        'textarea_rows' => 20,
                                                        'editor_height' => 100,
                                                        'disabled' => 'disabled',
                                                        'media_buttons' => false,
                                                        'tinymce'       => array(
                                                        'toolbar1'      => 'bold,italic,underline,separator,alignleft,aligncenter,alignright,separator,link,unlink',)
                                                        )); ?>
                    </div>
                  </div>
                </div>
                <?php
                                            $query_ans_counter++;
                                        }
                                        //}
                                    } else {
                                        ?>
                <div class="row">
                  <div class="col-xs-12">
                    <button type="button"
                                                        class="btn btn-danger btn-sm wp-chatbot-remove-support pull-right"> <i class="fa fa-times" aria-hidden="true"></i> </button>
                    <span  class="wp-chatbot-support-cross pull-right" > <i  class="fa fa-crosshairs" aria-hidden="true"></i> </span>
                    <div class="cxsc-settings-blocks">
                      <p class="qc-opt-dcs-font">
                        <?php esc_html_e('Support query', 'wpbot'); ?>
                      </p>
                      <input type="text" class="form-control" name="support_query[]"
                                                           placeholder="<?php esc_html_e('Support query ', 'wpbot'); ?>">
                      <br>
                      <p class="qc-opt-dcs-font"><strong>
                        <?php esc_html_e('Support answer', 'wpbot'); ?>
                        </strong></p>
                      <?php wp_editor(html_entity_decode(stripcslashes('')), 'support_ans_0', array('textarea_name' =>
                                                        'support_ans[]',
                                                        'textarea_rows' => 20,
                                                        'editor_height' => 100,
                                                        'disabled' => 'disabled',
                                                        'media_buttons' => false,
                                                        'tinymce'       => array(
                                                            'toolbar1'      => 'bold,italic,underline,separator,alignleft,aligncenter,alignright,separator,link,unlink',)
                                                    )); ?>
                    </div>
                    <br>
                  </div>
                </div>
                <?php
                                    }
                                    ?>
              </div>
              <div class="row">
                <div class="col-sm-6 text-left"></div>
                <div class="col-sm-6 text-right">
                  <button class="btn btn-success btn-sm" type="button"
                                                id="add-more-support-query"><i
                                                    class="fa fa-plus" aria-hidden="true"></i>
                  <?php esc_html_e('Add More Questions and Answers', 'wpbot'); ?>
                  </button>
                </div>
              </div>
            </div>
          </section>
          <!--<section id="section-flip-4">
                            <div class="top-section">
                                <div class="notification-block-inner">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="cxsc-settings-blocks">
                                                <?php $notification_interval = get_option('qlcd_wp_chatbot_notification_interval') != "" ? get_option('qlcd_wp_chatbot_notification_interval') : 5 ?>
                                                <h4 class="qc-opt-title"><?php esc_html_e('Interval between notifications (in Seconds).', 'wpbot'); ?></h4>
                                                <input type="text" class="form-control"
                                                       name="qlcd_wp_chatbot_notification_interval"
                                                       value="<?php echo $notification_interval ?>">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <?php
                                    $notifications = $this->qcld_wb_chatbot_str_replace(unserialize(get_option('qlcd_wp_chatbot_notifications')));
                                    if (!empty($notifications)) {
                                        $chatbot_notif_counter=0;
                                        foreach ($notifications as $notification) {
                                            ?>
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <button type="button"
                                                            class="btn btn-danger btn-sm wp-chatbot-remove-notification pull-right">
                                                        <i class="fa fa-times" aria-hidden="true"></i>
                                                    </button>
                                                    <div class="cxsc-settings-blocks">
                                                        <?php wp_editor(html_entity_decode(stripcslashes($notification)), 'qlcd_wp_chatbot_notifications_'.$chatbot_notif_counter, array('textarea_name' =>
                                                            'qlcd_wp_chatbot_notifications[]',
                                                            'textarea_rows' => 20,
                                                            'editor_height' => 100,
                                                            'disabled' => 'disabled',
                                                            'media_buttons' => false,
                                                            'tinymce'       => array(
                                                                'toolbar1'      => 'bold,italic,underline,separator,alignleft,aligncenter,alignright,separator,link,unlink',)
                                                        )); ?>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                            <?php
                                            $chatbot_notif_counter++;
                                        }
                                        //}
                                    } else {
                                        ?>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <button type="button"
                                                        class="btn btn-danger btn-sm wp-chatbot-remove-notification pull-right">
                                                    <i class="fa fa-times" aria-hidden="true"></i>
                                                </button>
                                                <div class="cxsc-settings-blocks">
                                                    <?php wp_editor(html_entity_decode(stripcslashes('')), 'qlcd_wp_chatbot_notifications_0', array('textarea_name' =>
                                                        'qlcd_wp_chatbot_notifications[]',
                                                        'textarea_rows' => 20,
                                                        'editor_height' => 100,
                                                        'disabled' => 'disabled',
                                                        'media_buttons' => false,
                                                        'tinymce'       => array(
                                                            'toolbar1'      => 'bold,italic,underline,separator,alignleft,aligncenter,alignright,separator,link,unlink',)
                                                    )); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 text-left"></div>
                                    <div class="col-sm-6 text-right">
                                        <button class="btn btn-success btn-sm" type="button"
                                                id="add-more-notification-message">
                                            <i class="fa fa-plus" aria-hidden="true"></i> <?php esc_html_e('Add', 'wpbot'); ?>
                                        </button>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </section>-->
          <section id="section-flip-5">
            <div class="wp-chatbot-language-center-summmery"> </div>
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#wp-chatbot-lng-general">
                <?php esc_html_e('General', 'wpbot'); ?>
                </a></li>
              <li><a data-toggle="tab" href="#wp-chatbot-lng-support">
                <?php esc_html_e('FAQ', 'wpbot'); ?>
                </a></li>
              <li><a data-toggle="tab" href="#wp-chatbot-lng-reserve-keyword">
                <?php esc_html_e('ChatBot Keywords', 'wpbot'); ?>
                </a></li>
            </ul>
            <div class="tab-content">
              <div id="wp-chatbot-lng-general" class="tab-pane fade in active">
                <div class="top-section">
                  <div class="row">
                    <div class="col-xs-12" id="wp-chatbot-language-section">
                      <p>After making changes in the language center or settings, please type reset and hit enter in the ChatBot to start testing from the beginning or open a new Incognito window (Ctrl+Shit+N in chrome).</p>
                      <p>You could use &lt;br&gt; tag for line break.</p>
                      <div class="form-group">
                        <h4 class="qc-opt-title">
                          <?php esc_html_e('Your Company or Website Name', 'wpbot'); ?>
                        </h4>
                        <input type="text" class="form-control qc-opt-dcs-font"
                                                           name="qlcd_wp_chatbot_host"
                                                           value="<?php echo(get_option('qlcd_wp_chatbot_host') != '' ? get_option('qlcd_wp_chatbot_host') : 'Our Store'); ?>">
                      </div>
                      <div class="form-group">
                        <h4 class="qc-opt-title">
                          <?php esc_html_e('Agent name', 'wpbot'); ?>
                        </h4>
                        <input type="text" class="form-control qc-opt-dcs-font"
                                                           name="qlcd_wp_chatbot_agent"
                                                           value="<?php echo(get_option('qlcd_wp_chatbot_agent') != '' ? get_option('qlcd_wp_chatbot_agent') : 'Carrie'); ?>">
                      </div>
                      <div class="form-group">
                        <h4 class="qc-opt-title">
                          <?php esc_html_e('User demo name', 'wpbot'); ?>
                        </h4>
                        <input type="text" class="form-control qc-opt-dcs-font"
                                                           name="qlcd_wp_chatbot_shopper_demo_name"
                                                           value="<?php echo(get_option('qlcd_wp_chatbot_shopper_demo_name') != '' ? get_option('qlcd_wp_chatbot_shopper_demo_name') : 'Amigo'); ?>">
                      </div>
                      <div class="form-group">
                        <h4 class="qc-opt-title">
                          <?php esc_html_e('YES', 'wpbot'); ?>
                        </h4>
                        <input type="text" class="form-control qc-opt-dcs-font"
                                                           name="qlcd_wp_chatbot_yes"
                                                           value="<?php echo(get_option('qlcd_wp_chatbot_yes') != '' ? get_option('qlcd_wp_chatbot_yes') : 'YES'); ?>">
                      </div>
                      <div class="form-group">
                        <h4 class="qc-opt-title">
                          <?php esc_html_e('NO', 'wpbot'); ?>
                        </h4>
                        <input type="text" class="form-control qc-opt-dcs-font"
                                                           name="qlcd_wp_chatbot_no"
                                                           value="<?php echo(get_option('qlcd_wp_chatbot_no') != '' ? get_option('qlcd_wp_chatbot_no') : 'NO'); ?>">
                      </div>
                      <div class="form-group">
                        <h4 class="qc-opt-title">
                          <?php esc_html_e('OR', 'wpbot'); ?>
                        </h4>
                        <input type="text" class="form-control qc-opt-dcs-font"
                                                           name="qlcd_wp_chatbot_or"
                                                           value="<?php echo(get_option('qlcd_wp_chatbot_or') != '' ? get_option('qlcd_wp_chatbot_or') : 'OR'); ?>">
                      </div>
                      <div class="form-group">
                        <h4 class="qc-opt-title">
                          <?php esc_html_e('Sorry', 'wpbot'); ?>
                        </h4>
                        <input type="text" class="form-control qc-opt-dcs-font"
                                                           name="qlcd_wp_chatbot_sorry"
                                                           value="<?php echo(get_option('qlcd_wp_chatbot_sorry') != '' ? get_option('qlcd_wp_chatbot_sorry') : 'Sorry'); ?>">
                      </div>
                      <div class="form-group">
                        <?php
                                                    $agent_join_options = unserialize(get_option('qlcd_wp_chatbot_agent_join'));
                                                    $agent_join_option = 'qlcd_wp_chatbot_agent_join';
                                                    $agent_join_text = __('has joined the conversation', 'wpbot');
                                                    $this->qcld_wb_chatbot_dynamic_multi_option($agent_join_options, $agent_join_option, $agent_join_text);
                                                    ?>
                      </div>
                    </div>
                    <!--col-xs-12-->
                    <div class="col-xs-12" id="wp-chatbot-language-section">
                      <h4 class="text-success">
                        <?php esc_html_e(' Message setting for Greetings: ', 'wpbot'); ?>
                      </h4>
                      <div class="form-group">
                        <?php
                                                    $welcome_to_options = unserialize(get_option('qlcd_wp_chatbot_welcome'));
                                                    $welcome_to_option = 'qlcd_wp_chatbot_welcome';
                                                    $welcome_to_text =__('Welcome to', 'wpbot');
                                                    $this->qcld_wb_chatbot_dynamic_multi_option($welcome_to_options, $welcome_to_option, $welcome_to_text);
                                                    ?>
                      </div>
                      <div class="form-group">
                        <?php
                                                    $welcome_back_options = unserialize(get_option('qlcd_wp_chatbot_welcome_back'));
                                                    $welcome_back_option = 'qlcd_wp_chatbot_welcome_back';
                                                    $welcome_back_text = __('Welcome back', 'wpbot');
                                                    $this->qcld_wb_chatbot_dynamic_multi_option($welcome_back_options, $welcome_back_option, $welcome_back_text);
                                                    ?>
                      </div>
                      <div class="form-group">
                        <?php
                                                    $back_to_start_options = unserialize(get_option('qlcd_wp_chatbot_back_to_start'));
                                                    $back_to_start_option = 'qlcd_wp_chatbot_back_to_start';
                                                    $back_to_start_text = __('Back to Start', 'wpbot');
                                                    $this->qcld_wb_chatbot_dynamic_multi_option($back_to_start_options, $back_to_start_option, $back_to_start_text);
                                                    ?>
                      </div>
                      <div class="form-group">
                        <?php
                                                    $hi_there_options = unserialize(get_option('qlcd_wp_chatbot_hi_there'));
                                                    $hi_there_option = 'qlcd_wp_chatbot_hi_there';
                                                    $hi_there_text = __('Hi There!', 'wpbot');
                                                    $this->qcld_wb_chatbot_dynamic_multi_option($hi_there_options, $hi_there_option, $hi_there_text);
                                                    ?>
                      </div>
                      <div class="form-group">
                        <?php
                            $hello_options = unserialize(get_option('qlcd_wp_chatbot_hello'));
                            $hello_option = 'qlcd_wp_chatbot_hello';
                            $hello_text = __('Hello', 'wpbot');
                            $this->qcld_wb_chatbot_dynamic_multi_option($hello_options, $hello_option, $hello_text);
                        ?>
                      </div>
                      <div class="form-group">
                        <?php
                                                    $asking_name_options = unserialize(get_option('qlcd_wp_chatbot_asking_name'));
                                                    $asking_name_option = 'qlcd_wp_chatbot_asking_name';
                                                    $asking_name_text = __('May I know your name?', 'wpbot');
                                                    $this->qcld_wb_chatbot_dynamic_multi_option($asking_name_options, $asking_name_option, $asking_name_text);
                                                    ?>
                      </div>
                      <div class="form-group">
                        <?php
                                                    $i_am_options = unserialize(get_option('qlcd_wp_chatbot_i_am'));
                                                    $i_am_option = 'qlcd_wp_chatbot_i_am';
                                                    $i_am_text = __('I am', 'wpbot');
                                                    $this->qcld_wb_chatbot_dynamic_multi_option($i_am_options, $i_am_option, $i_am_text);
                                                    ?>
                      </div>
                      <div class="form-group">
                        <?php
                                                    $name_greeting_options = unserialize(get_option('qlcd_wp_chatbot_name_greeting'));
                                                    $name_greeting_option = 'qlcd_wp_chatbot_name_greeting';
                                                    $name_greeting_text = __('Nice to meet you', 'wpbot');
                                                    $this->qcld_wb_chatbot_dynamic_multi_option($name_greeting_options, $name_greeting_option, $name_greeting_text);
                                                    ?>
                      </div>
                      <div class="form-group">
                        <?php
                                                    $wildcard_msg_options = unserialize(get_option('qlcd_wp_chatbot_wildcard_msg'));
                                                    $wildcard_msg_option = 'qlcd_wp_chatbot_wildcard_msg';
                                                    $wildcard_msg_text = __('I am here to find  what you need. What are you looking for?', 'wpbot');
                                                    $this->qcld_wb_chatbot_dynamic_multi_option($wildcard_msg_options, $wildcard_msg_option, $wildcard_msg_text);
                                                    ?>
                      </div>
                      <div class="form-group">
                        <?php
                                                    $empty_filter_msgs = unserialize(get_option('qlcd_wp_chatbot_empty_filter_msg'));
                                                    $empty_filter_msg = 'qlcd_wp_chatbot_empty_filter_msg';
                                                    $empty_filter_msg_text = __('Sorry, I did not understand that', 'wpbot');
                                                    $this->qcld_wb_chatbot_dynamic_multi_option($empty_filter_msgs, $empty_filter_msg, $empty_filter_msg_text);
                                                    ?>
                      </div>
                      <div class="form-group">
                        <?php
                                                    $qlcd_wp_chatbot_did_you_mean = unserialize(get_option('qlcd_wp_chatbot_did_you_mean'));
                                                    $qlcd_wp_chatbot_did_you_means = 'qlcd_wp_chatbot_did_you_mean';
                                                    $wp_chatbot_no_result_text = esc_html__('Did you mean?', 'wpbot');
                                                    $this->qcld_wb_chatbot_dynamic_multi_option($qlcd_wp_chatbot_did_you_mean, $qlcd_wp_chatbot_did_you_means, $wp_chatbot_no_result_text);
                                                    ?>
                      </div>
                      <h4 class="text-success">
                        <?php esc_html_e('Message setting for Editor Box ', 'wpbot'); ?>
                      </h4>
                      <div class="form-group">
                        <?php
                                                    $is_typing_options = unserialize(get_option('qlcd_wp_chatbot_is_typing'));
                                                    $is_typing_option = 'qlcd_wp_chatbot_is_typing';
                                                    $is_typing_text = __('is typing...', 'wpbot');
                                                    $this->qcld_wb_chatbot_dynamic_multi_option($is_typing_options, $is_typing_option, $is_typing_text);
                                                    ?>
                      </div>
                      <div class="form-group">
                        <?php
                                                    $send_a_msg_options = unserialize(get_option('qlcd_wp_chatbot_send_a_msg'));
                                                    $send_a_msg_option = 'qlcd_wp_chatbot_send_a_msg';
                                                    $send_a_msg_text =__('Send a message', 'wpbot');
                                                    $this->qcld_wb_chatbot_dynamic_multi_option($send_a_msg_options, $send_a_msg_option, $send_a_msg_text);
                                                    ?>
                      </div>
                      <div class="form-group">
                        <?php
                                                    $choose_option_options = unserialize(get_option('qlcd_wp_chatbot_choose_option'));
                                                    $choose_option_option = 'qlcd_wp_chatbot_choose_option';
                                                    $choose_option_text = __('Choose an option', 'wpbot');
                                                    $this->qcld_wb_chatbot_dynamic_multi_option($choose_option_options, $choose_option_option, $choose_option_text);
                                                    ?>
                      </div>
                      <div class="form-group">
                        <?php
                                                    $asking_email_options = unserialize(get_option('qlcd_wp_chatbot_asking_email'));
                                                    $asking_email_option = 'qlcd_wp_chatbot_asking_email';
                                                    $asking_email_text = __('Please provide your email address', 'wpbot');
                                                    $this->qcld_wb_chatbot_dynamic_multi_option($asking_email_options, $asking_email_option, $asking_email_text);
                                                 ?>
                      </div>
                      <div class="form-group">
                        <?php
                                                    $invalid_email_options = unserialize(get_option('qlcd_wp_chatbot_invalid_email'));
                                                    $invalid_email_option = 'qlcd_wp_chatbot_invalid_email';
                                                    $invalid_email_text = __('Sorry, Email address is not valid! Please provide a valid email.', 'wpbot');
                                                    $this->qcld_wb_chatbot_dynamic_multi_option($invalid_email_options, $invalid_email_option, $invalid_email_text);
                                                    ?>
                      </div>
                      <div class="form-group">
                        <?php
                                                    $asking_msg_options = unserialize(get_option('qlcd_wp_chatbot_asking_msg'));
                                                    $asking_msg_option = 'qlcd_wp_chatbot_asking_msg';
                                                    $asking_msg_text = __('Thank you for email address. Please write your message now.', 'wpbot');
                                                    $this->qcld_wb_chatbot_dynamic_multi_option($asking_msg_options, $asking_msg_option, $asking_msg_text);
                                                    ?>
                      </div>
                      <div class="form-group">
                        <h4 class="qc-opt-title">
                          <?php esc_html_e('WPBot Support Mail Subject', 'wpbot'); ?>
                        </h4>
                        <input type="text" class="form-control qc-opt-dcs-font"
                               name="qlcd_wp_chatbot_email_sub"
                               value="<?php echo(get_option('qlcd_wp_chatbot_email_sub') != '' ? wp_unslash(get_option('qlcd_wp_chatbot_email_sub')) : 'Support Email Subject'); ?>">
                      </div>
                      <div class="form-group">
                        <?php
                                                    $support_option_again_options = unserialize(get_option('qlcd_wp_chatbot_support_option_again'));
                                                    $support_option_again_option = 'qlcd_wp_chatbot_support_option_again';
                                                    $support_option_again_text = __('You may choose option from below.', 'wpbot');
                                                    $this->qcld_wb_chatbot_dynamic_multi_option($support_option_again_options, $support_option_again_option, $support_option_again_text);
                                                    ?>
                      </div>
                      <div class="form-group">
                        <h4 class="qc-opt-title">
                          <?php esc_html_e('Your email was sent successfully.Thanks!', 'wpbot'); ?>
                        </h4>
                        <input type="text" class="form-control qc-opt-dcs-font"
                               name="qlcd_wp_chatbot_email_sent"
                               value="<?php echo(get_option('qlcd_wp_chatbot_email_sent') != '' ? get_option('qlcd_wp_chatbot_email_sent') : 'Your email was sent successfully.Thanks!'); ?>">
                      </div>
                      <div class="form-group">
                        <h4 class="qc-opt-title">
                          <?php esc_html_e('Sorry! I could not send your mail! Please contact the webmaster.', 'wpbot'); ?>
                        </h4>
                        <input type="text" class="form-control qc-opt-dcs-font"
                               name="qlcd_wp_chatbot_email_fail"
                               value="<?php echo(get_option('qlcd_wp_chatbot_email_fail') != '' ? wp_unslash(get_option('qlcd_wp_chatbot_email_fail')) : 'Sorry! fail to send email'); ?>">
                      </div>
                      <div class="form-group">
                        <?php
                                                    $asking_phone_options = unserialize(get_option('qlcd_wp_chatbot_asking_phone'));
                                                    $asking_phone_option = 'qlcd_wp_chatbot_asking_phone';
                                                    $asking_phone_text = __('Please provide your Phone number', 'wpbot');
                                                    $this->qcld_wb_chatbot_dynamic_multi_option($asking_phone_options, $asking_phone_option, $asking_phone_text);
                                                    ?>
                      </div>
                      <div class="form-group">
                        <?php
                                                    $thanks_phone_options = unserialize(get_option('qlcd_wp_chatbot_thank_for_phone'));
                                                    $thanks_phone_option = 'qlcd_wp_chatbot_thank_for_phone';
                                                    $thanks_phone_text = __('Thank you for Phone number', 'wpbot');
                                                    $this->qcld_wb_chatbot_dynamic_multi_option($thanks_phone_options, $thanks_phone_option, $thanks_phone_text);
                                                    ?>
                      </div>
                      <div class="form-group">
                        <h4 class="qc-opt-title">
                          <?php esc_html_e('Thanks for your phone number. We will call you ASAP!', 'wpbot'); ?>
                        </h4>
                        <input type="text" class="form-control qc-opt-dcs-font"
                               name="qlcd_wp_chatbot_phone_sent"
                               value="<?php echo(get_option('qlcd_wp_chatbot_phone_sent') != '' ? get_option('qlcd_wp_chatbot_phone_sent') : 'Thanks for your phone number. We will call you ASAP!'); ?>">
                      </div>
                      <div class="form-group">
                        <h4 class="qc-opt-title">
                          <?php esc_html_e('Sorry! I could not collect phone number! Please contact the webmaster.', 'wpbot'); ?>
                        </h4>
                        <input type="text" class="form-control qc-opt-dcs-font"
                               name="qlcd_wp_chatbot_phone_fail"
                               value="<?php echo(get_option('qlcd_wp_chatbot_phone_fail') != '' ? wp_unslash(get_option('qlcd_wp_chatbot_phone_fail')) : 'Sorry! I could not collect phone number!'); ?>">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="wp-chatbot-lng-support" class="tab-pane fade">
                <div class="top-section">
                  <div class="row">
                    <div class="col-xs-12" id="wp-chatbot-language-section">
                      <div class="form-group">
                        <?php
                                                    $support_welcome_options = unserialize(get_option('qlcd_wp_chatbot_support_welcome'));
                                                    $support_welcome_option = 'qlcd_wp_chatbot_support_welcome';
                                                    $support_welcome_text = __('Welcome to FAQ Section', 'wpbot');
                                                    $this->qcld_wb_chatbot_dynamic_multi_option($support_welcome_options, $support_welcome_option, $support_welcome_text);
                                                    ?>
                      </div>
                      
                      <!--<div class="form-group">
                                                    <?php
                                                    $feedback_label_options = unserialize(get_option('qlcd_wp_chatbot_feedback_label'));
                                                    $feedback_label_option = 'qlcd_wp_chatbot_feedback_label';
                                                    $feedback_label_text = __('Send Feedback!', 'wpbot');
                                                    $this->qcld_wb_chatbot_dynamic_multi_option($feedback_label_options, $feedback_label_option, $feedback_label_text);
                                                    ?>
                                                </div>--> 
                      
                    </div>
                  </div>
                </div>
              </div>
              <div id="wp-chatbot-lng-reserve-keyword" class="tab-pane fade">
                <div class="top-section">
                  <div class="row">
                    <div class="col-xs-12" id="wp-chatbot-language-section">
                      <div class="form-group">
                        <h4 class="qc-opt-title">
                          <?php esc_html_e('Start Keyword', 'wpbot'); ?>
                        </h4>
                        <input type="text" class="form-control qc-opt-dcs-font"
                                                           name="qlcd_wp_chatbot_sys_key_help"
                                                           value="<?php echo(get_option('qlcd_wp_chatbot_sys_key_help') != '' ? get_option('qlcd_wp_chatbot_sys_key_help') : 'start'); ?>">
                      </div>
                      <div class="form-group">
                        <h4 class="qc-opt-title"><strong>
                          <?php esc_html_e('FAQ', 'wpbot'); ?>
                          </strong>
                          <?php esc_html_e('Keyword', 'wpbot'); ?>
                        </h4>
                        <input type="text" class="form-control qc-opt-dcs-font"
                                                           name="qlcd_wp_chatbot_sys_key_support"
                                                           value="<?php echo(get_option('qlcd_wp_chatbot_sys_key_support') != '' ? get_option('qlcd_wp_chatbot_sys_key_support') : 'faq'); ?>">
                      </div>
                      <div class="form-group">
                        <h4 class="qc-opt-title"><strong>
                          <?php esc_html_e('Converstion History Clear', 'wpbot'); ?>
                          </strong>
                          <?php esc_html_e('Keyword', 'wpbot'); ?>
                        </h4>
                        <input type="text" class="form-control qc-opt-dcs-font"
                                                           name="qlcd_wp_chatbot_sys_key_reset"
                                                           value="<?php echo(get_option('qlcd_wp_chatbot_sys_key_reset') != '' ? get_option('qlcd_wp_chatbot_sys_key_reset') : 'reset'); ?>">
                      </div>
                      <div class="form-group">
                        <h4 class="qc-opt-title"><strong>
                          <?php esc_html_e('eMail', 'wpbot'); ?>
                          </strong>
                          <?php esc_html_e('Keyword to Send eMail', 'wpbot'); ?>
                        </h4>
                        <input type="text" class="form-control qc-opt-dcs-font"
                                                           name="qlcd_wp_chatbot_sys_key_email"
                                                           value="<?php echo(get_option('qlcd_wp_chatbot_sys_key_email') != '' ? get_option('qlcd_wp_chatbot_sys_key_email') : 'email'); ?>">
                      </div>
                      <div class="form-group">
                        <?php
                                                    $help_welcome_options = unserialize(get_option('qlcd_wp_chatbot_help_welcome'));
                                                    $help_welcome_option = 'qlcd_wp_chatbot_help_welcome';
                                                    $help_welcome_text = 'Welcome to Help Section';
                                                    $this->qcld_wb_chatbot_dynamic_multi_option($help_welcome_options, $help_welcome_option, $help_welcome_text);
                                                    ?>
                      </div>
                      <div class="form-group">
                        <?php
                                                    $help_msg_options = unserialize(get_option('qlcd_wp_chatbot_help_msg'));
                                                    $help_msg_option = 'qlcd_wp_chatbot_help_msg';
                                                    $help_msg_text = '<h3>Type and Hit Enter</h3>  1. <b>start</b> Get back to the main menu. <br>  2. <b>faq</b> for  FAQ. <br> 3. <b>eMail </b> to Send eMail <br> 4. <b>reset</b> To clear chat history and start from the beginning.';
                                                    $this->qcld_wb_chatbot_dynamic_multi_option($help_msg_options, $help_msg_option, $help_msg_text);
                                                    ?>
                      </div>
                      <div class="form-group">
                        <?php
                                                    $reset_options = unserialize(get_option('qlcd_wp_chatbot_reset'));
                                                    $reset_option = 'qlcd_wp_chatbot_reset';
                                                    $reset_text = 'Do you want to clear our chat history and start over?';
                                                    $this->qcld_wb_chatbot_dynamic_multi_option($reset_options, $reset_option, $reset_text);
                                                    ?>
                      </div>
                    </div>
                    <!--                                            col-xs-12--> 
                  </div>
                  <!--                                        row--> 
                </div>
                <!--                                    top-section--> 
              </div>
            </div>
            <!--                            tab-content--> 
          </section>
          <section id="section-flip-6">
            <?php 
                        wp_enqueue_style('qcld-wp-chatbot-common-style', plugins_url(basename(plugin_dir_path(__FILE__)) . '/css/common-style.css', basename(__FILE__)), '', QCLD_wpCHATBOT_VERSION, 'screen');
                        ?>
            <div class="top-section">
              <div class="notification-block-inner">
                <div class="row">
                  <div class="col-xs-12">
                    <div class="row">
                      <div class="col-xs-12">
                        <h2>Predefined Intents</h2>
                        <div class="row">
                          <div class="col-xs-12">
                            <h4 class="qc-opt-title">
                              <?php esc_html_e('Call Me', 'wpbot'); ?>
                            </h4>
                            <div class="cxsc-settings-blocks">
                              <input value="1" id="disable_wp_chatbot_call_gen" type="checkbox"
                                     name="disable_wp_chatbot_call_gen" <?php echo(get_option('disable_wp_chatbot_call_gen') == 1 ? 'checked' : ''); ?>>
                              <label for="disable_wp_chatbot_call_gen">
                                <?php esc_html_e('Disable Call Me feature and button on Start Menu', 'wpbot'); ?>
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="form-group" style="margin-bottom:0px">
                          <h4 class="qc-opt-title">
                            <?php esc_html_e('Button Label', 'wpbot'); ?>
                          </h4>
                          <input type="text" class="form-control qc-opt-dcs-font"
                                                           name="qlcd_wp_chatbot_support_phone"
                                                           value="<?php echo(get_option('qlcd_wp_chatbot_support_phone') != '' ? get_option('qlcd_wp_chatbot_support_phone') : 'Leave your number. We will call you back!'); ?>">
                        </div>
                        <div class="row">
                          <div class="col-xs-12">
                            <h4 class="qc-opt-title">
                              <?php esc_html_e('Email', 'wpbot'); ?>
                            </h4>
                            <div class="cxsc-settings-blocks">
                              <input value="1" id="disable_wp_chatbot_feedback" type="checkbox"
                                     name="disable_wp_chatbot_feedback" <?php echo(get_option('disable_wp_chatbot_feedback') == 1 ? 'checked' : ''); ?>>
                              <label for="disable_wp_chatbot_feedback">
                                <?php esc_html_e('Disable Email feature and button on Start Menu', 'wpbot'); ?>
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="form-group" style="margin-bottom:0px">
                          <h4 class="qc-opt-title">
                            <?php esc_html_e('Button Label', 'wpbot'); ?>
                          </h4>
                          <input type="text" class="form-control qc-opt-dcs-font"
                                                           name="qlcd_wp_chatbot_support_email"
                                                           value="<?php echo(get_option('qlcd_wp_chatbot_support_email') != '' ? get_option('qlcd_wp_chatbot_support_email') : 'Send us Email'); ?>">
                        </div>
                        <div class="row">
                          <div class="col-xs-12">
                            <h4 class="qc-opt-title">
                              <?php esc_html_e('FAQ', 'wpbot'); ?>
                            </h4>
                            <div class="cxsc-settings-blocks">
                              <input value="1" id="disable_wp_chatbot_faq" type="checkbox"
                                     name="disable_wp_chatbot_faq" <?php echo(get_option('disable_wp_chatbot_faq') == 1 ? 'checked' : ''); ?>>
                              <label for="disable_wp_chatbot_faq">
                                <?php esc_html_e('Disable FAQ feature and button on Start Menu', 'wpbot'); ?>
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="form-group" style="margin-bottom:0px">
                          <h4 class="qc-opt-title">
                            <?php esc_html_e('Button Label', 'wpbot'); ?>
                          </h4>
                          <input type="text" class="form-control qc-opt-dcs-font"
                                                           name="qlcd_wp_chatbot_wildcard_support"
                                                           value="<?php echo(get_option('qlcd_wp_chatbot_wildcard_support') != '' ? get_option('qlcd_wp_chatbot_wildcard_support') : 'FAQ'); ?>">
                        </div>
                      </div>
                    </div>
                    <div class="qc_menu_setup_area">
                      <h2><?php esc_html_e('Menu Sorting & Customization Area', 'wpbot'); ?></h2>
                      <p style="color:red"><?php esc_html_e('After making changes in the settings, please clear browser cache and cookies before reloading the page or open a new Incognito window (Ctrl+Shit+N in chrome).', 'wpbot'); ?></p>
                      <p><?php esc_html_e('In this section you can control the UI of the menu.', 'wpbot'); ?><br>
                      <?php esc_html_e('To adjust the', 'wpbot'); ?> <b><?php esc_html_e('Active Menu', 'wpbot'); ?> </b> <?php esc_html_e('ordering just drag it up or down. To add a menu item in ', 'wpbot'); ?><b><?php esc_html_e('Active Menu', 'wpbot'); ?> </b> <?php esc_html_e('simply drag a menu item from', 'wpbot'); ?> <b><?php esc_html_e('Available Menu', 'wpbot'); ?> </b><?php esc_html_e('and drop it to', 'wpbot'); ?>   <b><?php esc_html_e('Active Menu', 'wpbot'); ?> </b> <?php esc_html_e('To remove a menu item from ', 'wpbot'); ?> . <b><?php esc_html_e('Active Menu', 'wpbot'); ?></b> <?php esc_html_e('simple drag the menu item and drop it to', 'wpbot'); ?> <b><?php esc_html_e('Available Menu', 'wpbot'); ?> </b>.</p>
                      <br>
                      <div class="qc_menu_area">
                        <h4>Acitve Menu</h4>
                        <div class="qc_menu_area_container" id="qc_menu_area">
                          <?php 
                              if(get_option('qc_wpbot_menu_order')!=''):
                                echo stripslashes(get_option('qc_wpbot_menu_order'));
                              else:?>
                          <?php if(get_option('disable_wp_chatbot_faq')==''): ?>
                          <span class="qcld-chatbot-wildcard qc_draggable_item_remove"  data-wildcart="support"><?php echo get_option('qlcd_wp_chatbot_wildcard_support'); ?></span>
                          <?php endif; ?>
                          <?php if(get_option('enable_wp_chatbot_messenger')=='1'): ?>
                          <span class="qcld-chatbot-wildcard qc_draggable_item_remove"  data-wildcart="messenger"><?php echo qcld_choose_random(unserialize(get_option('qlcd_wp_chatbot_messenger_label'))) ?></span>
                          <?php endif; ?>
                          <?php if(get_option('enable_wp_chatbot_whats')=='1'): ?>
                          <span class="qcld-chatbot-wildcard qc_draggable_item_remove"  data-wildcart="whatsapp"><?php echo qcld_choose_random(unserialize(get_option('qlcd_wp_chatbot_whats_label'))); ?></span>
                          <?php endif; ?>
                          <?php if(get_option('disable_wp_chatbot_feedback')==''): ?>
                          <span class="qcld-chatbot-suggest-email qc_draggable_item_remove"><?php echo get_option('qlcd_wp_chatbot_support_email'); ?></span>
                          <?php endif; ?>
                          <?php if(get_option('disable_wp_chatbot_call_gen')==''): ?>
                          <span class="qcld-chatbot-suggest-phone qc_draggable_item_remove" ><?php echo get_option('qlcd_wp_chatbot_support_phone'); ?></span>
                          <?php endif; ?>
                          <?php
                                if(class_exists('Qcformbuilder_Forms_Admin')){
                                  global $wpdb;

                                  $results = $wpdb->get_results("SELECT * FROM ". $wpdb->prefix."wfb_forms where 1 and type='primary'");
                                  if(!empty($results)){
                                  ?>
                          <?php
                                    foreach($results as $result){
                                      $form = unserialize($result->config);
                                    ?>
                          <span class="qcld-chatbot-wildcard qcld-chatbot-form qc_draggable_item_remove" data-form="<?php echo $form['ID']; ?>" ><?php echo $form['name']; ?></span>
                          <?php
                                    }
                                    ?>
                          <?php
                                  }
                                }
                              ?>
                          <?php endif; ?>
                        </div>
                      </div>
                      <div class="qc_menu_list_area">
                        <h4>Available Menu</h4>
                        <div class="qc_menu_list_container">
                          <p>Predefined Intents</p>
                          <ul>
                            <li>
                              <?php if(get_option('disable_wp_chatbot_faq')==''): ?>
                              <span class="qcld-chatbot-wildcard qc_draggable_item"  data-wildcart="support"><?php echo get_option('qlcd_wp_chatbot_wildcard_support'); ?></span>
                              <?php endif; ?>
                            </li>
                            <li>
                              <?php if(get_option('enable_wp_chatbot_messenger')=='1'): ?>
                              <span class="qcld-chatbot-wildcard qc_draggable_item"  data-wildcart="messenger"><?php echo qcld_choose_random(unserialize(get_option('qlcd_wp_chatbot_messenger_label'))) ?></span>
                              <?php endif; ?>
                            </li>
                            <li>
                              <?php if(get_option('enable_wp_chatbot_whats')=='1'): ?>
                              <span class="qcld-chatbot-wildcard qc_draggable_item"  data-wildcart="whatsapp"><?php echo qcld_choose_random(unserialize(get_option('qlcd_wp_chatbot_whats_label'))); ?></span>
                              <?php endif; ?>
                            </li>
                            <li>
                              <?php if(get_option('disable_wp_chatbot_feedback')==''): ?>
                              <span class="qcld-chatbot-suggest-email qc_draggable_item"><?php echo get_option('qlcd_wp_chatbot_support_email'); ?></span>
                              <?php endif; ?>
                            </li>
                            <li>
                              <?php if(get_option('disable_wp_chatbot_call_gen')==''): ?>
                              <span class="qcld-chatbot-suggest-phone qc_draggable_item" ><?php echo get_option('qlcd_wp_chatbot_support_phone'); ?></span>
                              <?php endif; ?>
                            </li>
                          </ul>
                          <?php
                                                    if(class_exists('Qcformbuilder_Forms_Admin')){
                                                        global $wpdb;

                                                        $results = $wpdb->get_results("SELECT * FROM ". $wpdb->prefix."wfb_forms where 1 and type='primary'");
                                                        if(!empty($results)){
                                                        ?>
                          <p>Conversational Form</p>
                          <ul>
                            <?php
                                                            foreach($results as $result){
                                                                $form = unserialize($result->config);
                                                            ?>
                            <li><span class="qcld-chatbot-wildcard qcld-chatbot-form qc_draggable_item" data-form="<?php echo $form['ID']; ?>" ><?php echo $form['name']; ?></span></li>
                            <?php
                                                            }
                                                            ?>
                          </ul>
                          <?php
                                                        }
                                                    }
                                                    ?>
                        </div>
                      </div>
                    </div>
                    <input id="qc_wpbot_menu_order" type="hidden" name="qc_wpbot_menu_order" value='<?php echo stripslashes(get_option('qc_wpbot_menu_order')); ?>' />
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section id="section-flip-7">
            <div class="top-section">
              <div class="wp-chatbot-language-center-summmery">
                <p>
                  <?php esc_html_e('DialogFlow as Artificial Intelligences Engine for wpwBot', 'wpbot'); ?>
                </p>
              </div>
             
              <div class="row">
                <div class="col-xs-12">
                  <h4 class="qc-opt-title"><?php echo esc_html__('Enable DialogFlow as AI Engine to Detect Intent', 'wpbot'); ?> </h4>
                  <h5 style="color: #f00;font-weight:900"><?php echo esc_html__('Please do not enable DialogFlow and OpenAI both at the same time.', 'wpbot'); ?> </h5>
                  <h5 style="color: #f00;font-weight:900"><?php echo esc_html__(' Enable either DialogFlow or OpenAI', 'wpbot'); ?> </h5>
                  <div class="cxsc-settings-blocks">
                    <input value="1" id="enable_wp_chatbot_dailogflow" type="checkbox"
                                                   name="enable_wp_chatbot_dailogflow" <?php echo(get_option('enable_wp_chatbot_dailogflow') == 1 ? 'checked' : ''); ?>>
                    <label for="enable_wp_chatbot_dailogflow"><?php echo esc_html__('Enable DialogFlow AI Engine to process Natural Language commands from users.', 'wpbot'); ?> </label>
                  </div>
                </div>
                <div class="col-xs-12"> <br>
                  <p><?php echo esc_html__('Log in to DialogFlow Console from', 'wpbot'); ?> <a class="wpbot_df_instruction" href="<?php echo esc_url('https://dialogflow.com/'); ?>" target="_blank"><?php echo esc_html__('Here', 'wpbot'); ?></a> <?php echo esc_html__('with your gmail account.', 'wpbot'); ?> <a class="wpbot_df_instruction" href="<?php echo esc_url(QCLD_wpCHATBOT_PLUGIN_URL.'download/wpwBot.zip'); ?>" download ><?php echo esc_html__('Download', 'wpbot'); ?></a> <?php echo esc_html__('the agent training data and import from DialogFlow->Settings->Export and Import tab. You can add your own intents in that agent but do not modify our following training intents which are', 'wpbot'); ?> <b>email, email subscription, faq, get email, get name, help, phone, reset, site search and start.</b> </p>
                </div>
                <div class="col-xs-12" id="wp-chatbot-dialflow-section">
                  <h4 class="qc-opt-title"><?php echo esc_html__('DialogFlow API Version', 'wpbot'); ?></h4>
                  <div class="form-group">
                    <label class="radio-inline">
                      <input id="wp-chatbot-df-api" type="radio"
                                                        name="wp_chatbot_df_api"
                                                        value="v2" checked>
                      <?php echo esc_html__('Dialogflow API V2', 'wpbot'); ?> </label>
                  </div>
                  <div id="wp-chatbot-df-section-v2" style="display:block"> 
                    <!-- Dialogflow V2 Configuration -->
                    
                    <?php if(!file_exists(QCLD_wpCHATBOT_GC_DIRNAME.'/autoload.php')): ?>
                    <div class="form-group"> <br>
                      <h4 class="qc-opt-title" style="color:red"><?php echo esc_html__('For Interacting with Dialogflow V2 the Google Client Package is Required!', 'wpbot'); ?></h4>
                      <p>Please click the download button below to download the Google Client package. The package will be downloaded inside your Wordpress's <b>/wp-content</b> folder. This package is around <b>10 MB</b> in zip file format and it will be about <b>49 MB</b> after unzipping. Please make sure that your server has enough space to store that package.</p>
                      <div class="qcld-wpbot-gcdownload-area">
                        <button class="btn btn-primary" id="qc_wpbot_gc_download" <?php echo (!is_writable(QCLD_wpCHATBOT_GC_ROOT)?'disabled':''); ?>>Download and Install the Google Client</button>
                        <?php 
                            if(!is_writable(QCLD_wpCHATBOT_GC_ROOT)){
                              echo '<span style="color:red;font-size: 12px;"><b>wp-content</b> folder is not writable.</span>';
                            }
                          ?>
                        <br>
                        <br>
                        <p>Alternatively, If the download operation fails for some reason like folder permission or server timeout issue then you can manually upload the <u title="Google Client">GC</u> package by following some simple steps.</p>
                        <p>1. Download GC package from: <a href="https://github.com/qcloud/gc/archive/master.zip" target="_blank">https://github.com/qcloud/gc/archive/master.zip</a></p>
                        <p>2. Unzip the <b>wpbotgc.zip</b> inside to your computer.</p>
                        <p>3. Create a folder with name <b>wpbot-dfv2-client</b> under <b>wp-content</b> into your server.</p>
                        <p>4. Upload the upziped files and folders into <b>wpbot-dfv2-client</b> via FTP.</p>
                        <div class="qcld_wpbot_download_statuses"> </div>
                      </div>
                      <br>
                    </div>
                    <?php else: ?>
                    <div class="form-group">
                      <h4 class="qc-opt-title" style="color:green"><?php echo esc_html__('Google Client Package is Installed on Your Website.', 'wpbot'); ?></h4>
                    </div>
                    <?php endif; ?>
                    <div class="form-group">
                      <h4 class="qc-opt-title" >Please follow along with this <a href="https://www.wpbot.pro/dialogflow-integration" target="_blank">tutorial</a>. It will help you to create a project id, private key and integrate WPBot with Dialogflow. For DialogFlow agent region, try choosing any region other than the EU region which has known issues.</h4>
                    </div>
                    <div class="form-group">
                      <h4 class="qc-opt-title"><?php echo esc_html__('DialogFlow Project ID', 'wpbot'); ?></h4>
                      <p>You can follow the <a href="https://www.youtube.com/watch?v=qY-EHFY2wH8" target="_blank">tutorial</a> to get the Project ID. </p>
                      <input type="text" class="form-control qc-opt-dcs-font"
                                                        name="qlcd_wp_chatbot_dialogflow_project_id"
                                                        value="<?php echo(get_option('qlcd_wp_chatbot_dialogflow_project_id') != '' ? get_option('qlcd_wp_chatbot_dialogflow_project_id') : ''); ?>" placeholder="<?php echo esc_html__('DialogFlow Project ID', 'wpbot'); ?>">
                    </div>
                    <?php 

$placeholderPrivatekey = '{
    "type": "service_account",
    "project_id": "PLACEYOUROWNID",
    "private_key_id": "31e300128..........c48",
    "private_key": "-----BEGIN PRIVATE KEY-----\nTHIS IS A DEMO PRIVATE KEY to SHOW HOW IT SHOULD LOOK. Replace with ACTUAL KEY.+OdT09MGEdAjlgSF2HMDA3fl8Ey4dmTxRfAN9No6G3Ugs3BrpZHfY\nSviWzS4JQ0GkCubcJc0DzJ8AqG6xX7E3SfKpdtKEn1eYV7sfQL3C2lm2lTj6nWdt\nxrkhJVHn61kxfPAWChnkdPa5EbMNFnV5mN5rhwaOxR+tEjW9nWBjVFG0NMnOMWF4\nsu6QJVjQMtI99jPBCid1r4XV/sPABSXh8dscWdMinGhZfuCjF4sOGHUUaw+VDGb6\nZpPOh65nw5fsdOHETsb4BN/LW72Khux+870Ig4jkuLIN3PnSF9QfwO8U2qTG5sZK\nn5nxhT9zAgMBAAECggEAX1NSWRGnrcVsu6n1jn9xUpzvxyy+CJe1Z1DvHo1tmHNS\n0Q8OI/Y........THIS IS A DEMO PRIVATE KEY to SHOW HOW IT SHOULD LOOK. Replace with your own key......................................paqQKBgQCJ\nvNCZIHpLGVqwiw4SVYgZW2i+VsZ78sOw0SuuhjZNmOlGjpalbQCjKs9l5dSz5t5D\nVleJVyriFaXyvVty/iF6orqTgv0EhcLO2RI9KSrTpbOXcIkgeunAhRM3oloxSndt\n98H3f1xRvTLIm1enERLkOyGHmm7nWFV0BQWD+CxeCwKBgDtBGn+uBgNgZjSaLnkJ\noemAoIBN6aD4+QWduPldRgTilH6ABQ26SL+t4sa9jbAtkMuD/hWOMLBqmz98tfCC\ndy6cPghea+b0S7lj/wmUaDA1Vmz7luCLm+lO+fe3K6WIlEhAP/9MXVH90Sj6CllF\nAn4stWzIKHrRKA3lIvgJv+9W\n-----END PRIVATE KEY-----\n",
    "client_email": "dialogflow-evysjn@wpbotpro.iam.gserviceaccount.com",
    "client_id": "1026.....032997",
    "auth_uri": "https://accounts.google.com/o/oauth2/auth",
    "token_uri": "https://oauth2.googleapis.com/token",
    "auth_provider_x509_cert_url": "https://www.googleapis.com/oauth2/v1/certs",
    "client_x509_cert_url": "https://www.googleapis.com/robot/v1/metadata/x509/dialogflow-evysjn%40wpbotpro.iam.gserviceaccount.com"
}';

?>
                    <div class="form-group">
                      <h4 class="qc-opt-title"><?php echo esc_html__('Private Key', 'wpbot'); ?></h4>
                      <p>Put your google service account's private key JSON string here. You can follow the <a href="https://www.youtube.com/watch?v=qY-EHFY2wH8" target="_blank">tutorial</a> to get private key JSON file. </p>
                      <textarea class="form-control" rows="20" name="qlcd_wp_chatbot_dialogflow_project_key" placeholder='<?php echo $placeholderPrivatekey; ?>'><?php echo(get_option('qlcd_wp_chatbot_dialogflow_project_key') != '' ? get_option('qlcd_wp_chatbot_dialogflow_project_key') : ''); ?></textarea>
                    </div>
                    
                    <!-- End Dialogflow V2 Configuration --> 
                  </div>
                  <div class="form-group">
                    <h4 class="qc-opt-title"><?php echo esc_html__('Please Click the Button Below to Test Dialogflow Connection.', 'wpbot'); ?> </h4>
                    <p style="color:red"><?php echo esc_html__('*Save settings before pressing Test Dialogflow Connection', 'wpbot'); ?><br>
                      <?php echo esc_html__('*You must have owner permission for the service account your are using in Dialogflow agent.', 'wpbot'); ?></p>
                    <div class="cxsc-settings-blocks">
                      <button class="btn btn-primary" id="qc_wpbot_df_status">Test Dialogflow Connection</button>
                      <div class="qcwp_df_status"></div>
                    </div>
                  </div>
                  <br>
                  <div class="form-group">
                    <h4 class="qc-opt-title">
                      <?php esc_html_e('DialofFlow Default reply', 'wpbot'); ?>
                    </h4>
                    <input type="text" class="form-control qc-opt-dcs-font"
                                                   name="qlcd_wp_chatbot_dialogflow_defualt_reply"
                                                   value="<?php echo(get_option('qlcd_wp_chatbot_dialogflow_defualt_reply') != '' ? get_option('qlcd_wp_chatbot_dialogflow_defualt_reply') : 'Sorry, I did not understand you. You may browse'); ?>" placeholder="<?php esc_html_e('DialogFlow default reply', 'wpbot'); ?>">
                  </div>
                  <div class="form-group">
                    <h4 class="qc-opt-title"><?php echo esc_html__('DialogFlow Agent Language (Ex: en)', 'wpbot'); ?></h4>
                    <input type="text" class="form-control qc-opt-dcs-font"
                                                   name="qlcd_wp_chatbot_dialogflow_agent_language"
                                                   value="<?php echo (get_option('qlcd_wp_chatbot_dialogflow_agent_language') != '' ? get_option('qlcd_wp_chatbot_dialogflow_agent_language') : 'en'); ?>" placeholder="<?php echo esc_html__('DialogFlow Agent Language', 'wpbot'); ?>">
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section id="section-flip-7">
              <div class="top-section">
                  <div class="row">
                    <div class="col-xs-12">
                      <h4 class="qc-opt-dcs"><?php echo esc_html__('You can paste or write your custom css here.', 'wpbot'); ?></h4>
                      <textarea name="wp_chatbot_custom_css"
                                                      class="form-control wp-chatbot-custom-css"
                                                      cols="10"
                                                      rows="16"><?php echo get_option('wp_chatbot_custom_css'); ?></textarea>
                    </div>
                  </div>
                  <!--                                row--> 
                </div>
          </section>

          <section id="section-flip-9">
            <div class="cxsc-settings-blocks-addon">Install Conversational form builder to Create Button(menu) Driven Conversations.</br> 
                              After creating a Conversational form, you can add it to the ChatBot's <b>Start Menu.</b></div>

              <?php include_once QCLD_wpCHATBOT_PLUGIN_DIR_PATH . '/qcld-recommendbot-plugin.php';?>
          </section>  

      
          <!--<section id="section-flip-10">
                            <div class="wp-chatbot-language-center-summmery">
                                <p><?php esc_html_e('Enable the Mobile App feature ONLY if you bought ', 'wpbot'); ?> <a target="_blank" href="https://www.quantumcloud.com/products/wpcommerce-chatbot-wpwbot/#app"><?php esc_html_e(' the Mobile App Addon.', 'wpbot'); ?></a>
                            </div>
                            <div class="top-section">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <h4 class="qc-opt-title"><?php esc_html_e('Mobile App Pages', 'wpbot'); ?> </h4>
                                        <div class="cxsc-settings-blocks">
                                            <input value="1" id="wp_chatbot_app_pages" type="checkbox"
                                                   name="wp_chatbot_app_pages" <?php echo(get_option('wp_chatbot_app_pages') == 1 ? 'checked' : ''); ?>>
                                            <label for="wp_chatbot_app_pages"><?php esc_html_e('Create pages for WpBot Mobile App', 'wpbot'); ?> </label>
                                        </div>
                                        <br>
                                        <p class="qc-opt-title-font"><?php esc_html_e('Following pages will be created to use in', 'wpbot'); ?> <strong> <?php esc_html_e('WpBot', 'wpbot'); ?> </strong> <?php esc_html_e(' Android or IOS Mobile App', 'wpbot'); ?>.</p>
                                        <ol>
                                            <li><?php esc_html_e('WpBot Mobile App', 'wpbot'); ?></li>
                                            <li><?php esc_html_e('WpBot App Checkout', 'wpbot'); ?></li>
                                            <li><?php esc_html_e('WpBot App Order Thank You', 'wpbot'); ?></li>
                                        </ol>
                                        <p class="qc-opt-title-font"><?php esc_html_e('Follow the', 'wpbot'); ?> <strong> <?php esc_html_e('Documentation', 'wpbot'); ?> </strong>  <?php esc_html_e('to build & publish a Mobile Application (Android or IOS ) for your store using any of', 'wpbot'); ?> </p>
                                        <ol>
                                            <li><?php esc_html_e('WpBot Ionic FrameWork package', 'wpbot'); ?></li>
                                            <li><?php esc_html_e('WpBot PhoneGap package', 'wpbot'); ?></li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            
                        </section>-->
          
       
        </div>
        <!-- /content --> 
      </div>
      <!-- /wp-chatbot-tabs -->
      <footer class="wp-chatbot-admin-footer">
        <div class="row">
          <div class="text-left col-sm-3 col-sm-offset-3">
            <input type="button" class="btn btn-warning submit-button"
                                   id="qcld-wp-chatbot-reset-option"
                                   value="<?php esc_html_e('Reset all options to Default', 'wpbot'); ?>"/>
          </div>
          <div class="text-right col-sm-6">
            <input type="submit" class="btn btn-primary submit-button" name="submit"
                                   id="submit" value="<?php esc_html_e('Save Settings', 'wpbot'); ?>"/>
          </div>
        </div>
        <!--                    row--> 
      </footer>
    </section>
  </div>
  <?php wp_nonce_field('wp_chatbot'); ?>
</form>
<script>
  
</script>