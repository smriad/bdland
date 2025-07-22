<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>বাংলাদেশ ভূমি পরিমাপ কনভার্টার (Bangladesh Land Unit Converter)</title>
    <meta name="description" content="বাংলাদেশের ভূমি পরিমাপ একক কনভার্ট করুন কাঠা, বিঘা, শতক, গণ্ডা, বর্গফুট (sq ft) এবং আরও অনেক কিছুর মধ্যে। Convert Katha, Bigha, Decimal, Gonda, Square Feet and more.">
    <meta name="keywords" content="ভূমি পরিমাপ, জমি কনভার্টার, বাংলাদেশ, কাঠা, বিঘা, শতক, গন্ডা, Bangladesh land unit converter, katha, bigha, decimal, gonda, square feet, acre">
    <meta name="robots" content="index, follow">

    <!-- Open Graph -->
    <meta property="og:title" content="বাংলাদেশ ভূমি পরিমাপ কনভার্টার (Bangladesh Land Unit Converter)">
    <meta property="og:description" content="বাংলাদেশের ভূমি পরিমাপ একক কনভার্ট করুন কাঠা, বিঘা, শতক, গণ্ডা, বর্গফুট (sq ft) এবং আরও অনেক কিছুর মধ্যে।">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://example.com">
    <meta property="og:image" content="https://example.com/land-converter-thumbnail.png">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="বাংলাদেশ ভূমি পরিমাপ কনভার্টার (Bangladesh Land Unit Converter)">
    <meta name="twitter:description" content="বাংলাদেশের জমি একক সহজে রূপান্তর করুন। Convert Katha, Bigha, Decimal, Square Feet easily.">

    <style>
        body {
            font-family: 'Noto Sans Bengali', sans-serif;
            background: #f0f8ff;
            color: #222;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }
        h1 {
            color: #007BFF;
        }
        select, input {
            padding: 10px;
            margin: 10px;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 8px;
        }
        .result {
            margin-top: 20px;
            font-size: 1.2rem;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>

<body>
    <h1>ভূমি একক কনভার্টার (Land Unit Converter)</h1>
    <input type="number" id="inputValue" placeholder="পরিমাণ লিখুন (Enter value)">
    <br>
    <select id="fromUnit">
        <option value="sqft">বর্গফুট (Square Feet)</option>
        <option value="katha">কাঠা (Katha)</option>
        <option value="bigha">বিঘা (Bigha)</option>
        <option value="decimal">শতক (Decimal)</option>
        <option value="gonda">গণ্ডা (Gonda)</option>
        <option value="acre">একর (Acre)</option>
    </select>
    <span>থেকে (to)</span>
    <select id="toUnit">
        <option value="sqft">বর্গফুট (Square Feet)</option>
        <option value="katha">কাঠা (Katha)</option>
        <option value="bigha">বিঘা (Bigha)</option>
        <option value="decimal">শতক (Decimal)</option>
        <option value="gonda">গণ্ডা (Gonda)</option>
        <option value="acre">একর (Acre)</option>
    </select>
    <br>
    <button onclick="convert()">রূপান্তর করুন (Convert)</button>
    <div class="result" id="result"></div>

    <script>
        const conversionRates = {
            sqft: 1,
            katha: 720,
            bigha: 14400,
            decimal: 435.6,
            gonda: 108,
            acre: 43560
        };

        function convert() {
            const input = parseFloat(document.getElementById("inputValue").value);
            const from = document.getElementById("fromUnit").value;
            const to = document.getElementById("toUnit").value;

            if (isNaN(input)) {
                document.getElementById("result").innerText = "দয়া করে একটি সঠিক সংখ্যা লিখুন (Please enter a valid number).";
                return;
            }

            const sqftValue = input * conversionRates[from];
            const converted = sqftValue / conversionRates[to];

            document.getElementById("result").innerText = `${input} ${document.querySelector(`#fromUnit option[value='${from}']`).textContent} = ${converted.toFixed(4)} ${document.querySelector(`#toUnit option[value='${to}']`).textContent}`;
        }
    </script>
</body>

</html>
