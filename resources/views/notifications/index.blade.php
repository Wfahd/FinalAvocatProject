<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage='notification'></x-navbars.sidebar>
    
    <main class="main-content position-relative max-height-vh-200 h-200 border-radius-lg ">
                <x-navbars.navs.auth titlePage="notifications"></x-navbars.navs.auth>





<div id="notifications">
    @foreach($notifications as $notification)
        <div class="notification">
            <div class="message">{{ $notification->data['message'] }}</div>
            <div class="mark-as-read">
                <form action="{{ route('notifications.markAsRead', $notification->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit">Mark as Read</button>
                </form>
            </div>
        </div>
    @endforeach
</div>

</main>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const notificationsContainer = document.getElementById('notifications');
        const markAsReadButtons = notificationsContainer.getElementsByClassName('mark-as-read');

        Array.from(markAsReadButtons).forEach(function (button) {
            button.addEventListener('submit', function (event) {
                event.preventDefault();

                const url = this.action;

                fetch(url, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    },
                })
                .then(function (response) {
                    if (response.ok) {
                        // Remove the notification from the DOM
                        const notification = button.closest('.notification');
                        notification.remove();
                    }
                })
                .catch(function (error) {
                    console.error('Error:', error);
                });
            });
        });
    });
</script>

<x-plugins></x-plugins>
</x-layout> 
