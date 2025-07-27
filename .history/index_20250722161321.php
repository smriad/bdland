<!DOCTYPE html>
<html lang="bn">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>জমির পরিমাপ রূপান্তরক | Bangladesh Land Unit Converter</title>
  <meta name="description" content="বাংলাদেশের জমির একক রূপান্তরক - কাঠা, বিঘা, শতক, একর, স্কয়ার ফুট, স্কয়ার মিটার, কানি, গন্ডা সহ সকল ভূমি পরিমাপ এককের কনভার্টার।">
  <meta name="keywords" content="Land Unit Converter, জমির একক রূপান্তর, Bangladesh land unit conversion, কাঠা, বিঘা, একর, শতক, কানি, গন্ডা, square feet to bigha, bigha to katha, shotok to acre">
  <meta name="author" content="OpenAI | Riad">
  <meta name="robots" content="index, follow">
  <meta property="og:title" content="Bangladesh Land Unit Converter | জমির পরিমাপ রূপান্তরক">
  <meta property="og:description" content="বাংলাদেশের জনপ্রিয় ভূমি এককসমূহের সহজ রূপান্তরক টুল।">
  <meta property="og:type" content="website">
  <meta property="og:image" content="https://example.com/land-converter-thumbnail.jpg">
  <meta property="og:url" content="https://example.com/land-unit-converter">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Bangladesh Land Unit Converter">
  <meta name="twitter:description" content="Convert land area units like কাঠা, বিঘা, শতক, একর with ease.">
  <meta name="twitter:image" content="https://example.com/land-converter-thumbnail.jpg">
  <link rel="canonical" href="https://example.com/land-unit-converter" />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Bengali&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Noto Sans Bengali', sans-serif;
      padding: 2rem;
      background-color: #e6f2ff;
    }
    .container {
      background: #ffffff;
      border-radius: 12px;
      padding: 2rem;
      box-shadow: 0 4px 16px rgba(0,0,0,0.1);
      max-width: 600px;
      margin: auto;
    }
    h2 {
      text-align: center;
      margin-bottom: 1.5rem;
      color: #0077cc;
    }
    label, select, input, button {
      display: block;
      width: 100%;
      margin-bottom: 1rem;
      font-size: 1.1rem;
    }
    select, input {
      padding: 0.5rem;
      border: 1px solid #ccc;
      border-radius: 6px;
    }
    button {
      background-color: #007BFF;
      color: white;
      border: none;
      padding: 0.75rem;
      border-radius: 6px;
      cursor: pointer;
      font-size: 1.1rem;
    }
    button:hover {
      background-color: #0056b3;
    }
    .result {
      font-size: 1.3rem;
      margin-top: 1.5rem;
      font-weight: bold;
      color: #333;
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>জমির পরিমাপ রূপান্তরক</h2>
    <label for="from">যে একক থেকে রূপান্তর করবেন:</label>
    <select id="from"></select>

    <label for="to">যে এককে রূপান্তর হবে:</label>
    <select id="to"></select>

    <label for="value">পরিমাণ লিখুন:</label>
    <input type="number" id="value" placeholder="উদাহরণ: ৫" />

    <button onclick="convert()">রূপান্তর করুন</button>

    <div class="result" id="result"></div>
  </div>

  <script>
    const units = {
      "বর্গফুট": 1,
      "শতাংশ (শতক)": 435.6,
      "ডেসিমেল": 435.6,
      "কাঠা": 720,
      "বিঘা": 14400,
      "একর": 43560,
      "কানি": 17280,
      "গন্ডা": 864,
      "কোরা": 216,
      "কান্তি": 72,
      "তিল": 3.6,
      "ছটাক": 45,
      "বর্গমিটার": 10.7639,
      "বর্গগজ": 9,
      "বর্গহাত": 2.25,
      "বর্গলিংক": 0.4356
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
        document.getElementById("result").innerText = "অনুগ্রহ করে সঠিক পরিমাণ এবং একক নির্বাচন করুন।";
        return;
      }

      const result = (value * units[from]) / units[to];
      document.getElementById("result").innerText = `${value} ${from} = ${result.toFixed(4)} ${to}`;
    }
  </script>
</body>
</html>
