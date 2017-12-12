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
});