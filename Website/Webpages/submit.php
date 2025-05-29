<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Thank You</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      height: 100vh;
      background: linear-gradient(-45deg, #667eea, #764ba2, #89f7fe, #66a6ff);
      background-size: 400% 400%;
      animation: gradientFlow 15s ease infinite;
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
      color: #fff;
    }

    /* Animated gradient background */
    @keyframes gradientFlow {
      0% {background-position: 0% 50%;}
      50% {background-position: 100% 50%;}
      100% {background-position: 0% 50%;}
    }

    /* Floating bubbles */
    .bubbles {
      position: absolute;
      width: 100%;
      height: 100%;
      overflow: hidden;
      z-index: 0;
    }

    .bubble {
      position: absolute;
      bottom: -100px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(3px);
      animation: floatUp 20s linear infinite;
    }

    .bubble:nth-child(1) { left: 10%; width: 60px; height: 60px; animation-duration: 24s; }
    .bubble:nth-child(2) { left: 25%; width: 30px; height: 30px; animation-duration: 18s; }
    .bubble:nth-child(3) { left: 40%; width: 50px; height: 50px; animation-duration: 20s; }
    .bubble:nth-child(4) { left: 65%; width: 70px; height: 70px; animation-duration: 22s; }
    .bubble:nth-child(5) { left: 80%; width: 40px; height: 40px; animation-duration: 19s; }

    @keyframes floatUp {
      0% { transform: translateY(0) scale(1); }
      100% { transform: translateY(-120vh) scale(1.5); }
    }

    /* Sparkles for confetti feel */
    .sparkle {
      position: absolute;
      width: 5px;
      height: 5px;
      background: #fff;
      opacity: 0.8;
      border-radius: 50%;
      animation: sparkle 2s infinite ease-in-out;
    }

    @keyframes sparkle {
      0%, 100% { opacity: 0; transform: scale(0.8); }
      50% { opacity: 1; transform: scale(1.4); }
    }

    .thank-you-box {
      position: relative;
      background: rgba(255, 255, 255, 0.12);
      border: 1px solid rgba(255, 255, 255, 0.25);
      border-radius: 20px;
      padding: 50px 60px;
      box-shadow: 0 12px 40px rgba(0, 0, 0, 0.3);
      backdrop-filter: blur(16px);
      z-index: 10;
      text-align: center;
      animation: fadeInUp 1s ease;
    }

    .thank-you-box h1 {
      font-size: 3rem;
      margin-bottom: 15px;
      color: #ffffff;
    }

    .thank-you-box p {
      font-size: 1.2rem;
      color: #f0f0f0;
    }

    .thank-you-box a {
      display: inline-block;
      margin-top: 25px;
      padding: 12px 26px;
      background: #fff;
      color: #764ba2;
      border-radius: 10px;
      font-weight: bold;
      text-decoration: none;
      transition: background 0.3s ease, color 0.3s ease;
    }

    .thank-you-box a:hover {
      background: #f0f0f0;
      color: #555;
    }

    @keyframes fadeInUp {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>

<!-- Floating bubbles background -->
<div class="bubbles">
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
</div>

<!-- Random sparkles -->
<script>
  for (let i = 0; i < 30; i++) {
    const sparkle = document.createElement("div");
    sparkle.classList.add("sparkle");
    sparkle.style.left = Math.random() * 100 + "vw";
    sparkle.style.top = Math.random() * 100 + "vh";
    sparkle.style.animationDelay = (Math.random() * 2) + "s";
    document.body.appendChild(sparkle);
  }
</script>

<!-- Thank You Card -->
<div class="thank-you-box">
  <h1>🎉 Thank You!</h1>
  <p>Your submission was successful.</p>
  <a href="index.php">Go Back</a>
</div>

</body>
</html>
