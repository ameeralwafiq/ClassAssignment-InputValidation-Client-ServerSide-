
    const form = document.querySelector('form');
    const nameInput = document.getElementById('name');
    const matricInput = document.getElementById('matric');
    const currentaddressInput = document.getElementById('current-address');
    const homeaddressInput = document.getElementById('home-address');
    const emailInput = document.getElementById('email');
    const mobilephoneInput = document.getElementById('mobile-phone');
    const homephoneInput = document.getElementById('home-phone');
    
    form.addEventListener('submit', (event) => {
        event.preventDefault();
        
        // Validate name
        if (!nameInput.checkValidity()) {
            showError('Please enter a valid name.');
            return;
        }

        // Validate matric
        if (!nameInput.checkValidity()) {
            showError('Please enter a valid matric number.');
            return;
        }

        // Validate Current Address
        if (!emailInput.checkValidity()) {
            showError('Please enter a valid email address.');
            return;
        }
        
        // Validate Home Address
        if (!passwordInput.checkValidity()) {
            showError('Please enter a valid home address');
            return;
        }

        // Validate email
        if (!nameInput.checkValidity()) {
            showError('Please enter a valid email.');
            return;
        }

        // Validate Mobile Phone
        if (!nameInput.checkValidity()) {
            showError('Please enter a valid phone number.');
            return;
        }

        // Validate Home Phone
        if (!nameInput.checkValidity()) {
            showError('Please enter a valid home phone number.');
            return;
        }


        // Submit the form if all input is valid
        form.submit();
    });
    
    function showError(message) {
        const errorContainer = document.getElementById('error-container');
        const errorMessage = document.getElementById('error-message');
        
        errorContainer.classList.add('show');
        errorMessage.textContent = message;
        
        setTimeout(() => {
            errorContainer.classList.remove('show');
        }, 3000);
    }
