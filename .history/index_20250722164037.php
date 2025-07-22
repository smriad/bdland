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
  body { background: #f9f9f9; padding: 1rem; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
  .container { max-width: 800px; margin: auto; background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 0 12px rgba(0,0,0,0.1); }
  h1 { margin-bottom: 1.5rem; font-weight: 700; text-align: center; }
  label { font-weight: 600; }
  #result { margin-top: 1.5rem; font-size: 1.25rem; font-weight: 700; text-align: center; }
  #visitorCount { margin-top: 1rem; font-size: 0.9rem; color: #555; text-align: center; }
  footer { margin-top: 3rem; font-size: 0.85rem; color: #666; text-align: center; }
  .info-box {
    margin-top: 1.5rem; 
    padding: 1rem; 
    background: #eef7ff; 
    border-left: 5px solid #339af0;
    font-size: 0.9rem; 
    color: #333;
    max-height: 250px;
    overflow-y: auto;
  }
  ul { padding-left: 1.2rem; }
</style>
</head>
<body>
  <div class="container" role="main" aria-label="Bangladesh Land Unit Converter">
    <h1>Bangladesh Land Unit Converter<br/><small>(বাংলাদেশ জমির একক রূপান্তর)</small></h1>

    <label for="inputValue">Enter Value (পরিমাণ দিন):</label>
    <input type="number" id="inputValue" class="form-control mb-3" placeholder="Enter numeric value (সংখ্যা লিখুন)" min="0" step="any" aria-required="true" />

    <label for="fromUnit">From Unit (থেকে):</label>
    <select id="fromUnit" class="form-select mb-3" aria-label="Select unit to convert from"></select>

    <label for="toUnit">To Unit (এ):</label>
    <select id="toUnit" class="form-select mb-3" aria-label="Select unit to convert to"></select>

    <button class="btn btn-primary w-100" onclick="convert()">Convert (রূপান্তর করুন)</button>

    <div id="result" aria-live="polite" aria-atomic="true"></div>

    <div class="info-box" tabindex="0" aria-label="Important Land Unit Formulas and Relations">
      <h3>Important Unit Formulas & Relations (গুরুত্বপূর্ণ একক সূত্র ও সম্পর্ক)</h3>
      <ul>
        <li>1 Paki = 1 Bigha = 33 Decimal</li>
        <li>1 Decimal = 1 Shotangsho (Shotok) = 435.6 Sq Feet (approx)</li>
        <li>1 Kattah (Cottah) = 1.65 Shotangsho (approx)</li>
        <li>1 Katha = 165 Ojutangsho (approx), 1 Shotangsho = 100 Ojutangsho</li>
        <li>1 Katha = 720 Sq Feet (approx)</li>
        <li>20 Katha = 1 Bigha</li>
        <li>3 Bighas = 1 Acre approx. (1600 square yards)</li>
        <li>4 Kora = 1 Gonda</li>
        <li>20 Gonda = 1 Kani</li>
        <li>80 Kora = 1 Kani</li>
        <li>120 Decimal = 1 Kani</li>
        <li>17280 Square Feet = 1 Kani</li>
        <li>1619 Square Meter = 1 Kani</li>
        <li>40000 Square Links = 1 Kani</li>
        <li>7680 Square Hat = 1 Kani</li>
        <li>1936 Bargogoz = 1 Kani</li>
        <li>40 Acre = 1 Kani</li>
        <li>12 Nol * 10 Nol = 120 Bargonol (8 Hat Nol)</li>
        <li>17280 Sq Ft = 1 Kani = 20 Gonda</li>
        <li>864 Sq Ft = 1 Gonda = 4 Kora</li>
        <li>216 Sq Ft = 1 Kora = 3 Kranti/Kontho</li>
        <li>72 Sq Ft = 1 Kranti = 20 Til</li>
        <li>3.6 Sq Ft = 1 Til</li>
        <li>1 Chain = 66 Feet</li>
        <li>10 Square Chain = 43560 Sq Ft = 1 Acre</li>
        <li>1 Chain = 100 Link, so 1 Square Chain = 100,000 Square Link = 1 Acre</li>
        <li>1 Acre = 100 Shotok</li>
        <li>1 Shotok = 1,000 Square Link = 435.6 Sq Ft</li>
        <li>1 Kani or 20 Gonda = 40,000 Square Link</li>
        <li>1 Gonda or 4 Kora = 2,000 Square Link</li>
        <li>1 Kora or 3 Kranti = 500 Square Link</li>
        <li>1 Kranti or 20 Til = 160.66 Square Link</li>
        <li>1 Til = 8.33 Square Link</li>
        <li>1 Kani or 20 Gaz/Yard = 7680 Bargo Hat</li>
        <li>1 Gonda or 4 Kora = 384 Bargo Hat</li>
        <li>1 Kora or 3 Kranti = 96 Bargo Hat</li>
        <li>1 Kranti or 20 Til = 32 Bargo Hat</li>
        <li>1 Til = 1.6 Bargo Hat</li>
        <li>1 Kani or 20 Gonda = 17280 Sq Ft</li>
        <li>1 Gonda or 4 Kora = 864 Sq Ft</li>
        <li>1 Kora or 3 Kontho/Kranti = 216 Sq Ft</li>
        <li>1 Kontho or 6 Donto = 72 Sq Ft</li>
        <li>1 Dondo or 7 Dhul = 12 Sq Ft</li>
        <li>1 Dhul or 30 Renu = 1.71 Sq Ft</li>
        <li>1 Renu = 0.057 Sq Ft</li>
        <li>1 Kani or 20 Gonda = 1936 Bargo Gaz (Square Yard)</li>
        <li>1 Gonda or 4 Kora = 96.8 Bargo Gaz (Square Yard)</li>
        <li>1 Kora or 3 Kranti = 24.2 Bargo Gaz (Square Yard)</li>
        <li>1 Kranti or 20 Til = 8.06 Bargo Gaz (Square Yard)</li>
        <li>1 Til = 0.40 Bargo Gaz (Square Yard)</li>
        <li>1 Kani or 20 Gonda = 1605 Square Meter</li>
        <li>1 Gonda or 4 Kora = 80.25 Square Meter</li>
        <li>1 Kora or 3 Kranti = 20.06 Square Meter</li>
        <li>1 Kranti or 20 Til = 6.68 Square Meter</li>
        <li>1 Til = 0.334 Square Meter</li>
        <li>1 Chain = 66 Feet = 44 Hat = 22 Gaz/Yard = 20.12 Meter = 792 Inch = 100 Link</li>
        <li>1 Acre = 10 Square Chain = 100 Shotok = 43560 Sq Ft = 19360 Square Hat = 4840 Borgo Gaz (Square Yard) = 4047 Square Meter = 100,000 Square Link</li>
        <li>1 Acre = 3 Bigha 8 Chotak = 60.5 Kattah = 2 Kani 10 Gonda (According to 40 Shotok Kani)</li>
        <li>1 Bigha = 80 Hat = 20 Kattah = 33 Shotok = 33000 Square Link = 6400 Square Hat = 1600 Borgo Gaz (Square Yard) = 14400 Sq Ft = 1338 Square Meter = 16 Gonda 2 Kora 2 Kranti</li>
        <li>4 Kak = 1 Kora, 4 Kora = 1 Gonda, 16 Chotak = 1 Kattah, 20 Kattah = 1 Bigha, 20 Gonda = 1 Chotak, 6 Bigha = 1 Gonda</li>
        <li>1 Bigha = 20 Kattah = 80 Hat</li>
        <li>1 Kattah = 16 Chotak = 4 Hat</li>
        <li>1 Chotak = 20 Gonda = 0.25 Hat</li>
        <li>1 Gonda = 4 Kora = 0.0125 Hat</li>
        <li>1 Kora = 4 Kak = 0.0031 Hat</li>
        <li>1 Kak = 0.0007 Hat</li>
        <li>1 Bigha = 33 Shotok, 1 Kattah = 1.65 Shotangsho (approx), 1 Kattah = 165 Ojutangsho (approx)</li>
        <li>1 Hector = 10,000 Square Meter = 11,960 Square Gaz = 2.47 Acre = 100 Ayer</li>
        <li>1 Ayer = 28.9 Bigha (Approx)</li>
        <li>147.105 Shotok = 1 Hector or 100 Ayer</li>
        <li>4789.528 Bargohat/Square Hat = 1 Hector</li>
        <li>107639 Sq Ft = 1 Hector or 100 Ayer</li>
        <li>11959.882 Gaz/Yard = 1 Hector or 100 Ayer</li>
        <li>7.47494 Bigha = 1 Hector or 100 Ayer</li>
      </ul>
    </div>

    <div id="visitorCount" aria-live="polite"></div>
  </div>

  <footer>
    &copy; 2025 Riad | বাংলাদেশ জমির একক রূপান্তর
  </footer>

<script>
  // Base square feet for units (mostly approx)
  const units = {
    paki: 47520,              // 1 Paki = 1 Bigha = 33 Decimal => 33 * 1440 sqft = 47520 sqft approx
    bigha: 47520,
    decimal: 1440,            // 1 Decimal = 435.6 sqft * 3.3 approx (33 Shotok) (validated below)
    shotangsho: 435.6,        // 1 Shotangsho (Shotok)
    kattah: 720 * 1.65,       // 1 Kattah = 1.65 Shotangsho = 720 * 1.65 = 1188 sqft approx
    ojutangsho: 435.6 / 100,  // 1 Ojutangsho = Shotangsho/100 = 4.356 sqft approx
    katha: 720,               // 1 Katha = 720 sqft approx
    kani: 17280,              // 1 Kani = 17280 sqft
    gonda: 864,               // 1 Gonda = 864 sqft
    kora: 216,                // 1 Kora = 216 sqft
    kranti: 72,               // 1 Kranti = 72 sqft
    til: 3.6,                 // 1 Til = 3.6 sqft
    acre: 43560,              // 1 Acre = 43560 sqft
    chain: 4356,              // 1 Chain = 66ft * 66ft = 4356 sqft
    square_meter: 10.7639,    // 1 sqm = 10.7639 sqft
    square_link: 0.4356,      // 1 Square Link = 0.4356 sqft
    bargo_hat: 5.04,          // 1 Bargo Hat approx
    shotok: 435.6,            // alias for shotangsho
    bargogaz: 0.836127,       // approx Sq Yard in sqft: 1 Sq Yard = 9 Sq Ft, 1 Bargogaz = 0.836127 sqft (approx by ratios)
    bargohat: 0.075,          // approx sqft for Bargohat (rough)
    bargo_link: 0.013,        // approx sqft for Bargo link
  };

  const unitNames = {
    paki: "Paki (পাকি)",
    bigha: "Bigha (বিঘা)",
    decimal: "Decimal (ডেসিমেল)",
    shotangsho: "Shotangsho (শতাংশ)",
    kattah: "Kattah (কাঠা/কটত)",
    ojutangsho: "Ojutangsho (ওজুতাংশ)",
    katha: "Katha (কাঠা)",
    kani: "Kani (কানি)",
    gonda: "Gonda (গণ্ডা)",
    kora: "Kora (কোরা)",
    kranti: "Kranti (ক্রান্তি)",
    til: "Til (তিল)",
    acre: "Acre (একর)",
    chain: "Chain (চেইন)",
    square_meter: "Square Meter (বর্গ মিটার)",
    square_link: "Square Link (বর্গ লিঙ্ক)",
    bargo_hat: "Bargo Hat (বার্গো হাত)",
    shotok: "Shotok (শতক)",
    bargogaz: "Bargo Gaz (বার্গো গজ)",
    bargohat: "Bargo Hat (বার্গো হাত)",
    bargo_link: "Bargo Link (বার্গো লিঙ্ক)",
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

    updateVisitorCount();
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
      ${value} <strong>${unitNames[fromUnit]}</strong> = <strong>${convertedValue.toFixed(4)}</strong> <strong>${unitNames[toUnit]}</strong><br/>
      (${value} ${unitNames[fromUnit]} = ${convertedValue.toFixed(4)} ${unitNames[toUnit]})
    `;
  }

  // Visitor counter with localStorage
  function updateVisitorCount() {
    const countDiv = document.getElementById("visitorCount");
    let count = localStorage.getItem("landUnitConverterVisits");
    count = count ? parseInt(count) : 0;
    count++;
    localStorage.setItem("landUnitConverterVisits", count);
    countDiv.textContent = `You are visitor number: ${count} (আপনি পরিদর্শক নম্বর: ${count})`;
  }
</script>

</body>
</html>
