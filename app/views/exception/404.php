<?= '<?xml version="1.0" encoding="utf-8"?>' ?> 
<!DOCTYPE html PUBLIC "-//W3C/DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Page not found</title>
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
  <?= $this->stylesheetLinkTag("application", ['media' => 'screen', 'title' => 'default']) ?> 
</head>
<body>
  <div style="text-align: center;">
    <img src="/images/404.jpg" alt="Page not found" style="margin: auto;" />
    <h1>That page does not exist.</h1>
    <p><a href="/">Return to index</a></p>
  </div>
</body>
</html>
