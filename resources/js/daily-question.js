document.addEventListener('DOMContentLoaded', function() {
    const radios = document.querySelectorAll('input[name="answer"]');
    const button = document.querySelector('button[type="submit"]');

    function checkRadios() {
        const anyChecked = Array.from(radios).some(radio => radio.checked);
        button.classList.toggle('hidden', !anyChecked);
    }

    radios.forEach(radio => radio.addEventListener('change', checkRadios));
    checkRadios(); // Initial check
});
