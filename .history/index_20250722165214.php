<!DOCTYPE html>
<html lang="bn">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Bangladesh Land Unit Converter (বাংলাদেশ জমির একক রূপান্তর)</title>
<meta name="description" content="Convert all Bangladesh land units like Paki, Bigha, Decimal, Shotangsho, Katha, Kani, Gonda, Acre and more with this converter. বাংলায় ও ইংরেজিতে।" />
<meta name="keywords" content="Bangladesh land unit converter, Paki, Bigha, Decimal, Katha, Kani, Gonda, Acre, Shotangsho, জমির একক রূপান্তর" />
<meta name="author" content="Riad" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" />
<style>
  body { background: #f9f9f9; padding: 1rem; }
  .container { max-width: 700px; margin: auto; background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 0 12px rgba(0,0,0,0.1); }
  h1 { margin-bottom: 1.5rem; }
  label { font-weight: 600; }
  #result { margin-top: 1.5rem; font-size: 1.25rem; font-weight: 700; }
</style>
</head>
<body>
  <div class="container">
    <h1>Bangladesh Land Unit Converter <br/><small>(বাংলাদেশ জমির একক রূপান্তর)</small></h1>

    <label for="inputValue">Enter Value (পরিমাণ দিন):</label>
    <input type="number" id="inputValue" class="form-control mb-3" placeholder="Enter numeric value" />

    <label for="fromUnit">From Unit (থেকে):</label>
    <select id="fromUnit" class="form-select mb-3"></select>

    <label for="toUnit">To Unit (এ):</label>
    <select id="toUnit" class="form-select mb-3"></select>

    <button class="btn btn-primary w-100" onclick="convert()">Convert (রূপান্তর করুন)</button>

    <div id="result" class="mt-4 text-center"></div>
    <div id="visitorCount" style="margin-top:20px; font-weight:bold;">
</div>
  </div>



<script>
  // Units converted to square feet (sq ft) base
  const units = {
    "paki": 14400,         // 1 Paki = 1 Bigha = 20 Katha * 720 = 14400 sq ft
    "bigha": 14400,        // 1 Bigha = 14400 sq ft
    "decimal": 435.6,      // 1 Decimal = 1 Shotangsho = 435.6 sq ft approx
    "shotangsho": 435.6,
    "katha": 720,          // 1 Katha = 720 sq ft approx
    "ojutangsho": 4.356,   // 1 Ojutangsho = Shotangsho / 100 = 4.356 sq ft
    "kani": 17280,         // 1 Kani = 17280 sq ft
    "gonda": 864,          // 1 Gonda = 864 sq ft
    "kora": 216,           // 1 Kora = 216 sq ft
    "kranti": 72,          // 1 Kranti = 72 sq ft
    "til": 3.6,            // 1 Til = 3.6 sq ft
    "acre": 43560,         // 1 Acre = 43560 sq ft
    "chain": 4356,         // 1 Chain = 66 feet * 66 feet = 4356 sq ft
    "square_meter": 10.7639,   // 1 sqm = 10.7639 sq ft
    "square_link": 0.4356,     // 1 Square Link = 0.4356 sq ft
    "bargo_hat": 2.25,      // approx 1 Bargo Hat (8 Hat Nol) ~ 2.25 sq ft
    "chotak": 45,           // 1 Chotak = 45 sq ft (approx from 16 Chotak = 720 sq ft)
    "kak": 54,              // Approx 1 Kak = 54 sq ft (4 Kak = 1 Kora -> 216 sq ft)
    "donto": 12,            // 1 Donto = 12 sq ft
    "dhul": 1.71,           // 1 Dhul = 1.71 sq ft
    "renu": 0.057,          // 1 Renu = 0.057 sq ft
  };

  const unitNames = {
    "paki": "Paki (পাকি)",
    "bigha": "Bigha (বিঘা)",
    "decimal": "Decimal (ডেসিমেল)",
    "shotangsho": "Shotangsho (শতাংশ)",
    "katha": "Katha (কাঠা)",
    "ojutangsho": "Ojutangsho (ওজুতাংশ)",
    "kani": "Kani (কানি)",
    "gonda": "Gonda (গণ্ডা)",
    "kora": "Kora (কোরা)",
    "kranti": "Kranti (ক্রান্তি)",
    "til": "Til (তিল)",
    "acre": "Acre (একর)",
    "chain": "Chain (চেইন)",
    "square_meter": "Square Meter (বর্গ মিটার)",
    "square_link": "Square Link (বর্গ লিঙ্ক)",
    "bargo_hat": "Bargo Hat (বার্গো হাত)",
    "chotak": "Chotak (চোতাক)",
    "kak": "Kak (কাক)",
    "donto": "Donto (দন্ত)",
    "dhul": "Dhul (ধূল)",
    "renu": "Renu (রেণু)",
  };

  // Populate dropdowns
  window.onload = () => {
    const fromSelect = document.getElementById("fromUnit");
    const toSelect = document.getElementById("toUnit");
    for (const key in units) {
      let optionFrom = document.createElement("option");
      optionFrom.value = key;
      optionFrom.text = unitNames[key];
      fromSelect.appendChild(optionFrom);

      let optionTo = document.createElement("option");
      optionTo.value = key;
      optionTo.text = unitNames[key];
      toSelect.appendChild(optionTo);
    }
    fromSelect.value = "bigha";
    toSelect.value = "katha";
  };

  function convert() {
    const value = parseFloat(document.getElementById("inputValue").value);
    const fromUnit = document.getElementById("fromUnit").value;
    const toUnit = document.getElementById("toUnit").value;
    const resultDiv = document.getElementById("result");

    if (isNaN(value) || value <= 0) {
      resultDiv.innerHTML = "Please enter a valid positive number (একটি বৈধ ধনাত্মক সংখ্যা লিখুন)";
      return;
    }
    if (!units[fromUnit] || !units[toUnit]) {
      resultDiv.innerHTML = "Invalid unit selection (ভুল একক নির্বাচন)";
      return;
    }

    const valueInSqFt = value * units[fromUnit];
    const convertedValue = valueInSqFt / units[toUnit];

    resultDiv.innerHTML = `
      ${value} ${unitNames[fromUnit]} = <strong>${convertedValue.toFixed(4)}</strong> ${unitNames[toUnit]} <br/>
      (${value} ${unitNames[fromUnit]} = <strong>${convertedValue.toFixed(4)}</strong> ${unitNames[toUnit]})
    `;
  }

  (function(){
  const countKey = "myVisitorCount";
  let count = localStorage.getItem(countKey);

  if (!count) {
    count = 1;
  } else {
    count = parseInt(count) + 1;
  }
  
  localStorage.setItem(countKey, count);

  document.getElementById("visitorCount").innerText = `You have visited this page ${count} time(s). (আপনি এই পেজে ${count} বার এসেছেন)`;
})();

</script>
</body>
</html>
