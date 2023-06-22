<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Comments Example</title>

  <!-- link to external stylesheet -->
  <link rel="stylesheet" href="reacties4.css">
</head>

<body>
  <!-- button to show comment form -->
  <h2 class="header bodies">NUjij-reacties</h2>
  <button class="knop bodies" id='show-comment-form'>50 reacties</button>



  <div class='comments-section bodies'>

    <div class="comment-form-container hidden">
      <div class="informatie">
        <p>
          Welkom bij NUjij! Hier kan je discussiëren over het nieuws, vragen stellen en inhoudelijk iets bijdragen aan
          artikelen. We hebben onze huisregels geüpdatet! Lees ze voor je volgende reactie nog eens goed door en ga dan
          verder met reageren. Je vindt ze via 
          <a href="https://www.nu.nl/nujij/5204540/nujij-huisregels.html">deze link</a> en 
          <a href="https://www.nu.nl/nujij/5215910/nujij-veelgestelde-vragen.html">hier vind je een
            overzicht met veelgestelde vragen</a>.
        </p>
        <hr>
        <p>
          Op NUjij vind je achter sommige reacties een expertlabel. Zo'n label vertelt je wat de expertise of het beroep
          van een gebruiker is die een reactie achterlaat. Denk je dat jij wat bij kan dragen aan NU.nl? Meld je via
          <a href="https://docs.google.com/forms/d/e/1FAIpQLSdKYg6s6ByI6pfMxXE-B_JGeBpgx9Xxqv20wd2FapLAbvTr_A/viewform">deze link</a> 
          aan voor een expertlabel. We staan open voor alle experts: van wetenschappers tot leraren en van bouwvakkers tot makelaars.
        </p>
      </div>



      <form action="" method="POST" class="comment-form">

        <!-- name input field -->
        <div class="form-group">
  <label class="naamnaam" for="name">Naam:</label>
  <input type="text" name="name" required>
</div>

<div class='form-group'>
    <textarea name='comment' rows=10 placeholder='Plaats een reactie' required></textarea>

    <button type='submit' class='submitten'>Versturen</button>

  </div>


<span id = "submitted-comments"></span>


      </form>

     	<ul id = 'comment-section'></ul>


    </div>

  </div>
  
  	<div id="footer-container"></div>

  <!-- JS Code -->
  <script>

    const showCommentButton = document.getElementById('show-comment-form');
    const commentsSection = document.querySelector('.comment-form-container');


    showCommentButton.addEventListener('click', () => {

      showCommentButton.style.display = 'none';

      commentsSection.classList.remove('hidden');
    });

const commentForm = document.querySelector('.comment-form');

// get reference to empty container for submitted comments
const commentContainer = document.getElementById("comment-section");

commentForm.addEventListener('submit', (event) => {
  
  event.preventDefault();

	 // get reference to name input field value 
  	const nameInput = document.querySelector('[name="name"]'); 
	
	  // get reference to text area and add the new comment content as a child element of the comment section.
  	const textareaValue = event.target.comment.value;
  	commentContainer.insertAdjacentHTML("beforeend", `<span  style='margin-top: 75px'> Naam: ${nameInput.value}</span> <hr> <span> Bericht: ${textareaValue}</span>`);
  
  		// clear text areas after submitting the form.
   		event.target.reset();
});
  </script>
  
  <?php 
include '..\footernu.nl\footer.php'; 

?> 

<?php 
include '..\reactiepagina\reacties.php'; 

?> 

<?php 
include '..\reactiepagina\db.inc.php'; 

?> 

</body>

</html>