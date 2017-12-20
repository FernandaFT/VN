window.addEventListener("load", function(){
    var li = document.getElementsByClassName('question');

    for (var i = 0; i < li.length; i++) {
        // console.log(li)
        li[i].addEventListener('click', function () {
            // console.log(this.childNodes[3].className)
            this.childNodes[3].classList.toggle('show-answer')
            this.childNodes[1].classList.toggle('title-color')

        });
    };

    var $menuToggle = $('#menu-toggle');
    var $navigation = $('.main-nav');
    $menuToggle.click(function () {
        $menuToggle.toggleClass('menu-toggle-active');
        $navigation.toggle()
    });

    var $menuTitle = $('.menu-title');
    $menuTitle.click(function () {
        $navigation.toggle()
    })
});