const from_currencyEl = document.getElementById('from_currency');
const from_ammountEl = document.getElementById('from_ammount');
const to_currencyEl = document.getElementById('to_currency');
const to_ammountEl = document.getElementById('to_ammount');
const rate = document.getElementById('rate');
const exchange = document.getElementById('exchange');
const test = document.getElementById('list');
// const api_url = `https://api.exchangerate-api.com/v4/latest/${from_currency}`;
const json_file = `currencies.json`;

const from_currency = document.getElementById('from_currency');
const to_currency = document.getElementById('to_currency');
async function displayData() {
    "use strict";
    const currencies = await fetch("currencies.json");
    const data = await currencies.json();
    Object.entries(data).forEach(([key, value]) => {
        from_currency.innerHTML += `
      <option value="${key}">${key}</option>
      `;
        to_currency.innerHTML += `
      <option value="${key}">${key}</option>
      `;
    });
}
displayData();

from_currencyEl.addEventListener('change', calculate);
from_ammountEl.addEventListener('input', calculate);
to_currencyEl.addEventListener('change', calculate);
to_ammountEl.addEventListener('input', calculate);

exchange.addEventListener('click', () => {
    const temp = from_currencyEl.value;
    from_currencyEl.value = to_currencyEl.value;
    to_currencyEl.value = temp;
    calculate();
});

async function calculate() {
    const from_currency = from_currencyEl.value;
    const to_currency = to_currencyEl.value;

    const response = await fetch(`https://api.exchangerate-api.com/v4/latest/${from_currency}`);
    const data = await response.json();
    const ratess = data.rates[to_currency];
    rate.innerText = `Conversion Rate: 1 ${from_currency} = ${ratess} ${to_currency}`
    to_ammountEl.value = (from_ammountEl.value * ratess).toFixed(2);
}


calculate();

