const headerFix = function () {
    var header = document.getElementById('header');
    var topbar = document.getElementById('topbar');

    window.addEventListener('scroll', onWindowScroll)

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
                e.preventDefault();
                hideContainer();
            }
        }
    }
};
const dropDown = function () {
    var btnDropdowns = document.querySelectorAll('.btn-access-dropdown');

    btnDropdowns.forEach(function (btn) {
        btn.addEventListener('click', buttonToggle);
    });

    document.addEventListener('click', clickOutContainer);

    function clickOutContainer(e) {
        e = e || window.event;
        if (!e.target.closest('.btn-access-dropdown') && !e.target.closest('.access-dropdown')) {
            e.preventDefault();
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
            accessDropdown.style.top = Math.floor((70 - this.getBoundingClientRect().top + 40)) + 'px';
        }
        accessDropdown.classList.add('active')
        this.setAttribute('data-open', 'true');
    }

    function hideDropdown() {
        let accessDropdown = this.parentNode.querySelector('.access-dropdown');
        accessDropdown.classList.remove('active')
        this.setAttribute('data-open', 'false');
    }

    function hideAllDropdown() {
        btnDropdowns.forEach(function (btn) {
            btn.setAttribute('data-open', 'false');
            btn.parentNode.querySelector('.access-dropdown').classList.remove('active');
        });
    }
};
const mainNavigation = function () {
    var navBar = document.getElementById('main-nav');
    var navItems = document.querySelectorAll('#main-nav > li.nav-item');
    var navLinks = document.querySelectorAll('#main-nav > li.nav-item a')
    var itemUnderline = navBar.querySelector('.nav-item-underline');
    var subNavs = navBar.querySelectorAll('.nav-item .sub-nav');
    var justInNavContent = null;
    navItems.forEach(function (navItem) {
        navItem.addEventListener('mouseover', onMouseOver);
    });

    navBar.addEventListener('mouseleave', onMouseLeave);

    function onMouseOver() {
        updateUnderline.call(this);
        showNavContent.call(this);
    }

    function onMouseLeave() {
        hideUnderline();
        hideAllSubNav();
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
};
document.addEventListener('DOMContentLoaded', function () {
    var header = headerFix();
    var searchbar = searchbarDesktop();
    var mainnav = mainNavigation();
    var dropdown = dropDown();
});
