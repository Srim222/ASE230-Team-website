# 📌 ASE230-Team-website
## 📖 Overview

This project is a small PHP site that shows a team index and a detail page per member. It includes a shared helper module and wiring so:

Each member's age is calculated from a dob field and displayed on both the index and the detail pages.

The index page uses a function to render each member card from a member array and index.

The detail page uses a function to render each work-experience item.

These helpers centralize presentation logic and keep detail.php and index.php thin.

## 📂 Files Changed / Added

helpers.php (NEW) — shared helper functions:

calculate_age($dob) → returns age in years (int) or null on invalid/missing DOB.

render_member_card(array $member, int $index) → outputs the HTML for one member card (used on index.php).

render_work_experience(array $job) → outputs one work experience item (used on detail.php).

index.php (MODIFIED)

Now includes helpers.php.

The in-file card markup was replaced by render_member_card($team[$i], $i) calls.

Sample DOBs were added for demo so ages show on load.

detail.php (MODIFIED)

Now includes helpers.php.

Displays age in the contact area if DOB exists (uses calculate_age).

The work-experience loop uses render_work_experience($job) for each item.

Shared functions remain in helpers.php instead of embedded in detail.php.

## ⚙️ Helper Functions

calculate_age($dob)

Input: string date like YYYY-MM-DD

Output: integer years (e.g., 21) or null if invalid

Uses PHP DateTime and diff.

render_member_card(array $member, int $index)

Accepts the member data array and numeric index.

Produces the card markup used on index.php, filling in name, role, skills, summary, picture, and age.

Detail link uses detail.php?index={index}.

render_work_experience(array $job)

Accepts one work experience item (title, company, years, description).

Produces the timeline item markup used on detail.php.

Output sanitized with htmlspecialchars().

## 🎂 Demo DOBs

Sample DOB values were added so ages are visible (current date: Oct 2, 2025):

Alice Smith — 2004-09-15 → 21

Bob Johnson — 2005-03-22 → 20

Charlie Lee — 2006-05-30 → 19

If a DOB is missing, the age will not show.

## 💻 How to Run Locally
🔹 Using XAMPP

Copy the project to htdocs (e.g., C:\xampp\htdocs\ASE230-Team-website).

Start Apache from the XAMPP Control Panel.

Open in browser:

http://localhost/ASE230-Team-website/index.php

http://localhost/ASE230-Team-website/detail.php?index=0

🔹 Using PHP Built-in Server
php -S localhost:8000


Then open: http://localhost:8000/index.php

✅ Quick Verification Checklist

Index page shows cards with ages.

Detail page shows age + work experiences.

php -l helpers.php returns no syntax errors.

Browser layout works with no console errors.

## 📋 Requirements Coverage

Member age function: calculate_age → ✅ Done

Display age on index & detail pages → ✅ Done

Card function for index page: render_member_card → ✅ Done

Work experience function for detail page: render_work_experience → ✅ Done

Helpers kept out of detail.php → ✅ Done

## 🔀 Git Workflow (Simulated Team Collaboration)

To mimic a real team workflow, each feature was developed in its own branch and then merged into main.

🌿 Branches and Features

Branch: age-function

Added calculate_age($dob) in helpers.php.

Integrated into both index.php and detail.php.

Commit: Add calculateAge function

Branch: card-function

Added render_member_card($member, $index) in helpers.php.

Replaced hardcoded card HTML in index.php.

Commit: Add displayMemberCard function

Branch: work-function

Added render_work_experience($job) in helpers.php.

Updated detail.php to use it in the work loop.

Commit: Add displayWorkExperience function

## 🔗 Merge Process

age-function → merged into main

card-function → merged into main

work-function → merged into main

Each merge ensured the main branch contained all current features, simulating a team leader integrating contributions.

## 👥 Collaborators (Simulated Team)

Alice Johnson

Bob Smith

Charlie Lee

Sri Maligireddy(Team Lead)
