<?php
defined('ABSPATH') || exit;




function mmwpshare_how_to_display()
{
    $mmwpssharehowtodisplay = carbon_get_theme_option('mmwpssharehowtodisplay');
    if ($mmwpssharehowtodisplay == 'auto') {
        add_action('wp_footer', 'mmwpshare_show_ui', 100);
    } else {
        add_shortcode('mmwpshare', 'mmwpshare_show_ui');
    }
}
add_action('wp', 'mmwpshare_how_to_display');



//=========================get style=========================
function mmwps_styles()
{
    $mmwps_style = carbon_get_theme_option('mmwps_style');
    return $mmwps_style;
}



function mmwpshare_show_ui()
{
    if (is_singular()) {
        $mmwpssharehowtodisplay = carbon_get_theme_option('mmwpssharehowtodisplay');
        if ($mmwpssharehowtodisplay == 'auto') {
            $mmwpsshareautoscroll = carbon_get_theme_option('mmwpsshareautoscroll');
            $datascroll = 'data-scroll="' . $mmwpsshareautoscroll . '"';
        } else {
            $datascroll = "";
        }
?>
        <div id="wpspr" class="<?php echo mmwps_styles() . ' ' . $mmwpssharehowtodisplay ?>" <?php echo $datascroll; ?>>
            <div id="wpsclose" class="<?php echo mmwps_styles() . ' ' . $mmwpssharehowtodisplay ?>">X</div>
            <div id="wpswr" class="<?php echo mmwps_styles() . ' ' . $mmwpssharehowtodisplay ?>">
                <?php mmwpshare_socials(); ?>
            </div>
        </div>
    <?php
    } else {
        // do nothing
    }
}

function mmwpshare_socials()
{
    $sosmeds = carbon_get_theme_option('mmwpws_share_to');
    foreach ($sosmeds as $sosmed) {
        //=========================facebook=========================
        $fb = $sosmed['tofacebook'];
        if ($fb == false) {
            $fbstat = 'disabled';
        } else {
            $fbstat = 'enabled';
        }

        //=========================twitter=========================
        $tw = $sosmed['totwitter'];
        if ($tw == false) {
            $twstat = 'disabled';
        } else {
            $twstat = 'enabled';
        }

        //=========================linkedin=========================
        $li = $sosmed['tolinkedin'];
        if ($li == false) {
            $listat = 'disabled';
        } else {
            $listat = 'enabled';
        }

        //=========================pinterest=========================
        $pi = $sosmed['topinterest'];
        if ($pi == false) {
            $pistat = 'disabled';
        } else {
            $pistat = 'enabled';
        }

        //=========================whatsapp=========================
        $wa = $sosmed['towhatsapp'];
        if ($wa == false) {
            $wastat = 'disabled';
        } else {
            $wastat = 'enabled';
        }

        //=========================telegram=========================
        $tg = $sosmed['totg'];
        if ($tg == false) {
            $tgstat = 'disabled';
        } else {
            $tgstat = 'enabled';
        }

        //=========================email=========================
        $em = $sosmed['toemail'];
        if ($em == false) {
            $emstat = 'disabled';
        } else {
            $emstat = 'enabled';
        }

        //=========================print=========================
        $pr = $sosmed['toprint'];
        if ($pr == false) {
            $prstat = 'disabled';
        } else {
            $prstat = 'enabled';
        }

        //=========================copy=========================
        $cp = $sosmed['tocopy'];
        if ($cp == false) {
            $cpstat = 'disabled';
        } else {
            $cpstat = 'enabled';
        }

        //=========================tiktok=========================
        $tt = $sosmed['totiktok'];
        if ($tt == false) {
            $ttstat = 'disabled';
        } else {
            $ttstat = 'enabled';
        }

        //=========================reddit=========================
        $rd = $sosmed['toreddit'];
        if ($rd == false) {
            $rdstat = 'disabled';
        } else {
            $rdstat = 'enabled';
        }

        //=========================tumblr=========================
        $tu = $sosmed['totumblr'];
        if ($tu == false) {
            $tustat = 'disabled';
        } else {
            $tustat = 'enabled';
        }

        //=========================digg=========================
        $dg = $sosmed['todigg'];
        if ($dg == false) {
            $dgstat = 'disabled';
        } else {
            $dgstat = 'enabled';
        }

        //=========================fb messenger=========================
        $fm = $sosmed['tofbmessenger'];
        if ($fm == false) {
            $fmstat = 'disabled';
        } else {
            $fmstat = 'enabled';
        }

        //=========================line=========================
        $ln = $sosmed['toline'];
        if ($ln == false) {
            $lnstat = 'disabled';
        } else {
            $lnstat = 'enabled';
        }

        //=========================pdf=========================
        $pd = $sosmed['topdf'];
        if ($pd == false) {
            $pdstat = 'disabled';
        } else {
            $pdstat = 'enabled';
        }
    ?>
        <div class="wpsitem" data-show="<?php echo $fbstat ?>"><?php echo mmwps_icon_fb(); ?></div>
        <div class="wpsitem" data-show="<?php echo $twstat ?>"><?php echo mmwps_icon_tw(); ?></div>
        <div class="wpsitem" data-show="<?php echo $listat ?>"><?php echo mmwps_icon_li(); ?></div>
        <div class="wpsitem" data-show="<?php echo $pistat ?>"><?php echo mmwps_icon_pi(); ?></div>
        <div class="wpsitem" data-show="<?php echo $wastat ?>"><?php echo mmwps_icon_wa(); ?></div>
        <div class="wpsitem" data-show="<?php echo $tgstat ?>"><?php echo mmwps_icon_tg(); ?></div>
        <div class="wpsitem" data-show="<?php echo $emstat ?>"><?php echo mmwps_icon_email(); ?></div>
        <div class="wpsitem" data-show="<?php echo $prstat ?>"><?php echo mmwps_icon_print(); ?></div>
        <div class="wpsitem" data-show="<?php echo $cpstat ?>"><?php echo mmwps_icon_copy(); ?></div>
        <div class="wpsitem" data-show="<?php echo $ttstat ?>"><?php echo mmwps_icon_tiktok(); ?></div>
        <div class="wpsitem" data-show="<?php echo $rdstat ?>"><?php echo mmwps_icon_reddit(); ?></div>
        <div class="wpsitem" data-show="<?php echo $tustat ?>"><?php echo mmwps_icon_tumblr(); ?></div>
        <div class="wpsitem" data-show="<?php echo $dgstat ?>"><?php echo mmwps_icon_digg(); ?></div>
        <div class="wpsitem" data-show="<?php echo $fmstat ?>"><?php echo mmwps_icon_fb_messanger(); ?></div>
        <div class="wpsitem" data-show="<?php echo $lnstat ?>"><?php echo mmwps_icon_line(); ?></div>
        <div class="wpsitem" data-show="<?php echo $pdstat ?>"><?php echo mmwps_icon_pdf(); ?></div>
<?php
    };
}
