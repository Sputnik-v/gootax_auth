<?php

require_once __DIR__ . "/../vendor/helpers.php";

$titleHeader = checkSessionAuth() ? "You are register" : "To get started, register";

$link = checkSessionAuth()
    ?
    "<ul class='navbar-nav me-auto mb-2 mb-lg-0'>
        <li class='nav-item'>
          <a class='nav-link' href='feedback'>FeedBack</a>
        </li>
      </ul>"
    :
    "<ul class='navbar-nav me-auto mb-2 mb-lg-0'>
        <li class='nav-item'>
          <a class='nav-link active' aria-current='page' href='/'>Home</a>
        </li>
      </ul>";

$headerContent = "<nav class='navbar navbar-expand-lg navbar-light bg-info'>
  <div class='container-fluid py-2'>
    <a class='navbar-brand' href='https://pegast.ru/'>Pegas co.</a>
    <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarText' aria-controls='navbarText' aria-expanded='false' aria-label='Toggle navigation'>
      <span class='navbar-toggler-icon'></span>
    </button>
    <div class='collapse navbar-collapse' id='navbarText'>
      {$link}
      <span class='navbar-text'>
        {$titleHeader}
      </span>
    </div>
  </div>
</nav>";