// fitness progress rendering and saving logic
function generateFitnessTracker() {
    return `
        <h6>Fitness Log</h6>
        <div class="mb-3">
          <label for="dateInput" class="form-label">Date</label>
          <input type="date" class="form-control" id="dateInput">
        </div>
        <div class="mb-3">
          <label for="workoutInput" class="form-label">Workout</label>
          <input type="text" class="form-control" id="workoutInput">
        </div>
        <div class="mb-3">
          <label for="durationInput" class="form-label">Duration (mins)</label>
          <input type="number" class="form-control" id="durationInput">
        </div>
        <div class="mb-3">
          <label for="caloriesInput" class="form-label">Calories Burned</label>
          <input type="number" class="form-control" id="caloriesInput">
        </div>
        <button type="button" class="btn btn-primary" onclick="addFitnessData()">Add to Log</button>
        <canvas id="fitnessChart" width="400" height="200"></canvas>`;
}

// Insert Fitness Tracker HTML into the DOM
document.getElementById('app').innerHTML = generateFitnessTracker();

async function addFitnessData() {
    const date = document.getElementById('dateInput').value;
    const workout = document.getElementById('workoutInput').value;
    const duration = document.getElementById('durationInput').value;
    const calories = document.getElementById('caloriesInput').value;

    if (!date || !workout || !duration || !calories) {
        alert('Please fill in all fields');
        return;
    }

    try {
        await fetch('/fitness-log', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({ date, exercise: workout, duration, calories_burned: calories })
        });
        renderFitnessChart(); // Update chart after saving data
    } catch (error) {
        console.error('Error:', error);
    }
}

async function renderFitnessChart() {
    try {
        const response = await fetch('/fitness-log');
        const fitnessData = await response.json();
        
        let labels = fitnessData.map(entry => entry.date);
        let data = fitnessData.map(entry => entry.calories_burned);

        const ctx = document.getElementById('fitnessChart').getContext('2d');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Calories Burned',
                    data: data,
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 2,
                    fill: false
                }]
            },
            options: {
                responsive: true,
                scales: {
                    x: {
                        display: true,
                        title: {
                            display: true,
                            text: 'Date'
                        }
                    },
                    y: {
                        display: true,
                        title: {
                            display: true,
                            text: 'Calories'
                        }
                    }
                }
            }
        });
    } catch (error) {
        console.error('Error:', error);
    }
}
