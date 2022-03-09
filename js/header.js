var navBar = document.getElementById('nav-bar');
var hamBurger = document.getElementById('nav-hamburger-button');

var navItems = document.getElementsByClassName('austhir-nav-link');

var lastScrollTop = 0;

hamBurger.onclick = function () {

    navBar.classList.toggle('nav-bg');
    for (var i = 0; i < navItems.length; i++) {

        navItems.item(i).classList.toggle('fixed');
    }
}

window.onscroll = function () {

    var st = window.pageYOffset || document.documentElement.scrollTop;
    if (st > lastScrollTop) {

        if (window.screen.width > 990) {
            navBar.classList.add('nav-bg');
            navBar.classList.add('fixed');

            for (var i = 0; i < navItems.length; i++) {

                navItems.item(i).classList.add('fixed');
            }
        }



    } else {

        if (st === 0 && window.screen.width > 990) {
            navBar.classList.remove('nav-bg');
            navBar.classList.remove('fixed');

            for (var i = 0; i < navItems.length; i++) {

                navItems.item(i).classList.remove('fixed');
            }
        }

    }
    lastScrollTop = st <= 0 ? 0 : st;
}

//this function is dropdowning the seassion menu
if (document.getElementById('user-session-info-container')) {

    document.getElementById('user-session-info-container').addEventListener('click', () => {

        document.getElementById('session-dropdown').classList.toggle('d-none');
        document.getElementById('session-left-angle').classList.toggle('session-left-angle-rotate');
    });
}