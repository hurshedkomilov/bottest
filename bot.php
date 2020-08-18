<?php

const botToken = "902091101:AAEK_pfxn1JYdxz6lCy7XfKytq5uzaUTDDM";
const webSite = "https://api.telegram.org/bot".botToken;

?>

<form action="<?php echo webSite.'/sendPhoto'?> " method="post" enctype="multipart/form-data">

<input type="text" name="chat_id" value="503568897"/>
<input type="file" name="photo" />
<input type="submit" value="send"/> 

</form>