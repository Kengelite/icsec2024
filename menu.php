<nav class="navbar navbar-expand-lg bg-white sticky-top">
    <div class="container">
        <a class="navbar-brand" href="./index.php"><img src="./assets/images/organnized/ICSEC.png" width="100" alt=""></a>
        <a class="navbar-brand" href="https://kku.ac.th/"><img src="./assets/images/organnized/1.png" width="80" alt=""></a>
        <a class="navbar-brand" href="https://computing.kku.ac.th/index"><img src="./assets/images/organnized/2.png" width="100" alt=""></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" id="home_index" href="./index.php">HOME</a>
                </li>
                <li class="nav-item dropdown">
                    <div class="nav-link dropdown-toggle" id="navbarDropdown_icsec" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        ICSEC2024
                    </div>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_icsec">
                        <a class="dropdown-item" href="./about.php">About</a>
                        <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#showcallforpaper" id="callForPapers">Call for Papers</a>
                        <a class="dropdown-item" href="./special_session.php">Special Sessions</a>
                        <a class="dropdown-item" href="./committee.php">Committee</a>
                        <a class="dropdown-item" href="./reviewer.php">Reviewer</a>
                        <a class="dropdown-item" href="./schedule.php">Schedule</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <div class="nav-link dropdown-toggle" id="navbarDropdown_submission" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Submissions
                    </div>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_submission">
                        <a class="dropdown-item" href="./submission.php">Submission Guideline</a>
                        <a class="dropdown-item" href="https://edas.info/newPaper.php?c=32081" target="_blank">Submit Your Paper</a>
                        <a class="dropdown-item" href="./registrationfee.php">Registration</a>
                        <a class="dropdown-item" href="./Cameraready.php">Camera Ready</a>
                 
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <div class="nav-link dropdown-toggle" id="navbarDropdown_program" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Program
                    </div>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_program">
                        <a class="dropdown-item" href="./keynote.php">Keynote Speakers</a>
                        <a class="dropdown-item" href="./invited.php">Invited Speakers</a>
                        <a class="dropdown-item" href="./tutorials.php">Tutorials</a>
                        <a class="dropdown-item" href="./workshops.php">Workshops</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <div class="nav-link dropdown-toggle" id="navbarDropdown_venues" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Venues
                    </div>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_venues">
                        <a class="dropdown-item" href="./accommodations.php">Accommodations</a>
                        <a class="dropdown-item" href="./transportation.php">Transportation</a>
                        <a class="dropdown-item" href="./attractions.php">Attractions</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="stdgrants" href="./stdgrants.php">Student Grants</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var currentUrl = window.location.href;
    var menuItems = document.querySelectorAll('.navbar-nav a');
    var dropdownItems = document.querySelectorAll('.dropdown-menu a');
    var callForPapers = document.getElementById('callForPapers');

    menuItems.forEach(function(menuItem) {
        if (menuItem !== callForPapers &&  currentUrl.indexOf(menuItem.href) !== -1) {
            menuItem.classList.add('active');
        }
    });

    dropdownItems.forEach(function(dropdownItem) {
        // ตรวจสอบว่าไม่ใช่ callForPapers เพื่อไม่ให้ active ตลอดเวลา
        if (dropdownItem !== callForPapers && currentUrl.indexOf(dropdownItem.href) !== -1) {
            dropdownItem.classList.add('active');
            var parentDropdown = dropdownItem.closest('.dropdown');
            if (parentDropdown) {
                var parentLink = parentDropdown.querySelector('.nav-link.dropdown-toggle');
                if (parentLink) {
                    parentLink.classList.add('active');
                }
            }
        }
    });
});
</script>