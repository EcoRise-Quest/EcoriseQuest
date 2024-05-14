function showChallengeImage(challengeNumber) {
    // Freeze background scroll
    document.body.classList.add('freeze-scroll');

    // Hide all challenge images
    var challengeImages = document.querySelectorAll('.ch_img');
    challengeImages.forEach(function (img) {
        img.style.display = 'none';
    });

    // Show the selected challenge image
    var selectedImage = document.getElementById('ch_img_' + challengeNumber);
    if (selectedImage) {
        selectedImage.style.display = 'block';
        document.getElementById('blur-background').style.display = 'block'; // Show the blur background
    }
}

function closeChallengeImage(challengeNumber) {
    // Unfreeze background scroll
    document.body.classList.remove('freeze-scroll');

    var selectedImage = document.getElementById('ch_img_' + challengeNumber);
    if (selectedImage) {
        selectedImage.style.display = 'none';
        document.getElementById('blur-background').style.display = 'none'; // Hide the blur background
    }
}

function openPopup() {
    // Freeze background scroll
    document.body.classList.add('freeze-scroll');
    // Show the pop-up
    document.getElementById('popup').style.display = 'block';
    // Show the blur background
    document.getElementById('blur-background').style.display = 'block';
}
function closePopup() {
    // Unfreeze background scroll
    document.body.classList.remove('freeze-scroll');
    // Hide the pop-up
    document.getElementById('popup').style.display = 'none';
    // Hide the blur background
    document.getElementById('blur-background').style.display = 'none';
}

function openSubscribePopup() {
    document.body.classList.add('freeze-scroll');
    document.getElementById("subscribePopup").style.display = "block";
    document.getElementById('blur-background').style.display = 'block';
}

function closeSubscribePopup() {
    document.getElementById("subscribePopup").style.display = "none";
    document.body.classList.remove('freeze-scroll');
    document.getElementById('blur-background').style.display = 'none';
}

function redirectToLogin() {
    // Redirect to the login page
    window.location.href = 'login.php';
}