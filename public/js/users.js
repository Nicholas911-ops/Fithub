// public/js/users.js

// Getting the users table in the frontend logic
$(document).ready(function() {
    function fetchUsers() {
        $.ajax({
            url: '/users',
            method: 'GET',
            success: function(data) {
                console.log(data); // Ensure data structure matches expectations
                let rows = '';
                data.forEach(user => {
                    rows += `
                        <tr>
                            <td>${user.id}</td>
                            <td>${user.name}</td>
                            <td>${user.email}</td>
                            <td>${user.role}</td>
                        </tr>
                    `;
                });
                $('#users-table tbody').html(rows);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error('Failed to fetch users:', textStatus, errorThrown);
            }
        });
    }

    // Initial load
    fetchUsers();

    // Optionally, set an interval to refresh the data periodically
    setInterval(fetchUsers, 30000); // Refresh every 30 seconds
});

// User count card display
fetch('/user-count')
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.json();
    })
    .then(data => {
        const userCountElement = document.querySelector('.user-count');
        if (data && data.userCount !== undefined) {
            userCountElement.textContent = data.userCount;
        } else {
            console.error('Invalid data format:', data);
            userCountElement.textContent = 'N/A';
        }
    })
    .catch(error => {
        console.error('Error fetching user count:', error);
        const userCountElement = document.querySelector('.user-count');
        userCountElement.textContent = 'Error';
    });
