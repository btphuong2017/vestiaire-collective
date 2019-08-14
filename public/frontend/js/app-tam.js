document.addEventListener('DOMContentLoaded', function () {
    var angleDown = document.querySelectorAll('.footer-body-service-title');
    var footerLink = document.querySelectorAll('.footer-body-service-link');
    var angleDownPolicy = document.querySelector('.footer-body-policy-block-mobile');
    var policy = document.querySelector('.footer-privacy-policy-hidden');

    angleDown.forEach(function (item) {
        item.addEventListener('click', collapseShowItem);
    });

    function collapseShowItem() {
        if (window.innerWidth <= 767) {
            var collapse = this.parentNode.querySelector('.footer-body-service-link');
            if (collapse.classList.contains('showServiceLinkMobile') == false) {
                collapse.classList.add('showServiceLinkMobile');
                collapse.classList.add('transitionCollapse');
                this.classList.add('rotateAngleDown');
            } else {
                collapse.classList.remove('showServiceLinkMobile');
                collapse.classList.remove('transitionCollapse');
                this.classList.remove('rotateAngleDown');
            }
        }
    }

    angleDownPolicy.addEventListener('click', collapseShowPolicy);

    function collapseShowPolicy() {
        if (policy.style.display === "block") {
            policy.style.display = "none";
            policy.classList.remove('transitionCollapse');
            document.querySelector('.footer-privacy-policy').classList.remove('rotateAngleDown');
        } else {
            policy.style.display = "block";
            policy.classList.add('transitionCollapse');
            document.querySelector('.footer-privacy-policy').classList.add('rotateAngleDown');
        }
    }
});

