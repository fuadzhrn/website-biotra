document.addEventListener('DOMContentLoaded', function () {

    // Password toggle
    var toggleBtn = document.getElementById('passwordToggle');
    var passwordInput = document.getElementById('password');
    var toggleIcon = document.getElementById('passwordToggleIcon');

    if (toggleBtn && passwordInput && toggleIcon) {
        toggleBtn.addEventListener('click', function () {
            var isPassword = passwordInput.type === 'password';

            passwordInput.type = isPassword ? 'text' : 'password';
            toggleIcon.className = isPassword ? 'bi bi-eye-slash' : 'bi bi-eye';
            toggleBtn.setAttribute('aria-label', isPassword ? 'Sembunyikan password' : 'Tampilkan password');
        });
    }

});
