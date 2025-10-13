<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coaching Booking System</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <!-- FullCalendar CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/main.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Coaching Booking System</h1>
        <!-- Add Booking Button -->
        <div class="d-flex justify-content-end mb-3">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Launch static backdrop modal
</button>
        </div>
        <div id="calendar"></div>
    </div>

    <!-- Booking Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="bookingForm">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitle">Add Booking</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="bookingId">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" id="title" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">phone</label>
                            <input type="phone" id="phone" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="service_id" class="form-label">Service</label>
                            <select id="service_id" class="form-select" required></select>
                        </div>
                        <div class="mb-3">
                            <label for="start" class="form-label">Start</label>
                            <input type="datetime-local" id="start" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="end" class="form-label">End</label>
                            <input type="datetime-local" id="end" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Booking</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- FullCalendar JS -->
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/main.min.js"></script>

    <!-- Custom Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const calendarEl = document.getElementById('calendar');
            const modal = new bootstrap.Modal(document.getElementById('bookingModal'));
            const bookingForm = document.getElementById('bookingForm');

            // Initialize FullCalendar
            const calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                selectable: true,
                editable: true,
                events: '/api/bookings',
                eventClick: function (info) {
                    const event = info.event;
                    document.getElementById('modalTitle').textContent = 'Edit Booking';
                    document.getElementById('bookingId').value = event.id;
                    document.getElementById('title').value = event.title;
                    document.getElementById('phone').value = event.title;
                    document.getElementById('email').value = event.extendedProps.email;
                    document.getElementById('service_id').value = event.extendedProps.service_id;
                    document.getElementById('start').value = event.start.toISOString().slice(0, 16);
                    document.getElementById('end').value = event.end.toISOString().slice(0, 16);
                    modal.show();
                },
                select: function (info) {
                    document.getElementById('modalTitle').textContent = 'Add Booking';
                    document.getElementById('bookingId').value = '';
                    document.getElementById('title').value = '';
                    document.getElementById('email').value = '';
                    document.getElementById('phone').value = '';
                    document.getElementById('service_id').value = '';
                    document.getElementById('start').value = info.startStr.slice(0, 16);
                    document.getElementById('end').value = info.endStr.slice(0, 16);
                    modal.show();
                }
            });
            calendar.render();

            // Fetch Services and Populate Dropdown
            axios.get('/api/services').then(response => {
                const serviceSelect = document.getElementById('service_id');
                response.data.forEach(service => {
                    const option = document.createElement('option');
                    option.value = service.id;
                    option.textContent = service.name;
                    serviceSelect.appendChild(option);
                });
            });

            // Handle Form Submission
            bookingForm.addEventListener('submit', function (e) {
                e.preventDefault();

                const id = document.getElementById('bookingId').value;
                const data = {
                    title: document.getElementById('title').value,
                    email: document.getElementById('email').value,
                    phone: document.getElementById('phone').value,
                    service_id: document.getElementById('service_id').value,
                    start: document.getElementById('start').value,
                    end: document.getElementById('end').value,
                    user_id: 1 // Replace with authenticated user's ID
                };

                if (id) {
                    // Update Booking
                    axios.put(`/api/bookings/${id}`, data).then(() => {
                        calendar.refetchEvents();
                        modal.hide();
                    });
                } else {
                    // Add Booking
                    axios.post('/api/bookings', data).then(() => {
                        calendar.refetchEvents();
                        modal.hide();
                    });
                }
            });
        });
    </script>
</body>
</html>
