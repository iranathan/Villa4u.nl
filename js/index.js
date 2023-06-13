let currentIndex = 0;

$(document).ready(() => {
    $(".villa")[0].className = "villa";
    setInterval(() => {
        if(currentIndex == $(".villa").length) {
            $(".villa")[currentIndex-1].className = "hidden villa";
            currentIndex = 0;
        }

        if($(".villa")[currentIndex-1]) {
            $(".villa")[currentIndex-1].className = "hidden villa";
        }
        $(".villa")[currentIndex].className = "villa";

        currentIndex++;
    }, 4000);
});