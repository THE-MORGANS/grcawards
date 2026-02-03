let delegateCount = 1;
let selectedPrice = 1300;
let selectedOption = 'Full Conference Pass';

// Select attendance option
function selectOption(element) {
    // Remove selected class from all options
    document.querySelectorAll('.option-card').forEach(card => {
        card.classList.remove('selected');
    });

    // Add selected class to clicked option
    element.classList.add('selected');

    // Update selected price and option name
    selectedPrice = parseInt(element.getAttribute('data-price'));
    selectedOption = element.querySelector('.option-title').textContent;

    // Update total
    updateTotal();
}

// Add new delegate
function addDelegate() {
    delegateCount++;
    const delegatesContainer = document.getElementById('delegates-container');

    const delegateCard = document.createElement('div');
    delegateCard.className = 'delegate-card';
    delegateCard.setAttribute('data-delegate-index', delegateCount);
    delegateCard.innerHTML = `
        <div class="delegate-header">
            <h5 class="delegate-number">Delegate ${delegateCount}</h5>
            <button class="remove-delegate-btn" onclick="removeDelegate(this)">
                <i class="mdi mdi-trash-can-outline"></i> Remove
            </button>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label>Delegate Name <span class="required">*</span></label>
                <input type="text" class="form-control" placeholder="Enter your delegate name" required>
            </div>
            <div class="form-group">
                <label>Email Address <span class="required">*</span></label>
                <input type="email" class="form-control" placeholder="Enter your email address" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label>Phone Number <span class="required">*</span></label>
                <div class="phone-input">
                    <input type="text" class="form-control" placeholder="+260" value="+260">
                    <input type="tel" class="form-control" placeholder="Enter your phone number" required>
                </div>
            </div>
            <div class="form-group">
                <label>Organization <span class="required">*</span></label>
                <input type="text" class="form-control" placeholder="Enter your organization" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label>Job Title <span class="required">*</span></label>
                <input type="text" class="form-control" placeholder="Enter your job title" required>
            </div>
            <div class="form-group">
                <label>Country <span class="required">*</span></label>
                <select class="form-control" required>
                    <option value="">Select your country</option>
                    <option value="zambia">Zambia</option>
                    <option value="south-africa">South Africa</option>
                    <option value="kenya">Kenya</option>
                    <option value="nigeria">Nigeria</option>
                    <option value="ghana">Ghana</option>
                    <option value="zimbabwe">Zimbabwe</option>
                    <option value="botswana">Botswana</option>
                    <option value="tanzania">Tanzania</option>
                    <option value="uganda">Uganda</option>
                    <option value="other">Other</option>
                </select>
            </div>
        </div>
    `;

    delegatesContainer.appendChild(delegateCard);
    updateTotal();
}

// Remove delegate
function removeDelegate(button) {
    if (delegateCount > 1) {
        button.closest('.delegate-card').remove();
        delegateCount--;
        updateTotal();
    }
}

// Update total amount
function updateTotal() {
    const total = selectedPrice * delegateCount;
    const formattedTotal = total.toLocaleString();

    // Update main total
    document.getElementById('total-amount').textContent = formattedTotal;
    document.getElementById('sidebar-total-amount').textContent = formattedTotal;

    // Update delegate count text
    const delegateText = delegateCount === 1 ? 'One delegate(s)' : `${delegateCount} delegate(s)`;
    document.getElementById('delegate-count-text').textContent = `For ${delegateText}`;

    // Update sidebar delegates breakdown
    const summaryDelegates = document.getElementById('summary-delegates');
    if (delegateCount === 1) {
        summaryDelegates.textContent = 'No additional delegates';
    } else {
        summaryDelegates.textContent = `${delegateCount - 1} additional delegate${delegateCount > 2 ? 's' : ''}`;
    }
}

// Validate form and collect data
function proceedToPayment() {
    // Remove previous error states
    document.querySelectorAll('.form-control').forEach(input => {
        input.classList.remove('error');
    });

    let isValid = true;
    const delegates = [];

    // Get all delegate cards
    const delegateCards = document.querySelectorAll('.delegate-card');

    delegateCards.forEach((card, index) => {
        const inputs = card.querySelectorAll('.form-control');
        const delegateData = {
            delegateNumber: index + 1,
            name: '',
            email: '',
            phoneCode: '',
            phone: '',
            organization: '',
            jobTitle: '',
            country: ''
        };

        let delegateValid = true;

        inputs.forEach(input => {
            // Skip phone code input (the +260 field)
            if (input.placeholder === '+260') {
                delegateData.phoneCode = input.value;
                return;
            }

            // Check if field is empty
            if (!input.value || input.value.trim() === '') {
                input.classList.add('error');
                isValid = false;
                delegateValid = false;
            } else {
                // Determine field type and store value
                const label = input.closest('.form-group').querySelector('label').textContent.toLowerCase();

                if (label.includes('delegate name')) {
                    delegateData.name = input.value.trim();
                } else if (label.includes('email')) {
                    delegateData.email = input.value.trim();
                } else if (label.includes('phone')) {
                    delegateData.phone = input.value.trim();
                } else if (label.includes('organization')) {
                    delegateData.organization = input.value.trim();
                } else if (label.includes('job title')) {
                    delegateData.jobTitle = input.value.trim();
                } else if (label.includes('country')) {
                    delegateData.country = input.value;
                }
            }
        });

        if (delegateValid) {
            delegates.push(delegateData);
        }
    });

    if (!isValid) {
        alert('Please fill in all required fields for all delegates.');
        // Scroll to first error
        const firstError = document.querySelector('.form-control.error');
        if (firstError) {
            firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
            firstError.focus();
        }
        return;
    }

    // Calculate total
    const totalPrice = selectedPrice * delegateCount;

    // Prepare complete registration data
    const registrationData = {
        attendanceOption: {
            name: selectedOption,
            pricePerDelegate: selectedPrice,
            currency: 'USD'
        },
        delegates: {
            count: delegateCount,
            list: delegates
        },
        pricing: {
            pricePerDelegate: selectedPrice,
            numberOfDelegates: delegateCount,
            totalAmount: totalPrice,
            currency: 'USD',
            formattedTotal: 'USD ' + totalPrice.toLocaleString()
        }
    };

    // Store data in sessionStorage for payment page
    sessionStorage.setItem('registrationData', JSON.stringify(registrationData));

    // Log data to console for debugging
    console.log('========================================');
    console.log('    CONFERENCE REGISTRATION DATA');
    console.log('========================================');
    console.log('\n📋 ATTENDANCE OPTION:');
    console.log('   Option Selected:', selectedOption);
    console.log('   Price Per Delegate: USD', selectedPrice.toLocaleString());
    console.log('\n👥 DELEGATES:');
    console.log('   Total Delegates:', delegateCount);
    console.log('   Delegate Details:', delegates);
    console.log('\n💰 PRICING SUMMARY:');
    console.log('   Price per Delegate: USD', selectedPrice.toLocaleString());
    console.log('   Number of Delegates:', delegateCount);
    console.log('   TOTAL AMOUNT: USD', totalPrice.toLocaleString());
    console.log('\n📦 COMPLETE DATA OBJECT:');
    console.log(registrationData);
    console.log('========================================\n');

    // Redirect to payment page
    window.location.href = '/summit/lusaka-2026/payment';
}

// Initialize on page load
document.addEventListener('DOMContentLoaded', function () {
    updateTotal();

    // Attach event listener to payment button
    const paymentButton = document.querySelector('.payment-button');
    if (paymentButton) {
        paymentButton.addEventListener('click', proceedToPayment);
    }
});
