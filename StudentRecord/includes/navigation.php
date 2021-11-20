
<body>
<nav class="navbar navbar-expand-lg navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Student Records</a>
    </div>
    <ul class="nav navbar-nav">

      <a class="nav-link <?php if ($CURRENT_PAGE == "Index") {?>active<?php }?>" href="?page=home">Home</a>
      <a class="nav-link <?php if ($CURRENT_PAGE == "Departments") {?>active<?php }?>" href="?page=departments">Departments</a>
     
    </ul>
  </div>
</nav>