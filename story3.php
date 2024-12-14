<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Story 3</title>
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

    <h1>Story 3: The Grocery Store</h1>
    <p>
      You opened the door and found yourself in a dark grocery store. The faint hum of fluorescent lights flickered overhead, casting long, 
      eerie shadows between the aisles. Shelves were stocked, but nothing looked quite right—cereal boxes were labeled with gibberish, fruits 
      were colors they shouldn't be, and the freezers seemed to breathe foggy sighs.  </p>
    <p>
      “Hey! Over here!” a frantic whisper cut through the silence. You turned to see a disheveled figure crouched near the canned goods aisle. 
      They were wearing a store uniform, but their name tag was smudged and unreadable.  </p>
    <p>
      “You've got to help me,” they said, eyes darting nervously toward the back of the store. “Something... strange is going on here. The manager? 
      Yeah, he's not exactly human anymore. I tried to leave, but the doors just loop me right back in. You're the first person I've seen in hours, 
      please, we need to fix this!”  </p>
    <p>
      The air grew colder, and the sound of footsteps echoed from the rear of the store. The figure grabbed your arm, desperation clear in their voice. “What do you say? Are you in?”</p>
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
