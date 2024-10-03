// API Version
const baseRequest = {
    apiVersion: 2,
    apiVersionMinor: 0
};

const tokenizationSpecification = {
    type: 'PAYMENT_GATEWAY',
    parameters: {
        'gateway': 'example',
        'gatewayMerchantId': 'assignmentTwoPayId'
    }
};

const allowedCardNetworks = ["AMEX", "DISCOVER", "INTERAC", "JCB", "MASTERCARD", "VISA"];
const allowedCardAuthMethods = ["PAN_ONLY", "CRYPTOGRAM_3DS"];

const baseCardPaymentMethod = {
    type: 'CARD',
    parameters: {
        allowedAuthMethods: allowedCardAuthMethods,
        allowedCardNetworks: allowedCardNetworks
    }
};

const cardPaymentMethod = Object.assign(
    { tokenizationSpecification: tokenizationSpecification },
    baseCardPaymentMethod
);

let paymentsClient = null;

function getGooglePaymentsClient() {
    if (paymentsClient === null) {
        paymentsClient = new google.payments.api.PaymentsClient({
            environment: 'TEST',
            paymentDataCallbacks: {
                onPaymentAuthorized: onPaymentAuthorized
            }
        });
    }
    return paymentsClient;
}

function getGoogleIsReadyToPayRequest() {
    return Object.assign(
        {},
        baseRequest,
        {
            allowedPaymentMethods: [baseCardPaymentMethod]
        }
    );
}

function onGooglePayLoaded() {
    const paymentsClient = getGooglePaymentsClient();
    paymentsClient.isReadyToPay(getGoogleIsReadyToPayRequest())
        .then(function (response) {
            if (response.result) {
                addGooglePayButton();
            }
        })
        .catch(function (err) {
            console.error(err);
        });
}

function addGooglePayButton() {
    const paymentsClient = getGooglePaymentsClient();
    const button =
        paymentsClient.createButton({
            onClick: onGooglePaymentButtonClicked,
            allowedPaymentMethods: [baseCardPaymentMethod]
        });
    document.getElementById('google-pay-button').appendChild(button);
}

function getGooglePaymentDataRequest() {
    const paymentDataRequest = Object.assign({}, baseRequest);
    paymentDataRequest.allowedPaymentMethods = [cardPaymentMethod];
    paymentDataRequest.transactionInfo = getGoogleTransactionInfo();
    paymentDataRequest.merchantInfo = {
        merchantName: 'Example Merchant'
    };
    paymentDataRequest.callbackIntents = ["PAYMENT_AUTHORIZATION"];
    return paymentDataRequest;
}

function getGoogleTransactionInfo() {
    return {
        displayItems: [
            {
                label: "Subtotal",
                type: "SUBTOTAL",
                price: totalPrice.toString(),
            },
            {
                label: "Tax",
                type: "TAX",
                price: "0.00",
            }
        ],
        countryCode: 'AU',
        currencyCode: "AUD",
        totalPriceStatus: "FINAL",
        totalPrice: totalPrice.toString(),
        totalPriceLabel: "Total"
    };
}

// Event handler for user gestures
function onGooglePaymentButtonClicked() {
    const paymentDataRequest = getGooglePaymentDataRequest();
    paymentDataRequest.transactionInfo = getGoogleTransactionInfo();

    const paymentsClient = getGooglePaymentsClient();
    paymentsClient.loadPaymentData(paymentDataRequest)
        .then(function (paymentData) {
            // handle the response
            processPayment(paymentData);
        })
        .catch(function (err) {
            // show error in developer console for debugging
            console.error(err);
            showResponseMessage('Payment failed: ' + err.message, 'error');
        });
}

// Setting up Authorize Payments
function onPaymentAuthorized(paymentData) {
    return new Promise(function (resolve, reject) {
        // handle the response
        processPayment(paymentData)
            .then(function () {
                resolve({ transactionState: 'SUCCESS' });
                showResponseMessage('Payment successful!', 'success');
            })
            .catch(function () {
                resolve({
                    transactionState: 'ERROR',
                    error: {
                        intent: 'PAYMENT_AUTHORIZATION',
                        message: 'Insufficient funds',
                        reason: 'PAYMENT_DATA_INVALID'
                    }
                });
                showResponseMessage('Payment failed: Insufficient funds', 'error');
            });
    });
}

let attempts = 0;
function processPayment(paymentData) {
    return new Promise(function(resolve, reject) {
        setTimeout(function() {
            // Assume the payment is processed and you get these values from the payment gateway
            const paymentToken = paymentData.paymentMethodData.tokenizationData.token;
            
            // Mocking transaction details
            const txn_id = '123456789'; // Replace with actual transaction ID
            const item_number = 'PROD001'; // Replace with actual product/item number
            const payment_gross = totalPrice.toString(); // Replace with actual payment amount
            const currency_code = 'AUD'; // Replace with actual currency code
            const payment_status = 'Completed'; // Replace with actual payment status

            // Redirect to the PHP response page
            window.location.href = `gpay-logic/response.php?item_number=${item_number}&tx=${txn_id}&amt=${payment_gross}&cc=${currency_code}&st=${payment_status}`;

            resolve({});
        }, 3000);
    });
}


// Function to display success or error messages
function showResponseMessage(message, type) {
    const messageContainer = document.getElementById('response-message');
    messageContainer.innerText = message;

    if (type === 'success') {
        messageContainer.style.color = 'green';
    } else if (type === 'error') {
        messageContainer.style.color = 'red';
    }
}
