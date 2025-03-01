import './bootstrap';
import './tooltip';

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
document.addEventListener('alpine:init', () => {
    Alpine.store('navigation', {
        navigating: false,
    });

    document.addEventListener('livewire:navigate', () => {
        Alpine.store('navigation').navigating = true;
    });

    document.addEventListener('livewire:navigated', () => {
        Alpine.store('navigation').navigating = false;
    });
});


// Theme toggle function
function toggleTheme() {
    const moonIcon = document.getElementById('moon-icon');
    const sunIcon = document.getElementById('sun-icon');

    // Toggle icons
    if (moonIcon.classList.contains('block')) {
        moonIcon.classList.replace('block', 'hidden');
        sunIcon.classList.replace('hidden', 'block');
    } else {
        sunIcon.classList.replace('block', 'hidden');
        moonIcon.classList.replace('hidden', 'block');
    }

    // Here you would add logic to toggle between dark and light mode
    // This is a placeholder for your theme switching functionality
    document.documentElement.classList.toggle('light-mode');
}

document.addEventListener('alpine:init', () => {
    // Sticky navbar effect
    window.addEventListener('scroll', () => {
        const navbar = document.querySelector('nav');
        if (window.scrollY > 10) {
            navbar.classList.add('py-2', 'bg-black/80', 'shadow-xl');
            navbar.classList.remove('py-4', 'bg-black/70');
        } else {
            navbar.classList.add('py-4', 'bg-black/70');
            navbar.classList.remove('py-2', 'bg-black/80', 'shadow-xl');
        }
    });
});

