<?php if (!defined('IN_PHPBB')) exit; ?><head>
    <title><?php echo ((isset($this->_rootref['L_APPLICATION_PAGETITLE'])) ? $this->_rootref['L_APPLICATION_PAGETITLE'] : ((isset($user->lang['APPLICATION_PAGETITLE'])) ? $user->lang['APPLICATION_PAGETITLE'] : '{ APPLICATION_PAGETITLE }')); ?></title>
    <style type="text/css">
        table {border:none; min-width: 90%;}
        input[type='text'] {width:200px; text-align:center;}
        select {width:200px;}
        #appform td {display: table-cell; vertical-align: top; font-weight:700;}
        td + td {width:65%; font-weight:normal;}
        textarea {width: 100%; height:100px; resize:none; }
        #content {font-size: small;}
        .buttonholder{text-align: center;}
        input 
    </style>
    <script type="text/javascript">
            function Clear()
        {    
           document.getElementById("referer").value= "";
        }
    </script>

</head>
<body>
    <div class="panel">
        <div class="inner">
            <div class="content">
                <div class="wellcome"><?php echo ((isset($this->_rootref['L_APPLICATION_WELCOME_MESSAGE'])) ? $this->_rootref['L_APPLICATION_WELCOME_MESSAGE'] : ((isset($user->lang['APPLICATION_WELCOME_MESSAGE'])) ? $user->lang['APPLICATION_WELCOME_MESSAGE'] : '{ APPLICATION_WELCOME_MESSAGE }')); ?></div>
                <form method="post" action="<?php echo (isset($this->_rootref['PROCESS_APPFORM'])) ? $this->_rootref['PROCESS_APPFORM'] : ''; ?>" id="appform"> 

                    <table class="appform">
                        <tr>
                            <td>Character Name</td>
                            <td><input type="text" name="character_name" /></td>
                        </tr>
                        <tr>
                            <td>Class</td>
                            <td>
                                <?php 
                                require_once($_SERVER['DOCUMENT_ROOT'] . '/forum/wow_armory_API.php');
                                echo editorForClass('character_class');
                                 ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Realm</td>
                            <td>        
                                <?php 
                                echo editorForRealm('realm', 'Auchindoun');
                                 ?>
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo ((isset($this->_rootref['L_QUESTION_1'])) ? $this->_rootref['L_QUESTION_1'] : ((isset($user->lang['QUESTION_1'])) ? $user->lang['QUESTION_1'] : '{ QUESTION_1 }')); ?></td>
                            <td><textarea name="question1" form="appform"></textarea></td>
                        </tr>
                        <tr>
                            <td><?php echo ((isset($this->_rootref['L_QUESTION_2'])) ? $this->_rootref['L_QUESTION_2'] : ((isset($user->lang['QUESTION_2'])) ? $user->lang['QUESTION_2'] : '{ QUESTION_2 }')); ?></td>
                            <td><textarea name="question2" form="appform"></textarea></td>
                        </tr>
                        <tr>
                            <td><?php echo ((isset($this->_rootref['L_QUESTION_3'])) ? $this->_rootref['L_QUESTION_3'] : ((isset($user->lang['QUESTION_3'])) ? $user->lang['QUESTION_3'] : '{ QUESTION_3 }')); ?></td>
                            <td><textarea name="question3" form="appform"></textarea></td>
                        </tr>
                        <tr>
                            <td><?php echo ((isset($this->_rootref['L_QUESTION_4'])) ? $this->_rootref['L_QUESTION_4'] : ((isset($user->lang['QUESTION_4'])) ? $user->lang['QUESTION_4'] : '{ QUESTION_4 }')); ?></td>
                            <td><textarea name="question4" form="appform"></textarea></td>
                        </tr>
                        <tr>
                            <td><?php echo ((isset($this->_rootref['L_QUESTION_5'])) ? $this->_rootref['L_QUESTION_5'] : ((isset($user->lang['QUESTION_5'])) ? $user->lang['QUESTION_5'] : '{ QUESTION_5 }')); ?></td>
                            <td><textarea name="question5" form="appform"></textarea></td>
                        </tr>
                        <tr>
                            <td><?php echo ((isset($this->_rootref['L_QUESTION_6'])) ? $this->_rootref['L_QUESTION_6'] : ((isset($user->lang['QUESTION_6'])) ? $user->lang['QUESTION_6'] : '{ QUESTION_6 }')); ?></td>
                            <td><textarea name="question6" form="appform"></textarea></td>
                        </tr>
                        <tr>
                            <td><?php echo ((isset($this->_rootref['L_QUESTION_7'])) ? $this->_rootref['L_QUESTION_7'] : ((isset($user->lang['QUESTION_7'])) ? $user->lang['QUESTION_7'] : '{ QUESTION_7 }')); ?></td>
                            <td><textarea name="question7" form="appform"></textarea></td>
                        </tr>
                        <tr>
                            <td><?php echo ((isset($this->_rootref['L_QUESTION_8'])) ? $this->_rootref['L_QUESTION_8'] : ((isset($user->lang['QUESTION_8'])) ? $user->lang['QUESTION_8'] : '{ QUESTION_8 }')); ?></td>
                            <td><textarea name="question8" form="appform"></textarea></td>
                        </tr>
                        <tr>
                            <td><?php echo ((isset($this->_rootref['L_QUESTION_9'])) ? $this->_rootref['L_QUESTION_9'] : ((isset($user->lang['QUESTION_9'])) ? $user->lang['QUESTION_9'] : '{ QUESTION_9 }')); ?></td>
                            <td>
                            <input type="radio" name="question9" value="WoW Progress">WoW Progress<br>
                            <input type="radio" name="question9" value="From a friend">From a friend<br>
                            <input type="radio" name="question9" value="From a guild member">From a guild member<br>
                            <input type="radio" name="question9" value="MMO-Champion">MMO-Champion<br>
                            <input type="radio" name="question9" value="WoW-EU Forums">WoW-EU Forums<br>
                            <input type="text" name="referer" onClick="Clear();" id="referer" value ="If you have people who can vouch for you list them here..." style="width: 500px;">
                            </td>
                        </tr>
                            <td><?php echo ((isset($this->_rootref['L_QUESTION_10'])) ? $this->_rootref['L_QUESTION_10'] : ((isset($user->lang['QUESTION_10'])) ? $user->lang['QUESTION_10'] : '{ QUESTION_10 }')); ?></td>
                            <td><textarea name="question10" form="appform"></textarea></td>
                        </tr>

                    </table>
                    <br /><br />
                    <div class="buttonholder">
                     <input type="submit" name="submit" id ="submit" value="<?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?>" class="button1" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>