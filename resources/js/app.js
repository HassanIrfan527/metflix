import './bootstrap';

document.addEventListener('DOMContentLoaded', function () {
    var alertElements = document.querySelectorAll('.alert .btn-close');
    alertElements.forEach(function (btn) {
        btn.addEventListener('click', function (event) {
            var alert = event.target.closest('.alert');
            alert.classList.add('hide');
            setTimeout(function () {
                alert.remove();
            }, 500);
        });
    });
});


window.addEventListener("resize", () => {
    if (window.innerWidth >= 768) {
        setIsOpen(false); // Close the mobile menu
    }
});

// document.addEventListener("alpine:init", () => {
//     Alpine.data("imageSlider", () => ({
//       currentIndex: 1,
//       images: [
//         "https://unsplash.it/640/425?image=30",
//         "https://unsplash.it/640/425?image=40",
//         "https://unsplash.it/640/425?image=50",
//       ],
//       previous() {
//         if (this.currentIndex > 1) {
//           this.currentIndex = this.currentIndex - 1;
//         }
//       },
//       forward() {
//         if (this.currentIndex < this.images.length) {
//           this.currentIndex = this.currentIndex + 1;
//         }
//       },
//     }));
//   });
