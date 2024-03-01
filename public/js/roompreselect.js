document.addEventListener("DOMContentLoaded", function () {
    var booknowButton = document.querySelectorAll(".book-now-frame");

    var room_type_select = document.getElementById("room_type");

    booknowButton.forEach(function (button) {
        button.addEventListener("click", function () {
            var room_type = button.getAttribute("data-room-type");

            room_type_select.value = room_type;
        });
    });
});
