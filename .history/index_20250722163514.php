<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bangladesh Land Unit Converter (বাংলাদেশ জমির একক রূপান্তর)</title>
    <meta name="description"
        content="Convert all Bangladesh land units like Paki, Bigha, Decimal, Shotangsho, Katha, Kani, Gonda, Acre and more with this converter. বাংলায় ও ইংরেজিতে।" />
    <meta name="keywords"
        content="Bangladesh land unit converter, Paki, Bigha, Decimal, Katha, Kani, Gonda, Acre, Shotangsho, জমির একক রূপান্তর" />
    <meta name="author" content="Riad" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" />
    <style>
        body {
            background: #f9f9f9;
            padding: 1rem;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .container {
            max-width: 720px;
            margin: auto;
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 0 12px rgba(0, 0, 0, 0.1);
        }

        h1 {
            margin-bottom: 1.5rem;
            font-weight: 700;
        }

        label {
            font-weight: 600;
        }

        #result {
            margin-top: 1.5rem;
            font-size: 1.25rem;
            font-weight: 700;
        }

        #visitorCount {
            margin-top: 1rem;
            font-size: 0.9rem;
            color: #555;
            text-align: center;
        }

        footer {
            margin-top: 3rem;
            font-size: 0.85rem;
            color: #666;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container" role="main">
        <h1>Bangladesh Land Unit Converter<br /><small>(বাংলাদেশ জমির একক রূপান্তর)</small></h1>

        <label for="inputValue">Enter Value (পরিমাণ দিন):</label>
        <input type="number" id="inputValue" class="form-control mb-3" placeholder="Enter numeric value (সংখ্যা লিখুন)"
            min="0" step="any" />

        <label for="fromUnit">From Unit (থেকে):</label>
        <select id="fromUnit" class="form-select mb-3" aria-label="Select from unit"></select>

        <label for="toUnit">To Unit (এ):</label>
        <select id="toUnit" class="form-select mb-3" aria-label="Select to unit"></select>

        <button class="btn btn-primary w-100" onclick="convert()">Convert (রূপান্তর করুন)</button>

        <div id="result" class="mt-4 text-center" aria-live="polite"></div>

        <div id="visitorCount" aria-live="polite"></div>
    </div>

    <footer>
        &copy; 2025 Riad | বাংলাদেশ জমির একক রূপান্তর
    </footer>

    <script>
        // Land units base in square feet (sqft)
        // Based on your formulas and approximate conversions.
        const units = {
            paki: 47520,
            bigha: 47520,
            decimal: 1440,
            shotangsho: 435.6,
            kattah: 2376,  // fixed to reflect 20 Katha = 1 Bigha
            ojutangsho: 4.356,
            kani: 17280,
            gonda: 864,
            kora: 216,
            kranti: 72,
            til: 3.6,
            acre: 43560,
            chain: 4356,
            square_meter: 10.7639,
            square_link: 0.4356,
            bargo_hat: 5.04,
            shotok: 435.6,
        };


        // Unit names in Bangla & English
        const unitNames = {
            paki: "Paki (পাকি)",
            bigha: "Bigha (বিঘা)",
            decimal: "Decimal (ডেসিমেল)",
            shotangsho: "Shotangsho (শতাংশ)",
            kattah: "Katha (কাঠা)",
            ojutangsho: "Ojutangsho (ওজুতাংশ)",
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
            shotok: "Shotok (শতক)",  // alternate name
        };

        // Populate select dropdowns on page load
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
            // Default selections
            fromSelect.value = "bigha";
            toSelect.value = "kattah";

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

            // Convert input to sqft (base unit)
            const valueInSqFt = value * units[fromUnit];
            // Convert sqft to target unit
            const convertedValue = valueInSqFt / units[toUnit];

            resultDiv.innerHTML = `
      ${value} <strong>${unitNames[fromUnit]}</strong> = <strong>${convertedValue.toFixed(4)}</strong> <strong>${unitNames[toUnit]}</strong><br/>
      (${value} ${unitNames[fromUnit]} = ${convertedValue.toFixed(4)} ${unitNames[toUnit]})
    `;
        }

        // Simple visitor counter using localStorage (for demo only)
        function updateVisitorCount() {
            const countKey = "landUnitConverterVisitorCount";
            let count = localStorage.getItem(countKey);
            if (!count) count = 0;
            count = parseInt(count) + 1;
            localStorage.setItem(countKey, count);
            document.getElementById("visitorCount").textContent =
                `Visitor Count: ${count} (দর্শক সংখ্যা)`;
        }
    </script>
</body>

</html>