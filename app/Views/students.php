<!DOCTYPE html>
<html>

<head>

    <title>Student Management</title>

</head>

<body>

    <h1>Student Management System</h1>

    <table border="1">

        <thead>

            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Course</th>
            </tr>

        </thead>

        <tbody>

            <?php foreach ($students as $student): ?>

                <tr>

                    <td>
                        <?= esc($student['id']) ?>
                    </td>

                    <td>
                        <?= esc($student['name']) ?>
                    </td>

                    <td>
                        <?= esc($student['email']) ?>
                    </td>

                    <td>
                        <?= esc($student['course']) ?>
                    </td>

                </tr>

            <?php endforeach; ?>

        </tbody>

    </table>

</body>

</html>