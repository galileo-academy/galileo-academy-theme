document.addEventListener("DOMContentLoaded",function() { 

    const swiper = new Swiper('.swiper', {
        // Optional parameters
        speed: 500,
        loop: true,
        effect: 'fade',
      
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
    });

    let acc = document.getElementsByClassName("accordion");
    let i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
          this.classList.toggle("active");
          let panel = this.nextElementSibling;
          console.log(panel);
          if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
          } else {
            panel.style.maxHeight = '400px';
          }
        });
    }

    $hamburger_closed = document.querySelector('.mobile-button-container');
    $hamburger_open = document.querySelector('.open-menu-button');
    $hamburger_closed.addEventListener('click', function()  {
        document.querySelector('.mobile-menu-container').classList.remove('closed');
        document.querySelector('.mobile-menu-container').classList.add('open');
    });

    $hamburger_open.addEventListener('click', function()  {
        document.querySelector('.mobile-menu-container').classList.add('closed');
        document.querySelector('.mobile-menu-container').classList.remove('open');
    });

});