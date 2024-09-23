// api version
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
{tokenizationSpecification: tokenizationSpecification},
baseCardPaymentMethod
);

let paymentsClient = null;

function getGooglePaymentsClient() {
if ( paymentsClient === null ) {
    paymentsClient = new google.payments.api.PaymentsClient({
    environment: 'TEST',
    //10.1
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
    .then(function(response) {
        if (response.result) {
        addGooglePayButton();
        }
    })
    .catch(function(err) {
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
        price: "500.00",
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
    totalPrice: "500.00",
    totalPriceLabel: "Total"
};
}

// registering an event handler for user gestures
function onGooglePaymentButtonClicked() {
const paymentDataRequest = getGooglePaymentDataRequest();
paymentDataRequest.transactionInfo = getGoogleTransactionInfo();

const paymentsClient = getGooglePaymentsClient();
paymentsClient.loadPaymentData(paymentDataRequest)
    .then(function(paymentData) {
        // handle the response
        processPayment(paymentData);
    })
    .catch(function(err) {
        // show error in developer console for debugging
        console.error(err);
    });
}

// setting up Authorize Payments
function onPaymentAuthorized(paymentData) {
return new Promise(function(resolve, reject){
    // handle the response
    processPayment(paymentData)
    .then(function() {
    resolve({transactionState: 'SUCCESS'});
    })
    .catch(function() {
    resolve({
        transactionState: 'ERROR',
        error: {
        intent: 'PAYMENT_AUTHORIZATION',
        message: 'Insufficient funds',
        reason: 'PAYMENT_DATA_INVALID'
        }
    });
    });
});
}

let attempts = 0;
function processPayment(paymentData) {
return new Promise(function(resolve, reject) {
        setTimeout(function() {
                // @todo pass payment token to your gateway to process payment
                paymentToken = paymentData.paymentMethodData.tokenizationData.token;

        resolve({});
    }, 3000);
});
}