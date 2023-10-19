document.addEventListener('DOMContentLoaded', function () {
    const avatarInput = document.getElementById('avatar-input');
    const avatarImage = document.getElementById('avatar-image');

    avatarInput.addEventListener('change', function (event) {
        const file = event.target.files[0];
        const reader = new FileReader();

        reader.onload = function (e) {
            avatarImage.src = e.target.result;
        };

        reader.readAsDataURL(file);
    });
});
