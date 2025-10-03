<?php
// Helper functions for team site
// calculate_age: accepts date string (YYYY-MM-DD) and returns integer age or null
function calculate_age($dob) {
    if (empty($dob)) return null;
    try {
        $birth = new DateTime($dob);
        $today = new DateTime('now');
        return $today->diff($birth)->y;
    } catch (Exception $e) {
        return null;
    }
}

// Renders a member card for the index page
function render_member_card(array $member, int $index) {
    $name = htmlspecialchars($member['name'] ?? '');
    $role = htmlspecialchars($member['role'] ?? '');
    $skills = htmlspecialchars(implode(', ', $member['skills'] ?? []));
    $summary = htmlspecialchars($member['summary'] ?? '');
    $image = htmlspecialchars($member['image'] ?? '');
    $age = null;
    if (!empty($member['dob'])) {
        $ageVal = calculate_age($member['dob']);
        if ($ageVal !== null) $age = $ageVal . ' yrs';
    }

    echo '<header class="resume-header mt-4 pt-4 pt-md-0">';
    echo '<div class="row">';
    echo '<div class="col-block col-md-auto resume-picture-holder text-center text-md-start">';
    echo '<img class="picture" src="' . $image . '" alt="">';
    echo '</div><!--//col-->';
    echo '<div class="col">';
    echo '<div class="row p-4 justify-content-center justify-content-md-between">';
    echo '<div class="primary-info col-auto">';
    echo '<h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase">' . $name . '</h1>';
    echo '<div class="title mb-3">' . $role . '</div>';
    if ($age !== null) {
        echo '<div class="mb-2"><strong>Age:</strong> ' . htmlspecialchars($age) . '</div>';
    }
    echo '<div class="mb-2"><strong>Skills:</strong> ' . $skills . '</div>';
    echo '<div class="mb-2"><strong>Summary:</strong> ' . $summary . '</div>';
    echo '<a href="detail.php?index=' . $index . '" class="btn btn-secondary">See full profile</a>';
    echo '</div><!--//primary-info-->';
    echo '<div class="secondary-info col-auto mt-2">';
    echo '</div><!--//secondary-info-->';
    echo '</div><!--//row-->';
    echo '</div><!--//col-->';
    echo '</div><!--//row-->';
    echo '</header>';
}

// Renders a single work experience item for the detail page
function render_work_experience(array $job) {
    $title = htmlspecialchars($job['title'] ?? '');
    $company = htmlspecialchars($job['company'] ?? '');
    $years = htmlspecialchars($job['years'] ?? '');
    $description = htmlspecialchars($job['description'] ?? '');

    echo '<article class="resume-timeline-item position-relative pb-5">';
    echo '<div class="resume-timeline-item-header mb-2">';
    echo '<div class="d-flex flex-column flex-md-row">';
    echo '<h3 class="resume-position-title font-weight-bold mb-1">' . $title . '</h3>';
    echo '<div class="resume-company-name ms-auto">' . $company . '</div>';
    echo '</div>';
    echo '<div class="resume-position-time">' . $years . '</div>';
    echo '</div>';
    echo '<div class="resume-timeline-item-desc">';
    echo '<p>' . $description . '</p>';
    echo '</div>';
    echo '</article>';
}

?>
