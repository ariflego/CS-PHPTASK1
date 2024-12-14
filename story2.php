<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Story 2</title>
  <style>
    /* Basic Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* Body Styling */
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f0f0f0;
      color: #333;
      line-height: 1.6;
      padding: 20px;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      text-align: center;
      background: linear-gradient(135deg, #ff8a00, #e52e71);
    }

    /* Header Styling */
    h1 {
      font-size: 3em;
      color: white;
      margin-bottom: 20px;
      font-weight: bold;
      letter-spacing: 2px;
    }

    /* Paragraph Styling */
    p {
      font-size: 1.2em;
      max-width: 800px;
      margin: 0 auto 20px;
      color: #f8f8f8;
      text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
      opacity: 0;  /* Start with text hidden */
      transition: opacity 2s ease-in-out;
    }

    /* Link Styling */
    a {
      font-size: 1.1em;
      color: #ff8a00;
      text-decoration: none;
      border: 2px solid #ff8a00;
      padding: 10px 20px;
      border-radius: 5px;
      background-color: transparent;
      transition: all 0.3s ease;
    }

    a:hover {
      background-color: #ff8a00;
      color: white;
    }

    /* Fade Overlay Styling */
    #fadeOverlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: black;
      opacity: 1;
      transition: opacity 1s ease;
      pointer-events: none;
    }
  </style>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const fadeOverlay = document.getElementById('fadeOverlay');
      const paragraphs = document.querySelectorAll('p');

      // Start with full opacity (black screen) for fade overlay
      fadeOverlay.style.opacity = '1';

      // Delay the fade-out effect for the overlay
      setTimeout(() => {
        // Fade out the overlay
        fadeOverlay.style.opacity = '0';

        // After the fade-out effect is done, hide the overlay completely
        setTimeout(() => {
          fadeOverlay.style.display = 'none';
        }, 1000); // Match the duration of the fade-out effect
      }, 1000); // Delay before starting the fade-out

      // Reveal paragraphs one by one
      let delay = 2000; // Initial delay for first paragraph (to match fade-in effect)
      
      paragraphs.forEach((para, index) => {
        setTimeout(() => {
          para.style.opacity = '1';  // Make the paragraph visible
        }, delay);

        delay += 3000; // Increase delay for next paragraph to make them appear one after another
      });
    });
  </script>
</head>
<body>
  <!-- Fade overlay -->
  <div id="fadeOverlay"></div>

  <!-- Main content -->
  <div>
    <?php
    echo "

      <h1>Story 2: The Castle</h1>
      <p>
        You opened the door and found yourself in a dark castle corridor. The faint sound of distant music drifted through the halls, 
        accompanied by the soft rustle of tapestries swaying gently in the breeze. A golden candelabra flickered to life on its own, illuminating 
        the intricate carvings on the stone walls.
      </p>
      <p>
        “Ah, a visitor at last!” came a cheerful voice from the shadows. A young man in elegant robes emerged, his eyes sparkling with excitement. 
        “You've no idea how long we've been waiting for someone like you!”
      </p>
      <p>
        Before you could respond, the corridor seemed to brighten as more candles lit up, revealing a grand staircase spiraling upwards. The man 
        gestured dramatically, his grin widening. “The castle holds wonders you can't imagine. Come, let me show you the Great Library—or perhaps 
        you'd rather meet the enchanted musicians in the ballroom?”
      </p>
      <p>
        Something about the place felt alive, humming with a quiet, welcoming magic. And despite the mysterious air, the castle seemed to beckon 
        you with warmth.
      </p>
      <p>
        What do you do?
      </p>

      <a href='index.html'>Back to Home</a>
      <a href='index.html'>Back to Home</a>
      <a href='index.html'>Back to Home</a>
      <a href='index.html'>Back to Home</a>

    "

    ?>
  </div>
</body>
</html>
