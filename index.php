<?php
session_start();  // Start PHP session
$_SESSION['visits'] = isset($_SESSION['visits']) ? $_SESSION['visits'] + 1 : 1;  // Increment visits
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="description" content="Christopher Ward Construction: Premium construction services in London. Residential and commercial building specialists. Secure, reliable, and professional." />
  <meta name="keywords" content="construction, builder, ,carpentry, London, home renovation, commercial builder, Christopher Ward" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1" />
  <meta name="robots" content="index, follow" />
  <title>Christopher Ward Construction // Access Restricted</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&family=Roboto+Mono:wght@300;400&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
  <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="terminal">
  <div class="title-bar">
    <div class="dots">
      <div class="dot red"></div>
      <div class="dot yellow"></div>
      <div class="dot green"></div>
    </div>
    c_ward_construction_os v2.4
  </div>

  <div class="content">
  <div class="logo">Christopher Ward Construction</div>

  <button class="execute" onclick="executeScript()">
    > ENTER_
  </button>

  <div id="revealed" class="hidden">
    <div class="reveal">
      <p>» ACCESS GRANTED «</p>
      <p>Phone: <strong>+44 7833630464</strong></p>
      <p>Email: office@christopherwardconstruction.com</p>
      <p class="visit-count">Access attempts: <?php echo $_SESSION['visits']; ?></p>  <!-- Display the visit count here -->
    </div>

    <form class="contact-form" action="https://formspree.io/f/mjklzrab" method="POST">
      <input type="email" name="email" placeholder="> INPUT_EMAIL_ADDRESS" required />
      <input type="text" name="message" placeholder="Quick message (optional)" />
      <button type="submit">SEND</button>
    </form>
    <p style="margin-top:1rem; font-size:0.9rem; opacity:0.7;">
      Quantum-resistant encryption active ™
    </p>
  </div>
</div>
</div>

<script>
  function executeScript() {
    document.getElementById('revealed').classList.remove('hidden');
    
    const btn = document.querySelector('.execute');
    btn.style.opacity = '0';
    btn.style.pointerEvents = 'none';
    setTimeout(() => btn.style.display = 'none', 400);
    
    document.body.style.background = '#000';  
  }
</script>
</body>
</html>