left_driver = document.getElementById("left_driver");
right_passanger = document.getElementById("right_passanger");

function isDriver(flag) {
    if (flag) {
        left_driver.classList.remove("non-selected");
        right_passanger.classList.add("non-selected");
    } else {
        left_driver.classList.add("non-selected");
        right_passanger.classList.remove("non-selected");
    }
}

function change_price(obj) {
    document.getElementById("salary").innerText = obj.value * 48 * 10
}

change_price(document.querySelector('.left-driver input'))

function click_title(obj) {
    document.getElementById("for-" + obj.srcElement.id).style.display = 'block';
}

for (const el of document.getElementsByClassName("title")) {
    if (el.id)
        el.addEventListener("click", click_title)
}

window.onload = () => {
    let posts = document.getElementsByClassName("post");

    function loop(ind, delay) {
        if (posts.length > ind)
            setTimeout(function () {
                posts[ind].style.opacity = "1";
                loop(ind + 1, delay + 200);
            }, delay);
    }

    loop(0, 200);
}
