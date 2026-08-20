<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Create Student</title>

    <link rel="stylesheet"
          href="<?= base_url('assets/css/students.css') ?>">
</head>

<body>

<div class="container">

    <div class="card">

        <h1>Create Student</h1>

        <p class="description">
            Enter the student's details below.
        </p>

        <div id="message" class="message"></div>

        <form id="studentForm">

            <div class="form-group">

                <label for="name">
                    Full Name
                </label>

                <input
                    type="text"
                    id="name"
                    name="name"
                    placeholder="Enter full name"
                    required
                >

            </div>

            <div class="form-group">

                <label for="email">
                    Email Address
                </label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="Enter email address"
                    required
                >

            </div>

            <div class="form-group">

                <label for="course">
                    Course
                </label>

                <input
                    type="text"
                    id="course"
                    name="course"
                    placeholder="Enter course"
                    required
                >

            </div>

            <div class="button-container">

                <button type="submit" id="submitButton">
                    Create Student
                </button>

            </div>

        </form>

    </div>

</div>

<script src="<?= base_url('assets/js/students.js') ?>"></script>

</body>

</html>