<?php

/* FallenBundle:Default:home.html.twig */
class __TwigTemplate_b3fd6444f718d33e4c3c967ee05924448767eaa5f9ea2e0baddd31836899e77d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout_en.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout_en.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"container\">
    <hr>
    <div class=\"row\">


    <div class=\"col-xs-14\">
       
        <!-- Tab panes -->
        <div class=\"tab-content\">
            <div class=\"col-xs-6\">
                <div class=\"tab-pane active\">
                    <p id=\"sous-title\">News</p>
                    <hr>
                    <p><b>INTER-SCHOOLS CONCERT 2014</b><br>Saturday, May 24 at <a id=\"lien\" href=\"https://www.facebook.com/lempreinte77\">L'empreinte de Savigny le Temple</a></p>
                </div>
            </div>
            
            <div class=\"col-xs-6\">
                <div class=\"tab-pane active\">
                    <p id=\"sous-title\">Sounds</p>
                    <hr>
                    <!-- ############## BODY CODE ############## -->
                    <!-- wrapper for the whole component --> <!-- conteneur du player audio -->
                            <div id=\"componentWrapper\">

                                <div class=\"playerHolder\">

                                    <div class=\"player_controls\">
                                        <!-- previous -->
                                        <div class=\"controls_prev\"><img src='";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/prev.png"), "html", null, true);
        echo "' width='40' height='40' alt='controls_prev'/></div>
                                        <!-- pause/play -->
                                        <div class=\"controls_toggle\"><img src='";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/play.png"), "html", null, true);
        echo "' width='50' height='50' alt='controls_toggle'/></div>
                                        <!-- next -->
                                        <div class=\"controls_next\"><img src='";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/next.png"), "html", null, true);
        echo "' width='40' height='40' alt='controls_next'/></div>

                                        <!-- volume -->
                                        <div class=\"player_volume\"><img src='";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/volume.png"), "html", null, true);
        echo "' width='33' height='33' alt='player_volume'/></div>
                                        <div class=\"volume_seekbar\">
                                            <div class=\"volume_bg\"></div>
                                            <div class=\"volume_level\"></div>
                                        </div>

                                        <!-- loop -->
                                        <div class=\"player_loop\"><img src='";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/loop_on.png"), "html", null, true);
        echo "' width='33' height='33' alt='player_loop'/></div>
                                        <!-- shuffle -->
                                        <div class=\"player_shuffle\"><img src='";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/shuffle.png"), "html", null, true);
        echo "' width='33' height='33' alt='player_shuffle'/></div>
                                    </div>

                                    <!-- progress -->
                                    <div class=\"player_progress\">
                                        <div class=\"progress_bg\"></div>
                                        <div class=\"load_progress\"></div>
                                        <div class=\"play_progress\"></div>
                                    </div>

                                    <!-- song name -->
                                    <div class=\"player_mediaName_Mask\">
                                        <div class=\"player_mediaName\">Artist Name - Artist Title</div>
                                    </div>

                                    <!-- song time -->
                                    <div class=\"player_mediaTime\">
                                        <!-- current time and total time are separated so you can change the design if needed. -->
                                        <div class=\"player_mediaTime_current\">0:00&nbsp;-&nbsp;</div><div class=\"player_mediaTime_total\">0:00</div>
                                    </div>

                                    <!-- volume tooltip -->
                                    <div class=\"player_volume_tooltip\">
                                        <div class=\"player_volume_tooltip_value\">0</div>
                                    </div>

                                    <!-- progress tooltip -->
                                    <div class=\"player_progress_tooltip\">
                                        <div class=\"player_progress_tooltip_value\">0:00&nbsp;/&nbsp;0:00</div>
                                    </div>          
                                </div>

                                <div class=\"playlistHolder\">
                                    <div class=\"componentPlaylist\">
                                        <!-- playlist_inner: container for scroll -->
                                        <div class=\"playlist_inner\">

                                            <!-- List of playlists. NO EXTENSION for music file names! -->

                                            <!-- Playlist -->
                                            <ul id='playlist1' data-type='local'>
                                                <li class= \"playlistItem\" data-path=\"../audio/Fallen_Eight-Breath_Of_The_Ages-La_Cigale\" ><a class=\"playlistNonSelected\" href='#'>Breath Of The Ages - La Cigale</a></li>
                                                <li class= \"playlistItem\" data-path=\"../audio/Fallen_Eight-Worst_Nightmare-La_Cigale\" ><a class=\"playlistNonSelected\" href='#'>Worst Nightmare - La Cigale</a></li>
                                                <li class= \"playlistItem\" data-path=\"../audio/Fallen_Eight-Final-La_Cigale_Paris\" ><a class=\"playlistNonSelected\" href='#'>Final - La Cigale Paris</a></li>
                                                <li class= \"playlistItem\" data-path=\"../audio/Fallen_Eight-Batofar-Extrait\" ><a class=\"playlistNonSelected\" href='#'>Batofar - Extrait</a></li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>

                                <!-- for parsing podcast feeds -->
                                <div class=\"feedParser\"></div>
                                <!-- font calculations -->
                                <div class=\"fontMeasure\"></div>
                            </div>
                           <!-- End of wrapper for the whole component --> <!-- fin du conteneur du player audio -->
                           <!-- ############## END BODY CODE ############## -->
\t
                </div> 
            </div>
       </div>
    </div>

    <div class=\"clearfix\"></div>

    </div>
</div>
<script type=\"text/javascript\">
    function audioPlayerSetupDone(){
\t/* This will get called when component is ready to receive public function calls. */
\t//console.log('audioPlayerSetupDone');
    }
\t\t\t
    // SETTINGS
    var ap_settings = {
        /* activePlaylist: set active playlist that will be loaded on beginning (pass element 'id' attributte) */
        activePlaylist: 'playlist1',
\t\t\t\t
\t/* soundcloudApiKey: If you want to use SoundCloud music, register you own api key here for free: 
\t'http://soundcloud.com/you/apps/new' and enter Client ID */
\tsoundcloudApiKey: '',
        
        /*defaultVolume: 0-1 (Irrelevant on ios mobile) */
\tdefaultVolume:0.5,
\t/*autoPlay: true/false (false on mobile by default, important!) */
\tautoPlay:true,
\t/*randomPlay: true/false */
\trandomPlay:false,
\t/*loopingOn: true/false (loop on the end of the playlist) */
\tloopingOn:true,
\t\t\t\t
\t/* addNumbersInPlaylist: true/false. Prepend numbers in playlist items. */
\taddNumbersInPlaylist: true,
\t\t\t\t
\t/* useSongNameScroll: true/false. Use song name scrolling. */
\tuseSongNameScroll: true,
\t/* scrollSpeed: speed of the scroll (number higher than zero). */
\tscrollSpeed: 1,
\t/* scrollSeparator: String to append between scrolling song name. */
\tscrollSeparator: '&nbsp;&#42;&#42;&#42;&nbsp;',
\t\t\t\t
\t/* mediaTimeSeparator: String between current and total song time. */
\tmediaTimeSeparator: '&nbsp;-&nbsp;',
\t/* seekTooltipSeparator: String between current and total song position, for progress tooltip. */
\tseekTooltipSeparator: '&nbsp;/&nbsp;',
\t\t\t\t
\t/* useRollovers: use button rollovers, true/false. */
\tuseRollovers:false,
\t/* buttonsUrl: url of the buttons for normal and rollover state, so I dont hardcode them in jquery (rollover state is optional). */
\tbuttonsUrl: {prev: '../img/prev.png', prevOn: '../img/prev_on.png', 
\t \t next: '../img/next.png', nextOn: '../img/next_on.png', 
\t \t pause: '../img/pause.png', pauseOn: '../img/pause_on.png',
\t \t play: '../img/play.png', playOn: '../img/play_on.png',
\t \t volume: '../img/volume.png', volumeOn: '../img/volume_on.png', 
\t\t mute: '../img/mute.png', muteOn: '../img/mute_on.png', 
\t\t loop: '../img/loop.png', loopOn: '../img/loop_on.png',
\t\t shuffle: '../img/shuffle.png', shuffleOn: '../img/shuffle_on.png'}
    };
\t\t\t
    //sound manager settings (http://www.schillmania.com/projects/soundmanager2/)
    soundManager.allowScriptAccess = 'always';
    soundManager.debugMode = false;
    soundManager.noSWFCache = true;
    soundManager.useConsole = false;
    soundManager.waitForWindowLoad = true;
    soundManager.url = 'swf/';//path to flash files
    soundManager.flashVersion = 9;
    soundManager.preferFlash = false; 
    soundManager.useHTML5Audio = true;
\t\t\t
    //**********Start Delete this if you want to use just flash**********//
    var audio = document.createElement('audio'), mp3Support, oggSupport;
    if (audio.canPlayType) {
        mp3Support = !!audio.canPlayType && \"\" != audio.canPlayType('audio/mpeg');
        oggSupport = !!audio.canPlayType && \"\" != audio.canPlayType('audio/ogg; codecs=\"vorbis\"');
    }else{
        //for IE<9
\tmp3Support = true;
        oggSupport = false;
    }
    //console.log('mp3Support = ', mp3Support, ' , oggSupport = ', oggSupport);
\t\t\t
    /*
    FF - false, true
    OP - false, true

    IE9 - true, false 
    SF - true, false 
\t
    CH - true, true
    */
\t\t
    soundManager.audioFormats = {
        'mp3': {
            'type': ['audio/mpeg; codecs=\"mp3\"', 'audio/mpeg', 'audio/mp3', 'audio/MPA', 'audio/mpa-robust'],
            'required': mp3Support
        },
\t'mp4': {
            'related': ['aac','m4a'],
            'type': ['audio/mp4; codecs=\"mp4a.40.2\"', 'audio/aac', 'audio/x-m4a', 'audio/MP4A-LATM', 'audio/mpeg4-generic'],
            'required': false
\t},
\t'ogg': {
            'type': ['audio/ogg; codecs=vorbis'],
            'required': oggSupport
\t},
\t'wav': {
            'type': ['audio/wav; codecs=\"1\"', 'audio/wav', 'audio/wave', 'audio/x-wav'],
            'required': false
\t}
    };
    //**********End Delete this if you want to use just flash**********//
\t\t\t
    jQuery(document).ready(function() {
        var \$ = jQuery.noConflict();
        \$.html5audio('#componentWrapper', ap_settings, 'sound_id1');
        ap_settings = null;
    });
\t\t
</script>
";
    }

    public function getTemplateName()
    {
        return "FallenBundle:Default:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 49,  88 => 47,  78 => 40,  72 => 37,  67 => 35,  62 => 33,  31 => 4,  28 => 3,);
    }
}
