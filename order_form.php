<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(to right, #000000, #000000, #4d4c4c, #33ff00);
        }

        .containerOfOrder h3 {
            font-family: mv boli;
            font-size: 30px;
            color: #33ff00;
            margin: -20px 0px 20px 100px;
        }

        .HorizontalOfOrder {
            width: 80%;
            border: 0;
            border-bottom: 1px solid #fff;
            margin: -10px 0px 40px 50px;
        }

        input[type=text],
        select,
        textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=number] {
            height: 35px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        input[type=submit] {
            background-color: chartreuse;
            color: #000000;
            font-weight: bold;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #000000;
            color: white;
        }

        .containerOfOrder {
            width: 500px;
            height: auto;
            margin: 20px 30% 20px 30%;
            border-radius: 10px;
            background-color: #333;
            padding: 20px;
        }

        .containerOfOrder .OrderTitle {
            color: #fff;
            font-size: 16px;
            font-family: cursive;
        }

        .containerOfOrder .quantity {
            margin-left: 50px;
        }

        .containerOfOrder .sizes {
            margin-left: 50px;
        }

        @media (max-width:800px) {
            .containerOfOrder {
                width: 400px;
                height: auto;

            }

            .containerOfOrder h3 {
                font-size: 30px;
                color: #33ff00;
                margin: -20px 0px 20px 40px;
            }

            .HorizontalOfOrder {
                width: 80%;
                border: 0;
                border-bottom: 1px solid #fff;
                margin: -15px 0px 40px 30px;
            }

            .containerOfOrder .quantity {
                margin-left: 30px;

            }

            .containerOfOrder .sizes {
                margin-left: 30px;
            }
        }

        @media (max-width:630px) {
            .containerOfOrder {
                width: 400px;
                height: auto;
                margin: 20px 40% 20px 20%;

            }

            .containerOfOrder h3 {
                font-size: 30px;
                color: #33ff00;
                margin: -20px 0px 20px 40px;
            }

            .HorizontalOfOrder {
                width: 80%;
                border: 0;
                border-bottom: 1px solid #fff;
                margin: -15px 0px 40px 30px;
            }

            .containerOfOrder .quantity {
                margin-left: 30px;

            }

            .containerOfOrder .sizes {
                margin-left: 30px;
            }
        }

        @media (max-width:500px) {
            .containerOfOrder {
                width: 400px;
                height: auto;
                margin: 20px 45% 20px 5%;
            }
        }

        @media (max-width:390px) {
            .containerOfOrder {
                width: 350px;
                height: auto;
                margin: 20px 50% 20px 0%;
            }
        }
    </style>
</head>

<body>



    <div class="containerOfOrder">
        <h3>Online Order Form</h3>
        <div class="HorizontalOfOrder"></div>
        <form action="https://formsubmit.co/yasithwijesuriyauniversity2002@gmail.com" method="POST" target="_blank">
            <label for="customerName" class="OrderTitle">Name</label>
            <input type="text" id="customerName" name="customerName" placeholder="Your Name" required>

            <label for="PhoneNumber" class="OrderTitle">Phone Number</label>
            <input type="text" id="Phone Number" name="PhoneNumber" placeholder="Enter Your Phone Number" required>

            <label for="Size-asthma" class="OrderTitle sizes">Size</label>
            <select id="Size-asthma" name="Size-asthma" style="width:80px;" required>
                <option value="xs">Xs</option>
                <option value="s">S</option>
                <option value="m">M</option>
                <option value="L">L</option>
                <option value="xl">Xl</option>
                <option value="2xl">2Xl</option>
            </select>

            <label for="quantity" class="OrderTitle quantity">Quantity </label>
            <input type="number" id="quantity" name="quantity" min="1" max="200" required>
            <br><br>
            <label for="quantity" class="OrderTitle">Enter the selected product as a screenshot</label>
            <input type="file" accept=".jpg,.png,.jpeg,.pdf" name="design" required>
            <br><br>
            <label for="subject" class="OrderTitle">Products Details</label>
            <textarea id="subject" name="subject" placeholder="Add your special notes" style="height:100px;"></textarea>

            <input type="submit" value="Submit">
        </form>
    </div>

</body>

</html>