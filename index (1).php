<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>APK Download - PhonePe Spoof</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background: #0a0a0a;
      font-family: 'Poppins', sans-serif;
      color: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      overflow: hidden;
    }

    .container {
      background: rgba(15, 15, 15, 0.9);
      padding: 40px;
      width: 90%;
      max-width: 400px;
      border-radius: 20px;
      text-align: center;
      box-shadow: 0 0 15px rgba(0, 255, 0, 0.5);
      border: 2px solid rgba(0, 255, 0, 0.8);
      position: relative;
    }

    .logo img {
      width: 100px;
      filter: drop-shadow(0 0 10px #00ff00);
    }

    .title {
      margin-top: 15px;
      font-size: 2rem;
      font-weight: bold;
      text-transform: uppercase;
      color: #00ff00;
      text-shadow: 0 0 10px #00ff00;
    }

    .description {
      margin: 20px 0;
      font-size: 1rem;
      color: #bbb;
    }

    .buttons {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    .btn {
      padding: 15px;
      font-size: 1rem;
      font-weight: bold;
      text-transform: uppercase;
      color: #000;
      background: #00ff00;
      border-radius: 30px;
      text-align: center;
      cursor: pointer;
      transition: 0.3s;
      border: none;
    }

    .btn:hover {
      background: #00cc00;
      box-shadow: 0 0 15px #00ff00;
    }

    .popup {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background: #111;
      padding: 20px;
      width: 300px;
      border-radius: 10px;
      text-align: center;
      box-shadow: 0 0 20px rgba(0, 255, 0, 0.5);
      border: 2px solid #00ff00;
      display: none;
    }

    .popup-title {
      font-size: 1.2rem;
      font-weight: bold;
      margin-bottom: 10px;
      color: #00ff00;
    }

    .glow {
      position: absolute;
      width: 100%;
      height: 100%;
      background: radial-gradient(circle, rgba(0, 255, 0, 0.1), transparent);
      animation: flicker 2s infinite alternate;
      z-index: -1;
    }

    @keyframes flicker {
      0% { opacity: 0.8; }
      100% { opacity: 0.4; }
    }
  </style>
</head>
<body>
  <div class="glow"></div>
  <div class="container">
    <div class="logo">
      <img src="IMG_1921.png" alt="App Logo">
    </div>
    <div class="title">PhonePe Spoof</div>
    <div class="description">
      • Fake PhonePe 🔥<br>
      • Unlimited Money 😍<br>
      • Same to Same UI 🤩<br>
    </div>
    <div class="buttons">
      <button class="btn" id="downloadBtn">Download APK</button>
    </div>
  </div>

  <div class="popup" id="popup">
    <div class="popup-title">Last Step To Download Your Apk:<br><br>Join Our Official Whatsapp Channel<br><br></div>
    <div class="popup-buttons">
      <a href="https://whatsapp.com/channel/0029VaiZvseFMqrPVFeWnw3r" target="_blank" class="btn" id="confirmJoin">Join & Continue</a><br><br>
    </div>
  </div>

  <script>
    let joined = false;

    document.getElementById('downloadBtn').addEventListener('click', function() {
      if (!joined) {
        document.getElementById('popup').style.display = 'block';
      } else {
        window.location.href = 'phonepe.apk';
      }
    });

    document.getElementById('confirmJoin').addEventListener('click', function() {
      joined = true;
      document.getElementById('popup').style.display = 'none';
    });
  </script>
</body>
</html>
