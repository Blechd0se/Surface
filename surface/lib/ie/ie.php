<?php
/**
 * @package		Surface.site
 * @subpackage	Templates.Surface
 * @copyright	Copyright (C) 2009 - 2012 Blechdose. All rights reserved.
 */
 setcookie("IE", "true", time()+60*60*24); // 1 Tag
 ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Internet Explorer wird nicht unterstützt</title>
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/lib/ie/css/site.css" type="text/css" />
<jdoc:include type="head" /> 
</head>

<body>

 <div class="box">  
 <b class="top">    
 <b class="r1"></b>
 <b class="r2"></b>    
 <b class="r3"></b>
 <b class="r4"></b>  
 </b>
 <?php echo JText::_( 'IE_WARNING_TEXT' ); ?>
    <p><form action="<?php echo $this->baseurl ?>/index.php" method="post" ><input type="submit" value="Go back!"></form></p>
       <b class="bottom">    
    <b class="r4"></b>
    <b class="r3">
    </b>    <b class="r2"></b>
    <b class="r1"></b>  </b>
    
    </div>
    <div class="browserkasten"> 
   <a href="http://www.google.de/chrome"><div class="klasse1"> </div></a>
   <a href="http://www.getfirefox.com"><div class="klasse2"> </div></a>
   <a href="http://www.microsoft.com/germany/windows/internet-explorer/worldwide-sites.aspx"><div class="klasse3"> </div></a>
   <a href="http://www.opera.com"><div class="klasse4"> </div></a>
   <a href="http://www.apple.com/de/safari/"><div class="klasse5"> </div></a>
   
   </div>
   
</body>
</html>