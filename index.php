<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Boxes with Copy Buttons</title>
    <style>
        /* style.css */

        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        .container {
            max-width: 600px;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .input-boxes {
            margin-bottom: 20px;
        }

        .input-box {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            padding: 5px;
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            border-radius: 10px;
            width: 90%;
        }

        .input-box input {
            width: 80%;
            height: 25px;
            font-size: 16px;
            border: none;
            border-radius: 10px 0 0 10px;
        }

        .copy-button {
            width: 30%;
            height: 100%;
            font-size: 16px;
            padding: 5px;
            border: none;
            border-radius: 10px 0 0 10px;
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
            margin-right: 5px;
        }

        .copy-button:hover {
            background-color: #3e8e41;
        }

        .delete-button {
            width: 20px;
            height: 20px;
            font-size: 18px;
            padding: 0;
            border: none;
            border-radius: 50%;
            background-color: #e74c3c;
            color: #fff;
            cursor: pointer;
            margin-left: auto;
        }

        .delete-button:hover {
            background-color: #c0392b;
        }

        .delete-button::before {
            content: "\2715";
            font-size: 18px;
            line-height: 20px;
            text-align: center;
        }

        .add-button {
            width: 100%;
            height: 40px;
            font-size: 18px;
            padding: 10px;
            border: none;
            border-radius: 10px;
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
        }

        .add-button:hover {
            background-color: #3e8e41;
        }
    </style>
</head>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Boxes with Copy Buttons</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2>Input Boxes with Copy Buttons</h2>
        <div class="input-boxes">
            <!-- input boxes will be generated here -->
        </div>
        <button class="add-button">Add new input box</button>
    </div>
</body>

</html>


<script>
    // script.js

    // Create a container to hold the input boxes
    const container = document.querySelector('.input-boxes');

    // Function to create a new input box with a copy button
    function createInputBox() {
        const inputBox = document.createElement('div');
        inputBox.classList.add('input-box');

        const copyButton = document.createElement('button');
        copyButton.classList.add('copy-button');
        copyButton.textContent = 'Copy';

        const input = document.createElement('input');
        input.type = 'text';

        const deleteButton = document.createElement('button');
        deleteButton.classList.add('delete-button');

        inputBox.appendChild(copyButton);
        inputBox.appendChild(input);
        inputBox.appendChild(deleteButton);

        container.appendChild(inputBox);

        copyButton.addEventListener('click', () => {
            navigator.clipboard.writeText(input.value);
        });

        deleteButton.addEventListener('click', () => {
            inputBox.remove();
        });
    }

    // Create a button to add new input boxes
    const addButton = document.querySelector('.add-button');
    addButton.addEventListener('click', createInputBox);
</script>