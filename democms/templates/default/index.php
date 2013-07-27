<html>
<head>
    <title>This is default template of MyCMS</title>
    <link type='text/css' rel='stylesheet' href='<?php echo $this->getCurrentTemplatePath();?>css/style.css' />
</head>
<body>
<div class="wrapper">
    <div class="header">MyCMS</div>
    <div class='clear'></div>
    <div class="sidebar">
        this is sidebar
        <br><br><br><br><br><br><br>
    </div>
    <div class='content'>
        <?php echo $this->appoutput();?>
        <br><br><br><br><br>
    </div>
    <div class='clear'></div>
    <div class="footer">
        this is footer text                
    </div>
</div>
</body>
</html>