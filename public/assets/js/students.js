 const form = document.getElementById('studentForm');

    const message = document.getElementById('message');

    const submitButton = document.getElementById('submitButton');


    form.addEventListener('submit', async function(event) {

        // Stop the browser from refreshing the page
        event.preventDefault();


        // Get form values
        const name = document.getElementById('name').value;

        const email = document.getElementById('email').value;

        const course = document.getElementById('course').value;


        // Disable button while processing
        submitButton.disabled = true;

        submitButton.textContent = 'Creating...';


        try {

            const response = await fetch('/api/students', {

                method: 'POST',

                headers: {
                    'Content-Type': 'application/json'
                },

                body: JSON.stringify({

                    name: name,

                    email: email,

                    course: course

                })

            });


            const data = await response.json();


            if (response.ok) {

                message.className = 'message success';

                message.textContent = data.message;

                form.reset();

            } else {

                message.className = 'message error';

                message.textContent =
                    data.message || 'Failed to create student.';

            }


        } catch (error) {

            message.className = 'message error';

            message.textContent =
                'Unable to connect to the API.';

            console.error(error);

        }


        // Enable button again
        submitButton.disabled = false;

        submitButton.textContent = 'Create Student';

    });