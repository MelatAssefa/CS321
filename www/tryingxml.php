<?php
if(isset($_POST['buttonImport'])) {
    copy($_FILES['xmlFile']['tmp_name'],
            'data/'.$_FILES['xmlFile']['tmp_name']);
}
?>
<form method="post" enctype="multipart/form-data">
    XML File <input type="file" name="xmlFile">
    <br>
    <input type="submit" value="Import" name="buttonImport">
    
   
</form>
 
