<head>
    <title>{L_APPLICATION_PAGETITLE}</title>
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
                <div class="wellcome">{L_APPLICATION_WELCOME_MESSAGE}</div>
                <form method="post" action="{PROCESS_APPFORM}" id="appform"> 

                    <table class="appform">
                        <tr>
                            <td>Character Name</td>
                            <td><input type="text" name="character_name" /></td>
                        </tr>
                        <tr>
                            <td>Class</td>
                            <td>
                                <!-- PHP -->                           
                                require_once($_SERVER['DOCUMENT_ROOT'] . '/forum/wow_armory_API.php');
                                echo editorForClass('character_class', trim($_GET['character_class']));
                                <!-- ENDPHP -->
                            </td>
                        </tr>
                        <tr>
                            <td>Realm</td>
                            <td>        
                                <!-- PHP -->
                                echo editorForRealm('realm', 'Auchindoun');
                                <!-- ENDPHP -->
                            </td>
                        </tr>
                    </table>
                    <div id="tabs">
                        <!--<ul>
                            <li><a href="#template">Template</a></li>
                            <li><a href="#free-form">Free form</a></li>
                        </ul>-->
                        <div id="template">
                            <table class="appform">
                                <tr>
                                    <td>{L_QUESTION_1}</td>
                                    <td><textarea name="question1" form="appform"></textarea></td>
                                </tr>
                                <tr>
                                    <td>{L_QUESTION_2}</td>
                                    <td><textarea name="question2" form="appform"></textarea></td>
                                </tr>
                                <tr>
                                    <td>{L_QUESTION_3}</td>
                                    <td><textarea name="question3" form="appform"></textarea></td>
                                </tr>
                                <tr>
                                    <td>{L_QUESTION_4}</td>
                                    <td><textarea name="question4" form="appform"></textarea></td>
                                </tr>
                                <tr>
                                    <td>{L_QUESTION_5}</td>
                                    <td><textarea name="question5" form="appform"></textarea></td>
                                </tr>
                                <tr>
                                    <td>{L_QUESTION_6}</td>
                                    <td><textarea name="question6" form="appform"></textarea></td>
                                </tr>
                                <tr>
                                    <td>{L_QUESTION_7}</td>
                                    <td><textarea name="question7" form="appform"></textarea></td>
                                </tr>
                                <tr>
                                    <td>{L_QUESTION_8}</td>
                                    <td><textarea name="question8" form="appform"></textarea></td>
                                </tr>
                                <tr>
                                    <td>{L_QUESTION_9}</td>
                                    <td>
                                    <input type="radio" name="question9" value="WoW Progress">WoW Progress<br>
                                    <input type="radio" name="question9" value="From a friend">From a friend<br>
                                    <input type="radio" name="question9" value="From a guild member">From a guild member<br>
                                    <input type="radio" name="question9" value="MMO-Champion">MMO-Champion<br>
                                    <input type="radio" name="question9" value="WoW-EU Forums">WoW-EU Forums<br>
                                    <input type="text" name="referer" onClick="Clear();" id="referer" value ="If you have people who can vouch for you list them here..." style="width: 500px;">
                                    </td>
                                </tr>
                                    <td>{L_QUESTION_10}</td>
                                    <td><textarea name="question10" form="appform"></textarea></td>
                                </tr>

                            </table>
                        </div>
                        <!--<div id="free-form">
                            <input type="text" name="free-form-app-content"/>
                        </div>-->
                    </div>
                    <br /><br />
                    <div class="buttonholder">
                     <input type="submit" name="submit" id ="submit" value="{L_SUBMIT}" class="button1" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>