var navBrand = document.querySelector('.navbar-brand');
var navLinks = document.querySelectorAll('.nav-link');
var tableRows = document.querySelectorAll('.table-row.hover');
var services = document.querySelectorAll('.col.services');
var formSubmitButton = document.querySelector('.btn.submit');

/*navBrand.addEventListener('mouseenter', function () {
    this.style.animation = 'changeSizeNavBrandUp 1s forwards';
});

navBrand.addEventListener('mouseleave', function () {
    this.style.animation = 'changeSizeNavBrandDown 1s forwards';
});

navLinks.forEach(function (navLink) {
    navLink.addEventListener('mouseenter', function () {
        this.style.animation = 'changeSizeNavItemUp 1s forwards'
    });
    navLink.addEventListener('mouseleave', function () {
        this.style.animation = 'changeSizeNavItemDown 1s forwards'
    });
})*/
if (tableRows != null)
    tableRows.forEach(function (row) {
        row.addEventListener('mouseenter', function () {
            this.style.animation = 'tableRowHoverUp 1s forwards';

            Array.from(row.children).forEach(function (element, index) {
                switch (index) {
                    case 0:
                        element.style.animation = 'bgChangeUpLeft 1s forwards';
                        break;
                    case 1:
                        element.style.animation = 'bgChangeUpRight 1s forwards';
                        break;
                }
            })
        })

        row.addEventListener('mouseleave', function () {
            this.style.animation = 'tableRowHoverBack 1s forwards';

            Array.from(row.children).forEach(function (element, index) {
                switch (index) {
                    case 0:
                        element.style.animation = 'bgChangeDownLeft 1s forwards';
                        break;
                    case 1:
                        element.style.animation = 'bgChangeDownRight 1s forwards';
                        break;
                }
            })
        })
    })
if (services != null)
    services.forEach(function (service) {
        service.addEventListener('mouseenter', function () {
            this.style.animation = 'servicesHoverUp 1s forwards'
        })

        service.addEventListener('mouseleave', function () {
            this.style.animation = 'servicesHoverDown 1s forwards'
        })
    })

if (formSubmitButton != null) {
    formSubmitButton.addEventListener('mouseenter', function () {
        this.style.animation = 'formButtonHoverUp 1s forwards'
    })

    formSubmitButton.addEventListener('mouseleave', function () {
        this.style.animation = 'formButtonHoverDown 1s forwards'
    })
}

$('#cosmeticCarousel').on('slide.bs.carousel', function (e) {
    var activeIndex = $(e.relatedTarget).index();
    $('.carousel-caption-container').removeClass('active');
    $('#caption-' + activeIndex).addClass('active');
});

