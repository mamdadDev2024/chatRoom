import Swal from 'sweetalert2';
import './bootstrap';

const Toast = Swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.onmouseenter = Swal.stopTimer;
      toast.onmouseleave = Swal.resumeTimer;
    }
});

window.Echo.channel("notify")
    .listenToAll((event) => {
        Toast.fire({
            icon: event.type,
            title: event.message
        });
    });