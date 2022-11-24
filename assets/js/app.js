document.addEventListener("DOMContentLoaded",function() { 

    const swiper = new Swiper('.swiper', {
        // Optional parameters
        speed: 500,
        loop: true,
        effect: 'fade',
      
        autoplay: {
            delay: 8000,
            disableOnInteraction: false,
        },
    });

    const swiper_diensten = new Swiper('.swiper-diensten', {
      // Optional parameters
      speed: 500,
      loop: true,
      effect: 'fade',
      autoplay: {
          delay: 5000,
          disableOnInteraction: false,
      },
      navigation: {
        nextEl: '.diensten-right',
        prevEl: '.diensten-left',
      },
      pagination: {
        el: ".swiper-pagination",
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

    $mobile_button = document.querySelector('.mobile-button-container');
    $mobile_menu = document.querySelector('.mobile-menu-container');
    $mobile_button.addEventListener('click', function()  {
      if( $mobile_menu.classList.contains("open") ) {
        $mobile_button.classList.remove("clicked");
        $mobile_menu.classList.remove("open");
        document.querySelector('.mobile-menu-container').style.maxHeight = null;
      } else {
        $mobile_button.classList.add("clicked");
        $mobile_menu.classList.add("open");
        document.querySelector('.mobile-menu-container').style.maxHeight = '100vh';
      }
        
    });

});