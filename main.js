function reveal() {
    var reveals = document.querySelectorAll(".column, .row, .about, .img__open, .about__text, .column__img, .partners__txt, .become__partner");
  
    for (var i = 0; i < reveals.length; i++) {
      var windowHeight = window.innerHeight;
      var elementTop = reveals[i].getBoundingClientRect().top;
      var elementVisible = 150;
  
      if (elementTop < windowHeight - elementVisible) {
        reveals[i].classList.add("active");
      } else {
        reveals[i].classList.remove("active");
      }
    }
  }
  
  // window.addEventListener("scroll", reveal);


  // const popupContainer = document.getElementById('popup-container');
  // const closeLink = document.getElementById('close');
  
  // function openPopup() {
  //   popupContainer.style.display = 'flex';
  // }
  
  // function closePopup() {
  //   popupContainer.style.display = 'none';
  // }
  
  // closeLink.addEventListener('click', closePopup);

  window.addEventListener("scroll", reveal);

  
  const popupContainer = document.getElementById('popup-container');
  const closeLink = document.getElementById('close');
  const messageContainer = document.getElementById('message-container');
  const openButton = document.getElementById('open-popup');

  function showMessage() {
    messageContainer.style.display = 'block';
    messageContainer.style.textAlign = 'center';
    setTimeout(function() {
      messageContainer.style.opacity = '70%'; // Fade in the message
    }, 100); // Show the message container
  }
  
  closeLink.addEventListener('click', closePopup);
  
  

  