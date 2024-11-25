<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Popup Example</title>
    <style>
        /* Style for the popup background overlay */
        .popup-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: none; /* Hidden by default */
            justify-content: center;
            align-items: center;
        }

        /* Style for the popup box */
        .popup-box {
            background-color: #fff;
            padding: 20px;
            width: 300px;
            text-align: center;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        /* Close button styling */
        .close-btn {
            margin-top: 10px;
            padding: 8px 16px;
            background-color: #3498db;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }
    </style>
</head>
<body>

<!-- Button to open the popup -->
<button onclick="openPopup()">Open Popup</button>

<!-- Popup overlay and content -->
<div class="popup-overlay" id="popup">
    <div class="popup-box">
        <h2>Popup Message</h2>
        <p>This is a simple popup message.</p>
        <button class="close-btn" onclick="closePopup()">Close</button>
    </div>
</div>

<script>
    // Function to open the popup
    function openPopup() {
        document.getElementById('popup').style.display = 'flex';
    }

    // Function to close the popup
    function closePopup() {
        document.getElementById('popup').style.display = 'none';
    }
</script>

</body>
</html>
