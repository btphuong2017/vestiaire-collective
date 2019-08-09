const headerFix = function () {
    var header = document.getElementById('header');
    var topbar = document.getElementById('topbar');

    window.addEventListener('scroll', onWindowScroll)

    window.addEventListener('load', onWindowLoad);

    function onWindowLoad() {
        if (window.scrollY > 0) {
            hideTopbar();
            headerToFix();
        } else {
            showTopbar();
            headerToStatic();
        }
    }
    function onWindowScroll() {
        if (window.scrollY > 0) {
            hideTopbar();
            headerToFix();
        } else {
            showTopbar();
            headerToStatic();
        }
    }

    function hideTopbar() {
        topbar.style.display = 'none';
    }

    function showTopbar() {
        topbar.style.display = 'block';
    }

    function headerToFix() {
        header.classList.add('fixed');
        document.body.style.paddingTop = header.offsetHeight + 'px';
    }

    function headerToStatic() {
        header.classList.remove('fixed');
        document.body.style.paddingTop = 0 + 'px';
    }
};
const searchbarDesktop = function () {
    var searchInput = document.getElementById('header-search');
    var searchContainer = document.getElementById('searchbar-desktop-container');
    var searchClose = document.getElementById('searchbar-close-btn');

    searchInput.addEventListener('click', showContainer);

    searchClose.addEventListener('click', hideContainer);

    document.addEventListener('click', clickOutContainer);

    function showContainer() {
        searchContainer.classList.add('active');
    }

    function hideContainer() {
        searchContainer.classList.remove('active');
    }

    function clickOutContainer(e) {
        if (searchContainer.classList.contains('active')) {
            if (!e.target.closest('.searchbar-desktop')) {
                hideContainer();
            }
        }
    }
};
const searchbarMobile = function () {
    var button = document.getElementById('btn-searchbar-mobile');
    var searchbarContainer = document.getElementById('searchbar-mobile-container');
    var buttonBack = searchbarContainer.querySelector('.searchbar-button-close');

    button.addEventListener('click', function () {
        console.log(this);
        searchbarContainer.classList.add('active');
    });
    buttonBack.addEventListener('click', function () {
        searchbarContainer.classList.add('hide');

    });

    searchbarContainer.addEventListener('animationend', function() {
        if (this.classList.contains('active') && this.classList.contains('hide')) {
            this.classList.remove('active');
            this.classList.remove('hide');
        }
    })
}
const dropDown = function () {
    var btnDropdowns = document.querySelectorAll('.btn-access-dropdown');
    var accessDropdowns = document.querySelectorAll('.access-dropdown');
    var btnCloses = document.querySelectorAll('.access-dropdown button.access-dropdown-close');
    btnDropdowns.forEach(function (btn) {
        btn.addEventListener('click', buttonToggle);
    });

    btnCloses.forEach(function (btn) {
        btn.addEventListener('click', closeCurrentDropdown);
    });

    document.addEventListener('click', clickOutContainer);

    function closeCurrentDropdown() {
        this.parentNode.parentNode.classList.remove('active');
        if (window.innerWidth <= 1024) {
            document.body.classList.remove('safariNoScroll');
        }
    }

    function clickOutContainer(e) {
        e = e || window.event;
        if (!e.target.closest('.btn-access-dropdown') && !e.target.closest('.access-dropdown')) {
            hideAllDropdown();
        }
    }

    function buttonToggle() {
        if (this.getAttribute('data-open') == 'true') {
            hideDropdown.call(this);
        } else {
            showDropdown.call(this);
        }
    }

    function showDropdown() {
        hideAllDropdown();
        let accessDropdown = this.parentNode.querySelector('.access-dropdown');
        if (window.innerWidth > 1024) {
            if (window.scrollY <= 0) {
                accessDropdown.style.top = Math.floor((70 - this.getBoundingClientRect().top + 40)) + 'px';
            } else {
                accessDropdown.style.top = Math.floor((70 - this.getBoundingClientRect().top)) + 'px';
            }
            
        }
        if (window.innerWidth <= 1024) {
            document.body.classList.add('safariNoScroll');
        }
        accessDropdown.classList.add('active')
        this.setAttribute('data-open', 'true');
    }

    function hideDropdown() {
        let accessDropdown = this.parentNode.querySelector('.access-dropdown');
        accessDropdown.classList.remove('active');
        if (window.innerWidth <= 1024) {
            document.body.classList.remove('safariNoScroll');
        }
        this.setAttribute('data-open', 'false');
    }

    function hideAllDropdown() {
        btnDropdowns.forEach(function (btn) {
            btn.setAttribute('data-open', 'false');
            btn.parentNode.querySelector('.access-dropdown').classList.remove('active');
        });
        if (window.innerWidth <= 1024) {
            document.body.classList.remove('safariNoScroll');
        }
    }
};
const mainNavigation = function () {
    var navBar = document.getElementById('main-nav');
    var navItems = document.querySelectorAll('#main-nav > li.nav-item');
    var navLinks = document.querySelectorAll('#main-nav > li.nav-item a')
    var itemUnderline = navBar.querySelector('.nav-item-underline');
    var subNavs = navBar.querySelectorAll('.nav-item .sub-nav');

    var justInNavContent = null;

    // =============
    // @Desktop
    // =============

    navItems.forEach(function (navItem) {
        navItem.addEventListener('mouseover', onMouseOver);
    });

    navBar.addEventListener('mouseleave', onMouseLeave);

    function onMouseOver() {
        if (window.innerWidth > 1024) {
            updateUnderline.call(this);
            showNavContent.call(this);
        }
    }

    function onMouseLeave() {
        if (window.innerWidth > 1024) {
            hideUnderline();
            hideAllSubNav();
        }
    }

    function updateUnderline() {
        let rect = this.getBoundingClientRect();
        let w = rect.width;
        let left = rect.left - navBar.offsetLeft;
        itemUnderline.style.left = left + 'px';
        itemUnderline.style.width = w + 'px';
        itemUnderline.style.display = 'block';
    }

    function showNavContent() {
        hideAllSubNav();
        var navContent = this.querySelector('.sub-nav');
        if (navContent) {
            navContent.classList.add('active');
        }
    }

    function hideUnderline() {
        itemUnderline.style.display = 'none';
    }

    function hideAllSubNav() {
        subNavs.forEach(function (subnav) {
            subnav.classList.remove('active');
        });
    }

    // ===========
    // @ Tablet 
    // ===========

    var mobileContainer = document.querySelector('.header-secondline');
    var mobileButton = document.getElementById('btn-sidebar-menu');
    var mobileButtonClose = document.querySelector('.header-secondline .header-button-close');

    var childNavItems = document.querySelectorAll('.header-secondline .nav-item .sub-nav .sub-nav-item');

    mobileButton.addEventListener('click', function () {
        if (window.innerWidth <= 1024 && window.innerWidth >= 768) {
            showNavOnMobile();
        }
    });

    mobileButtonClose.addEventListener('click', function () {
        if (window.innerWidth <= 1024) {
            hideNavOnMobile();
        }
    });

    document.addEventListener('click', function (e) {
        if (window.innerWidth <= 1024  && window.innerWidth >= 768 ) {
            if (mobileContainer.classList.contains('active') && !e.target.closest('.header-secondline') && !e.target.closest('#btn-sidebar-menu')) {
                hideNavOnMobile();
            }
        }
    });

    navItems.forEach(function (item) {
        item.addEventListener('click', function (e) {
            if (window.innerWidth <= 1024) {

                if (this.classList.contains('active')) {
                    if (!e.target.closest('.main-nav .nav-item .sub-nav')) {
                        this.classList.remove('active');
                        let subNav = this.querySelector('.sub-nav');
                        subNav.removeAttribute('style');
                    }
                } else {
                    this.classList.add('active');
                    let subNav = this.querySelector('.sub-nav');
                    let height = 0; 
                    subNav.querySelectorAll('.sub-nav-item').forEach(function (li) {
                        height += li.offsetHeight;
                    });
                    subNav.style.height = height + 'px';
                }
            }
        });
    });

    childNavItems.forEach(function (childItem) {
        childItem.addEventListener('click', function (e) {
            if (window.innerWidth <= 1024) {
                if (this.classList.contains('active')) {
                    if (!e.target.closest('.child-nav .child-nav-item a')) {
                        this.classList.remove('active');
                    }
                } else {
                    this.classList.add('active');
                }
            }
        });
    });

    function showNavOnMobile() {
        mobileContainer.classList.add('active');
        document.body.classList.add('safariNoScroll');
    }

    function hideNavOnMobile() {
        mobileContainer.classList.remove('active');
        document.body.classList.remove('safariNoScroll');
    }

    // =============
    // @ Mobile
    // =============
    
    var mobileButton2nd = document.getElementById('btn-sidebar-mobile');
    mobileButton2nd.addEventListener('click', function (){ 
        if (window.innerWidth <= 1024) {
            showNavOnMobile();
        }
    })
};
document.addEventListener('DOMContentLoaded', function () {
    var header = headerFix();
    var searchbar = searchbarDesktop();
    var mainnav = mainNavigation();
    var dropdown = dropDown();
    var searchbarmobile = searchbarMobile();
});
