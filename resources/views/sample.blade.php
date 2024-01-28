<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Bootstrap Window</title>
  <style>
    /* Set the height of the container for demonstration purposes */
    body, html {
      height: 100%;
    }

    .custom-container {
      height: 100%;
    }

    .clickable-word {
      cursor: pointer;
      text-decoration: underline;
    }

    .center-title {
      text-align: center;
    }

    #stock-table {
      width: 100%;
      margin-top: 20px;
    }

    #stock-table th, #stock-table td {
      text-align: center;
      padding: 8px;
    }

    #stock-table th {
      background-color: #007bff;
      color: white;
    }

    #stock-table tbody tr:nth-child(even) {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>

<!-- Title at the top center -->
<div class="container-fluid custom-container">
  <h1 class="center-title">Online Web System Testing</h1>
  <div class="row">
    <!-- Left side with 20% width -->
    <div class="col-md-2 bg-light">
      <!-- Content for the left side goes here -->
      <h2>Sub Branch</h2>
      <p><a href="/one"></a></p>
      <p class="clickable-word">Two</p>
      <p class="clickable-word">Three</p>
      <p class="clickable-word">Four</p>
      <p class="clickable-word">Five</p>
      <p class="clickable-word">Six</p>
      <p class="clickable-word">Seven</p>
      <p class="clickable-word">Eight</p>
      <p class="clickable-word">Nine</p>
      <p class="clickable-word">Ten</p>
      <p class="clickable-word">Eleven</p>
      <p class="clickable-word">Twelve</p>
    </div>
    
    <!-- Right side with 80% width -->
    <div id="right-side" class="col-md-10 bg-info">
      <!-- Content for the right side goes here -->
      <h2>Stock Information</h2>
      <p>Click on a word to view random stock information.</p>
      <table id="stock-table">
        <thead>
          <tr>
            <th>Symbol</th>
            <th>Open Price</th>
            <th>High Price</th>
            <th>Low Price</th>
            <th>Current Price</th>
            <th>Change</th>
            <th>Change Percent</th>
          </tr>
        </thead>
        <tbody>
          <!-- Stock data will be dynamically added here -->
        </tbody>
      </table>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    var clickableWords = document.querySelectorAll('.clickable-word');
    var rightSideContent = document.getElementById('right-side');
    var stockTableBody = document.querySelector('#stock-table tbody');

    clickableWords.forEach(function (word) {
      word.addEventListener('click', function () {
        // Fetch random stock data from Alpha Vantage API
        fetchRandomStockData()
          .then(function (stockData) {
            // Update the right side content with stock information
            rightSideContent.innerHTML = '<h2>Stock Information</h2>' +
              '<p>Word Clicked: ' + word.textContent + '</p>';
            
            // Clear existing table rows
            stockTableBody.innerHTML = '';

            // Populate the table with stock data
            var newRow = stockTableBody.insertRow();
            Object.values(stockData).forEach(function (value) {
              var cell = newRow.insertCell();
              cell.textContent = value;
            });
          })
          .catch(function (error) {
            console.error('Error fetching stock data:', error);
          });
      });
    });
  });

  // Function to fetch random stock data from Alpha Vantage API
  function fetchRandomStockData() {
    // Replace 'YOUR_API_KEY' with your actual Alpha Vantage API key
    var apiKey = 'YOUR_API_KEY';
    var symbols = ['AAPL', 'GOOGL', 'MSFT', 'AMZN', 'FB', 'TSLA', 'NFLX', 'SPY', 'V', 'NVDA'];
    var randomSymbol = symbols[Math.floor(Math.random() * symbols.length)];

    var apiUrl = 'https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=' + randomSymbol + '&apikey=' + apiKey;

    return fetch(apiUrl)
      .then(function (response) {
        return response.json();
      })
      .then(function (data) {
        return data['Global Quote'];
      });
  }
</script>

</body>
</html>
