
<input type="file" name="fileToUpload">
<?php

   	 $logoFileName = basename($_FILES["fileToUpload"]["name"]);

   	 echo $logoFileName;



?>