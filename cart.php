<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C A R T </title>
    <!-- css link -->
    <link rel="stylesheet" href="style.css">
    <!-- google font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <!-- cdnjs link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- box-icon link -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        body {
            font-family: 'poppins', sans-serif;
            margin: 0;
        }

        .container {
            width: 900px;
            max-width: 90vw;
            margin: auto;
            text-align: center;
            padding-top: 10px;
            transition: transform .5s;
        }

        a {
            text-decoration: none;
            font-size: 30px;
            color: black;

        }

        .icon-cart a {
            margin-left: 1250px;

        }

        header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px 0;
        }

        header .icon-cart {
            position: relative;
            padding-top: 40px;
        }

        header .icon-cart p {
            display: inline;
            width: 20px;
            height: 20px;
            background-color: red;
            padding: 2px 2px 2px 5px;
            justify-content: center;
            align-items: center;
            color: #fff;
            border-radius: 50%;
            position: absolute;
        }

        .cartTab {
            width: 400px;
            background-color: #3d3d3d;
            color: #fff;
            align-items: center;
            position: fixed;
            inset: 0 -400px 0 auto;
            /*=>  inset:top right bottom left    =>  top:0;   right:0;  bottom:0;  left:0; */
            margin-top: -20px;
            display: grid;
            grid-template-rows: 20px repeat(10px) 60px;
            transition: .5s;

        }

        /* .cartTab .cartShow{
            text-align:justify;
            justify-content: end;
           
        
        
            line-height: 10px;
        } */
        body.showCart .cartTab {
            inset: 0 0 0 auto;
        }

        body.showCart .container {
            transform: translateX(-250px);
        }

        .cartTab h1 {

            margin: 0;
            font-weight: 300;
            padding-top: 20px;
            margin-left: 60px;
            color: #fff;

        }

        .cartTab .footerBtn {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            height: 60px;
            margin-bottom: -10px;
        }

        .cartTab .footerBtn button {
            background-color: black;
            color: white;
            font-family: Poppings;
            font-weight: 500;
            border: none;
            cursor: pointer;

        }

        .cartTab .footerBtn a {
            background-color: black;
            color: white;
            font-family: Poppings;
            font-weight: 500;
            text-align: center;
            border: none;
            cursor: pointer;
        }

        .cartTab .footerBtn .close {
            background-color: chartreuse;
            color: black;
        }

        .cartTab .ListCart .item {
            display: grid;
            grid-template-columns: 70px 150px 100px 1fr;
            gap: 1px;
            text-align: center;
            align-items: center;
        }

        .cartTab .ListCart .item img {
            margin-top: 20px;
            width: 100%;
            height: auto;
        }

        .ListCart .quantity span {
            display: inline-block;
            width: 20px;
            height: 20px;
            background-color: #fff;
            color: #000000;
            font-size: 16px;
            font-weight: bold;
            border-radius: 50%;
            cursor: pointer;
        }

        .ListCart .quantity span:nth-child(2) {
            background-color: transparent;
            color: #fff;
        }

        .ListCart .item:nth-child(even) {
            background-color: #eee1;
        }

        .ListCart {
            overflow: auto;
        }

        .ListCart::-webkit-scrollbar {
            width: 0;
        }

        #prodetails .add-cart-btn1,
        .add-cart-btn2,
        .add-cart-btn3,
        .add-cart-btn4,
        .add-cart-btn5,
        .add-cart-btn6,
        .add-cart-btn7,
        .add-cart-btn8,
        .add-cart-btn9,
        .add-cart-btn10,
        .add-cart-btn11,
        .add-cart-btn12 {
            background: #000000;
            padding: 8px 15px;
            color: antiquewhite;
            font-weight: 900;
            text-transform: uppercase;
            border-radius: 7px;
            margin-bottom: 15px;
            transition: none;

        }

        #prodetails .add-cart-btn1:hover,
        .add-cart-btn2:hover,
        .add-cart-btn3:hover,
        .add-cart-btn4:hover,
        .add-cart-btn5:hover,
        .add-cart-btn6:hover,
        .add-cart-btn7:hover,
        .add-cart-btn8:hover,
        .add-cart-btn9:hover,
        .add-cart-btn10:hover,
        .add-cart-btn11:hover,
        .add-cart-btn12:hover {
            background: rgb(255, 253, 253);
            color: rgb(0, 0, 0);
        }
    </style>
</head>

<body class="">

    <div class="container_cart">
        <header>
            <div class="icon-cart">
                <a href="#" class="cart-icon"><i class="fa-solid fa-cart-shopping"></i>
                    <p if="cart-count">0</p>
                </a>
            </div>
        </header>

        <div class="ListProduct">
            <div class="item">


                <section id="prodetails" class="section-separate1">
                    <a name="newArrivals1"></a>
                    <div class="single-pro-image">
                        <img src="images/offer5.png" width="100%" id="MainImg" alt="">
                        <div class="small-img-group">
                            <div class="small-img-col">
                                <img src="images/offer5.png" width="100%" class="small-img" alt="">
                            </div>
                            <div class="small-img-col">
                                <img src="images/offer5_back.png" width="100%" class="small-img" alt="">
                            </div>

                        </div>
                    </div>

                    <div class="single-pro-details">
                        <h6> New Arrivals 4 - GymWear </h6>
                        <h4>Printed T-Shirts</h4>
                        <h2>LKR.2500/-</h2>
                        <select>
                            <option>Select size</option>
                            <option>XS</option>
                            <option>S</option>
                            <option>M</option>
                            <option>L</option>
                            <option>XL</option>
                            <option>XXL</option>
                        </select>
                        <input type="number" value="1">
                        <button class="add-cart-btn1" onclick="">add to cart</button>
                        <h4>Product Details</h4>
                        <span>Elevate your style game with our captivating sports-inspired graphics. Whether you're a
                            die-hard fan
                            or simply appreciate the aesthetic of athleticism, our bold and vibrant designs are sure to
                            make a
                            statement.</span>
                    </div>
                </section>

                <section id="prodetails" class="section-separate1">
                    <a name="newArrivals2"></a>
                    <div class="single-pro-image">
                        <img src="images/offer6.png" width="100%" id="MainImg1" alt="">
                        <div class="small-img-group">
                            <div class="small-img-col">
                                <img src="images/offer6.png" width="100%" class="small-img1" alt="">
                            </div>
                            <div class="small-img-col">
                                <img src="images/offer6_back.png" width="100%" class="small-img1" alt="">
                            </div>

                        </div>
                    </div>

                    <div class="single-pro-details">
                        <h6> New Arrivals 4 - Printed CropTop </h6>
                        <h4>Printed T-Shirts</h4>
                        <h2>LKR.2000/-</h2>
                        <select>
                            <option>Select size</option>
                            <option>XS</option>
                            <option>S</option>
                            <option>M</option>
                            <option>L</option>
                            <option>XL</option>
                            <option>XXL</option>
                        </select>
                        <input type="number" value="1">
                        <button class="add-cart-btn2">add to cart</button>
                        <h4>Product Details</h4>
                        <span>Our t-shirts aren't just clothing; they're wearable works of art. The high-quality
                            materials and
                            innovative printing techniques ensure that your favorite design will remain vibrant and
                            eye-catching</span>
                    </div>
                </section>

                <section id="prodetails" class="section-separate1">
                    <a name="newArrivals3"></a>
                    <div class="single-pro-image">
                        <img src="images/forIndex2.png" width="100%" id="MainImg2" alt="">
                        <div class="small-img-group">
                            <div class="small-img-col">
                                <img src="images/forIndex2.png" width="100%" class="small-img2" alt="">
                            </div>
                            <div class="small-img-col">
                                <img src="images/forIndex2_back.png" width="100%" class="small-img2" alt="">
                            </div>

                        </div>
                    </div>

                    <div class="single-pro-details">
                        <h6> New Arrivals 4 - Oversize Latest </h6>
                        <h4>Printed T-Shirts</h4>
                        <h2>LKR.2200/-</h2>
                        <select>
                            <option>Select size</option>
                            <option>XS</option>
                            <option>S</option>
                            <option>M</option>
                            <option>L</option>
                            <option>XL</option>
                            <option>XXL</option>
                        </select>
                        <input type="number" value="1">
                        <button class="add-cart-btn3">add to cart</button>
                        <h4>Product Details</h4>
                        <span>Our high-quality cotton t-shirts offer a perfect blend of comfort and style. With a
                            regular fit and
                            short sleeves, they're ideal for everyday wear.</span>
                    </div>
                </section>

                <section id="prodetails" class="section-separate1">
                    <a name="newArrivals4"></a>
                    <div class="single-pro-image">
                        <img src="images/forIndex3_back.png" width="100%" id="MainImg3" alt="">
                        <div class="small-img-group">
                            <div class="small-img-col">
                                <img src="images/forIndex3_back.png" width="100%" class="small-img3" alt="">
                            </div>
                            <div class="small-img-col">
                                <img src="images/forIndex3.png" width="100%" class="small-img3" alt="">
                            </div>

                        </div>
                    </div>

                    <div class="single-pro-details">
                        <h6> New Arrivals 4 - GymWear </h6>
                        <h4>Printed Shorts</h4>
                        <h2>LKR.2300/-</h2>
                        <select>
                            <option>Select size</option>
                            <option>XS</option>
                            <option>S</option>
                            <option>M</option>
                            <option>L</option>
                            <option>XL</option>
                            <option>XXL</option>
                        </select>
                        <input type="number" value="1">
                        <button class="add-cart-btn4">add to cart</button>
                        <h4>Product Details</h4>
                        <span>So, whether you're cheering from the sidelines, hitting the gym, or simply going about
                            your day, our
                            sports-inspired shorts will help you showcase your unique personality and athletic
                            spirit.</span>
                    </div>
                </section>

                <section id="prodetails" class="section-separate1">
                    <a name="gymwear1"></a>
                    <div class="single-pro-image">

                        <img src="images/sportWear1.png" width="100%" id="MainImg4" alt="">
                        <div class="small-img-group">
                            <div class="small-img-col">
                                <img src="images/sportWear1.png" width="100%" class="small-img4" alt="">
                            </div>
                            <div class="small-img-col">
                                <img src="images/sportWear1_back.png" width="100%" class="small-img4" alt="">
                            </div>

                        </div>
                    </div>

                    <div class="single-pro-details">
                        <h6> Gym Wear </h6>
                        <h4>Printed Sport Trouser</h4>
                        <h2>LKR.2900/-</h2>
                        <select>
                            <option>Select size</option>
                            <option>S</option>
                            <option>M</option>
                            <option>L</option>
                            <option>XL</option>
                        </select>
                        <input type="number" value="1">
                        <button class="add-cart-btn5">add to cart</button>
                        <h4>Product Details</h4>
                        <span>Our sports-inspired designs are more than just clothing; they're a statement of your
                            passion and
                            athletic spirit.</span>
                    </div>
                </section>


                <section id="prodetails" class="section-separate1">
                    <a name="gymwear2"></a>
                    <div class="single-pro-image">

                        <img src="images/gymwear2.png" width="100%" id="MainImg5" alt="">
                        <div class="small-img-group">
                            <div class="small-img-col">
                                <img src="images/gymwear2.png" width="100%" class="small-img5" alt="">
                            </div>
                            <div class="small-img-col">
                                <img src="images/gymwear_long sleev t shirt.png" width="100%" class="small-img5" alt="">
                            </div>

                        </div>
                    </div>

                    <div class="single-pro-details">
                        <h6> Gym Wear </h6>
                        <h4>Printed Leggings Men Tights</h4>
                        <h2>LKR.6000/-</h2>
                        <select>
                            <option>Select size</option>
                            <option>S</option>
                            <option>M</option>
                            <option>L</option>
                            <option>XL</option>
                        </select>
                        <input type="number" value="1">
                        <button class="add-cart-btn6">add to cart</button>
                        <h4>Product Details</h4>
                        <span>Our clothing isn't just about looking good; it's about feeling great. High-quality
                            materials and
                            innovative designs ensure optimal comfort and performance.</span>
                    </div>
                </section>

                <section id="prodetails" class="section-separate1">
                    <a name="gymwear3"></a>
                    <div class="single-pro-image">

                        <img src="images/sportWear3.png" width="100%" id="MainImg6" alt="">
                        <div class="small-img-group">
                            <div class="small-img-col">
                                <img src="images/sportWear3.png" width="100%" class="small-img6" alt="">
                            </div>
                            <div class="small-img-col">
                                <img src="images/sportWear3_back.png" width="100%" class="small-img6" alt="">
                            </div>

                        </div>
                    </div>

                    <div class="single-pro-details">
                        <h6> Gym Wear </h6>
                        <h4>Men's Dri Fit Sports Pant</h4>
                        <h2>LKR.2500/-</h2>
                        <select>
                            <option>Select size</option>
                            <option>S</option>
                            <option>M</option>
                            <option>L</option>
                            <option>XL</option>
                        </select>
                        <input type="number" value="1">
                        <button class="add-cart-btn7">add to cart</button>
                        <h4>Product Details</h4>
                        <span>Whether you're a seasoned athlete or a casual fan, our sports-inspired apparel will fuel
                            your passion
                            and elevate your game.</span>
                    </div>
                </section>

                <section id="prodetails" class="section-separate1">
                    <a name="gymwear4"></a>
                    <div class="single-pro-image">

                        <img src="images/boxershorts4.png" width="100%" id="MainImg7" alt="">
                        <div class="small-img-group">
                            <div class="small-img-col">
                                <img src="images/boxershorts4.png" width="100%" class="small-img7" alt="">
                            </div>
                            <div class="small-img-col">
                                <img src="images/boxershorts4_back.png" width="100%" class="small-img7" alt="">
                            </div>

                        </div>
                    </div>

                    <div class="single-pro-details">
                        <h6> Gym Wear </h6>
                        <h4>Boxer Shorts for Women</h4>
                        <h2>LKR.2200/-</h2>
                        <select>
                            <option>Select size</option>
                            <option>S</option>
                            <option>M</option>
                            <option>L</option>
                            <option>XL</option>
                        </select>
                        <input type="number" value="1">
                        <button class="add-cart-btn8">add to cart</button>
                        <h4>Product Details</h4>
                        <span>Our diverse range of designs allows you to express your individuality and showcase your
                            love for
                            sports.</span>
                    </div>
                </section>

                <section id="prodetails" class="section-separate1">
                    <a name="gymwear5"></a>
                    <div class="single-pro-image">

                        <img src="images/sportwear5.png" width="100%" id="MainImg8" alt="">
                        <div class="small-img-group">
                            <div class="small-img-col">
                                <img src="images/sportwear5.png" width="100%" class="small-img8" alt="">
                            </div>
                            <div class="small-img-col">
                                <img src="images/sportwear5_back.png" width="100%" class="small-img8" alt="">
                            </div>

                        </div>
                    </div>

                    <div class="single-pro-details">
                        <h6> Gym Wear </h6>
                        <h4>Mens Running Dry Athletic Short with Liner</h4>
                        <h2>LKR.3300/-</h2>
                        <select>
                            <option>Select size</option>
                            <option>S</option>
                            <option>M</option>
                            <option>L</option>
                            <option>XL</option>
                        </select>
                        <input type="number" value="1">
                        <button class="add-cart-btn9">add to cart</button>
                        <h4>Product Details</h4>
                        <span>Our designs seamlessly transition from the field to the street, making them perfect for
                            any
                            occasion.</span>
                    </div>
                </section>

                <section id="prodetails" class="section-separate1">
                    <a name="gymwear6"></a>
                    <div class="single-pro-image">

                        <img src="images/sportwear6.png" width="100%" id="MainImg9" alt="">
                        <div class="small-img-group">
                            <div class="small-img-col">
                                <img src="images/sportwear6.png" width="100%" class="small-img9" alt="">
                            </div>
                            <div class="small-img-col">
                                <img src="images/sportwear6_back.png" width="100%" class="small-img9" alt="">
                            </div>

                        </div>
                    </div>

                    <div class="single-pro-details">
                        <h6> Gym Wear </h6>
                        <h4>Cotton Unisex Bottom Trouser</h4>
                        <h2>LKR.2500/-</h2>
                        <select>
                            <option>Select size</option>
                            <option>S</option>
                            <option>M</option>
                            <option>L</option>
                            <option>XL</option>
                        </select>
                        <input type="number" value="1">
                        <button class="add-cart-btn10">add to cart</button>
                        <h4>Product Details</h4>
                        <span>Wear our sports-inspired clothing and feel the adrenaline rush.</span>
                    </div>
                </section>

                <section id="prodetails" class="section-separate1">
                    <a name="gymwear7"></a>
                    <div class="single-pro-image">

                        <img src="images/sportBra8.png" width="100%" id="MainImg10" alt="">
                        <div class="small-img-group">
                            <div class="small-img-col">
                                <img src="images/sportBra8.png" width="100%" class="small-img10" alt="">
                            </div>
                            <div class="small-img-col">
                                <img src="images/sportBra8_back.png" width="100%" class="small-img10" alt="">
                            </div>

                        </div>
                    </div>

                    <div class="single-pro-details">
                        <h6> Gym Wear </h6>
                        <h4>Classic Sports Bras</h4>
                        <h2>LKR.3000/-</h2>
                        <select>
                            <option>Select size</option>
                            <option>S</option>
                            <option>M</option>
                            <option>L</option>
                            <option>XL</option>
                        </select>
                        <input type="number" value="1">
                        <button class="add-cart-btn11">add to cart</button>
                        <h4>Product Details</h4>
                        <span>Become part of a community of sports enthusiasts and fashion-forward individuals.</span>
                    </div>
                </section>

                <section id="prodetails" class="section-separate1">
                    <a name="gymwear8"></a>
                    <div class="single-pro-image">

                        <img src="images/sportBra7.png" width="100%" id="MainImg11" alt="">
                        <div class="small-img-group">
                            <div class="small-img-col">
                                <img src="images/sportBra7.png" width="100%" class="small-img11" alt="">
                            </div>
                            <div class="small-img-col">
                                <img src="images/sportBra7_back.png" width="100%" class="small-img11" alt="">
                            </div>

                        </div>
                    </div>

                    <div class="single-pro-details">
                        <h6> Gym Wear </h6>
                        <h4>Nature Special Sport Bras</h4>
                        <h2>LKR.3500/-</h2>
                        <select>
                            <option>Select size</option>
                            <option>S</option>
                            <option>M</option>
                            <option>L</option>
                            <option>XL</option>
                        </select>
                        <input type="number" value="1">
                        <button class="add-cart-btn12">add to cart</button>
                        <h4>Product Details</h4>
                        <span>This high-quality athletic apparel, tailored for women, is a product of our company.
                            Designed with
                            comfort in mind, it offers exceptional performance and style.</span>
                    </div>
                </section>




            </div>
        </div>
        <div class="cartTab">
            <h1>Shopping Cart</h1>
            <div class="hrCart">
                <hr>
            </div>
            <div class="totalPrice"></div>
            <div class="btn"></div>
            <div class="totalPrice2"></div>
            <div class="btn"></div>
            <div class="totalPrice3"></div>
            <div class="btn"></div>
            <div class="totalPrice4"></div>
            <div class="btn"></div>
            <div class="totalPrice5"></div>
            <div class="btn"></div>
            <div class="totalPrice6"></div>
            <div class="btn"></div>
            <div class="totalPrice7"></div>
            <div class="btn"></div>
            <div class="totalPrice8"></div>
            <div class="btn"></div>
            <div class="totalPrice9"></div>
            <div class="btn"></div>
            <div class="totalPrice10"></div>
            <div class="btn"></div>
            <div class="totalPrice11"></div>
            <div class="btn"></div>
            <div class="totalPrice12"></div>
            <div class="btn"></div>
            <div class="ListCart">

                <div class="footerBtn">
                    <button class="close">CLOSE</button>
                    <a href="order_form.php"><button class="checkOut">CHECK OUT</button></a>
                </div>
            </div>

        </div>
    </div>

    <script>
        let iconCart = document.querySelector('.icon-cart');
        let closeCart = document.querySelector('.close');
        let body = document.querySelector('body');
        let addCartBtn1 = document.querySelector('.add-cart-btn1')
        let addCartBtn2 = document.querySelector('.add-cart-btn2')
        let addCartBtn3 = document.querySelector('.add-cart-btn3')
        let addCartBtn4 = document.querySelector('.add-cart-btn4')
        let addCartBtn5 = document.querySelector('.add-cart-btn5')
        let addCartBtn6 = document.querySelector('.add-cart-btn6')
        let addCartBtn7 = document.querySelector('.add-cart-btn7')
        let addCartBtn8 = document.querySelector('.add-cart-btn8')
        let addCartBtn9 = document.querySelector('.add-cart-btn9')
        let addCartBtn10 = document.querySelector('.add-cart-btn10')
        let addCartBtn11 = document.querySelector('.add-cart-btn11')
        let addCartBtn12 = document.querySelector('.add-cart-btn12')

        iconCart.addEventListener('click', () => {
            body.classList.toggle('showCart')
        })
        closeCart.addEventListener('click', () => {
            body.classList.toggle('showCart')
        })

        //    addCartBtn1.addEventListener('click',()=>{
        //       alert('LKR. 2500');
        //    });

        addCartBtn1.addEventListener('click', () => {
            // Get the element with class 'cartTab'
            let cartTab = document.querySelector('.cartTab');

            // Find the element where you want to display the price (e.g., with class 'totalPrice')
            let totalPriceElement = cartTab.querySelector('.totalPrice'); // Replace with your actual class

            // If the element exists, update its content with the alert value
            if (totalPriceElement) {
                totalPriceElement.textContent = "Printed T-shirt - LKR. 2500"; // Update with your actual price variable
            } else {
                // Handle the case where the element is not found (optional)
                console.warn("Element with class 'totalPrice' not found in cartTab");
            }
        });

        addCartBtn2.addEventListener('click', () => {
            // Get the element with class 'cartTab'
            let cartTab = document.querySelector('.cartTab');

            // Find the element where you want to display the price (e.g., with class 'totalPrice')
            let totalPriceElement = cartTab.querySelector('.totalPrice2'); // Replace with your actual class

            // If the element exists, update its content with the alert value
            if (totalPriceElement) {
                totalPriceElement.textContent = "Printed CropTop - LKR. 2000"; // Update with your actual price variable
            } else {
                // Handle the case where the element is not found (optional)
                console.warn("Element with class 'totalPrice' not found in cartTab");
            }
        });

        addCartBtn3.addEventListener('click', () => {
            // Get the element with class 'cartTab'
            let cartTab = document.querySelector('.cartTab');

            // Find the element where you want to display the price (e.g., with class 'totalPrice')
            let totalPriceElement = cartTab.querySelector('.totalPrice3'); // Replace with your actual class

            // If the element exists, update its content with the alert value
            if (totalPriceElement) {
                totalPriceElement.textContent = "New Arrivals 4 - Oversize Latest - LKR. 2200"; // Update with your actual price variable
            } else {
                // Handle the case where the element is not found (optional)
                console.warn("Element with class 'totalPrice' not found in cartTab");
            }
        });

        addCartBtn4.addEventListener('click', () => {
            // Get the element with class 'cartTab'
            let cartTab = document.querySelector('.cartTab');

            // Find the element where you want to display the price (e.g., with class 'totalPrice')
            let totalPriceElement = cartTab.querySelector('.totalPrice4'); // Replace with your actual class

            // If the element exists, update its content with the alert value
            if (totalPriceElement) {
                totalPriceElement.textContent = "New Arrivals 4 - Printed Shorts - LKR. 2300"; // Update with your actual price variable
            } else {
                // Handle the case where the element is not found (optional)
                console.warn("Element with class 'totalPrice' not found in cartTab");
            }
        });

        addCartBtn5.addEventListener('click', () => {
            // Get the element with class 'cartTab'
            let cartTab = document.querySelector('.cartTab');

            // Find the element where you want to display the price (e.g., with class 'totalPrice')
            let totalPriceElement = cartTab.querySelector('.totalPrice5'); // Replace with your actual class

            // If the element exists, update its content with the alert value
            if (totalPriceElement) {
                totalPriceElement.textContent = "Printed Sport Trouser - LKR. 2900"; // Update with your actual price variable
            } else {
                // Handle the case where the element is not found (optional)
                console.warn("Element with class 'totalPrice' not found in cartTab");
            }
        });

        addCartBtn6.addEventListener('click', () => {
            // Get the element with class 'cartTab'
            let cartTab = document.querySelector('.cartTab');

            // Find the element where you want to display the price (e.g., with class 'totalPrice')
            let totalPriceElement = cartTab.querySelector('.totalPrice6'); // Replace with your actual class

            // If the element exists, update its content with the alert value
            if (totalPriceElement) {
                totalPriceElement.textContent = "Printed Leggings Men Tights - LKR. 6000"; // Update with your actual price variable
            } else {
                // Handle the case where the element is not found (optional)
                console.warn("Element with class 'totalPrice' not found in cartTab");
            }
        });

        addCartBtn7.addEventListener('click', () => {
            // Get the element with class 'cartTab'
            let cartTab = document.querySelector('.cartTab');

            // Find the element where you want to display the price (e.g., with class 'totalPrice')
            let totalPriceElement = cartTab.querySelector('.totalPrice7'); // Replace with your actual class

            // If the element exists, update its content with the alert value
            if (totalPriceElement) {
                totalPriceElement.textContent = "Men's Dri Fit Sports Pant - LKR. 2500"; // Update with your actual price variable
            } else {
                // Handle the case where the element is not found (optional)
                console.warn("Element with class 'totalPrice' not found in cartTab");
            }
        });

        addCartBtn8.addEventListener('click', () => {
            // Get the element with class 'cartTab'
            let cartTab = document.querySelector('.cartTab');

            // Find the element where you want to display the price (e.g., with class 'totalPrice')
            let totalPriceElement = cartTab.querySelector('.totalPrice8'); // Replace with your actual class

            // If the element exists, update its content with the alert value
            if (totalPriceElement) {
                totalPriceElement.textContent = "Boxer Shorts for Women - LKR. 2200"; // Update with your actual price variable
            } else {
                // Handle the case where the element is not found (optional)
                console.warn("Element with class 'totalPrice' not found in cartTab");
            }
        });

        addCartBtn9.addEventListener('click', () => {
            // Get the element with class 'cartTab'
            let cartTab = document.querySelector('.cartTab');

            // Find the element where you want to display the price (e.g., with class 'totalPrice')
            let totalPriceElement = cartTab.querySelector('.totalPrice9'); // Replace with your actual class

            // If the element exists, update its content with the alert value
            if (totalPriceElement) {
                totalPriceElement.textContent = "Mens Running Dry Athletic Short with Liner - LKR. 3300"; // Update with your actual price variable
            } else {
                // Handle the case where the element is not found (optional)
                console.warn("Element with class 'totalPrice' not found in cartTab");
            }
        });

        addCartBtn10.addEventListener('click', () => {
            // Get the element with class 'cartTab'
            let cartTab = document.querySelector('.cartTab');

            // Find the element where you want to display the price (e.g., with class 'totalPrice')
            let totalPriceElement = cartTab.querySelector('.totalPrice10'); // Replace with your actual class

            // If the element exists, update its content with the alert value
            if (totalPriceElement) {
                totalPriceElement.textContent = "Cotton Unisex Bottom Trouser - LKR.2500"; // Update with your actual price variable
            } else {
                // Handle the case where the element is not found (optional)
                console.warn("Element with class 'totalPrice' not found in cartTab");
            }
        });

        addCartBtn11.addEventListener('click', () => {
            // Get the element with class 'cartTab'
            let cartTab = document.querySelector('.cartTab');

            // Find the element where you want to display the price (e.g., with class 'totalPrice')
            let totalPriceElement = cartTab.querySelector('.totalPrice11'); // Replace with your actual class

            // If the element exists, update its content with the alert value
            if (totalPriceElement) {
                totalPriceElement.textContent = "Classic Sports Bras - LKR.3000"; // Update with your actual price variable
            } else {
                // Handle the case where the element is not found (optional)
                console.warn("Element with class 'totalPrice' not found in cartTab");
            }
        });

        addCartBtn12.addEventListener('click', () => {
            // Get the element with class 'cartTab'
            let cartTab = document.querySelector('.cartTab');

            // Find the element where you want to display the price (e.g., with class 'totalPrice')
            let totalPriceElement = cartTab.querySelector('.totalPrice12'); // Replace with your actual class

            // If the element exists, update its content with the alert value
            if (totalPriceElement) {
                totalPriceElement.textContent = "Nature Special Sport Bras - LKR.3500"; // Update with your actual price variable
            } else {
                // Handle the case where the element is not found (optional)
                console.warn("Element with class 'totalPrice' not found in cartTab");
            }
        });
    </script>

    <script src="Single-pro-script.js"></script>

</body>

</html>