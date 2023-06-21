$('.banner-carousel').owlCarousel({
    loop:true,
    dots:true,
    responsiveClass:true,
    items: 1,
})


$('.p__carousel').owlCarousel({
    loop:true,
    margin:20,
    dots:true,
    responsiveClass:true,
    // items: 5,
        responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 5
        },
    }
})


$('.product').owlCarousel({
    loop:true,
    margin:20,
    dots:true,
    responsiveClass:true,
    items: 1,
})