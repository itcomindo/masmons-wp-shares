<?php
defined('ABSPATH') || exit;

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'mmwpshare_register_fields');
function mmwpshare_register_fields()
{
    Container::make('theme_options', 'WP Share')

        ->add_fields([
            Field::make('separator', 'mmwpsoptionsep', 'Options')
                ->set_classes('mmwpscbSeparator'),

            //=========================chekbox to enabling and disabling mmwpshare=========================
            Field::make('checkbox', 'mmwpsshareenable', 'Enable WP Share')
                ->set_classes('mmwpsharecbox')
                ->set_option_value('yes')
                ->set_default_value(false),

            //=========================select how to display: auto or shortcode=========================
            Field::make('select', 'mmwpssharehowtodisplay', 'How To Display')
                ->add_options([
                    'auto' => 'Auto',
                    'shortcode' => 'Shortcode',
                ]),

            //=========================input type number, how many percent scroll down to show mmwpshar if how to display is auto=========================
            Field::make('text', 'mmwpsshareautoscroll', 'Percent Scroll Down to Show WP Share')
                ->set_attribute('type', 'number')
                ->set_help_text('Enter number only, without %')
                ->set_default_value(50),

            //=========================select to select position=========================


            //=========================select to select style=========================
            Field::make('select', 'mmwps_style', 'Select Style')
                ->add_options([
                    'style1' => 'Style 1',
                    'style2' => 'Style 2',
                    'style3' => 'Style 3',
                ]),



            Field::make('separator', 'mmwpssosmedchoosesep', 'Choose Social Media')
                ->set_classes('mmwpscbSeparator'),

            Field::make('complex', 'mmwpws_share_to', 'Share To')
                ->set_max(1)
                ->add_fields([

                    // to facebook
                    Field::make('checkbox', 'tofacebook', 'Facebook')
                        ->set_classes('mmwpsharecbox')
                        ->set_option_value('yes')
                        ->set_width(20),

                    // to twitter
                    Field::make('checkbox', 'totwitter', 'Twitter')
                        ->set_option_value('yes')
                        ->set_width(20),

                    // to linkedin
                    Field::make('checkbox', 'tolinkedin', 'Linkedin')
                        ->set_width(20)
                        ->set_option_value('yes'),

                    // to pinterest
                    Field::make('checkbox', 'topinterest', 'Pinterest')
                        ->set_width(20)
                        ->set_option_value('yes'),

                    // to whatsapp
                    Field::make('checkbox', 'towhatsapp', 'Whatsapp')
                        ->set_width(20)
                        ->set_option_value('yes'),

                    // to telegram
                    Field::make('checkbox', 'totelegram', 'Telegram')
                        ->set_width(20)
                        ->set_option_value('yes'),

                    // to email
                    Field::make('checkbox', 'toemail', 'Email')
                        ->set_width(20)
                        ->set_option_value('yes'),

                    // to print
                    Field::make('checkbox', 'toprint', 'Print')
                        ->set_width(20)
                        ->set_option_value('yes'),

                    // to copy
                    Field::make('checkbox', 'tocopy', 'Copy')
                        ->set_width(20)
                        ->set_option_value('yes'),

                    // to tiktok
                    Field::make('checkbox', 'totiktok', 'Tiktok')
                        ->set_width(20)
                        ->set_option_value('yes'),

                    // to reddit
                    Field::make('checkbox', 'toreddit', 'Reddit')
                        ->set_width(20)
                        ->set_option_value('yes'),

                    // to tumblr
                    Field::make('checkbox', 'totumblr', 'Tumblr')
                        ->set_width(20)
                        ->set_option_value('yes'),

                    // to digg
                    Field::make('checkbox', 'todigg', 'Digg')
                        ->set_width(20)
                        ->set_option_value('yes'),

                    // to facebook messenger
                    Field::make('checkbox', 'tofbmessenger', 'Facebook Messenger')
                        ->set_width(20)
                        ->set_option_value('yes'),

                    // to line
                    Field::make('checkbox', 'toline', 'Line')
                        ->set_width(20)
                        ->set_option_value('yes'),

                    //to pdf
                    Field::make('checkbox', 'topdf', 'PDF')
                        ->set_width(20)
                        ->set_option_value('yes'),

                ]),






        ]);
}
