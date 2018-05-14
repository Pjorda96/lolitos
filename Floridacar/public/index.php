<?php
/**
 * Created by PhpStorm.
 * User: Pablo
 * Date: 14/05/2018
 * Time: 9:02
 */

?>

<!DOCTYPE html>
<html  dir="ltr" lang="es" xml:lang="es">
<head>
    <title>Área personal</title>
    <link rel="icon" href="//www.floridaoberta.com/pluginfile.php/1/theme_adaptable/favicon/1519629762/favicon.ico" />

    <link rel="stylesheet" href="https://www.floridaoberta.com/theme/adaptable/style/font-awesome.min.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400'
          rel='stylesheet'
          type='text/css'>

    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400'
          rel='stylesheet'
          type='text/css'>

    <link href='https://fonts.googleapis.com/css?family=Audiowide:400'
          rel='stylesheet'
          type='text/css'>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="moodle, Área personal" />
    <link rel="stylesheet" type="text/css" href="https://www.floridaoberta.com/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.css" /><script id="firstthemesheet" type="text/css">/** Required in order to fix style inclusion problems in IE with YUI **/</script><link rel="stylesheet" type="text/css" href="https://www.floridaoberta.com/theme/styles.php/adaptable/1519629762/all" />
    <script type="text/javascript">
        //<![CDATA[
        var M = {}; M.yui = {};
        M.pageloadstarttime = new Date();
        M.cfg = {"wwwroot":"https:\/\/www.floridaoberta.com","sesskey":"3wwo8un9vE","themerev":"1519629762","slasharguments":1,"theme":"adaptable","iconsystemmodule":"core\/icon_system_standard","jsrev":"1507124093","admin":"admin","svgicons":true,"usertimezone":"Europa\/Par\u00eds","contextid":139118};var yui1ConfigFn = function(me) {if(/-skin|reset|fonts|grids|base/.test(me.name)){me.type='css';me.path=me.path.replace(/\.js/,'.css');me.path=me.path.replace(/\/yui2-skin/,'/assets/skins/sam/yui2-skin')}};
        var yui2ConfigFn = function(me) {var parts=me.name.replace(/^moodle-/,'').split('-'),component=parts.shift(),module=parts[0],min='-min';if(/-(skin|core)$/.test(me.name)){parts.pop();me.type='css';min=''}
            if(module){var filename=parts.join('-');me.path=component+'/'+module+'/'+filename+min+'.'+me.type}else{me.path=component+'/'+component+'.'+me.type}};
        YUI_config = {"debug":false,"base":"https:\/\/www.floridaoberta.com\/lib\/yuilib\/3.17.2\/","comboBase":"https:\/\/www.floridaoberta.com\/theme\/yui_combo.php?","combine":true,"filter":null,"insertBefore":"firstthemesheet","groups":{"yui2":{"base":"https:\/\/www.floridaoberta.com\/lib\/yuilib\/2in3\/2.9.0\/build\/","comboBase":"https:\/\/www.floridaoberta.com\/theme\/yui_combo.php?","combine":true,"ext":false,"root":"2in3\/2.9.0\/build\/","patterns":{"yui2-":{"group":"yui2","configFn":yui1ConfigFn}}},"moodle":{"name":"moodle","base":"https:\/\/www.floridaoberta.com\/theme\/yui_combo.php?m\/1507124093\/","combine":true,"comboBase":"https:\/\/www.floridaoberta.com\/theme\/yui_combo.php?","ext":false,"root":"m\/1507124093\/","patterns":{"moodle-":{"group":"moodle","configFn":yui2ConfigFn}},"filter":null,"modules":{"moodle-core-chooserdialogue":{"requires":["base","panel","moodle-core-notification"]},"moodle-core-popuphelp":{"requires":["moodle-core-tooltip"]},"moodle-core-lockscroll":{"requires":["plugin","base-build"]},"moodle-core-dragdrop":{"requires":["base","node","io","dom","dd","event-key","event-focus","moodle-core-notification"]},"moodle-core-blocks":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification"]},"moodle-core-languninstallconfirm":{"requires":["base","node","moodle-core-notification-confirm","moodle-core-notification-alert"]},"moodle-core-checknet":{"requires":["base-base","moodle-core-notification-alert","io-base"]},"moodle-core-actionmenu":{"requires":["base","event","node-event-simulate"]},"moodle-core-event":{"requires":["event-custom"]},"moodle-core-dock":{"requires":["base","node","event-custom","event-mouseenter","event-resize","escape","moodle-core-dock-loader","moodle-core-event"]},"moodle-core-dock-loader":{"requires":["escape"]},"moodle-core-maintenancemodetimer":{"requires":["base","node"]},"moodle-core-tooltip":{"requires":["base","node","io-base","moodle-core-notification-dialogue","json-parse","widget-position","widget-position-align","event-outside","cache-base"]},"moodle-core-notification":{"requires":["moodle-core-notification-dialogue","moodle-core-notification-alert","moodle-core-notification-confirm","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-core-notification-dialogue":{"requires":["base","node","panel","escape","event-key","dd-plugin","moodle-core-widget-focusafterclose","moodle-core-lockscroll"]},"moodle-core-notification-alert":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-confirm":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-exception":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-ajaxexception":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-handlebars":{"condition":{"trigger":"handlebars","when":"after"}},"moodle-core-formchangechecker":{"requires":["base","event-focus","moodle-core-event"]},"moodle-core_availability-form":{"requires":["base","node","event","event-delegate","panel","moodle-core-notification-dialogue","json"]},"moodle-backup-backupselectall":{"requires":["node","event","node-event-simulate","anim"]},"moodle-backup-confirmcancel":{"requires":["node","node-event-simulate","moodle-core-notification-confirm"]},"moodle-course-util":{"requires":["node"],"use":["moodle-course-util-base"],"submodules":{"moodle-course-util-base":{},"moodle-course-util-section":{"requires":["node","moodle-course-util-base"]},"moodle-course-util-cm":{"requires":["node","moodle-course-util-base"]}}},"moodle-course-dragdrop":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification","moodle-course-coursebase","moodle-course-util"]},"moodle-course-categoryexpander":{"requires":["node","event-key"]},"moodle-course-management":{"requires":["base","node","io-base","moodle-core-notification-exception","json-parse","dd-constrain","dd-proxy","dd-drop","dd-delegate","node-event-delegate"]},"moodle-course-modchooser":{"requires":["moodle-core-chooserdialogue","moodle-course-coursebase"]},"moodle-course-formatchooser":{"requires":["base","node","node-event-simulate"]},"moodle-form-shortforms":{"requires":["node","base","selector-css3","moodle-core-event"]},"moodle-form-passwordunmask":{"requires":[]},"moodle-form-showadvanced":{"requires":["node","base","selector-css3"]},"moodle-form-dateselector":{"requires":["base","node","overlay","calendar"]},"moodle-question-chooser":{"requires":["moodle-core-chooserdialogue"]},"moodle-question-preview":{"requires":["base","dom","event-delegate","event-key","core_question_engine"]},"moodle-question-qbankmanager":{"requires":["node","selector-css3"]},"moodle-question-searchform":{"requires":["base","node"]},"moodle-availability_completion-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_date-form":{"requires":["base","node","event","io","moodle-core_availability-form"]},"moodle-availability_grade-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_group-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_grouping-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_profile-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-qtype_ddimageortext-dd":{"requires":["node","dd","dd-drop","dd-constrain"]},"moodle-qtype_ddimageortext-form":{"requires":["moodle-qtype_ddimageortext-dd","form_filepicker"]},"moodle-qtype_ddmarker-form":{"requires":["moodle-qtype_ddmarker-dd","form_filepicker","graphics","escape"]},"moodle-qtype_ddmarker-dd":{"requires":["node","event-resize","dd","dd-drop","dd-constrain","graphics"]},"moodle-qtype_ddwtos-dd":{"requires":["node","dd","dd-drop","dd-constrain"]},"moodle-mod_assign-history":{"requires":["node","transition"]},"moodle-mod_forum-subscriptiontoggle":{"requires":["base-base","io-base"]},"moodle-mod_quiz-util":{"requires":["node","moodle-core-actionmenu"],"use":["moodle-mod_quiz-util-base"],"submodules":{"moodle-mod_quiz-util-base":{},"moodle-mod_quiz-util-slot":{"requires":["node","moodle-mod_quiz-util-base"]},"moodle-mod_quiz-util-page":{"requires":["node","moodle-mod_quiz-util-base"]}}},"moodle-mod_quiz-toolboxes":{"requires":["base","node","event","event-key","io","moodle-mod_quiz-quizbase","moodle-mod_quiz-util-slot","moodle-core-notification-ajaxexception"]},"moodle-mod_quiz-quizquestionbank":{"requires":["base","event","node","io","io-form","yui-later","moodle-question-qbankmanager","moodle-core-notification-dialogue"]},"moodle-mod_quiz-autosave":{"requires":["base","node","event","event-valuechange","node-event-delegate","io-form"]},"moodle-mod_quiz-questionchooser":{"requires":["moodle-core-chooserdialogue","moodle-mod_quiz-util","querystring-parse"]},"moodle-mod_quiz-dragdrop":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification","moodle-mod_quiz-quizbase","moodle-mod_quiz-util-base","moodle-mod_quiz-util-page","moodle-mod_quiz-util-slot","moodle-course-util"]},"moodle-mod_quiz-repaginate":{"requires":["base","event","node","io","moodle-core-notification-dialogue"]},"moodle-mod_quiz-randomquestion":{"requires":["base","event","node","io","moodle-core-notification-dialogue"]},"moodle-mod_quiz-modform":{"requires":["base","node","event"]},"moodle-mod_quiz-quizbase":{"requires":["base","node"]},"moodle-message_airnotifier-toolboxes":{"requires":["base","node","io"]},"moodle-filter_glossary-autolinker":{"requires":["base","node","io-base","json-parse","event-delegate","overlay","moodle-core-event","moodle-core-notification-alert","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-filter_mathjaxloader-loader":{"requires":["moodle-core-event"]},"moodle-editor_atto-editor":{"requires":["node","transition","io","overlay","escape","event","event-simulate","event-custom","node-event-html5","node-event-simulate","yui-throttle","moodle-core-notification-dialogue","moodle-core-notification-confirm","moodle-editor_atto-rangy","handlebars","timers","querystring-stringify"]},"moodle-editor_atto-plugin":{"requires":["node","base","escape","event","event-outside","handlebars","event-custom","timers","moodle-editor_atto-menu"]},"moodle-editor_atto-menu":{"requires":["moodle-core-notification-dialogue","node","event","event-custom"]},"moodle-editor_atto-rangy":{"requires":[]},"moodle-report_eventlist-eventfilter":{"requires":["base","event","node","node-event-delegate","datatable","autocomplete","autocomplete-filters"]},"moodle-report_loglive-fetchlogs":{"requires":["base","event","node","io","node-event-delegate"]},"moodle-gradereport_grader-gradereporttable":{"requires":["base","node","event","handlebars","overlay","event-hover"]},"moodle-gradereport_history-userselector":{"requires":["escape","event-delegate","event-key","handlebars","io-base","json-parse","moodle-core-notification-dialogue"]},"moodle-tool_capability-search":{"requires":["base","node"]},"moodle-tool_lp-dragdrop-reorder":{"requires":["moodle-core-dragdrop"]},"moodle-tool_monitor-dropdown":{"requires":["base","event","node"]},"moodle-assignfeedback_editpdf-editor":{"requires":["base","event","node","io","graphics","json","event-move","event-resize","transition","querystring-stringify-simple","moodle-core-notification-dialog","moodle-core-notification-alert","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-atto_accessibilitychecker-button":{"requires":["color-base","moodle-editor_atto-plugin"]},"moodle-atto_accessibilityhelper-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_align-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_bold-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_charmap-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_clear-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_collapse-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_emoticon-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_equation-button":{"requires":["moodle-editor_atto-plugin","moodle-core-event","io","event-valuechange","tabview","array-extras"]},"moodle-atto_html-button":{"requires":["moodle-editor_atto-plugin","event-valuechange"]},"moodle-atto_image-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_indent-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_italic-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_link-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_managefiles-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_managefiles-usedfiles":{"requires":["node","escape"]},"moodle-atto_media-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_noautolink-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_orderedlist-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_rtl-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_strike-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_subscript-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_superscript-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_table-button":{"requires":["moodle-editor_atto-plugin","moodle-editor_atto-menu","event","event-valuechange"]},"moodle-atto_title-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_underline-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_undo-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_unorderedlist-button":{"requires":["moodle-editor_atto-plugin"]}}},"gallery":{"name":"gallery","base":"https:\/\/www.floridaoberta.com\/lib\/yuilib\/gallery\/","combine":true,"comboBase":"https:\/\/www.floridaoberta.com\/theme\/yui_combo.php?","ext":false,"root":"gallery\/1507124093\/","patterns":{"gallery-":{"group":"gallery"}}}},"modules":{"core_filepicker":{"name":"core_filepicker","fullpath":"https:\/\/www.floridaoberta.com\/lib\/javascript.php\/1507124093\/repository\/filepicker.js","requires":["base","node","node-event-simulate","json","async-queue","io-base","io-upload-iframe","io-form","yui2-treeview","panel","cookie","datatable","datatable-sort","resize-plugin","dd-plugin","escape","moodle-core_filepicker","moodle-core-notification-dialogue"]},"core_comment":{"name":"core_comment","fullpath":"https:\/\/www.floridaoberta.com\/lib\/javascript.php\/1507124093\/comment\/comment.js","requires":["base","io-base","node","json","yui2-animation","overlay","escape"]},"mathjax":{"name":"mathjax","fullpath":"https:\/\/cdnjs.cloudflare.com\/ajax\/libs\/mathjax\/2.7.1\/MathJax.js?delayStartupUntil=configured"}}};
        M.yui.loader = {modules: {}};

        //]]>
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body  id="page-my-index" class="format-site  path-my safari dir-ltr lang-es yui-skin-sam yui3-skin-sam www-floridaoberta-com pagelayout-mydashboard course-1 context-139118 two-column  has-region-content empty-region-content has-region-side-post empty-region-side-post has-region-middle empty-region-middle has-region-frnt-footer empty-region-frnt-footer has-region-frnt-market-a used-region-frnt-market-a has-region-frnt-market-b used-region-frnt-market-b has-region-frnt-market-c used-region-frnt-market-c has-region-frnt-market-d empty-region-frnt-market-d has-region-frnt-market-e empty-region-frnt-market-e has-region-frnt-market-f empty-region-frnt-market-f has-region-frnt-market-g empty-region-frnt-market-g has-region-frnt-market-h empty-region-frnt-market-h has-region-frnt-market-i empty-region-frnt-market-i has-region-frnt-market-j empty-region-frnt-market-j has-region-frnt-market-k empty-region-frnt-market-k has-region-frnt-market-l empty-region-frnt-market-l has-region-frnt-market-m empty-region-frnt-market-m has-region-frnt-market-n empty-region-frnt-market-n has-region-frnt-market-o empty-region-frnt-market-o has-region-frnt-market-p empty-region-frnt-market-p has-region-frnt-market-q empty-region-frnt-market-q has-region-frnt-market-r empty-region-frnt-market-r has-region-frnt-market-s empty-region-frnt-market-s has-region-frnt-market-t empty-region-frnt-market-t layout-option-langmenu">

<div class="skiplinks">
    <a href="#maincontent" class="skip">Saltar a contenido principal</a>
</div><script type="text/javascript" src="https://www.floridaoberta.com/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.js"></script><script type="text/javascript" src="https://www.floridaoberta.com/theme/jquery.php/core/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="https://www.floridaoberta.com/theme/jquery.php/theme_adaptable/pace-min.js"></script>
<script type="text/javascript" src="https://www.floridaoberta.com/theme/jquery.php/theme_adaptable/jquery-flexslider-min.js"></script>
<script type="text/javascript" src="https://www.floridaoberta.com/theme/jquery.php/theme_adaptable/tickerme.js"></script>
<script type="text/javascript" src="https://www.floridaoberta.com/theme/jquery.php/theme_adaptable/jquery-easing-min.js"></script>
<script type="text/javascript" src="https://www.floridaoberta.com/theme/jquery.php/theme_adaptable/adaptable.js"></script>
<script type="text/javascript" src="https://www.floridaoberta.com/lib/javascript.php/1507124093/lib/javascript-static.js"></script>
<script type="text/javascript">
    //<![CDATA[
    document.body.className += ' jsenabled';
    //]]>
</script>



<div id="page" class="container-fluid fullin showblockicons">

    <header id="page-header-wrapper"  >
        <div id="above-header">
            <div class="clearfix container userhead">
                <div class="pull-left">
                    <ul class="usermenu2 nav navbar-nav navbar-right"></ul>            </div>

                <div class="headermenu row">
                    <div class="dropdown secondone">
                        <a class="dropdown-toggle usermendrop" data-toggle="dropdown" data-target="#">

                            <img src="https://www.floridaoberta.com/pluginfile.php/139118/user/icon/adaptable/f1?rev=3436228" alt="Imagen de PABLO JORDA GARCIA" title="Imagen de PABLO JORDA GARCIA" class="userpicture" width="80" height="80" />PABLO                <span class="fa fa-angle-down"></span>
                        </a>

                        <ul class="dropdown-menu usermen" role="menu">

                            <li><a href="https://www.floridaoberta.com/my" title="Área personal"><i class="fa fa-dashboard"></i>Área personal</a></li><li><a href="https://www.floridaoberta.com/user/profile.php" title="Ver perfil"><i class="fa fa-user"></i>Ver perfil</a></li><li><a href="https://www.floridaoberta.com/user/edit.php" title="Editar perfil"><i class="fa fa-cog"></i>Editar perfil</a></li><li><a href="https://www.floridaoberta.com/grade/report/overview/index.php" title="Calificaciones"><i class="fa fa-list-alt"></i>Calificaciones</a></li><li><a href="https://www.floridaoberta.com/user/preferences.php" title="Preferencias"><i class="fa fa-cog"></i>Preferencias</a></li><li><a href="https://www.floridaoberta.com/calendar/view.php" title="Calendario"><i class="fa fa-calendar"></i>Calendario</a></li><li><a href="https://www.floridaoberta.com/login/logout.php?sesskey=3wwo8un9vE" title="Cerrar sesión"><i class="fa fa-sign-out"></i>Cerrar sesión</a></li>
                        </ul>
                    </div>
                </div>

                <div style="float: right; position: relative; display: inline; margin-left: 15px; height:20px;">
                    <ul class="nav navbar-nav"><li class="dropdown langmenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Idioma"><i class="fa fa-globe fa-lg"></i><span class="langdesc">Español - Internacional ‎(es)‎</span></a><ul class="dropdown-menu"><li><a title="Català ‎(ca)‎" href="https://www.floridaoberta.com/my/index.php?lang=ca">Català ‎(ca)‎</a></li><li><a title="Català (Valencià) ‎(ca_valencia)‎" href="https://www.floridaoberta.com/my/index.php?lang=ca_valencia">Català (Valencià) ‎(ca_valencia)‎</a></li><li><a title="English ‎(en)‎" href="https://www.floridaoberta.com/my/index.php?lang=en">English ‎(en)‎</a></li><li><a title="Español - Internacional ‎(es)‎" href="https://www.floridaoberta.com/my/index.php?lang=es">Español - Internacional ‎(es)‎</a></li></ul></ul></div>

                <div class="popover-region collapsed popover-region-messages"
                     id="nav-message-popover-container" data-userid="8628"
                     data-region="popover-region">
                    <div class="popover-region-toggle nav-link"
                         data-region="popover-region-toggle"
                         aria-role="button"
                         aria-controls="popover-region-container-5af92f6f81f535af92f6f2d4c028"
                         aria-haspopup="true"
                         aria-label="Mostrar la ventana de mensajes cuando no hay mensajes nuevos"
                         tabindex="0">
                        <img class="icon " alt="Mostrar/ocultar menú de mensajes" title="Mostrar/ocultar menú de mensajes" src="https://www.floridaoberta.com/theme/image.php/adaptable/core/1519629762/t/message" />
                        <div class="count-container hidden" data-region="count-container"></div>

                    </div>
                    <div
                        id="popover-region-container-5af92f6f81f535af92f6f2d4c028"
                        class="popover-region-container"
                        data-region="popover-region-container"
                        aria-expanded="false"
                        aria-hidden="true"
                        aria-label="Ventana de notificación"
                        role="region">
                        <div class="popover-region-header-container">
                            <h3 class="popover-region-header-text" data-region="popover-region-header-text">Mensajes</h3>
                            <div class="popover-region-header-actions" data-region="popover-region-header-actions">        <div class="newmessage-link">
                                    <a href="https://www.floridaoberta.com/message/index.php?contactsfirst=1">Nuevo mensaje
                                    </a>
                                </div>
                                <div class="hover-tooltip-container">
                                    <a class="mark-all-read-button"
                                       href="#"
                                       role="button"
                                       title="Marcar todo como leído"
                                       data-action="mark-all-read">
                                        <span class="normal-icon"><img class="icon " alt="Marcar todo como leído" title="Marcar todo como leído" src="https://www.floridaoberta.com/theme/image.php/adaptable/core/1519629762/t/markasread" /></span>
                                        <span class="loading-icon"><img class="icon " alt="Cargando" title="Cargando" src="https://www.floridaoberta.com/theme/image.php/adaptable/core/1519629762/y/loading" /></span>
                                    </a>

                                    <div class="hover-tooltip">
                                        Marcar todo como leído
                                    </div>
                                </div>
                                <div class="hover-tooltip-container">
                                    <a href="https://www.floridaoberta.com/message/edit.php?id=8628"
                                       title="Preferencias de mensajes">
                                        <img class="icon " alt="Preferencias de mensajes" title="Preferencias de mensajes" src="https://www.floridaoberta.com/theme/image.php/adaptable/core/1519629762/i/settings" />
                                    </a>

                                    <div class="hover-tooltip">
                                        Preferencias de mensajes
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="popover-region-content-container" data-region="popover-region-content-container">
                            <div class="popover-region-content" data-region="popover-region-content">
                                <div class="messages" data-region="messages" role="log" aria-busy="false" aria-atomic="false" aria-relevant="additions"></div>
                                <div class="empty-message" data-region="empty-message" tabindex="0">No hay mensajes en espera</div>

                            </div>
                            <span class="loading-icon"><img class="icon " alt="Cargando" title="Cargando" src="https://www.floridaoberta.com/theme/image.php/adaptable/core/1519629762/y/loading" /></span>
                        </div>
                        <a class="see-all-link"
                           href="https://www.floridaoberta.com/message/index.php">
                            <div class="popover-region-footer-container">
                                <div class="popover-region-seeall-text">Ver todo</div>
                            </div>
                        </a>
                    </div>
                </div><div class="popover-region collapsed popover-region-notifications"
                           id="nav-notification-popover-container" data-userid="8628"
                           data-region="popover-region">
                    <div class="popover-region-toggle nav-link"
                         data-region="popover-region-toggle"
                         aria-role="button"
                         aria-controls="popover-region-container-5af92f6f82ef45af92f6f2d4c029"
                         aria-haspopup="true"
                         aria-label="Mostrar la ventana de notificaciones cuando no hay ninguna"
                         tabindex="0">
                        <img class="icon " alt="Mostrar/ocultar menú de notificaciones" title="Mostrar/ocultar menú de notificaciones" src="https://www.floridaoberta.com/theme/image.php/adaptable/core/1519629762/i/notifications" />
                        <div class="count-container hidden" data-region="count-container"></div>

                    </div>
                    <div
                        id="popover-region-container-5af92f6f82ef45af92f6f2d4c029"
                        class="popover-region-container"
                        data-region="popover-region-container"
                        aria-expanded="false"
                        aria-hidden="true"
                        aria-label="Ventana de notificación"
                        role="region">
                        <div class="popover-region-header-container">
                            <h3 class="popover-region-header-text" data-region="popover-region-header-text">Notificaciones</h3>
                            <div class="popover-region-header-actions" data-region="popover-region-header-actions">        <div class="hover-tooltip-container">
                                    <a class="mark-all-read-button"
                                       href="#"
                                       title="Marcar todo como leído"
                                       data-action="mark-all-read"
                                       role="button">
                                        <span class="normal-icon"><img class="icon " alt="Marcar todo como leído" title="Marcar todo como leído" src="https://www.floridaoberta.com/theme/image.php/adaptable/core/1519629762/t/markasread" /></span>
                                        <span class="loading-icon"><img class="icon " alt="Cargando" title="Cargando" src="https://www.floridaoberta.com/theme/image.php/adaptable/core/1519629762/y/loading" /></span>
                                    </a>

                                    <div class="hover-tooltip">
                                        Marcar todo como leído
                                    </div>
                                </div>
                                <div class="hover-tooltip-container">
                                    <a href="https://www.floridaoberta.com/message/notificationpreferences.php?userid=8628"
                                       title="Preferencias de notificación">
                                        <img class="icon " alt="Preferencias de notificación" title="Preferencias de notificación" src="https://www.floridaoberta.com/theme/image.php/adaptable/core/1519629762/i/settings" />
                                    </a>

                                    <div class="hover-tooltip">
                                        Preferencias de notificación
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="popover-region-content-container" data-region="popover-region-content-container">
                            <div class="popover-region-content" data-region="popover-region-content">
                                <div class="all-notifications"
                                     data-region="all-notifications"
                                     role="log"
                                     aria-busy="false"
                                     aria-atomic="false"
                                     aria-relevant="additions"></div>
                                <div class="empty-message" tabindex="0" data-region="empty-message">No tienes notificaciones</div>

                            </div>
                            <span class="loading-icon"><img class="icon " alt="Cargando" title="Cargando" src="https://www.floridaoberta.com/theme/image.php/adaptable/core/1519629762/y/loading" /></span>
                        </div>
                        <a class="see-all-link"
                           href="https://www.floridaoberta.com/message/output/popup/notifications.php">
                            <div class="popover-region-footer-container">
                                <div class="popover-region-seeall-text">Ver todo</div>
                            </div>
                        </a>
                    </div>
                </div>    </div>
        </div>



        <div id="page-header" class="clearfix container">

            <div id="logocontainer"><a href='https://www.floridaoberta.com'><img src=//www.floridaoberta.com/pluginfile.php/1/theme_adaptable/logo/1519629762/FLORIDA-UNIVERSITARIA.png alt="logo" id="logo" /></a></div>

            <div class="socialbox pull-right">
                <div class="socialbox"><a target="_blank" title="Twitter" href="https://twitter.com/floridauni?lang=es"><i class="fa fa-twitter-square
"></i></a><a target="_blank" title="Facebook" href="https://www.facebook.com/floridauniversitaria"><i class="fa fa-facebook-square"></i></a></div>    </div>


            <div id="course-header">
            </div>
        </div>

        <div id="navwrap">
            <div class="container">
                <div class="navbar">
                    <nav role="navigation" class="navbar-inner">
                        <div class="container-fluid">
                            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </a>
                            <div class="nav-collapse collapse ">
                                <ul class="nav navbar-nav"><li><a title="" href="https://www.floridaoberta.com/my/index.php"><i class="fa fa-dashboard"></i> Área personal</a></li><li><a title="" href="https://www.floridaoberta.com/calendar/view.php"><i class="fa fa-calendar"></i> Eventos</a></li><li class="dropdown"><a href="https://www.floridaoberta.com/my/index.php" class="dropdown-toggle" data-toggle="dropdown" title=""><i class="fa fa-briefcase"></i>Mis Cursos</a><ul class="dropdown-menu"><li><a title="" href="https://www.floridaoberta.com/course/view.php?id=3207">DAW-Proyecto Integrado 1</a></li><li><a title="" href="https://www.floridaoberta.com/course/view.php?id=2133">DAW-Lenguajes de Marcas y S...</a></li><li><a title="" href="https://www.floridaoberta.com/course/view.php?id=2132">DAW-Bases de datos</a></li><li><a title="" href="https://www.floridaoberta.com/course/view.php?id=2131">DAW-Sistemas Informáticos</a></li><li><a title="" href="https://www.floridaoberta.com/course/view.php?id=2130">DAW-Programación</a></li><li><a title="" href="https://www.floridaoberta.com/course/view.php?id=2129">DAW-Inglés I</a></li><li><a title="" href="https://www.floridaoberta.com/course/view.php?id=2128">DAW-Formación y Orientación...</a></li><li><a title="" href="https://www.floridaoberta.com/course/view.php?id=2127">DAW-Entornos de Desarrollo</a></li><li><a title="" href="https://www.floridaoberta.com/course/view.php?id=2090">DAW-Tutoría</a></li></ul><li><a title="Horarios" href="https://www.floridaoberta.com/local/horarios/student_view.php"><i class="fa  fa-clock-o"></i> Horarios</a></li></ul><ul class="nav navbar-nav"></ul>
                                <ul class="nav pull-right">
                                    <li class="hbl">
                                        <a href="#" class="moodlezoom" title="Ocultar bloques">
                                            <i class="fa fa-indent fa-lg"></i>
                                            <span class="zoomdesc">Ocultar bloques</span>
                                        </a>
                                    </li>
                                    <li class="sbl">
                                        <a href="#" class="moodlezoom" title="Mostrar bloques">
                                            <i class="fa fa-outdent fa-lg"></i>
                                            <span class="zoomdesc">Mostrar bloques</span>
                                        </a>
                                    </li>
                                </ul>
                                <div id="edittingbutton" class="pull-right breadcrumb-button">
                                    <div class="singlebutton"><form method="post" action="https://www.floridaoberta.com/my/index.php"><div><input type="submit" value="Personalizar esta página" /><input type="hidden" name="edit" value="1" /><input type="hidden" name="sesskey" value="3wwo8un9vE" /></div></form></div>                            </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>


    <div id="frontblockregion" class="container">
        <div class="row-fluid">
            <div class="row" style="margin-left: 0px;"><div class="span3"><aside id="block-region-frnt-market-a" class="block-region-front block-region" data-blockregion="frnt-market-a" data-droptarget="1"><a class="skip skip-block" id="fsb-1" href="#sb-1">Saltar Navegación</a><div id="inst4" class="block_navigation  block" role="navigation" data-block="navigation" data-instanceid="4" aria-labelledby="instance-4-header" data-dockable="1"><div class="header"><div class="title"><div class="block_action"></div><h2 id="instance-4-header">Navegación</h2></div></div><div class="content"><ul class="block_tree list" role="tree" data-ajax-loader="block_navigation/nav_loader"><li class="type_unknown depth_1 contains_branch current_branch" aria-labelledby="label_1_1"><p class="tree_item branch active_tree_node canexpand navigation_node" role="treeitem" aria-expanded="true" aria-owns="random5af92f6f2d4c01_group" data-collapsible="false"><a tabindex="-1" id="label_1_1" href="https://www.floridaoberta.com/my/">Área personal</a></p><ul id="random5af92f6f2d4c01_group" role="group"><li class="type_setting depth_2 item_with_icon" aria-labelledby="label_2_2"><p class="tree_item hasicon" role="treeitem"><a tabindex="-1" id="label_2_2" href="https://www.floridaoberta.com/?redirect=0"><img class="icon navicon" alt="" src="https://www.floridaoberta.com/theme/image.php/adaptable/core/1519629762/i/navigationitem" /><span class="item-content-wrap">Inicio del sitio</span></a></p></li><li class="type_course depth_2 contains_branch" aria-labelledby="label_2_3"><p class="tree_item branch" role="treeitem" aria-expanded="false" aria-owns="random5af92f6f2d4c03_group"><span tabindex="-1" id="label_2_3" title="Florida Oberta">Páginas del sitio</span></p><ul id="random5af92f6f2d4c03_group" role="group" aria-hidden="true"><li class="type_unknown depth_3 item_with_icon" aria-labelledby="label_3_5"><p class="tree_item hasicon" role="treeitem"><a tabindex="-1" id="label_3_5" href="https://www.floridaoberta.com/blog/index.php"><img class="icon navicon" alt="" src="https://www.floridaoberta.com/theme/image.php/adaptable/core/1519629762/i/navigationitem" /><span class="item-content-wrap">Blogs del sitio</span></a></p></li><li class="type_custom depth_3 item_with_icon" aria-labelledby="label_3_6"><p class="tree_item hasicon" role="treeitem"><a tabindex="-1" id="label_3_6" href="https://www.floridaoberta.com/badges/view.php?type=1"><img class="icon navicon" alt="" src="https://www.floridaoberta.com/theme/image.php/adaptable/core/1519629762/i/navigationitem" /><span class="item-content-wrap">Insignias del sitio</span></a></p></li><li class="type_setting depth_3 item_with_icon" aria-labelledby="label_3_7"><p class="tree_item hasicon" role="treeitem"><a tabindex="-1" id="label_3_7" href="https://www.floridaoberta.com/tag/search.php"><img class="icon navicon" alt="" src="https://www.floridaoberta.com/theme/image.php/adaptable/core/1519629762/i/navigationitem" /><span class="item-content-wrap">Marcas</span></a></p></li><li class="type_custom depth_3 item_with_icon" aria-labelledby="label_3_8"><p class="tree_item hasicon" role="treeitem"><a tabindex="-1" id="label_3_8" href="https://www.floridaoberta.com/calendar/view.php?view=month"><img class="icon navicon" alt="" src="https://www.floridaoberta.com/theme/image.php/adaptable/core/1519629762/i/navigationitem" /><span class="item-content-wrap">Calendario</span></a></p></li><li class="type_activity depth_3 item_with_icon" aria-labelledby="label_3_10"><p class="tree_item hasicon" role="treeitem"><a tabindex="-1" id="label_3_10" title="Foro" href="https://www.floridaoberta.com/mod/forum/view.php?id=6265"><img class="icon navicon" alt="Foro" title="Foro" src="https://www.floridaoberta.com/theme/image.php/adaptable/forum/1519629762/icon" /><span class="item-content-wrap">Novedades del sitio</span></a></p></li></ul></li><li class="type_system depth_2 contains_branch" aria-labelledby="label_2_11"><p class="tree_item branch" role="treeitem" aria-expanded="true" aria-owns="random5af92f6f2d4c09_group"><span tabindex="-1" id="label_2_11">Mis cursos</span></p><ul id="random5af92f6f2d4c09_group" role="group"><li class="type_unknown depth_3 contains_branch" aria-labelledby="label_3_12"><p class="tree_item branch" role="treeitem" aria-expanded="false" aria-owns="random5af92f6f2d4c010_group"><span tabindex="-1" id="label_3_12">2017-2018</span></p><ul id="random5af92f6f2d4c010_group" role="group" aria-hidden="true"><li class="type_unknown depth_4 contains_branch" aria-labelledby="label_4_13"><p class="tree_item branch" role="treeitem" aria-expanded="false" aria-owns="random5af92f6f2d4c011_group"><span tabindex="-1" id="label_4_13">Formación Profesional - Ciclos Formativos</span></p><ul id="random5af92f6f2d4c011_group" role="group" aria-hidden="true"><li class="type_unknown depth_5 contains_branch" aria-labelledby="label_5_14"><p class="tree_item branch" role="treeitem" aria-expanded="false" aria-owns="random5af92f6f2d4c012_group"><span tabindex="-1" id="label_5_14">Ciclos Formativos Presenciales</span></p><ul id="random5af92f6f2d4c012_group" role="group" aria-hidden="true"><li class="type_unknown depth_6 contains_branch" aria-labelledby="label_6_15"><p class="tree_item branch" role="treeitem" aria-expanded="false" aria-owns="random5af92f6f2d4c013_group"><span tabindex="-1" id="label_6_15">DAW</span></p><ul id="random5af92f6f2d4c013_group" role="group" aria-hidden="true"><li class="type_unknown depth_7 contains_branch" aria-labelledby="label_7_16"><p class="tree_item branch canexpand" role="treeitem" aria-expanded="false" aria-owns="random5af92f6f2d4c014_group"><span tabindex="-1" id="label_7_16">1º DAW</span></p><ul id="random5af92f6f2d4c014_group" role="group" aria-hidden="true"><li class="type_course depth_8 contains_branch" aria-labelledby="label_8_17"><p class="tree_item branch" role="treeitem" id="expandable_branch_20_2132" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_20_2132" data-node-key="2132" data-node-type="20"><a tabindex="-1" id="label_8_17" title="DAW-Bases de datos" href="https://www.floridaoberta.com/course/view.php?id=2132">DAW-Bases de datos</a></p></li><li class="type_course depth_8 contains_branch" aria-labelledby="label_8_18"><p class="tree_item branch" role="treeitem" id="expandable_branch_20_2127" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_20_2127" data-node-key="2127" data-node-type="20"><a tabindex="-1" id="label_8_18" title="DAW-Entornos de Desarrollo" href="https://www.floridaoberta.com/course/view.php?id=2127">DAW-Entornos de Desarrollo</a></p></li><li class="type_course depth_8 contains_branch" aria-labelledby="label_8_19"><p class="tree_item branch" role="treeitem" id="expandable_branch_20_2128" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_20_2128" data-node-key="2128" data-node-type="20"><a tabindex="-1" id="label_8_19" title="DAW-Formación y Orientación Laboral" href="https://www.floridaoberta.com/course/view.php?id=2128">DAW-Formación y Orientación Laboral</a></p></li><li class="type_course depth_8 contains_branch" aria-labelledby="label_8_20"><p class="tree_item branch" role="treeitem" id="expandable_branch_20_2129" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_20_2129" data-node-key="2129" data-node-type="20"><a tabindex="-1" id="label_8_20" title="DAW-Inglés I" href="https://www.floridaoberta.com/course/view.php?id=2129">DAW-Inglés I</a></p></li><li class="type_course depth_8 contains_branch" aria-labelledby="label_8_21"><p class="tree_item branch" role="treeitem" id="expandable_branch_20_2133" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_20_2133" data-node-key="2133" data-node-type="20"><a tabindex="-1" id="label_8_21" title="DAW-Lenguajes de Marcas y Sistemas de Gestión de la Información" href="https://www.floridaoberta.com/course/view.php?id=2133">DAW-Lenguajes de Marcas y Sistemas de Gestión de l...</a></p></li><li class="type_course depth_8 contains_branch" aria-labelledby="label_8_22"><p class="tree_item branch" role="treeitem" id="expandable_branch_20_2130" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_20_2130" data-node-key="2130" data-node-type="20"><a tabindex="-1" id="label_8_22" title="DAW-Programación" href="https://www.floridaoberta.com/course/view.php?id=2130">DAW-Programación</a></p></li><li class="type_course depth_8 contains_branch" aria-labelledby="label_8_23"><p class="tree_item branch" role="treeitem" id="expandable_branch_20_3207" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_20_3207" data-node-key="3207" data-node-type="20"><a tabindex="-1" id="label_8_23" title="DAW-Proyecto Integrado 1" href="https://www.floridaoberta.com/course/view.php?id=3207">DAW-Proyecto Integrado 1</a></p></li><li class="type_course depth_8 contains_branch" aria-labelledby="label_8_24"><p class="tree_item branch" role="treeitem" id="expandable_branch_20_2131" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_20_2131" data-node-key="2131" data-node-type="20"><a tabindex="-1" id="label_8_24" title="DAW-Sistemas Informáticos" href="https://www.floridaoberta.com/course/view.php?id=2131">DAW-Sistemas Informáticos</a></p></li><li class="type_course depth_8 contains_branch" aria-labelledby="label_8_25"><p class="tree_item branch" role="treeitem" id="expandable_branch_20_2090" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_20_2090" data-node-key="2090" data-node-type="20"><a tabindex="-1" id="label_8_25" title="DAW-Tutoría" href="https://www.floridaoberta.com/course/view.php?id=2090">DAW-Tutoría</a></p></li></ul></li></ul></li></ul></li></ul></li></ul></li></ul></li><li class="type_system depth_2 contains_branch" aria-labelledby="label_2_26"><p class="tree_item branch" role="treeitem" id="expandable_branch_0_courses" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_0_courses" data-node-key="courses" data-node-type="0"><a tabindex="-1" id="label_2_26" href="https://www.floridaoberta.com/course/index.php">Cursos</a></p></li><li class="type_custom depth_2 item_with_icon" aria-labelledby="label_2_27"><p class="tree_item hasicon" role="treeitem"><a tabindex="-1" id="label_2_27" href="https://www.floridaoberta.com/local/horarios/student_view.php?userid=8628"><img class="icon navicon" alt="" src="https://www.floridaoberta.com/theme/image.php/adaptable/core/1519629762/i/navigationitem" /><span class="item-content-wrap">Horarios</span></a></p></li></ul></li></ul></div></div><span class="skip-block-to" id="sb-1"></span><a class="skip skip-block" id="fsb-3" href="#sb-3">Saltar Archivos privados</a><div id="inst46179" class="block_private_files  block" role="complementary" data-block="private_files" data-instanceid="46179" aria-labelledby="instance-46179-header" data-dockable="1"><div class="header"><div class="title"><div class="block_action"></div><h2 id="instance-46179-header">Archivos privados</h2></div></div><div class="content"><div class="box generalbox">No hay archivos disponibles</div><div class="footer"><a href="https://www.floridaoberta.com/user/files.php?returnurl=https%3A%2F%2Fwww.floridaoberta.com%2Fmy%2Findex.php">Gestionar ficheros Privados...</a></div></div></div><span class="skip-block-to" id="sb-3"></span></aside></div><div class="span6"><aside id="block-region-frnt-market-b" class="block-region-front block-region" data-blockregion="frnt-market-b" data-droptarget="1"><a class="skip skip-block" id="fsb-4" href="#sb-4">Saltar Vista general de curso</a><div id="inst46182" class="block_myoverview  block" role="complementary" data-block="myoverview" data-instanceid="46182" aria-labelledby="instance-46182-header" data-dockable="1"><div class="header"><div class="title"><div class="block_action"></div><h2 id="instance-46182-header">Vista general de curso</h2></div></div><div class="content"><div id="block-myoverview-5af92f6f332765af92f6f2d4c016" class="block-myoverview" data-region="myoverview">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="#myoverview_timeline_view" role="tab" data-toggle="tab">
                                                Línea de tiempo
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#myoverview_courses_view" role="tab" data-toggle="tab">
                                                Cursos
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active" id="myoverview_timeline_view">
                                            <div id="timeline-view-5af92f6f332765af92f6f2d4c016" data-region="timeline-view">
                                                <div class="row text-center">
                                                    <div class="btn-group m-b-1" role="group" data-toggle="btns">
                                                        <a class="btn btn-default active" href="#myoverview_timeline_dates" data-toggle="tab">
                                                            Ordenar por fecha
                                                        </a>
                                                        <a class="btn btn-default" href="#myoverview_timeline_courses" data-toggle="tab">
                                                            Ordenar por curso
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="tab-content">
                                                    <div class="tab-pane active fade in" id="myoverview_timeline_dates">
                                                        <div data-region="timeline-view-dates" id="timeline-view-dates-5af92f6f332765af92f6f2d4c016">
                                                            <div data-region="event-list-container"
                                                                 data-limit="20"
                                                                 data-course-id=""
                                                                 data-last-id=""
                                                                 data-midnight="1526248800"
                                                                 id="event-list-container-">

                                                                <div data-region="event-list-content">
                                                                    <div data-region="event-list-group-container"
                                                                         data-start-day="-14"
                                                                         data-end-day="0"
                                                                         class="hidden">

                                                                        <h5 class="text-danger" id="event-list-title-5af92f6f332765af92f6f2d4c016"><strong>Recientemente vencidas</strong></h5>
                                                                        <ul class="unstyled well well-small" data-region="event-list" aria-describedby="event-list-title-5af92f6f332765af92f6f2d4c016">
                                                                        </ul>
                                                                    </div>
                                                                    <div data-region="event-list-group-container"
                                                                         data-start-day="0"
                                                                         data-end-day="1"
                                                                         class="hidden">

                                                                        <h5 class="" id="event-list-title-5af92f6f332765af92f6f2d4c016"><strong>Hoy</strong></h5>
                                                                        <ul class="unstyled well well-small" data-region="event-list" aria-describedby="event-list-title-5af92f6f332765af92f6f2d4c016">
                                                                        </ul>
                                                                    </div>
                                                                    <div data-region="event-list-group-container"
                                                                         data-start-day="1"
                                                                         data-end-day="7"
                                                                         class="hidden">

                                                                        <h5 class="" id="event-list-title-5af92f6f332765af92f6f2d4c016"><strong>Próximos 7 días</strong></h5>
                                                                        <ul class="unstyled well well-small" data-region="event-list" aria-describedby="event-list-title-5af92f6f332765af92f6f2d4c016">
                                                                        </ul>
                                                                    </div>
                                                                    <div data-region="event-list-group-container"
                                                                         data-start-day="7"
                                                                         data-end-day="30"
                                                                         class="hidden">

                                                                        <h5 class="" id="event-list-title-5af92f6f332765af92f6f2d4c016"><strong>Próximos 30 días</strong></h5>
                                                                        <ul class="unstyled well well-small" data-region="event-list" aria-describedby="event-list-title-5af92f6f332765af92f6f2d4c016">
                                                                        </ul>
                                                                    </div>
                                                                    <div data-region="event-list-group-container"
                                                                         data-start-day="30"
                                                                         data-end-day=""
                                                                         class="hidden">

                                                                        <h5 class="" id="event-list-title-5af92f6f332765af92f6f2d4c016"><strong>Futuros</strong></h5>
                                                                        <ul class="unstyled well well-small" data-region="event-list" aria-describedby="event-list-title-5af92f6f332765af92f6f2d4c016">
                                                                        </ul>
                                                                    </div>

                                                                    <div class="text-xs-center text-center m-y-2">
                                                                        <button type="button" class="btn btn-secondary" data-action="view-more">
                                                                            Ver más
                                                                            <span class="hidden" data-region="loading-icon-container">
                                            <span class="loading-icon"><img class="icon " alt="Cargando" title="Cargando" src="https://www.floridaoberta.com/theme/image.php/adaptable/core/1519629762/y/loading" /></span>
                                        </span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="hidden text-xs-center text-center m-t-3" data-region="empty-message">
                                                                    <img class="empty-placeholder-image-lg"
                                                                         src="https://www.floridaoberta.com/theme/image.php/adaptable/block_myoverview/1519629762/activities"
                                                                         alt="No hay actividades próximas pendientes"
                                                                         role="presentation">
                                                                    <p class="text-muted m-t-1">No hay actividades próximas pendientes</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="myoverview_timeline_courses">
                                                        <div id="sort-by-courses-view-5af92f6f332765af92f6f2d4c016">
                                                            <ul class="list-group unstyled hidden" data-region="course-block">
                                                                <li class="list-group-item well well-small">
                                                                    <div data-region="course-events-container" id="course-events-container-2132" data-course-id="2132">
                                                                        <div class="row-fluid">
                                                                            <div class="span3">
                                                                                <div class="course-info-container" id="course-info-container-2132">
                                                                                    <div class="visible-desktop">
                                                                                        <div class="progress-chart-container m-b-1">
                                                                                            <div class="no-progress">
                                                                                                <img class="icon " alt="" src="https://www.floridaoberta.com/theme/image.php/adaptable/core/1519629762/i/course" />
                                                                                            </div>
                                                                                        </div>
                                                                                        <h4><a href="https://www.floridaoberta.com/course/view.php?id=2132">DAW-Bases de datos</a></h4>
                                                                                    </div>
                                                                                    <div class="hidden-desktop">
                                                                                        <div class="media">
                                                                                            <div class="pull-left">
                                                                                                <div class="media-object">
                                                                                                    <div class="progress-chart-container m-b-1">
                                                                                                        <div class="no-progress">
                                                                                                            <img class="icon " alt="" src="https://www.floridaoberta.com/theme/image.php/adaptable/core/1519629762/i/course" />
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="media-body">
                                                                                                <h4 class="media-heading"><a href="https://www.floridaoberta.com/course/view.php?id=2132">DAW-Bases de datos</a></h4>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <p class="muted">

                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="span9">
                                                                                <div data-region="event-list-container"
                                                                                     data-limit="10"
                                                                                     data-course-id="2132"
                                                                                     data-last-id=""
                                                                                     data-midnight="1526248800"
                                                                                     id="event-list-container-2132">

                                                                                    <div data-region="event-list-content">
                                                                                        <div data-region="event-list-group-container"
                                                                                             data-start-day="-14"
                                                                                             data-end-day="0"
                                                                                             class="hidden">

                                                                                            <h5 class="text-danger" id="event-list-title-5af92f6f332765af92f6f2d4c016"><strong>Recientemente vencidas</strong></h5>
                                                                                            <ul class="unstyled well well-small" data-region="event-list" aria-describedby="event-list-title-5af92f6f332765af92f6f2d4c016">
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div data-region="event-list-group-container"
                                                                                             data-start-day="0"
                                                                                             data-end-day="1"
                                                                                             class="hidden">

                                                                                            <h5 class="" id="event-list-title-5af92f6f332765af92f6f2d4c016"><strong>Hoy</strong></h5>
                                                                                            <ul class="unstyled well well-small" data-region="event-list" aria-describedby="event-list-title-5af92f6f332765af92f6f2d4c016">
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div data-region="event-list-group-container"
                                                                                             data-start-day="1"
                                                                                             data-end-day="7"
                                                                                             class="hidden">

                                                                                            <h5 class="" id="event-list-title-5af92f6f332765af92f6f2d4c016"><strong>Próximos 7 días</strong></h5>
                                                                                            <ul class="unstyled well well-small" data-region="event-list" aria-describedby="event-list-title-5af92f6f332765af92f6f2d4c016">
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div data-region="event-list-group-container"
                                                                                             data-start-day="7"
                                                                                             data-end-day="30"
                                                                                             class="hidden">

                                                                                            <h5 class="" id="event-list-title-5af92f6f332765af92f6f2d4c016"><strong>Próximos 30 días</strong></h5>
                                                                                            <ul class="unstyled well well-small" data-region="event-list" aria-describedby="event-list-title-5af92f6f332765af92f6f2d4c016">
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div data-region="event-list-group-container"
                                                                                             data-start-day="30"
                                                                                             data-end-day=""
                                                                                             class="hidden">

                                                                                            <h5 class="" id="event-list-title-5af92f6f332765af92f6f2d4c016"><strong>Futuros</strong></h5>
                                                                                            <ul class="unstyled well well-small" data-region="event-list" aria-describedby="event-list-title-5af92f6f332765af92f6f2d4c016">
                                                                                            </ul>
                                                                                        </div>

                                                                                        <div class="text-xs-center text-center m-b-1">
                                                                                            <button type="button" class="btn btn-secondary" data-action="view-more">
                                                                                                Ver más
                                                                                                <span class="hidden" data-region="loading-icon-container">
                    <span class="loading-icon"><img class="icon " alt="Cargando" title="Cargando" src="https://www.floridaoberta.com/theme/image.php/adaptable/core/1519629762/y/loading" /></span>
                </span>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="hidden text-xs-center text-center m-y-3" data-region="empty-message">
                                                                                        <img class="empty-placeholder-image-sm"
                                                                                             src="https://www.floridaoberta.com/theme/image.php/adaptable/block_myoverview/1519629762/activities"
                                                                                             alt="No hay actividades próximas pendientes"
                                                                                             role="presentation">
                                                                                        <p class="text-muted m-t-1">No hay actividades próximas pendientes</p>
                                                                                        <a href="https://www.floridaoberta.com/course/view.php?id=2132" class="btn btn-secondary text-primary"
                                                                                           aria-label="Ver curso DAW-Bases de datos">
                                                                                            Ver curso
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item well well-small">
                                                                    <div data-region="course-events-container" id="course-events-container-2127" data-course-id="2127">
                                                                        <div class="row-fluid">
                                                                            <div class="span3">
                                                                                <div class="course-info-container" id="course-info-container-2127">
                                                                                    <div class="visible-desktop">
                                                                                        <div class="progress-chart-container m-b-1">
                                                                                            <div class="no-progress">
                                                                                                <img class="icon " alt="" src="https://www.floridaoberta.com/theme/image.php/adaptable/core/1519629762/i/course" />
                                                                                            </div>
                                                                                        </div>
                                                                                        <h4><a href="https://www.floridaoberta.com/course/view.php?id=2127">DAW-Entornos de Desarrollo</a></h4>
                                                                                    </div>
                                                                                    <div class="hidden-desktop">
                                                                                        <div class="media">
                                                                                            <div class="pull-left">
                                                                                                <div class="media-object">
                                                                                                    <div class="progress-chart-container m-b-1">
                                                                                                        <div class="no-progress">
                                                                                                            <img class="icon " alt="" src="https://www.floridaoberta.com/theme/image.php/adaptable/core/1519629762/i/course" />
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="media-body">
                                                                                                <h4 class="media-heading"><a href="https://www.floridaoberta.com/course/view.php?id=2127">DAW-Entornos de Desarrollo</a></h4>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <p class="muted">

                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="span9">
                                                                                <div data-region="event-list-container"
                                                                                     data-limit="10"
                                                                                     data-course-id="2127"
                                                                                     data-last-id=""
                                                                                     data-midnight="1526248800"
                                                                                     id="event-list-container-2127">

                                                                                    <div data-region="event-list-content">
                                                                                        <div data-region="event-list-group-container"
                                                                                             data-start-day="-14"
                                                                                             data-end-day="0"
                                                                                             class="hidden">

                                                                                            <h5 class="text-danger" id="event-list-title-5af92f6f332765af92f6f2d4c016"><strong>Recientemente vencidas</strong></h5>
                                                                                            <ul class="unstyled well well-small" data-region="event-list" aria-describedby="event-list-title-5af92f6f332765af92f6f2d4c016">
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div data-region="event-list-group-container"
                                                                                             data-start-day="0"
                                                                                             data-end-day="1"
                                                                                             class="hidden">

                                                                                            <h5 class="" id="event-list-title-5af92f6f332765af92f6f2d4c016"><strong>Hoy</strong></h5>
                                                                                            <ul class="unstyled well well-small" data-region="event-list" aria-describedby="event-list-title-5af92f6f332765af92f6f2d4c016">
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div data-region="event-list-group-container"
                                                                                             data-start-day="1"
                                                                                             data-end-day="7"
                                                                                             class="hidden">

                                                                                            <h5 class="" id="event-list-title-5af92f6f332765af92f6f2d4c016"><strong>Próximos 7 días</strong></h5>
                                                                                            <ul class="unstyled well well-small" data-region="event-list" aria-describedby="event-list-title-5af92f6f332765af92f6f2d4c016">
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div data-region="event-list-group-container"
                                                                                             data-start-day="7"
                                                                                             data-end-day="30"
                                                                                             class="hidden">

                                                                                            <h5 class="" id="event-list-title-5af92f6f332765af92f6f2d4c016"><strong>Próximos 30 días</strong></h5>
                                                                                            <ul class="unstyled well well-small" data-region="event-list" aria-describedby="event-list-title-5af92f6f332765af92f6f2d4c016">
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div data-region="event-list-group-container"
                                                                                             data-start-day="30"
                                                                                             data-end-day=""
                                                                                             class="hidden">

                                                                                            <h5 class="" id="event-list-title-5af92f6f332765af92f6f2d4c016"><strong>Futuros</strong></h5>
                                                                                            <ul class="unstyled well well-small" data-region="event-list" aria-describedby="event-list-title-5af92f6f332765af92f6f2d4c016">
                                                                                            </ul>
                                                                                        </div>

                                                                                        <div class="text-xs-center text-center m-b-1">
                                                                                            <button type="button" class="btn btn-secondary" data-action="view-more">
                                                                                                Ver más
                                                                                                <span class="hidden" data-region="loading-icon-container">
                    <span class="loading-icon"><img class="icon " alt="Cargando" title="Cargando" src="https://www.floridaoberta.com/theme/image.php/adaptable/core/1519629762/y/loading" /></span>
                </span>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="hidden text-xs-center text-center m-y-3" data-region="empty-message">
                                                                                        <img class="empty-placeholder-image-sm"
                                                                                             src="https://www.floridaoberta.com/theme/image.php/adaptable/block_myoverview/1519629762/activities"
                                                                                             alt="No hay actividades próximas pendientes"
                                                                                             role="presentation">
                                                                                        <p class="text-muted m-t-1">No hay actividades próximas pendientes</p>
                                                                                        <a href="https://www.floridaoberta.com/course/view.php?id=2127" class="btn btn-secondary text-primary"
                                                                                           aria-label="Ver curso DAW-Entornos de Desarrollo">
                                                                                            Ver curso
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item well well-small">
                                                                    <div data-region="course-events-container" id="course-events-container-2128" data-course-id="2128">
                                                                        <div class="row-fluid">
                                                                            <div class="span3">
                                                                                <div class="course-info-container" id="course-info-container-2128">
                                                                                    <div class="visible-desktop">
                                                                                        <div class="progress-chart-container m-b-1">
                                                                                            <div class="no-progress">
                                                                                                <img class="icon " alt="" src="https://www.floridaoberta.com/theme/image.php/adaptable/core/1519629762/i/course" />
                                                                                            </div>
                                                                                        </div>
                                                                                        <h4><a href="https://www.floridaoberta.com/course/view.php?id=2128">DAW-Formación y Orientación Laboral</a></h4>
                                                                                    </div>
                                                                                    <div class="hidden-desktop">
                                                                                        <div class="media">
                                                                                            <div class="pull-left">
                                                                                                <div class="media-object">
                                                                                                    <div class="progress-chart-container m-b-1">
                                                                                                        <div class="no-progress">
                                                                                                            <img class="icon " alt="" src="https://www.floridaoberta.com/theme/image.php/adaptable/core/1519629762/i/course" />
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="media-body">
                                                                                                <h4 class="media-heading"><a href="https://www.floridaoberta.com/course/view.php?id=2128">DAW-Formación y Orientación Laboral</a></h4>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <p class="muted">

                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="span9">
                                                                                <div data-region="event-list-container"
                                                                                     data-limit="10"
                                                                                     data-course-id="2128"
                                                                                     data-last-id=""
                                                                                     data-midnight="1526248800"
                                                                                     id="event-list-container-2128">

                                                                                    <div data-region="event-list-content">
                                                                                        <div data-region="event-list-group-container"
                                                                                             data-start-day="-14"
                                                                                             data-end-day="0"
                                                                                             class="hidden">

                                                                                            <h5 class="text-danger" id="event-list-title-5af92f6f332765af92f6f2d4c016"><strong>Recientemente vencidas</strong></h5>
                                                                                            <ul class="unstyled well well-small" data-region="event-list" aria-describedby="event-list-title-5af92f6f332765af92f6f2d4c016">
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div data-region="event-list-group-container"
                                                                                             data-start-day="0"
                                                                                             data-end-day="1"
                                                                                             class="hidden">

                                                                                            <h5 class="" id="event-list-title-5af92f6f332765af92f6f2d4c016"><strong>Hoy</strong></h5>
                                                                                            <ul class="unstyled well well-small" data-region="event-list" aria-describedby="event-list-title-5af92f6f332765af92f6f2d4c016">
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div data-region="event-list-group-container"
                                                                                             data-start-day="1"
                                                                                             data-end-day="7"
                                                                                             class="hidden">

                                                                                            <h5 class="" id="event-list-title-5af92f6f332765af92f6f2d4c016"><strong>Próximos 7 días</strong></h5>
                                                                                            <ul class="unstyled well well-small" data-region="event-list" aria-describedby="event-list-title-5af92f6f332765af92f6f2d4c016">
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div data-region="event-list-group-container"
                                                                                             data-start-day="7"
                                                                                             data-end-day="30"
                                                                                             class="hidden">

                                                                                            <h5 class="" id="event-list-title-5af92f6f332765af92f6f2d4c016"><strong>Próximos 30 días</strong></h5>
                                                                                            <ul class="unstyled well well-small" data-region="event-list" aria-describedby="event-list-title-5af92f6f332765af92f6f2d4c016">
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div data-region="event-list-group-container"
                                                                                             data-start-day="30"
                                                                                             data-end-day=""
                                                                                             class="hidden">

                                                                                            <h5 class="" id="event-list-title-5af92f6f332765af92f6f2d4c016"><strong>Futuros</strong></h5>
                                                                                            <ul class="unstyled well well-small" data-region="event-list" aria-describedby="event-list-title-5af92f6f332765af92f6f2d4c016">
                                                                                            </ul>
                                                                                        </div>

                                                                                        <div class="text-xs-center text-center m-b-1">
                                                                                            <button type="button" class="btn btn-secondary" data-action="view-more">
                                                                                                Ver más
                                                                                                <span class="hidden" data-region="loading-icon-container">
                    <span class="loading-icon"><img class="icon " alt="Cargando" title="Cargando" src="https://www.floridaoberta.com/theme/image.php/adaptable/core/1519629762/y/loading" /></span>
                </span>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="hidden text-xs-center text-center m-y-3" data-region="empty-message">
                                                                                        <img class="empty-placeholder-image-sm"
                                                                                             src="https://www.floridaoberta.com/theme/image.php/adaptable/block_myoverview/1519629762/activities"
                                                                                             alt="No hay actividades próximas pendientes"
                                                                                             role="presentation">
                                                                                        <p class="text-muted m-t-1">No hay actividades próximas pendientes</p>
                                                                                        <a href="https://www.floridaoberta.com/course/view.php?id=2128" class="btn btn-secondary text-primary"
                                                                                           aria-label="Ver curso DAW-Formación y Orientación Laboral">
                                                                                            Ver curso
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item well well-small">
                                                                    <div data-region="course-events-container" id="course-events-container-2129" data-course-id="2129">
                                                                        <div class="row-fluid">
                                                                            <div class="span3">
                                                                                <div class="course-info-container" id="course-info-container-2129">
                                                                                    <div class="visible-desktop">
                                                                                        <div class="progress-chart-container m-b-1">
                                                                                            <div class="no-progress">
                                                                                                <img class="icon " alt="" src="https://www.floridaoberta.com/theme/image.php/adaptable/core/1519629762/i/course" />
                                                                                            </div>
                                                                                        </div>
                                                                                        <h4><a href="https://www.floridaoberta.com/course/view.php?id=2129">DAW-Inglés I</a></h4>
                                                                                    </div>
                                                                                    <div class="hidden-desktop">
                                                                                        <div class="media">
                                                                                            <div class="pull-left">
                                                                                                <div class="media-object">
                                                                                                    <div class="progress-chart-container m-b-1">
                                                                                                        <div class="no-progress">
                                                                                                            <img class="icon " alt="" src="https://www.floridaoberta.com/theme/image.php/adaptable/core/1519629762/i/course" />
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="media-body">
                                                                                                <h4 class="media-heading"><a href="https://www.floridaoberta.com/course/view.php?id=2129">DAW-Inglés I</a></h4>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <p class="muted">

                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="span9">
                                                                                <div data-region="event-list-container"
                                                                                     data-limit="10"
                                                                                     data-course-id="2129"
                                                                                     data-last-id=""
                                                                                     data-midnight="1526248800"
                                                                                     id="event-list-container-2129">

                                                                                    <div data-region="event-list-content">
                                                                                        <div data-region="event-list-group-container"
                                                                                             data-start-day="-14"
                                                                                             data-end-day="0"
                                                                                             class="hidden">

                                                                                            <h5 class="text-danger" id="event-list-title-5af92f6f332765af92f6f2d4c016"><strong>Recientemente vencidas</strong></h5>
                                                                                            <ul class="unstyled well well-small" data-region="event-list" aria-describedby="event-list-title-5af92f6f332765af92f6f2d4c016">
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div data-region="event-list-group-container"
                                                                                             data-start-day="0"
                                                                                             data-end-day="1"
                                                                                             class="hidden">

                                                                                            <h5 class="" id="event-list-title-5af92f6f332765af92f6f2d4c016"><strong>Hoy</strong></h5>
                                                                                            <ul class="unstyled well well-small" data-region="event-list" aria-describedby="event-list-title-5af92f6f332765af92f6f2d4c016">
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div data-region="event-list-group-container"
                                                                                             data-start-day="1"
                                                                                             data-end-day="7"
                                                                                             class="hidden">

                                                                                            <h5 class="" id="event-list-title-5af92f6f332765af92f6f2d4c016"><strong>Próximos 7 días</strong></h5>
                                                                                            <ul class="unstyled well well-small" data-region="event-list" aria-describedby="event-list-title-5af92f6f332765af92f6f2d4c016">
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div data-region="event-list-group-container"
                                                                                             data-start-day="7"
                                                                                             data-end-day="30"
                                                                                             class="hidden">

                                                                                            <h5 class="" id="event-list-title-5af92f6f332765af92f6f2d4c016"><strong>Próximos 30 días</strong></h5>
                                                                                            <ul class="unstyled well well-small" data-region="event-list" aria-describedby="event-list-title-5af92f6f332765af92f6f2d4c016">
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div data-region="event-list-group-container"
                                                                                             data-start-day="30"
                                                                                             data-end-day=""
                                                                                             class="hidden">

                                                                                            <h5 class="" id="event-list-title-5af92f6f332765af92f6f2d4c016"><strong>Futuros</strong></h5>
                                                                                            <ul class="unstyled well well-small" data-region="event-list" aria-describedby="event-list-title-5af92f6f332765af92f6f2d4c016">
                                                                                            </ul>
                                                                                        </div>

                                                                                        <div class="text-xs-center text-center m-b-1">
                                                                                            <button type="button" class="btn btn-secondary" data-action="view-more">
                                                                                                Ver más
                                                                                                <span class="hidden" data-region="loading-icon-container">
                    <span class="loading-icon"><img class="icon " alt="Cargando" title="Cargando" src="https://www.floridaoberta.com/theme/image.php/adaptable/core/1519629762/y/loading" /></span>
                </span>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="hidden text-xs-center text-center m-y-3" data-region="empty-message">
                                                                                        <img class="empty-placeholder-image-sm"
                                                                                             src="https://www.floridaoberta.com/theme/image.php/adaptable/block_myoverview/1519629762/activities"
                                                                                             alt="No hay actividades próximas pendientes"
                                                                                             role="presentation">
                                                                                        <p class="text-muted m-t-1">No hay actividades próximas pendientes</p>
                                                                                        <a href="https://www.floridaoberta.com/course/view.php?id=2129" class="btn btn-secondary text-primary"
                                                                                           aria-label="Ver curso DAW-Inglés I">
                                                                                            Ver curso
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item well well-small">
                                                                    <div data-region="course-events-container" id="course-events-container-2133" data-course-id="2133">
                                                                        <div class="row-fluid">
                                                                            <div class="span3">
                                                                                <div class="course-info-container" id="course-info-container-2133">
                                                                                    <div class="visible-desktop">
                                                                                        <div class="progress-chart-container m-b-1">
                                                                                            <div class="no-progress">
                                                                                                <img class="icon " alt="" src="https://www.floridaoberta.com/theme/image.php/adaptable/core/1519629762/i/course" />
                                                                                            </div>
                                                                                        </div>
                                                                                        <h4><a href="https://www.floridaoberta.com/course/view.php?id=2133">DAW-Lenguajes de Marcas y Sistemas de Gestión de la Información</a></h4>
                                                                                    </div>
                                                                                    <div class="hidden-desktop">
                                                                                        <div class="media">
                                                                                            <div class="pull-left">
                                                                                                <div class="media-object">
                                                                                                    <div class="progress-chart-container m-b-1">
                                                                                                        <div class="no-progress">
                                                                                                            <img class="icon " alt="" src="https://www.floridaoberta.com/theme/image.php/adaptable/core/1519629762/i/course" />
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="media-body">
                                                                                                <h4 class="media-heading"><a href="https://www.floridaoberta.com/course/view.php?id=2133">DAW-Lenguajes de Marcas y Sistemas de Gestión de la Información</a></h4>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <p class="muted">

                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="span9">
                                                                                <div data-region="event-list-container"
                                                                                     data-limit="10"
                                                                                     data-course-id="2133"
                                                                                     data-last-id=""
                                                                                     data-midnight="1526248800"
                                                                                     id="event-list-container-2133">

                                                                                    <div data-region="event-list-content">
                                                                                        <div data-region="event-list-group-container"
                                                                                             data-start-day="-14"
                                                                                             data-end-day="0"
                                                                                             class="hidden">

                                                                                            <h5 class="text-danger" id="event-list-title-5af92f6f332765af92f6f2d4c016"><strong>Recientemente vencidas</strong></h5>
                                                                                            <ul class="unstyled well well-small" data-region="event-list" aria-describedby="event-list-title-5af92f6f332765af92f6f2d4c016">
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div data-region="event-list-group-container"
                                                                                             data-start-day="0"
                                                                                             data-end-day="1"
                                                                                             class="hidden">

                                                                                            <h5 class="" id="event-list-title-5af92f6f332765af92f6f2d4c016"><strong>Hoy</strong></h5>
                                                                                            <ul class="unstyled well well-small" data-region="event-list" aria-describedby="event-list-title-5af92f6f332765af92f6f2d4c016">
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div data-region="event-list-group-container"
                                                                                             data-start-day="1"
                                                                                             data-end-day="7"
                                                                                             class="hidden">

                                                                                            <h5 class="" id="event-list-title-5af92f6f332765af92f6f2d4c016"><strong>Próximos 7 días</strong></h5>
                                                                                            <ul class="unstyled well well-small" data-region="event-list" aria-describedby="event-list-title-5af92f6f332765af92f6f2d4c016">
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div data-region="event-list-group-container"
                                                                                             data-start-day="7"
                                                                                             data-end-day="30"
                                                                                             class="hidden">

                                                                                            <h5 class="" id="event-list-title-5af92f6f332765af92f6f2d4c016"><strong>Próximos 30 días</strong></h5>
                                                                                            <ul class="unstyled well well-small" data-region="event-list" aria-describedby="event-list-title-5af92f6f332765af92f6f2d4c016">
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div data-region="event-list-group-container"
                                                                                             data-start-day="30"
                                                                                             data-end-day=""
                                                                                             class="hidden">

                                                                                            <h5 class="" id="event-list-title-5af92f6f332765af92f6f2d4c016"><strong>Futuros</strong></h5>
                                                                                            <ul class="unstyled well well-small" data-region="event-list" aria-describedby="event-list-title-5af92f6f332765af92f6f2d4c016">
                                                                                            </ul>
                                                                                        </div>

                                                                                        <div class="text-xs-center text-center m-b-1">
                                                                                            <button type="button" class="btn btn-secondary" data-action="view-more">
                                                                                                Ver más
                                                                                                <span class="hidden" data-region="loading-icon-container">
                    <span class="loading-icon"><img class="icon " alt="Cargando" title="Cargando" src="https://www.floridaoberta.com/theme/image.php/adaptable/core/1519629762/y/loading" /></span>
                </span>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="hidden text-xs-center text-center m-y-3" data-region="empty-message">
                                                                                        <img class="empty-placeholder-image-sm"
                                                                                             src="https://www.floridaoberta.com/theme/image.php/adaptable/block_myoverview/1519629762/activities"
                                                                                             alt="No hay actividades próximas pendientes"
                                                                                             role="presentation">
                                                                                        <p class="text-muted m-t-1">No hay actividades próximas pendientes</p>
                                                                                        <a href="https://www.floridaoberta.com/course/view.php?id=2133" class="btn btn-secondary text-primary"
                                                                                           aria-label="Ver curso DAW-Lenguajes de Marcas y Sistemas de Gestión de la Información">
                                                                                            Ver curso
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item well well-small">
                                                                    <div data-region="course-events-container" id="course-events-container-2130" data-course-id="2130">
                                                                        <div class="row-fluid">
                                                                            <div class="span3">
                                                                                <div class="course-info-container" id="course-info-container-2130">
                                                                                    <div class="visible-desktop">
                                                                                        <div class="progress-chart-container m-b-1">
                                                                                            <div class="no-progress">
                                                                                                <img class="icon " alt="" src="https://www.floridaoberta.com/theme/image.php/adaptable/core/1519629762/i/course" />
                                                                                            </div>
                                                                                        </div>
                                                                                        <h4><a href="https://www.floridaoberta.com/course/view.php?id=2130">DAW-Programación</a></h4>
                                                                                    </div>
                                                                                    <div class="hidden-desktop">
                                                                                        <div class="media">
                                                                                            <div class="pull-left">
                                                                                                <div class="media-object">
                                                                                                    <div class="progress-chart-container m-b-1">
                                                                                                        <div class="no-progress">
                                                                                                            <img class="icon " alt="" src="https://www.floridaoberta.com/theme/image.php/adaptable/core/1519629762/i/course" />
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="media-body">
                                                                                                <h4 class="media-heading"><a href="https://www.floridaoberta.com/course/view.php?id=2130">DAW-Programación</a></h4>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <p class="muted">

                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="span9">
                                                                                <div data-region="event-list-container"
                                                                                     data-limit="10"
                                                                                     data-course-id="2130"
                                                                                     data-last-id=""
                                                                                     data-midnight="1526248800"
                                                                                     id="event-list-container-2130">

                                                                                    <div data-region="event-list-content">
                                                                                        <div data-region="event-list-group-container"
                                                                                             data-start-day="-14"
                                                                                             data-end-day="0"
                                                                                             class="hidden">

                                                                                            <h5 class="text-danger" id="event-list-title-5af92f6f332765af92f6f2d4c016"><strong>Recientemente vencidas</strong></h5>
                                                                                            <ul class="unstyled well well-small" data-region="event-list" aria-describedby="event-list-title-5af92f6f332765af92f6f2d4c016">
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div data-region="event-list-group-container"
                                                                                             data-start-day="0"
                                                                                             data-end-day="1"
                                                                                             class="hidden">

                                                                                            <h5 class="" id="event-list-title-5af92f6f332765af92f6f2d4c016"><strong>Hoy</strong></h5>
                                                                                            <ul class="unstyled well well-small" data-region="event-list" aria-describedby="event-list-title-5af92f6f332765af92f6f2d4c016">
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div data-region="event-list-group-container"
                                                                                             data-start-day="1"
                                                                                             data-end-day="7"
                                                                                             class="hidden">

                                                                                            <h5 class="" id="event-list-title-5af92f6f332765af92f6f2d4c016"><strong>Próximos 7 días</strong></h5>
                                                                                            <ul class="unstyled well well-small" data-region="event-list" aria-describedby="event-list-title-5af92f6f332765af92f6f2d4c016">
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div data-region="event-list-group-container"
                                                                                             data-start-day="7"
                                                                                             data-end-day="30"
                                                                                             class="hidden">

                                                                                            <h5 class="" id="event-list-title-5af92f6f332765af92f6f2d4c016"><strong>Próximos 30 días</strong></h5>
                                                                                            <ul class="unstyled well well-small" data-region="event-list" aria-describedby="event-list-title-5af92f6f332765af92f6f2d4c016">
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div data-region="event-list-group-container"
                                                                                             data-start-day="30"
                                                                                             data-end-day=""
                                                                                             class="hidden">

                                                                                            <h5 class="" id="event-list-title-5af92f6f332765af92f6f2d4c016"><strong>Futuros</strong></h5>
                                                                                            <ul class="unstyled well well-small" data-region="event-list" aria-describedby="event-list-title-5af92f6f332765af92f6f2d4c016">
                                                                                            </ul>
                                                                                        </div>

                                                                                        <div class="text-xs-center text-center m-b-1">
                                                                                            <button type="button" class="btn btn-secondary" data-action="view-more">
                                                                                                Ver más
                                                                                                <span class="hidden" data-region="loading-icon-container">
                    <span class="loading-icon"><img class="icon " alt="Cargando" title="Cargando" src="https://www.floridaoberta.com/theme/image.php/adaptable/core/1519629762/y/loading" /></span>
                </span>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="hidden text-xs-center text-center m-y-3" data-region="empty-message">
                                                                                        <img class="empty-placeholder-image-sm"
                                                                                             src="https://www.floridaoberta.com/theme/image.php/adaptable/block_myoverview/1519629762/activities"
                                                                                             alt="No hay actividades próximas pendientes"
                                                                                             role="presentation">
                                                                                        <p class="text-muted m-t-1">No hay actividades próximas pendientes</p>
                                                                                        <a href="https://www.floridaoberta.com/course/view.php?id=2130" class="btn btn-secondary text-primary"
                                                                                           aria-label="Ver curso DAW-Programación">
                                                                                            Ver curso
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                            </ul>
                                                            <ul class="list-group unstyled hidden" data-region="course-block">
                                                                <li class="list-group-item well well-small">
                                                                    <div data-region="course-events-container" id="course-events-container-3207" data-course-id="3207">
                                                                        <div class="row-fluid">
                                                                            <div class="span3">
                                                                                <div class="course-info-container" id="course-info-container-3207">
                                                                                    <div class="visible-desktop">
                                                                                        <div class="progress-chart-container m-b-1">
                                                                                            <div class="no-progress">
                                                                                                <img class="icon " alt="" src="https://www.floridaoberta.com/theme/image.php/adaptable/core/1519629762/i/course" />
                                                                                            </div>
                                                                                        </div>
                                                                                        <h4><a href="https://www.floridaoberta.com/course/view.php?id=3207">DAW-Proyecto Integrado 1</a></h4>
                                                                                    </div>
                                                                                    <div class="hidden-desktop">
                                                                                        <div class="media">
                                                                                            <div class="pull-left">
                                                                                                <div class="media-object">
                                                                                                    <div class="progress-chart-container m-b-1">
                                                                                                        <div class="no-progress">
                                                                                                            <img class="icon " alt="" src="https://www.floridaoberta.com/theme/image.php/adaptable/core/1519629762/i/course" />
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="media-body">
                                                                                                <h4 class="media-heading"><a href="https://www.floridaoberta.com/course/view.php?id=3207">DAW-Proyecto Integrado 1</a></h4>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <p class="muted">

                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="span9">
                                                                                <div data-region="event-list-container"
                                                                                     data-limit="10"
                                                                                     data-course-id="3207"
                                                                                     data-last-id=""
                                                                                     data-midnight="1526248800"
                                                                                     id="event-list-container-3207">

                                                                                    <div data-region="event-list-content">
                                                                                        <div data-region="event-list-group-container"
                                                                                             data-start-day="-14"
                                                                                             data-end-day="0"
                                                                                             class="hidden">

                                                                                            <h5 class="text-danger" id="event-list-title-5af92f6f332765af92f6f2d4c016"><strong>Recientemente vencidas</strong></h5>
                                                                                            <ul class="unstyled well well-small" data-region="event-list" aria-describedby="event-list-title-5af92f6f332765af92f6f2d4c016">
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div data-region="event-list-group-container"
                                                                                             data-start-day="0"
                                                                                             data-end-day="1"
                                                                                             class="hidden">

                                                                                            <h5 class="" id="event-list-title-5af92f6f332765af92f6f2d4c016"><strong>Hoy</strong></h5>
                                                                                            <ul class="unstyled well well-small" data-region="event-list" aria-describedby="event-list-title-5af92f6f332765af92f6f2d4c016">
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div data-region="event-list-group-container"
                                                                                             data-start-day="1"
                                                                                             data-end-day="7"
                                                                                             class="hidden">

                                                                                            <h5 class="" id="event-list-title-5af92f6f332765af92f6f2d4c016"><strong>Próximos 7 días</strong></h5>
                                                                                            <ul class="unstyled well well-small" data-region="event-list" aria-describedby="event-list-title-5af92f6f332765af92f6f2d4c016">
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div data-region="event-list-group-container"
                                                                                             data-start-day="7"
                                                                                             data-end-day="30"
                                                                                             class="hidden">

                                                                                            <h5 class="" id="event-list-title-5af92f6f332765af92f6f2d4c016"><strong>Próximos 30 días</strong></h5>
                                                                                            <ul class="unstyled well well-small" data-region="event-list" aria-describedby="event-list-title-5af92f6f332765af92f6f2d4c016">
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div data-region="event-list-group-container"
                                                                                             data-start-day="30"
                                                                                             data-end-day=""
                                                                                             class="hidden">

                                                                                            <h5 class="" id="event-list-title-5af92f6f332765af92f6f2d4c016"><strong>Futuros</strong></h5>
                                                                                            <ul class="unstyled well well-small" data-region="event-list" aria-describedby="event-list-title-5af92f6f332765af92f6f2d4c016">
                                                                                            </ul>
                                                                                        </div>

                                                                                        <div class="text-xs-center text-center m-b-1">
                                                                                            <button type="button" class="btn btn-secondary" data-action="view-more">
                                                                                                Ver más
                                                                                                <span class="hidden" data-region="loading-icon-container">
                    <span class="loading-icon"><img class="icon " alt="Cargando" title="Cargando" src="https://www.floridaoberta.com/theme/image.php/adaptable/core/1519629762/y/loading" /></span>
                </span>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="hidden text-xs-center text-center m-y-3" data-region="empty-message">
                                                                                        <img class="empty-placeholder-image-sm"
                                                                                             src="https://www.floridaoberta.com/theme/image.php/adaptable/block_myoverview/1519629762/activities"
                                                                                             alt="No hay actividades próximas pendientes"
                                                                                             role="presentation">
                                                                                        <p class="text-muted m-t-1">No hay actividades próximas pendientes</p>
                                                                                        <a href="https://www.floridaoberta.com/course/view.php?id=3207" class="btn btn-secondary text-primary"
                                                                                           aria-label="Ver curso DAW-Proyecto Integrado 1">
                                                                                            Ver curso
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item well well-small">
                                                                    <div data-region="course-events-container" id="course-events-container-2131" data-course-id="2131">
                                                                        <div class="row-fluid">
                                                                            <div class="span3">
                                                                                <div class="course-info-container" id="course-info-container-2131">
                                                                                    <div class="visible-desktop">
                                                                                        <div class="progress-chart-container m-b-1">
                                                                                            <div class="no-progress">
                                                                                                <img class="icon " alt="" src="https://www.floridaoberta.com/theme/image.php/adaptable/core/1519629762/i/course" />
                                                                                            </div>
                                                                                        </div>
                                                                                        <h4><a href="https://www.floridaoberta.com/course/view.php?id=2131">DAW-Sistemas Informáticos</a></h4>
                                                                                    </div>
                                                                                    <div class="hidden-desktop">
                                                                                        <div class="media">
                                                                                            <div class="pull-left">
                                                                                                <div class="media-object">
                                                                                                    <div class="progress-chart-container m-b-1">
                                                                                                        <div class="no-progress">
                                                                                                            <img class="icon " alt="" src="https://www.floridaoberta.com/theme/image.php/adaptable/core/1519629762/i/course" />
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="media-body">
                                                                                                <h4 class="media-heading"><a href="https://www.floridaoberta.com/course/view.php?id=2131">DAW-Sistemas Informáticos</a></h4>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <p class="muted">

                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="span9">
                                                                                <div data-region="event-list-container"
                                                                                     data-limit="10"
                                                                                     data-course-id="2131"
                                                                                     data-last-id=""
                                                                                     data-midnight="1526248800"
                                                                                     id="event-list-container-2131">

                                                                                    <div data-region="event-list-content">
                                                                                        <div data-region="event-list-group-container"
                                                                                             data-start-day="-14"
                                                                                             data-end-day="0"
                                                                                             class="hidden">

                                                                                            <h5 class="text-danger" id="event-list-title-5af92f6f332765af92f6f2d4c016"><strong>Recientemente vencidas</strong></h5>
                                                                                            <ul class="unstyled well well-small" data-region="event-list" aria-describedby="event-list-title-5af92f6f332765af92f6f2d4c016">
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div data-region="event-list-group-container"
                                                                                             data-start-day="0"
                                                                                             data-end-day="1"
                                                                                             class="hidden">

                                                                                            <h5 class="" id="event-list-title-5af92f6f332765af92f6f2d4c016"><strong>Hoy</strong></h5>
                                                                                            <ul class="unstyled well well-small" data-region="event-list" aria-describedby="event-list-title-5af92f6f332765af92f6f2d4c016">
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div data-region="event-list-group-container"
                                                                                             data-start-day="1"
                                                                                             data-end-day="7"
                                                                                             class="hidden">

                                                                                            <h5 class="" id="event-list-title-5af92f6f332765af92f6f2d4c016"><strong>Próximos 7 días</strong></h5>
                                                                                            <ul class="unstyled well well-small" data-region="event-list" aria-describedby="event-list-title-5af92f6f332765af92f6f2d4c016">
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div data-region="event-list-group-container"
                                                                                             data-start-day="7"
                                                                                             data-end-day="30"
                                                                                             class="hidden">

                                                                                            <h5 class="" id="event-list-title-5af92f6f332765af92f6f2d4c016"><strong>Próximos 30 días</strong></h5>
                                                                                            <ul class="unstyled well well-small" data-region="event-list" aria-describedby="event-list-title-5af92f6f332765af92f6f2d4c016">
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div data-region="event-list-group-container"
                                                                                             data-start-day="30"
                                                                                             data-end-day=""
                                                                                             class="hidden">

                                                                                            <h5 class="" id="event-list-title-5af92f6f332765af92f6f2d4c016"><strong>Futuros</strong></h5>
                                                                                            <ul class="unstyled well well-small" data-region="event-list" aria-describedby="event-list-title-5af92f6f332765af92f6f2d4c016">
                                                                                            </ul>
                                                                                        </div>

                                                                                        <div class="text-xs-center text-center m-b-1">
                                                                                            <button type="button" class="btn btn-secondary" data-action="view-more">
                                                                                                Ver más
                                                                                                <span class="hidden" data-region="loading-icon-container">
                    <span class="loading-icon"><img class="icon " alt="Cargando" title="Cargando" src="https://www.floridaoberta.com/theme/image.php/adaptable/core/1519629762/y/loading" /></span>
                </span>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="hidden text-xs-center text-center m-y-3" data-region="empty-message">
                                                                                        <img class="empty-placeholder-image-sm"
                                                                                             src="https://www.floridaoberta.com/theme/image.php/adaptable/block_myoverview/1519629762/activities"
                                                                                             alt="No hay actividades próximas pendientes"
                                                                                             role="presentation">
                                                                                        <p class="text-muted m-t-1">No hay actividades próximas pendientes</p>
                                                                                        <a href="https://www.floridaoberta.com/course/view.php?id=2131" class="btn btn-secondary text-primary"
                                                                                           aria-label="Ver curso DAW-Sistemas Informáticos">
                                                                                            Ver curso
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item well well-small">
                                                                    <div data-region="course-events-container" id="course-events-container-2090" data-course-id="2090">
                                                                        <div class="row-fluid">
                                                                            <div class="span3">
                                                                                <div class="course-info-container" id="course-info-container-2090">
                                                                                    <div class="visible-desktop">
                                                                                        <div class="progress-chart-container m-b-1">
                                                                                            <div class="no-progress">
                                                                                                <img class="icon " alt="" src="https://www.floridaoberta.com/theme/image.php/adaptable/core/1519629762/i/course" />
                                                                                            </div>
                                                                                        </div>
                                                                                        <h4><a href="https://www.floridaoberta.com/course/view.php?id=2090">DAW-Tutoría</a></h4>
                                                                                    </div>
                                                                                    <div class="hidden-desktop">
                                                                                        <div class="media">
                                                                                            <div class="pull-left">
                                                                                                <div class="media-object">
                                                                                                    <div class="progress-chart-container m-b-1">
                                                                                                        <div class="no-progress">
                                                                                                            <img class="icon " alt="" src="https://www.floridaoberta.com/theme/image.php/adaptable/core/1519629762/i/course" />
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="media-body">
                                                                                                <h4 class="media-heading"><a href="https://www.floridaoberta.com/course/view.php?id=2090">DAW-Tutoría</a></h4>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <p class="muted">

                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="span9">
                                                                                <div data-region="event-list-container"
                                                                                     data-limit="10"
                                                                                     data-course-id="2090"
                                                                                     data-last-id=""
                                                                                     data-midnight="1526248800"
                                                                                     id="event-list-container-2090">

                                                                                    <div data-region="event-list-content">
                                                                                        <div data-region="event-list-group-container"
                                                                                             data-start-day="-14"
                                                                                             data-end-day="0"
                                                                                             class="hidden">

                                                                                            <h5 class="text-danger" id="event-list-title-5af92f6f332765af92f6f2d4c016"><strong>Recientemente vencidas</strong></h5>
                                                                                            <ul class="unstyled well well-small" data-region="event-list" aria-describedby="event-list-title-5af92f6f332765af92f6f2d4c016">
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div data-region="event-list-group-container"
                                                                                             data-start-day="0"
                                                                                             data-end-day="1"
                                                                                             class="hidden">

                                                                                            <h5 class="" id="event-list-title-5af92f6f332765af92f6f2d4c016"><strong>Hoy</strong></h5>
                                                                                            <ul class="unstyled well well-small" data-region="event-list" aria-describedby="event-list-title-5af92f6f332765af92f6f2d4c016">
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div data-region="event-list-group-container"
                                                                                             data-start-day="1"
                                                                                             data-end-day="7"
                                                                                             class="hidden">

                                                                                            <h5 class="" id="event-list-title-5af92f6f332765af92f6f2d4c016"><strong>Próximos 7 días</strong></h5>
                                                                                            <ul class="unstyled well well-small" data-region="event-list" aria-describedby="event-list-title-5af92f6f332765af92f6f2d4c016">
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div data-region="event-list-group-container"
                                                                                             data-start-day="7"
                                                                                             data-end-day="30"
                                                                                             class="hidden">

                                                                                            <h5 class="" id="event-list-title-5af92f6f332765af92f6f2d4c016"><strong>Próximos 30 días</strong></h5>
                                                                                            <ul class="unstyled well well-small" data-region="event-list" aria-describedby="event-list-title-5af92f6f332765af92f6f2d4c016">
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div data-region="event-list-group-container"
                                                                                             data-start-day="30"
                                                                                             data-end-day=""
                                                                                             class="hidden">

                                                                                            <h5 class="" id="event-list-title-5af92f6f332765af92f6f2d4c016"><strong>Futuros</strong></h5>
                                                                                            <ul class="unstyled well well-small" data-region="event-list" aria-describedby="event-list-title-5af92f6f332765af92f6f2d4c016">
                                                                                            </ul>
                                                                                        </div>

                                                                                        <div class="text-xs-center text-center m-b-1">
                                                                                            <button type="button" class="btn btn-secondary" data-action="view-more">
                                                                                                Ver más
                                                                                                <span class="hidden" data-region="loading-icon-container">
                    <span class="loading-icon"><img class="icon " alt="Cargando" title="Cargando" src="https://www.floridaoberta.com/theme/image.php/adaptable/core/1519629762/y/loading" /></span>
                </span>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="hidden text-xs-center text-center m-y-3" data-region="empty-message">
                                                                                        <img class="empty-placeholder-image-sm"
                                                                                             src="https://www.floridaoberta.com/theme/image.php/adaptable/block_myoverview/1519629762/activities"
                                                                                             alt="No hay actividades próximas pendientes"
                                                                                             role="presentation">
                                                                                        <p class="text-muted m-t-1">No hay actividades próximas pendientes</p>
                                                                                        <a href="https://www.floridaoberta.com/course/view.php?id=2090" class="btn btn-secondary text-primary"
                                                                                           aria-label="Ver curso DAW-Tutoría">
                                                                                            Ver curso
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                            </ul>
                                                            <div class="text-xs-center text-center m-t-1">
                                                                <button type="button" class="btn btn-secondary" data-action="more-courses">
                                                                    Más cursos
                                                                    <span class="hidden" data-region="loading-icon-container">
                                                    <span class="loading-icon"><img class="icon " alt="Cargando" title="Cargando" src="https://www.floridaoberta.com/theme/image.php/adaptable/core/1519629762/y/loading" /></span>
                                                </span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="myoverview_courses_view">
                                            <div id="courses-view-5af92f6f332765af92f6f2d4c016" data-region="courses-view">
                                                <div class="row text-center">
                                                    <div class="btn-group m-b-1" role="group" data-toggle="btns">
                                                        <a class="btn btn-default active" href="#myoverview_courses_view_in_progress" data-toggle="tab">
                                                            En progreso
                                                        </a>
                                                        <a class="btn btn-default" href="#myoverview_courses_view_future" data-toggle="tab">
                                                            Futuros
                                                        </a>
                                                        <a class="btn btn-default" href="#myoverview_courses_view_past" data-toggle="tab">
                                                            Pasados
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="tab-content">
                                                    <div class="tab-pane active fade in" id="myoverview_courses_view_in_progress">
                                                        <div id="courses-view-in-progress"
                                                             data-status="1">

                                                            <div id="pc-for-in-progress" data-region="paging-content">
                                                                <div data-region="paging-content-item"
                                                                     data-page="1"
                                                                     class=" ">
                                                                    <div class="well well-small">
                                                                        <div class="course-info-container" id="course-info-container-2132">
                                                                            <div class="media">
                                                                                <div class="pull-left">
                                                                                    <div class="media-object">
                                                                                        <div class="progress-chart-container m-b-1">
                                                                                            <div class="no-progress">
                                                                                                <img class="icon " alt="" src="https://www.floridaoberta.com/theme/image.php/adaptable/core/1519629762/i/course" />
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="media-body">
                                                                                    <h4 class="media-heading"><a href="https://www.floridaoberta.com/course/view.php?id=2132">DAW-Bases de datos</a></h4>
                                                                                </div>
                                                                            </div>
                                                                            <p class="text-muted">

                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="well well-small">
                                                                        <div class="course-info-container" id="course-info-container-2127">
                                                                            <div class="media">
                                                                                <div class="pull-left">
                                                                                    <div class="media-object">
                                                                                        <div class="progress-chart-container m-b-1">
                                                                                            <div class="no-progress">
                                                                                                <img class="icon " alt="" src="https://www.floridaoberta.com/theme/image.php/adaptable/core/1519629762/i/course" />
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="media-body">
                                                                                    <h4 class="media-heading"><a href="https://www.floridaoberta.com/course/view.php?id=2127">DAW-Entornos de Desarrollo</a></h4>
                                                                                </div>
                                                                            </div>
                                                                            <p class="text-muted">

                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="well well-small">
                                                                        <div class="course-info-container" id="course-info-container-2128">
                                                                            <div class="media">
                                                                                <div class="pull-left">
                                                                                    <div class="media-object">
                                                                                        <div class="progress-chart-container m-b-1">
                                                                                            <div class="no-progress">
                                                                                                <img class="icon " alt="" src="https://www.floridaoberta.com/theme/image.php/adaptable/core/1519629762/i/course" />
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="media-body">
                                                                                    <h4 class="media-heading"><a href="https://www.floridaoberta.com/course/view.php?id=2128">DAW-Formación y Orientación Laboral</a></h4>
                                                                                </div>
                                                                            </div>
                                                                            <p class="text-muted">

                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="well well-small">
                                                                        <div class="course-info-container" id="course-info-container-2129">
                                                                            <div class="media">
                                                                                <div class="pull-left">
                                                                                    <div class="media-object">
                                                                                        <div class="progress-chart-container m-b-1">
                                                                                            <div class="no-progress">
                                                                                                <img class="icon " alt="" src="https://www.floridaoberta.com/theme/image.php/adaptable/core/1519629762/i/course" />
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="media-body">
                                                                                    <h4 class="media-heading"><a href="https://www.floridaoberta.com/course/view.php?id=2129">DAW-Inglés I</a></h4>
                                                                                </div>
                                                                            </div>
                                                                            <p class="text-muted">

                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="well well-small">
                                                                        <div class="course-info-container" id="course-info-container-2133">
                                                                            <div class="media">
                                                                                <div class="pull-left">
                                                                                    <div class="media-object">
                                                                                        <div class="progress-chart-container m-b-1">
                                                                                            <div class="no-progress">
                                                                                                <img class="icon " alt="" src="https://www.floridaoberta.com/theme/image.php/adaptable/core/1519629762/i/course" />
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="media-body">
                                                                                    <h4 class="media-heading"><a href="https://www.floridaoberta.com/course/view.php?id=2133">DAW-Lenguajes de Marcas y Sistemas de Gestión de la Información</a></h4>
                                                                                </div>
                                                                            </div>
                                                                            <p class="text-muted">

                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="well well-small">
                                                                        <div class="course-info-container" id="course-info-container-2130">
                                                                            <div class="media">
                                                                                <div class="pull-left">
                                                                                    <div class="media-object">
                                                                                        <div class="progress-chart-container m-b-1">
                                                                                            <div class="no-progress">
                                                                                                <img class="icon " alt="" src="https://www.floridaoberta.com/theme/image.php/adaptable/core/1519629762/i/course" />
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="media-body">
                                                                                    <h4 class="media-heading"><a href="https://www.floridaoberta.com/course/view.php?id=2130">DAW-Programación</a></h4>
                                                                                </div>
                                                                            </div>
                                                                            <p class="text-muted">

                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div data-region="paging-content-item"
                                                                     data-page="2"
                                                                     class="hidden ">
                                                                    <div class="well well-small">
                                                                        <div class="course-info-container" id="course-info-container-3207">
                                                                            <div class="media">
                                                                                <div class="pull-left">
                                                                                    <div class="media-object">
                                                                                        <div class="progress-chart-container m-b-1">
                                                                                            <div class="no-progress">
                                                                                                <img class="icon " alt="" src="https://www.floridaoberta.com/theme/image.php/adaptable/core/1519629762/i/course" />
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="media-body">
                                                                                    <h4 class="media-heading"><a href="https://www.floridaoberta.com/course/view.php?id=3207">DAW-Proyecto Integrado 1</a></h4>
                                                                                </div>
                                                                            </div>
                                                                            <p class="text-muted">

                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="well well-small">
                                                                        <div class="course-info-container" id="course-info-container-2131">
                                                                            <div class="media">
                                                                                <div class="pull-left">
                                                                                    <div class="media-object">
                                                                                        <div class="progress-chart-container m-b-1">
                                                                                            <div class="no-progress">
                                                                                                <img class="icon " alt="" src="https://www.floridaoberta.com/theme/image.php/adaptable/core/1519629762/i/course" />
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="media-body">
                                                                                    <h4 class="media-heading"><a href="https://www.floridaoberta.com/course/view.php?id=2131">DAW-Sistemas Informáticos</a></h4>
                                                                                </div>
                                                                            </div>
                                                                            <p class="text-muted">

                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="well well-small">
                                                                        <div class="course-info-container" id="course-info-container-2090">
                                                                            <div class="media">
                                                                                <div class="pull-left">
                                                                                    <div class="media-object">
                                                                                        <div class="progress-chart-container m-b-1">
                                                                                            <div class="no-progress">
                                                                                                <img class="icon " alt="" src="https://www.floridaoberta.com/theme/image.php/adaptable/core/1519629762/i/course" />
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="media-body">
                                                                                    <h4 class="media-heading"><a href="https://www.floridaoberta.com/course/view.php?id=2090">DAW-Tutoría</a></h4>
                                                                                </div>
                                                                            </div>
                                                                            <p class="text-muted">

                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="text-xs-center text-center">
                                                                <div aria-label=""
                                                                     id="pb-for-in-progress"
                                                                     class="pagination"
                                                                     data-region="paging-bar"
                                                                     data-page-count="2">

                                                                    <ul>
                                                                        <li class="page-item  "
                                                                            data-region="page-item"
                                                                            data-page-number="first">

                                                                            <a href="#"
                                                                               class="page-link"
                                                                               data-region="page-link">
                                                                                &laquo;
                                                                            </a>
                                                                        </li>
                                                                        <li class="page-item active "
                                                                            data-region="page-item"
                                                                            data-page-number="1">

                                                                            <a href="#"
                                                                               class="page-link"
                                                                               data-region="page-link">
                                                                                1
                                                                            </a>
                                                                        </li>
                                                                        <li class="page-item  "
                                                                            data-region="page-item"
                                                                            data-page-number="2">

                                                                            <a href="#"
                                                                               class="page-link"
                                                                               data-region="page-link">
                                                                                2
                                                                            </a>
                                                                        </li>
                                                                        <li class="page-item  "
                                                                            data-region="page-item"
                                                                            data-page-number="last">

                                                                            <a href="#"
                                                                               class="page-link"
                                                                               data-region="page-link">
                                                                                &raquo;
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="myoverview_courses_view_future">
                                                        <div class="text-xs-center text-center m-t-3">
                                                            <img class="empty-placeholder-image-lg"
                                                                 src="https://www.floridaoberta.com/theme/image.php/adaptable/block_myoverview/1519629762/courses"
                                                                 alt="Sin cursos futuros"
                                                                 role="presentation">
                                                            <p class="text-muted m-t-1">Sin cursos futuros</p>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="myoverview_courses_view_past">
                                                        <div class="text-xs-center text-center m-t-3">
                                                            <img class="empty-placeholder-image-lg"
                                                                 src="https://www.floridaoberta.com/theme/image.php/adaptable/block_myoverview/1519629762/courses"
                                                                 alt="Sin cursos pasados"
                                                                 role="presentation">
                                                            <p class="text-muted m-t-1">Sin cursos pasados</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div></div></div><span class="skip-block-to" id="sb-4"></span></aside></div><div class="span3"><aside id="block-region-frnt-market-c" class="block-region-front block-region" data-blockregion="frnt-market-c" data-droptarget="1"><a class="skip skip-block" id="fsb-5" href="#sb-5">Saltar Calendario</a><div id="inst46180" class="block_calendar_month  block" role="complementary" data-block="calendar_month" data-instanceid="46180" aria-labelledby="instance-46180-header" data-dockable="1"><div class="header"><div class="title"><div class="block_action"></div><h2 id="instance-46180-header">Calendario</h2></div></div><div class="content"><table class="minicalendar calendartable" summary="mayo 2018 Calendario"><caption><div class="calendar-controls"><a class="arrow_link previous" href="https://www.floridaoberta.com/my/index.php?time=1522533600" title="Mes anterior"><span class="arrow ">&#x25C4;</span><span class="accesshide " >&nbsp;<span class="arrow_text">Mes anterior</span></span></a><span class="hide"> | </span><span class="current"><a title="Este mes" href="https://www.floridaoberta.com/calendar/view.php?view=month&amp;time=1526280047&amp;course=1">mayo 2018</a></span><span class="hide"> | </span><a class="arrow_link next" href="https://www.floridaoberta.com/my/index.php?time=1527804000" title="Próximo mes"><span class="accesshide " ><span class="arrow_text">Próximo mes</span>&nbsp;</span><span class="arrow ">&#x25BA;</span></a><span class="clearer"><!-- --></span>
                                        </div></caption><tr class="weekdays"><th scope="col"><abbr title="Domingo">Dom</abbr></th>
                                        <th scope="col"><abbr title="Lunes">Lun</abbr></th>
                                        <th scope="col"><abbr title="Martes">Mar</abbr></th>
                                        <th scope="col"><abbr title="Miércoles">Mié</abbr></th>
                                        <th scope="col"><abbr title="Jueves">Jue</abbr></th>
                                        <th scope="col"><abbr title="Viernes">Vie</abbr></th>
                                        <th scope="col"><abbr title="Sábado">Sáb</abbr></th>
                                    </tr><tr><td class="dayblank">&nbsp;</td>
                                        <td class="dayblank">&nbsp;</td>
                                        <td class="day">1</td><td class="day hasevent calendar_event_course calendar_event_course"><a id="5af92f6f6d2f25af92f6f2d4c017" href="https://www.floridaoberta.com/calendar/view.php?view=day&amp;amp;time=1525212000#event_22531"
                                                                                                                                      data-container="body"
                                                                                                                                      data-toggle="popover"
                                                                                                                                      data-html="true"
                                                                                                                                      data-trigger="hover"
                                                                                                                                      data-placement="top"
                                                                                                                                      data-title="miércoles, 2 mayo eventos"
                                                                                                                                      data-content="&lt;div&gt;&lt;img class=&quot;icon &quot; alt=&quot;assign&quot; title=&quot;assign&quot; src=&quot;https://www.floridaoberta.com/theme/image.php/adaptable/assign/1519629762/icon&quot; /&gt;&lt;a href=&quot;https://www.floridaoberta.com/calendar/view.php?view=day&amp;amp;time=1525212000#event_22531&quot;&gt;Práctica 3 JSON&lt;/a&gt;&lt;/div&gt;">2</a></td><td class="day">3</td><td class="day hasevent calendar_event_course calendar_event_course"><a id="5af92f6f6d6165af92f6f2d4c018" href="https://www.floridaoberta.com/calendar/view.php?view=day&amp;amp;time=1525384800#event_12211"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         data-container="body"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         data-toggle="popover"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         data-html="true"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         data-trigger="hover"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         data-placement="top"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         data-title="viernes, 4 mayo eventos"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         data-content="&lt;div&gt;&lt;img class=&quot;icon &quot; alt=&quot;assign&quot; title=&quot;assign&quot; src=&quot;https://www.floridaoberta.com/theme/image.php/adaptable/assign/1519629762/icon&quot; /&gt;&lt;a href=&quot;https://www.floridaoberta.com/calendar/view.php?view=day&amp;amp;time=1525384800#event_12211&quot;&gt;Entrega&lt;/a&gt;&lt;/div&gt;">4</a></td><td class="weekend day">5</td></tr><tr><td class="weekend day hasevent calendar_event_course calendar_event_course"><a id="5af92f6f6d7c35af92f6f2d4c019" href="https://www.floridaoberta.com/calendar/view.php?view=day&amp;amp;time=1525557600#event_12210"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             data-container="body"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             data-toggle="popover"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             data-html="true"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             data-trigger="hover"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             data-placement="top"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             data-title="domingo, 6 mayo eventos"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             data-content="&lt;div&gt;&lt;img class=&quot;icon &quot; alt=&quot;assign&quot; title=&quot;assign&quot; src=&quot;https://www.floridaoberta.com/theme/image.php/adaptable/assign/1519629762/icon&quot; /&gt;&lt;a href=&quot;https://www.floridaoberta.com/calendar/view.php?view=day&amp;amp;time=1525557600#event_12210&quot;&gt;Actividad 8c (Hasta el 06/05 a las 23:55)&lt;/a&gt;&lt;/div&gt;">6</a></td><td class="day hasevent calendar_event_course calendar_event_course"><a id="5af92f6f6d9485af92f6f2d4c020" href="https://www.floridaoberta.com/calendar/view.php?view=day&amp;amp;time=1525644000#event_22778"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    data-container="body"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    data-toggle="popover"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    data-html="true"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    data-trigger="hover"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    data-placement="top"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    data-title="lunes, 7 mayo eventos"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    data-content="&lt;div&gt;&lt;img class=&quot;icon &quot; alt=&quot;assign&quot; title=&quot;assign&quot; src=&quot;https://www.floridaoberta.com/theme/image.php/adaptable/assign/1519629762/icon&quot; /&gt;&lt;a href=&quot;https://www.floridaoberta.com/calendar/view.php?view=day&amp;amp;time=1525644000#event_22778&quot;&gt;PRUEBA FINAL&lt;/a&gt;&lt;/div&gt;">7</a></td><td class="day hasevent calendar_event_course calendar_event_course"><a id="5af92f6f6db425af92f6f2d4c021" href="https://www.floridaoberta.com/calendar/view.php?view=day&amp;amp;time=1525730400#event_22813"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              data-container="body"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              data-toggle="popover"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              data-html="true"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              data-trigger="hover"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              data-placement="top"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              data-title="martes, 8 mayo eventos"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              data-content="&lt;div&gt;&lt;img class=&quot;icon &quot; alt=&quot;assign&quot; title=&quot;assign&quot; src=&quot;https://www.floridaoberta.com/theme/image.php/adaptable/assign/1519629762/icon&quot; /&gt;&lt;a href=&quot;https://www.floridaoberta.com/calendar/view.php?view=day&amp;amp;time=1525730400#event_22813&quot;&gt;Entrega Examen 3ª evaluación&lt;/a&gt;&lt;/div&gt;">8</a></td><td class="day hasevent calendar_event_course calendar_event_course"><a id="5af92f6f6dde95af92f6f2d4c022" href="https://www.floridaoberta.com/calendar/view.php?view=day&amp;amp;time=1525816800#event_22852"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        data-container="body"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        data-toggle="popover"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        data-html="true"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        data-trigger="hover"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        data-placement="top"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        data-title="miércoles, 9 mayo eventos"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        data-content="&lt;div&gt;&lt;img class=&quot;icon &quot; alt=&quot;assign&quot; title=&quot;assign&quot; src=&quot;https://www.floridaoberta.com/theme/image.php/adaptable/assign/1519629762/icon&quot; /&gt;&lt;a href=&quot;https://www.floridaoberta.com/calendar/view.php?view=day&amp;amp;time=1525816800#event_22850&quot;&gt;Examen 3ª eval PAR&lt;/a&gt;&lt;/div&gt;&lt;div&gt;&lt;img class=&quot;icon &quot; alt=&quot;assign&quot; title=&quot;assign&quot; src=&quot;https://www.floridaoberta.com/theme/image.php/adaptable/assign/1519629762/icon&quot; /&gt;&lt;a href=&quot;https://www.floridaoberta.com/calendar/view.php?view=day&amp;amp;time=1525816800#event_22852&quot;&gt;Examen 3ªeval IMPAR&lt;/a&gt;&lt;/div&gt;">9</a></td><td class="day hasevent calendar_event_course calendar_event_course"><a id="5af92f6f6df775af92f6f2d4c023" href="https://www.floridaoberta.com/calendar/view.php?view=day&amp;amp;time=1525903200#event_22326"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       data-container="body"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       data-toggle="popover"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       data-html="true"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       data-trigger="hover"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       data-placement="top"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       data-title="jueves, 10 mayo eventos"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       data-content="&lt;div&gt;&lt;img class=&quot;icon &quot; alt=&quot;assign&quot; title=&quot;assign&quot; src=&quot;https://www.floridaoberta.com/theme/image.php/adaptable/assign/1519629762/icon&quot; /&gt;&lt;a href=&quot;https://www.floridaoberta.com/calendar/view.php?view=day&amp;amp;time=1525903200#event_22326&quot;&gt;Proyecto 10b - Remember me&lt;/a&gt;&lt;/div&gt;">10</a></td><td class="day hasevent calendar_event_course calendar_event_course"><a id="5af92f6f6e0ec5af92f6f2d4c024" href="https://www.floridaoberta.com/calendar/view.php?view=day&amp;amp;time=1525989600#event_12213"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                data-container="body"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                data-toggle="popover"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                data-html="true"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                data-trigger="hover"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                data-placement="top"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                data-title="viernes, 11 mayo eventos"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                data-content="&lt;div&gt;&lt;img class=&quot;icon &quot; alt=&quot;assign&quot; title=&quot;assign&quot; src=&quot;https://www.floridaoberta.com/theme/image.php/adaptable/assign/1519629762/icon&quot; /&gt;&lt;a href=&quot;https://www.floridaoberta.com/calendar/view.php?view=day&amp;amp;time=1525989600#event_12213&quot;&gt;Entrega&lt;/a&gt;&lt;/div&gt;">11</a></td><td class="weekend day">12</td></tr><tr><td class="weekend day">13</td><td class="day today eventnone"><span class="accesshide " >Hoy lunes, 14 mayo </span><a id="5af92f6f6e2105af92f6f2d4c025" href="#"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             data-container="body"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             data-toggle="popover"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             data-html="true"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             data-trigger="hover"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             data-placement="top"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             data-title="Hoy lunes, 14 mayo"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             data-content="No hay eventos">14</a></td><td class="day">15</td><td class="day">16</td><td class="day">17</td><td class="day">18</td><td class="weekend day">19</td></tr><tr><td class="weekend day">20</td><td class="day">21</td><td class="day">22</td><td class="day">23</td><td class="day hasevent calendar_event_course calendar_event_course"><a id="5af92f6f6e3a05af92f6f2d4c026" href="https://www.floridaoberta.com/calendar/view.php?view=day&amp;amp;time=1527112800#event_22591"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      data-container="body"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      data-toggle="popover"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      data-html="true"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      data-trigger="hover"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      data-placement="top"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      data-title="jueves, 24 mayo eventos"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      data-content="&lt;div&gt;&lt;img class=&quot;icon &quot; alt=&quot;assign&quot; title=&quot;assign&quot; src=&quot;https://www.floridaoberta.com/theme/image.php/adaptable/assign/1519629762/icon&quot; /&gt;&lt;a href=&quot;https://www.floridaoberta.com/calendar/view.php?view=day&amp;amp;time=1527112800#event_22591&quot;&gt;Integrated Project Description DEADLINE 24 May &lt;/a&gt;&lt;/div&gt;">24</a></td><td class="day">25</td><td class="weekend day">26</td></tr><tr><td class="weekend day">27</td><td class="day">28</td><td class="day">29</td><td class="day">30</td><td class="day">31</td><td class="dayblank">&nbsp;</td><td class="dayblank">&nbsp;</td></tr></table></div></div><span class="skip-block-to" id="sb-5"></span><a class="skip skip-block" id="fsb-6" href="#sb-6">Saltar Eventos próximos</a><div id="inst46181" class="block_calendar_upcoming  block" role="complementary" data-block="calendar_upcoming" data-instanceid="46181" aria-labelledby="instance-46181-header" data-dockable="1"><div class="header"><div class="title"><div class="block_action"></div><h2 id="instance-46181-header">Eventos próximos</h2></div></div><div class="content"><div class="event"><span class="icon c0"><img src="https://www.floridaoberta.com/theme/image.php/adaptable/assign/1519629762/icon" alt="" title="Tarea" class="icon" /></span><a href="https://www.floridaoberta.com/mod/assign/view.php?id=134497">Integrated Project Description DEADLINE 24 May </a><div class="course"><a href="https://www.floridaoberta.com/course/view.php?id=2129">DAW-Inglés I</a></div><div class="date"><a href="https://www.floridaoberta.com/calendar/view.php?view=day&amp;time=1527198900">jueves, 24 mayo</a>, 23:55</div></div><div class="footer"><div class="gotocal"><a href="https://www.floridaoberta.com/calendar/view.php?view=upcoming&amp;course=1">Ir al calendario</a>...</div><div class="newevent"><a href="https://www.floridaoberta.com/calendar/event.php?action=new&amp;course=1">Nuevo evento</a>...</div></div></div></div><span class="skip-block-to" id="sb-6"></span><a class="skip skip-block" id="fsb-7" href="#sb-7">Saltar Twitter</a><div id="inst46184" class="block_html  block dock_on_load hidden" role="complementary" data-block="html" data-instanceid="46184" aria-labelledby="instance-46184-header" data-dockable="1"><div class="header"><div class="title"><div class="block_action"></div><h2 id="instance-46184-header">Twitter</h2></div></div><div class="content"><div class="no-overflow"><p><a class="twitter-timeline" data-lang="es" data-theme="light" data-tweet-limit="3" data-chrome="nofooter noheader" href="https://twitter.com/floridauni">Tweets by Florida</a></p>
                                    <script src="https://platform.twitter.com/widgets.js" type="text/javascript"></script></div></div></div><span class="skip-block-to" id="sb-7"></span></aside></div></div><div class="row" style="margin-left: 0px;"><div class="span4"><aside id="block-region-frnt-market-d" class="block-region-front block-region" data-blockregion="frnt-market-d" data-droptarget="1"></aside></div><div class="span4"><aside id="block-region-frnt-market-e" class="block-region-front block-region" data-blockregion="frnt-market-e" data-droptarget="1"></aside></div><div class="span4"><aside id="block-region-frnt-market-f" class="block-region-front block-region" data-blockregion="frnt-market-f" data-droptarget="1"></aside></div></div><div class="row" style="margin-left: 0px;"><div class="span3"><aside id="block-region-frnt-market-g" class="block-region-front block-region" data-blockregion="frnt-market-g" data-droptarget="1"></aside></div><div class="span3"><aside id="block-region-frnt-market-h" class="block-region-front block-region" data-blockregion="frnt-market-h" data-droptarget="1"></aside></div><div class="span3"><aside id="block-region-frnt-market-i" class="block-region-front block-region" data-blockregion="frnt-market-i" data-droptarget="1"></aside></div><div class="span3"><aside id="block-region-frnt-market-j" class="block-region-front block-region" data-blockregion="frnt-market-j" data-droptarget="1"></aside></div></div>        </div>
    </div>

    <div class="container outercont">
        <div id="page-content" class="row-fluid">
            <section id="region-main" class="span12">
                <span class="notifications" id="user-notifications"></span><div role="main"><span id="maincontent"></span><aside id="block-region-content" class="block-region" data-blockregion="content" data-droptarget="1"></aside></div>    </section>
            <aside id="block-region-side-post" class="empty block-region" data-blockregion="side-post" data-droptarget="1"></aside></div>

    </div>


    <footer id="page-footer">

        <div id="course-footer"></div>
        <div class="container blockplace1"><div class="row-fluid"><div class="left-col span3"><p>FLORIDA - Florida centre de formació</p>
                    <p>C/ Rei en Jaume I, nº2 46470 CATARROJA (Valencia)</p></div><div class="left-col span3"><p><a style="color:#fff;" href="http://www.floridauniversitaria.es/" target="_blank" rel="noreferrer">Florida universitària</a></p>
                    <p><a style="color:#fff;" href="http://www.floridauniversitaria.es/" target="_blank" rel="noreferrer">Florida Centre de Formació</a></p>
                    <p><a style="color:#fff;" href="http://www.floridasecundaria.es/" target="_blank" rel="noreferrer">Florida Secundaria</a></p>
                    <p><a style="color:#fff;" href="http://www.floridaempleo.com/" target="_blank" rel="noreferrer">Fundació Florida</a></p>
                    <p><a style="color:#fff;" href="http://www.escolesinfantilsninos.com/" target="_blank" rel="noreferrer">Niños Gestió Educativa</a></p></div><div class="left-col span3"><p><a title="Facebook" href="https://www.facebook.com/floridauniversitaria" target="_blank" rel="noreferrer"><em class="fa fa-facebook-square social-icon" style="font-size:50px;color:#424242;"> .</em></a><a title="Twitter" href="https://twitter.com/floridauni?lang=es" target="_blank" rel="noreferrer"><em class="fa fa-twitter-square social-icon" style="font-size:50px;color:#424242;"> .</em></a></p></div><div class="left-col span3"><p>Teléfono: 96 122 03 80</p>
                    <p>Dirección de correo: info@florida.es</p></div></div></div>    <div class="info container2 clearfix">
            <div class="container">
                <div class="row-fluid">
                    <div class="span8">
                        <p style="text-align:center;">2017 Florida Universitària</p>                </div>

                    <div class="span4">
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <a class="back-to-top" href="#top" ><i class="fa fa-angle-up "></i></a>
    <script type="text/javascript">
        //<![CDATA[
        var require = {
            baseUrl : 'https://www.floridaoberta.com/lib/requirejs.php/1507124093/',
            // We only support AMD modules with an explicit define() statement.
            enforceDefine: true,
            skipDataMain: true,
            waitSeconds : 0,

            paths: {
                jquery: 'https://www.floridaoberta.com/lib/javascript.php/1507124093/lib/jquery/jquery-3.1.0.min',
                jqueryui: 'https://www.floridaoberta.com/lib/javascript.php/1507124093/lib/jquery/ui-1.12.1/jquery-ui.min',
                jqueryprivate: 'https://www.floridaoberta.com/lib/javascript.php/1507124093/lib/requirejs/jquery-private'
            },

            // Custom jquery config map.
            map: {
                // '*' means all modules will get 'jqueryprivate'
                // for their 'jquery' dependency.
                '*': { jquery: 'jqueryprivate' },

                // 'jquery-private' wants the real jQuery module
                // though. If this line was not here, there would
                // be an unresolvable cyclic dependency.
                jqueryprivate: { jquery: 'jquery' }
            }
        };

        //]]>
    </script>
    <script type="text/javascript" src="https://www.floridaoberta.com/lib/javascript.php/1507124093/lib/requirejs/require.min.js"></script>
    <script type="text/javascript">
        //<![CDATA[
        require(['core/first'], function() {
            ;
            require(["media_videojs/loader"], function(loader) {
                loader.setUp(function(videojs) {
                    videojs.options.flash.swf = "https://www.floridaoberta.com/media/player/videojs/videojs/video-js.swf";
                    videojs.addLanguage("es",{
                        "Play": "Reproducción",
                        "Pause": "Pausa",
                        "Current Time": "Tiempo reproducido",
                        "Duration Time": "Duración total",
                        "Remaining Time": "Tiempo restante",
                        "Stream Type": "Tipo de secuencia",
                        "LIVE": "DIRECTO",
                        "Loaded": "Cargado",
                        "Progress": "Progreso",
                        "Fullscreen": "Pantalla completa",
                        "Non-Fullscreen": "Pantalla no completa",
                        "Mute": "Silenciar",
                        "Unmute": "No silenciado",
                        "Playback Rate": "Velocidad de reproducción",
                        "Subtitles": "Subtítulos",
                        "subtitles off": "Subtítulos desactivados",
                        "Captions": "Subtítulos especiales",
                        "captions off": "Subtítulos especiales desactivados",
                        "Chapters": "Capítulos",
                        "You aborted the media playback": "Ha interrumpido la reproducción del vídeo.",
                        "A network error caused the media download to fail part-way.": "Un error de red ha interrumpido la descarga del vídeo.",
                        "The media could not be loaded, either because the server or network failed or because the format is not supported.": "No se ha podido cargar el vídeo debido a un fallo de red o del servidor o porque el formato es incompatible.",
                        "The media playback was aborted due to a corruption problem or because the media used features your browser did not support.": "La reproducción de vídeo se ha interrumpido por un problema de corrupción de datos o porque el vídeo precisa funciones que su navegador no ofrece.",
                        "No compatible source was found for this media.": "No se ha encontrado ninguna fuente compatible con este vídeo."
                    });

                });
            });;
            require(["theme_adaptable/bsoptions"], function(amd) { amd.init(false); });;
            require(["block_navigation/navblock"], function(amd) { amd.init("4"); });;
            require(["block_settings/settingsblock"], function(amd) { amd.init("5", null); });;

            require(['jquery', 'block_myoverview/event_list'], function($, EventList) {
                var root = $("#event-list-container-");
                EventList.registerEventListeners(root);
            });
            ;

            require(['jquery', 'block_myoverview/event_list'], function($, EventList) {
                var root = $("#timeline-view-dates-5af92f6f332765af92f6f2d4c016").find('[data-region="event-list-container"]');
                EventList.load(root);
            });
            ;

            require(['jquery', 'block_myoverview/event_list'], function($, EventList) {
                var root = $("#event-list-container-2132");
                EventList.registerEventListeners(root);
            });
            ;

            require(['jquery', 'block_myoverview/event_list'], function($, EventList) {
                var root = $("#event-list-container-2127");
                EventList.registerEventListeners(root);
            });
            ;

            require(['jquery', 'block_myoverview/event_list'], function($, EventList) {
                var root = $("#event-list-container-2128");
                EventList.registerEventListeners(root);
            });
            ;

            require(['jquery', 'block_myoverview/event_list'], function($, EventList) {
                var root = $("#event-list-container-2129");
                EventList.registerEventListeners(root);
            });
            ;

            require(['jquery', 'block_myoverview/event_list'], function($, EventList) {
                var root = $("#event-list-container-2133");
                EventList.registerEventListeners(root);
            });
            ;

            require(['jquery', 'block_myoverview/event_list'], function($, EventList) {
                var root = $("#event-list-container-2130");
                EventList.registerEventListeners(root);
            });
            ;

            require(['jquery', 'block_myoverview/event_list'], function($, EventList) {
                var root = $("#event-list-container-3207");
                EventList.registerEventListeners(root);
            });
            ;

            require(['jquery', 'block_myoverview/event_list'], function($, EventList) {
                var root = $("#event-list-container-2131");
                EventList.registerEventListeners(root);
            });
            ;

            require(['jquery', 'block_myoverview/event_list'], function($, EventList) {
                var root = $("#event-list-container-2090");
                EventList.registerEventListeners(root);
            });
            ;

            require(['jquery', 'core/custom_interaction_events', 'block_myoverview/event_list_by_course'],
                function($, CustomEvents, EventListByCourse) {

                    var root = $("#sort-by-courses-view-5af92f6f332765af92f6f2d4c016");
                    // This flag is used so that we can delay the loading of the events until the tab
                    // is toggled by the user.
                    var seen = false;

                    CustomEvents.define(root, [CustomEvents.events.activate]);
                    // Show more courses and load their events when the user clicks the "more courses"
                    // button.
                    root.on(CustomEvents.events.activate, '[data-action="more-courses"]', function(e, data) {
                        var button = $(e.target);
                        var blocks = root.find('[data-region="course-block"].hidden');

                        if (blocks && blocks.length) {
                            var block = blocks.first();
                            EventListByCourse.init(block);
                            block.removeClass('hidden');
                        }

                        // If there was only one hidden block then we have no more to show now
                        // so we can disable the button.
                        if (blocks && blocks.length == 1) {
                            button.prop('disabled', true);
                        }

                        if (data) {
                            data.originalEvent.preventDefault();
                            data.originalEvent.stopPropagation();
                        }
                        e.stopPropagation();
                    });

                    // Listen for when the user changes tab so that we can show the first set of courses
                    // and load their events when they request the sort by courses view for the first time.
                    root.closest('[data-region="timeline-view"]').on('shown shown.bs.tab', function(e) {
                        if (seen) {
                            return;
                        }

                        var tab = $(e.target);
                        var tabTarget = $(tab.attr('href'));

                        if (!tabTarget || !tabTarget.length) {
                            return;
                        }

                        var viewCourses = tabTarget.find('#sort-by-courses-view-5af92f6f332765af92f6f2d4c016');

                        if (viewCourses && viewCourses.length && !seen) {
                            seen = true;
                            viewCourses.find('[data-action="more-courses"]').trigger(CustomEvents.events.activate);
                        }
                    });
                });
            ;

            require(['jquery', 'core/custom_interaction_events'], function($, customEvents) {
                var root = $('#timeline-view-5af92f6f332765af92f6f2d4c016');
                customEvents.define(root, [customEvents.events.activate]);
                root.on(customEvents.events.activate, '[data-toggle="btns"] > .btn', function() {
                    root.find('.btn.active').removeClass('active');
                    $(this).addClass('active');
                });
            });
            ;

            require(['jquery', 'block_myoverview/paging_bar'], function($, PagingBar) {
                var root = $('#pb-for-in-progress');
                PagingBar.registerEventListeners(root);
            });
            ;

            require(['jquery', 'block_myoverview/paging_bar', 'block_myoverview/paging_content'],
                function($, PagingBar, PagingContent) {

                    var root = $('#courses-view-in-progress');
                    var pagingBarElement = root.find(PagingBar.rootSelector);
                    var pagingContentElement = root.find(PagingContent.rootSelector);

                    var content = new PagingContent(pagingContentElement, pagingBarElement);
                    content.registerEventListeners();
                });
            ;

            require(['jquery', 'core/custom_interaction_events'], function($, customEvents) {
                var root = $('#courses-view-5af92f6f332765af92f6f2d4c016');
                customEvents.define(root, [customEvents.events.activate]);
                root.on(customEvents.events.activate, '[data-toggle="btns"] > .btn', function(e) {
                    root.find('.btn.active').removeClass('active');
                    $(e.target).closest('.btn').addClass('active');
                });
            });
            ;

            require(['jquery'], function($) {
                require(['theme_bootstrapbase/bootstrap'], function() {
                    $('#5af92f6f6d2f25af92f6f2d4c017').popover();
                });
            });
            ;

            require(['jquery'], function($) {
                require(['theme_bootstrapbase/bootstrap'], function() {
                    $('#5af92f6f6d6165af92f6f2d4c018').popover();
                });
            });
            ;

            require(['jquery'], function($) {
                require(['theme_bootstrapbase/bootstrap'], function() {
                    $('#5af92f6f6d7c35af92f6f2d4c019').popover();
                });
            });
            ;

            require(['jquery'], function($) {
                require(['theme_bootstrapbase/bootstrap'], function() {
                    $('#5af92f6f6d9485af92f6f2d4c020').popover();
                });
            });
            ;

            require(['jquery'], function($) {
                require(['theme_bootstrapbase/bootstrap'], function() {
                    $('#5af92f6f6db425af92f6f2d4c021').popover();
                });
            });
            ;

            require(['jquery'], function($) {
                require(['theme_bootstrapbase/bootstrap'], function() {
                    $('#5af92f6f6dde95af92f6f2d4c022').popover();
                });
            });
            ;

            require(['jquery'], function($) {
                require(['theme_bootstrapbase/bootstrap'], function() {
                    $('#5af92f6f6df775af92f6f2d4c023').popover();
                });
            });
            ;

            require(['jquery'], function($) {
                require(['theme_bootstrapbase/bootstrap'], function() {
                    $('#5af92f6f6e0ec5af92f6f2d4c024').popover();
                });
            });
            ;

            require(['jquery'], function($) {
                require(['theme_bootstrapbase/bootstrap'], function() {
                    $('#5af92f6f6e2105af92f6f2d4c025').popover();
                });
            });
            ;

            require(['jquery'], function($) {
                require(['theme_bootstrapbase/bootstrap'], function() {
                    $('#5af92f6f6e3a05af92f6f2d4c026').popover();
                });
            });
            ;

            require(['core/yui'], function(Y) {
                M.util.init_skiplink(Y);
            });
            ;

            require(['jquery', 'message_popup/message_popover_controller'], function($, controller) {
                var container = $('#nav-message-popover-container');
                var controller = new controller(container);
                controller.registerEventListeners();
                controller.registerListNavigationEventListeners();
            });
            ;

            require(['jquery', 'message_popup/notification_popover_controller'], function($, controller) {
                var container = $('#nav-notification-popover-container');
                var controller = new controller(container);
                controller.registerEventListeners();
                controller.registerListNavigationEventListeners();
            });
            ;
            require(["core/log"], function(amd) { amd.setConfig({"level":"warn"}); });
        });
        //]]>
    </script>
    <script type="text/javascript" src="https://www.floridaoberta.com/theme/javascript.php/adaptable/1519629762/footer"></script>
    <script type="text/javascript">
        //<![CDATA[
        M.str = {"moodle":{"lastmodified":"\u00daltima modificaci\u00f3n","name":"Nombre","error":"Error","info":"Informaci\u00f3n","yes":"S\u00ed","no":"No","viewallcourses":"Ver todos los cursos","cancel":"Cancelar","confirm":"Confirmar","areyousure":"\u00bfEst\u00e0 seguro?","closebuttontitle":"Cerrar","unknownerror":"Error desconocido"},"repository":{"type":"Tipo","size":"Tama\u00f1o","invalidjson":"Cadena JSON no v\u00e1lida","nofilesattached":"No se han adjuntado archivos","filepicker":"Selector de archivos","logout":"Salir","nofilesavailable":"No hay archivos disponibles","norepositoriesavailable":"Lo sentimos, ninguno de sus repositorios actuales puede devolver archivos en el formato solicitado.","fileexistsdialogheader":"El archivo existe","fileexistsdialog_editor":"Un archivo con el mismo nombre ya se ha adjuntado al texto que est\u00e1 editando.","fileexistsdialog_filemanager":"Un archivo con ese nombre ya ha sido adjuntado","renameto":"Cambiar el nombre a \"{$a}\"","referencesexist":"Existen {$a} archivos de alias\/atajos que emplean este archivo como su or\u00edgen","select":"Seleccionar"},"admin":{"confirmdeletecomments":"Est\u00e1 a punto de eliminar comentarios, \u00bfest\u00e1 seguro?","confirmation":"Confirmaci\u00f3n"},"block":{"addtodock":"Minimizar en la barra lateral","undockitem":"Desacoplar este \u00edtem","dockblock":"Acoplar bloque {$a}","undockblock":"Desacoplar bloque {$a}","undockall":"Desacoplar todo","hidedockpanel":"Esconder el panel desacoplado","hidepanel":"Esconder panel"},"langconfig":{"thisdirectionvertical":"btt"}};
        //]]>
    </script>
    <script type="text/javascript">
        //<![CDATA[
        (function() {Y.use("moodle-core-dock-loader",function() {M.core.dock.loader.initLoader();
        });
            Y.use("moodle-filter_mathjaxloader-loader",function() {M.filter_mathjaxloader.configure({"mathjaxconfig":"\n\nMathJax.Hub.Config({\n    config: [\"Accessible.js\", \"Safe.js\"],\n    errorSettings: { message: [\"!\"] },\n    skipStartupTypeset: true,\n    messageStyle: \"none\"\n});\n","lang":"es"});
            });
            M.util.help_popups.setup(Y);
            M.util.init_block_hider(Y, {"id":"inst4","title":"Navegaci\u00f3n","preference":"block4hidden","tooltipVisible":"Ocultar bloque Navegaci\u00f3n","tooltipHidden":"Mostrar bloque Navegaci\u00f3n"});
            M.util.init_block_hider(Y, {"id":"inst46179","title":"Archivos privados","preference":"block46179hidden","tooltipVisible":"Ocultar bloque Archivos privados","tooltipHidden":"Mostrar bloque Archivos privados"});
            M.util.init_block_hider(Y, {"id":"inst46182","title":"Vista general de curso","preference":"block46182hidden","tooltipVisible":"Ocultar bloque Vista general de curso","tooltipHidden":"Mostrar bloque Vista general de curso"});
            M.util.init_block_hider(Y, {"id":"inst46180","title":"Calendario","preference":"block46180hidden","tooltipVisible":"Ocultar bloque Calendario","tooltipHidden":"Mostrar bloque Calendario"});
            M.util.init_block_hider(Y, {"id":"inst46181","title":"Eventos pr\u00f3ximos","preference":"block46181hidden","tooltipVisible":"Ocultar bloque Eventos pr\u00f3ximos","tooltipHidden":"Mostrar bloque Eventos pr\u00f3ximos"});
            M.util.init_block_hider(Y, {"id":"inst46184","title":"Twitter","preference":"block46184hidden","tooltipVisible":"Ocultar bloque Twitter","tooltipHidden":"Mostrar bloque Twitter"});
            M.util.js_pending('random5af92f6f2d4c036'); Y.on('domready', function() { M.util.js_complete("init");  M.util.js_complete('random5af92f6f2d4c036'); });
        })();
        //]]>
    </script>

</div>
</body>
</html>
