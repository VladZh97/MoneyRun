import '../scss/style.scss'
// import "../js/scrollToDiv.js";


// LOADER
const loader = document.querySelector('.spinner__container');
const html = document.querySelector('html');

window.addEventListener('load', function() {
  loader.parentElement.removeChild(loader);
  html.style.overflowY = 'auto';
})




// COOKIES
class MScookies {
	constructor() {
		this.WHCheckCookies();
	}
	WHCheckCookies() {
		if (this.WHReadCookie('cookies_accepted') != 'T') {
			var message_container = document.createElement('div');
      message_container.id = 'cookies-message-container';
        var html_code = '<div id="cookies-message" style="color: #000; padding: 10px 10px; font-size: 12px; line-height: 16px; display: flex; justify-content: space-between; align-items: center; position: fixed; bottom: 20px; right: 20px; background-color: #fff; width: 100%; max-width: 320px; font-family: sans-serif; z-index: 999; box-sizing: border-box; box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);">';
        html_code += '<svg id="Capa_1" style="fill:#8260ce" enable-background="new 0 0 556.235 556.235" height="30" viewBox="0 0 556.235 556.235" width="30" xmlns="http://www.w3.org/2000/svg"><path d="m278.118 0c-153.6 0-278.118 124.518-278.118 278.118s124.518 278.118 278.118 278.118c8.144 0 16.158-.533 24.126-1.218-4.327-10.325-6.743-21.652-6.743-33.547 0-24.433 10.151-46.429 26.381-62.219-5.701-12.89-8.999-27.073-8.999-42.075 0-57.6 46.694-104.294 104.294-104.294 15.002 0 29.184 3.297 42.075 8.999 15.791-16.23 37.786-26.381 62.219-26.381 11.895 0 23.222 2.415 33.547 6.741.685-7.968 1.218-15.98 1.218-24.124-.001-153.6-124.519-278.118-278.118-278.118zm-191.206 278.118c-9.599 0-17.382-7.783-17.382-17.382 0-9.601 7.783-17.382 17.382-17.382s17.382 7.781 17.382 17.382c0 9.599-7.783 17.382-17.382 17.382zm86.911 139.058c-19.201 0-34.765-15.566-34.765-34.765 0-19.201 15.564-34.765 34.765-34.765s34.765 15.564 34.765 34.765c0 19.199-15.564 34.765-34.765 34.765zm34.765-243.353c-19.201 0-34.765-15.566-34.765-34.765 0-19.201 15.564-34.765 34.765-34.765s34.765 15.564 34.765 34.765c0 19.199-15.564 34.765-34.765 34.765zm52.147 139.059c-9.599 0-17.382-7.783-17.382-17.382 0-9.601 7.783-17.382 17.382-17.382s17.382 7.781 17.382 17.382c.001 9.599-7.782 17.382-17.382 17.382zm104.294-243.353c9.599 0 17.382 7.781 17.382 17.382 0 9.599-7.783 17.382-17.382 17.382s-17.382-7.783-17.382-17.382c0-9.601 7.783-17.382 17.382-17.382zm17.383 173.824c-19.201 0-34.765-15.566-34.765-34.765 0-19.201 15.564-34.765 34.765-34.765s34.765 15.564 34.765 34.765c-.001 19.199-15.565 34.765-34.765 34.765z"/></svg>';
        html_code += '<div class="cookie__message" style="display: inline-block; width: 60%; margin: 0 2%; text-align: justify;">Ta strona używa ciasteczek (cookies). ';
        html_code += '<a href="' + privacylink + '" style="color: #030195;">Dowiedz się więcej</a></div>';
        html_code += '<a href="#" id="accept-cookies-checkbox" name="accept-cookies" style="padding: 4% 7%; color: #FFF; display: inline-block; margin-left: 1%; text-decoration: none; font-size: 16px; cursor: pointer;">';
        html_code += 'OK';
        html_code += '</a>';
        html_code += '</div>';
			message_container.innerHTML = html_code;
			document.body.appendChild(message_container);
			var _self = this;
			document.getElementById('accept-cookies-checkbox').addEventListener('click', function (e) {
				e.preventDefault();
				_self.WHCloseCookiesWindow();
			}, false);
		}
	}
	WHCloseCookiesWindow() {
		this.WHCreateCookie('cookies_accepted', 'T', 365);
		document.getElementById('cookies-message-container').removeChild(document.getElementById('cookies-message'));
	}
	WHReadCookie(name) {
		var nameEQ = name + "=";
		var ca = document.cookie.split(';');
		for (var i = 0; i < ca.length; i++) {
			var c = ca[i];
			while (c.charAt(0) == ' ') c = c.substring(1, c.length);
			if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
		}
		return null;
	}
	WHCreateCookie(name, value, days) {
		var date = new Date();
		date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
		var expires = "; expires=" + date.toGMTString();
		document.cookie = name + "=" + value + expires + "; path=/";
	}
}
window.onload = function () {var cookies = new MScookies();};



// Burger menu
const menuBtn = document.querySelector('.menu-btn');
const menuTop = document.querySelector('.header__menu')
let menuOpen = false;
menuBtn.addEventListener('click', () => {
    if(!menuOpen) {
        menuBtn.classList.add('open');
        menuTop.classList.add('active');
        menuOpen = true;
        if(window.innerWidth < 1200) {
            html.style.overflow = 'hidden';
        }
    } else {
        menuBtn.classList.remove('open');
        menuTop.classList.remove('active');
        menuOpen = false;
        html.style.overflowY = "auto";
    }
});



var opinion = new Swiper('.sec8 .swiper-container', {
    // Optional parameters
    loop: true,
    slidesPerView: 3,
    spaceBetween: 0,

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    
    breakpoints: {
        0: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        992: {
          slidesPerView: 2
        },
        1480: {
            slidesPerView: 3
        }
}
})


$(document).ready(function () {
    /* AOS */
    AOS.init({
        once: true,
        duration:500,
        offset:120,
        easing:'ease-in-out'
    });
    /* MATCH HEIGHT */
    $(".page-offer .sec1-box__content ").matchHeight();
})


if(document.body.classList.contains('page-template-page-request')){
// CHECKBOX (CHECK ALL)
    const checkboxAll = document.querySelector('.request-form__accept-all');
    const checkboxRest = document.querySelectorAll('.request-form__accept-rest');
    const accept = document.querySelector('.acceptance-272')

    accept.addEventListener('click', function() {
        accept.classList.toggle('active');
        if(accept.classList.contains('active')) {
        if(checkboxAll.checked = true) {
            checkboxRest.forEach(checkboxItem => checkboxItem.checked = true);
        }
    } else {
        checkboxRest.forEach(checkboxItem => checkboxItem.checked = false);
    }
    }) 



    // POPUP INFO
    const popupIcon = document.querySelector('.pay-plan__info')
    const popupInfo = document.querySelector('.pay-plan__hover')
    const popupUploadFirstIcon = document.querySelector('.upload__field-info')
    const popupUploadFirstText = document.querySelector('.upload__field-hover')
    const popupUploadSecondIcon = document.querySelector('.hover-info__second')
    const popupUploadSecondText = document.querySelector('.hover__second')

    const mouseOnVisible = (icon, text) => {
        icon.addEventListener('mouseover', function() {
            text.classList.add('visible')
        })
        icon.addEventListener('mouseout', function() {
            text.classList.remove('visible')
        })

    }
    mouseOnVisible(popupIcon, popupInfo);
    mouseOnVisible(popupUploadFirstIcon, popupUploadFirstText);
    mouseOnVisible(popupUploadSecondIcon, popupUploadSecondText);


    // ACTIVE INPUT
    const inputEl = document.querySelector('input[name="plan"]');
    inputEl.addEventListener('click', function() {
        popupIcon.style.display = "none"
    }) 


    // ACCEPT TOGGLE ARROW
    const arrowToggles  = document.querySelectorAll('.accept__arrow');
    arrowToggles.forEach(arrowToggle => {
    arrowToggle.addEventListener('click', function(e) {
        this.classList.toggle('show')
        const current = e.currentTarget;
        const text = current.parentElement.parentElement.parentElement.querySelector('.accept__text');
        text.classList.toggle('show');
    })
})



}


// ARROW UP
const scrollTop = () => {
    if (document.body.scrollTop > 900 || document.documentElement.scrollTop > 900) {
      arrowUp.style.cssText = "opacity: 1; visibility: visible;";
    } else {
      arrowUp.style.cssText = "opacity: 0; visibility: hidden;";
    }
}
  
const arrowUp = document.querySelector('.arrow__up');
arrowUp.addEventListener('click', function() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
})
  
window.addEventListener('scroll', scrollTop)



// POST SECTION
if(document.body.classList.contains('post-template-default')) {
  const currentCategory = document.querySelector('.post__crumble-link');
  const categoryItems = document.querySelectorAll('.category__item a');
  if(typeof(currentCategory) != 'undefined' && currentCategory != null) {
  categoryItems.forEach(categoryItem => {
    let categoryItemValue = categoryItem.textContent;
    if(categoryItemValue === currentCategory.textContent) {
        categoryItem.parentElement.classList.add('active')
    }

  })
}


const inputName = document.querySelector('input#author');
const inputEmail = document.querySelector('input#email');
const inputText = document.querySelector('textarea#comment');
if(typeof(inputName) != 'undefined' && inputName != null) {
    inputName.setAttribute('placeholder', 'Imię:')
    inputEmail.setAttribute('placeholder', 'Email:')
    inputText.setAttribute('placeholder', 'Komentarz:')
}


}


// COMMENTS AVATARS
if(document.querySelectorAll('.avatar').length > 0) {

    const avatars = document.querySelectorAll('.avatar')
    avatars.forEach(avatar => {
        const avatarAttribute =  avatar.getAttribute('srcset').toString();
        const link = avatarAttribute.replace(' 2x', '');
        avatar.removeAttribute('width');
        avatar.removeAttribute('height');
        avatar.setAttribute('srcset', link)
    })
}



// SHOW MORE POSTS BUTTON
const moreButton = document.querySelector('#more');
if(document.body.contains(moreButton)){
    const allItems = document.querySelectorAll('.post__body');
    $('#more').click(function() {
        $('.post__body:hidden').slice(0, 3).slideDown().addClass('visible');
    });
    if(allItems.length < 7) {
        moreButton.style.display = 'none'
    }
}




// MOBILE. VISIBLE CATEGORIES AND TAGS
const catButton = document.querySelector('.post__nav-category');
const tagButton = document.querySelector('.post__nav-tags');
const categoriesList = document.querySelector('.category__list')
const tagsList = document.querySelector('.tags__list');
const closeBtns = document.querySelectorAll('.close');
const visibleList = (button, list) => {
    button.addEventListener('click', () => {
        list.classList.add('visible')
        html.style.overflowY ="hidden"
    })
}


if(document.body.contains(categoriesList) && document.body.contains(tagsList)){

    closeBtns.forEach(closeBtn => {
        closeBtn.addEventListener('click', () => {
            categoriesList.classList.remove('visible');
            tagsList.classList.remove('visible');
            html.style.overflowY ="visible"
        })
    })

    visibleList(catButton, categoriesList);
    visibleList(tagButton, tagsList);

} else if(document.body.contains(categoriesList)) {

    closeBtns.forEach(closeBtn => {
        closeBtn.addEventListener('click', () => {
            categoriesList.classList.remove('visible');
            html.style.overflowY ="visible"
        })
    })

    visibleList(catButton, categoriesList);
}


if(document.body.classList.contains('page-template-page-about-us')){
    // ABOUT US CONTACT POPUP
    const askButtons = document.querySelectorAll('.sec5__btn');
    const aboutContactPopup = document.querySelector('.order__form');
    const aboutContactPopupClose = document.querySelector('.order-form .close');

    askButtons.forEach(askButton => {
        askButton.addEventListener('click', (e) => {
            e.preventDefault()
            aboutContactPopup.classList.add('active')
            html.style.cssText = 'overflow-y: hidden;';
        })
    })

    aboutContactPopupClose.addEventListener('click', () => {
        aboutContactPopup.classList.remove('active')
        html.style.cssText = 'overflow-y: visible;';
    })

}

if(document.body.classList.contains('page-template-page-offer')){
    // ABOUT US CONTACT POPUP
    const askButtons = document.querySelectorAll('.popup__btn');
    const aboutContactPopup = document.querySelector('.order__form');
    const aboutContactPopupClose = document.querySelector('.order-form .close');

    askButtons.forEach(askButton => {
        askButton.addEventListener('click', (e) => {
            e.preventDefault()
            aboutContactPopup.classList.add('active')
            html.style.cssText = 'overflow-y: hidden;';
        })
    })

    aboutContactPopupClose.addEventListener('click', () => {
        aboutContactPopup.classList.remove('active')
        html.style.cssText = 'overflow-y: visible;';
    })

}


if(document.body.classList.contains('page-template-page-request')){
    // CONTACT POPUP
    const askButtons = document.querySelectorAll('.accept__link');
    const aboutContactPopup = document.querySelector('.order__form');
    const aboutContactPopupClose = document.querySelector('.popup__container .close');

    askButtons.forEach(askButton => {
        askButton.addEventListener('click', (e) => {
            e.preventDefault()
            aboutContactPopup.classList.add('active')
            html.style.cssText = 'overflow-y: hidden;';
        })
    })

    aboutContactPopupClose.addEventListener('click', () => {
        aboutContactPopup.classList.remove('active')
        html.style.cssText = 'overflow-y: visible;';
    })

}

// SCROLL TO VIEW
const blogView = document.querySelector('.post__main')
if(document.body.classList.contains('category') || 
document.body.classList.contains('tag') && 
!document.body.classList.contains('single')) {
    document.addEventListener('DOMContentLoaded', function() {
        blogView.scrollIntoView()
    })
}