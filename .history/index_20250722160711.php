<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Land Unit Converter</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 2rem;
      background-color: #f5f5f5;
    }
    .container {
      background: #fff;
      border-radius: 8px;
      padding: 2rem;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      max-width: 500px;
      margin: auto;
    }
    label, select, input, button {
      display: block;
      width: 100%;
      margin-bottom: 1rem;
      font-size: 1rem;
    }
    button {
      background-color: #007BFF;
      color: white;
      border: none;
      padding: 0.75rem;
      border-radius: 5px;
      cursor: pointer;
    }
    button:hover {
      background-color: #0056b3;
    }
    .result {
      font-size: 1.2rem;
      margin-top: 1rem;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Land Unit Converter</h2>
    <label for="from">From Unit:</label>
    <select id="from"></select>

    <label for="to">To Unit:</label>
    <select id="to"></select>

    <label for="value">Value:</label>
    <input type="number" id="value" placeholder="Enter value" />

    <button onclick="convert()">Convert</button>

    <div class="result" id="result"></div>
  </div>

  <script>
    const units = {
      "Square Feet": 1,
      "Shotangsho": 435.6,
      "Decimal": 435.6,
      "Kattah": 720,
      "Bigha": 14400,
      "Acre": 43560,
      "Kani": 17280,
      "Gonda": 864,
      "Kora": 216,
      "Kranti": 72,
      "Til": 3.6,
      "Chotak": 45,
      "Square Meter": 10.7639,
      "Square Yard": 9,
      "Square Hat": 2.25,
      "Square Link": 0.4356
    };

    const fromSelect = document.getElementById("from");
    const toSelect = document.getElementById("to");

    for (let unit in units) {
      let option1 = document.createElement("option");
      let option2 = document.createElement("option");
      option1.text = option2.text = unit;
      option1.value = option2.value = unit;
      fromSelect.add(option1);
      toSelect.add(option2);
    }

    function convert() {
      const from = document.getElementById("from").value;
      const to = document.getElementById("to").value;
      const value = parseFloat(document.getElementById("value").value);

      if (!value || !units[from] || !units[to]) {
        document.getElementById("result").innerText = "Please enter valid inputs.";
        return;
      }

      const result = (value * units[from]) / units[to];
      document.getElementById("result").innerText = `${value} ${from} = ${result.toFixed(4)} ${to}`;
    }
  </script>
</body>
</html>