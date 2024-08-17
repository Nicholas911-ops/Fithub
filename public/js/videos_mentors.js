// public/js/videos_mentors.js

// Video count card display

fetch('/video-count')
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.json();
    })
    .then(data => {
        const videoCountElement = document.querySelector('.video-count');
        if (data && data.videoCount !== undefined) {
            videoCountElement.textContent = data.videoCount;
        } else {
            console.error('Invalid data format:', data);
            videoCountElement.textContent = 'N/A';
        }
    })
    .catch(error => {
        console.error('Error fetching video count:', error);
        const videoCountElement = document.querySelector('.video-count');
        videoCountElement.textContent = 'Error';
    });

$(document).ready(function() {
    // Fetch and display mentors
    function fetchMentors() {
        $.ajax({
            url: '/mentors',
            method: 'GET',
            success: function(data) {
                console.log(data); // Ensure data structure matches expectations
                let rows = '';
                data.forEach(mentor => {
                    rows += `
                        <tr>
                            <td>${mentor.id}</td>
                            <td>${mentor.name}</td>
                            <td>${mentor.email}</td>
                            <td>${mentor.bio ? mentor.bio : 'N/A'}</td>
                            <td>
                                ${mentor.image ? `<img src="/images/${mentor.image}" alt="${mentor.name}" style="width: 50px; height: 50px; object-fit: cover;">` : 'No Image'}
                            </td>
                        </tr>
                    `;
                });
                $('#mentors-table tbody').html(rows);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error('Failed to fetch mentors:', textStatus, errorThrown);
            }
        });
    }

    // Fetch and display workout videos
    function fetchWorkoutVideos() {
        $.ajax({
            url: '/workout-videos',
            method: 'GET',
            success: function(data) {
                console.log(data); // Ensure data structure matches expectations
                let rows = '';
                data.forEach(video => {
                    rows += `
                        <tr>
                            <td>${video.id}</td>
                            <td>${video.title}</td>
                            <td>${video.description ? video.description : 'N/A'}</td>
                            <td><a href="${video.video_url}" target="_blank">Watch</a></td>
                        </tr>
                    `;
                });
                $('#workout-videos-table tbody').html(rows);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error('Failed to fetch workout videos:', textStatus, errorThrown);
            }
        });
    }

    // Initial load
    fetchMentors();
    fetchWorkoutVideos();

    // Optionally, set an interval to refresh the data periodically
    setInterval(fetchMentors, 30000); // Refresh every 30 seconds
    setInterval(fetchWorkoutVideos, 30000); // Refresh every 30 seconds
});
